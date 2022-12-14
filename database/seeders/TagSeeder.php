<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            [
                'name'=>'PHP',
                'slug'=>'php',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'name'=>'Laravel',
                'slug'=>'laravel',
                'created_at'=>now(),
                'updated_at'=>now(),

            ],
            [
                'name'=>'Javascript',
                'slug'=>'javascript',
                'created_at'=>now(),
                'updated_at'=>now(),

            ],

        ]);
    }
}
