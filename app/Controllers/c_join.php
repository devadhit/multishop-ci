<?php namespace App\Controllers;

use App\models\m_join;

class c_join extends BaseController
{
    public function index()
    {
        $model = new m_join();
        $data['siswa'] = $model->getSiswa();
        echo view('view_siswa',$data);
    }
}
?>