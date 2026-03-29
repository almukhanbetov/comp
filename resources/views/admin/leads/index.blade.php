@extends('admin.layout')

@section('content')
<div class="flex items-center justify-between mb-6">
    <h1 class="text-2xl font-bold">Лиды</h1>
</div>

<form method="GET" class="flex gap-3 mb-6">
    <select name="status" class="bg-slate-800 rounded px-3 py-2">
        <option value="">Все статусы</option>
        <option value="new">new</option>
        <option value="in_progress">in_progress</option>
        <option value="done">done</option>
        <option value="canceled">canceled</option>
    </select>

    <select name="source" class="bg-slate-800 rounded px-3 py-2">
        <option value="">Все источники</option>
        <option value="site">site</option>
        <option value="api">api</option>
        <option value="react">react</option>
        <option value="expo">expo</option>
    </select>

    <button class="bg-cyan-500 px-4 py-2 rounded">Фильтр</button>
</form>

<div class="overflow-x-auto bg-slate-900 rounded-xl">
    <table class="w-full text-sm">
        <thead class="bg-slate-800">
            <tr>
                <th class="text-left p-3">#</th>
                <th class="text-left p-3">Тип</th>
                <th class="text-left p-3">Название</th>
                <th class="text-left p-3">Имя</th>
                <th class="text-left p-3">Телефон</th>
                <th class="text-left p-3">Источник</th>
                <th class="text-left p-3">Статус</th>
                <th class="text-left p-3">Дата</th>
                <th class="text-left p-3">Действия</th>
            </tr>
        </thead>
        <tbody>
            @foreach($leads as $lead)
                <tr class="border-t border-slate-800">
                    <td class="p-3">{{ $lead->id }}</td>
                    <td class="p-3">{{ $lead->type }}</td>
                    <td class="p-3">{{ $lead->title }}</td>
                    <td class="p-3">{{ $lead->name }}</td>
                    <td class="p-3">{{ $lead->phone }}</td>
                    <td class="p-3">{{ $lead->source }}</td>
                    <td class="p-3">{{ $lead->status }}</td>
                    <td class="p-3">{{ $lead->created_at?->format('d.m.Y H:i') }}</td>
                    <td class="p-3">
                        <a href="{{ route('admin.leads.show', $lead) }}" class="text-cyan-400">
                            Открыть
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="mt-6">
    {{ $leads->withQueryString()->links() }}
</div>
@endsection