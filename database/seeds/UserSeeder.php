<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Francisco Andrés',
            'email' => 'fran@correo.com',
            'password' => bcrypt('laravel'),
        ]);
    }
}
