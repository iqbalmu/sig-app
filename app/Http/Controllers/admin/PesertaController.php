<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PesertaController extends Controller
{
    public function index()
    {
        return view('admin.peserta.index', [
            'activeTab' => 'peserta'
        ]);
    }
}
