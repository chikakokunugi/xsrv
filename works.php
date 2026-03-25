<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="format-detection" content="telephone=no">
<title>Works – 神戸・大阪 歯科開業、設計・施工デザインオフィス プラスワン</title>
<style>
*, *::before, *::after { box-sizing: border-box; }
body, html {
  margin: 0;
  padding: 0;
  background: #fff;
  width: 100%;
  font-family: 'Arial', sans-serif;
  scroll-behavior: smooth;
}

/* ===== HEADER ===== */
header {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 72px;
  background: #fff;
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 0 24px;
  z-index: 100;
  border-bottom: 1px solid #e0e0e0;
}

.header-logo {
  display: flex;
  align-items: center;
}

.header-logo img {
  height: 40px;
}

nav {
  display: flex;
  align-items: center;
  gap: 28px;
}

nav a {
  text-decoration: none;
  color: #222;
  font-size: 0.72rem;
  font-weight: 600;
  letter-spacing: 0.1em;
  text-transform: uppercase;
  white-space: nowrap;
  position: relative;
  padding-bottom: 3px;
}
nav a:not(.nav-contact):not([aria-label])::after {
  content: '';
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 1px;
  background: #222;
  transform: scaleX(0);
  transform-origin: left;
  transition: transform 0.3s ease;
}
nav a:not(.nav-contact):not([aria-label]):hover::after {
  transform: scaleX(1);
}
nav a:not(.nav-contact):not([aria-label]):hover { color: #000; }

.nav-contact {
  background: #111;
  color: #fff !important;
  padding: 8px 18px;
  border-radius: 4px;
  font-size: 0.72rem;
  font-weight: 700;
  letter-spacing: 0.1em;
  text-transform: uppercase;
  transition: opacity 0.2s !important;
}
.nav-contact:hover { opacity: 0.7; }

.nav-icons {
  display: flex;
  gap: 12px;
  align-items: center;
  margin-left: 4px;
}
.nav-icons a {
  color: #222;
  font-size: 1rem;
  display: flex;
  align-items: center;
}

/* ===== WORKS CONTENT ===== */
.works-page {
  width: 100%;
  padding: 112px 40px 80px;
  box-sizing: border-box;
}

.works-page-heading {
  margin: 0 0 40px;
}

.works-page-heading img {
  max-width: 300px;
  height: auto;
}

.works-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 16px;
  max-width: 1200px;
  margin: 0 auto;
}

.works-card {
  position: relative;
  overflow: hidden;
  background: #ccc;
  aspect-ratio: 1 / 1;
}

.works-card-img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
  transition: transform 0.4s ease;
}

.works-card:hover .works-card-img {
  transform: scale(1.04);
}

.works-card-overlay {
  position: absolute;
  inset: 0;
  background: rgba(0, 0, 0, 0.25);
}

.works-card-info {
  position: absolute;
  top: 50%;
  left: 20px;
  transform: translateY(-50%);
  color: #fff;
}

.works-card-title {
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.4;
  margin: 0;
}

.works-contact {
  text-align: right;
  padding: 40px 0 0;
  max-width: 1200px;
  margin: 0 auto;
}

.works-contact a {
  font-size: 0.85rem;
  color: #111;
  text-decoration: none;
  letter-spacing: 0.1em;
  text-transform: uppercase;
  background: #111;
  color: #fff;
  padding: 10px 24px;
  border-radius: 4px;
  display: inline-block;
  transition: opacity 0.2s;
}

.works-contact a:hover {
  opacity: 0.7;
}

/* ===== FOOTER ===== */
.site-footer {
  width: 100%;
  padding: 60px 40px 0;
  box-sizing: border-box;
}

.footer-inner {
  display: flex;
  gap: 40px;
  align-items: flex-start;
  margin: 0 auto;
  justify-content: center;
  border-bottom: 1px solid #e0e0e0;
  max-width: 750px;
  padding: 30px;
}

.footer-map {
  flex-shrink: 0;
  width: 280px;
  height: 180px;
}

.footer-map iframe {
  width: 100%;
  height: 100%;
  display: block;
}

.footer-mail {
  color: #555;
  text-decoration: none;
  border-bottom: 1px solid #aaa;
  transition: color 0.2s, border-color 0.2s;
}

.footer-mail:hover {
  color: #111;
  border-color: #111;
}

.footer-info {
  flex: none;
  width: fit-content;
}

.footer-company {
  font-size: 1rem;
  font-weight: 500;
  color: #222;
  margin: 0 0 16px;
  line-height: 1.2;
}

.footer-company span {
  font-size: 0.85rem;
  font-weight: 400;
}

.footer-address {
  font-size: 0.85rem;
  color: #222;
  line-height: 1.6;
  margin: 0;
}

.footer-nav-wrap {
  padding: 20px 0;
}

.footer-nav {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 32px;
}

.footer-nav a {
  text-decoration: none;
  color: #222;
  font-size: 0.75rem;
  font-weight: 600;
  letter-spacing: 0.1em;
  text-transform: uppercase;
}

.footer-contact {
  background: #111;
  color: #fff !important;
  padding: 8px 18px;
  border-radius: 4px;
}

.footer-instagram {
  display: flex;
  align-items: center;
  color: #222;
}

.footer-copy {
  text-align: center;
  padding: 24px 0;
}

.footer-copy p {
  font-size: 0.75rem;
  color: #999;
  margin: 0;
}

/* ===== RESPONSIVE ===== */
@media (max-width: 1024px) {
  .works-grid {
    grid-template-columns: repeat(3, 1fr);
  }
}

@media (max-width: 768px) {
  header nav a:not(.nav-contact):not([aria-label]) {
    display: none;
  }
  .works-page {
    padding: 96px 20px 60px;
  }
  .footer-inner {
    gap: 20px;
    padding: 20px;
  }
  .footer-map {
    width: 200px;
    height: 160px;
    flex-shrink: 0;
  }
  .footer-info {
    min-width: 0;
  }
  .footer-address {
    font-size: 0.78rem;
    word-break: break-word;
  }
  .footer-company {
    font-size: 0.9rem;
  }
}

@media (max-width: 600px) {
  .works-grid {
    grid-template-columns: repeat(2, 1fr);
    gap: 10px;
  }
}

@media (max-width: 480px) {
  header {
    padding: 0 12px;
    gap: 8px;
  }
  .header-logo img {
    height: 28px;
  }
  nav {
    gap: 10px;
  }
  .nav-contact {
    padding: 6px 10px;
    font-size: 0.62rem;
  }
  .works-page-heading img {
    max-width: 60%;
  }
  .site-footer {
    padding: 40px 20px 0;
  }
  .footer-inner {
    flex-direction: column;
    align-items: center;
  }
  .footer-map {
    width: 100%;
    height: 200px;
  }
  .footer-nav {
    flex-wrap: wrap;
    gap: 16px;
  }
}
</style>
</head>
<body>

<!-- HEADER -->
<header>
  <a class="header-logo" href="test.php"><img src="logo.png" alt="プラスワンのロゴ画像"></a>
  <nav>
    <a href="test.php#works">WORKS</a>
    <a href="test.php#workflow">WORKFLOW</a>
    <a href="mailto:info@dopo.jp" class="nav-contact">CONTACT</a>
    <div class="nav-icons">
      <a href="https://www.instagram.com/designoffice_plusone/" aria-label="Instagram" target="_blank">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg>
      </a>
    </div>
  </nav>
</header>

<!-- WORKS CONTENT -->
<section class="works-page">
  <h1 class="works-page-heading"><img src="img/h2/Works.png" alt="Works"></h1>

  <div class="works-grid">
    <div class="works-card">
      <img class="works-card-img" src="img/work01.png" alt="">
      <div class="works-card-overlay"></div>
      <div class="works-card-info"><p class="works-card-title">Medical</p></div>
    </div>
    <div class="works-card">
      <img class="works-card-img" src="img/work02.png" alt="">
      <div class="works-card-overlay"></div>
      <div class="works-card-info"><p class="works-card-title">Dental</p></div>
    </div>
    <div class="works-card">
      <img class="works-card-img" src="img/work03.png" alt="">
      <div class="works-card-overlay"></div>
      <div class="works-card-info"><p class="works-card-title">Dental</p></div>
    </div>
    <div class="works-card">
      <img class="works-card-img" src="img/work04.png" alt="">
      <div class="works-card-overlay"></div>
      <div class="works-card-info"><p class="works-card-title">Dental</p></div>
    </div>
    <div class="works-card">
      <img class="works-card-img" src="img/work01.png" alt="">
      <div class="works-card-overlay"></div>
      <div class="works-card-info"><p class="works-card-title">Medical</p></div>
    </div>
    <div class="works-card">
      <img class="works-card-img" src="img/work02.png" alt="">
      <div class="works-card-overlay"></div>
      <div class="works-card-info"><p class="works-card-title">Dental</p></div>
    </div>
    <div class="works-card">
      <img class="works-card-img" src="img/work03.png" alt="">
      <div class="works-card-overlay"></div>
      <div class="works-card-info"><p class="works-card-title">Dental</p></div>
    </div>
    <div class="works-card">
      <img class="works-card-img" src="img/work04.png" alt="">
      <div class="works-card-overlay"></div>
      <div class="works-card-info"><p class="works-card-title">Dental</p></div>
    </div>
    <div class="works-card">
      <img class="works-card-img" src="img/work01.png" alt="">
      <div class="works-card-overlay"></div>
      <div class="works-card-info"><p class="works-card-title">Medical</p></div>
    </div>
    <div class="works-card">
      <img class="works-card-img" src="img/work02.png" alt="">
      <div class="works-card-overlay"></div>
      <div class="works-card-info"><p class="works-card-title">Dental</p></div>
    </div>
    <div class="works-card">
      <img class="works-card-img" src="img/work03.png" alt="">
      <div class="works-card-overlay"></div>
      <div class="works-card-info"><p class="works-card-title">Dental</p></div>
    </div>
    <div class="works-card">
      <img class="works-card-img" src="img/work04.png" alt="">
      <div class="works-card-overlay"></div>
      <div class="works-card-info"><p class="works-card-title">Dental</p></div>
    </div>
  </div>

  <div class="works-contact">
    <a href="mailto:info@dopo.jp">CONTACT</a>
  </div>
</section>

<footer class="site-footer">
  <div class="footer-inner">
    <div class="footer-map">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6560.592736806151!2d135.190448!3d34.697704099999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60008ee122659c67%3A0x30a44e8e5d97af67!2z44CSNjUwLTAwMDMg5YW15bqr55yM56We5oi45biC5Lit5aSu5Yy65bGx5pys6YCa77yS5LiB55uu77yT4oiS77yRIOaXpeS_oeiyv-aYk-ODk-ODqyAyZg!5e0!3m2!1sja!2sjp!4v1774317085056!5m2!1sja!2sjp"
        width="100%"
        height="100%"
        style="border:0;"
        allowfullscreen=""
        loading="lazy">
      </iframe>
    </div>
    <div class="footer-info">
      <p class="footer-company">有限会社　デザインオフィス プラスワン<br>
      <span>Design Office Plus One Co., Ltd..</span></p>
      <p class="footer-address">
        〒650-0003 神戸市中央区山本通 2-3-1 日信貿易ビル 2F<br>
        TEL：078-200-4439　FAX：078-200-4449<br>
        <a href="mailto:info@dopo.jp" class="footer-mail">E-Mail：info@dopo.jp</a><br>
        URL：www.dopo.jp
      </p>
    </div>
  </div>
  <div class="footer-nav-wrap">
    <nav class="footer-nav">
      <a href="test.php#works">WORKS</a>
      <a href="test.php#workflow">WORKFLOW</a>
      <a href="privacy.php">PRIVACY</a>
      <a href="mailto:info@dopo.jp" class="footer-contact">CONTACT</a>
      <a href="https://www.instagram.com/designoffice_plusone/" aria-label="Instagram" class="footer-instagram" target="_blank">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg>
      </a>
    </nav>
  </div>
  <div class="footer-copy">
    <p>Copyright© <?php echo date('Y'); ?>   Design Office Plus One Co., Ltd.. All Rights Reserved.</p>
  </div>
</footer>

</body>
</html>
