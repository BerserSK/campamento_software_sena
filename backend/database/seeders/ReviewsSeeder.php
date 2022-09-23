<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1. Leer el archivo users.json
        $json=File::get("database/_data/reviews.json");
        //2. Convertir el contenido json a un arreglo en php
        $arreglo=json_decode($json);
        //var_dump($arreglo);
        //3. Recorrer el arreglo en php
        foreach($arreglo as $r){
            //4. Por cada uno de los elementos del arreglo crear un usuario
            $newReview = new Review();
            $newReview->title = $r->title;
            $newReview->text = $r->text;
            $newReview->rating = $r->rating;
            $newReview->user_id = $r->user_id;
            $newReview->bootcamp_id= $r->bootcamp_id;
            $newReview->save();
        }
    }
}
