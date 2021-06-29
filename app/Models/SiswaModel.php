<?php

namespace App\Models;

use CodeIgniter\Model;

class SiswaModel extends Model
{
    protected $table = 'siswa';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'nisn', 'alamat', 'tgl', 'jeniskelamin', 'agama', 'status_pendaftaran'];

    public function getSiswa($nama = false)
    {
        if ($nama == false) {
            return $this->findAll();
        }
        return $this->where(['nama' => $nama])->first();
    }

    public function getUser($id = false)
    {
        if ($id === false) {
            return $this->table('siswa')
                ->get()
                ->getResultArray();
        } else {
            return $this->table('siswa')
                ->where('id', $id)
                ->get()
                ->getRowArray();
        }
    }
    public function getNama($name)
    {
        return $this->select('nama')->where(['nama' => $name])->first();
    }
    public function getNisn($name)
    {
        return $this->select('nisn')->where(['nama' => $name])->first();
    }
    public function getAlamat($name)
    {
        return $this->select('alamat')->where(['nama' => $name])->first();
    }
    public function getTgl($name)
    {
        return $this->select('tgl')->where(['nama' => $name])->first();
    }
    public function getJk($name)
    {
        return $this->select('jeniskelamin')->where(['nama' => $name])->first();
    }
    public function getAgama($name)
    {
        return $this->select('agama')->where(['nama' => $name])->first();
    }
    public function getStatus($name)
    {
        return $this->select('status_pendaftaran')->where(['nama' => $name])->first();
    }


    public function checkUser($nama)
    {
        return $this->select('nama')
            ->where('nama', $nama)
            ->first();
    }

    public function AllData()
    {
        return $this->db->table('siswa')->get()->getResultArray();
    }
}
