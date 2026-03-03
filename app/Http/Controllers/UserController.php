<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // Coba akses model UserModel
        $user = UserModel::all(); // Ambil semua data dari tabel m_user
        return view('user', ['data' => $user]);
    }
}
