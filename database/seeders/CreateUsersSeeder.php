<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      $users = [
        [
           'name'=>'Admin',
           'email'=>'admin@gmail.com',
           'type'=>1,
           'password'=> bcrypt('12345678'),
        ],
        [
           'name'=>'Parent',
           'email'=>'parent@gmail.com',
           'type'=> 2,
           'password'=> bcrypt('12345678'),
        ],
        [
           'name'=>'Child',
           'email'=>'child@gmail.com',
           'type'=>0,
           'password'=> bcrypt('12345678'),
        ],
    ];

      foreach ($users as $key => $user) {
          User::create($user);
      }
    }

}
