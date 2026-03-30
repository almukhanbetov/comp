 <footer class="bg-[#060a11] border-t border-[rgba(255,107,53,0.12)] relative z-10">
     <div class="h-0.5 w-full bg-gradient-to-r from-transparent via-[#ff6b35] to-transparent opacity-50"></div>

     <div class="w-full px-6 sm:px-10 lg:px-16 py-14">
         <div class="grid grid-cols-1 sm:grid-cols-3 gap-12 lg:gap-16">

             <!-- Col 1: Logo + описание + контакты -->
             <div>
                 <div class="flex items-center gap-3 mb-5">
                     <div class="relative w-16 h-16 flex items-center justify-center">
                         <img src="{{asset('assets/images/logo.png') }}" alt="logo" class="w-full h-full object-contain transition-transform group-hover:scale-110 duration-300">
                     </div>
                     <div>
                         <div class="font-display font-extrabold text-lg leading-none">Complex<span
                                 class="text-[#ff6b35]"> Services</span></div>
                         <div class="text-slate-600 text-[10px] mt-0.5 font-mono tracking-wide">IT решения нового
                             уровня</div>
                     </div>
                 </div>
                 <p class="text-slate-500 text-sm leading-relaxed mb-6">Разработка, обучение, администрирование и
                     DevOps. Работаем быстро, с чистым кодом и гарантией результата.</p>
                 <div class="space-y-2.5">
                     <a href="tel:+77001234567" class="flex items-center gap-3 group">
                         <div
                             class="w-8 h-8 rounded-lg bg-[#ff6b35]/10 border border-[#ff6b35]/15 flex items-center justify-center flex-shrink-0 group-hover:bg-[#ff6b35]/20 transition-all">
                             <svg class="w-3.5 h-3.5 text-[#ff6b35]" fill="none" stroke="currentColor"
                                 stroke-width="2" viewBox="0 0 24 24">
                                 <path
                                     d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                             </svg>
                         </div>
                         <span class="text-sm text-slate-400 group-hover:text-[#ff6b35] transition-colors font-mono">+7
                             707 780-10-11</span>
                     </a>
                     <a href="https://wa.me/77077801011" class="flex items-center gap-3 group">
                         <div
                             class="w-8 h-8 rounded-lg bg-[#25D366]/10 border border-[#25D366]/15 flex items-center justify-center flex-shrink-0 group-hover:bg-[#25D366]/20 transition-all">
                             <svg class="w-3.5 h-3.5 text-[#25D366]" fill="currentColor" viewBox="0 0 24 24">
                                 <path
                                     d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
                             </svg>
                         </div>
                         <span
                             class="text-sm text-slate-400 group-hover:text-[#25D366] transition-colors font-mono">WhatsApp</span>
                     </a>
                 </div>
             </div>

             <!-- Col 2: Навигация -->
             <div>
                 <h4
                     class="font-display font-bold text-white text-xs uppercase tracking-[0.15em] mb-6 flex items-center gap-2.5">
                     <span class="w-5 h-0.5 bg-gradient-to-r from-[#ff6b35] to-[#00e5ff] rounded-full"></span>
                     Навигация
                 </h4>
                 <div class="grid grid-cols-2 gap-x-4 gap-y-2.5">
                     <a href="#services"
                         class="flex items-center gap-2 text-sm text-slate-400 hover:text-[#ff6b35] hover:translate-x-1 transition-all group">
                         <span
                             class="w-1.5 h-1.5 rounded-full bg-[#ff6b35]/40 group-hover:bg-[#ff6b35] transition-colors flex-shrink-0"></span>
                         Услуги
                     </a>
                     <a href="#teaching"
                         class="flex items-center gap-2 text-sm text-slate-400 hover:text-[#ff6b35] hover:translate-x-1 transition-all group">
                         <span
                             class="w-1.5 h-1.5 rounded-full bg-[#ff6b35]/40 group-hover:bg-[#ff6b35] transition-colors flex-shrink-0"></span>
                         Обучение
                     </a>
                     <a href="#stack"
                         class="flex items-center gap-2 text-sm text-slate-400 hover:text-[#00e5ff] hover:translate-x-1 transition-all group">
                         <span
                             class="w-1.5 h-1.5 rounded-full bg-[#00e5ff]/40 group-hover:bg-[#00e5ff] transition-colors flex-shrink-0"></span>
                         Стек
                     </a>
                     <a href="#about"
                         class="flex items-center gap-2 text-sm text-slate-400 hover:text-[#00e5ff] hover:translate-x-1 transition-all group">
                         <span
                             class="w-1.5 h-1.5 rounded-full bg-[#00e5ff]/40 group-hover:bg-[#00e5ff] transition-colors flex-shrink-0"></span>
                         О компании
                     </a>
                     <a href="#contact"
                         class="flex items-center gap-2 text-sm text-slate-400 hover:text-[#ff6b35] hover:translate-x-1 transition-all group">
                         <span
                             class="w-1.5 h-1.5 rounded-full bg-[#ff6b35]/40 group-hover:bg-[#ff6b35] transition-colors flex-shrink-0"></span>
                         Контакты
                     </a>
                     <a href="#contact"
                         class="flex items-center gap-2 text-sm text-slate-400 hover:text-[#00e5ff] hover:translate-x-1 transition-all group">
                         <span
                             class="w-1.5 h-1.5 rounded-full bg-[#00e5ff]/40 group-hover:bg-[#00e5ff] transition-colors flex-shrink-0"></span>
                         Регистрация
                     </a>
                 </div>

                 <div class="mt-8 pt-6 border-t border-white/5">
                     <div class="text-xs text-slate-600 font-mono mb-3">// соцсети</div>
                     <div class="flex gap-3">
                         <a href="#"
                             class="w-9 h-9 rounded-xl bg-[#ff6b35]/10 border border-[#ff6b35]/15 flex items-center justify-center text-[#ff6b35] hover:bg-[#ff6b35]/20 transition-all">
                             <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                 <path
                                     d="M12 0C5.374 0 0 5.373 0 12c0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23A11.509 11.509 0 0112 5.803c1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576C20.566 21.797 24 17.3 24 12c0-6.627-5.373-12-12-12z" />
                             </svg>
                         </a>
                         <a href="#"
                             class="w-9 h-9 rounded-xl bg-[#0088cc]/10 border border-[#0088cc]/15 flex items-center justify-center text-[#0088cc] hover:bg-[#0088cc]/20 transition-all">
                             <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                 <path
                                     d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm5.562 8.247l-1.97 9.289c-.145.658-.537.818-1.084.508l-3-2.21-1.447 1.394c-.16.16-.295.295-.605.295l.213-3.053 5.56-5.023c.242-.213-.054-.333-.373-.12l-6.871 4.326-2.962-.924c-.643-.204-.657-.643.136-.953l11.57-4.461c.537-.194 1.006.131.833.932z" />
                             </svg>
                         </a>
                         <a href="#"
                             class="w-9 h-9 rounded-xl bg-[#00e5ff]/10 border border-[#00e5ff]/15 flex items-center justify-center text-[#00e5ff] hover:bg-[#00e5ff]/20 transition-all">
                             <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
                                 viewBox="0 0 24 24">
                                 <path
                                     d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                             </svg>
                         </a>
                     </div>
                 </div>
             </div>

             <!-- Col 3: QR код регистрации -->
             <div>
                 <h4
                     class="font-display font-bold text-white text-xs uppercase tracking-[0.15em] mb-6 flex items-center gap-2.5">
                     <span class="w-5 h-0.5 bg-gradient-to-r from-[#00e5ff] to-[#ff6b35] rounded-full"></span>
                     Регистрация
                 </h4>
                 <p class="text-slate-500 text-sm leading-relaxed mb-5">Наведите камеру телефона чтобы
                     зарегистрироваться на платформе Complex Services.</p>

                 <!-- QR code SVG -->
                 <div class="inline-flex flex-col items-start">
                     <div
                         class="p-3 rounded-2xl bg-white shadow-2xl shadow-[#ff6b35]/15 border-2 border-[#ff6b35]/30 mb-3 relative">
                         <!-- Corner accents -->
                         <div
                             class="absolute -top-1 -left-1 w-5 h-5 border-t-2 border-l-2 border-[#ff6b35] rounded-tl-lg">
                         </div>
                         <div
                             class="absolute -top-1 -right-1 w-5 h-5 border-t-2 border-r-2 border-[#ff6b35] rounded-tr-lg">
                         </div>
                         <div
                             class="absolute -bottom-1 -left-1 w-5 h-5 border-b-2 border-l-2 border-[#ff6b35] rounded-bl-lg">
                         </div>
                         <div
                             class="absolute -bottom-1 -right-1 w-5 h-5 border-b-2 border-r-2 border-[#ff6b35] rounded-br-lg">
                         </div>

                         <svg viewBox="0 0 210 210" width="156" height="156" xmlns="http://www.w3.org/2000/svg"
                             shape-rendering="crispEdges">
                             <rect width="210" height="210" fill="white" />
                             <!-- Top-left finder -->
                             <rect x="7" y="7" width="56" height="56" fill="#0a0f1a" />
                             <rect x="14" y="14" width="42" height="42" fill="white" />
                             <rect x="21" y="21" width="28" height="28" fill="#0a0f1a" />
                             <!-- Top-right finder -->
                             <rect x="147" y="7" width="56" height="56" fill="#0a0f1a" />
                             <rect x="154" y="14" width="42" height="42" fill="white" />
                             <rect x="161" y="21" width="28" height="28" fill="#0a0f1a" />
                             <!-- Bottom-left finder -->
                             <rect x="7" y="147" width="56" height="56" fill="#0a0f1a" />
                             <rect x="14" y="154" width="42" height="42" fill="white" />
                             <rect x="21" y="161" width="28" height="28" fill="#0a0f1a" />
                             <!-- Data modules -->
                             <g fill="#0a0f1a">
                                 <rect x="77" y="7" width="7" height="7" />
                                 <rect x="91" y="7" width="7" height="7" />
                                 <rect x="105" y="7" width="7" height="7" />
                                 <rect x="119" y="7" width="7" height="7" />
                                 <rect x="133" y="7" width="7" height="7" />
                                 <rect x="77" y="21" width="7" height="7" />
                                 <rect x="105" y="21" width="7" height="7" />
                                 <rect x="133" y="21" width="7" height="7" />
                                 <rect x="91" y="35" width="7" height="7" />
                                 <rect x="105" y="35" width="7" height="7" />
                                 <rect x="119" y="35" width="7" height="7" />
                                 <rect x="77" y="49" width="7" height="7" />
                                 <rect x="91" y="49" width="7" height="7" />
                                 <rect x="119" y="49" width="7" height="7" />
                                 <rect x="133" y="49" width="7" height="7" />
                                 <rect x="7" y="77" width="7" height="7" />
                                 <rect x="21" y="77" width="7" height="7" />
                                 <rect x="35" y="77" width="7" height="7" />
                                 <rect x="49" y="77" width="7" height="7" />
                                 <rect x="77" y="77" width="7" height="7" />
                                 <rect x="91" y="77" width="7" height="7" />
                                 <rect x="119" y="77" width="7" height="7" />
                                 <rect x="147" y="77" width="7" height="7" />
                                 <rect x="161" y="77" width="7" height="7" />
                                 <rect x="189" y="77" width="7" height="7" />
                                 <rect x="7" y="91" width="7" height="7" />
                                 <rect x="35" y="91" width="7" height="7" />
                                 <rect x="77" y="91" width="7" height="7" />
                                 <rect x="105" y="91" width="7" height="7" />
                                 <rect x="133" y="91" width="7" height="7" />
                                 <rect x="161" y="91" width="7" height="7" />
                                 <rect x="175" y="91" width="7" height="7" />
                                 <rect x="7" y="105" width="7" height="7" />
                                 <rect x="21" y="105" width="7" height="7" />
                                 <rect x="49" y="105" width="7" height="7" />
                                 <rect x="91" y="105" width="7" height="7" />
                                 <rect x="119" y="105" width="7" height="7" />
                                 <rect x="147" y="105" width="7" height="7" />
                                 <rect x="189" y="105" width="7" height="7" />
                                 <rect x="7" y="119" width="7" height="7" />
                                 <rect x="35" y="119" width="7" height="7" />
                                 <rect x="77" y="119" width="7" height="7" />
                                 <rect x="105" y="119" width="7" height="7" />
                                 <rect x="133" y="119" width="7" height="7" />
                                 <rect x="161" y="119" width="7" height="7" />
                                 <rect x="77" y="133" width="7" height="7" />
                                 <rect x="91" y="133" width="7" height="7" />
                                 <rect x="119" y="133" width="7" height="7" />
                                 <rect x="147" y="133" width="7" height="7" />
                                 <rect x="175" y="133" width="7" height="7" />
                                 <rect x="189" y="133" width="7" height="7" />
                                 <rect x="77" y="147" width="7" height="7" />
                                 <rect x="105" y="147" width="7" height="7" />
                                 <rect x="133" y="147" width="7" height="7" />
                                 <rect x="161" y="147" width="7" height="7" />
                                 <rect x="77" y="161" width="7" height="7" />
                                 <rect x="91" y="161" width="7" height="7" />
                                 <rect x="119" y="161" width="7" height="7" />
                                 <rect x="147" y="161" width="7" height="7" />
                                 <rect x="175" y="161" width="7" height="7" />
                                 <rect x="77" y="175" width="7" height="7" />
                                 <rect x="105" y="175" width="7" height="7" />
                                 <rect x="119" y="175" width="7" height="7" />
                                 <rect x="161" y="175" width="7" height="7" />
                                 <rect x="189" y="175" width="7" height="7" />
                                 <rect x="91" y="189" width="7" height="7" />
                                 <rect x="119" y="189" width="7" height="7" />
                                 <rect x="133" y="189" width="7" height="7" />
                                 <rect x="175" y="189" width="7" height="7" />
                                 <!-- Orange center accent -->
                                 <rect x="98" y="98" width="14" height="14" rx="3" fill="#ff6b35" />
                             </g>
                         </svg>
                     </div>
                     <div>
                         <p class="text-xs text-slate-500 mb-1 font-mono">// отсканируй для регистрации</p>
                         <a href="#"
                             class="text-[#ff6b35] text-xs hover:underline font-mono font-medium">complexservices.kz/register</a>
                     </div>
                 </div>
             </div>

         </div>
     </div>

     <!-- Bottom bar -->
     <div class="border-t border-white/5">
         <div
             class="w-full px-6 sm:px-10 lg:px-16 py-5 flex flex-col sm:flex-row items-center justify-between gap-3 flex-wrap">
             <p class="text-slate-600 text-xs font-mono order-2 sm:order-1">© 2014 Complex Services. Все права
                 защищены.</p>
             <p class="text-slate-600 text-xs font-mono order-3 sm:order-2 text-center">разработка · обучение ·
                 администрирование · г. Алматы</p>
             <div class="flex items-center gap-2 order-1 sm:order-3">
                 <span class="relative flex h-2 w-2">
                     <span
                         class="animate-ping absolute inline-flex h-full w-full rounded-full bg-[#ff6b35] opacity-75"></span>
                     <span class="relative inline-flex rounded-full h-2 w-2 bg-[#ff6b35]"></span>
                 </span>
                 <span class="text-slate-500 text-xs font-mono">Работаем 24/7</span>
             </div>
         </div>
     </div>
 </footer>
