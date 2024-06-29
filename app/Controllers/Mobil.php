<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Mobil_model;


class Mobil extends Controller
{
    public function index()
    {
        $model = new Mobil_model;
        $data['title'] = 'Data Mobil';
        $data['getMobil'] = $model->getMobil();
        echo view('header_view', $data);
        echo view('/mobil/mobil_view', $data);
        echo view('footer_view', $data);
    }


    public function tambah()
    {
        $data['title'] = 'Tambah Data Mobil';
        echo view('header_view', $data);
        echo view('/mobil/tambah_mobil_view', $data);
        echo view('footer_view', $data);
    }

    public function add()
    {
        $model = new Mobil_model;
        $data = array(
            'id' => $this->request->getPost('id'),
            'nama_mobil' => $this->request->getPost('nama_mobil'),
            'buatan' => $this->request->getPost('buatan'),
            'tahun' => $this->request->getPost('tahun'),
            'harga_sewa' => $this->request->getPost('harga_sewa')
        );
        $model->saveMobil($data);
        echo '<script>
                alert("Sukses Tambah Data Mobil");
                window.location="' . base_url('mobil/view') . '"
            </script>';
    }

    public function edit($id)
    {
        $model = new Mobil_model();
        $getMobil = $model->getMobil($id)->getRow();
        if (isset($getMobil)) {
            $data['mobil'] = $getMobil;
            $data['title'] = 'Edit ' . $getMobil->nama_mobil;


            echo view('header_view', $data);
            echo view('/mobil/edit_mobil_view', $data);
            echo view('footer_view', $data);
        } else {


            echo '<script>
                    alert("ID Mobil ' . $id . ' Tidak ditemukan");
                    window.location="' . base_url('mobil/view') . '"
                </script>';
        }
    }

    public function update()
    {
        $model = new Mobil_model();
        $id = $this->request->getPost('id');
        $data = array(
            'nama_mobil' => $this->request->getPost('nama_mobil'),
            'buatan' => $this->request->getPost('buatan'),
            'tahun' => $this->request->getPost('tahun'),
            'harga_sewa' => $this->request->getPost('harga_sewa')
        );
        $model->editMobil($data, $id);
        echo '<script>
                alert("Sukses Edit Data Mobil");
                window.location="' . base_url('mobil/view') . '"
            </script>';
    }

    public function hapus($id)
    {
        $model = new Mobil_model();
        $getMobil = $model->getMobil($id)->getRow();
        if (isset($getMobil)) {
            $model->hapusMobil($id);
            echo '<script>
                    alert("Hapus Data Mobil Sukses");
                    window.location="' . base_url('mobil/view') . '"
                </script>';
        } else {


            echo '<script>
                    alert("Hapus Gagal !, ID Mobil ' . $id . ' Tidak ditemukan");
                    window.location="' . base_url('mobil/view') . '"
                </script>';
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
}
