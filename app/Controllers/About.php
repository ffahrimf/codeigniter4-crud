<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class About extends Controller
{
    public function index()
    {

        $session = session();
        return view('about');
    }


    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
}
