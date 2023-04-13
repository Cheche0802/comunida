<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeedeer extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Jose Monterrey',
            'email'  => 'admin@admin.com',
            'password' => bcrypt('123456789')
        ])->assignRole('Admin');

        User::factory(3)->create();
    }
}
