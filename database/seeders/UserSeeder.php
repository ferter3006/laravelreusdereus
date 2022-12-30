<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
            'name' => 'ferter',
            'email' => 'ferratersimon@gmail.com',
            'password' => bcrypt('F1rt2r3lr4i!')
        ])->assignRole('admin');

        User::create([
            'name' => 'basicplayer',
            'email' => 'basic@player.com',
            'password' => bcrypt('basicplayer')
        ])->assignRole('player');

        User::create([
            'name' => 'basicplayer3',
            'email' => 'basic3@player.com',
            'password' => bcrypt('basic3player')
        ])->assignRole('player');
    }
}
