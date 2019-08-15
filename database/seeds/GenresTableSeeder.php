<?php

use Illuminate\Database\Seeder;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert(['genre' => 'Action']);
        DB::table('genres')->insert(['genre' => 'Adventure']);
        DB::table('genres')->insert(['genre' => 'Comedy']);
        DB::table('genres')->insert(['genre' => 'Crime']);
        DB::table('genres')->insert(['genre' => 'Drama']);
        DB::table('genres')->insert(['genre' => 'Fantasy']);
        DB::table('genres')->insert(['genre' => 'Historical']);
        DB::table('genres')->insert(['genre' => 'Horror']);
        DB::table('genres')->insert(['genre' => 'Mystery']);
        DB::table('genres')->insert(['genre' => 'Philosophical']);
        DB::table('genres')->insert(['genre' => 'Political']);
        DB::table('genres')->insert(['genre' => 'Romance']);
        DB::table('genres')->insert(['genre' => 'Science fiction']);
        DB::table('genres')->insert(['genre' => 'Thriller']);
        DB::table('genres')->insert(['genre' => 'Western']);
    }
}