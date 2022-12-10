<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Login extends BaseController
{
    public function index()
    {
        $UserModel = new \App\Models\UserModel();
        $login = $this->request->getPost('login');

        if ($login) {
            $member_username = $this->request->getPost('member_username');
            $member_password = $this->request->getPost('member_password');

            if ($member_username == '' or $member_password == '') {
                $err = "silahkan masukan username dan password";
            }
            if (empty($err)) {
                $dataMember = $UserModel->where("member_username", $member_username)->first();
                if ($dataMember['member_password'] != md5($member_password)) {
                    $err = "password tidak sesuai";
                }
            }
            if (empty($err)) {
                $dataSesi = [
                    'id_user' => $dataMember['id_user'],
                    'member_username' => $dataMember['member_username'],
                    'member_password' => $dataMember['member_password'],
                ];
                session()->set($dataSesi);
                return redirect()->to('user');
            }
            if ($err) {
                session()->setFlashdata('member_username', $member_username);
                session()->setFlashdata('error', $err);
                return redirect()->to("login");
            }
        }
        return view('Login_View');
    }
}
