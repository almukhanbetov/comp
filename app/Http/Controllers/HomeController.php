<?php

namespace App\Http\Controllers;
use App\Models\Service;
use App\Models\Course;


class HomeController extends Controller
{
    public function index(){
        $services =Service::with('features')
        ->orderBy('sort_order')
        ->get();

        $courses = Course::with('tags')
            ->get();

        return view('home', compact('services', 'courses'));
    }
}
