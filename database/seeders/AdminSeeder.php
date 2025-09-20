<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;
use Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create a new admin user
        $admin = new Admin();
        $admin->name = 'Admin';
        $admin->email = 'richar.quispe@unmsm.edu.pe';
        $admin->password = Hash::make('asd123$!A');
        $admin->token = '';
        $admin->save();
    }
}
