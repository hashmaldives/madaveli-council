<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolesAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([
            'id' => '1',
            'name' => 'View User',
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        DB::table('permissions')->insert([
            'id' => '2',
            'name' => 'Create User',
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        DB::table('permissions')->insert([
            'id' => '3',
            'name' => 'Delete User',
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        DB::table('permissions')->insert([
            'id' => '4',
            'name' => 'Update User',
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        DB::table('permissions')->insert([
            'id' => '5',
            'name' => 'Restore User',
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        DB::table('permissions')->insert([
            'id' => '6',
            'name' => 'Access Permission',
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        DB::table('permissions')->insert([
            'id' => '7',
            'name' => 'Access Role',
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        DB::table('permissions')->insert([
            'id' => '8',
            'name' => 'Access Settings',
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        DB::table('permissions')->insert([
            'id' => '9',
            'name' => 'Access Menu',
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        DB::table('permissions')->insert([
            'id' => '10',
            'name' => 'Access Media Hub',
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        DB::table('permissions')->insert([
            'id' => '11',
            'name' => 'View Activity Log',
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        DB::table('permissions')->insert([
            'id' => '12',
            'name' => 'Create Activity Log',
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        DB::table('permissions')->insert([
            'id' => '13',
            'name' => 'Update Activity Log',
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        DB::table('permissions')->insert([
            'id' => '14',
            'name' => 'Delete Activity Log',
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        DB::table('permissions')->insert([
            'id' => '15',
            'name' => 'Restore Activity Log',
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        DB::table('permissions')->insert([
            'id' => '16',
            'name' => 'Force Delete Activity Log',
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        DB::table('permissions')->insert([
            'id' => '17',
            'name' => 'Access System Log',
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        DB::table('permissions')->insert([
            'id' => '18',
            'name' => 'Home Page Section View', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '19',
            'name' => 'Home Page Section Create', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '20',
            'name' => 'Home Page Section Update', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '21',
            'name' => 'Home Page Section Delete', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '22',
            'name' => 'Home Page Section Restore', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '23',
            'name' => 'Home Page Section Force Delete', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '24',
            'name' => 'Page View', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '25',
            'name' => 'Page Create', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '26',
            'name' => 'Page Update', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '27',
            'name' => 'Page Delete', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '28',
            'name' => 'Page Restore', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '29',
            'name' => 'Page Force Delete', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '30',
            'name' => 'Sidebar View', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '31',
            'name' => 'Sidebar Create', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '32',
            'name' => 'Sidebar Update', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '33',
            'name' => 'Sidebar Delete', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '34',
            'name' => 'Sidebar Restore', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '35',
            'name' => 'Sidebar Force Delete', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '36',
            'name' => 'News View', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '37',
            'name' => 'News Create', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '38',
            'name' => 'News Update', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '39',
            'name' => 'News Delete', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '40',
            'name' => 'News Restore', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '41',
            'name' => 'News Force Delete', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '42',
            'name' => 'Slide View', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '43',
            'name' => 'Slide Create', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '44',
            'name' => 'Slide Update', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '45',
            'name' => 'Slide Delete', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '46',
            'name' => 'Slide Restore', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '47',
            'name' => 'Slide Force Delete', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '48',
            'name' => 'Gallery View', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '49',
            'name' => 'Gallery Create', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '50',
            'name' => 'Gallery Update', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '51',
            'name' => 'Gallery Delete', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '52',
            'name' => 'Gallery Restore', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '53',
            'name' => 'Gallery Force Delete', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '54',
            'name' => 'Event View', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '55',
            'name' => 'Event Create', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '56',
            'name' => 'Event Update', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '57',
            'name' => 'Event Delete', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '58',
            'name' => 'Event Restore', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '59',
            'name' => 'Event Force Delete', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '60',
            'name' => 'Download View', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '61',
            'name' => 'Download Create', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '62',
            'name' => 'Download Update', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '63',
            'name' => 'Download Delete', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '64',
            'name' => 'Download Restore', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '65',
            'name' => 'Download Force Delete', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '66',
            'name' => 'Download Category View', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '67',
            'name' => 'Download Category Create', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '68',
            'name' => 'Download Category Update', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '69',
            'name' => 'Download Category Delete', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '70',
            'name' => 'Download Category Restore', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '71',
            'name' => 'Download Category Force Delete', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);

        DB::table('permissions')->insert([
            'id' => '300',
            'name' => 'Map View', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '301',
            'name' => 'Map Create', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '302',
            'name' => 'Map Update', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '303',
            'name' => 'Map Delete', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '304',
            'name' => 'Map Restore', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '305',
            'name' => 'Map Force Delete', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);

        DB::table('roles')->insert([
            'id' => '1',
            'name' => 'Super Admin',
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);

        DB::table('model_has_roles')->insert([
            'role_id' => '1',
            'model_type' => 'App\Models\User',
            'model_id' => '1',
        ]);

        DB::table('role_has_permissions')->insert(['permission_id' => '1', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '2', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '3', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '4', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '5', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '6', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '7', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '8', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '9', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '10', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '11', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '12', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '13', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '14', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '15', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '16', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '17', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '18', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '19', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '20', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '21', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '22', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '23', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '24', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '25', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '26', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '27', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '28', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '29', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '30', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '31', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '32', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '33', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '34', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '35', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '36', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '37', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '38', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '39', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '40', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '41', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '42', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '43', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '44', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '45', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '46', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '47', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '48', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '49', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '50', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '51', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '52', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '53', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '54', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '55', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '56', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '57', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '58', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '59', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '60', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '61', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '62', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '63', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '64', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '65', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '66', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '67', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '68', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '69', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '70', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '71', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '300', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '301', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '302', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '303', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '304', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '305', 'role_id' => '1', ]);
    }
}
