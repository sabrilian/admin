<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengguna;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    public function getProductsFromApi()
    {
        // Memanggil API eksternal
        $response = Http::get('http://dp-be.vercel.app/api/users');
        $response2 =Http::get('http://dp-be.vercel.app/api/addresses');

        // Cek apakah request berhasil
        if ($response->successful()) {
            // Ambil data dari respons API
            $users = $response->json();
                // Ambil data dari respons API
                $address = $response2->json();
                $data = [];
                foreach ($users as $user){
                 $data2 = [];
                 array_push($data2,$user['name'], $user['email'],$user['hp'],$user['profilePhoto']['url']);
                foreach($address as $address){
                    // if($address['user']==$user['_id']){
                    //      array_push($data2,$address['user']);
                        
                    // }
                    // else{
                    //     array_push($data2,'');
                    // }
                    // $alam=$address['user'];
                    $alamat=$user['_id'];
                    dump($address['user']);
                }
                array_push($data,$data2);


                }

            // Lanjutkan dengan mengirim data ke view atau mengolahnya
            return view('admin.products.pengguna', compact('data') );
        } else {
            // Tampilkan pesan error jika API gagal
            return response()->json(['error' => 'Failed to fetch data'], 500);
        }


    }
}
