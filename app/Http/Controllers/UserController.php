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
        // $data = [
        //     'level_id' => 2,
        //     'username' => 'manager_dua',
        //     'nama' => 'Manager 2',
        //     'password' => Hash::make('12345')
        // ];
            $data = [
                'level_id' => 2,
                'username' => 'manager_tiga',
                'nama' => 'Manager 3',
                'password' => Hash::make('12345')
            ];
            UserModel::create($data);
        

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
