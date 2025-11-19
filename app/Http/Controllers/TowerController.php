<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TowerController extends Controller
{
    public function index()
    {
        $data = array(
            'title' => 'Data Tower',
            'menuTower' => 'active',

        );
        return view('admin/tower/index', $data);
    }
}
