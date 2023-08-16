<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CreateUserTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
          ['title' => 'child', 'name' => 'Child', 'level' => 0],
          ['title' => 'parent', 'name' => 'Parent', 'level' => 2],
          ['title' => 'admin', 'name' => 'Admin', 'level' => 1],
      ];
      DB::table('user_type')->insert($data);
    }
}
