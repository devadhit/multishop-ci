<?php

namespace App\Controllers;

class c_home extends BaseController
{
    public function index()
    {
        return view('v_template2');
    }

    public function wellcome()
    {
        $data['content_view']="v_wellcome.php";
        return view('v_template',$data);
    }
}
