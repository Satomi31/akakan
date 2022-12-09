<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Authority;

class AuthoritySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Authority::create([
            'auth_level' => 'admin',
            ]);

        Authority::create([
            'auth_level' => 'low',
            ]);

        Authority::create([
            'auth_level' => 'middle',
            ]);
        //
    }
}
