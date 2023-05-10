<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PizzaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $ingredients = DB::table('ingredients')->get();


        DB::table('pizzas')->insert(
            [
                [
                    'name' => "Pepperoni",
                    'pizza_price' => 3,
                ],
                [
                    'name' => "Supreme",
                    'pizza_price' => 8.25,
                ],
                [
                    'name' => "Hawaiian",
                    'pizza_price' => 3.75,
                ],
                [
                    'name' => "Vegetarian",
                    'pizza_price' => 5.25,
                ],
                [
                    'name' => "Capricciosa",
                    'pizza_price' => 5.25,
                ],
                [
                    'name' => "BBQ MeatLovers",
                    'pizza_price' => 9,
                ],
                
            ]
        );

    }
}
