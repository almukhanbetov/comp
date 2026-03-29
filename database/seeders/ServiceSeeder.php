<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        $services = [

            [
                'title' => 'Веб-разработка',
                'description' => 'Лендинги, корпоративные сайты, веб-приложения и REST API. React/Vue фронтенд + Python/Node backend.',
                'price' => 50000,
                'icon' => 'code',
                'color' => 'cyan',
                'sort_order' => 1,
                'features' => [
                    'Сайты под ключ за 7–14 дней',
                    'SPA и сложные веб-приложения',
                    'API, интеграции, парсеры',
                ]
            ],

            [
                'title' => 'Разработка сайтов',
                'description' => 'Современные сайты под ключ: лендинги, визитки, интернет-магазины, корпоративные порталы.',
                'price' => 30000,
                'icon' => 'monitor',
                'color' => 'orange',
                'sort_order' => 2,
                'features' => [
                    'Лендинги от 7 дней',
                    'Интернет-магазины (WooCommerce)',
                    'SEO-оптимизация и хостинг',
                ]
            ],

            [
                'title' => 'Мобильные приложения',
                'description' => 'Android и iOS приложения на React Native / Flutter.',
                'price' => 100000,
                'icon' => 'mobile',
                'color' => 'cyan',
                'sort_order' => 3,
                'features' => [
                    'React Native / Flutter',
                    'Публикация в App Store',
                    'Интеграция с API',
                ]
            ],

            [
                'title' => 'DevOps',
                'description' => 'Настройка VPS/VDS, Docker, CI/CD, мониторинг.',
                'price' => 20000,
                'icon' => 'devops',
                'color' => 'orange',
                'sort_order' => 4,
                'features' => [
                    'Настройка сервера с нуля',
                    'Docker, Nginx, SSL',
                    'Мониторинг и алерты',
                ]
            ],

        ];

        foreach ($services as $data) {
            $service = Service::create([
                'title' => $data['title'],
                'description' => $data['description'],
                'price' => $data['price'],
                'icon' => $data['icon'],
                'color' => $data['color'],
                'sort_order' => $data['sort_order'],
            ]);

            foreach ($data['features'] as $feature) {
                $service->features()->create([
                    'title' => $feature
                ]);
            }
        }
    }
}