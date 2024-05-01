<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Todo;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create(
            [
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'is_admin' => true,
            ]
        );
        User::factory()->create(
            [
                'name' => 'Rizqi Indah Pratiwi',
                'email' => 'Rizqi@gmail.com',
                'is_admin' => true,
            ]
        );

        User::factory(101)->create();
        Todo::factory(500)->create();
    }
}
