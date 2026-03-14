// ── Neural network background ──
(function(){
  const canvas = document.getElementById('neural-canvas');
  const ctx = canvas.getContext('2d');
  let W, H, nodes = [];
  const NODE_COUNT = 70;
  const MAX_DIST = 160;
  const ORANGE = '#ff6b35';
  const CYAN = '#00e5ff';

  function resize() {
    W = canvas.width = window.innerWidth;
    H = canvas.height = window.innerHeight;
  }
  resize();
  window.addEventListener('resize', () => { resize(); initNodes(); });

  function initNodes() {
    nodes = [];
    for (let i = 0; i < NODE_COUNT; i++) {
      nodes.push({
        x: Math.random() * W,
        y: Math.random() * H,
        vx: (Math.random() - 0.5) * 0.5,
        vy: (Math.random() - 0.5) * 0.5,
        r: Math.random() * 2 + 1.5,
        type: Math.random() > 0.4 ? 'orange' : 'cyan'
      });
    }
  }
  initNodes();

  function draw() {
    ctx.clearRect(0, 0, W, H);

    // Draw connections
    for (let i = 0; i < nodes.length; i++) {
      for (let j = i + 1; j < nodes.length; j++) {
        const dx = nodes[i].x - nodes[j].x;
        const dy = nodes[i].y - nodes[j].y;
        const dist = Math.sqrt(dx*dx + dy*dy);
        if (dist < MAX_DIST) {
          const alpha = (1 - dist / MAX_DIST) * 0.25;
          // blend color based on node types
          const color = (nodes[i].type === 'orange' || nodes[j].type === 'orange') ? `rgba(255,107,53,${alpha})` : `rgba(0,229,255,${alpha * 0.6})`;
          ctx.beginPath();
          ctx.strokeStyle = color;
          ctx.lineWidth = 0.8;
          ctx.moveTo(nodes[i].x, nodes[i].y);
          ctx.lineTo(nodes[j].x, nodes[j].y);
          ctx.stroke();
        }
      }
    }

    // Draw nodes
    for (const n of nodes) {
      ctx.beginPath();
      const glow = n.type === 'orange' ? 'rgba(255,107,53,' : 'rgba(0,229,255,';
      // outer glow ring
      ctx.arc(n.x, n.y, n.r * 2.5, 0, Math.PI * 2);
      ctx.fillStyle = glow + '0.08)';
      ctx.fill();
      // core dot
      ctx.beginPath();
      ctx.arc(n.x, n.y, n.r, 0, Math.PI * 2);
      ctx.fillStyle = n.type === 'orange' ? 'rgba(255,107,53,0.7)' : 'rgba(0,229,255,0.5)';
      ctx.fill();
    }

    // Move nodes
    for (const n of nodes) {
      n.x += n.vx;
      n.y += n.vy;
      if (n.x < 0 || n.x > W) n.vx *= -1;
      if (n.y < 0 || n.y > H) n.vy *= -1;
    }

    requestAnimationFrame(draw);
  }
  draw();
})();
const burger = document.getElementById('burger');
const mobileMenu = document.getElementById('mobile-menu');
let open = false;
burger.addEventListener('click', () => { open = !open; mobileMenu.classList.toggle('hidden', !open); });
function closeMob() { open = false; mobileMenu.classList.add('hidden'); }

// ── Scroll reveal ──
const revEls = document.querySelectorAll('.reveal');
const obs = new IntersectionObserver(entries => {
  entries.forEach(e => {
    if (e.isIntersecting) {
      e.target.classList.add('visible');
      // animate progress bars
      e.target.querySelectorAll('.pfill[data-w]').forEach(bar => {
        bar.style.width = bar.dataset.w + '%';
      });
    }
  });
}, { threshold: 0.1 });
revEls.forEach(el => obs.observe(el));

// ── Smooth scroll ──
document.querySelectorAll('a[href^="#"]').forEach(a => {
  a.addEventListener('click', e => {
    const t = document.querySelector(a.getAttribute('href'));
    if (t) { e.preventDefault(); t.scrollIntoView({ behavior: 'smooth' }); }
  });
});

// ── Neural network background ──
(function(){
  const canvas = document.getElementById('neural-canvas');
  const ctx = canvas.getContext('2d');
  let W, H, nodes = [];
  const NODE_COUNT = 55;
  const MAX_DIST = 150;

  function resize() { W = canvas.width = window.innerWidth; H = canvas.height = window.innerHeight; }
  resize();
  window.addEventListener('resize', () => { resize(); initNodes(); });

  function initNodes() {
    nodes = [];
    for (let i = 0; i < NODE_COUNT; i++) {
      nodes.push({
        x: Math.random() * W, y: Math.random() * H,
        vx: (Math.random() - 0.5) * 0.45, vy: (Math.random() - 0.5) * 0.45,
        r: Math.random() * 2 + 1.2,
        type: Math.random() > 0.45 ? 'orange' : 'cyan'
      });
    }
  }
  initNodes();

  function draw() {
    ctx.clearRect(0, 0, W, H);
    for (let i = 0; i < nodes.length; i++) {
      for (let j = i + 1; j < nodes.length; j++) {
        const dx = nodes[i].x - nodes[j].x, dy = nodes[i].y - nodes[j].y;
        const dist = Math.sqrt(dx*dx + dy*dy);
        if (dist < MAX_DIST) {
          const alpha = (1 - dist / MAX_DIST) * 0.2;
          ctx.beginPath();
          ctx.strokeStyle = (nodes[i].type==='orange'||nodes[j].type==='orange') ? `rgba(255,107,53,${alpha})` : `rgba(0,229,255,${alpha*0.6})`;
          ctx.lineWidth = 0.7;
          ctx.moveTo(nodes[i].x, nodes[i].y);
          ctx.lineTo(nodes[j].x, nodes[j].y);
          ctx.stroke();
        }
      }
    }
    for (const n of nodes) {
      ctx.beginPath();
      ctx.arc(n.x, n.y, n.r*2.5, 0, Math.PI*2);
      ctx.fillStyle = n.type==='orange' ? 'rgba(255,107,53,0.07)' : 'rgba(0,229,255,0.07)';
      ctx.fill();
      ctx.beginPath();
      ctx.arc(n.x, n.y, n.r, 0, Math.PI*2);
      ctx.fillStyle = n.type==='orange' ? 'rgba(255,107,53,0.65)' : 'rgba(0,229,255,0.45)';
      ctx.fill();
      n.x += n.vx; n.y += n.vy;
      if (n.x<0||n.x>W) n.vx*=-1;
      if (n.y<0||n.y>H) n.vy*=-1;
    }
    requestAnimationFrame(draw);
  }
  draw();
})();

// ── Tabs ──
function switchTab(tab) {
  const isLogin = tab === 'login';
  document.getElementById('form-login').style.display = isLogin ? 'block' : 'none';
  document.getElementById('form-register').style.display = isLogin ? 'none' : 'block';
  document.getElementById('tab-login').classList.toggle('active', isLogin);
  document.getElementById('tab-register').classList.toggle('active', !isLogin);
}

// ── Toggle password visibility ──
function togglePass(id, btn) {
  const inp = document.getElementById(id);
  const showing = inp.type === 'text';
  inp.type = showing ? 'password' : 'text';
  btn.innerHTML = showing
    ? `<svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>`
    : `<svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"/></svg>`;
}

// ── Password strength ──
function checkStrength(val) {
  const bars = ['sb1','sb2','sb3','sb4'];
  const label = document.getElementById('strength-label');
  let score = 0;
  if (val.length >= 8) score++;
  if (/[A-Z]/.test(val)) score++;
  if (/[0-9]/.test(val)) score++;
  if (/[^A-Za-z0-9]/.test(val)) score++;
  const colors = ['#ff4d6d','#ff6b35','#febc2e','#00e5ff'];
  const labels = ['Слабый','Средний','Хороший','Сильный'];
  bars.forEach((id, i) => {
    document.getElementById(id).style.background = i < score ? colors[score-1] : 'rgba(255,255,255,0.08)';
  });
  label.textContent = val.length > 0 ? labels[score-1] || '' : '';
  label.style.color = score > 0 ? colors[score-1] : '#64748b';
}

// ── Toast ──
function showToast(msg, success=true) {
  const t = document.getElementById('toast');
  const icon = success
    ? `<svg width="20" height="20" fill="none" stroke="#00e5ff" stroke-width="2.5" viewBox="0 0 24 24"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>`
    : `<svg width="20" height="20" fill="none" stroke="#ff4d6d" stroke-width="2.5" viewBox="0 0 24 24"><path d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>`;
  t.innerHTML = icon + `<span>${msg}</span>`;
  t.style.borderColor = success ? 'rgba(0,229,255,0.3)' : 'rgba(255,77,109,0.3)';
  t.style.transform = 'translateX(-50%) translateY(0)';
  setTimeout(() => { t.style.transform = 'translateX(-50%) translateY(80px)'; }, 3000);
}

// ── Validation helpers ──
function showErr(id, show) {
  const el = document.getElementById(id);
  if (el) el.style.display = show ? 'block' : 'none';
}
function markInp(id, error) {
  const el = document.getElementById(id);
  if (el) { el.classList.toggle('error', error); }
}

// ── Login ──
function handleLogin() {
  const email = document.getElementById('login-email').value.trim();
  const pass  = document.getElementById('login-pass').value;
  let ok = true;

  const emailOk = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
  showErr('err-login-email', !emailOk); markInp('login-email', !emailOk);
  if (!emailOk) ok = false;

  const passOk = pass.length >= 6;
  showErr('err-login-pass', !passOk); markInp('login-pass', !passOk);
  if (!passOk) ok = false;

  if (ok) showToast('Выполняется вход...');
}

// ── Register ──
function handleRegister() {
  const name  = document.getElementById('reg-name').value.trim();
  const email = document.getElementById('reg-email').value.trim();
  const pass  = document.getElementById('reg-pass').value;
  const terms = document.getElementById('terms').checked;
  let ok = true;

  showErr('err-reg-name', !name); markInp('reg-name', !name);
  if (!name) ok = false;

  const emailOk = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
  showErr('err-reg-email', !emailOk); markInp('reg-email', !emailOk);
  if (!emailOk) ok = false;

  const passOk = pass.length >= 8;
  showErr('err-reg-pass', !passOk); markInp('reg-pass', !passOk);
  if (!passOk) ok = false;

  showErr('err-terms', !terms);
  if (!terms) ok = false;

  if (ok) showToast('Аккаунт создан! Добро пожаловать 🎉');
}