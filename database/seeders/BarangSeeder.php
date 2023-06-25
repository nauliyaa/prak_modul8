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
        DB::table('barangs')->insert([
            [
                'kode_barang' => 'K1',
                'nama_barang' => 'Kursi',
                'harga_barang' => 12000,
                'deskripsi_barang'=> 'kursi putih',
                'satuan_barang' => 1
            ],
            [
                'kode_barang' => 'S1',
                'nama_barang' => 'Sepatu',
                'harga_barang' => 100000,
                'deskripsi_barang'=> 'Sepatu merah celana biru ku tak peduli peduli',
                'satuan_barang' => 2
            ],
            [
                'kode_barang' => 'B1',
                'nama_barang' => 'Baju',
                'harga_barang' => 300000,
                'deskripsi_barang'=> 'baju putih',
                'satuan_barang' => 3
            ],
        ]);
    }
}