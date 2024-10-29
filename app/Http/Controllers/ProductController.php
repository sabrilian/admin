<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function halaman()
    {
        $order = Product::all(); // Mengambil semua data produk
        return view('admin.products.halaman', compact('order')); // Mengembalikan view dengan variabel $products
    }
    public function getProductHtml()
{
    $products = Product::all(); // Ambil data dari database
    return view('products.partials.product_list', compact('products')); // Render view
}

}
