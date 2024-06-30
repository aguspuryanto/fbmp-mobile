<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Dashboard extends BaseController
{
    public function index()
    {
        // $session = session();
        // echo "Welcome back, ".$session->get('name');
        if (!session()->get('logged_in')) {
            return redirect()->to('/login');
        }

        return view('admin/dashboard');
    }
}
