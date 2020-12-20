<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class kseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
        DB::table('yazars')->insert([
            'adi'=>"mert",
            'soyadi'=>"alkınoğlu",
            'yasi'=>"23",

        ]);
        DB::table('kategoris')->insert([
            'kategoriadi'=>"mert",
            

        ]);
        DB::table('yayinevis')->insert([
            'yayineviadi'=>"bilgeyayinevi",
            'adresi'=>"kayseri",
           

        ]);

        DB::table('kitapbilgis')->insert([
            'isbnno'=>"123",
            'kitapadi'=>"alkıasdasdnoğlu",
            'kategoriid'=>"1",
            'yayineviid'=>"1",
            'yazarid'=>"1",
            'dil'=>"asdf",
            'sayfasayisi'=>"23",
            ]);
      
    }
}
