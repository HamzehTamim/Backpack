<?php

namespace Database\Seeders;
use DB;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

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
            'name' => 'Amer',
            'email' => 'Amer@email.com',
            'password' => bcrypt('password'),
            'email_verified_at'=>Carbon::now(),
            'created_at' => Carbon::now(),
        ]);

    }
}
