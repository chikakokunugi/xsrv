
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="format-detection" content="telephone=no">
<title>神戸・大阪 歯科開業、設計・施工デザインオフィス プラスワン</title>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@300;400;500;700&display=swap" rel="stylesheet">
<style>
*, *::before, *::after { box-sizing: border-box; }
body, html {
  margin: 0;
  padding: 0;
  background: #fff;
  width: 100%;
  font-family: 'Noto Serif JP', serif;
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
  gap: 20px;
}

nav a {
  text-decoration: none;
  color: #222;
  font-size: 0.85rem;
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
  padding: 6px 14px;
  border-radius: 4px;
  font-size: 0.85rem;
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

/* ===== ACCORDION ===== */
.accordion-wrapper {
  display: flex;
  width: 100%;
  height: calc(100vh - 72px);
  margin-top: 72px;
  overflow: hidden;
}

.panel {
  position: relative;
  height: 100%;
  overflow: hidden;
  flex-shrink: 0;
}

.panel:nth-child(n+2) {
  margin-left: -50px;
}

.panel:nth-child(1),
.panel:nth-child(2),
.panel:nth-child(3),
.panel:nth-child(4),
.panel:nth-child(5) {
  clip-path: polygon(0 0, calc(100% - 50px) 0, 100% 20%, 100% 100%, 0 100%);
}

.panel:nth-child(1) { width: 43vw; z-index: 6; }
.panel:nth-child(2) { width: calc((57vw + 250px) / 5); z-index: 5; }
.panel:nth-child(3) { width: calc((57vw + 250px) / 5); z-index: 4; }
.panel:nth-child(4) { width: calc((57vw + 250px) / 5); z-index: 3; }
.panel:nth-child(5) { width: calc((57vw + 250px) / 5); z-index: 2; }
.panel:nth-child(6) { width: calc((57vw + 250px) / 5); z-index: 1; }

.img-track {
  position: absolute;
  top: 0; left: 0;
  height: 100%;
  display: flex;
  z-index: 0;
}

.img-slide {
  flex-shrink: 0;
  height: 100%;
  background-size: cover;
  background-position: 50% 50%;
  position: relative;
}

/* ===== 改行制御 ===== */
.br-sp { display: none; }

/* ===== スマホ・タブレット: 768px以下 ===== */
@media (max-width: 768px) {
  .philosophy-scroll {
    display: none !important;
  }
  .br-sp { display: inline; }
  .br-pc { display: none; }
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
  /* 4・5・6枚目を非表示 */
  .panel:nth-child(4),
  .panel:nth-child(5),
  .panel:nth-child(6) {
    display: none;
  }

  /* clip-pathは2枚目のみ */
  .panel:nth-child(2) {
    clip-path: polygon(0 0, calc(100% - 50px) 0, 100% 20%, 100% 100%, 0 100%);
  }
  .panel:nth-child(3) {
    clip-path: none;
  }

  /* 1枚目を60vw、2・3枚目で残りを均等に: 60vw + W×2 - 50px×2 = 100vw → W = (40vw + 100px) / 2 */
  .panel:nth-child(1) { width: 60vw; }
  .panel:nth-child(2) { width: calc((40vw + 100px) / 2); }
  .panel:nth-child(3) { width: calc((40vw + 100px) / 2); }
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
  .accordion-wrapper {
    height: calc(100vh - 72px);
    height: calc(100dvh - 72px);
    margin-top: 72px;
  }
}

.panel-label {
  position: absolute;
  bottom: 60px;
  max-height: 300px;
  width: auto;
  z-index: 10;
  pointer-events: none;
  filter: drop-shadow(0 0 6px rgba(0,0,0,0.5)) drop-shadow(0 0 12px rgba(0,0,0,0.9));
}
/* ラベル位置はJSで動的に設定 */
@media (max-width: 768px) and (min-width: 481px) {
  .panel-label {
    max-height: 180px !important;
  }
}
@media (max-width: 480px) {
  .panel-label {
    max-height: 120px !important;
  }
}

/* ===== FADE-IN ANIMATION ===== */
.fade-in-section {
  opacity: 0;
  transform: translateY(40px);
  transition: opacity 0.8s ease, transform 0.8s ease;
}
.fade-in-section.is-visible {
  opacity: 1;
  transform: translateY(0);
}

/* ===== PHILOSOPHY SECTION ===== */
.philosophy-section {
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  padding: 80px 20px 40px;
  box-sizing: border-box;
  position: relative;
}
.philosophy-scroll {
  position: absolute;
  left: 32px;
  bottom: 60px;
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 12px;
}

.philosophy-scroll span {
  writing-mode: vertical-rl;
  font-size: 0.65rem;
  font-weight: 600;
  letter-spacing: 0.2em;
  color: #999;
  text-transform: uppercase;
}

.philosophy-scroll::after {
  content: '';
  display: block;
  width: 1px;
  height: 60px;
  background: #999;
  animation: scrollLine 1.8s ease-in-out infinite;
}

@keyframes scrollLine {
  0%   { transform: scaleY(0); transform-origin: top; opacity: 1; }
  50%  { transform: scaleY(1); transform-origin: top; opacity: 1; }
  51%  { transform: scaleY(1); transform-origin: bottom; opacity: 1; }
  100% { transform: scaleY(0); transform-origin: bottom; opacity: 0; }
}

.philosophy-inner {
  max-width: 700px;
}

.philosophy-heading {
  margin: 0 0 24px;
  text-align: center;
}

.philosophy-heading img {
  max-width: 100%;
  height: auto;
}

.philosophy-sub {
  font-size: 1.2rem;
  font-weight: 400;
  color: #333;
  letter-spacing: 0.05em;
  margin: 0 0 24px;
  font-family: inherit;
  line-height: 1.8;
}

.philosophy-body {
  font-size: 1rem;
  color: #666;
  line-height: 2.0;
  margin: 0;
}
/* ===== FURNITURE SECTION ===== */
.furniture-section {
  width: 100%;
  padding: 80px 40px;
  box-sizing: border-box;
  border-top: 1px solid #ccc;
  border-bottom: 1px solid #ccc;
}

.furniture-title {
  text-align: center;
  margin: 0 0 48px;
}

.furniture-title img {
  height: auto;
  max-width: 100%;
}

.furniture-inner {
  max-width: 900px;
  margin: 0 auto;
  display: flex;
  align-items: center;
  gap: 48px;
}

.furniture-left {
  flex-shrink: 0;
  width: 250px;
  display: flex;
  flex-direction: column;
  gap: 16px;
}

.furniture-logo {
  width: 100%;
  height: auto;
}

.furniture-body {
  font-size: 0.9rem;
  color: #555;
  line-height: 1.8;
  margin: 0;
}

.furniture-images {
  display: flex;
  gap: 12px;
  flex: 1;
}

.furniture-img {
  flex: 1;
  width: 0;
  aspect-ratio: 1 / 1;
  object-fit: cover;
}

@media (max-width: 768px) {
  .furniture-section {
    padding: 60px 24px;
  }
  .furniture-inner {
    flex-direction: column;
    gap: 28px;
  }
  .furniture-left {
    width: 100%;
    flex-direction: row;
    align-items: center;
  }
  .furniture-logo {
    width: 160px;
  }
  .furniture-images {
    width: 100%;
  }
  .furniture-img {
    flex: 1;
    width: 0;
  }
}

@media (max-width: 480px) {
  .furniture-title {
    font-size: 1.6rem;
  }
}

/* ===== NEW WORKS SECTION ===== */
.works-section {
  width: 100%;
  padding: 80px 0 40px;
  overflow: hidden;
}

.works-title {
  font-size: 1.6rem;
  font-weight: 300;
  color: #aaa;
  letter-spacing: 0.05em;
  font-family: 'Noto Serif JP', serif;
  text-align: center;
  margin: 0 0 30px;
}

.works-slider-outer {
  overflow: hidden;
  user-select: none;
  cursor: grab;
  margin: 0 40px;
}
.works-slider-outer:active {
  cursor: grabbing;
}

.works-slider-track {
  display: flex;
  gap: 24px;
  transition: transform 0.9s cubic-bezier(0.4, 0, 0.2, 1);
  width: max-content;
}

.works-card {
  flex-shrink: 0;
  width: calc((100vw - 80px - 72px) / 4);
  overflow: hidden;
  position: relative;
  background: #ccc;
  aspect-ratio: 1 / 1;
  cursor: pointer;
}
.works-card.is-pressed {
  transform: scale(0.97);
}

@media (max-width: 768px) {
  .works-slider-outer {
    margin: 0 20px;
  }
  .works-card {
    width: calc((100vw - 40px - 24px) / 2);
  }
}

.works-card-img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
  transition: transform 0.4s ease;
}
.works-card.is-hover .works-card-img {
  transform: scale(1.04);
}

.works-card-overlay {
  position: absolute;
  inset: 0;
  background: rgba(0, 0, 0, 0.35);
  transition: background 0.3s ease;
}
.works-card.is-hover .works-card-overlay {
  background: rgba(0, 0, 0, 0.7);
}

.works-card-view {
  position: absolute;
  inset: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  opacity: 0;
  transition: opacity 0.3s ease;
}
.works-card.is-hover .works-card-view {
  opacity: 1;
}
.works-card-view span {
  font-size: 0.72rem;
  font-weight: 700;
  letter-spacing: 0.2em;
  color: #fff;
  border: 1px solid rgba(255,255,255,0.8);
  padding: 8px 20px;
  text-transform: uppercase;
}

.works-card-info {
  position: absolute;
  top: 50%;
  left: 20px;
  transform: translateY(-50%);
  color: #fff;
  padding: 0;
}
.works-card-title {
  display: block;
  height: 18px;
  width: auto;
}

.works-more {
  text-align: right;
  padding: 20px 40px 0;
}
.works-more a {
  font-size: 1.2rem;
  color: #111;
  text-decoration: none;
  letter-spacing: 0.15em;
  position: relative;
  padding-bottom: 3px;
}
.works-more a::after {
  content: '';
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 1px;
  background: #111;
  transform: scaleX(1);
  transform-origin: left;
  transition: transform 0.3s ease;
  animation: moreUnderline 3s ease-in-out infinite;
}
.works-more a:hover::after {
  transform: scaleX(1);
  animation: none;
}

@keyframes moreUnderline {
  0%   { transform: scaleX(1); }
  40%  { transform: scaleX(0); transform-origin: right; }
  60%  { transform: scaleX(0); transform-origin: left; }
  100% { transform: scaleX(1); transform-origin: left; }
}

@media (max-width: 768px) {
  .works-more a {
    font-size: 1rem;
  }
}

/* ===== WORKS MODAL ===== */
#works-modal {
  display: none;
  position: fixed;
  inset: 0;
  background: rgba(0, 0, 0, 0.7);
  z-index: 1000;
  align-items: center;
  justify-content: center;
}
#works-modal.open { display: flex; }

#works-modal-inner {
  background: #fff;
  padding: 40px 32px 32px;
  max-width: 560px;
  width: 90%;
  position: relative;
  box-sizing: border-box;
  display: flex;
  flex-direction: column;
  overflow: hidden;
}
#works-modal-close {
  position: absolute;
  top: 12px;
  right: 16px;
  background: none;
  border: none;
  font-size: 1.6rem;
  cursor: pointer;
  color: #333;
  line-height: 1;
}
#works-modal-title {
  height: 28px;
  width: auto;
  margin: 0 0 10px;
  flex-shrink: 0;
  align-self: flex-start;
}
#works-modal-images {
  flex: 1;
  min-height: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  overflow: hidden;
}
#works-modal-main {
  width: 100%;
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
}
#works-modal-main img {
  max-width: 100%;
  max-height: 100%;
  object-fit: contain;
  display: block;
}
#works-modal-dots {
  display: flex;
  justify-content: center;
  gap: 8px;
  margin-top: 8px;
  flex-shrink: 0;
}
.modal-dot {
  width: 10px;
  height: 10px;
  border-radius: 50%;
  background: #ccc;
  cursor: pointer;
  transition: background 0.3s;
}
.modal-dot.active { background: #333; }

#works-modal-thumbs {
  display: flex;
  gap: 6px;
  margin-top: 8px;
  flex-shrink: 0;
}
#works-modal-thumbs img {
  width: calc((100% - 12px) / 3);
  aspect-ratio: 3 / 2;
  object-fit: cover;
  border-radius: 4px;
  opacity: 0.7;
  cursor: pointer;
  transition: opacity 0.3s;
}
#works-modal-thumbs img:hover { opacity: 1; }

/* タブレット以下：+アイコン表示、VIEW非表示 */
@media (max-width: 1024px) {
  .works-card-view { display: none; }
  .works-card::after {
    content: '+';
    position: absolute;
    bottom: 8px;
    right: 10px;
    color: rgba(255,255,255,0.85);
    font-size: 1.3rem;
    font-weight: 300;
    line-height: 1;
    pointer-events: none;
  }
}

@media (min-width: 1025px) {
  #works-modal-inner {
    max-width: 760px;
  }
}

@media (max-width: 480px) {
  #works-modal-inner {
    padding: 40px 16px 16px;
  }
}

/* ===== WORKFLOW SECTION ===== */
.workflow-title {
  text-align: center;
  margin: 0 0 24px;
}

.workflow-title img {
  max-width: 300px;
}
	
.workflow-section {
  width: 100%;
  padding: 80px 40px 80px;
  box-sizing: border-box;
  position: relative;
}

.workflow-inner {
  max-width: 800px;
  margin: 0 auto;
}

.workflow-item {
  width: 100%;
  border-collapse: collapse;
  margin-bottom: 60px;
  table-layout: fixed;
}

.workflow-num {
  width: 80px;
  min-width: 80px;
  padding: 0;
  position: relative;
}

@media (max-width: 768px) {
  .workflow-num {
    width: 60px;
    min-width: 60px;
  }
  .workflow-num img {
    width: 55px;
  }
}
.workflow-num img {
  position: absolute;
  display: block;
  bottom: -25px;
  right: 0;
  width: 70px;
  height: auto;
}

.workflow-heading {
  font-size: 1.2rem;
  font-weight: 700;
  color: #222;
  padding: 0 0 7px 20px;
  border-bottom: 1px solid #ccc;
  vertical-align: bottom;
}

.workflow-body {
  font-size: 1rem;
  color: #555;
  line-height: 1.9;
  padding: 12px 0 0 20px;
  vertical-align: top;
}

.workflow-divider { display: none; }
	
.workflow-box {
  margin-top: 24px;
  border: 1px solid #ccc;
  border-radius: 4px;
  padding: 24px;
  background: #fff;
  display: flex;
  align-items: center;
  gap: 24px;
  box-sizing: border-box;
}

.workflow-box-left {
  flex-shrink: 0;
  display: flex;
  flex-direction: column;
  gap: 12px;
}

.workflow-box-logo {
  height: 60px;
  width: auto;
  display: block;
}

.workflow-box-label {
  font-size: 0.9rem;
  color: #555;
  margin: 0;
  line-height: 1.2;
}

.workflow-box-images {
  display: flex;
  gap: 12px;
  flex: 1;
}

.workflow-box-img {
  flex: 1;
  width: 0;
  aspect-ratio: 1 / 1;
  object-fit: cover;
  border-radius: 2px;
  display: block;
}

@media (max-width: 768px) {
  .workflow-box {
    flex-direction: column;
    align-items: flex-start;
  }
  .workflow-box-left {
    flex-direction: row;
    align-items: center;
    gap: 16px;
  }
	.workflow-box-label br {
		display: none;
	}
  .workflow-box-images {
    width: 100%;
  }
  .workflow-box-img {
    flex: 1;
    width: 0;
  }
}
	
@media (max-width: 480px) {
  .philosophy-heading img {
    max-width: 60%;
  }
  .philosophy-sub {
    font-size: 1rem;
    letter-spacing: 0.02em;
  }
  .philosophy-body {
    font-size: 0.875rem;
    letter-spacing: 0;
  }
  .philosophy-body br {
    display: none;
  }
  .works-title {
    text-align: center;
  }
  .works-title img {
    max-width: 60%;
  }
  .workflow-title {
    margin-bottom: 30px;
  }
  .workflow-title img {
    max-width: 60%;
  }
	.workflow-box-label br {
		display: inherit;
	}
  .workflow-item {
    display: block;
  }
  .workflow-item tr {
    display: block;
    width: 100%;
  }
  .workflow-item td {
    display: block;
    width: 100%;
  }
  /* 数字＋見出し行だけ横並び */
  .workflow-item tr:first-child {
    display: flex;
    align-items: flex-end;
    gap: 0px;
  }
  .workflow-item tr:first-child .workflow-num {
    width: 60px !important;
    min-width: 60px;
    height: 50px;
    position: relative;
    flex-shrink: 0;
  }
  .workflow-item tr:first-child .workflow-num img {
    position: absolute;
    display: block;
    bottom: -18px;
    left: 0;
    width: 55px;
  }
  .workflow-item tr:first-child .workflow-heading {
    width: auto !important;
    min-width: 0;
    flex: 1;
    padding-left: 13px;
    padding-top: 0;
    padding-bottom: 3px;
  }
  .workflow-body {
    padding-left: 0;
  }
  .workflow-box-left {
    flex-direction: column;
    align-items: flex-start;
  }
  .workflow-box-images {
    flex-direction: column;
  }
  .workflow-box-img {
    width: 100%;
    flex: none;
    aspect-ratio: 4 / 3;
  }
}
	
/* ===== FOOTER ===== */
.site-footer {
  width: 100%;
  padding: 60px 40px 0;
  box-sizing: border-box;
}

.footer-inner {
  display: inline-flex;
  gap: 40px;
  align-items: flex-start;
  margin: 0 auto 0px;
  display: flex;
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
  filter: grayscale(40%) saturate(80%);
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

@media (max-width: 480px) {
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
  <a class="header-logo" href="#"><img class="" src="logo_v2.png" alt="プラスワンのロゴ画像"></a>
  <nav>
    <a href="#works">WORKS</a>
    <a href="#workflow">WORKFLOW</a>
    <a href="mailto:info@dopo.jp" class="nav-contact">CONTACT</a>
    <div class="nav-icons">
      <!-- Instagram icon (SVG) -->
      <a href="https://www.instagram.com/designoffice_plusone/" aria-label="Instagram" target="_blank">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg>
      </a>
    </div>
  </nav>
</header>

<!-- ACCORDION SLIDER -->
<div class="accordion-wrapper" id="wrapper">
  <div class="panel"><div class="img-track"></div></div>
  <div class="panel"><div class="img-track"></div></div>
  <div class="panel"><div class="img-track"></div></div>
  <div class="panel"><div class="img-track"></div></div>
  <div class="panel"><div class="img-track"></div></div>
  <div class="panel"><div class="img-track"></div></div>
</div>

<!-- PHILOSOPHY SECTION -->
<section class="philosophy-section fade-in-section">
  <div class="philosophy-scroll"><span>Scroll</span></div>
  <div class="philosophy-inner">
    <h2 class="philosophy-heading"><img class="" src="img/h2/Philosophy_v2.png" alt="Philosophy"></h2>
    <h3 class="philosophy-sub">プラスワンは、クリニックを<br class="br-sp">トータルプロデュースする企業です。</h3>
    <p class="philosophy-body">
		プラスワンは医療業界で培った豊富な経験と知識と<br>
		5つのキーワードとオリジナルツールで、「愛されるクリニック」をご提案いたします。<br>
		医療業界を通じて社会貢献を行うプラスワンは、<br>
そうありつづけることをお約束いたします。
    </p>
  </div>
</section>

<!-- FURNITURE SECTION -->
<section class="furniture-section fade-in-section">
  <div class="furniture-title"><img src="img/h2/OriginalFurnitureFactory.png" alt="Original Furniture Factory"></div>
  <div class="furniture-inner">
    <div class="furniture-left">
      <img class="furniture-logo" src="img/shintec.png" alt="ShinTEC">
      <p class="furniture-body">医院にマッチする、素材、機能性、<br>デザイン性にこだわる、自社独自の工場でオリジナル家具制作</p>
    </div>
    <div class="furniture-images">
      <img class="furniture-img" src="img/original1.png" alt="オリジナル家具1">
      <img class="furniture-img" src="img/original2.png" alt="オリジナル家具2">
      <img class="furniture-img" src="img/original3.png" alt="オリジナル家具3">
    </div>
  </div>
</section>

<!-- NEW WORKS SECTION -->
<section class="works-section fade-in-section" id="works">
  <h2 class="works-title"><img class="" src="img/h2/NewWorks_v2.png" alt="Philosophy"></h2>
  <div class="works-slider-outer" id="worksSlider">
    <div class="works-slider-track" id="worksTrack">
      <!-- 12枚のカード（12→1の順） -->
      <div class="works-card" data-title="Dental" data-img1="img/works/12-1.jpg" data-img2="img/works/12-2.jpg" data-img3="img/works/12-3.jpg" data-img4="img/works/12-4.jpg">
        <img class="works-card-img" src="img/works/12-1.jpg" alt="">
        <div class="works-card-overlay"></div>
        <div class="works-card-view"><span>VIEW</span></div>
        <div class="works-card-info"><img class="works-card-title" src="img/label/dental.png" alt="Dental"></div>
      </div>
      <div class="works-card" data-title="Dental" data-img1="img/works/11-1.jpg" data-img2="img/works/11-2.jpg" data-img3="img/works/11-3.jpg" data-img4="img/works/11-4.jpg">
        <img class="works-card-img" src="img/works/11-1.jpg" alt="">
        <div class="works-card-overlay"></div>
        <div class="works-card-view"><span>VIEW</span></div>
        <div class="works-card-info"><img class="works-card-title" src="img/label/dental.png" alt="Dental"></div>
      </div>
      <div class="works-card" data-title="Dental" data-img1="img/works/10-1.jpg" data-img2="img/works/10-2.jpg" data-img3="img/works/10-3.jpg" data-img4="img/works/10-4.jpg">
        <img class="works-card-img" src="img/works/10-1.jpg" alt="">
        <div class="works-card-overlay"></div>
        <div class="works-card-view"><span>VIEW</span></div>
        <div class="works-card-info"><img class="works-card-title" src="img/label/dental.png" alt="Dental"></div>
      </div>
      <div class="works-card" data-title="Medical" data-img1="img/works/9-1.jpg" data-img2="img/works/9-2.jpg" data-img3="img/works/9-3.jpg" data-img4="img/works/9-4.jpg">
        <img class="works-card-img" src="img/works/9-1.jpg" alt="">
        <div class="works-card-overlay"></div>
        <div class="works-card-view"><span>VIEW</span></div>
        <div class="works-card-info"><img class="works-card-title" src="img/label/medical.png" alt="Medical"></div>
      </div>
      <div class="works-card" data-title="Dental" data-img1="img/works/8-1.jpg" data-img2="img/works/8-2.jpg" data-img3="img/works/8-3.jpg" data-img4="img/works/8-4.jpg">
        <img class="works-card-img" src="img/works/8-1.jpg" alt="">
        <div class="works-card-overlay"></div>
        <div class="works-card-view"><span>VIEW</span></div>
        <div class="works-card-info"><img class="works-card-title" src="img/label/dental.png" alt="Dental"></div>
      </div>
      <div class="works-card" data-title="Dental" data-img1="img/works/7-1.jpg" data-img2="img/works/7-2.jpg" data-img3="img/works/7-3.jpg" data-img4="img/works/7-4.jpg">
        <img class="works-card-img" src="img/works/7-1.jpg" alt="">
        <div class="works-card-overlay"></div>
        <div class="works-card-view"><span>VIEW</span></div>
        <div class="works-card-info"><img class="works-card-title" src="img/label/dental.png" alt="Dental"></div>
      </div>
      <div class="works-card" data-title="Dental" data-img1="img/works/6-1.jpg" data-img2="img/works/6-2.jpg" data-img3="img/works/6-3.jpg" data-img4="img/works/6-4.jpg">
        <img class="works-card-img" src="img/works/6-1.jpg" alt="">
        <div class="works-card-overlay"></div>
        <div class="works-card-view"><span>VIEW</span></div>
        <div class="works-card-info"><img class="works-card-title" src="img/label/dental.png" alt="Dental"></div>
      </div>
      <div class="works-card" data-title="Dental" data-img1="img/works/5-1.jpg" data-img2="img/works/5-2.jpg" data-img3="img/works/5-3.jpg" data-img4="img/works/5-4.jpg">
        <img class="works-card-img" src="img/works/5-1.jpg" alt="">
        <div class="works-card-overlay"></div>
        <div class="works-card-view"><span>VIEW</span></div>
        <div class="works-card-info"><img class="works-card-title" src="img/label/dental.png" alt="Dental"></div>
      </div>
      <div class="works-card" data-title="Dental" data-img1="img/works/4-1.jpg" data-img2="img/works/4-2.jpg" data-img3="img/works/4-3.jpg" data-img4="img/works/4-4.jpg">
        <img class="works-card-img" src="img/works/4-1.jpg" alt="">
        <div class="works-card-overlay"></div>
        <div class="works-card-view"><span>VIEW</span></div>
        <div class="works-card-info"><img class="works-card-title" src="img/label/dental.png" alt="Dental"></div>
      </div>
      <div class="works-card" data-title="Dental" data-img1="img/works/3-1.jpg" data-img2="img/works/3-2.jpg" data-img3="img/works/3-3.jpg" data-img4="img/works/3-4.jpg">
        <img class="works-card-img" src="img/works/3-1.jpg" alt="">
        <div class="works-card-overlay"></div>
        <div class="works-card-view"><span>VIEW</span></div>
        <div class="works-card-info"><img class="works-card-title" src="img/label/dental.png" alt="Dental"></div>
      </div>
      <div class="works-card" data-title="Dental" data-img1="img/works/2-1.jpg" data-img2="img/works/2-2.jpg" data-img3="img/works/2-3.jpg" data-img4="img/works/2-4.jpg">
        <img class="works-card-img" src="img/works/2-1.jpg" alt="">
        <div class="works-card-overlay"></div>
        <div class="works-card-view"><span>VIEW</span></div>
        <div class="works-card-info"><img class="works-card-title" src="img/label/dental.png" alt="Dental"></div>
      </div>
      <div class="works-card" data-title="Dental" data-img1="img/works/1-1.jpg" data-img2="img/works/1-2.jpg" data-img3="img/works/1-3.jpg" data-img4="img/works/1-4.jpg">
        <img class="works-card-img" src="img/works/1-1.jpg" alt="">
        <div class="works-card-overlay"></div>
        <div class="works-card-view"><span>VIEW</span></div>
        <div class="works-card-info"><img class="works-card-title" src="img/label/dental.png" alt="Dental"></div>
      </div>
    </div>
  </div>
  <div class="works-more"><a href="works.php">More</a></div>
</section>

<!-- WORKFLOW SECTION -->
<section class="workflow-section fade-in-section" id="workflow">
  <div class="workflow-inner">
    <h2 class="workflow-title"><img class="" src="img/h2/Workflow_v2.png" alt="Philosophy"></h2>
<table class="workflow-item">
  <tr>
    <td class="workflow-num"><img src="img/num-01.png" alt="01"></td>
    <td class="workflow-heading">ヒアリング・打ち合わせ</td>
  </tr>
  <tr>
    <td></td>
    <td class="workflow-body">お客様からお問い合わせをいただいたら、ヒアリングを行います。<br>イメージやご要望をお聞きします。</td>
  </tr>
</table>
    <table class="workflow-item">
      <tr>
        <td class="workflow-num"><img src="img/num-02.png" alt="02"></td>
        <td class="workflow-heading">プランニング</td>
      </tr>
      <tr>
        <td></td>
        <td class="workflow-body">ヒアリングの内容をもとに内装設計を行い、具体的な施工プランを立案します。設備の設置や動線の確保、回転率やデザイン性など、さまざまなポイントを考慮して設計致します。</td>
      </tr>
    </table>

    <table class="workflow-item">
      <tr>
        <td class="workflow-num"><img src="img/num-03.png" alt="03"></td>
        <td class="workflow-heading">プランの提案</td>
      </tr>
      <tr>
        <td></td>
        <td class="workflow-body">できあがったプランをお客様に提案し、さらに詳細を詰めていきます。<br>変更・修正のご要望があれば可能な限りプランに反映致します。</td>
      </tr>
    </table>

    <table class="workflow-item">
      <tr>
        <td class="workflow-num"><img src="img/num-04.png" alt="04"></td>
        <td class="workflow-heading">見積もり・契約</td>
      </tr>
      <tr>
        <td></td>
        <td class="workflow-body">
          打ち合わせを経て工事の内容が固まってきたら、見積もりを行います。多種多様な建材から最適、適正な金額を算出した上で、お客様に提示します。
        </td>
      </tr>
    </table>

    <table class="workflow-item">
      <tr>
        <td class="workflow-num"><img src="img/num-05.png" alt="05"></td>
        <td class="workflow-heading">着工・引き渡し</td>
      </tr>
      <tr>
        <td></td>
        <td class="workflow-body">事前に作成した工程表をもとに、スケジュールを守って工事を進めます。重要な工程では、お客様に立ち会っていただくこともあります。お客様からの確認や質問があれば、しっかりとお応えします。</td>
      </tr>
    </table>

    <table class="workflow-item">
      <tr>
        <td class="workflow-num"><img src="img/num-06.png" alt="06"></td>
        <td class="workflow-heading">アフターケア</td>
      </tr>
      <tr>
        <td></td>
        <td class="workflow-body">お客様との信頼関係を構築すると、末永くお付き合いいただくことができます。</td>
      </tr>
    </table>
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
        <a href="mailto:info@dopo.jp" class="footer-mail">E-Mail：info@dopo.jp</a>
<br>
        URL：www.dopo.jp
      </p>
    </div>
  </div>
  <div class="footer-nav-wrap">
    <nav class="footer-nav">
      <a href="#works">WORKS</a>
      <a href="#workflow">WORKFLOW</a>
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

<!-- WORKS MODAL -->
<div id="works-modal">
  <div id="works-modal-inner">
    <button id="works-modal-close">×</button>
    <img id="works-modal-title" src="" alt="">
    <div id="works-modal-images">
      <div id="works-modal-track">
        <div id="works-modal-main">
          <img id="works-modal-img1" src="" alt="">
        </div>
      </div>
    </div>
    <div id="works-modal-dots">
      <span class="modal-dot active" data-index="0"></span>
      <span class="modal-dot" data-index="1"></span>
      <span class="modal-dot" data-index="2"></span>
      <span class="modal-dot" data-index="3"></span>
    </div>
    <div id="works-modal-thumbs"></div>
  </div>
</div>

<script>
const IMAGE_QUEUE = [
  'kobe.webp',
  'himeji.webp',
  'osaka.webp',
  'kyoto.webp',
  'nara.webp',
  'okayama.webp',
];
const DURATION = 1.2;
const INTERVAL = 2500;
const EASE = 'power4.inOut';

const CITY_LABELS = ['img/kobe_v2.png', 'img/himeji_v2.png', 'img/osaka_v2.png', 'img/kyoto_v2.png', 'img/nara_v2.png', 'img/okayama_v2.png'];

const panels = Array.from(document.querySelectorAll('.panel'));

const state = panels.map((panel, i) => ({
  panel,
  track: panel.querySelector('.img-track'),
  queueIndex: i % IMAGE_QUEUE.length,
  index: i,
}));

// ラベル画像の寸法キャッシュ
const labelDims = {};
const MAX_LABEL_H = window.innerWidth <= 480 ? 120 : window.innerWidth <= 768 ? 180 : window.innerWidth <= 1150 ? 200 : 250;

function createLabel(imgIndex, panelIndex) {
  const label = document.createElement('img');
  label.className = 'panel-label';
  label.src = CITY_LABELS[imgIndex];
  label.alt = '';
  label.style.height = MAX_LABEL_H + 'px';
  label.style.width = 'auto';
  label.style.right = '16px';
  label.style.left = 'auto';
  return label;
}

function initPanel(s) {
  const panelW = s.panel.offsetWidth;
  const track = s.track;
  track.innerHTML = '';
  track.style.width = panelW + 'px';
  gsap.set(track, { x: 0 });
  const slide = document.createElement('div');
  slide.className = 'img-slide';
  slide.style.width = panelW + 'px';
  slide.style.backgroundImage = `url('${IMAGE_QUEUE[s.queueIndex]}')`;
  track.appendChild(slide);
}

let isAnimating = false;

// モバイル・タブレット用ラベルセット切り替え
let mobileSlideCount = 0;
let mobileLabelSet = 0;
const MOBILE_LABEL_SETS = [
  [0, 1, 2], // 神戸, 姫路, 大阪
  [3, 4, 1], // 京都, 奈良, 姫路
];

function updateMobileLabels() {
  if (window.innerWidth > 768) return;
  mobileLabelSet = (mobileLabelSet + 1) % MOBILE_LABEL_SETS.length;
  const set = MOBILE_LABEL_SETS[mobileLabelSet];
  for (let i = 0; i < 3; i++) {
    const label = state[i].panel.querySelector('.panel-label');
    if (!label) continue;
    const newSrc = CITY_LABELS[set[i]];
    // 左へスライドアウト
    label.style.transition = 'transform 0.35s ease';
    label.style.transform = 'translateX(-140%)';
    setTimeout(() => {
      label.src = newSrc;
      label.style.transition = 'none';
      label.style.transform = 'translateX(140%)';
      label.offsetWidth; // reflow
      label.style.transition = 'transform 0.35s ease';
      label.style.transform = 'translateX(0)';
    }, 350);
  }
}

function moveNext() {
  if (isAnimating) return;
  isAnimating = true;
  const tl = gsap.timeline({
    onComplete: () => {
      state.forEach(s => {
        s.queueIndex = (s.queueIndex + 1) % IMAGE_QUEUE.length;
        initPanel(s);
      });
      mobileSlideCount++;
      if (mobileSlideCount % 3 === 0) updateMobileLabels();
      isAnimating = false;
    }
  });
  state.forEach(s => {
    const panelW = s.panel.offsetWidth;
    const track = s.track;
    const nextSlide = document.createElement('div');
    nextSlide.className = 'img-slide';
    nextSlide.style.width = panelW + 'px';
    const nextIndex = (s.queueIndex + 1) % IMAGE_QUEUE.length;
    nextSlide.style.backgroundImage = `url('${IMAGE_QUEUE[nextIndex]}')`;
    track.appendChild(nextSlide);
    track.style.width = (panelW * 2) + 'px';
    tl.to(track, {
      x: -panelW,
      duration: DURATION,
      ease: EASE
    }, 0);
  });
}

// ラベル画像をプリロードしてから起動
let _loadedCount = 0;
CITY_LABELS.forEach(src => {
  const img = new Image();
  const done = () => {
    labelDims[src] = { w: img.naturalWidth || 60, h: img.naturalHeight || 200 };
    if (++_loadedCount === CITY_LABELS.length) {
      state.forEach(initPanel);
      state.forEach(s => {
        const label = createLabel(s.index, s.index);
        s.panel.appendChild(label);
      });
      setInterval(moveNext, INTERVAL);
    }
  };
  img.onload = done;
  img.onerror = done;
  img.src = src;
});


// ===== WORKS SLIDER =====
(function() {
  const outer = document.getElementById('worksSlider');
  const track = document.getElementById('worksTrack');
  const cards = Array.from(track.querySelectorAll('.works-card'));
  const total = cards.length;

  // カードを複製してループ用に追加
  cards.forEach(card => {
    const clone = card.cloneNode(true);
    track.appendChild(clone);
  });

  let currentIndex = 0;
  let dragStartX = 0;
  let dragDelta = 0;
  let dragging = false;
  let isAnimating = false;

  function getCols() {
    return window.innerWidth <= 768 ? 2 : 4;
  }

  function getCardWidth() {
    return track.querySelectorAll('.works-card')[0].offsetWidth + 24;
  }

  function goNext(animate = true) {
    if (isAnimating) return;
    isAnimating = true;
    currentIndex++;

    const offset = currentIndex * getCols() * getCardWidth();
    track.style.transition = animate ? 'transform 0.9s cubic-bezier(0.4, 0, 0.2, 1)' : 'none';
    track.style.transform = `translateX(${-offset}px)`;

    // transitionendが発火しない場合のフォールバック
    const fallback = setTimeout(() => {
      isAnimating = false;
    }, 1100);

    track.addEventListener('transitionend', function onEnd() {
      track.removeEventListener('transitionend', onEnd);
      clearTimeout(fallback);
      // 複製分に達したらリセット（瞬時・アニメなし）
      if (currentIndex >= total / getCols()) {
        currentIndex = 0;
        track.style.transition = 'none';
        track.style.transform = `translateX(0px)`;
      }
      isAnimating = false;
    });
  }

  // 5秒ごとに自動スライド
  let autoTimer = setInterval(goNext, 5000);

  // ドラッグで手動操作
  outer.addEventListener('mousedown', e => {
    dragging = true;
    dragStartX = e.pageX;
    dragDelta = 0;
  });
  window.addEventListener('mousemove', e => {
    if (!dragging) return;
    dragDelta = e.pageX - dragStartX;
  });
  window.addEventListener('mouseup', () => {
    if (!dragging) return;
    dragging = false;
    if (dragDelta < -50) {
      goNext();
      clearInterval(autoTimer);
      autoTimer = setInterval(goNext, 5000);
    }
  });

  outer.addEventListener('touchstart', e => {
    dragStartX = e.touches[0].pageX;
    dragDelta = 0;
  }, { passive: true });
  outer.addEventListener('touchmove', e => {
    dragDelta = e.touches[0].pageX - dragStartX;
  }, { passive: true });
  outer.addEventListener('touchend', () => {
    if (dragDelta < -50) {
      goNext();
      clearInterval(autoTimer);
      autoTimer = setInterval(goNext, 5000);
    }
  });

  window.addEventListener('resize', () => {
    currentIndex = 0;
    track.style.transition = 'none';
    track.style.transform = 'translateX(0px)';
  });
})();

// ===== WORKS MODAL =====
const modal = document.getElementById('works-modal');
const modalTitle = document.getElementById('works-modal-title');
const modalImg1 = document.getElementById('works-modal-img1');
const closeBtn = document.getElementById('works-modal-close');
const dots = document.querySelectorAll('.modal-dot');
const thumbsContainer = document.getElementById('works-modal-thumbs');

let currentSlide = 0;
let touchStartX = 0;
let touchEndX = 0;
let allSrcs = [];

function updateThumbs() {
  thumbsContainer.innerHTML = '';
  allSrcs.forEach((src, i) => {
    if (i === currentSlide) return;
    const img = document.createElement('img');
    img.src = src;
    img.alt = '';
    img.addEventListener('click', (e) => {
      e.stopPropagation();
      goToSlide(i);
    });
    thumbsContainer.appendChild(img);
  });
}

function goToSlide(index) {
  currentSlide = index;
  modalImg1.src = allSrcs[index];
  dots.forEach((d, i) => d.classList.toggle('active', i === index));
  updateThumbs();
}

function openModal(card) {
  const titleMap = { Dental: 'img/dental.png', Medical: 'img/medical.png' };
  modalTitle.src = titleMap[card.dataset.title] || '';
  modalTitle.alt = card.dataset.title || '';
  allSrcs = [card.dataset.img1, card.dataset.img2, card.dataset.img3, card.dataset.img4];
  modalImg1.src = allSrcs[0] || '';
  goToSlide(0);
  const innerEl = document.getElementById('works-modal-inner');
  const availH = window.innerWidth > 1024 ? window.innerHeight * 0.92 : window.innerHeight * 0.88;
  innerEl.style.maxHeight = availH + 'px';
  modal.classList.add('open');
}

function closeModal() {
  modal.classList.remove('open');
}

// オリジナルカードのみ（スライダー複製を除く）
document.getElementById('worksTrack').querySelectorAll(':scope > .works-card').forEach(card => {
  card.addEventListener('click', () => openModal(card));
  card.addEventListener('mouseenter', () => card.classList.add('is-hover'));
  card.addEventListener('mouseleave', () => card.classList.remove('is-hover'));
  card.addEventListener('touchstart', () => card.classList.add('is-pressed'), { passive: true });
  card.addEventListener('touchend', () => { setTimeout(() => card.classList.remove('is-pressed'), 150); }, { passive: true });
  card.addEventListener('touchcancel', () => card.classList.remove('is-pressed'), { passive: true });
});

closeBtn.addEventListener('click', closeModal);
modal.addEventListener('click', (e) => { if (e.target === modal) closeModal(); });
document.addEventListener('keydown', (e) => { if (e.key === 'Escape') closeModal(); });

dots.forEach(dot => {
  dot.addEventListener('click', () => goToSlide(parseInt(dot.dataset.index)));
});

const imagesContainer = document.getElementById('works-modal-images');
imagesContainer.addEventListener('touchstart', (e) => { touchStartX = e.changedTouches[0].clientX; });
imagesContainer.addEventListener('touchend', (e) => {
  touchEndX = e.changedTouches[0].clientX;
  const diff = touchStartX - touchEndX;
  if (diff > 30) {
    goToSlide(currentSlide < 3 ? currentSlide + 1 : 0);
  } else if (diff < -30) {
    goToSlide(currentSlide > 0 ? currentSlide - 1 : 3);
  } else {
    goToSlide(currentSlide < 3 ? currentSlide + 1 : 0);
  }
});

// ===== セクション フェードインアニメーション =====
const fadeObserver = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('is-visible');
      fadeObserver.unobserve(entry.target);
    }
  });
}, { threshold: 0.15 });

document.querySelectorAll('.fade-in-section').forEach(section => {
  fadeObserver.observe(section);
});
</script>
</body>
</html>
