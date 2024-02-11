<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    public function index()
    {
        return view('user.pendaftaran.index', [
            'activeTab' => 'pendaftaran'
        ]);
    }
}
