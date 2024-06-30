<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use CodeIgniter\HTTP\ResponseInterface;

class Dashboard extends BaseController
{
    private $db;
    private $akun;
    
    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->akun = new UserModel();
        helper(["url","form"]);
    }

    public function index()
    {
        // $session = session();
        // echo "Welcome back, ".$session->get('name');
        if (!session()->get('logged_in')) {
            return redirect()->to('/login');
        }

        $data['title'] = 'Dashboard';
        $data['stat'] = ['akun' => $this->akun->where('status', 'aktif')->countAllResults(), 'iklan' => 0];

        return view('admin/dashboard', $data);
    }
}
