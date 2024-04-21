<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Assuming you have a User model
        $users = User::all();

        // Create tasks for each user
        $users->each(function ($user) {
            Task::factory()->count(5)->create(['user_id' => $user->id]);
        });
    }
}
