<?php

use Illuminate\Database\Seeder;

class CastTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('casts')->insert(['full_name' => 'Leonardo DiCaprio','avatar_url' => 'https://m.media-amazon.com/images/M/MV5BMjI0MTg3MzI0M15BMl5BanBnXkFtZTcwMzQyODU2Mw@@._V1_.jpg']);
        DB::table('casts')->insert(['full_name' => 'Joseph Gordon-Levitt','avatar_url' => 'https://m.media-amazon.com/images/M/MV5BZTk5ZGQ0OGQtYWYwMy00ZTE1LWE0NWUtMTQ2MmYxMWUxZWM3XkEyXkFqcGdeQXVyMjAyNzk2Nw@@._V1_SY1000_CR0,0,714,1000_AL_.jpg']);
        DB::table('casts')->insert(['full_name' => 'Ellen Page','avatar_url' => 'https://m.media-amazon.com/images/M/MV5BMTU3MzM3MDYzMV5BMl5BanBnXkFtZTcwNzk1Mzc3NA@@._V1_SY1000_CR0,0,668,1000_AL_.jpg']);
        DB::table('casts')->insert(['full_name' => 'Tom Hardy','avatar_url' => 'https://m.media-amazon.com/images/M/MV5BMjI5MTYwODM1Ml5BMl5BanBnXkFtZTgwOTc4ODE2MjE@._V1_SY1000_CR0,0,664,1000_AL_.jpg']);
        DB::table('casts')->insert(['full_name' => 'Ken Watanabe','avatar_url' => 'https://m.media-amazon.com/images/M/MV5BMTQzMTUzNjc4Nl5BMl5BanBnXkFtZTcwMTUyODU2Mw@@._V1_.jpg']);
        DB::table('casts')->insert(['full_name' => 'Dileep Rao','avatar_url' => 'https://m.media-amazon.com/images/M/MV5BMTI5Nzc2NTc2MF5BMl5BanBnXkFtZTcwMDM2MTc1Mg@@._V1_.jpg']);
        DB::table('casts')->insert(['full_name' => 'Cillian Murphy','avatar_url' => 'https://m.media-amazon.com/images/M/MV5BMTQ5NjI1MzE4NV5BMl5BanBnXkFtZTgwNDAxNzQ2OTE@._V1_SY1000_CR0,0,781,1000_AL_.jpg']);
        DB::table('casts')->insert(['full_name' => 'Tom Berenger','avatar_url' => 'https://m.media-amazon.com/images/M/MV5BMTk1OTQ5MzUzM15BMl5BanBnXkFtZTgwMDUxMTY1NDE@._V1_SY1000_CR0,0,666,1000_AL_.jpg']);
        DB::table('casts')->insert(['full_name' => 'Marion Cotillard','avatar_url' => 'https://m.media-amazon.com/images/M/MV5BMTQxNTEzNTkwNF5BMl5BanBnXkFtZTcwNzQ2NDIwOQ@@._V1_SY1000_CR0,0,664,1000_AL_.jpg']);
        DB::table('casts')->insert(['full_name' => 'Pete Postlethwaite','avatar_url' => 'https://m.media-amazon.com/images/M/MV5BMTMyMjIxMTQ2NV5BMl5BanBnXkFtZTYwNDQ0NTE1._V1_.jpg']);
        DB::table('casts')->insert(['full_name' => 'Michael Caine','avatar_url' => 'https://m.media-amazon.com/images/M/MV5BMjAwNzIwNTQ4Ml5BMl5BanBnXkFtZTYwMzE1MTUz._V1_.jpg']);
        DB::table('casts')->insert(['full_name' => 'Lukas Haas','avatar_url' => 'https://m.media-amazon.com/images/M/MV5BMTQ3MjU1MDMxM15BMl5BanBnXkFtZTgwODk5ODE4MDE@._V1_SY1000_CR0,0,738,1000_AL_.jpg']);
    }
}
