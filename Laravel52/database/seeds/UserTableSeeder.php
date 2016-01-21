<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        factory(App\User::class)->create([
            'name' => 'Mario',
            'email' => 'mario650m@gmail.com',
            'password' => bcrypt('metaloco750'),
            'role' => 'admin'
        ]);
        factory(App\User::class,49)->create();
    }
}
