<?php

namespace App\Controllers;

use App\Models\UsersModel;
use App\Models\SiswaModel;
use Dompdf\Dompdf;

class Home extends BaseController
{
	protected $usersModel;
	protected $siswaModel;
	public function __construct()
	{
		$this->usersModel = new UsersModel();
		$this->siswaModel = new SiswaModel();
	}
	public function admin()
	{
		return view('admin/homeadmin');
	}

	public function aktivasi()
	{
		$datasiswa = [
			'akun' => $this->siswaModel->getSiswa(),

		];
		return view('admin/aktivasi', $datasiswa);
	}
	public function tabeluser()
	{
		$datauser = [
			'akun' => $this->usersModel->getUsers()
		];
		return view('admin/tabeluser', $datauser);
	}
	public function siswa()
	{
		$name = session()->get('name');
		$checkUser = $this->siswaModel->checkUser($name);
		if ($name == $checkUser['nama']) {
			return redirect()->to('/home/home');
		}
		$datasiswa = [
			'siswa' => $this->usersModel->getUsers($name),
			'status' => $this->siswaModel->getStatus($name),
		];
		return view('siswa/homesiswa', $datasiswa);
	}
	public function home()

	{
		$name = session()->get('name');
		$status = [

			'status' => $this->siswaModel->getStatus($name),
		];
		return view('siswa/home', $status);
	}

	public function save()
	{
		$this->siswaModel->save([
			'nama' => $this->request->getVar('nama'),
			'nisn' => $this->request->getVar('nisn'),
			'alamat' => $this->request->getVar('alamat'),
			'tgl' => $this->request->getVar('tgl'),
			'jeniskelamin' => $this->request->getVar('jeniskelamin'),
			'agama' => $this->request->getVar('agama')
		]);
		session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');

		return redirect()->to('/siswa');
	}
	public function detail($nama)
	{
		$datasiswa = [
			'detail' => $this->siswaModel->getSiswa($nama)
		];
		return view('admin/detail', $datasiswa);
	}
	public function edit($nama)
	{
		$datasiswa = [
			'detail' => $this->siswaModel->getSiswa($nama)
		];
		return view('admin/edit', $datasiswa);
	}
	public function update($id)
	{
		$this->siswaModel->save([
			'id' => $id,
			'nama' => $this->request->getVar('nama'),
			'nisn' => $this->request->getVar('nisn'),
			'alamat' => $this->request->getVar('alamat'),
			'tgl' => $this->request->getVar('tgl'),
			'jeniskelamin' => $this->request->getVar('jeniskelamin'),
			'agama' => $this->request->getVar('agama'),
			'status_pendaftaran' => $this->request->getVar('status_pendaftaran')
		]);
		return redirect()->to('/aktivasi');
	}

	public function printpdf()
	{
		$datasiswa = [
			'datasiswa' => $this->siswaModel->AllData()
		];
		$html =  view('print', $datasiswa);

		// instantiate and use the dompdf class
		$dompdf = new Dompdf();
		$dompdf->loadHtml($html);

		// (Optional) Setup the paper size and orientation
		$dompdf->setPaper('A4', 'potrait');

		// Render the HTML as PDF
		$dompdf->render();

		// Output the generated PDF to Browser
		$dompdf->stream();
	}
	public function printsiswa()
	{
		$name = session()->get('name');
		$data = [
			'nama' => $this->siswaModel->getNama($name),
			'nisn' => $this->siswaModel->getNisn($name),
			'alamat' => $this->siswaModel->getAlamat($name),
			'tgl' => $this->siswaModel->getTgl($name),
			'jeniskelamin' => $this->siswaModel->getJk($name),
			'agama' => $this->siswaModel->getAgama($name),
			'status' => $this->siswaModel->getStatus($name),
		];
		$html =  view('siswaprint', $data);

		// instantiate and use the dompdf class
		$dompdf = new Dompdf();
		$dompdf->loadHtml($html);

		// (Optional) Setup the paper size and orientation
		$dompdf->setPaper('A4', 'potrait');

		// Render the HTML as PDF
		$dompdf->render();

		// Output the generated PDF to Browser
		$dompdf->stream();
	}
}
