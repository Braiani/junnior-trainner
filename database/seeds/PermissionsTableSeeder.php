<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'browse_admin',
                'table_name' => NULL,
                'created_at' => '2020-01-26 06:26:06',
                'updated_at' => '2020-01-26 06:26:06',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'browse_bread',
                'table_name' => NULL,
                'created_at' => '2020-01-26 06:26:06',
                'updated_at' => '2020-01-26 06:26:06',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'browse_database',
                'table_name' => NULL,
                'created_at' => '2020-01-26 06:26:06',
                'updated_at' => '2020-01-26 06:26:06',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'browse_media',
                'table_name' => NULL,
                'created_at' => '2020-01-26 06:26:06',
                'updated_at' => '2020-01-26 06:26:06',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'browse_compass',
                'table_name' => NULL,
                'created_at' => '2020-01-26 06:26:06',
                'updated_at' => '2020-01-26 06:26:06',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'created_at' => '2020-01-26 06:26:06',
                'updated_at' => '2020-01-26 06:26:06',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'created_at' => '2020-01-26 06:26:06',
                'updated_at' => '2020-01-26 06:26:06',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'created_at' => '2020-01-26 06:26:06',
                'updated_at' => '2020-01-26 06:26:06',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'created_at' => '2020-01-26 06:26:06',
                'updated_at' => '2020-01-26 06:26:06',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'created_at' => '2020-01-26 06:26:06',
                'updated_at' => '2020-01-26 06:26:06',
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'created_at' => '2020-01-26 06:26:07',
                'updated_at' => '2020-01-26 06:26:07',
            ),
            11 => 
            array (
                'id' => 12,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'created_at' => '2020-01-26 06:26:07',
                'updated_at' => '2020-01-26 06:26:07',
            ),
            12 => 
            array (
                'id' => 13,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'created_at' => '2020-01-26 06:26:07',
                'updated_at' => '2020-01-26 06:26:07',
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'created_at' => '2020-01-26 06:26:07',
                'updated_at' => '2020-01-26 06:26:07',
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'created_at' => '2020-01-26 06:26:07',
                'updated_at' => '2020-01-26 06:26:07',
            ),
            15 => 
            array (
                'id' => 16,
                'key' => 'browse_users',
                'table_name' => 'users',
                'created_at' => '2020-01-26 06:26:07',
                'updated_at' => '2020-01-26 06:26:07',
            ),
            16 => 
            array (
                'id' => 17,
                'key' => 'read_users',
                'table_name' => 'users',
                'created_at' => '2020-01-26 06:26:07',
                'updated_at' => '2020-01-26 06:26:07',
            ),
            17 => 
            array (
                'id' => 18,
                'key' => 'edit_users',
                'table_name' => 'users',
                'created_at' => '2020-01-26 06:26:07',
                'updated_at' => '2020-01-26 06:26:07',
            ),
            18 => 
            array (
                'id' => 19,
                'key' => 'add_users',
                'table_name' => 'users',
                'created_at' => '2020-01-26 06:26:07',
                'updated_at' => '2020-01-26 06:26:07',
            ),
            19 => 
            array (
                'id' => 20,
                'key' => 'delete_users',
                'table_name' => 'users',
                'created_at' => '2020-01-26 06:26:07',
                'updated_at' => '2020-01-26 06:26:07',
            ),
            20 => 
            array (
                'id' => 21,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'created_at' => '2020-01-26 06:26:07',
                'updated_at' => '2020-01-26 06:26:07',
            ),
            21 => 
            array (
                'id' => 22,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'created_at' => '2020-01-26 06:26:07',
                'updated_at' => '2020-01-26 06:26:07',
            ),
            22 => 
            array (
                'id' => 23,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'created_at' => '2020-01-26 06:26:07',
                'updated_at' => '2020-01-26 06:26:07',
            ),
            23 => 
            array (
                'id' => 24,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'created_at' => '2020-01-26 06:26:07',
                'updated_at' => '2020-01-26 06:26:07',
            ),
            24 => 
            array (
                'id' => 25,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'created_at' => '2020-01-26 06:26:07',
                'updated_at' => '2020-01-26 06:26:07',
            ),
            25 => 
            array (
                'id' => 26,
                'key' => 'browse_hooks',
                'table_name' => NULL,
                'created_at' => '2020-01-26 06:26:09',
                'updated_at' => '2020-01-26 06:26:09',
            ),
            26 => 
            array (
                'id' => 27,
                'key' => 'browse_staff',
                'table_name' => 'staff',
                'created_at' => '2020-02-16 12:45:08',
                'updated_at' => '2020-02-16 12:45:08',
            ),
            27 => 
            array (
                'id' => 28,
                'key' => 'read_staff',
                'table_name' => 'staff',
                'created_at' => '2020-02-16 12:45:08',
                'updated_at' => '2020-02-16 12:45:08',
            ),
            28 => 
            array (
                'id' => 29,
                'key' => 'edit_staff',
                'table_name' => 'staff',
                'created_at' => '2020-02-16 12:45:08',
                'updated_at' => '2020-02-16 12:45:08',
            ),
            29 => 
            array (
                'id' => 30,
                'key' => 'add_staff',
                'table_name' => 'staff',
                'created_at' => '2020-02-16 12:45:08',
                'updated_at' => '2020-02-16 12:45:08',
            ),
            30 => 
            array (
                'id' => 31,
                'key' => 'delete_staff',
                'table_name' => 'staff',
                'created_at' => '2020-02-16 12:45:08',
                'updated_at' => '2020-02-16 12:45:08',
            ),
            31 => 
            array (
                'id' => 32,
                'key' => 'browse_services',
                'table_name' => 'services',
                'created_at' => '2020-02-18 00:01:16',
                'updated_at' => '2020-02-18 00:01:16',
            ),
            32 => 
            array (
                'id' => 33,
                'key' => 'read_services',
                'table_name' => 'services',
                'created_at' => '2020-02-18 00:01:16',
                'updated_at' => '2020-02-18 00:01:16',
            ),
            33 => 
            array (
                'id' => 34,
                'key' => 'edit_services',
                'table_name' => 'services',
                'created_at' => '2020-02-18 00:01:16',
                'updated_at' => '2020-02-18 00:01:16',
            ),
            34 => 
            array (
                'id' => 35,
                'key' => 'add_services',
                'table_name' => 'services',
                'created_at' => '2020-02-18 00:01:16',
                'updated_at' => '2020-02-18 00:01:16',
            ),
            35 => 
            array (
                'id' => 36,
                'key' => 'delete_services',
                'table_name' => 'services',
                'created_at' => '2020-02-18 00:01:16',
                'updated_at' => '2020-02-18 00:01:16',
            ),
            36 => 
            array (
                'id' => 37,
                'key' => 'browse_comments',
                'table_name' => 'comments',
                'created_at' => '2020-02-20 23:53:28',
                'updated_at' => '2020-02-20 23:53:28',
            ),
            37 => 
            array (
                'id' => 38,
                'key' => 'read_comments',
                'table_name' => 'comments',
                'created_at' => '2020-02-20 23:53:28',
                'updated_at' => '2020-02-20 23:53:28',
            ),
            38 => 
            array (
                'id' => 39,
                'key' => 'edit_comments',
                'table_name' => 'comments',
                'created_at' => '2020-02-20 23:53:28',
                'updated_at' => '2020-02-20 23:53:28',
            ),
            39 => 
            array (
                'id' => 40,
                'key' => 'add_comments',
                'table_name' => 'comments',
                'created_at' => '2020-02-20 23:53:28',
                'updated_at' => '2020-02-20 23:53:28',
            ),
            40 => 
            array (
                'id' => 41,
                'key' => 'delete_comments',
                'table_name' => 'comments',
                'created_at' => '2020-02-20 23:53:28',
                'updated_at' => '2020-02-20 23:53:28',
            ),
            41 => 
            array (
                'id' => 42,
                'key' => 'browse_clients',
                'table_name' => 'clients',
                'created_at' => '2020-02-23 16:36:10',
                'updated_at' => '2020-02-23 16:36:10',
            ),
            42 => 
            array (
                'id' => 43,
                'key' => 'read_clients',
                'table_name' => 'clients',
                'created_at' => '2020-02-23 16:36:10',
                'updated_at' => '2020-02-23 16:36:10',
            ),
            43 => 
            array (
                'id' => 44,
                'key' => 'edit_clients',
                'table_name' => 'clients',
                'created_at' => '2020-02-23 16:36:10',
                'updated_at' => '2020-02-23 16:36:10',
            ),
            44 => 
            array (
                'id' => 45,
                'key' => 'add_clients',
                'table_name' => 'clients',
                'created_at' => '2020-02-23 16:36:10',
                'updated_at' => '2020-02-23 16:36:10',
            ),
            45 => 
            array (
                'id' => 46,
                'key' => 'delete_clients',
                'table_name' => 'clients',
                'created_at' => '2020-02-23 16:36:10',
                'updated_at' => '2020-02-23 16:36:10',
            ),
        ));
        
        
    }
}