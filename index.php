<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description"
    content="Premium portfolio marketplace - Buy and sell high-quality web projects, templates, and applications">
  <meta name="keywords" content="portfolio, marketplace, web templates, projects, buy, sell">
  <title>Portfolio Marketplace - Premium Web Projects & Templates</title>

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Klee+One:wght@400;600&family=Orbitron:wght@400;500;600;700;800;900&family=Share+Tech+Mono&family=Poppins:wght@300;400;500;600;700;800&display=swap"
    rel="stylesheet">

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">

  <!-- Styles -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/anime-style.css">
</head>

<body>
  <?php $page = 'home';
  include 'includes/navbar.php'; ?>

  <!-- Hero Section -->
  <section class="hero">
    <div class="container">
      <div class="hero-wrapper">
        <div class="hero-text">
          <div class="badge-wrapper animated-badge">
            <span class="badge-pill">✨ SYSTEM V.2.0 ONLINE</span>
          </div>
          <h1 class="glitch-text" data-text="BUILD THE FUTURE">BUILD THE <br> <span class="text-gradient">FUTURE</span>
          </h1>
          <p>Stop reinventing the wheel. Get production-ready web applications, dashboard templates, and UI kits crafted
            by top-tier developers.</p>

          <div class="hero-cta">
            <a href="shop.php" class="btn btn-primary btn-lg glow-effect">
              <span>🚀</span>
              Explore Market
            </a>
            <a href="#featured" class="btn btn-secondary btn-lg">
              <span>💎</span>
              View Featured
            </a>
          </div>

          <div class="hero-stats">
            <div class="stat-item">
              <span class="stat-number">500+</span>
              <span class="stat-label">Projects</span>
            </div>
            <div class="stat-divider"></div>
            <div class="stat-item">
              <span class="stat-number">10k+</span>
              <span class="stat-label">Downloads</span>
            </div>
            <div class="stat-divider"></div>
            <div class="stat-item">
              <span class="stat-number">4.9</span>
              <span class="stat-label">Rating</span>
            </div>
          </div>
        </div>

        <div class="hero-visual">
          <div class="floating-card-container">
            <!-- Back Card -->
            <div class="glass-card back-card"></div>
            <!-- Main Card -->
            <div class="glass-card main-card">
              <div class="card-header">
                <div class="dots">
                  <span></span><span></span><span></span>
                </div>
                <div class="bar"></div>
              </div>
              <div class="card-body">
                <div class="skeleton-row w-75"></div>
                <div class="skeleton-row w-50"></div>
                <div class="skeleton-row w-90"></div>
                <div class="skeleton-grid">
                  <div class="box"></div>
                  <div class="box"></div>
                </div>
                <div class="code-block">
                  <span class="tag">&lt;Code /&gt;</span>
                  <span class="line">const quality = "Premium";</span>
                  <span class="line">return build_awesome();</span>
                </div>
              </div>
              <div class="glowing-orb"></div>
            </div>
            <!-- Floating Elements -->
            <div class="float-icon icon-1">💻</div>
            <div class="float-icon icon-2">🐍</div>
            <div class="float-icon icon-3">🗄️</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Featured Projects -->
  <section id="featured" class="section">
    <div class="container">
      <div class="section-header">
        <h2 class="section-title">Featured Projects</h2>
        <p class="section-subtitle">Hand-picked premium projects that deliver exceptional value and quality</p>
      </div>

      <div class="manga-grid" id="featured-projects">
        <!-- Projects will be loaded here by JavaScript -->
      </div>

      <div style="text-align: center; margin-top: 3rem;">
        <a href="shop.php" class="btn btn-primary btn-lg">View All Projects</a>
      </div>
    </div>
  </section>

  <!-- Categories Section -->
  <section class="section">
    <div class="container">
      <div class="section-header">
        <h2 class="section-title anime-header" data-text="Data Sectors">Data Sectors</h2>
        <p class="section-subtitle">Access classified project archives</p>
      </div>

      <div class="grid grid-4">
        <a href="shop.php?category=web" class="category-card">
          <div class="category-icon">🌐</div>
          <h3>Web Applications</h3>
          <p>Full-stack web apps and platforms</p>
        </a>

        <a href="shop.php?category=app" class="category-card">
          <div class="category-icon">📱</div>
          <h3>Mobile Apps</h3>
          <p>Cross-platform mobile solutions</p>
        </a>

        <a href="shop.php?category=dashboard" class="category-card">
          <div class="category-icon">📊</div>
          <h3>Dashboards</h3>
          <p>Admin panels and analytics</p>
        </a>

        <a href="shop.php?category=template" class="category-card">
          <div class="category-icon">🎨</div>
          <h3>Templates</h3>
          <p>Ready-to-use website templates</p>
        </a>
      </div>
    </div>
  </section>

  <!-- Features Section -->
  <section id="features" class="section" style="background: var(--bg-card);">
    <div class="container">
      <div class="section-header">
        <h2 class="section-title anime-header" data-text="System Modules">System Modules</h2>
        <p class="section-subtitle">Core capabilities of our digital assets</p>
      </div>

      <div class="grid grid-3">
        <div class="feature-card">
          <div class="feature-icon-box">⚡</div>
          <h3>Production Ready</h3>
          <p>All projects are fully tested, optimized, and ready to deploy. No setup hassles, just download and launch.
          </p>
        </div>

        <div class="feature-card">
          <div class="feature-icon-box">🎨</div>
          <h3>Modern Design</h3>
          <p>Beautiful, responsive designs that follow the latest UI/UX trends and best practices.</p>
        </div>

        <div class="feature-card">
          <div class="feature-icon-box">📚</div>
          <h3>Full Documentation</h3>
          <p>Comprehensive documentation and code comments to help you understand and customize every aspect.</p>
        </div>

        <div class="feature-card">
          <div class="feature-icon-box">🔒</div>
          <h3>Secure Code</h3>
          <p>Built with security in mind, following industry standards and best practices for safe deployment.</p>
        </div>

        <div class="feature-card">
          <div class="feature-icon-box">🚀</div>
          <h3>Performance Optimized</h3>
          <p>Optimized for speed and efficiency with clean, maintainable code that scales.</p>
        </div>

        <div class="feature-card">
          <div class="feature-icon-box">💎</div>
          <h3>Lifetime Updates</h3>
          <p>Get free updates and improvements for all purchased projects. Buy once, benefit forever.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- About Section (RPG Character Sheet) -->
  <section id="about" class="section" style="background: transparent;">
    <div class="container">
      <div class="section-header">
        <h2 class="section-title anime-header" data-text="Character Stats">Character Stats</h2>
        <p class="section-subtitle">Player Profile & Attributes</p>
      </div>

      <div class="char-sheet-container">
        <!-- Avatar / Profile Card -->
        <div class="char-card">
          <div class="char-inner">
            <div class="char-avatar">
              👦
            </div>
            <h3 style="text-align: center; margin-bottom: 0.5rem;">Dilshan</h3>
            <p style="text-align: center; color: var(--neon-blue); font-family: monospace;">Level 25 Full-Stack Dev</p>

            <ul class="char-stats">
              <li class="stat-row">
                <span class="stat-label">STR</span>
                <div class="stat-bar-bg">
                  <div class="stat-bar-fill" style="width: 90%;"></div>
                </div>
                <span class="stat-val">90</span>
              </li>
              <li class="stat-row">
                <span class="stat-label">INT</span>
                <div class="stat-bar-bg">
                  <div class="stat-bar-fill" style="width: 95%;"></div>
                </div>
                <span class="stat-val">95</span>
              </li>
              <li class="stat-row">
                <span class="stat-label">DEX</span>
                <div class="stat-bar-bg">
                  <div class="stat-bar-fill" style="width: 85%;"></div>
                </div>
                <span class="stat-val">85</span>
              </li>
              <li class="stat-row">
                <span class="stat-label">LUCK</span>
                <div class="stat-bar-bg">
                  <div class="stat-bar-fill" style="width: 70%;"></div>
                </div>
                <span class="stat-val">70</span>
              </li>
            </ul>

            <div style="margin-top: 2rem; border-top: 1px dashed rgba(255,255,255,0.2); padding-top: 1rem;">
              <p style="font-size: 0.8rem; margin-bottom: 0.5rem;"><strong>Special Ability:</strong></p>
              <div
                style="background: rgba(0,0,0,0.3); padding: 0.5rem; border-left: 2px solid var(--neon-pink); font-size: 0.85rem;">
                "Infinite Coffee Loop" - Codes 2x faster after 12 AM.
              </div>
            </div>
          </div>
        </div>

        <!-- Right Side: Skill HUD -->
        <div>
          <h3 class="anime-header" style="margin-bottom: 2rem;">Active Skills / Tech Stack</h3>

          <div class="skill-hud-grid">
            <div class="skill-node">
              <i class="bi bi-filetype-html"
                style="font-size: 2rem; color: #E34F26; display: block; margin-bottom: 0.5rem;"></i>
              <span>HTML5 / CSS3</span>
              <div style="font-size: 0.7rem; color: var(--text-muted); margin-top: 0.2rem;">Mastery: 99%</div>
            </div>
            <div class="skill-node">
              <i class="bi bi-filetype-js"
                style="font-size: 2rem; color: #F7DF1E; display: block; margin-bottom: 0.5rem;"></i>
              <span>JavaScript (ES6+)</span>
              <div style="font-size: 0.7rem; color: var(--text-muted); margin-top: 0.2rem;">Mastery: 92%</div>
            </div>
            <div class="skill-node">
              <i class="bi bi-filetype-php"
                style="font-size: 2rem; color: #777BB4; display: block; margin-bottom: 0.5rem;"></i>
              <span>PHP & MySQL</span>
              <div style="font-size: 0.7rem; color: var(--text-muted); margin-top: 0.2rem;">Mastery: 88%</div>
            </div>
            <div class="skill-node">
              <i class="bi bi-box" style="font-size: 2rem; color: #61DAFB; display: block; margin-bottom: 0.5rem;"></i>
              <span>React / Next.js</span>
              <div style="font-size: 0.7rem; color: var(--text-muted); margin-top: 0.2rem;">Mastery: 85%</div>
            </div>
            <div class="skill-node">
              <i class="bi bi-pentagon"
                style="font-size: 2rem; color: var(--neon-green); display: block; margin-bottom: 0.5rem;"></i>
              <span>GSAP / Anime.js</span>
              <div style="font-size: 0.7rem; color: var(--text-muted); margin-top: 0.2rem;">Mastery: 80%</div>
            </div>
            <div class="skill-node">
              <i class="bi bi-server"
                style="font-size: 2rem; color: var(--neon-blue); display: block; margin-bottom: 0.5rem;"></i>
              <span>Node.js</span>
              <div style="font-size: 0.7rem; color: var(--text-muted); margin-top: 0.2rem;">Mastery: 75%</div>
            </div>
          </div>

          <div style="margin-top: 3rem;">
            <h3 class="anime-header" style="margin-bottom: 1rem;">Biography</h3>
            <p
              style="background: rgba(0,0,0,0.2); padding: 1.5rem; border-radius: 4px; border-left: 4px solid var(--neon-blue);">
              "A developer passionate about bridging the gap between design and functionality. Specializes in building
              immersive web experiences that feel alive. Currently ranking up in the world of full-stack development."
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA Section -->
  <section class="section">
    <div class="container">
      <div class="card"
        style="padding: 4rem; text-align: center; background: linear-gradient(135deg, rgba(102, 126, 234, 0.1) 0%, rgba(118, 75, 162, 0.1) 100%); border: 1px solid rgba(102, 126, 234, 0.3);">
        <h2 style="margin-bottom: 1rem;">Ready to Build Something Amazing?</h2>
        <p style="font-size: 1.25rem; margin-bottom: 2rem; max-width: 600px; margin-left: auto; margin-right: auto;">
          Join thousands of developers who are building faster and better with our premium projects.</p>
        <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
          <a href="shop.html" class="btn btn-primary btn-lg">Browse Projects</a>
          <a href="admin/index.html" class="btn btn-secondary btn-lg">Sell Your Projects</a>
        </div>
      </div>
    </div>
  </section>

  <?php include 'includes/footer.php'; ?>

  <!-- Scripts -->
  <script src="assets/js/main.js"></script>
</body>

</html>