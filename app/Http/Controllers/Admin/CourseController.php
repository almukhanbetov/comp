<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::with('tags')->latest()->get();
        return view('admin.courses.index', compact('courses'));
    }

    public function create()
    {
        return view('admin.courses.create');
    }

    public function store(Request $request)
    {
        $course = Course::create($request->only([
            'title',
            'description',
            'price',
            'icon',
            'level'
        ]));

        foreach ($request->tags ?? [] as $tag) {
            $course->tags()->create(['name' => $tag]);
        }

        return redirect()->route('admin.courses.index');
    }

    public function edit(Course $course)
    {
        $course->load('tags');
        return view('admin.courses.edit', compact('course'));
    }

    public function update(Request $request, Course $course)
    {
        $course->update($request->only([
            'title',
            'description',
            'price',
            'icon',
            'level'
        ]));

        // обновляем теги
        $course->tags()->delete();

        foreach ($request->tags ?? [] as $tag) {
            $course->tags()->create(['name' => $tag]);
        }

        return redirect()->route('admin.courses.index');
    }

    public function destroy(Course $course)
    {
        $course->delete();
        return back();
    }
}