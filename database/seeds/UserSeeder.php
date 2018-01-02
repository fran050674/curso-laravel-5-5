<?php

use App\Profession;
use App\User;
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
        $professionId = Profession::where('title', 'Desarrolador back-end')->value('id');
        // dd($professionId);
        User::create([
            'name' => 'Francisco Andrés',
            'email' => 'fran@correo.com',
            'password' => bcrypt('laravel'),
            'profession_id' => $professionId,
            'is_admin' => true,
        ]);
        User::create([
            'name' => 'Maria Lozano',
            'email' => 'maria@correo.com',
            'password' => bcrypt('laravel'),
            'profession_id' => $professionId,
        ]);
        User::create([
            'name' => 'Irene Andrés',
            'email' => 'irene@correo.com',
            'password' => bcrypt('laravel'),
            'profession_id' => null,
        ]);
    }
}
