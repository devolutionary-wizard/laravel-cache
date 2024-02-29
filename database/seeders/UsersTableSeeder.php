<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [];
        for ($i = 0; $i < 10000; $i++) {
            $data[] = [
                'name' => 'User ' . ($i + 1),
                'email' => 'user' . ($i + 1) . '@example.com',
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        // Insert data
        DB::table('users')->insert($data);

    }
}
