<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class KelolaProduk extends BaseController
{
    public function produk()
    {
        echo view('layout1/header');
        echo view('layout1/navbar');
        echo view('admin/produk/produk');
    }

    public function create()
    {
        echo view('admin/produk/create_produk');
    }
}
