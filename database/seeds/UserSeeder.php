<?php

namespace Database\Seeds;

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
        //

        DB::table('users')->insert([
            'name' => 'Sally Brown',
            'email'  => 'admin@gmail.com',
            'email_verified_at'  => date("Y-m-d H:i:s"),
            'password'  => bcrypt('12341234'),
            'created_at'  => date("Y-m-d H:i:s"),
        ]);
    }
}
