<?php
use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //Manually created users
        // User::create([
        //     'name' => 'Selim',
        //     'email' => 'selim@gmail.com',
        //     'password' => bcrypt('12101989'),
        // ]);


        $this->defaultUserInsert();//default password created success

        $faker = Faker\Factory::create();

        foreach(range(1, 10) as $index){
             User::create([
            'name'=>$faker->name,
            'email'=>$faker->unique()->email,
            'password'=>bcrypt($faker->password),
        ]);
        }
    }

    public function defaultUserInsert(){
        User::create([
            'name' => 'Selim',
            'email' => 'selim@gmail.com',
            'password' => bcrypt('12101989'),
        ]);
    }
}
