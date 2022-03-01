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
        //$this->call(UsersTableSeeder::class);//one table
        //multi table
        //$this->call(BrandsTableSeeder::class);
        //$this->call(UsersTableSeeder2::class);
        //$this->call(UsersTableSeeder3::class);


        //or
        $this->call([
UsersTableSeeder::class,
        BrandsTableSeeder::class,
        SubCategoryTableSeeder::class,
        CategoryTableSeeder::class,
        ]);
    }
}
