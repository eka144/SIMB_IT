<?php

namespace App\Controllers;

class KelolaUser extends BaseController
{
    public function index()
    {
        // Data yang akan dikirim ke tampilan
        $data = [
            'file' => 'Admin/index'
        ];
        
        // Memuat tampilan dengan data
        return view('/layout1/index', $data);
    }
}
