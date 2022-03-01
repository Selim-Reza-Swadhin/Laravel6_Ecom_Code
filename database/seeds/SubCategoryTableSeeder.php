<?php
use App\SubCategory;
use Illuminate\Database\Seeder;

class SubCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          $faker = Faker\Factory::create();

        foreach(range(1, 15) as $index){
        SubCategory::create([
            'cat_id' =>rand(1, 9),
            'sub_cat' =>$faker->unique()->name,
            'status' => '1',
        ]);
        }
    }
}
