<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function foodBeverage() { return "<h1>Daftar Makanan & Minuman</h1>"; }
    public function beautyHealth() { return "<h1>Daftar Kecantikan & Kesehatan</h1>"; }
    public function homeCare() { return "<h1>Daftar Perawatan Rumah</h1>"; }
    public function babyKid() { return "<h1>Daftar Bayi & Anak-anak</h1>"; }
}
