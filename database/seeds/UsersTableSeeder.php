<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = App\User::create([
            'name' => 'Admin',
            'email' => 'admin@foss.lk',
            'password' => bcrypt('admin'),
            'admin' => 1
        ]);

        App\Profile::create([
            'user_id' => $user->id,
            'avatar' => 'uploads/avatars/1.png',
            'about' => 'FOSS Sri lanka',
        ]);

        $user = App\User::create([
            'name' => 'Tharindu Chathuranga',
            'email' => 'devsrilanka.lk@gmail.com',
            'password' => bcrypt('0779617143'),
            'admin' => 1
        ]);

        App\Profile::create([
            'user_id' => $user->id,
            'avatar' => 'uploads/avatars/1.png',
            'about' => 'Full stack web developer',
        ]);
    }
}
