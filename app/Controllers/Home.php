<?php

namespace App\Controllers;

use App\Models\UserModel;

class Home extends BaseController
{
    public function index(): string
    {
        // return view('welcome_message');
        helper(['form']);
        return view('login');
    }
 
    public function auth()
    {
        $session = session();
        $model = new UserModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $data = $model->where('email', $email)->first();
        if($data){
            $pass = $data['password'];
            $verify_pass = password_verify($password, $pass);
            if($verify_pass){
                $ses_data = [
                    'id'       => $data['id'],
                    'name'     => $data['username'],
                    'email'    => $data['email'],
                    'logged_in'     => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/dashboard');
            }else{
                // $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to('/login')->with('msg', '<div class="alert alert-danger" role="alert">Wrong Password</div>');
            }
        }else{
            // $session->setFlashdata('msg', 'Email not Found');
            return redirect()->to('/login')->with('msg', '<div class="alert alert-danger" role="alert">Email not Found</div>');
        }
    }
 
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
}
