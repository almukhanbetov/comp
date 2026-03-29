@extends('admin.layout')

@section('content')
    <h2 class="text-2xl mb-6">Создать курс</h2>

    <form method="POST" action="{{ route('admin.courses.store') }}" class="space-y-4">
        @csrf

        <input name="title" placeholder="Название (Python, Go)" class="w-full p-3 bg-slate-800 rounded">

        <textarea name="description" placeholder="Описание" class="w-full p-3 bg-slate-800 rounded"></textarea>

        <input name="price" placeholder="Цена за урок" class="w-full p-3 bg-slate-800 rounded">

        <input name="level" placeholder="Уровень (beginner)" class="w-full p-3 bg-slate-800 rounded">

        <div id="tags">
            <input name="tags[]" placeholder="Тег" class="w-full p-3 bg-slate-800 rounded mb-2">
        </div>

        <button type="button" onclick="addTag()" class="text-cyan-400">+ добавить тег</button>

        <br>

        <button class="bg-cyan-500 px-6 py-3 rounded">
            Сохранить
        </button>

    </form>

    <script>
        function addTag() {
            const div = document.getElementById('tags');
            const input = document.createElement('input');

            input.name = "tags[]";
            input.className = "w-full p-3 bg-slate-800 rounded mb-2";
            input.placeholder = "Тег";

            div.appendChild(input);
        }
    </script>
@endsection
