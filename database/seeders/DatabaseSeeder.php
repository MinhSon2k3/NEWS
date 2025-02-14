<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'duongminhson0017@gmail.com',
            'password' => Hash::make('admin123'), // Mật khẩu được mã hóa
            'quyen' => '1', // Nếu có cột role, bạn có thể đặt là 'admin'
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}