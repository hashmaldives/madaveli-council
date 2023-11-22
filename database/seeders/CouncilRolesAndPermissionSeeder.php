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
            'id' => '72',
            'name' => 'Announcement View', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '73',
            'name' => 'Announcement Create', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '74',
            'name' => 'Announcement Update', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '75',
            'name' => 'Announcement Delete', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '76',
            'name' => 'Announcement Restore', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '77',
            'name' => 'Announcement Force Delete', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '78',
            'name' => 'Press Release View', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '79',
            'name' => 'Press Release Create', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '80',
            'name' => 'Press Release Update', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '81',
            'name' => 'Press Release Delete', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '82',
            'name' => 'Press Release Restore', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '83',
            'name' => 'Press Release Force Delete', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '84',
            'name' => 'Development Plan View', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '85',
            'name' => 'Development Plan Create', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '86',
            'name' => 'Development Plan Update', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '87',
            'name' => 'Development Plan Delete', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '88',
            'name' => 'Development Plan Restore', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '89',
            'name' => 'Development Plan Force Delete', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '90',
            'name' => 'Development Plan Implementation View', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '91',
            'name' => 'Development Plan Implementation Create', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '92',
            'name' => 'Development Plan Implementation Update', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '93',
            'name' => 'Development Plan Implementation Delete', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '94',
            'name' => 'Development Plan Implementation Restore', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '95',
            'name' => 'Development Plan Implementation Force Delete', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '96',
            'name' => 'Annual Budget View', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '97',
            'name' => 'Annual Budget Create', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '98',
            'name' => 'Annual Budget Update', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '99',
            'name' => 'Annual Budget Delete', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '100',
            'name' => 'Annual Budget Restore', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '101',
            'name' => 'Annual Budget Force Delete', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '102',
            'name' => 'Annual Report View', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '103',
            'name' => 'Annual Report Create', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '104',
            'name' => 'Annual Report Update', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '105',
            'name' => 'Annual Report Delete', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '106',
            'name' => 'Annual Report Restore', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '107',
            'name' => 'Annual Report Force Delete', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '108',
            'name' => 'Staff Attendance View', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '109',
            'name' => 'Staff Attendance Create', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '110',
            'name' => 'Staff Attendance Update', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '111',
            'name' => 'Staff Attendance Delete', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '112',
            'name' => 'Staff Attendance Restore', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '113',
            'name' => 'Staff Attendance Force Delete', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '114',
            'name' => 'Audit Report View', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '115',
            'name' => 'Audit Report Create', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '116',
            'name' => 'Audit Report Update', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '117',
            'name' => 'Audit Report Delete', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '118',
            'name' => 'Audit Report Restore', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '119',
            'name' => 'Audit Report Force Delete', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '120',
            'name' => 'Agenda General Meeting View', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '121',
            'name' => 'Agenda General Meeting Create', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '122',
            'name' => 'Agenda General Meeting Update', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '123',
            'name' => 'Agenda General Meeting Delete', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '124',
            'name' => 'Agenda General Meeting Restore', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '125',
            'name' => 'Agenda General Meeting Force Delete', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '126',
            'name' => 'Yaumiyya General Meeting View', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '127',
            'name' => 'Yaumiyya General Meeting Create', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '128',
            'name' => 'Yaumiyya General Meeting Update', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '129',
            'name' => 'Yaumiyya General Meeting Delete', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '130',
            'name' => 'Yaumiyya General Meeting Restore', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '131',
            'name' => 'Yaumiyya General Meeting Force Delete', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '132',
            'name' => 'Decision General Meeting View', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '133',
            'name' => 'Decision General Meeting Create', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '134',
            'name' => 'Decision General Meeting Update', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '135',
            'name' => 'Decision General Meeting Delete', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '136',
            'name' => 'Decision General Meeting Restore', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '137',
            'name' => 'Decision General Meeting Force Delete', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '138',
            'name' => 'Agenda Spontaneous Meeting View', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '139',
            'name' => 'Agenda Spontaneous Meeting Create', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '140',
            'name' => 'Agenda Spontaneous Meeting Update', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '141',
            'name' => 'Agenda Spontaneous Meeting Delete', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '142',
            'name' => 'Agenda Spontaneous Meeting Restore', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '143',
            'name' => 'Agenda Spontaneous Meeting Force Delete', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '144',
            'name' => 'Yaumiyya Spontaneous Meeting View', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '145',
            'name' => 'Yaumiyya Spontaneous Meeting Create', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '146',
            'name' => 'Yaumiyya Spontaneous Meeting Update', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '147',
            'name' => 'Yaumiyya Spontaneous Meeting Delete', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '148',
            'name' => 'Yaumiyya Spontaneous Meeting Restore', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '149',
            'name' => 'Yaumiyya Spontaneous Meeting Force Delete', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '150',
            'name' => 'Decision Spontaneous Meeting View', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '151',
            'name' => 'Decision Spontaneous Meeting Create', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '152',
            'name' => 'Decision Spontaneous Meeting Update', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '153',
            'name' => 'Decision Spontaneous Meeting Delete', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '154',
            'name' => 'Decision Spontaneous Meeting Restore', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '155',
            'name' => 'Decision Spontaneous Meeting Force Delete', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '156',
            'name' => 'WDC Announcement View', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '157',
            'name' => 'WDC Announcement Create', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '158',
            'name' => 'WDC Announcement Update', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '159',
            'name' => 'WDC Announcement Delete', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '160',
            'name' => 'WDC Announcement Restore', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '161',
            'name' => 'WDC Announcement Force Delete', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '162',
            'name' => 'WDC Development Plan View', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '163',
            'name' => 'WDC Development Plan Create', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '164',
            'name' => 'WDC Development Plan Update', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '165',
            'name' => 'WDC Development Plan Delete', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '166',
            'name' => 'WDC Development Plan Restore', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '167',
            'name' => 'WDC Development Plan Force Delete', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '168',
            'name' => 'WDC Annual Budget View', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '169',
            'name' => 'WDC Annual Budget Create', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '170',
            'name' => 'WDC Annual Budget Update', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '171',
            'name' => 'WDC Annual Budget Delete', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '172',
            'name' => 'WDC Annual Budget Restore', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '173',
            'name' => 'WDC Annual Budget Force Delete', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '174',
            'name' => 'WDC AnnualReport View', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '175',
            'name' => 'WDC AnnualReport Create', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '176',
            'name' => 'WDC AnnualReport Update', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '177',
            'name' => 'WDC AnnualReport Delete', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '178',
            'name' => 'WDC AnnualReport Restore', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '179',
            'name' => 'WDC AnnualReport Force Delete', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '180',
            'name' => 'Activity Calendar View', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '181',
            'name' => 'Activity Calendar Create', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '182',
            'name' => 'Activity Calendar Update', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '183',
            'name' => 'Activity Calendar Delete', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '184',
            'name' => 'Activity Calendar Restore', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '185',
            'name' => 'Activity Calendar Force Delete', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '186',
            'name' => 'Financial Statement View', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '187',
            'name' => 'Financial Statement Create', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '188',
            'name' => 'Financial Statement Update', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '189',
            'name' => 'Financial Statement Delete', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '190',
            'name' => 'Financial Statement Restore', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '191',
            'name' => 'Financial Statement Force Delete', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '192',
            'name' => 'Legislation View', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '193',
            'name' => 'Legislation Create', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '194',
            'name' => 'Legislation Update', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '195',
            'name' => 'Legislation Delete', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '196',
            'name' => 'Legislation Restore', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '197',
            'name' => 'Legislation Force Delete', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '198',
            'name' => 'Guideline View', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '199',
            'name' => 'Guideline Create', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '200',
            'name' => 'Guideline Update', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '201',
            'name' => 'Guideline Delete', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '202',
            'name' => 'Guideline Restore', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '203',
            'name' => 'Guideline Force Delete', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '204',
            'name' => 'Population Report View', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '205',
            'name' => 'Population Report Create', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '206',
            'name' => 'Population Report Update', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '207',
            'name' => 'Population Report Delete', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '208',
            'name' => 'Population Report Restore', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '209',
            'name' => 'Population Report Force Delete', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '210',
            'name' => 'Income Report View', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '211',
            'name' => 'Income Report Create', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '212',
            'name' => 'Income Report Update', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '213',
            'name' => 'Income Report Delete', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '214',
            'name' => 'Income Report Restore', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '215',
            'name' => 'Income Report Force Delete', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '216',
            'name' => 'Expenditure Report View', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '217',
            'name' => 'Expenditure Report Create', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '218',
            'name' => 'Expenditure Report Update', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '219',
            'name' => 'Expenditure Report Delete', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '220',
            'name' => 'Expenditure Report Restore', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '221',
            'name' => 'Expenditure Report Force Delete', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '222',
            'name' => 'Councilors Attendance View', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '223',
            'name' => 'Councilors Attendance Create', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '224',
            'name' => 'Councilors Attendance Update', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '225',
            'name' => 'Councilors Attendance Delete', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '226',
            'name' => 'Councilors Attendance Restore', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '227',
            'name' => 'Councilors Attendance Force Delete', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '228',
            'name' => 'WDC Activity Calendar View', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '229',
            'name' => 'WDC Activity Calendar Create', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '230',
            'name' => 'WDC Activity Calendar Update', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '231',
            'name' => 'WDC Activity Calendar Delete', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '232',
            'name' => 'WDC Activity Calendar Restore', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '233',
            'name' => 'WDC Activity Calendar Force Delete', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '234',
            'name' => 'WDC Financial Statement View', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '235',
            'name' => 'WDC Financial Statement Create', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '236',
            'name' => 'WDC Financial Statement Update', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '237',
            'name' => 'WDC Financial Statement Delete', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '238',
            'name' => 'WDC Financial Statement Restore', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '239',
            'name' => 'WDC Financial Statement Force Delete', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '240',
            'name' => 'WDC Attendance View', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '241',
            'name' => 'WDC Attendance Create', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '242',
            'name' => 'WDC Attendance Update', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '243',
            'name' => 'WDC Attendance Delete', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '244',
            'name' => 'WDC Attendance Restore', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '245',
            'name' => 'WDC Attendance Force Delete', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '246',
            'name' => 'Decision WDC General Meeting View', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '247',
            'name' => 'Decision WDC General Meeting Create', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '248',
            'name' => 'Decision WDC General Meeting Update', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '249',
            'name' => 'Decision WDC General Meeting Delete', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '250',
            'name' => 'Decision WDC General Meeting Restore', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '251',
            'name' => 'Decision WDC General Meeting Force Delete', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '252',
            'name' => 'Agenda WDC General Meeting View', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '253',
            'name' => 'Agenda WDC General Meeting Create', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '254',
            'name' => 'Agenda WDC General Meeting Update', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '255',
            'name' => 'Agenda WDC General Meeting Delete', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '256',
            'name' => 'Agenda WDC General Meeting Restore', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '257',
            'name' => 'Agenda WDC General Meeting Force Delete', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '258',
            'name' => 'Yaumiyya WDC General Meeting View', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '259',
            'name' => 'Yaumiyya WDC General Meeting Create', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '260',
            'name' => 'Yaumiyya WDC General Meeting Update', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '261',
            'name' => 'Yaumiyya WDC General Meeting Delete', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '262',
            'name' => 'Yaumiyya WDC General Meeting Restore', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '263',
            'name' => 'Yaumiyya WDC General Meeting Force Delete', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '264',
            'name' => 'Decision WDC Spontaneous Meeting View', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '265',
            'name' => 'Decision WDC Spontaneous Meeting Create', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '266',
            'name' => 'Decision WDC Spontaneous Meeting Update', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '267',
            'name' => 'Decision WDC Spontaneous Meeting Delete', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '268',
            'name' => 'Decision WDC Spontaneous Meeting Restore', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '269',
            'name' => 'Decision WDC Spontaneous Meeting Force Delete', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '270',
            'name' => 'Agenda WDC Spontaneous Meeting View', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '271',
            'name' => 'Agenda WDC Spontaneous Meeting Create', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '272',
            'name' => 'Agenda WDC Spontaneous Meeting Update', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '273',
            'name' => 'Agenda WDC Spontaneous Meeting Delete', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '274',
            'name' => 'Agenda WDC Spontaneous Meeting Restore', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '275',
            'name' => 'Agenda WDC Spontaneous Meeting Force Delete', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '276',
            'name' => 'Yaumiyya WDC Spontaneous Meeting View', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '277',
            'name' => 'Yaumiyya WDC Spontaneous Meeting Create', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '278',
            'name' => 'Yaumiyya WDC Spontaneous Meeting Update', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '279',
            'name' => 'Yaumiyya WDC Spontaneous Meeting Delete', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '280',
            'name' => 'Yaumiyya WDC Spontaneous Meeting Restore', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '281',
            'name' => 'Yaumiyya WDC Spontaneous Meeting Force Delete', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);

        DB::table('permissions')->insert([
            'id' => '282',
            'name' => 'Project View', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '283',
            'name' => 'Project Create', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '284',
            'name' => 'Project Update', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '285',
            'name' => 'Project Delete', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '286',
            'name' => 'Project Restore', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '287',
            'name' => 'Project Force Delete', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);

        DB::table('permissions')->insert([
            'id' => '288',
            'name' => 'Project Category View', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '289',
            'name' => 'Project Category Create', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '290',
            'name' => 'Project Category Update', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '291',
            'name' => 'Project Category Delete', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '292',
            'name' => 'Project Category Restore', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '293',
            'name' => 'Project Category Force Delete', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);

        DB::table('permissions')->insert([
            'id' => '294',
            'name' => 'Project Status View', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '295',
            'name' => 'Project Status Create', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '296',
            'name' => 'Project Status Update', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '297',
            'name' => 'Project Status Delete', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '298',
            'name' => 'Project Status Restore', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);
        
        DB::table('permissions')->insert([
            'id' => '299',
            'name' => 'Project Status Force Delete', 
            'guard_name' => 'web',
            'created_at' => '2022-07-23 08:36:39',
            'updated_at' => '2022-07-23 08:36:39',
        ]);

        DB::table('role_has_permissions')->insert(['permission_id' => '72', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '73', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '74', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '75', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '76', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '77', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '78', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '79', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '80', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '81', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '82', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '83', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '84', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '85', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '86', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '87', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '88', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '89', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '90', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '91', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '92', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '93', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '94', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '95', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '96', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '97', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '98', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '99', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '100', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '101', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '102', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '103', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '104', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '105', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '106', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '107', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '108', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '109', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '110', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '111', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '112', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '113', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '114', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '115', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '116', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '117', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '118', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '119', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '120', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '121', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '122', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '123', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '124', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '125', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '126', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '127', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '128', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '129', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '130', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '131', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '132', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '133', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '134', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '135', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '136', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '137', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '138', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '139', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '140', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '141', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '142', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '143', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '144', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '145', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '146', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '147', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '148', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '149', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '150', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '151', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '152', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '153', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '154', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '155', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '156', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '157', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '158', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '159', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '160', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '161', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '162', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '163', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '164', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '165', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '166', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '167', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '168', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '169', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '170', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '171', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '172', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '173', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '174', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '175', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '176', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '177', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '178', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '179', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '180', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '181', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '182', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '183', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '184', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '185', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '186', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '187', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '188', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '189', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '190', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '191', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '192', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '193', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '194', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '195', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '196', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '197', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '198', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '199', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '200', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '201', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '202', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '203', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '204', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '205', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '206', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '207', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '208', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '209', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '210', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '211', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '212', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '213', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '214', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '215', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '216', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '217', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '218', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '219', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '220', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '221', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '222', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '223', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '224', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '225', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '226', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '227', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '228', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '229', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '230', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '231', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '232', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '233', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '234', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '235', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '236', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '237', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '238', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '239', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '240', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '241', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '242', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '243', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '244', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '245', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '246', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '247', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '248', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '249', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '250', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '251', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '252', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '253', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '254', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '255', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '256', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '257', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '258', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '259', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '260', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '261', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '262', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '263', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '264', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '265', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '266', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '267', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '268', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '269', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '270', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '271', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '272', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '273', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '274', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '275', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '276', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '277', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '278', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '279', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '280', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '281', 'role_id' => '1', ]);

        DB::table('role_has_permissions')->insert(['permission_id' => '282', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '283', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '284', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '285', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '286', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '287', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '288', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '289', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '290', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '291', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '292', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '293', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '294', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '295', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '296', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '297', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '298', 'role_id' => '1', ]);
        DB::table('role_has_permissions')->insert(['permission_id' => '299', 'role_id' => '1', ]);

    }
}
