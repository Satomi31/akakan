<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@admin.test',
            'password' => bcrypt('adminadmin'),
            'auth_id' => '1',
            ]);

        User::create([
            'name' => 'user_lv_low',
            'email' => 'user1@user.test',
            'password' => bcrypt('testtest'),
            'auth_id' => '2',
            ]);

        User::create([
            'name' => 'user_lv_middle',
            'email' => 'user2@user.test',
            'password' => bcrypt('testtest'),
            'auth_id' => '3',
            ]);
        //
    }
}
