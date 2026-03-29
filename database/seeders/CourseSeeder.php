<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    public function run(): void
    {
        $courses = [

            [
                'title' => 'Python',
                'description' => 'С нуля до middle. Django/FastAPI, автоматизация.',
                'price' => 5000,
                'level' => 'beginner',
                'icon' => 'py',
                'tags' => ['Django', 'FastAPI', 'Pandas', 'Asyncio']
            ],

            [
                'title' => 'Golang',
                'description' => 'Backend разработка, REST API, микросервисы.',
                'price' => 6000,
                'level' => 'middle',
                'icon' => 'go',
                'tags' => ['Gin', 'Goroutines', 'gRPC', 'Docker']
            ],

            [
                'title' => 'C++',
                'description' => 'Алгоритмы, структуры данных, подготовка к собеседованиям.',
                'price' => 6000,
                'level' => 'advanced',
                'icon' => 'cpp',
                'tags' => ['STL', 'Алгоритмы', 'ООП', 'Память']
            ],

            [
                'title' => 'PHP',
                'description' => 'Laravel, базы данных, backend разработка.',
                'price' => 6000,
                'level' => 'beginner',
                'icon' => 'php',
                'tags' => ['Laravel', 'MySQL', 'Composer']
            ],

            [
                'title' => '1C',
                'description' => 'Автоматизация бизнеса, отчёты, интеграции.',
                'price' => 6000,
                'level' => 'middle',
                'icon' => '1c',
                'tags' => ['1С:Предприятие', 'Запросы', 'Отчёты']
            ],

        ];

        foreach ($courses as $data) {
            $course = Course::create([
                'title' => $data['title'],
                'description' => $data['description'],
                'price' => $data['price'],
                'level' => $data['level'],
                'icon' => $data['icon'],
            ]);

            foreach ($data['tags'] as $tag) {
                $course->tags()->create([
                    'name' => $tag
                ]);
            }
        }
    }
}