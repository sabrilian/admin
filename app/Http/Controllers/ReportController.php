<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
        // Contoh data laporan, Anda bisa menggantinya dengan data dari database
        $reports = [
            ['date' => '2024-01-01', 'type' => 'Sales', 'total' => 150],
            ['date' => '2024-01-02', 'type' => 'Expenses', 'total' => 75],
            ['date' => '2024-01-03', 'type' => 'Profit', 'total' => 100],
        ];

        return view('admin.products.reports', compact('reports'));
    }
}
