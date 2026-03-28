@extends('layouts.auth')
<!-- Neural network bg -->
@section('content')
    <canvas id="neural-canvas"></canvas>

    <!-- ── Ambient glows ── -->
    <div
        style="position:fixed;top:15%;left:10%;width:500px;height:500px;background:rgba(0,229,255,0.05);border-radius:50%;filter:blur(80px);pointer-events:none;z-index:1;">
    </div>
    <div
        style="position:fixed;bottom:20%;right:5%;width:400px;height:400px;background:rgba(255,107,53,0.05);border-radius:50%;filter:blur(80px);pointer-events:none;z-index:1;">
    </div>
    <!-- ── Main layout ── -->
    <div class="relative z-10 min-h-screen flex flex-col lg:flex-row">
        <!-- LEFT — branding panel (hidden on mobile) -->
        <div class="hidden lg:flex flex-col justify-between w-[46%] px-16 py-14">

            <!-- Logo -->
            <a href="freelance.html" class="flex items-center gap-3 fade-up d1">
                <div class="relative w-10 h-10">
                    <div class="absolute inset-0 bg-[#00e5ff]/20 rounded-xl rotate-12"></div>
                    <svg class="relative z-10 w-10 h-10" viewBox="0 0 32 32" fill="none">
                        <polyline points="4,20 10,12 16,18 22,8 28,14" stroke="#ff6b35" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" />
                        <circle cx="28" cy="14" r="2.5" fill="#00e5ff" />
                    </svg>
                </div>
                <span style="font-family:'Manrope',sans-serif;font-weight:800;font-size:22px;">Complex<span
                        style="color:#ff6b35;"> Services</span></span>
            </a>

            <!-- Center content -->
            <div class="fade-up d2">
                <p
                    style="font-family:'JetBrains Mono',monospace;font-size:11px;font-weight:700;letter-spacing:0.22em;text-transform:uppercase;color:var(--cyan);margin-bottom:20px;">
                    // добро пожаловать</p>

                <h1
                    style="font-family:'Manrope',sans-serif;font-weight:900;font-size:clamp(2.8rem,4vw,4rem);line-height:1.05;letter-spacing:-0.03em;margin-bottom:24px;">
                    Войдите в<br /><span class="grad">личный кабинет</span>
                </h1>

                <p
                    style="color:#94a3b8;font-size:17px;line-height:1.75;max-width:380px;font-weight:500;margin-bottom:48px;">
                    Управляйте проектами, отслеживайте задачи и общайтесь с командой в одном месте.
                </p>

                <!-- Feature list -->
                <div style="display:flex;flex-direction:column;gap:18px;">
                    <div style="display:flex;align-items:center;gap:14px;">
                        <div
                            style="width:40px;height:40px;border-radius:12px;background:rgba(0,229,255,0.1);border:1px solid rgba(0,229,255,0.2);display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                            <svg width="18" height="18" fill="none" stroke="#00e5ff" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div>
                            <div style="font-weight:700;font-size:15px;">Управление проектами</div>
                            <div style="color:#64748b;font-size:13px;margin-top:2px;">Все задачи и статусы в одном дашборде
                            </div>
                        </div>
                    </div>
                    <div style="display:flex;align-items:center;gap:14px;">
                        <div
                            style="width:40px;height:40px;border-radius:12px;background:rgba(255,107,53,0.1);border:1px solid rgba(255,107,53,0.2);display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                            <svg width="18" height="18" fill="none" stroke="#ff6b35" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path
                                    d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                            </svg>
                        </div>
                        <div>
                            <div style="font-weight:700;font-size:15px;">Чат с командой</div>
                            <div style="color:#64748b;font-size:13px;margin-top:2px;">Ответ в течение 30 минут</div>
                        </div>
                    </div>
                    <div style="display:flex;align-items:center;gap:14px;">
                        <div
                            style="width:40px;height:40px;border-radius:12px;background:rgba(0,180,216,0.1);border:1px solid rgba(0,180,216,0.2);display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                            <svg width="18" height="18" fill="none" stroke="#00b4d8" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path
                                    d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                            </svg>
                        </div>
                        <div>
                            <div style="font-weight:700;font-size:15px;">Аналитика и отчёты</div>
                            <div style="color:#64748b;font-size:13px;margin-top:2px;">Прогресс по обучению и проектам</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Bottom -->
            <div class="fade-up d3" style="display:flex;align-items:center;gap:10px;">
                <span style="position:relative;display:flex;width:8px;height:8px;">
                    <span class="pulse-dot" style="position:absolute;inset:0;border-radius:50%;background:#ff6b35;"></span>
                    <span style="position:relative;border-radius:50%;width:8px;height:8px;background:#ff6b35;"></span>
                </span>
                <span style="color:#64748b;font-size:13px;font-family:'JetBrains Mono',monospace;">Работаем 24/7 · Алматы,
                    +7 700 123-45-67</span>
            </div>
        </div>
        <!-- RIGHT — form panel -->
        <div class="flex-1 flex flex-col items-center justify-center px-6 py-14 lg:py-0">
            <!-- Mobile logo -->
            <a href="freelance.html" class="lg:hidden flex items-center gap-2.5 mb-10 fade-up d1">
                <div class="relative w-9 h-9">
                    <div class="absolute inset-0 bg-[#00e5ff]/20 rounded-lg rotate-12"></div>
                    <svg class="relative z-10 w-9 h-9" viewBox="0 0 32 32" fill="none">
                        <polyline points="4,20 10,12 16,18 22,8 28,14" stroke="#ff6b35" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" />
                        <circle cx="28" cy="14" r="2.5" fill="#00e5ff" />
                    </svg>
                </div>
                <span style="font-family:'Manrope',sans-serif;font-weight:800;font-size:20px;">Complex<span
                        style="color:#ff6b35;"> Services</span></span>
            </a>

            <div class="glass-card rounded-3xl p-8 sm:p-10 w-full max-w-md fade-up d2">
                <!-- Tabs: Войти / Регистрация -->
                <div
                    style="display:flex;gap:6px;background:rgba(255,255,255,0.03);border:1px solid rgba(255,255,255,0.06);border-radius:14px;padding:6px;margin-bottom:32px;">
                    <button class="tab active" id="tab-login" onclick="switchTab('login')">Войти</button>
                    <button class="tab" id="tab-register" onclick="switchTab('register')">Регистрация</button>
                </div>

                <!-- ── LOGIN FORM ── -->
                <div id="form-login">
                    <h2
                        style="font-family:'Manrope',sans-serif;font-weight:900;font-size:26px;letter-spacing:-0.02em;margin-bottom:6px;">
                        С возвращением 👋</h2>
                    <p style="color:#64748b;font-size:14px;margin-bottom:28px;font-weight:500;">Введите данные для входа в
                        аккаунт</p>

                    <div style="display:flex;flex-direction:column;gap:16px;">

                        <!-- Email -->
                        <div>
                            <label
                                style="display:block;font-size:13px;font-weight:700;color:#94a3b8;margin-bottom:8px;letter-spacing:0.02em;">EMAIL</label>
                            <div class="inp-wrap">
                                <svg class="inp-icon" width="18" height="18" fill="none" stroke="currentColor"
                                    stroke-width="2" viewBox="0 0 24 24">
                                    <path
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                <input class="inp" id="login-email" type="email" placeholder="your@email.com"
                                    autocomplete="email" />
                            </div>
                            <div class="err" id="err-login-email">Введите корректный email</div>
                        </div>

                        <!-- Password -->
                        <div>
                            <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:8px;">
                                <label
                                    style="font-size:13px;font-weight:700;color:#94a3b8;letter-spacing:0.02em;">ПАРОЛЬ</label>
                                <a href="#"
                                    style="font-size:13px;color:var(--cyan);font-weight:600;text-decoration:none;"
                                    onmouseover="this.style.textDecoration='underline'"
                                    onmouseout="this.style.textDecoration='none'">Забыли пароль?</a>
                            </div>
                            <div class="inp-wrap">
                                <svg class="inp-icon" width="18" height="18" fill="none"
                                    stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path
                                        d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                </svg>
                                <input class="inp" id="login-pass" type="password" placeholder="••••••••"
                                    autocomplete="current-password" />
                                <button class="eye-btn" onclick="togglePass('login-pass', this)" type="button"
                                    aria-label="Показать пароль">
                                    <svg id="eye-login" width="18" height="18" fill="none"
                                        stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path
                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                </button>
                            </div>
                            <div class="err" id="err-login-pass">Пароль должен быть не менее 6 символов</div>
                        </div>

                        <!-- Remember -->
                        <label class="cb-wrap">
                            <input type="checkbox" id="remember" />
                            <span style="font-size:14px;color:#94a3b8;font-weight:500;">Запомнить меня</span>
                        </label>

                        <!-- Submit -->
                        <button class="btn-main" onclick="handleLogin()" style="margin-top:4px;">
                            Войти в аккаунт
                        </button>

                    </div>

                    <!-- Divider -->
                    <div class="or-line" style="margin:24px 0;">или</div>

                    <!-- Social -->
                    <div style="display:flex;flex-direction:column;gap:10px;">
                        <button class="btn-social">
                            <svg width="20" height="20" viewBox="0 0 24 24">
                                <path
                                    d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"
                                    fill="#4285F4" />
                                <path
                                    d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"
                                    fill="#34A853" />
                                <path
                                    d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"
                                    fill="#FBBC05" />
                                <path
                                    d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"
                                    fill="#EA4335" />
                            </svg>
                            Войти через Google
                        </button>
                        <button class="btn-social">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="#2AABEE">
                                <path
                                    d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm4.64 6.8c-.15 1.58-.8 5.42-1.13 7.19-.14.75-.42 1-.68 1.03-.58.05-1.02-.38-1.58-.75-.88-.58-1.38-.94-2.23-1.5-.99-.65-.35-1.01.22-1.59.15-.15 2.71-2.48 2.76-2.69.01-.03.01-.14-.07-.2-.08-.06-.19-.04-.27-.02-.12.02-1.96 1.25-5.54 3.67-.52.36-1 .53-1.42.52-.47-.01-1.37-.26-2.03-.48-.82-.27-1.47-.42-1.42-.88.03-.25.38-.51 1.07-.78 4.19-1.82 6.98-3.02 8.38-3.61 3.99-1.66 4.82-1.95 5.36-1.96.12 0 .38.03.55.17.14.12.18.28.2.45-.02.07-.02.13-.03.22z" />
                            </svg>
                            Войти через Telegram
                        </button>
                    </div>

                    <p style="text-align:center;margin-top:24px;font-size:14px;color:#64748b;font-weight:500;">
                        Нет аккаунта?
                        <a href="#" onclick="switchTab('register')"
                            style="color:var(--cyan);font-weight:700;text-decoration:none;"
                            onmouseover="this.style.textDecoration='underline'"
                            onmouseout="this.style.textDecoration='none'">Зарегистрироваться</a>
                    </p>
                </div>

                <!-- ── REGISTER FORM ── -->
                <div id="form-register" style="display:none;">
                    <h2
                        style="font-family:'Manrope',sans-serif;font-weight:900;font-size:26px;letter-spacing:-0.02em;margin-bottom:6px;">
                        Создать аккаунт</h2>
                    <p style="color:#64748b;font-size:14px;margin-bottom:28px;font-weight:500;">Заполните данные для
                        регистрации</p>

                    <div style="display:flex;flex-direction:column;gap:16px;">

                        <!-- Name -->
                        <div>
                            <label
                                style="display:block;font-size:13px;font-weight:700;color:#94a3b8;margin-bottom:8px;letter-spacing:0.02em;">ИМЯ</label>
                            <div class="inp-wrap">
                                <svg class="inp-icon" width="18" height="18" fill="none"
                                    stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                                <input class="inp" id="reg-name" type="text" placeholder="Ваше имя"
                                    autocomplete="name" />
                            </div>
                            <div class="err" id="err-reg-name">Введите имя</div>
                        </div>

                        <!-- Email -->
                        <div>
                            <label
                                style="display:block;font-size:13px;font-weight:700;color:#94a3b8;margin-bottom:8px;letter-spacing:0.02em;">EMAIL</label>
                            <div class="inp-wrap">
                                <svg class="inp-icon" width="18" height="18" fill="none"
                                    stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                <input class="inp" id="reg-email" type="email" placeholder="your@email.com"
                                    autocomplete="email" />
                            </div>
                            <div class="err" id="err-reg-email">Введите корректный email</div>
                        </div>

                        <!-- Phone -->
                        <div>
                            <label
                                style="display:block;font-size:13px;font-weight:700;color:#94a3b8;margin-bottom:8px;letter-spacing:0.02em;">ТЕЛЕФОН</label>
                            <div class="inp-wrap">
                                <svg class="inp-icon" width="18" height="18" fill="none"
                                    stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                                <input class="inp" id="reg-phone" type="tel" placeholder="+7 700 000-00-00"
                                    autocomplete="tel" />
                            </div>
                        </div>

                        <!-- Password -->
                        <div>
                            <label
                                style="display:block;font-size:13px;font-weight:700;color:#94a3b8;margin-bottom:8px;letter-spacing:0.02em;">ПАРОЛЬ</label>
                            <div class="inp-wrap">
                                <svg class="inp-icon" width="18" height="18" fill="none"
                                    stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path
                                        d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                </svg>
                                <input class="inp" id="reg-pass" type="password" placeholder="Минимум 8 символов"
                                    oninput="checkStrength(this.value)" autocomplete="new-password" />
                                <button class="eye-btn" onclick="togglePass('reg-pass', this)" type="button">
                                    <svg width="18" height="18" fill="none" stroke="currentColor"
                                        stroke-width="2" viewBox="0 0 24 24">
                                        <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path
                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                </button>
                            </div>
                            <!-- Strength bar -->
                            <div style="display:flex;gap:4px;margin-top:8px;" id="strength-bars">
                                <div id="sb1"
                                    style="flex:1;height:3px;border-radius:3px;background:rgba(255,255,255,0.08);transition:background .3s;">
                                </div>
                                <div id="sb2"
                                    style="flex:1;height:3px;border-radius:3px;background:rgba(255,255,255,0.08);transition:background .3s;">
                                </div>
                                <div id="sb3"
                                    style="flex:1;height:3px;border-radius:3px;background:rgba(255,255,255,0.08);transition:background .3s;">
                                </div>
                                <div id="sb4"
                                    style="flex:1;height:3px;border-radius:3px;background:rgba(255,255,255,0.08);transition:background .3s;">
                                </div>
                            </div>
                            <div id="strength-label" style="font-size:12px;color:#64748b;margin-top:4px;font-weight:600;">
                            </div>
                            <div class="err" id="err-reg-pass">Пароль должен быть не менее 8 символов</div>
                        </div>

                        <!-- Terms -->
                        <label class="cb-wrap">
                            <input type="checkbox" id="terms" />
                            <span style="font-size:13px;color:#94a3b8;font-weight:500;line-height:1.5;">Принимаю <a
                                    href="#" style="color:var(--cyan);font-weight:700;">условия использования</a> и
                                <a href="#" style="color:var(--cyan);font-weight:700;">политику
                                    конфиденциальности</a></span>
                        </label>
                        <div class="err" id="err-terms">Примите условия использования</div>

                        <button class="btn-main" onclick="handleRegister()" style="margin-top:4px;">
                            Создать аккаунт
                        </button>
                    </div>

                    <p style="text-align:center;margin-top:24px;font-size:14px;color:#64748b;font-weight:500;">
                        Уже есть аккаунт?
                        <a href="#" onclick="switchTab('login')"
                            style="color:var(--cyan);font-weight:700;text-decoration:none;"
                            onmouseover="this.style.textDecoration='underline'"
                            onmouseout="this.style.textDecoration='none'">Войти</a>
                    </p>
                </div>
            </div>
            <!-- Back link -->
            <a href="index.html" class="fade-up d5"
                style="display:inline-flex;align-items:center;gap:8px;margin-top:20px;color:#4a5568;font-size:14px;font-weight:600;text-decoration:none;transition:color .2s;"
                onmouseover="this.style.color='#00e5ff'" onmouseout="this.style.color='#4a5568'">
                <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5"
                    viewBox="0 0 24 24">
                    <path d="M19 12H5m0 0l7 7m-7-7l7-7" />
                </svg>
                Вернуться на главную
            </a>

        </div>
    </div>
    <!-- ── Success toast ── -->
    <div id="toast"
        style="position:fixed;bottom:32px;left:50%;transform:translateX(-50%) translateY(80px);background:rgba(5,8,15,0.95);border:1px solid rgba(0,229,255,0.3);border-radius:16px;padding:14px 24px;display:flex;align-items:center;gap:12px;font-size:14px;font-weight:600;color:var(--text);box-shadow:0 20px 60px rgba(0,0,0,0.5);transition:transform .4s cubic-bezier(.25,.8,.25,1);z-index:100;white-space:nowrap;">
        <svg width="20" height="20" fill="none" stroke="#00e5ff" stroke-width="2.5" viewBox="0 0 24 24">
            <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
        <span id="toast-text">Выполняется вход...</span>
    </div>
@endsection
