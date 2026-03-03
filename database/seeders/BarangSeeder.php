<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
        ['barang_id' => 1, 'kategori_id' => 1, 'barang_kode' => 'BRG01', 'barang_nama' => 'Indomie Goreng', 'harga_beli' => 2500, 'harga_jual' => 3000],
        ['barang_id' => 2, 'kategori_id' => 1, 'barang_kode' => 'BRG02', 'barang_nama' => 'Mie Sedap Soto', 'harga_beli' => 2400, 'harga_jual' => 2900],
        ['barang_id' => 3, 'kategori_id' => 2, 'barang_kode' => 'BRG03', 'barang_nama' => 'Aqua 600ml', 'harga_beli' => 3000, 'harga_jual' => 4000],
        ['barang_id' => 4, 'kategori_id' => 2, 'barang_kode' => 'BRG04', 'barang_nama' => 'Teh Pucuk', 'harga_beli' => 3500, 'harga_jual' => 4500],
        ['barang_id' => 5, 'kategori_id' => 3, 'barang_kode' => 'BRG05', 'barang_nama' => 'Paracetamol', 'harga_beli' => 5000, 'harga_jual' => 7000],
        ['barang_id' => 6, 'kategori_id' => 3, 'barang_kode' => 'BRG06', 'barang_nama' => 'Betadine', 'harga_beli' => 12000, 'harga_jual' => 15000],
        ['barang_id' => 7, 'kategori_id' => 4, 'barang_kode' => 'BRG07', 'barang_nama' => 'Sapu Ijuk', 'harga_beli' => 15000, 'harga_jual' => 20000],
        ['barang_id' => 8, 'kategori_id' => 4, 'barang_kode' => 'BRG08', 'barang_nama' => 'Pel Lantai', 'harga_beli' => 25000, 'harga_jual' => 30000],
        ['barang_id' => 9, 'kategori_id' => 5, 'barang_kode' => 'BRG09', 'barang_nama' => 'Chitato', 'harga_beli' => 8000, 'harga_jual' => 10000],
        ['barang_id' => 10, 'kategori_id' => 5, 'barang_kode' => 'BRG10', 'barang_nama' => 'Pringles', 'harga_beli' => 18000, 'harga_jual' => 22000],
        ['barang_id' => 11, 'kategori_id' => 1, 'barang_kode' => 'BRG11', 'barang_nama' => 'Beras 1kg', 'harga_beli' => 13000, 'harga_jual' => 15000],
        ['barang_id' => 12, 'kategori_id' => 2, 'barang_kode' => 'BRG12', 'barang_nama' => 'Coca Cola', 'harga_beli' => 5000, 'harga_jual' => 6000],
        ['barang_id' => 13, 'kategori_id' => 3, 'barang_kode' => 'BRG13', 'barang_nama' => 'Masker 3ply', 'harga_beli' => 10000, 'harga_jual' => 12000],
        ['barang_id' => 14, 'kategori_id' => 4, 'barang_kode' => 'BRG14', 'barang_nama' => 'Ember Plastik', 'harga_beli' => 15000, 'harga_jual' => 18000],
        ['barang_id' => 15, 'kategori_id' => 5, 'barang_kode' => 'BRG15', 'barang_nama' => 'Oreo', 'harga_beli' => 7000, 'harga_jual' => 9000],
    ];
    DB::table('m_barang')->insert($data);
    }
}
