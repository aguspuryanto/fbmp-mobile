<?php

namespace App\Controllers;

use App\Models\ProductModel;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\RESTful\ResourceController;

class Products extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format.
     *
     * @return ResponseInterface
     */
    public function index()
    {
        $model = new ProductModel();
        $data = $model->findAll();
        return $this->respond($data);
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
        $model = new ProductModel();
        $data = $model->find(['id'  => $id]);
        if (!$data) return $this->failNotFound('No Data Found');
        return $this->respond($data[0]);
    }

    /**
     * Return a new resource object, with default properties.
     *
     * @return ResponseInterface
     */
    public function new()
    {
        //
    }

    /**
     * Create a new resource object, from "posted" parameters.
     *
     * @return ResponseInterface
     */
    public function create()
    {
        $uploads_path = $this->ensureUploadsDirectoryExists();
        helper(['form']);
        // 'akun','title','description','label','target','price','category','condition','gambar'
        $rules = [
            'akun' => 'required',
            'title' => 'required',
            'description' => 'required',
            'label' => 'required',
            'target' => 'required',
            'price' => 'required',
            'category' => 'required',
            'condition' => 'required',
        ];

        $data = [
            'akun' => $this->request->getVar('akun'),
            'title' => $this->request->getVar('title'),
            'description' => $this->request->getVar('description'),
            'label' => $this->request->getVar('label'),
            'target' => $this->request->getVar('target'),
            'price' => $this->request->getVar('price'),
            'category' => $this->request->getVar('category'),
            'condition' => $this->request->getVar('condition'),
        ];

        $file = $this->request->getFile('gambar');

        if ($file->isValid() && !$file->hasMoved()) {
            $fileName = $file->getRandomName();
            $file->move($uploads_path, $fileName);
            $data['gambar'] = $fileName;
        }
        
        if(!$this->validate($rules)) return $this->fail($this->validator->getErrors());
        $model = new ProductModel();
        $model->save($data);
        $response = [
            'status' => 201,
            'error' => null,
            'messages' => [
                'success' => 'Data Inserted'
            ]
        ];
        return $this->respondCreated($response);
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
        helper(['form']);
        $rules = [
            'title' => 'required',
            'price' => 'required'
        ];
        $data = [
            'title' => $this->request->getVar('title'),
            'price' => $this->request->getVar('price')
        ];
        
        if(!$this->validate($rules)) return $this->fail($this->validator->getErrors());
        $model = new ProductModel();
        $find = $model->find(['id' => $id]);
        if(!$find) return $this->failNotFound('No Data Found');
        $model->update($id, $data);
        
        $response = [
            'status' => 200,
            'error' => null,
            'messages' => [
                'success' => 'Data updated'
            ]
        ];
        return $this->respond($response);
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
        $find = $model->find(['id' => $id]);
        if(!$find) return $this->failNotFound('No Data Found');
        $model->delete($id);
        
        $response = [
            'status' => 200,
            'error' => null,
            'messages' => [
                'success' => 'Data deleted'
            ]
        ];
        return $this->respond($response);
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
