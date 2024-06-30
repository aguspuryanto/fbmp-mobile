<?php

namespace App\Controllers;

use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\RESTful\ResourceController;

use App\Models\ProductModel;

class Produk extends ResourceController
{
    private $db;
    public $itemModel;
    
    public function __construct()
    {
        $this->db = \Config\Database::connect();
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
        $data['products'] = $model->findAll();
        
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
        //
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
        $validation->setRules(['gambar' => 'required']);
        $validation->setRules(['nama_produk' => 'required']);
        $validation->setRules(['deskripsi' => 'required']);
        $validation->setRules(['harga' => 'required']);
        $validation->setRules(['harga_diskon' => 'required']);
        $validation->setRules(['pstatus' => 'required']);
        $validation->setRules(['label' => 'required']);
        $validation->setRules(['label_color' => 'required']);
        $validation->setRules(['link_order' => 'required']);

        $isDataValid = $validation->withRequest($this->request)->run();
        
        // jika data valid, simpan ke database
        if($isDataValid){

            $model = $this->itemModel; //new ProductModel();
            // $data = $this->request->getPost();
            // echo json_encode($data);

            $file = $this->request->getFile('gambar');

            if ($file->isValid() && !$file->hasMoved()) {
                $fileName = $file->getRandomName();
                $file->move($uploads_path, $fileName);

                $data = [
                    'gambar' => $fileName,
                    'nama_produk' => $this->request->getVar('nama_produk'),
                    'deskripsi' => trim($this->request->getVar('deskripsi')),
                    'harga' => $this->request->getVar('harga'),
                    'harga_diskon' => $this->request->getVar('harga_diskon'),
                    'pstatus' => $this->request->getVar('pstatus'),
                    'label' => $this->request->getVar('label'),
                    'label_color' => $this->request->getVar('label_color'),
                    'link_order' => $this->request->getVar('link_order'),
                    'created_at' => date("Y-m-d H:i:s"),
                ];

                // if($this->request->getVar('id')){
                //     $data['id'] = $this->request->getVar('id');
                // }

                // echo json_encode($data);
                // $sql = "INSERT INTO products (" . implode(', ', array_keys($data)) . ") SELECT '" . implode("', '", array_values($data)) . "'";
                // echo $sql;

                // $model->save($data);
                // $model->insert($data);
                try {
                    // $model->insert($data);
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
        } else {
            return redirect()->to('/produk')->with('msg', '<div class="alert alert-danger" role="alert">' . $validation->listErrors() . '</div>');
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
        $data['product'] = [];

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

        $data['product'] = $model->find($id);
        // echo json_encode($data['product']);

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
        $validation->setRules(['nama_produk' => 'required']);
        $validation->setRules(['deskripsi' => 'required']);
        $validation->setRules(['harga' => 'required']);
        // $validation->setRules(['harga_diskon' => 'required']);
        // $validation->setRules(['pstatus' => 'required']);
        // $validation->setRules(['label' => 'required']);
        // $validation->setRules(['label_color' => 'required']);
        // $validation->setRules(['link_order' => 'required']);

        $isDataValid = $validation->withRequest($this->request)->run();
        
        // jika data valid, simpan ke database
        if($isDataValid){

            $model = $this->itemModel; //new ProductModel();
            $file = $this->request->getFile('gambar');

            $data = [
                // 'gambar' => $fileName,
                'nama_produk' => $this->request->getVar('nama_produk'),
                'deskripsi' => $this->request->getVar('deskripsi'),
                'harga' => $this->request->getVar('harga'),
                'harga_diskon' => $this->request->getVar('harga_diskon'),
                'pstatus' => $this->request->getVar('pstatus'),
                'label' => $this->request->getVar('label'),
                'label_color' => $this->request->getVar('label_color'),
                'link_order' => $this->request->getVar('link_order'),
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
        } else {
            return redirect()->to('/produk')->with('msg', '<div class="alert alert-danger" role="alert">' . $validation->listErrors() . '</div>');
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
