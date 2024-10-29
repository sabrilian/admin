<?php

namespace App\Http\Controllers;

use App\Models\Orderan;
use App\Models\Produk;
use Illuminate\Support\Facades\Http;

class OrderanController extends Controller
{
    public function getProductsFromApi()
    {
        // Memanggil API eksternal
        $response1 = Http::get('http://dp-be.vercel.app/api/order');

        // Cek apakah request berhasil
        if ($response1->successful()) {
            // Ambil data dari respons API
            $order = $response1->json();

            // Lanjutkan dengan mengirim data ke view atau mengolahnya
            return view('admin.products.index', compact('order'));
        } else {
            // Tampilkan pesan error jika API gagal
            return response()->json(['error' => 'Failed to fetch data'], 500);
        }
    }
}
