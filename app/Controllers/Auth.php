<?php

namespace App\Controllers;

use App\Models\UsersModel;
use App\Models\SiswaModel;
use Dompdf\Dompdf;


class Auth extends BaseController
{
    protected $usersModel;
    protected $siswaModel;
    public function __construct()
    {
        $this->usersModel = new UsersModel();
        $this->siswaModel = new SiswaModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Login | PSB Online'
        ];
        return view('auth/login', $data);
    }

    public function register()
    {
        $data = [
            'title' => 'Register | PSB Online'
        ];
        return view('auth/register', $data);
    }

    public function createAcc()
    {
        $inputEmail = $this->request->getVar('email');
        $user = $this->usersModel->getUsers($inputEmail);
        if ($inputEmail == $user['email']) {
            session()->setFlashdata('pesan', 'Email telah terdaftar, silahkan gunakan email lain.');
            return redirect()->to('/register')->withInput();
        } else if ($this->request->getVar('password') == $this->request->getVar('repassword')) {
            $this->usersModel->save([
                'name' => $this->request->getVar('name'),
                'email' => $this->request->getVar('email'),
                'password' => $this->request->getVar('password'),
                'role' => 'pendaftar'
            ]);
            session()->setFlashdata('pesan', 'Akun berhasil dibuat, silahkan login.');
            return redirect()->to('/');
        } else {
            session()->setFlashdata('pesan', 'Password tidak sama.');
            return redirect()->to('/register')->withInput();
        }
    }

    public function authenticate()
    {
        $inputEmail = $this->request->getVar('email');
        $inputPassword = $this->request->getVar('password');
        $user = $this->usersModel->getUsers($inputEmail);

        if ($user) {
            $password = $user['password'];
            if ($inputPassword == $password) {
                if ($user['role'] == "admin") {
                    $dataSession = [
                        'id' => $user['id'],
                        'name' => $user['name'],
                        'email' => $user['email'],
                        'role' => "admin",
                        'logged_in' => TRUE
                    ];
                    session()->set($dataSession);
                    return redirect()->to('/admin');
                } else if ($user['role'] == "pendaftar") {
                    $dataSession = [
                        'id' => $user['id'],
                        'name' => $user['name'],
                        'email' => $user['email'],
                        'role' => "pendaftar",
                        'logged_in' => TRUE
                    ];
                    session()->set($dataSession);
                    return redirect()->to('/siswa');
                }
            } else {
                session()->setFlashdata('pesan', 'Password salah.');
                return redirect()->to('/');
            }
        } else {
            session()->setFlashdata('pesan', 'Username tidak ditemukan.');
            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}
