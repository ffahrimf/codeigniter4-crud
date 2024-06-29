<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Dashboard extends Controller
{
    public function index()
    {

        $data['title'] = 'Dashboard';
        echo view('header_view', $data);
        echo view('/dashboard', $data);
        echo view('footer_view', $data);
    }


    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
}
