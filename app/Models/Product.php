<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Faker\Factory;

class Product extends Model
{
    use HasFactory;

    public static function getFakeDataProducts(){

        $products = [];
        $faker = Factory::create();
        for ($i=0; $i < 12; $i++) {
            $products[$i]['name']= $faker->firstname;
            $products[$i]['price']= $faker->firstname;
         }
        return $products;
    }
}