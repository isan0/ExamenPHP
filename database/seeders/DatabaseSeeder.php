<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ProductSeeder::class);
    }
}

class ProductSeeder extends Seeder
{
    public function run()
    {
        DB::table('products')->insert([
            'name'=>'Lego Creator 3 en 1',
            'img'=>'../public/img/lego1.jpeg',
            'description'=>'Permite experimentar con casa, autos, aviones y criaturas',
            'price'=>29.99,
        ]);

        DB::table('products')->insert([
            'name'=>'Lego City',
            'img'=>'../public/img/lego2.jpeg',
            'description'=>'Reproduce todos los elementos que el niño observa en la vida cotidiana',
            'price'=>54.99,
        ]);

        DB::table('products')->insert([
            'name'=>'Lego Friends',
            'img'=>'../public/img/lego3.jpeg',
            'description'=>'Son amigas que viven en una ciudad con montones de animales adorables, tiendas y casas',
            'price'=>9.99,
        ]);

        DB::table('products')->insert([
            'name'=>'Lego Classic',
            'img'=>'../public/img/lego4.jpeg',
            'description'=>'Ayuda a los niños a descubrir sus habilidades de construccion creativa',
            'price'=>74.99,
        ]);
    }
}