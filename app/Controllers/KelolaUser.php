<?php

namespace App\Controllers;

class KelolaUser extends BaseController
{
    public function index()
    {
        // Data yang akan dikirim ke tampilan
        // $data = [
        //     'file' => 'Admin/index'
        // ];
        
        // // Memuat tampilan dengan data
        echo view('layout1/header');
        echo view('layout1/navbar');
        echo view('admin/index');
        echo view('layout1/footer');
            
        // return view('/layout1/index');
    }
}
