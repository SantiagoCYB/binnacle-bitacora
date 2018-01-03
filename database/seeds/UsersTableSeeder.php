<?php

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
		DB::table('users')->insert([
			'name' => "Que Pato",
			'email' => "tales@que.pato",
			'password' => bcrypt('pass'),
			'remember_token' => str_random(10),
        ]);
		factory(App\User::class, 50)->create();
    }
}
