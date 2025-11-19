<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContractController extends Controller
{
    public function index()
    {
        $data = array(
            'title' => 'Data Contract',
            'menuContract' => 'active',

        );
        return view('admin/contract/index', $data);
    }
}
