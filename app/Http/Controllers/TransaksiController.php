<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
        $data = array(
            'title' => 'Data Transaksi',
            'menuTransaksi' => 'active',

        );
        return view('admin/transaksi/index', $data);
    }
}
