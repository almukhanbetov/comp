@extends('admin.layout')
@section('content')
    <h2 class="text-2xl mb-6">Создать услугу</h2>

    <form method="POST" action="{{ route('admin.services.store') }}" class="space-y-4">
        @csrf

        <input name="title" placeholder="Название" class="w-full p-3 bg-slate-800 rounded">

        <textarea name="description" placeholder="Описание" class="w-full p-3 bg-slate-800 rounded"></textarea>

        <input name="price" placeholder="Цена" class="w-full p-3 bg-slate-800 rounded">

        <div id="features">
            <input name="features[]" placeholder="Фича" class="w-full p-3 bg-slate-800 rounded mb-2">
        </div>

        <button type="button" onclick="addFeature()" class="text-cyan-400">+ добавить пункт</button>

        <br>

        <button class="bg-cyan-500 px-6 py-3 rounded">
            Сохранить
        </button>

    </form>

    <script>
        function addFeature() {
            const div = document.getElementById('features');
            const input = document.createElement('input');

            input.name = "features[]";
            input.className = "w-full p-3 bg-slate-800 rounded mb-2";
            input.placeholder = "Фича";

            div.appendChild(input);
        }
    </script>
@endsection
