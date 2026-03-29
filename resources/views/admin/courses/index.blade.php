@extends('admin.layout')

@section('content')
    <div class="flex justify-between mb-6">
        <h2 class="text-2xl font-bold">Курсы</h2>
        <a href="{{ route('admin.courses.create') }}" class="bg-cyan-500 px-4 py-2 rounded">+ Добавить</a>
    </div>

    <div class="space-y-4">
        @foreach ($courses as $course)
            <div class="bg-slate-800 p-4 rounded flex justify-between">

                <div>
                    <div class="font-bold">{{ $course->title }}</div>
                    <div class="text-sm text-slate-400">
                        {{ $course->price }} ₸ / урок
                    </div>

                    <div class="mt-2 flex gap-2 flex-wrap">
                        @foreach ($course->tags as $tag)
                            <span class="bg-slate-700 px-2 py-1 text-xs rounded">
                                {{ $tag->name }}
                            </span>
                        @endforeach
                    </div>
                </div>

                <div class="space-x-2">
                    <a href="{{ route('admin.courses.edit', $course) }}" class="text-cyan-400">✏️</a>
                    <form method="POST" action="{{ route('admin.courses.destroy', $course) }}" class="inline">
                        @csrf @method('DELETE')
                        <button class="text-red-400">🗑</button>
                    </form>
                </div>

            </div>
        @endforeach
    </div>
@endsection
