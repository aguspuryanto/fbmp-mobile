<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\RESTful\ResourceController;

class Akun extends ResourceController
{
    private $db;
    private $akun;
    
    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->akun = new UserModel();
        helper(["url","form"]);
    }

    /**
     * Return an array of resource objects, themselves in array format.
     *
     * @return ResponseInterface
     */
    public function index()
    {
        if (!session()->get('logged_in')) {
            return redirect()->to('/login');
        }

        $data['title'] = 'List Akun';
        $data['akuns'] = $this->akun->where('status', 'aktif')->findAll();

        return view('admin/akun/index', $data);
    }

    /**
     * Return the properties of a resource object.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Return a new resource object, with default properties.
     *
     * @return ResponseInterface
     */
    public function store()
    {
        //

        // lakukan validasi: 'username', 'email', 'password', 'role'
        $validation =  \Config\Services::validation();
        $validation->setRules(['username' => 'required']);
        // $validation->setRules(['email' => 'required']);
        $validation->setRules(['password' => 'required']);
        // $validation->setRules(['role' => 'required']);
        $validation->setRules(['project_name' => 'required']);

        $isDataValid = $validation->withRequest($this->request)->run();
        if (!$isDataValid) {
            // return redirect()->back()->withInput();
            return redirect()->to('/akun/create')->with('msg', '<div class="alert alert-danger" role="alert">' . $validation->listErrors() . '</div>');
        } else {
            // $data = $this->request->getPost();
            $data['username'] = $this->request->getVar('username');
            // $data['email'] = $this->request->getVar('email');
            $data['password'] = password_hash($this->request->getVar('password'), PASSWORD_BCRYPT);
            // $data['role'] = $this->request->getVar('role');
            $data['status'] = 'aktif';
            $data['project_name'] = $this->request->getVar('project_name');
            $data['created_at'] = date('Y-m-d H:i:s');
            // echo json_encode($data); //{"username":"tesya","email":"tesya@gmail.com","password":"$2y$10$1U\/msyAOOEa6ye4njXXOfuIBW.2cdh8NqV9Ya3GokZh0O4B3i2O0u","role":"user","created_at":"2024-06-30 09:56:04"}

            $this->db->table('users')->insert($data);
            // $this->akun->save($data);
            // $this->akun->insert($data);
            return redirect()->to('/akun')->with('msg', '<div class="alert alert-success" role="alert">Akun baru ditambahkan</div>');
        }
    }

    /**
     * Create a new resource object, from "posted" parameters.
     *
     * @return ResponseInterface
     */
    public function create()
    {
        $data['title'] = 'Tambah Akun';
        $data['akun'] = [];

        return view('admin/akun/_create', $data);
    }

    /**
     * Return the editable properties of a resource object.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function edit($id = null)
    {
        //
        $model = $this->akun; //new ProductModel();
        if (!$model->find($id)) {
            return redirect()->to('/akun')->with('msg', '<div class="alert alert-danger" role="alert">Data tidak ditemukan</div>');
        }

        $data['title'] = 'Data Akun';
        $data['akun'] = $model->find($id);
        // echo json_encode($data['akun']);

        return view('admin/akun/_edit', $data);
    }

    /**
     * Add or update a model resource, from "posted" properties.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function update($id = null)
    {
        //
    }

    /**
     * Delete the designated resource object from the model.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function delete($id = null)
    {
        //
    }
}
