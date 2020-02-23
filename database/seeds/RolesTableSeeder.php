<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'admin',
                'display_name' => 'Administrator',
                'created_at' => '2020-01-26 06:26:06',
                'updated_at' => '2020-01-26 06:26:06',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'user',
                'display_name' => 'Normal User',
                'created_at' => '2020-01-26 06:26:06',
                'updated_at' => '2020-01-26 06:26:06',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'usuario',
                'display_name' => 'Usuário',
                'created_at' => '2020-02-23 15:22:02',
                'updated_at' => '2020-02-23 15:22:02',
            ),
        ));
        
        
    }
}