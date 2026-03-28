<!DOCTYPE html>
<html lang="ru" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Complex Services — IT решения и обучение</title>
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    <link
        href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700;800;900&family=JetBrains+Mono:wght@400;500;600&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <!-- Neural network background -->
    {{-- <canvas id="neural-canvas"></canvas> --}}

    <!-- ══════════ NAVBAR ══════════ -->
    {{-- @include('includes.nav') --}}

    <!-- ══════════ HERO ══════════ -->
    {{-- @include('includes.hero') --}}

    <div class="divider"></div>
    @yield('content')

    <!-- ══════════ FOOTER ══════════ -->
    @include('includes.footer')

    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
