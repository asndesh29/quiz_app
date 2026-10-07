<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $this->call([
            QuizSeeder1::class,
            QuizSeeder2::class,
            QuizSeeder3::class,
            QuizSeeder4::class,
            QuizSeeder5::class,
            QuizSeeder6::class,
            QuizSeeder7::class,
            QuizSeeder8::class,
                // MCQBoosterSeeder1::class,
                // MCQBoosterSeeder2::class,
            MCQBoosterSeeder3::class,
            MCQBoosterSeeder4::class,
            MCQBoosterSeeder5::class,
            MCQBoosterSeeder6::class,
            MCQBoosterSeeder7::class,
            MCQBoosterSeeder8::class,
        ]);
    }
}
