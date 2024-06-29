<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\User_model;


class User extends Controller
{
    public function index()
    {
        $model = new User_model;
        $data['title'] = 'Data User';
        $data['getUser'] = $model->getUser();
        echo view('header_view', $data);
        echo view('/user/user_view', $data);
        echo view('footer_view', $data);
    }


    public function tambah()
    {
        $data['title'] = 'Tambah Data User';
        echo view('header_view', $data);
        echo view('/user/tambah_user_view', $data);
        echo view('footer_view', $data);
    }

    public function add()
    {
        $model = new User_model;
        $data = array(
            'user_id' => $this->request->getPost('user_id'),
            'user_name' => $this->request->getPost('user_name'),
            'user_email' => $this->request->getPost('user_email'),
            'user_password' => password_hash($this->request->getPost('user_password'), PASSWORD_DEFAULT),
            'user_created_at' => $this->request->getPost('user_created_at')
        );
        $model->saveUser($data);
        echo '<script>
            alert("Sukses Tambah Data User");
            window.location="' . base_url('user/view') . '"
        </script>';
    }


    public function edit($id)
    {
        $model = new User_model();
        $getUser = $model->getUser($id)->getRow();
        if (isset($getUser)) {
            $data['user'] = $getUser;
            $data['title'] = 'Edit ' . $getUser->user_name;


            echo view('header_view', $data);
            echo view('/user/edit_user_view', $data);
            echo view('footer_view', $data);
        } else {


            echo '<script>
                    alert("ID User ' . $id . ' Tidak ditemukan");
                    window.location="' . base_url('user/view') . '"
                </script>';
        }
    }

    public function update()
    {
        $model = new User_model();
        $id = $this->request->getPost('user_id');
        $data = array(
            'user_name' => $this->request->getPost('user_name'),
            'user_email' => $this->request->getPost('user_email'),
            'user_password' => password_hash($this->request->getPost('user_password'), PASSWORD_DEFAULT),
            'user_created_at' => $this->request->getPost('user_created_at')
        );
        $model->editUser($data, $id);
        echo '<script>
            alert("Sukses Edit Data User");
            window.location="' . base_url('user/view') . '"
        </script>';
    }


    public function hapus($id)
    {
        $model = new User_model();
        $getUser = $model->getUser($id)->getRow();
        if (isset($getUser)) {
            $model->hapusUser($id);
            echo '<script>
                    alert("Hapus Data User Sukses");
                    window.location="' . base_url('user/view') . '"
                </script>';
        } else {


            echo '<script>
                    alert("Hapus Gagal !, ID User ' . $id . ' Tidak ditemukan");
                    window.location="' . base_url('user/view') . '"
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
