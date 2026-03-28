@extends('layouts.app')
@section('content')
    <!-- ══════════ SERVICES ══════════ -->
    <section id="services" class="py-24 relative z-10 bg-[#0a0f1a]">
        <div class="absolute top-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-[#00e5ff]/25 to-transparent">
        </div>
        <div
            class="absolute top-1/2 right-0 w-96 h-96 bg-[#ff6b35]/4 rounded-full blur-3xl pointer-events-none -translate-y-1/2">
        </div>

        <div class="w-full px-6 sm:px-10 lg:px-16">
            <div class="reveal flex flex-col lg:flex-row lg:items-end justify-between gap-6 mb-14">
                <div>
                    <p class="text-[#00e5ff] text-xs font-mono tracking-[0.2em] uppercase mb-4 flex items-center gap-2">
                        <span class="w-8 h-px bg-[#00e5ff]"></span> Услуги
                    </p>
                    <h2 class="font-display text-4xl sm:text-5xl lg:text-6xl font-black leading-tight accent-line">
                        Наши <span class="grad">услуги</span>
                    </h2>
                </div>
                <p class="text-slate-400 text-base max-w-xs leading-relaxed">Беру проекты под ключ или отдельные
                    задачи. Работаю удалённо, часовой пояс +5 (Алматы).</p>
            </div>

            <!-- 4 big cards 2x2 -->
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-5 mb-5">

                <!-- Web dev -->
                <div class="reveal card rounded-3xl p-9 flex flex-col" style="min-height:400px">
                    <div class="flex items-start justify-between mb-6">
                        <div
                            class="w-14 h-14 rounded-2xl bg-[#00e5ff]/10 border border-[#00e5ff]/15 flex items-center justify-center">
                            <svg class="w-7 h-7 text-[#00e5ff]" fill="none" stroke="currentColor" stroke-width="1.5"
                                viewBox="0 0 24 24">
                                <path d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                            </svg>
                        </div>
                        <span class="svc-num">01</span>
                    </div>
                    <h3 class="font-display text-2xl font-black mb-4">Веб-разработка</h3>
                    <p class="text-slate-400 text-base leading-relaxed flex-1 mb-6">Лендинги, корпоративные сайты,
                        веб-приложения и REST API. React/Vue фронтенд + Python/Node бэкенд.</p>
                    <ul class="space-y-2 mb-6">
                        <li class="flex items-center gap-2 text-xs text-slate-400"><span
                                class="w-1.5 h-1.5 rounded-full bg-[#00e5ff] flex-shrink-0"></span>Сайты под ключ за
                            7–14 дней</li>
                        <li class="flex items-center gap-2 text-xs text-slate-400"><span
                                class="w-1.5 h-1.5 rounded-full bg-[#00e5ff] flex-shrink-0"></span>SPA и сложные
                            веб-приложения</li>
                        <li class="flex items-center gap-2 text-xs text-slate-400"><span
                                class="w-1.5 h-1.5 rounded-full bg-[#00e5ff] flex-shrink-0"></span>API, интеграции,
                            парсеры</li>
                    </ul>
                    <div class="flex items-center justify-between pt-4 border-t border-[rgba(0,229,255,0.08)]">
                        <div>
                            <div class="text-[#00e5ff] font-mono font-bold text-lg">от 50 000 ₸</div>
                            <div class="text-slate-600 text-xs">за проект</div>
                        </div>
                        <a href="#contact" class="btn-cyan px-4 py-2.5 rounded-xl text-xs font-bold">Заказать</a>
                    </div>
                </div>

                <div class="reveal card-orange card rounded-3xl p-9 flex flex-col rd3" style="min-height:400px">
                    <div class="flex items-start justify-between mb-6">
                        <div
                            class="w-14 h-14 rounded-2xl bg-[#ff6b35]/10 border border-[#ff6b35]/15 flex items-center justify-center">
                            <svg class="w-7 h-7 text-[#ff6b35]" fill="none" stroke="currentColor" stroke-width="1.5"
                                viewBox="0 0 24 24">
                                <path
                                    d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <span class="svc-num"
                            style="background:linear-gradient(135deg,rgba(255,107,53,0.2),rgba(255,107,53,0.03));-webkit-background-clip:text;">02</span>
                    </div>
                    <h3 class="font-display text-2xl font-black mb-4">Разработка сайтов</h3>
                    <p class="text-slate-400 text-base leading-relaxed flex-1 mb-6">Современные сайты под ключ:
                        лендинги, визитки, интернет-магазины, корпоративные порталы. Быстро, красиво, адаптивно.</p>
                    <ul class="space-y-2 mb-6">
                        <li class="flex items-center gap-2 text-xs text-slate-400"><span
                                class="w-1.5 h-1.5 rounded-full bg-[#ff6b35] flex-shrink-0"></span>Лендинги от 7 дней
                        </li>
                        <li class="flex items-center gap-2 text-xs text-slate-400"><span
                                class="w-1.5 h-1.5 rounded-full bg-[#ff6b35] flex-shrink-0"></span>Интернет-магазины
                            (WooCommerce, кастом)</li>
                        <li class="flex items-center gap-2 text-xs text-slate-400"><span
                                class="w-1.5 h-1.5 rounded-full bg-[#ff6b35] flex-shrink-0"></span>SEO-оптимизация и
                            хостинг</li>
                    </ul>
                    <div class="flex items-center justify-between pt-4 border-t border-[rgba(255,107,53,0.1)]">
                        <div>
                            <div class="text-[#ff6b35] font-mono font-bold text-lg">от 30 000 ₸</div>
                            <div class="text-slate-600 text-xs">за проект</div>
                        </div>
                        <a href="#contact"
                            class="px-4 py-2.5 rounded-xl text-xs font-bold border border-[#ff6b35]/30 text-[#ff6b35] hover:bg-[#ff6b35]/10 transition-all">Заказать</a>
                    </div>
                </div>

                <div class="reveal card rounded-3xl p-9 flex flex-col rd2" style="min-height:400px">
                    <div class="flex items-start justify-between mb-6">
                        <div
                            class="w-14 h-14 rounded-2xl bg-[#00b4d8]/10 border border-[#00b4d8]/15 flex items-center justify-center">
                            <svg class="w-7 h-7 text-[#00b4d8]" fill="none" stroke="currentColor" stroke-width="1.5"
                                viewBox="0 0 24 24">
                                <path d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <span class="svc-num"
                            style="background:linear-gradient(135deg,rgba(0,180,216,0.2),rgba(0,180,216,0.03));-webkit-background-clip:text;">03</span>
                    </div>
                    <h3 class="font-display text-2xl font-black mb-4">Мобильные приложения</h3>
                    <p class="text-slate-400 text-base leading-relaxed flex-1 mb-6">Android и iOS приложения на React
                        Native / Flutter. Одна кодовая база — два магазина.</p>
                    <ul class="space-y-2 mb-6">
                        <li class="flex items-center gap-2 text-xs text-slate-400"><span
                                class="w-1.5 h-1.5 rounded-full bg-[#00b4d8] flex-shrink-0"></span>React Native /
                            Flutter</li>
                        <li class="flex items-center gap-2 text-xs text-slate-400"><span
                                class="w-1.5 h-1.5 rounded-full bg-[#00b4d8] flex-shrink-0"></span>Публикация в App
                            Store и Google Play</li>
                        <li class="flex items-center gap-2 text-xs text-slate-400"><span
                                class="w-1.5 h-1.5 rounded-full bg-[#00b4d8] flex-shrink-0"></span>Интеграция с API и
                            платёжками</li>
                    </ul>
                    <div class="flex items-center justify-between pt-4 border-t border-[rgba(0,180,216,0.1)]">
                        <div>
                            <div class="text-[#00b4d8] font-mono font-bold text-lg">от 100 000 ₸</div>
                            <div class="text-slate-600 text-xs">за проект</div>
                        </div>
                        <a href="#contact"
                            class="px-4 py-2.5 rounded-xl text-xs font-bold border border-[#00b4d8]/30 text-[#00b4d8] hover:bg-[#00b4d8]/10 transition-all">Заказать</a>
                    </div>
                </div>
                <div class="reveal card-orange card rounded-3xl p-9 flex flex-col rd1" style="min-height:400px">
                    <div class="flex items-start justify-between mb-6">
                        <div
                            class="w-14 h-14 rounded-2xl bg-[#ff6b35]/10 border border-[#ff6b35]/15 flex items-center justify-center">
                            <svg class="w-7 h-7 text-[#ff6b35]" fill="none" stroke="currentColor" stroke-width="1.5"
                                viewBox="0 0 24 24">
                                <path d="M5 12H3m2 0a7 7 0 1014 0M5 12a7 7 0 0114 0m0 0h2M9 12h6M12 5v14" />
                            </svg>
                        </div>
                        <span class="svc-num"
                            style="background:linear-gradient(135deg,rgba(255,107,53,0.2),rgba(255,107,53,0.03));-webkit-background-clip:text;">04</span>
                    </div>
                    <h3 class="font-display text-2xl font-black mb-4">DevOps</h3>
                    <p class="text-slate-400 text-base leading-relaxed flex-1 mb-6">Настройка VPS/VDS, Linux-серверов,
                        Nginx, мониторинг, CI/CD. Разворачиваю и поддерживаю инфраструктуру.</p>
                    <ul class="space-y-2 mb-6">
                        <li class="flex items-center gap-2 text-xs text-slate-400"><span
                                class="w-1.5 h-1.5 rounded-full bg-[#ff6b35] flex-shrink-0"></span>Настройка сервера с
                            нуля</li>
                        <li class="flex items-center gap-2 text-xs text-slate-400"><span
                                class="w-1.5 h-1.5 rounded-full bg-[#ff6b35] flex-shrink-0"></span>Docker, Nginx, SSL,
                            резервные копии</li>
                        <li class="flex items-center gap-2 text-xs text-slate-400"><span
                                class="w-1.5 h-1.5 rounded-full bg-[#ff6b35] flex-shrink-0"></span>Мониторинг и алерты
                        </li>
                    </ul>
                    <div class="flex items-center justify-between pt-4 border-t border-[rgba(255,107,53,0.1)]">
                        <div>
                            <div class="text-[#ff6b35] font-mono font-bold text-lg">от 20 000 ₸</div>
                            <div class="text-slate-600 text-xs">за задачу</div>
                        </div>
                        <a href="#contact"
                            class="px-4 py-2.5 rounded-xl text-xs font-bold border border-[#ff6b35]/30 text-[#ff6b35] hover:bg-[#ff6b35]/10 transition-all">Заказать</a>
                    </div>
                </div> <!-- Sysadmin --> <!-- Mobile --> <!-- Website design -->
            </div>
            <!-- 2 compact cards -->
            <div class="grid sm:grid-cols-2 gap-5">
                <div class="reveal card rounded-2xl p-6 flex gap-5 items-start">
                    <div
                        class="w-12 h-12 rounded-xl bg-[#00e5ff]/10 border border-[#00e5ff]/12 flex items-center justify-center flex-shrink-0">
                        <svg class="w-6 h-6 text-[#00e5ff]" fill="none" stroke="currentColor" stroke-width="1.8"
                            viewBox="0 0 24 24">
                            <path
                                d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                        </svg>
                    </div>
                    <div class="flex-1">
                        <h3 class="font-display font-bold text-base mb-1.5">Системное администрирование и базы данных
                        </h3>
                        <p class="text-slate-500 text-xs leading-relaxed mb-3">Linux, Windows. PostgreSQL, MySQL,
                            MongoDB — проектирование и оптимизация.</p>
                        <div class="flex flex-wrap gap-1.5">
                            <span class="tag-cyan px-2 py-0.5 rounded text-xs font-mono">Установка ОС</span>
                            <span class="tag-cyan px-2 py-0.5 rounded text-xs font-mono">Установка ПО</span>
                            <span class="tag-blue px-2 py-0.5 rounded text-xs font-mono">Настройка сети</span>
                        </div>
                    </div>
                    <a href="#contact"
                        class="text-[#00e5ff] text-xs font-mono whitespace-nowrap hover:underline mt-1">Заказать →</a>
                </div>

                <div class="reveal card-orange card rounded-2xl p-6 flex gap-5 items-start rd1">
                    <div
                        class="w-12 h-12 rounded-xl bg-[#ff6b35]/10 border border-[#ff6b35]/12 flex items-center justify-center flex-shrink-0">
                        <svg class="w-6 h-6 text-[#ff6b35]" fill="none" stroke="currentColor" stroke-width="1.8"
                            viewBox="0 0 24 24">
                            <path
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    <div class="flex-1">
                        <h3 class="font-display font-bold text-base mb-1.5">Консультации и код-ревью</h3>
                        <p class="text-slate-500 text-xs leading-relaxed mb-3">Разбор архитектуры, ревью кода, помощь с
                            деплоем. Разовые сессии или постоянное сопровождение.</p>
                        <div class="flex flex-wrap gap-1.5">
                            <span class="tag-orange px-2 py-0.5 rounded text-xs font-mono">Code Review</span>
                            <span class="tag-orange px-2 py-0.5 rounded text-xs font-mono">Архитектура</span>
                        </div>
                    </div>
                    <a href="#contact"
                        class="text-[#ff6b35] text-xs font-mono whitespace-nowrap hover:underline mt-1">Заказать →</a>
                </div>
            </div>
        </div>
    </section>
    <!-- <div class="divider"></div> -->
    <!-- ══════════ TEACHING ══════════ -->
    <section id="teaching" class="py-24 relative z-10">
        <div
            class="absolute top-1/2 left-0 w-96 h-96 bg-[#00e5ff]/4 rounded-full blur-3xl pointer-events-none -translate-y-1/2">
        </div>

        <div class="w-full px-6 sm:px-10 lg:px-16">
            <div class="reveal mb-14">
                <p class="text-[#00e5ff] text-xs font-mono tracking-[0.2em] uppercase mb-4 flex items-center gap-2">
                    <span class="w-6 h-px bg-[#00e5ff]"></span> Обучение
                </p>
                <h2 class="font-display text-4xl sm:text-5xl lg:text-6xl font-black leading-tight accent-line">
                    Обучаем <span class="grad">программированию</span>
                </h2>
            </div>

            <!-- Language direction cards -->
            <div class="reveal grid sm:grid-cols-2 lg:grid-cols-3 gap-4 mb-12">
                <!-- Python -->
                <div class="card rounded-2xl p-6 flex flex-col gap-4">
                    <div class="flex items-center gap-3">
                        <div
                            class="w-12 h-12 rounded-xl bg-[#3b82f6]/10 border border-[#3b82f6]/20 flex items-center justify-center flex-shrink-0">
                            <span class="font-mono font-bold text-[#3b82f6] text-lg">Py</span>
                        </div>
                        <div>
                            <div class="font-display font-bold">Python</div>
                            <div class="text-xs text-slate-500 font-mono">с нуля до middle</div>
                        </div>
                    </div>
                    <p class="text-slate-500 text-xs leading-relaxed">Синтаксис, ООП, работа с файлами и API.
                        Django/FastAPI для веба, автоматизация, парсинг. Идеальный первый язык.</p>
                    <div class="flex flex-wrap gap-1.5">
                        <span class="tag-blue px-2 py-0.5 rounded text-xs font-mono">Django</span>
                        <span class="tag-blue px-2 py-0.5 rounded text-xs font-mono">FastAPI</span>
                        <span class="tag-blue px-2 py-0.5 rounded text-xs font-mono">Pandas</span>
                        <span class="tag-blue px-2 py-0.5 rounded text-xs font-mono">Asyncio</span>
                    </div>
                    <div class="flex items-center justify-between pt-3 border-t border-[rgba(59,130,246,0.1)]">
                        <span class="text-[#3b82f6] font-mono font-bold text-sm">от 5 000 ₸ / урок</span>
                        <a href="#contact" class="text-[#3b82f6] text-xs font-mono hover:underline">Записаться →</a>
                    </div>
                </div>

                <!-- Go -->
                <div class="card-orange card rounded-2xl p-6 flex flex-col gap-4 rd1">
                    <div class="flex items-center gap-3">
                        <div
                            class="w-12 h-12 rounded-xl bg-[#00e5ff]/10 border border-[#00e5ff]/20 flex items-center justify-center flex-shrink-0">
                            <span class="font-mono font-bold text-[#00e5ff] text-lg">Go</span>
                        </div>
                        <div>
                            <div class="font-display font-bold">Golang</div>
                            <div class="text-xs text-slate-500 font-mono">backend разработка</div>
                        </div>
                    </div>
                    <p class="text-slate-500 text-xs leading-relaxed">Быстрый компилируемый язык для backend. Горутины,
                        каналы, REST API на Gin/Echo. Популярен в DevOps и высоконагруженных системах.</p>
                    <div class="flex flex-wrap gap-1.5">
                        <span class="tag-cyan px-2 py-0.5 rounded text-xs font-mono">Gin</span>
                        <span class="tag-cyan px-2 py-0.5 rounded text-xs font-mono">Goroutines</span>
                        <span class="tag-cyan px-2 py-0.5 rounded text-xs font-mono">gRPC</span>
                        <span class="tag-cyan px-2 py-0.5 rounded text-xs font-mono">Docker</span>
                    </div>
                    <div class="flex items-center justify-between pt-3 border-t border-[rgba(0,229,255,0.1)]">
                        <span class="text-[#00e5ff] font-mono font-bold text-sm">от 6 000 ₸ / урок</span>
                        <a href="#contact" class="text-[#00e5ff] text-xs font-mono hover:underline">Записаться →</a>
                    </div>
                </div>

                <!-- C++ -->
                <div class="card rounded-2xl p-6 flex flex-col gap-4 rd2">
                    <div class="flex items-center gap-3">
                        <div
                            class="w-12 h-12 rounded-xl bg-[#ff6b35]/10 border border-[#ff6b35]/20 flex items-center justify-center flex-shrink-0">
                            <span class="font-mono font-bold text-[#ff6b35] text-sm">C++</span>
                        </div>
                        <div>
                            <div class="font-display font-bold">C++</div>
                            <div class="text-xs text-slate-500 font-mono">системное программирование</div>
                        </div>
                    </div>
                    <p class="text-slate-500 text-xs leading-relaxed">Указатели, память, ООП, STL. Алгоритмы и
                        структуры данных. Подготовка к олимпиадам и техническим собеседованиям в крупных компаниях.</p>
                    <div class="flex flex-wrap gap-1.5">
                        <span class="tag-orange px-2 py-0.5 rounded text-xs font-mono">STL</span>
                        <span class="tag-orange px-2 py-0.5 rounded text-xs font-mono">Алгоритмы</span>
                        <span class="tag-orange px-2 py-0.5 rounded text-xs font-mono">ООП</span>
                        <span class="tag-orange px-2 py-0.5 rounded text-xs font-mono">Память</span>
                    </div>
                    <div class="flex items-center justify-between pt-3 border-t border-[rgba(255,107,53,0.1)]">
                        <span class="text-[#ff6b35] font-mono font-bold text-sm">от 6 000 ₸ / урок</span>
                        <a href="#contact" class="text-[#ff6b35] text-xs font-mono hover:underline">Записаться →</a>
                    </div>
                </div>

                <div class="card rounded-2xl p-6 flex flex-col gap-4 rd2">
                    <div class="flex items-center gap-3">
                        <div
                            class="w-12 h-12 rounded-xl bg-[#ff6b35]/10 border border-[#ff6b35]/20 flex items-center justify-center flex-shrink-0">
                            <span class="font-mono font-bold text-[#ff6b35] text-sm">PHP</span>
                        </div>
                        <div>
                            <div class="font-display font-bold">PHP</div>
                            <div class="text-xs text-slate-500 font-mono">Обучаем PHP — от новичка до
                                backend-разработчика</div>
                        </div>
                    </div>
                    <p class="text-slate-500 text-xs leading-relaxed">PHP — один из самых востребованных языков для
                        веб-разработки. Изучим синтаксис, ООП, работу с базами данных и создадим реальный проект на
                        Laravel.</p>
                    <div class="flex flex-wrap gap-1.5">
                        <span class="tag-orange px-2 py-0.5 rounded text-xs font-mono">Laravel</span>
                        <span class="tag-orange px-2 py-0.5 rounded text-xs font-mono">Алгоритмы</span>
                        <span class="tag-orange px-2 py-0.5 rounded text-xs font-mono">MySQL</span>
                        <span class="tag-orange px-2 py-0.5 rounded text-xs font-mono">Composer</span>
                    </div>
                    <div class="flex items-center justify-between pt-3 border-t border-[rgba(255,107,53,0.1)]">
                        <span class="text-[#ff6b35] font-mono font-bold text-sm">от 6 000 ₸ / урок</span>
                        <a href="#contact" class="text-[#ff6b35] text-xs font-mono hover:underline">Записаться →</a>
                    </div>
                </div>

                <div class="card rounded-2xl p-6 flex flex-col gap-4 rd2">
                    <div class="flex items-center gap-3">
                        <div
                            class="w-12 h-12 rounded-xl bg-[#ff6b35]/10 border border-[#ff6b35]/20 flex items-center justify-center flex-shrink-0">
                            <span class="font-mono font-bold text-[#ff6b35] text-sm">1С</span>
                        </div>
                        <div>
                            <div class="font-display font-bold">1С</div>
                            <div class="text-xs text-slate-500 font-mono">Обучаем 1С — от настройки до разработки
                                конфигураций</div>
                        </div>
                    </div>
                    <p class="text-slate-500 text-xs leading-relaxed">1С — самая востребованная платформа автоматизации
                        бизнеса в СНГ. Изучим встроенный язык 1С, работу с конфигурациями, отчётами и интеграциями.</p>
                    <div class="flex flex-wrap gap-1.5">
                        <span class="tag-orange px-2 py-0.5 rounded text-xs font-mono">1С:Предприятие</span>
                        <span class="tag-orange px-2 py-0.5 rounded text-xs font-mono">Запросы</span>
                        <span class="tag-orange px-2 py-0.5 rounded text-xs font-mono">Отчёты</span>
                        <span class="tag-orange px-2 py-0.5 rounded text-xs font-mono">Интеграции</span>
                    </div>
                    <div class="flex items-center justify-between pt-3 border-t border-[rgba(255,107,53,0.1)]">
                        <span class="text-[#ff6b35] font-mono font-bold text-sm">от 6 000 ₸ / урок</span>
                        <a href="#contact" class="text-[#ff6b35] text-xs font-mono hover:underline">Записаться →</a>
                    </div>
                </div>

            </div>

            <div class="reveal grid lg:grid-cols-2 gap-8 items-start">

                <!-- Left: plans -->
                <div>
                    <p class="text-slate-300 leading-relaxed mb-10 text-xl font-medium">Индивидуальные занятия онлайн.
                        Ведем уроки с нуля до уровня джуна.</p>

                    <!-- Plans -->
                    <div class="space-y-4">
                        <div class="card rounded-2xl p-5 flex gap-4 items-start">
                            <div
                                class="w-10 h-10 rounded-xl bg-[#00e5ff]/10 border border-[#00e5ff]/15 flex items-center justify-center flex-shrink-0 text-[#00e5ff] font-mono font-bold text-sm">
                                1</div>
                            <div>
                                <div class="font-display font-bold text-lg mb-2">Разовое занятие</div>
                                <p class="text-slate-400 text-sm leading-relaxed mb-3">1.5 часа. Разбираем конкретную
                                    тему, задачу или проект. Подходит для тех, кто застрял.</p>
                                <div class="text-[#00e5ff] font-mono font-bold">5 000 ₸ / сессия</div>
                            </div>
                        </div>
                        <div class="card rounded-2xl p-5 flex gap-4 items-start"
                            style="border-color:rgba(0,229,255,0.2);">
                            <div
                                class="w-10 h-10 rounded-xl bg-[#ff6b35]/10 border border-[#ff6b35]/15 flex items-center justify-center flex-shrink-0 text-[#ff6b35] font-mono font-bold text-sm">
                                2</div>
                            <div>
                                <div class="font-display font-bold text-lg mb-2">Пакет: 8 занятий <span
                                        class="text-[#ff6b35] text-xs font-normal font-mono ml-1">🔥 Популярно</span>
                                </div>
                                <p class="text-slate-400 text-sm leading-relaxed mb-3">Месячный интенсив. 2 раза в
                                    неделю по 1.5 часа. ДЗ, код-ревью, проект в портфолио.</p>
                                <div class="text-[#ff6b35] font-mono font-bold">35 000 ₸ / месяц</div>
                            </div>
                        </div>
                        <div class="card rounded-2xl p-5 flex gap-4 items-start">
                            <div
                                class="w-10 h-10 rounded-xl bg-[#00b4d8]/10 border border-[#00b4d8]/15 flex items-center justify-center flex-shrink-0 text-[#00b4d8] font-mono font-bold text-sm">
                                3</div>
                            <div>
                                <div class="font-display font-bold text-lg mb-2">Менторство</div>
                                <p class="text-slate-400 text-sm leading-relaxed mb-3">Постоянная поддержка: вопросы в
                                    чат, разбор кода, помощь с трудоустройством. 3+ месяца.</p>
                                <div class="text-[#00b4d8] font-mono font-bold">25 000 ₸ / месяц</div>
                            </div>
                        </div>
                    </div>

                    <a href="#contact"
                        class="btn-cyan inline-flex items-center gap-2 px-7 py-3.5 rounded-xl text-sm mt-7">
                        Записаться на пробный урок
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5"
                            viewBox="0 0 24 24">
                            <path d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                </div>

                <!-- Right: curriculum terminal -->
                <div class="reveal rd1">
                    <div class="terminal">
                        <div class="term-bar">
                            <span class="dot bg-[#ff5f57]"></span><span class="dot bg-[#febc2e]"></span><span
                                class="dot bg-[#28c840]"></span>
                            <span class="font-mono text-slate-500 text-xs ml-2">curriculum.md</span>
                        </div>
                        <div class="p-6 font-mono text-xs leading-relaxed space-y-1.5">
                            <div class="text-[#00e5ff] font-bold"># Программа обучения</div>
                            <div class="text-slate-500">────────────────────────────</div>
                            <div><span class="text-[#ff6b35]">## Блок 1</span> <span class="text-slate-300">— Основы
                                    любого языка</span></div>
                            <div class="text-slate-400 ml-4">✓ Python / Go / C++ — на выбор</div>
                            <div class="text-slate-400 ml-4">✓ Git, терминал, редактор (VS Code)</div>
                            <div class="text-slate-400 ml-4">✓ Алгоритмы и структуры данных</div>
                            <div><span class="text-[#ff6b35]">## Блок 2</span> <span class="text-slate-300">— Веб и
                                    Backend</span></div>
                            <div class="text-slate-400 ml-4">✓ HTML/CSS, адаптивность</div>
                            <div class="text-slate-400 ml-4">✓ REST API (Django / Gin / Node)</div>
                            <div class="text-slate-400 ml-4">✓ PostgreSQL, ORM, миграции</div>
                            <div><span class="text-[#ff6b35]">## Блок 3</span> <span class="text-slate-300">— Go / C++
                                    углублённо</span></div>
                            <div class="text-slate-400 ml-4">✓ Горутины, каналы, конкурентность</div>
                            <div class="text-slate-400 ml-4">✓ Указатели, шаблоны C++17/20</div>
                            <div class="text-slate-400 ml-4">✓ gRPC, микросервисы</div>
                            <div><span class="text-[#ff6b35]">## Блок 4</span> <span class="text-slate-300">—
                                    Инфраструктура</span></div>
                            <div class="text-slate-400 ml-4">✓ Linux, SSH, Docker и деплой</div>
                            <div class="text-slate-400 ml-4">✓ CI/CD, GitHub Actions</div>
                            <div><span class="text-[#ff6b35]">## Блок 5</span> <span class="text-slate-300">—
                                    Карьера</span></div>
                            <div class="text-slate-400 ml-4">✓ Портфолио и GitHub профиль</div>
                            <div class="text-slate-400 ml-4">✓ Подготовка к собеседованию</div>
                            <div class="text-slate-400 ml-4">✓ Первые фриланс-заказы</div>
                            <div class="text-slate-500 mt-1">────────────────────────────</div>
                            <div class="text-[#00e5ff]">→ Программа гибкая, под тебя<span class="cursor">▋</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <div class="divider"></div>

    <!-- ══════════ STACK ══════════ -->
    <section id="stack" class="py-20 relative z-10 bg-[#0a0f1a]">
        <div class="absolute top-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-[#ff6b35]/20 to-transparent">
        </div>
        <div class="w-full px-6 sm:px-10 lg:px-16">
            <div class="reveal mb-10">
                <p class="text-[#00e5ff] text-xs font-mono tracking-[0.2em] uppercase mb-4 flex items-center gap-2">
                    <span class="w-6 h-px bg-[#00e5ff]"></span> Стек
                </p>
                <h2 class="font-display text-4xl font-extrabold">Технологии</h2>
            </div>
            <div class="reveal grid sm:grid-cols-2 lg:grid-cols-4 gap-5">

                <div class="card rounded-2xl p-5">
                    <div class="text-[#00e5ff] text-xs font-mono mb-4">// Фронтенд</div>
                    <div class="space-y-3">
                        <div>
                            <div class="flex justify-between text-xs font-mono mb-1"><span
                                    class="text-slate-300">React</span><span class="text-[#00e5ff]">95%</span></div>
                            <div class="pbar">
                                <div class="pfill" data-w="95"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between text-xs font-mono mb-1"><span
                                    class="text-slate-300">Vue.js</span><span class="text-[#00e5ff]">80%</span></div>
                            <div class="pbar">
                                <div class="pfill" data-w="80"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between text-xs font-mono mb-1"><span
                                    class="text-slate-300">TypeScript</span><span class="text-[#00e5ff]">85%</span>
                            </div>
                            <div class="pbar">
                                <div class="pfill" data-w="85"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between text-xs font-mono mb-1"><span
                                    class="text-slate-300">Tailwind</span><span class="text-[#00e5ff]">90%</span>
                            </div>
                            <div class="pbar">
                                <div class="pfill" data-w="90"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card rounded-2xl p-5 rd1">
                    <div class="text-[#ff6b35] text-xs font-mono mb-4">// Бэкенд</div>
                    <div class="space-y-3">
                        <div>
                            <div class="flex justify-between text-xs font-mono mb-1"><span
                                    class="text-slate-300">Python</span><span class="text-[#ff6b35]">95%</span></div>
                            <div class="pbar">
                                <div class="pfill" data-w="95"
                                    style="background:linear-gradient(90deg,#ff6b35,#ff9965)"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between text-xs font-mono mb-1"><span
                                    class="text-slate-300">Node.js</span><span class="text-[#ff6b35]">85%</span></div>
                            <div class="pbar">
                                <div class="pfill" data-w="85"
                                    style="background:linear-gradient(90deg,#ff6b35,#ff9965)"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between text-xs font-mono mb-1"><span
                                    class="text-slate-300">FastAPI</span><span class="text-[#ff6b35]">90%</span></div>
                            <div class="pbar">
                                <div class="pfill" data-w="90"
                                    style="background:linear-gradient(90deg,#ff6b35,#ff9965)"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between text-xs font-mono mb-1"><span
                                    class="text-slate-300">Django</span><span class="text-[#ff6b35]">80%</span></div>
                            <div class="pbar">
                                <div class="pfill" data-w="80"
                                    style="background:linear-gradient(90deg,#ff6b35,#ff9965)"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card rounded-2xl p-5 rd2">
                    <div class="text-[#00b4d8] text-xs font-mono mb-4">// DevOps / Базы</div>
                    <div class="space-y-3">
                        <div>
                            <div class="flex justify-between text-xs font-mono mb-1"><span
                                    class="text-slate-300">Docker</span><span class="text-[#00b4d8]">90%</span></div>
                            <div class="pbar">
                                <div class="pfill" data-w="90"
                                    style="background:linear-gradient(90deg,#00b4d8,#00e5ff)"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between text-xs font-mono mb-1"><span
                                    class="text-slate-300">Linux</span><span class="text-[#00b4d8]">90%</span></div>
                            <div class="pbar">
                                <div class="pfill" data-w="90"
                                    style="background:linear-gradient(90deg,#00b4d8,#00e5ff)"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between text-xs font-mono mb-1"><span
                                    class="text-slate-300">PostgreSQL</span><span class="text-[#00b4d8]">85%</span>
                            </div>
                            <div class="pbar">
                                <div class="pfill" data-w="85"
                                    style="background:linear-gradient(90deg,#00b4d8,#00e5ff)"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between text-xs font-mono mb-1"><span
                                    class="text-slate-300">CI/CD</span><span class="text-[#00b4d8]">75%</span></div>
                            <div class="pbar">
                                <div class="pfill" data-w="75"
                                    style="background:linear-gradient(90deg,#00b4d8,#00e5ff)"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card rounded-2xl p-5 rd3">
                    <div class="text-slate-400 text-xs font-mono mb-4">// Мобайл</div>
                    <div class="space-y-3">
                        <div>
                            <div class="flex justify-between text-xs font-mono mb-1"><span class="text-slate-300">React
                                    Native</span><span class="text-slate-400">80%</span>
                            </div>
                            <div class="pbar">
                                <div class="pfill" data-w="80"
                                    style="background:linear-gradient(90deg,#64748b,#94a3b8)"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between text-xs font-mono mb-1"><span
                                    class="text-slate-300">Flutter</span><span class="text-slate-400">65%</span></div>
                            <div class="pbar">
                                <div class="pfill" data-w="65"
                                    style="background:linear-gradient(90deg,#64748b,#94a3b8)"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between text-xs font-mono mb-1"><span
                                    class="text-slate-300">Firebase</span><span class="text-slate-400">75%</span>
                            </div>
                            <div class="pbar">
                                <div class="pfill" data-w="75"
                                    style="background:linear-gradient(90deg,#64748b,#94a3b8)"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between text-xs font-mono mb-1"><span class="text-slate-300">REST
                                    API</span><span class="text-slate-400">95%</span></div>
                            <div class="pbar">
                                <div class="pfill" data-w="95"
                                    style="background:linear-gradient(90deg,#64748b,#94a3b8)"></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <div class="divider"></div>

    <!-- ══════════ ABOUT ══════════ -->
    <section id="about" class="py-24 relative z-10">
        <div class="w-full px-6 sm:px-10 lg:px-16">
            <div class="reveal grid lg:grid-cols-2 gap-16 items-start">
                <div>
                    <p class="text-[#00e5ff] text-xs font-mono tracking-[0.2em] uppercase mb-4 flex items-center gap-2">
                        <span class="w-6 h-px bg-[#00e5ff]"></span> О компании
                    </p>
                    <h2 class="font-display text-4xl sm:text-5xl lg:text-6xl font-black leading-tight mb-8 accent-line">
                        Complex <span class="grad">Services</span> — кто мы
                    </h2>
                    <p class="text-slate-300 leading-relaxed mb-5 text-base">Мы — команда практикующих разработчиков и
                        системных инженеров из Алматы. Работаем с 2019 года: строили проекты для стартапов, малого
                        бизнеса, торговых сетей и производственных компаний.</p>
                    <p class="text-slate-300 leading-relaxed mb-5 text-base">Наша философия проста: никакой воды,
                        только результат. Пишем чистый код, документируем всё, сдаём в срок. Если что-то пойдёт не так —
                        устраняем бесплатно.</p>
                    <p class="text-slate-400 leading-relaxed mb-8">Параллельно с коммерческими проектами обучаем —
                        помогли 50+ студентам войти в IT. Преподаём Python, Go, C++ и веб-разработку в индивидуальном
                        формате. Считаем, что лучший способ понять технологию — объяснить её другому.</p>

                    <!-- Values -->
                    <div class="space-y-3 mb-8">
                        <div class="flex items-start gap-3">
                            <div
                                class="w-8 h-8 rounded-lg bg-[#00e5ff]/10 border border-[#00e5ff]/15 flex items-center justify-center flex-shrink-0 mt-0.5">
                                <svg class="w-4 h-4 text-[#00e5ff]" fill="none" stroke="currentColor"
                                    stroke-width="2" viewBox="0 0 24 24">
                                    <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div>
                                <div class="font-semibold text-sm text-white">Результат, а не процесс</div>
                                <div class="text-slate-500 text-xs mt-0.5">Берём задачу и доводим до конца. Без
                                    бесконечных согласований и лишней переписки.</div>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <div
                                class="w-8 h-8 rounded-lg bg-[#ff6b35]/10 border border-[#ff6b35]/15 flex items-center justify-center flex-shrink-0 mt-0.5">
                                <svg class="w-4 h-4 text-[#ff6b35]" fill="none" stroke="currentColor"
                                    stroke-width="2" viewBox="0 0 24 24">
                                    <path d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                            </div>
                            <div>
                                <div class="font-semibold text-sm text-white">Скорость без потери качества</div>
                                <div class="text-slate-500 text-xs mt-0.5">Сайт за 7 дней, сервер за 1 день, ответ в
                                    WhatsApp за 30 минут — это наш стандарт.</div>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <div
                                class="w-8 h-8 rounded-lg bg-[#00b4d8]/10 border border-[#00b4d8]/15 flex items-center justify-center flex-shrink-0 mt-0.5">
                                <svg class="w-4 h-4 text-[#00b4d8]" fill="none" stroke="currentColor"
                                    stroke-width="2" viewBox="0 0 24 24">
                                    <path
                                        d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                </svg>
                            </div>
                            <div>
                                <div class="font-semibold text-sm text-white">Передача знаний</div>
                                <div class="text-slate-500 text-xs mt-0.5">После проекта ты понимаешь что сделано и как
                                    это работает. Всегда объясняем.</div>
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div class="card rounded-2xl p-4 text-center">
                            <div class="font-display text-4xl font-black text-[#00e5ff]">80+</div>
                            <div class="text-xs text-slate-500 mt-1 font-mono">завершённых проектов</div>
                        </div>
                        <div class="card rounded-2xl p-4 text-center" style="border-color:rgba(255,107,53,0.15)">
                            <div class="font-display text-4xl font-black text-[#ff6b35]">50+</div>
                            <div class="text-xs text-slate-500 mt-1 font-mono">обученных студентов</div>
                        </div>
                        <div class="card rounded-2xl p-4 text-center">
                            <div class="font-display text-4xl font-black text-[#00b4d8]">6 лет</div>
                            <div class="text-xs text-slate-500 mt-1 font-mono">на рынке с 2019</div>
                        </div>
                        <div class="card rounded-2xl p-4 text-center" style="border-color:rgba(255,107,53,0.15)">
                            <div class="font-display text-4xl font-black text-[#00e5ff]">4.9★</div>
                            <div class="text-xs text-slate-500 mt-1 font-mono">средний рейтинг</div>
                        </div>
                    </div>
                </div>

                <!-- Right: terminal + team -->
                <div class="reveal space-y-5 rd1">
                    <div class="text-slate-500 text-xs font-mono mb-2">// о компании</div>
                    <div class="terminal">
                        <div class="term-bar">
                            <span class="dot bg-[#ff5f57]"></span><span class="dot bg-[#febc2e]"></span><span
                                class="dot bg-[#28c840]"></span>
                            <span class="font-mono text-slate-500 text-xs ml-2">company.json</span>
                        </div>
                        <div class="p-6 font-mono text-sm leading-loose">
                            <div class="text-slate-500">{</div>
                            <div class="ml-4"><span class="text-[#ff6b35]">"company"</span>: <span
                                    class="text-[#febc2e]">"Complex Services"</span>,</div>
                            <div class="ml-4"><span class="text-[#ff6b35]">"founded"</span>: <span
                                    class="text-[#00e5ff]">2019</span>,</div>
                            <div class="ml-4"><span class="text-[#ff6b35]">"location"</span>: <span
                                    class="text-[#febc2e]">"Almaty, Kazakhstan"</span>,</div>
                            <div class="ml-4"><span class="text-[#ff6b35]">"team_size"</span>: <span
                                    class="text-[#00e5ff]">4</span>,</div>
                            <div class="ml-4"><span class="text-[#ff6b35]">"projects_done"</span>: <span
                                    class="text-[#00e5ff]">80</span>,</div>
                            <div class="ml-4"><span class="text-[#ff6b35]">"students_trained"</span>: <span
                                    class="text-[#00e5ff]">50</span>,</div>
                            <div class="ml-4"><span class="text-[#ff6b35]">"avg_rating"</span>: <span
                                    class="text-[#00e5ff]">4.9</span>,</div>
                            <div class="ml-4"><span class="text-[#ff6b35]">"languages"</span>: [<span
                                    class="text-[#febc2e]">"Python"</span>, <span class="text-[#febc2e]">"Go"</span>,
                                <span class="text-[#febc2e]">"C++"</span>, <span class="text-[#febc2e]">"JS"</span>],
                            </div>
                            <div class="ml-4">
                                <span class="text-[#ff6b35]">"services"</span>: [<br />
                                <span class="ml-4 text-[#febc2e]">"Разработка сайтов"</span>,<br />
                                <span class="ml-4 text-[#febc2e]">"Веб-приложения"</span>,<br />
                                <span class="ml-4 text-[#febc2e]">"Мобильные приложения"</span>,<br />
                                <span class="ml-4 text-[#febc2e]">"SysAdmin / DevOps"</span>,<br />
                                <span class="ml-4 text-[#febc2e]">"Обучение программированию"</span><br />
                                <span>],</span>
                            </div>
                            <div class="ml-4"><span class="text-[#ff6b35]">"response_time"</span>: <span
                                    class="text-[#febc2e]">"&lt; 30 min"</span>,</div>
                            <div class="ml-4"><span class="text-[#ff6b35]">"remote"</span>: <span
                                    class="text-[#00e5ff]">true</span>,</div>
                            <div class="ml-4"><span class="text-[#ff6b35]">"status"</span>: <span
                                    class="text-[#00e5ff]">"open_for_work"</span></div>
                            <div class="text-slate-500">}</div>
                        </div>
                    </div>

                    <!-- Why us -->
                    <div class="card rounded-xl p-5">
                        <div class="text-xs text-slate-500 font-mono mb-4">// почему выбирают нас</div>
                        <div class="space-y-2.5">
                            <div class="flex items-center gap-3 text-xs text-slate-400">
                                <span class="text-[#00e5ff] font-mono">01</span>
                                <span class="w-px h-3 bg-slate-700"></span>
                                Работаем официально — договор, закрывающие документы
                            </div>
                            <div class="flex items-center gap-3 text-xs text-slate-400">
                                <span class="text-[#ff6b35] font-mono">02</span>
                                <span class="w-px h-3 bg-slate-700"></span>
                                Гарантия 3 месяца на все выполненные работы
                            </div>
                            <div class="flex items-center gap-3 text-xs text-slate-400">
                                <span class="text-[#00e5ff] font-mono">03</span>
                                <span class="w-px h-3 bg-slate-700"></span>
                                Не берём предоплату за работу — платишь по факту
                            </div>
                            <div class="flex items-center gap-3 text-xs text-slate-400">
                                <span class="text-[#ff6b35] font-mono">04</span>
                                <span class="w-px h-3 bg-slate-700"></span>
                                Команда 4 специалиста — фронт, бэк, DevOps, дизайн
                            </div>
                            <div class="flex items-center gap-3 text-xs text-slate-400">
                                <span class="text-[#00e5ff] font-mono">05</span>
                                <span class="w-px h-3 bg-slate-700"></span>
                                Поддержка и сопровождение после сдачи проекта
                            </div>
                        </div>
                    </div>

                    <!-- Clients -->
                    <div class="card rounded-xl p-4">
                        <div class="text-xs text-slate-500 font-mono mb-3">// работали с нами</div>
                        <div class="flex flex-wrap gap-2">
                            <span
                                class="px-3 py-1.5 rounded-lg bg-[#ff6b35]/10 border border-[#ff6b35]/15 text-[#ff6b35] text-xs font-mono">StartupA</span>
                            <span
                                class="px-3 py-1.5 rounded-lg bg-[#00e5ff]/10 border border-[#00e5ff]/15 text-[#00e5ff] text-xs font-mono">TechCorp</span>
                            <span
                                class="px-3 py-1.5 rounded-lg bg-[#ff6b35]/10 border border-[#ff6b35]/15 text-[#ff6b35] text-xs font-mono">BuildKZ</span>
                            <span
                                class="px-3 py-1.5 rounded-lg bg-[#00e5ff]/10 border border-[#00e5ff]/15 text-[#00e5ff] text-xs font-mono">LogiPro</span>
                            <span
                                class="px-3 py-1.5 rounded-lg bg-[#ff6b35]/10 border border-[#ff6b35]/15 text-[#ff6b35] text-xs font-mono">EduSmart</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="divider"></div>

    <!-- ══════════ CONTACT ══════════ -->
    <section id="contact" class="py-24 relative z-10 bg-[#0a0f1a]">
        <div class="absolute top-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-[#00e5ff]/25 to-transparent">
        </div>
        <div class="absolute top-1/3 right-1/4 w-80 h-80 bg-[#00e5ff]/5 rounded-full blur-3xl pointer-events-none">
        </div>

        <div class="w-full px-6 sm:px-10 lg:px-16">
            <div class="reveal text-center mb-14">
                <p
                    class="text-[#00e5ff] text-xs font-mono tracking-[0.2em] uppercase mb-4 flex items-center justify-center gap-2">
                    <span class="w-6 h-px bg-[#00e5ff]"></span> Контакты <span class="w-6 h-px bg-[#00e5ff]"></span>
                </p>
                <h2 class="font-display text-5xl sm:text-6xl font-black mb-4">Обсудим проект</h2>
                <p class="text-slate-500 font-mono text-sm">// отвечу в течение 30 минут</p>
            </div>

            <div class="reveal grid sm:grid-cols-2 gap-5 mb-8">
                <a href="tel:+77001234567" class="card rounded-2xl p-6 flex items-center gap-4 group">
                    <div
                        class="w-12 h-12 rounded-xl bg-[#00e5ff]/10 border border-[#00e5ff]/15 flex items-center justify-center flex-shrink-0 group-hover:bg-[#00e5ff]/20 transition-colors">
                        <svg class="w-6 h-6 text-[#00e5ff]" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path
                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                    </div>
                    <div>
                        <div class="text-xs text-slate-500 font-mono mb-0.5">// позвонить</div>
                        <div class="font-semibold text-white">+7 707 780-10-11</div>
                    </div>
                </a>
                <a href="https://wa.me/77077801011" class="card rounded-2xl p-6 flex items-center gap-4 group"
                    style="border-color:rgba(37,211,102,0.15)">
                    <div
                        class="w-12 h-12 rounded-xl bg-[#25D366]/10 border border-[#25D366]/15 flex items-center justify-center flex-shrink-0 group-hover:bg-[#25D366]/20 transition-colors">
                        <svg class="w-6 h-6 text-[#25D366]" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
                        </svg>
                    </div>
                    <div>
                        <div class="text-xs text-slate-500 font-mono mb-0.5">// мессенджер</div>
                        <div class="font-semibold text-white">WhatsApp</div>
                    </div>
                </a>
            </div>

            <!-- Form + Map -->
            <div class="reveal grid lg:grid-cols-2 gap-6 items-stretch">
                <div class="card rounded-2xl p-8 flex flex-col">
                    <h3 class="font-display text-xl font-bold mb-1">Написать мне</h3>
                    <p class="text-slate-500 text-xs font-mono mb-6">// опиши задачу — разберёмся</p>
                    <div class="grid sm:grid-cols-2 gap-4 mb-4">
                        <div>
                            <label class="block text-xs text-slate-500 font-mono mb-1.5">name:</label>
                            <input type="text" placeholder="Имя" class="inp w-full px-4 py-3 rounded-xl text-sm" />
                        </div>
                        <div>
                            <label class="block text-xs text-slate-500 font-mono mb-1.5">phone:</label>
                            <input type="tel" placeholder="+7 777 000-00-00"
                                class="inp w-full px-4 py-3 rounded-xl text-sm" />
                        </div>
                    </div>
                    <div class="mb-4">
                        <label class="block text-xs text-slate-500 font-mono mb-1.5">service:</label>
                        <select class="inp w-full px-4 py-3 rounded-xl text-sm">
                            <option>Веб-разработка</option>
                            <option>Мобильное приложение</option>
                            <option>Администрирование серверов</option>
                            <option>DevOps / CI-CD</option>
                            <option>Базы данных</option>
                            <option>Обучение программированию</option>
                            <option>Консультация / код-ревью</option>
                            <option>Другое</option>
                        </select>
                    </div>
                    <div class="mb-6 flex-1">
                        <label class="block text-xs text-slate-500 font-mono mb-1.5">message:</label>
                        <textarea rows="5" placeholder="Опиши задачу..."
                            class="inp w-full px-4 py-3 rounded-xl text-sm resize-none min-h-[120px]"></textarea>
                    </div>
                    <button
                        class="btn-cyan w-full py-4 rounded-xl text-sm font-bold flex items-center justify-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5"
                            viewBox="0 0 24 24">
                            <path d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                        </svg>
                        Отправить
                    </button>
                </div>

                <!-- Map -->
                <div class="flex flex-col gap-4">
                    <div class="relative rounded-2xl overflow-hidden border border-[rgba(0,229,255,0.15)] flex-1"
                        style="min-height:380px">
                        <div
                            class="absolute top-0 left-0 w-6 h-6 border-t-2 border-l-2 border-[#00e5ff] z-10 rounded-tl-2xl pointer-events-none">
                        </div>
                        <div
                            class="absolute top-0 right-0 w-6 h-6 border-t-2 border-r-2 border-[#00e5ff] z-10 rounded-tr-2xl pointer-events-none">
                        </div>
                        <div
                            class="absolute bottom-0 left-0 w-6 h-6 border-b-2 border-l-2 border-[#00e5ff] z-10 rounded-bl-2xl pointer-events-none">
                        </div>
                        <div
                            class="absolute bottom-0 right-0 w-6 h-6 border-b-2 border-r-2 border-[#00e5ff] z-10 rounded-br-2xl pointer-events-none">
                        </div>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d91898.98418284647!2d76.84929!3d43.22205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38836e66f4f9b7b1%3A0x5f7e95d7ca52e674!2z0JDQu9C80LDRgtGLLCDQmtCw0LfQsNGF0YHRgtCw0L0!5e0!3m2!1sru!2skz!4v1710000000000"
                            width="100%" height="100%"
                            style="border:0;filter:invert(90%) hue-rotate(180deg) saturate(0.8) brightness(0.85);"
                            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                            class="absolute inset-0 w-full h-full"></iframe>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="card rounded-xl p-4 flex items-start gap-3">
                            <div
                                class="w-9 h-9 rounded-lg bg-[#00e5ff]/10 border border-[#00e5ff]/12 flex items-center justify-center flex-shrink-0">
                                <svg class="w-4 h-4 text-[#00e5ff]" fill="none" stroke="currentColor"
                                    stroke-width="2" viewBox="0 0 24 24">
                                    <path
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                            <div>
                                <div class="text-xs text-slate-500 font-mono mb-0.5">// локация</div>
                                <div class="text-sm text-white font-medium">г. Алматы,<br />удалённо</div>
                            </div>
                        </div>
                        <div class="card rounded-xl p-4 flex items-start gap-3"
                            style="border-color:rgba(255,107,53,0.12)">
                            <div
                                class="w-9 h-9 rounded-lg bg-[#ff6b35]/10 border border-[#ff6b35]/12 flex items-center justify-center flex-shrink-0">
                                <svg class="w-4 h-4 text-[#ff6b35]" fill="none" stroke="currentColor"
                                    stroke-width="2" viewBox="0 0 24 24">
                                    <path d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div>
                                <div class="text-xs text-slate-500 font-mono mb-0.5">// онлайн</div>
                                <div class="text-sm text-white font-medium">Пн–Вс<br />09:00–22:00</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
