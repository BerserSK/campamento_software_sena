<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1. Leer el archivo users.json
        $json=File::get("database/_data/courses.json");
        //2. Convertir el contenido json a un arreglo en php
        $arreglo=json_decode($json);
        //var_dump($arreglo);
        //3. Recorrer el arreglo en php
        foreach($arreglo as $c){
            //4. Por cada uno de los elementos del arreglo crear un usuario
            $newCourse = new Course();
            $newCourse->title = $c->title;
            $newCourse->description = $c->description;
            $newCourse->weeks = $c->weeks;
            $newCourse->enroll_cost = $c->enroll_cost;
            $newCourse->minimum_skill = $c->minimum_skill;
            $newCourse->bootcamp_id= $c->bootcamp_id;
            $newCourse->save();
        }
    }
}
