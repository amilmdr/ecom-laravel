<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB;
use Illuminate\support\Facades\hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
        //   'name'=>'amil manandhar',
        //   'email'=>'amilmdr502@gmail.com',
        //   'password'=>hash::make('admin')
        'name'=>'Amdika manandhar',
          'email'=>'Ambika502@gmail.com',
          'password'=>hash::make('admin')

      ]);
    }
}
