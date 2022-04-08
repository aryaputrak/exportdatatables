<?php

namespace App\Controllers;

class unlock1 extends BaseController
{
    public function index()
    {
        $dataunlock1 = new \App\Models\Modelunlock1();
        $data['dataunlock1'] = $dataunlock1->orderBy('date')->findAll();
        return view('view',$data);
    }
}

