<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LowonganController extends Controller
{
    public function index()
    {
        return view('admin.lowongan.index', [
            'activeTab' => 'lowongan'
        ]);
    }

    public function create()
    {
        return view('admin.lowongan.create', [
            'activeTab' => 'lowongan'
        ]);
    }
}
