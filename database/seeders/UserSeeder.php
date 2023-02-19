<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'user_role_id' => 1,
            'name' => 'admin',
            'username' => 'admin',
            'email' => 'admin@mailinator.com',
            'mobile_number' => 1234568790,
            'password' => Hash::make("Admin@123"),
            'is_mobile_verified' => 1,
            'is_email_verified' => 1,
            'is_active' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
