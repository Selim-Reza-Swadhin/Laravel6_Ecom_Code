<?php
use App\Brand;
use Illuminate\Database\Seeder;

class BrandsTableSeeder extends Seeder
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
        Brand::create([
            'brand_name' =>$faker->unique()->name,
            'brand_slug' => $faker->name,
            'status' => '1',
        ]);
        }
    }
}
