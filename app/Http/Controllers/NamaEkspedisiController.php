<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NamaEkspedisiController extends Controller
{
    public function index()
    {
        $data = array(
            'title' => 'Data NamaEkspedisi',
            'menuNamaEkspedisi' => 'active',

        );
        return view('admin/namaekspedisi/index', $data);
    }
}
