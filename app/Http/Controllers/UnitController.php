<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UnitController extends Controller
{
    public function index()
    {
        $data = array(
            'title' => 'Data Unit',
            'menuUnit' => 'active',

        );
        return view('admin/unit/index', $data);
    }
}
