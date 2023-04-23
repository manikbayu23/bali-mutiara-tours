<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index()
    {
        return view('admin.index', [
            "title" => "Dashboard Admin",
            "description" => "Halaman Dashboard Admin",
            "keywords" => "Dashboard Admin"
        ]);
    }
}