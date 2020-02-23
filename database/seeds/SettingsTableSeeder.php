<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('settings')->delete();
        
        \DB::table('settings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'site.title',
                'display_name' => 'Site Title',
                'value' => 'JUNNIOR TRAINER',
                'details' => '',
                'type' => 'text',
                'order' => 1,
                'group' => 'Site',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'site.description',
                'display_name' => 'Site Description',
                'value' => 'Maior projeto de emagrecimento do estado do MS!',
                'details' => '',
                'type' => 'text',
                'order' => 2,
                'group' => 'Site',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'site.logo',
                'display_name' => 'Site Logo',
                'value' => '',
                'details' => '',
                'type' => 'image',
                'order' => 3,
                'group' => 'Site',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'site.google_analytics_tracking_id',
                'display_name' => 'Google Analytics Tracking ID',
                'value' => NULL,
                'details' => '',
                'type' => 'text',
                'order' => 4,
                'group' => 'Site',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'admin.bg_image',
                'display_name' => 'Admin Background Image',
                'value' => 'settings/February2020/MrufTJG1bOqhmrPpRmnb.jpg',
                'details' => '',
                'type' => 'image',
                'order' => 5,
                'group' => 'Admin',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'admin.title',
                'display_name' => 'Admin Title',
                'value' => 'Junnior Trainer',
                'details' => '',
                'type' => 'text',
                'order' => 1,
                'group' => 'Admin',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'admin.description',
                'display_name' => 'Admin Description',
                'value' => 'Painel administrativo do Studio Junnior Trainer',
                'details' => '',
                'type' => 'text',
                'order' => 2,
                'group' => 'Admin',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'admin.loader',
                'display_name' => 'Admin Loader',
                'value' => '',
                'details' => '',
                'type' => 'image',
                'order' => 3,
                'group' => 'Admin',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'admin.icon_image',
                'display_name' => 'Admin Icon Image',
                'value' => '',
                'details' => '',
                'type' => 'image',
                'order' => 4,
                'group' => 'Admin',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'admin.google_analytics_client_id',
            'display_name' => 'Google Analytics Client ID (used for admin dashboard)',
                'value' => NULL,
                'details' => '',
                'type' => 'text',
                'order' => 1,
                'group' => 'Admin',
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'landing.background_staff',
                'display_name' => 'Background Equipe',
                'value' => 'settings/February2020/tJMcTylO83Ty8zmTo7pp.jpg',
                'details' => NULL,
                'type' => 'image',
                'order' => 6,
                'group' => 'Landing',
            ),
            11 => 
            array (
                'id' => 13,
                'key' => 'landing.contact_whatsapp',
                'display_name' => 'Mensagem padrão de contato',
                'value' => 'Peguei seu contato através do site! Como funciona o Projeto Emagrecendo CG?',
                'details' => NULL,
                'type' => 'text_area',
                'order' => 8,
                'group' => 'Landing',
            ),
            12 => 
            array (
                'id' => 14,
                'key' => 'landing.background_change_life',
                'display_name' => 'Background Mudar de vida',
                'value' => 'settings/February2020/O32YvqubCB9wHSTDBovR.jpeg',
                'details' => NULL,
                'type' => 'image',
                'order' => 9,
                'group' => 'Landing',
            ),
            13 => 
            array (
                'id' => 15,
                'key' => 'landing.text_change_life',
                'display_name' => 'Texto Mudar de vida',
                'value' => 'Saiba como mudar de vida através do Funcional! Entre em contato com o botão abaixo!!!!',
                'details' => NULL,
                'type' => 'text',
                'order' => 10,
                'group' => 'Landing',
            ),
            14 => 
            array (
                'id' => 16,
                'key' => 'landing.text_our_services',
                'display_name' => 'Texto Nossos Serviços',
                'value' => 'Conheça o que a Junnior Trainer proporciona para você! Entre em contato para maiores informações sobre cada um de nossos serviços!',
                'details' => NULL,
                'type' => 'text_area',
                'order' => 11,
                'group' => 'Landing',
            ),
            15 => 
            array (
                'id' => 17,
                'key' => 'social.facebook',
                'display_name' => 'Facebook',
                'value' => NULL,
                'details' => NULL,
                'type' => 'text',
                'order' => 12,
                'group' => 'Social',
            ),
            16 => 
            array (
                'id' => 18,
                'key' => 'social.twitter',
                'display_name' => 'Twitter',
                'value' => NULL,
                'details' => NULL,
                'type' => 'text',
                'order' => 13,
                'group' => 'Social',
            ),
            17 => 
            array (
                'id' => 19,
                'key' => 'social.instagram',
                'display_name' => 'Instagram',
                'value' => 'https://www.instagram.com/brtechsistemas/',
                'details' => NULL,
                'type' => 'text',
                'order' => 14,
                'group' => 'Social',
            ),
            18 => 
            array (
                'id' => 20,
                'key' => 'social.youtube',
                'display_name' => 'Youtube',
                'value' => NULL,
                'details' => NULL,
                'type' => 'text',
                'order' => 15,
                'group' => 'Social',
            ),
            19 => 
            array (
                'id' => 21,
                'key' => 'social.whatsapp',
                'display_name' => 'WhatsApp',
                'value' => '5567981707696',
                'details' => NULL,
                'type' => 'text',
                'order' => 16,
                'group' => 'Social',
            ),
        ));
        
        
    }
}