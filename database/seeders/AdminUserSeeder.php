<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateORCreate(
            ['email' => 'b.dedal@mlgcl.edu.ph'],
            [
                'name' => 'Boyet Dedal',
                'password' => Hash::make('admin123'),
                'role' => 'admin',
            ]
        );
    }
}
