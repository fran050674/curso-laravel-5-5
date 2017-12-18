<?php

use App\Profession;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::insert('INSERT INTO professions (title) VALUES (?)',['Desarrolador web']);
        // DB::table('professions')->insert([
        //     'title' => 'Desarrolador back-end',
        // ]);

        // DB::table('professions')->insert([
        //     'title' => 'Desarrolador front-end',
        // ]);

        // DB::table('professions')->insert([
        //     'title' => 'Diseñador web',
        // ]);
        Profession::create([
            'title' => 'Desarrolador back-end',
        ]);
        Profession::create([
            'title' => 'Desarrolador front-end',
        ]);
        Profession::create([
            'title' => 'Diseñador web',
        ]);
    }
}
