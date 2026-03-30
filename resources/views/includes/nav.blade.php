<nav class="fixed top-0 left-0 right-0 z-50">
    <div class="w-full px-6 sm:px-10 lg:px-16 h-20 flex items-center justify-between">
        <a href="#" class="flex items-center gap-2.5">
            <div class="relative w-8 h-8">
                <div class="absolute inset-0 bg-[#00e5ff]/20 rounded-lg rotate-12"></div>
                <svg class="relative z-10 w-8 h-8" viewBox="0 0 32 32" fill="none">
                    <polyline points="4,20 10,12 16,18 22,8 28,14" stroke="#ff6b35" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    <circle cx="28" cy="14" r="2.5" fill="#00e5ff" />
                </svg>
            </div>
            <span class="font-display font-bold text-2xl">Complex<span class="text-[#ff6b35]">
                    Services</span></span>
        </a>

        <div class="hidden md:flex items-center gap-10 text-base font-semibold text-slate-400">
            <a href="/" class="hover:text-[#00e5ff] transition-colors">Главная</a>
            <a href="#services" class="hover:text-[#00e5ff] transition-colors">Услуги</a>
            <a href="#teaching" class="hover:text-[#00e5ff] transition-colors">Обучение</a>
            <a href="#about" class="hover:text-[#00e5ff] transition-colors">Обо мне</a>
            <a href="#contact" class="hover:text-[#00e5ff] transition-colors">Контакты</a>
            <a href="{{ route('login') }}" class="btn-cyan px-5 py-2 rounded-xl text-sm">Войти</a>
        </div>

        <button id="burger" class="md:hidden flex flex-col gap-1.5 w-9 h-9 justify-center">
            <span class="w-6 h-0.5 bg-[#00e5ff]"></span>
            <span class="w-4 h-0.5 bg-[#00e5ff]"></span>
            <span class="w-6 h-0.5 bg-[#00e5ff]"></span>
        </button>
    </div>
    <div id="mobile-menu"
        class="hidden md:hidden border-t border-[rgba(0,229,255,0.1)] bg-[#080c14]/98 px-6 py-4 flex flex-col gap-4 text-sm text-slate-400">
        <a href="/" onclick="closeMob()" class="hover:text-[#00e5ff] transition-colors">Главная</a>
        <a href="#services" onclick="closeMob()" class="hover:text-[#00e5ff] transition-colors">Услуги</a>
        <a href="#teaching" onclick="closeMob()" class="hover:text-[#00e5ff] transition-colors">Обучение</a>
        <a href="#about" onclick="closeMob()" class="hover:text-[#00e5ff] transition-colors">Обо мне</a>
        <a href="#contact" onclick="closeMob()" class="hover:text-[#00e5ff] transition-colors">Контакты</a>
        <a href="{{ route('login') }}" onclick="closeMob()" class="text-[#00e5ff]">Войти</a>
    </div>
</nav>
