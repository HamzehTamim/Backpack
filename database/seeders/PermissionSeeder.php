<?php

namespace Database\Seeders;
use DB;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([
            'name' => 'Edit Users List',
            'guard_name' => 'web',
            'created_at' => Carbon::now(),
        ]);
        DB::table('permissions')->insert([
            'name' => 'Report List',
            'guard_name' => 'web',
            'created_at' => Carbon::now(),
        ]);
        DB::table('model_has_permissions')->insert([
            'permission_id' => 1,
            'model_type' => 'App\Models\User',
            'model_id' => 1,
        ]);
    }
}
