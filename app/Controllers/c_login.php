<?php namespace App\Controllers;

use App\models\m_login;

class c_login extends BaseController
{
    public function index()
    {
        return view('v_login');
    }

    public function login()
    {
        $users = new m_login();
        $login = $this->request->getPost('login');
        if($login){
            $id_pgw = $this->request->getPost('id_pgw');
            $nama = $this->request->getPost('nama');
            $password = $this->request->getPost('password');

            if($id_pgw=='' && $nama == '' && $password == ''){
                $err = "Silahkan masukkan username dan password";
            }
            if(empty($err)){
                $dataMember = $users->where("id_pgw",$id_pgw && "nama",$nama)->first();
                if($dataMember['password']!= md5($password))
                {
                    $err ="Password tidak sesuai";
                }
            }
            if(empty($err)){
                $dataSesi = [
                    'id_pgw'=>$dataMember['id_pgw'],
                    'nama' =>$dataMember['nama'],
                    'password' =>$dataMember['password'],
                ];
                session()->set($dataSesi);
                return redirect()->to('/barang');
            }
            if($err){
                session()->setFlashdata('nama',$nama);
                session()->setFlashdata('error',$err);
                return redirect()->to("/viewLogin");
            }
        }
    }

    public function logout(){
        session()->destroy();
        return redirect()->to('/viewLogin');
    }
}
?>