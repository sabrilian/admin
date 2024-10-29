<?php

namespace App\Http\Controllers;

use App\Models\Orderan;
use App\Models\produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Http;

class ProdukController extends Controller
{
    public function getProductsFromApi()
    {
        // Memanggil API eksternal
        $response = Http::get('http://dp-be.vercel.app/api/product');

        // Cek apakah request berhasil
        if ($response->successful()) {
            // Ambil data dari respons API
            $product = $response->json();

            // Lanjutkan dengan mengirim data ke view atau mengolahnya
            return view('admin.products.produk', compact('product'));
        } else {
            // Tampilkan pesan error jika API gagal
            return response()->json(['error' => 'Failed to fetch data'], 500);
        }
    }

}
