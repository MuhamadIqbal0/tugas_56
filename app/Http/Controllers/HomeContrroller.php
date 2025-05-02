<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeContrroller extends Controller
{
    public function index() {
        return "Hallo, Ini adalah Halaman Utama";
    }
}
