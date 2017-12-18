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
        $professionId = Profession::where('title', 'Diseñador web')->value('id');
        // dd($professionId);
        User::create([
            'name' => 'Francisco Andrés',
            'email' => 'fran@correo.com',
            'password' => bcrypt('laravel'),
            'profession_id' => $professionId,
        ]);
    }
}
