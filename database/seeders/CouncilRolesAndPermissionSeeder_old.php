<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CouncilRolesAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([
            'id' => '18',
            'name' => 'View Activity Calendar',
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        DB::table('permissions')->insert([
            'id' => '19',
            'name' => 'Create Activity Calendar',
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        DB::table('permissions')->insert([
            'id' => '20',
            'name' => 'Update Activity Calendar',
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        DB::table('permissions')->insert([
            'id' => '22',
            'name' => 'Delete Activity Calendar',
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        DB::table('permissions')->insert([
            'id' => '23',
            'name' => 'Restore Activity Calendar',
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        DB::table('permissions')->insert([
            'id' => '25',
            'name' => 'Force Delete Activity Calendar',
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);

        DB::table('permissions')->insert([
            'id' => '26',
            'name' => 'View Agenda General Meeting',
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        DB::table('permissions')->insert([
            'id' => '27',
            'name' => 'Create Agenda General Meeting',
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        DB::table('permissions')->insert([
            'id' => '28',
            'name' => 'Update Agenda General Meeting',
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        DB::table('permissions')->insert([
            'id' => '29',
            'name' => 'Delete Agenda General Meeting',
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        DB::table('permissions')->insert([
            'id' => '30',
            'name' => 'Restore Agenda General Meeting',
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        DB::table('permissions')->insert([
            'id' => '31',
            'name' => 'Force Delete Agenda General Meeting',
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);


    }
}
