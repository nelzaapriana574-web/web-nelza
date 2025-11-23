<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Portofolio | [Nama Kamu]</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    /* ======== GLOBAL ======== */
    :root {
      --bg: #1a1a2e;
      --bg-light: #0f3460;
      --text: #f5f5f5;
      --accent: #e94560;
      --card-bg: rgba(255,255,255,0.05);
      --card-hover: rgba(233,69,96,0.15);
    }

    [data-theme="light"] {
      --bg: #f8f9fa;
      --bg-light: #e9ecef;
      --text: #212529;
      --accent: #0d6efd;
      --card-bg: #ffffff;
      --card-hover: #f1f8ff;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', system-ui, sans-serif;
    }

    body {
      background-color: var(--bg);
      color: var(--text);
      transition: background-color 0.4s, color 0.4s;
      overflow-x: hidden;
    }

    a { color: var(--accent); text-decoration: none; }
    a:hover { text-decoration: underline; }

    .container {
      max-width: 1100px;
      margin: 0 auto;
      padding: 0 20px;
    }

    section {
      padding: 80px 0;
    }

    .section-title {
      font-size: 2.2rem;
      text-align: center;
      margin-bottom: 50px;
      position: relative;
    }

    .section-title::after {
      content: '';
      position: absolute;
      bottom: -15px;
      left: 50%;
      transform: translateX(-50%);
      width: 70px;
      height: 4px;
      background: var(--accent);
      border-radius: 2px;
    }

    .btn {
      display: inline-block;
      padding: 12px 30px;
      background: var(--accent);
      color: white;
      border-radius: 30px;
      font-weight: 600;
      text-align: center;
      transition: all 0.3s ease;
      border: none;
      cursor: pointer;
    }

    .btn:hover {
      transform: translateY(-3px);
      box-shadow: 0 6px 15px rgba(233, 69, 96, 0.3);
    }

    /* ======== HEADER ======== */
    header {
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
      padding: 20px;
      position: relative;
    }

    .avatar {
      width: 150px;
      height: 150px;
      border-radius: 50%;
      background: var(--accent);
      margin-bottom: 30px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 5rem;
      color: white;
      box-shadow: 0 10px 30px rgba(0,0,0,0.2);
    }

    h1 {
      font-size: 3.5rem;
      margin-bottom: 15px;
    }

    .tagline {
      font-size: 1.4rem;
      opacity: 0.85;
      max-width: 700px;
      margin: 0 auto 30px;
    }

    .header-btns {
      display: flex;
      gap: 15px;
      flex-wrap: wrap;
      justify-content: center;
    }

    /* Social Icons */
    .social-links {
      margin-top: 30px;
      display: flex;
      gap: 20px;
    }

    .social-links a {
      width: 45px;
      height: 45px;
      border-radius: 50%;
      background: var(--card-bg);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.2rem;
      transition: all 0.3s;
      color: var(--text);
      text-decoration: none;
    }

    .social-links a:hover {
      background: var(--accent);
      color: white;
      transform: translateY(-5px);
      text-decoration: none;
    }

    /* ======== SECTIONS ======== */
    /* Animasi Fade-in */
    .fade-in {
      opacity: 0;
      transform: translateY(30px);
      transition: opacity 0.8s ease, transform 0.8s ease;
    }

    .fade-in.appear {
      opacity: 1;
      transform: translateY(0);
    }

    /* Projects */
    .projects-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 30px;
    }

    .project-card {
      background: var(--card-bg);
      border-radius: 12px;
      padding: 25px;
      transition: all 0.4s ease;
    }

    .project-card:hover {
      transform: translateY(-10px);
      background: var(--card-hover);
    }

    .project-card h3 {
      color: var(--accent);
      margin-bottom: 12px;
    }

    /* Contact Form */
    .contact-form {
      max-width: 600px;
      margin: 0 auto;
      display: grid;
      gap: 20px;
    }

    .contact-form input,
    .contact-form textarea {
      padding: 15px;
      border-radius: 8px;
      border: 1px solid rgba(255,255,255,0.1);
      background: var(--card-bg);
      color: var(--text);
      font-size: 1rem;
    }

    .contact-form input:focus,
    .contact-form textarea:focus {
      outline: 2px solid var(--accent);
      border-color: transparent;
    }

    /* Footer & Toggle */
    footer {
      text-align: center;
      padding: 30px 0;
      background: rgba(0,0,0,0.05);
      font-size: 0.95rem;
    }

    .theme-toggle {
      position: fixed;
      top: 20px;
      right: 20px;
      width: 50px;
      height: 50px;
      border-radius: 50%;
      background: var(--card-bg);
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      z-index: 100;
      border: none;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }

    /* Responsive */
    @media (max-width: 768px) {
      h1 { font-size: 2.5rem; }
      .tagline { font-size: 1.1rem; }
      .header-btns { flex-direction: column; }
      section { padding: 60px 0; }
    }

    @media (max-width: 480px) {
      .avatar { width: 120px; height: 120px; font-size: 4rem; }
      h1 { font-size: 2rem; }
    }
  </style>
</head>
<body>

  <!-- 🔆 Theme Toggle -->
  <button class="theme-toggle" id="themeToggle">
    <i class="fas fa-moon"></i>
  </button>

  <!-- 🏠 Header -->
  <header>
    <div class="avatar">
      <i class="fas fa-user"></i> <!-- Ganti dengan <img src="foto.jpg"> kalau mau -->
    </div>
    <h1>[Nama Kamu]</h1>
    <p class="tagline">Web Developer | UI Enthusiast | Problem Solver</p>
    <div class="header-btns">
      <a href="#projects" class="btn">Lihat Project</a>
      <a href="cv-saya.pdf" download class="btn" style="background:#20bf6b;">📄 Download CV</a>
    </div>
    <div class="social-links">
      <a href="https://github.com/namakamu" target="_blank"><i class="fab fa-github"></i></a>
      <a href="https://linkedin.com/in/namakamu" target="_blank"><i class="fab fa-linkedin-in"></i></a>
      <a href="https://instagram.com/namakamu" target="_blank"><i class="fab fa-instagram"></i></a>
      <a href="mailto:namakamu@email.com"><i class="fas fa-envelope"></i></a>
    </div>
  </header>

  <!-- 📝 About -->
  <section id="about" class="fade-in">
    <div class="container">
      <h2 class="section-title">Tentang Saya</h2>
      <p style="text-align:center; max-width:800px; margin:0 auto;">
        Saya adalah developer web yang bersemangat akan teknologi & desain. 
        Suka menulis kode bersih, antarmuka intuitif, dan solusi yang scalable. 
        Saat ini sedang mendalami <strong>React, Node.js, dan TypeScript</strong>. 
        Di luar coding, saya suka baca buku, main gitar, dan jalan-jalan ke kafe kecil ☕.
      </p>
    </div>
  </section>

  <!-- 🛠️ Projects -->
  <section id="projects" class="fade-in">
    <div class="container">
      <h2 class="section-title">Project Saya</h2>
      <div class="projects-grid">
        <div class="project-card">
          <h3>Portofolio Ini!</h3>
          <p>✅ Dibuat full HTML/CSS/JS<br>✅ Responsif + Dark Mode<br>✅ Tanpa framework</p>
          <small><em>Dibuat pakai Notepad++ & semangat 😄</em></small>
        </div>
        <div class="project-card">
          <h3>E-Commerce Sederhana</h3>
          <p>🛒 Keranjang belanja<br>💳 Simulasi checkout<br>📱 Mobile-friendly</p>
        </div>
        <div class="project-card">
          <h3>Weather App</h3>
          <p>🌦️ API OpenWeatherMap<br>📍 Lokasi otomatis<br>🎨 UI minimalis</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ✉️ Contact -->
  <section id="contact" class="fade-in">
    <div class="container">
      <h2 class="section-title">Kirim Pesan</h2>
      <form class="contact-form" id="contactForm">
        <input type="text" placeholder="Nama Lengkap" required />
        <input type="email" placeholder="Email" required />
        <textarea placeholder="Pesan (misal: butuh website? yuk kolab!)" rows="5" required></textarea>
        <button type="submit" class="btn">Kirim Pesan</button>
      </form>
    </div>
  </section>

  <!-- 🎯 Footer -->
  <footer>
    <p>&copy; 2025 <strong>[Nama Kamu]</strong>. Dibuat dengan ❤️ di Notepad++</p>
    <p>✨ Simpel, cepat, dan tanpa ribet.</p>
  </footer>

  <!-- 🧠 JavaScript -->
  <script>
    // 🔆 Dark/Light Mode Toggle
    const themeToggle = document.getElementById('themeToggle');
    const icon = themeToggle.querySelector('i');
    
    // Cek preferensi user
    const savedTheme = localStorage.getItem('theme') || 
                      (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light');
    
    document.documentElement.setAttribute('data-theme', savedTheme);
    updateIcon(savedTheme);

    themeToggle.addEventListener('click', () => {
      const current = document.documentElement.getAttribute('data-theme');
      const newTheme = current === 'dark' ? 'light' : 'dark';
      
      document.documentElement.setAttribute('data-theme', newTheme);
      localStorage.setItem('theme', newTheme);
      updateIcon(newTheme);
    });

    function updateIcon(theme) {
      icon.className = theme === 'dark' ? 'fas fa-moon' : 'fas fa-sun';
    }

    // 🌬️ Animasi Scroll (Fade-in saat masuk viewport)
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('appear');
        }
      });
    }, { threshold: 0.1 });

    document.querySelectorAll('.fade-in').forEach(el => observer.observe(el));

    // 📨 Form Submit (simulasi — gak kirim beneran tanpa backend)
    document.getElementById('contactForm')?.addEventListener('submit', function(e) {
      e.preventDefault();
      alert('Terima kasih! Pesanmu sudah terkirim ✅\n\n(NB: Ini simulasi — untuk fitur kirim beneran, bisa pakai Formspree/EmailJS)');
      this.reset();
    });

    // 🧭 Smooth Scroll
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function(e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
          window.scrollTo({
            top: target.offsetTop - 80,
            behavior: 'smooth'
          });
        }
      });
    });
  </script>

</body>
</html>