<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JenisPaketController extends Controller
{
    public function index()
    {
        $data = array(
            'title' => 'Data JenisPaket',
            'menuJenisPaket' => 'active',

        );
        return view('admin/jenispaket/index', $data);
    }
}
