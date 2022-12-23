<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Login extends BaseController
{
    public function index()
    {
        $UserModel = new \App\Models\UserModel();
        $login = $this->request->getPost('login');
        $dataMember = null;
        if ($login) {
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');

            if ($username == '' or $password == '') {
                $err = "silahkan masukan username dan password";
                session()->setFlashdata('info', 'silahkan masukan username dan password');
                return redirect()->to('/login');
            }
            if (empty($err)) {
                $dataMember = $UserModel->where('username', $username)->first();
                if ($dataMember == null) {
                    $err = "password & Username tidak ada";
                    session()->setFlashdata('info', 'password tidak sesuai');
                    return redirect()->to('/login');
                }

                if ($dataMember['password'] != md5($password)) {
                    $err = "password tidak sesuai";
                    session()->setFlashdata('info', 'password tidak sesuai');
                    redirect()->to('/login');
                }
            }
            if (empty($err)) {
                $dataSesi = [
                    'id_user' => $dataMember['id_user'],
                    'username' => $dataMember['username'],
                    'password' => $dataMember['password'],
                ];
                session()->set($dataSesi);
                return redirect()->to('/admin/property');
            }
            if ($err) {
                session()->setFlashdata('username', $username);
                session()->setFlashdata('error', $err);
                return redirect()->to("login");
            }
        }
        return view('login');
    }
}
