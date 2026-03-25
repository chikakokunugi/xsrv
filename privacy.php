<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="format-detection" content="telephone=no">
<title>Privacy – 神戸・大阪 歯科開業、設計・施工デザインオフィス プラスワン</title>
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

/* ===== PRIVACY CONTENT ===== */
.privacy-section {
  width: 100%;
  padding: 120px 20px 80px;
  box-sizing: border-box;
}

.privacy-inner {
  max-width: 760px;
  margin: 0 auto;
}

.privacy-heading {
  text-align: left;
  margin: 0 0 40px;
}

.privacy-heading img {
  max-width: 300px;
  height: auto;
}

.privacy-lead {
  font-size: 0.9rem;
  color: #444;
  line-height: 2.0;
  margin: 0 0 32px;
}

.privacy-list-num {
  list-style: none;
  padding: 0;
  margin: 0 0 40px;
}

.privacy-list-num li {
  font-size: 0.9rem;
  color: #444;
  line-height: 2.0;
  padding: 12px 0 12px 0;
}

.privacy-block {
  margin: 0 0 32px;
}

.privacy-block-title {
  font-size: 0.88rem;
  font-weight: 700;
  color: #222;
  margin: 0 0 12px;
  letter-spacing: 0.02em;
}

.privacy-block-body {
  font-size: 0.9rem;
  color: #444;
  line-height: 2.0;
  margin: 0 0 12px;
}

.privacy-list-dot {
  list-style: none;
  padding: 0;
  margin: 0 0 8px;
}

.privacy-list-dot li {
  font-size: 0.9rem;
  color: #444;
  line-height: 2.0;
  padding-left: 1em;
}

.privacy-note {
  margin: 0 0 40px;
}

.privacy-note p {
  font-size: 0.88rem;
  color: #555;
  line-height: 2.0;
  margin: 0;
}

.privacy-sign {
  font-size: 0.9rem;
  color: #444;
  line-height: 2.0;
  text-align: left;
  margin: 40px 0 0;
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

@media (max-width: 768px) {
  header nav a:not(.nav-contact):not([aria-label]) {
    display: none;
  }
  .footer-nav a[href="#works"],
  .footer-nav a[href="#workflow"] {
    display: none;
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
  .privacy-section {
    padding: 100px 20px 60px;
  }
  .privacy-heading img {
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

<!-- PRIVACY CONTENT -->
<section class="privacy-section">
  <div class="privacy-inner">

    <h1 class="privacy-heading"><img src="img/h2/privacy.png" alt="Privacy"></h1>

    <p class="privacy-lead">有限会社デザインオフィスプラスワン（以下「当社」）は、個人情報保護について規定の制定及び管理体制の確立を図ると共に、以下に掲げる個人情報保護法を定めこの方針に従い個人情報の適切な保護に努めて参ります。</p>

    <ul class="privacy-list-num">
      <li>1. 当社は、個人情報に関する法令およびその他の規範を遵守しお客様の大切な個人情報の保護に万全を尽くします。</li>
      <li>2. 当社は事業活動において、お客様の情報をお預かりしていることを考慮し、各事業に応じた個人情報の保護の為の管理体制を確立すると共に、個人情報の収集、利用、提供において所定の規則に従い適切に取り扱います。</li>
      <li>3. 当社は、お客様の個人情報を適切に取り扱うため、社内規定および社内管理体制の整備、従業員の教育、並びに、個人情報への不正アクセスや個人情報の紛失、破壊、改ざんおよび漏洩等防止に関する適切な処理を行い、またそのその見直しを継続して図ることにより、個人情報の保護に努めてまいります。</li>
      <li>4. 当社は、お客様の個人情報については、上記利用目的を達成するため、業務委託先又は提携先に委託する場合がございます。<br>
      その場合は、個人情報の保護が十分に図られている企業を選定し、個人情報の契約を締結する等必要かつ適切な処置を実施いたします。</li>
      <li>5. 当社では、お客様の個人情報の保護を図るために、また、法令その他の規範の変更に対応するためにプライバシーポリシーを改定することがございます。<br>
      改定があった場合はホームページにてお知らせいたします。</li>
    </ul>

    <div class="privacy-note">
      <p>［ 特記事項 ］<br>
      当社の個人情報保護法は、日本に基づくものとします。当社は、個人情報の取り扱いの改善または法令、若しくはその他の規範制改定に伴い、この「個人情報保護に関して」を改定することがございます。この「個人情報保護に関して」は、掲載日(更新日含む。)以降に適用されるものとします。各コンテンツにおいて、個別に個人情報に関する規定を定めている場合には当該規定が優先されるものとします。</p>
    </div>

    <div class="privacy-block">
      <p class="privacy-block-title">［個人情報の収集について］</p>
      <p class="privacy-block-body">当社は、以下の場合に個人情報を収集することがあります。</p>
      <ul class="privacy-list-dot">
        <li>・お問い合わせ</li>
        <li>・資料請求のお申し込み</li>
        <li>・アンケート調査へのご回答　など</li>
      </ul>
    </div>

    <div class="privacy-block">
      <p class="privacy-block-title">［個人情報の利用目的について］</p>
      <p class="privacy-block-body">当社がお客様からいただいた個人情報は、下記目的の必要な範囲で使用いたします。</p>
      <ul class="privacy-list-dot">
        <li>・お問い合わせ等に対する回答や確認のご連絡のため</li>
        <li>・商品やサービスを向上させるための分析を行うため</li>
        <li>・お客様に合ったサービスを提供するため　など</li>
      </ul>
    </div>

    <div class="privacy-block">
      <p class="privacy-block-title">［個人情報の第三者への開示について］</p>
      <p class="privacy-block-body">当社は取得したお客様の個人データは、下記の場合を除き、原則として、<br>
      如何なる第三者にも開示することはありません。<br><br>
      開示先、開示情報内容を特定したうえで、お客様の合意がある場合　など</p>
    </div>

    <p class="privacy-sign">有限会社 デザインオフィスプラスワン<br>
    代表取締役社長　山本 博之</p>

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
