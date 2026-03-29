<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Admin</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-slate-900 text-white">

    <div class="flex min-h-screen">

        <!-- Sidebar -->
        <aside class="w-64 bg-slate-950 p-5">
            <h1 class="text-xl font-bold mb-6 text-cyan-400">ADMIN</h1>

            <nav class="space-y-2">
                <a href="{{ route('admin.services.index') }}" class="block p-2 hover:bg-slate-800 rounded">Услуги</a>
                <a href="{{ route('admin.courses.index') }}" class="block p-2 hover:bg-slate-800 rounded">Курсы</a>
                <a href="{{ route('admin.leads.index') }}" class="block p-2 hover:bg-slate-800 rounded">Лиды</a>
            </nav>
        </aside>

        <!-- Content -->
        <main class="flex-1 p-6">
            @yield('content')
        </main>

    </div>

</body>

</html>
