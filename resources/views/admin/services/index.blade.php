@extends('admin.layout')

@section('content')
    <div class="flex justify-between mb-6">
        <h2 class="text-2xl font-bold">Услуги</h2>
        <a href="{{ route('admin.services.create') }}" class="bg-cyan-500 px-4 py-2 rounded">+ Добавить</a>
    </div>

    <ul id="sortable" class="space-y-4">
        @foreach ($services as $service)
            <li data-id="{{ $service->id }}" class="bg-slate-800 p-4 rounded flex justify-between items-center cursor-move">

                <div>
                    <div class="font-bold">{{ $service->title }}</div>
                    <div class="text-sm text-slate-400">
                        {{ $service->price }} ₸
                    </div>
                </div>

                <div class="space-x-2">
                    <a href="{{ route('admin.services.edit', $service) }}" class="text-cyan-400">✏️</a>
                    <form method="POST" action="{{ route('admin.services.destroy', $service) }}" class="inline">
                        @csrf @method('DELETE')
                        <button class="text-red-400">🗑</button>
                    </form>
                </div>

            </li>
        @endforeach
    </ul>
@endsection
