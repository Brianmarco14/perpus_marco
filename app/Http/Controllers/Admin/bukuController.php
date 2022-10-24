<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class bukuController extends Controller
{
    public function index()
    {
        return view('admin.buku.index');
    }

    public function create()
    {
        return view('admin.buku.create');
    }
}
