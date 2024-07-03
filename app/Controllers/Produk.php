<?php

namespace App\Controllers;

use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\RESTful\ResourceController;

use App\Models\ProductModel;
use App\Models\UserModel;

class Produk extends ResourceController
{
    private $db;
    private $akun;
    public $itemModel;
    
    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->akun = new UserModel();
        $this->itemModel = new ProductModel();
        helper(["url","form"]);
    }

    /**
     * Return an array of resource objects, themselves in array format.
     *
     * @return ResponseInterface
     */
    public function index()
    {
        $model = $this->itemModel; //new ProductModel();
        $data['akuns'] = $this->akun->findAll();
        $data['products'] = $model->paginate(10);
        $data['pager'] = $model->pager;
        
        return view('admin/products/index', $data);
        // return view('admin/produk');
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
        $model = $this->itemModel; //new ProductModel();
        if (!$model->find($id)) {
            return redirect()->to('/produk')->with('msg', '<div class="alert alert-danger" role="alert">Data tidak ditemukan</div>');
        }

        $data['akuns'] = $this->akun->findAll();
        $data['product'] = $model->find($id);
        $data['categories'] = ['0' => 'Elektronik', '1' => 'Fashion', '2' => 'Makanan'];
        $data['kondisi'] = ['0' => 'Baru', '1' => 'Bekas'];

        return view('admin/products/_edit', $data);
    }

    /**
     * Return the properties of a resource object.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function publish($id = null)
    {
        //
        $ids = $this->request->getVar('ids');
        $rowId = [];
        foreach($ids as $id) {
            $rowId[] = $id;
        }

        $builder = $this->db->table('products');
        // $builder->update($data, ['id' => $id]);                
        try {
                    
            $builder = $this->db->table('products');
            $data = [
                'status' => 1
            ];

            $res = $builder->update($data, ['id' => $id]);
            if (!$res) {
                // throw new \Exception('Could not insert data');
                $resp = ['sukses' => false, 'msg' => 'Data gagal disimpan'];
            }

            echo json_encode($resp);
        } catch (\Exception $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n", var_dump($e->getMessage());
        }

        // echo json_encode($resp);
        return redirect()->to('/produk')->with('msg', '<div class="alert alert-success" role="alert">Data disimpan</div>');
    }

    /**
     * Return a new resource object, with default properties.
     *
     * @return ResponseInterface
     */
    public function store()
    {
        $uploads_path = $this->ensureUploadsDirectoryExists();

        // lakukan validasi
        $validation =  \Config\Services::validation();
        $validation->setRules(['akun' => 'required']);
        $validation->setRules(['title' => 'required']);
        $validation->setRules(['price' => 'required']);
        $validation->setRules(['category' => 'required']);
        $validation->setRules(['condition' => 'required']);
        $validation->setRules(['description' => 'required']);
        $validation->setRules(['label' => 'required']);
        $validation->setRules(['target' => 'required']);
        // $validation->setRules(['gambar' => 'required']);

        $isDataValid = $validation->withRequest($this->request)->run();
        
        // jika data valid, simpan ke database
        if(!$isDataValid){
            // echo $validation->listErrors();
            return redirect()->to('/produk')->with('msg', '<div class="alert alert-danger" role="alert">' . $validation->listErrors() . '</div>');
        } else {

            $file = $this->request->getFile('gambar');

            if ($file->isValid() && !$file->hasMoved()) {
                $fileName = $file->getRandomName();
                $file->move($uploads_path, $fileName);

                $data = [
                    'akun' => $this->request->getVar('akun'),
                    'title' => $this->request->getVar('title'),
                    'description' => trim($this->request->getVar('description')),
                    'label' => $this->request->getVar('label'),
                    'target' => $this->request->getVar('target'),
                    'price' => $this->request->getVar('price'),
                    'category' => $this->request->getVar('category'),
                    'condition' => $this->request->getVar('condition'),
                    'status' => $this->request->getVar('status') ? 1 : 0,
                    'gambar' => $fileName,
                    'created_at' => date("Y-m-d H:i:s"),
                ];
                
                try {
                    
                    $builder = $this->db->table('products');
                    $res = $builder->insert($data);
                    if (!$res) {
                        // throw new \Exception('Could not insert data');
                        return redirect()->to('/produk')->with('msg', '<div class="alert alert-danger" role="alert">Data gagal disimpan</div>');
                    }
                } catch (\Exception $e) {
                    echo 'Caught exception: ',  $e->getMessage(), "\n", var_dump($e->getMessage());
                }
            }

            return redirect()->to('/produk')->with('msg', '<div class="alert alert-success" role="alert">Data disimpan</div>');
        }
    }

    /**
     * Create a new resource object, from "posted" parameters.
     *
     * @return ResponseInterface
     */
    public function create()
    {
        // $model = $this->itemModel; //new ProductModel();
        $data['akuns'] = $this->akun->where('status', 'aktif')->findAll();
        $data['categories'] = [
            '0' => 'Elektronik',
            '1' => 'Fashion',
            '2' => 'Makanan',
        ];
        $data['kondisi'] = [
            '0' => 'Baru',
            '1' => 'Bekas',
        ];

        return view('admin/products/_create', $data);
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
        $model = $this->itemModel; //new ProductModel();
        if (!$model->find($id)) {
            return redirect()->to('/produk')->with('msg', '<div class="alert alert-danger" role="alert">Data tidak ditemukan</div>');
        }

        $data['akuns'] = $this->akun->findAll();
        $data['product'] = $model->find($id);
        $data['categories'] = ['0' => 'Elektronik', '1' => 'Fashion', '2' => 'Makanan'];
        $data['kondisi'] = ['0' => 'Baru', '1' => 'Bekas'];

        return view('admin/products/_edit', $data);
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
        $uploads_path = $this->ensureUploadsDirectoryExists();

        // lakukan validasi
        $validation =  \Config\Services::validation();
        $validation->setRules(['gambar' => 'required']);
        $validation->setRules(['title' => 'required']);
        $validation->setRules(['description' => 'required']);
        $validation->setRules(['price' => 'required']);
        // $validation->setRules(['harga_diskon' => 'required']);
        // $validation->setRules(['pstatus' => 'required']);
        // $validation->setRules(['label' => 'required']);
        // $validation->setRules(['label_color' => 'required']);
        // $validation->setRules(['link_order' => 'required']);

        $isDataValid = $validation->withRequest($this->request)->run();
        
        // jika data valid, simpan ke database
        if(!$isDataValid){
            return redirect()->to('/produk')->with('msg', '<div class="alert alert-danger" role="alert">' . $validation->listErrors() . '</div>');
        } else {
            
            $model = $this->itemModel; //new ProductModel();
            $file = $this->request->getFile('gambar');

            $data = [
                'akun' => $this->request->getVar('akun'),
                'title' => $this->request->getVar('title'),
                'price' => $this->request->getVar('price'),
                'category' => $this->request->getVar('category'),
                'condition' => $this->request->getVar('condition'),
                'description' => trim($this->request->getVar('description')),
                'label' => $this->request->getVar('label'),
                'target' => $this->request->getVar('target'),
                'updated_at' => date("Y-m-d H:i:s"),
            ];

            if ($file->isValid() && !$file->hasMoved()) {
                $fileName = $file->getRandomName();
                $file->move($uploads_path, $fileName);
                $data['gambar'] = $fileName;
            }
            
            if($this->request->getVar('id')){
                // $data['id'] = $this->request->getVar('id');
                $id = $this->request->getVar('id');
            }
            // echo json_encode($data);
            // $model->save($data);
            $model->where('id', $id)->set($data)->update();

            // return redirect()->to(current_url())->with('msg', '<div class="alert alert-success" role="alert">Data disimpan</div>');
            return redirect()->to('/produk')->with('msg', '<div class="alert alert-success" role="alert">Data disimpan</div>');
        }
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
        $model = new ProductModel();
        $model->delete($id);

        return redirect()->to('/produk');
    }

    private function ensureUploadsDirectoryExists()
    {
        $dir = 'uploads/';

        $allowYearMonth = true;
        if($allowYearMonth) {
            $dir .= date('Y') . '/' . date('m') . '/';
        }

        if (!is_dir($dir)) {
            mkdir($dir, 0777, true);
        }

        return $dir;
    }
}
