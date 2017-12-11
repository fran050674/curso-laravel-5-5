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
        $profession = DB::table('professions')->select('id')->first();

        DB::table('users')->insert([
            'name' => 'Francisco Andrés',
            'email' => 'fran@correo.com',
            'password' => bcrypt('laravel'),
            'profession_id' => $profession->id,
        ]);
    }
}
