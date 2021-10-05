<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//         \App\Models\User::factory(10)->create();

        DB::table('users')->insert([
            'name' => 'Amer',
            'email' => 'Amer@email.com',
            'password' => bcrypt('password'),
        ]);
////        $id = DB::table('users')
////            ->select('id',0)
////            ->where('name', 'Amer')->get('id');
//
//      $data=  DB::table('users')
//            ->where('name','Amer')
//            ->get('id');
//echo($data->get('id') + 5000);
//die();
//        DB::table('model_has_roles')->insert([
//            'role_id' => '2',
//            'model_type' => 'App\Models\User',
//            'model_id' => $id
//        ]);


    }
}
