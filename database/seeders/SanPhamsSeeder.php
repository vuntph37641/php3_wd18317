<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SanPhamsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Su dung query builder de them du lieu mau
        DB::table('san_phams') ->insert([
            [
                'ma_san_pham' => 'SP001',
                'ten_san_pham' => 'IP 15',
                'gia' => 10000,
                'so_luong' => 10,
                'ngay_nhap' => '2024-11-20',
                'mo_ta' => 'Mo ta san pham',
                'trang_thai' => true,
            ],
            [
                'ma_san_pham' => 'SP002',
                'ten_san_pham' => 'IP 15',
                'gia' => 10000,
                'so_luong' => 10,
                'ngay_nhap' => '2024-11-20',
                'mo_ta' => 'Mo ta san pham',
                'trang_thai' => true,
            ]
        ]);
    }
}
