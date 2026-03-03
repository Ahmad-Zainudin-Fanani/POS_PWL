<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        // Langkah 8: Tambah data user dengan Eloquent Model
        $data = [
            'username' => 'customer-1',
            'nama' => 'Pelanggan',
            'password' => Hash::make('12345'), // Mengenkripsi password
            'level_id' => 1
        ];
        UserModel::insert($data); // Tambahkan data ke tabel m_user
        

        // Langkah 10: Update data user
        $dataUpdate = [
            'nama' => 'Pelanggan Pertama',
        ];
        UserModel::where('username', 'customer-1')->update($dataUpdate); // Update data user

        // Ambil semua data dari tabel m_user menggunakan Eloquent
        $user = UserModel::all(); 
        return view('user', ['data' => $user]);
    }
}
