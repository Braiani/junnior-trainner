<?php

use Illuminate\Database\Seeder;

class DataTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('data_types')->delete();
        
        \DB::table('data_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'users',
                'slug' => 'users',
                'display_name_singular' => 'User',
                'display_name_plural' => 'Users',
                'icon' => 'voyager-person',
                'model_name' => 'TCG\\Voyager\\Models\\User',
                'policy_name' => 'TCG\\Voyager\\Policies\\UserPolicy',
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2020-01-26 06:26:04',
                'updated_at' => '2020-01-26 06:26:04',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'menus',
                'slug' => 'menus',
                'display_name_singular' => 'Menu',
                'display_name_plural' => 'Menus',
                'icon' => 'voyager-list',
                'model_name' => 'TCG\\Voyager\\Models\\Menu',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2020-01-26 06:26:04',
                'updated_at' => '2020-01-26 06:26:04',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'roles',
                'slug' => 'roles',
                'display_name_singular' => 'Role',
                'display_name_plural' => 'Roles',
                'icon' => 'voyager-lock',
                'model_name' => 'TCG\\Voyager\\Models\\Role',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2020-01-26 06:26:04',
                'updated_at' => '2020-01-26 06:26:04',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'staff',
                'slug' => 'staff',
                'display_name_singular' => 'Funcionário',
                'display_name_plural' => 'Funcionários',
                'icon' => 'voyager-people',
                'model_name' => 'App\\Models\\Staff',
                'policy_name' => NULL,
                'controller' => 'App\\Http\\Controllers\\StaffController',
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2020-02-16 12:45:08',
                'updated_at' => '2020-02-16 15:26:15',
            ),
            4 => 
            array (
                'id' => 9,
                'name' => 'services',
                'slug' => 'services',
                'display_name_singular' => 'Serviço',
                'display_name_plural' => 'Serviços',
                'icon' => 'voyager-hammer',
                'model_name' => 'App\\Models\\Service',
                'policy_name' => NULL,
                'controller' => 'App\\Http\\Controllers\\ServiceController',
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'created_at' => '2020-02-18 00:01:16',
                'updated_at' => '2020-02-18 00:01:16',
            ),
            5 => 
            array (
                'id' => 10,
                'name' => 'comments',
                'slug' => 'comments',
                'display_name_singular' => 'Comentário',
                'display_name_plural' => 'Comentários',
                'icon' => 'voyager-chat',
                'model_name' => 'App\\Models\\Comment',
                'policy_name' => NULL,
                'controller' => 'App\\Http\\Controllers\\CommentController',
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'created_at' => '2020-02-20 23:53:28',
                'updated_at' => '2020-02-20 23:53:28',
            ),
            6 => 
            array (
                'id' => 11,
                'name' => 'clients',
                'slug' => 'clients',
                'display_name_singular' => 'Cliente',
                'display_name_plural' => 'Clientes',
                'icon' => 'voyager-group',
                'model_name' => 'App\\Models\\Client',
                'policy_name' => NULL,
                'controller' => 'App\\Http\\Controllers\\ClientController',
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 1,
                'details' => '{"order_column":"name","order_display_column":null,"order_direction":"asc","default_search_key":"name","scope":null}',
                'created_at' => '2020-02-23 16:36:10',
                'updated_at' => '2020-02-23 16:48:11',
            ),
        ));
        
        
    }
}