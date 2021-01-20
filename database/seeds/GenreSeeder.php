<?php

use App\Genre;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [['nama'=>'Action'],['nama'=> 'Adventure'],['nama'=> 'Boys Love'],['nama'=> 'Comedy'],['nama'=> 'CEO'],['nama'=> 'Fanfic'],['nama'=> 'Fantasy'],['nama'=> 'Girl Love'],['nama'=> 'Horor']];
        Genre::insert($data);
    }
}
