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
        factory(App\User::class, 5)->create(); //

        App\User::create([
            'status' => '1',
            'role' => '1',
            'name' => 'Luis Daniel',
            'lastname' => 'Manuel',
            'email' => 'luisdaniel_23@hotmail.com',
            'password' => Hash::make('Hola1234')
        ]);

        //
    }
}
