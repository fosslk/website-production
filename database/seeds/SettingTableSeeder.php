<?php

/**
 * Author: FOSS.lK
 * Email: devsrilanka.lk@gmail.com
 * User: Tharindu Chathuranga/(+94)77 9617143
 * Date: 10/17/2018
 * Time: 04:06 PM
 *
 * File Name: SettingTableSeeder.php
 * Project: Foss.lk Sri lanka
 */


use Illuminate\Database\Seeder;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Setting::create([
            'site_name' => "Foss Sri lanka",
            'logo' =>'',
            'site_description' => 'FOSS.lk is a platform for Sri Lankans to organise themselves around the global Free and Open Source Software movement.',
            'address' => 'FOSS Sri Lanka, Lanka Software Foundation, Trace expert city, Maradana Rd Colombo, Sri Lanka 01000',
            'contact_number' => '123456789',
            'contact_email' => 'Hello@foss.lk'
        ]);
    }
}
