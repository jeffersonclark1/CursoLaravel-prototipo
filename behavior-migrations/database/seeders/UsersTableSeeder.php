<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use LaraDev\Models\Categories;
use LaraDev\Models\User;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        DB::table('users')->insert([
//            'name'=> Str::random(10),
//            'email'=> Str::random(10) . '@laraveldeveloper.com.br',
//            'password'=> bcrypt('demo')
//        ]);
//        User::factory()->count(1)->create();
        return Categories::factory()->count(1)->create()->id;
//        Categories::factory()->count(1)->create();
//        Post::factory()->count(1)->create();
    }
}
