<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function index()
    {
        // Anda bisa memuat data pengaturan dari database atau file konfigurasi
        return view('admin.products.settings');
    }
}
