@extends('admin.layout')

@section('content')
<h1 class="text-2xl font-bold mb-6">Лид #{{ $lead->id }}</h1>

<div class="bg-slate-900 rounded-xl p-6 space-y-3">
    <div><b>Тип:</b> {{ $lead->type }}</div>
    <div><b>Название:</b> {{ $lead->title }}</div>
    <div><b>Имя:</b> {{ $lead->name }}</div>
    <div><b>Телефон:</b> {{ $lead->phone }}</div>
    <div><b>Email:</b> {{ $lead->email }}</div>
    <div><b>Источник:</b> {{ $lead->source }}</div>
    <div><b>Сообщение:</b> {{ $lead->message }}</div>
    <div><b>IP:</b> {{ $lead->ip }}</div>
    <div><b>User Agent:</b> {{ $lead->user_agent }}</div>
    <div>
        <b>WhatsApp:</b>
        @if($lead->whatsapp_url)
            <a href="{{ $lead->whatsapp_url }}" target="_blank" class="text-cyan-400">
                открыть
            </a>
        @endif
    </div>
</div>

<form method="POST" action="{{ route('admin.leads.status', $lead) }}" class="mt-6 flex gap-3">
    @csrf
    @method('PATCH')

    <select name="status" class="bg-slate-800 rounded px-3 py-2">
        <option value="new" @selected($lead->status === 'new')>new</option>
        <option value="in_progress" @selected($lead->status === 'in_progress')>in_progress</option>
        <option value="done" @selected($lead->status === 'done')>done</option>
        <option value="canceled" @selected($lead->status === 'canceled')>canceled</option>
    </select>

    <button class="bg-cyan-500 px-4 py-2 rounded">Обновить статус</button>
</form>
@endsection