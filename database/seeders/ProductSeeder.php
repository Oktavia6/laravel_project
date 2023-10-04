<?php

namespace Database\Seeders;

use app\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
           'code'=>'ind0',
           'name'=>'Indomie',
           'price'=>3500
        ])
        Product::create([
            'code'=>'mam4le',
            'name'=>'Mama Lemon',
            'price'=>1000
         ])
         Product::create([
            'code'=>'l1te',
            'name'=>'Lite',
            'price'=>3500
         ])
         Product::create([
            'code'=>'p4lmia',
            'name'=>'Palmia',
            'price'=>6000
         ])
         Product::create([
            'code'=>'n1vea',
            'name'=>'Nivea',
            'price'=>31000
         ])
         Product::create([
            'code'=>'aqu4',
            'name'=>'Aqua',
            'price'=>4000
         ])
    }
}
