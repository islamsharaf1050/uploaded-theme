/*
Theme Name: Noah Theme
Theme URI: https://github.com/islamsharaf1050/full-noah-figma-design-
Author: Copilot
Author URI: https://github.com
Description: Premium luxury jewelry storefront themed around the Noah Figma references and optimized for Elementor Pro and WordPress 7+.
Version: 3.0.0
Requires at least: 7.0
Tested up to: 6.7
Requires PHP: 7.4
Text Domain: noah-theme
*/

:root {
  --noah-primary: #caa16d;
  --noah-primary-dark: #a37b3a;
  --noah-ink: #1d1d1d;
  --noah-soft: #5e5e5e;
  --noah-bg: #f6f1ea;
  --noah-card: #ffffff;
  --noah-surface: #f0e9e1;
  --noah-border: rgba(29, 29, 29, 0.08);
  --noah-shadow: 0 26px 55px rgba(20, 20, 20, 0.08);
}

html {
  scroll-behavior: smooth;
}

body {
  margin: 0;
  color: var(--noah-ink);
  background: var(--noah-bg);
  font-family: "Segoe UI", sans-serif;
  line-height: 1.6;
  -webkit-font-smoothing: antialiased;
}

a {
  color: inherit;
  text-decoration: none;
}

img {
  display: block;
  max-width: 100%;
  height: auto;
}

button,
input,
textarea,
select {
  font: inherit;
}

* {
  box-sizing: border-box;
}

.container {
  width: min(1200px, calc(100% - 32px));
  margin: 0 auto;
}

.site-header {
  position: sticky;
  top: 0;
  z-index: 999;
  background: rgba(246, 241, 234, 0.94);
  backdrop-filter: blur(14px);
  border-bottom: 1px solid var(--noah-border);
}

.site-header .container {
  display: flex;
  align-items: center;
  justify-content: space-between;
  min-height: 82px;
  gap: 20px;
}

.brand {
  display: flex;
  align-items: center;
  gap: 12px;
  font-size: 1.55rem;
  font-weight: 700;
  letter-spacing: 0.18em;
  text-transform: uppercase;
}

.brand-mark {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  width: 42px;
  height: 42px;
  border-radius: 50%;
  background: linear-gradient(135deg, var(--noah-primary), #f3ddaf);
  color: var(--noah-ink);
  font-size: 1.1rem;
  box-shadow: var(--noah-shadow);
}

.site-nav {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 22px;
  font-size: 0.78rem;
  letter-spacing: 0.12em;
  text-transform: uppercase;
}

.site-nav ul {
  display: flex;
  align-items: center;
  gap: 24px;
  list-style: none;
  margin: 0;
  padding: 0;
}

.site-nav a {
  position: relative;
  padding-bottom: 4px;
}

.site-nav a::after {
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  width: 100%;
  height: 1px;
  background: var(--noah-primary);
  transform: scaleX(0);
  transform-origin: left;
  transition: transform 0.25s ease;
}

.site-nav a:hover::after,
.site-nav a:focus::after {
  transform: scaleX(1);
}

.header-tools {
  display: flex;
  align-items: center;
  gap: 12px;
  font-size: 0.72rem;
  text-transform: uppercase;
  letter-spacing: 0.1em;
}

.icon-button {
  padding: 10px 18px;
  border: 1px solid var(--noah-border);
  border-radius: 999px;
  background: rgba(255, 255, 255, 0.7);
}

.hero {
  padding: 84px 0 52px;
  background: linear-gradient(90deg, rgba(17, 17, 17, 0.62), rgba(17, 17, 17, 0.16)), url('https://images.unsplash.com/photo-1617038220319-276d3cfab638?auto=format&fit=crop&w=1600&q=80') center/cover no-repeat;
  color: white;
}

.hero .container {
  display: grid;
  grid-template-columns: 1.08fr 0.92fr;
  align-items: center;
  gap: 42px;
}

.eyebrow {
  display: inline-block;
  margin-bottom: 16px;
  padding: 8px 14px;
  border-radius: 999px;
  border: 1px solid rgba(255, 255, 255, 0.22);
  background: rgba(255, 255, 255, 0.08);
  font-size: 0.72rem;
  letter-spacing: 0.16em;
  text-transform: uppercase;
}

.hero-copy {
  max-width: 620px;
}

.hero h1 {
  margin: 0 0 18px;
  font-size: clamp(2.8rem, 5vw, 5.2rem);
  line-height: 0.96;
  letter-spacing: -0.06em;
}

.hero p {
  margin: 0 0 28px;
  color: rgba(255, 255, 255, 0.9);
  font-size: 1.04rem;
}

.hero-actions {
  display: flex;
  gap: 16px;
  align-items: center;
  flex-wrap: wrap;
}

.btn {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  min-height: 54px;
  padding: 0 28px;
  border-radius: 999px;
  border: 1px solid transparent;
  font-size: 0.78rem;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  font-weight: 700;
  transition: transform 0.2s ease, box-shadow 0.2s ease;
}

.btn:hover {
  transform: translateY(-2px);
}

.btn-primary {
  background: var(--noah-primary);
  color: #17130d;
  box-shadow: 0 18px 28px rgba(202, 161, 109, 0.35);
}

.btn-secondary {
  border-color: rgba(255, 255, 255, 0.28);
  background: transparent;
  color: white;
}

.hero-card {
  background: rgba(255, 255, 255, 0.08);
  border: 1px solid rgba(255, 255, 255, 0.16);
  border-radius: 28px;
  padding: 18px;
  box-shadow: var(--noah-shadow);
}

.hero-card img {
  border-radius: 22px;
  min-height: 520px;
  object-fit: cover;
}

.section {
  padding: 90px 0;
}

.section-head {
  text-align: center;
  margin-bottom: 42px;
}

.section-head h2 {
  margin: 0 0 12px;
  font-size: clamp(2rem, 3vw, 3rem);
  letter-spacing: -0.04em;
}

.section-head p {
  margin: 0 auto;
  max-width: 680px;
  color: var(--noah-soft);
}

.trust-bar {
  display: grid;
  grid-template-columns: repeat(4, minmax(0, 1fr));
  gap: 16px;
}

.trust-item,
.product-card,
.testimonial,
.metrics div {
  background: var(--noah-card);
  border: 1px solid var(--noah-border);
  border-radius: 22px;
  box-shadow: 0 18px 30px rgba(20, 20, 20, 0.03);
}

.trust-item {
  padding: 26px 18px;
  text-align: center;
}

.trust-item strong {
  display: block;
  margin-bottom: 8px;
  font-size: 2rem;
}

.category-grid {
  display: grid;
  grid-template-columns: repeat(3, minmax(0, 1fr));
  gap: 26px;
}

.category-card {
  position: relative;
  min-height: 340px;
  overflow: hidden;
  border-radius: 24px;
  background-size: cover;
  background-position: center;
  box-shadow: var(--noah-shadow);
}

.category-card::before {
  content: "";
  position: absolute;
  inset: 0;
  background: linear-gradient(180deg, rgba(0,0,0,0.08), rgba(0,0,0,0.68));
}

.category-card .content {
  position: absolute;
  left: 24px;
  right: 24px;
  bottom: 20px;
  z-index: 1;
  color: white;
}

.category-card h3 {
  margin: 0;
  font-size: 1.7rem;
}

.category-card span {
  display: inline-block;
  margin-top: 10px;
  letter-spacing: 0.14em;
  text-transform: uppercase;
  font-size: 0.75rem;
}

.featured-layout {
  display: grid;
  grid-template-columns: 1.08fr 0.92fr;
  gap: 34px;
  align-items: center;
}

.featured-copy h2 {
  margin-top: 0;
  font-size: clamp(2.2rem, 4vw, 3.6rem);
  letter-spacing: -0.05em;
}

.featured-list {
  list-style: none;
  padding: 0;
  margin: 28px 0 0;
  display: grid;
  gap: 16px;
}

.featured-list li {
  display: flex;
  gap: 12px;
  color: var(--noah-soft);
}

.featured-list li::before {
  content: "✓";
  display: inline-flex;
  align-items: center;
  justify-content: center;
  width: 24px;
  height: 24px;
  border-radius: 50%;
  background: rgba(202, 161, 109, 0.12);
  color: var(--noah-primary);
  font-weight: 700;
}

.featured-visual {
  position: relative;
  min-height: 520px;
  overflow: hidden;
  border-radius: 32px;
  background: url('https://images.unsplash.com/photo-1512436991641-6745cdb1723f?auto=format&fit=crop&w=900&q=80') center/cover no-repeat;
  box-shadow: var(--noah-shadow);
}

.featured-badge {
  position: absolute;
  right: 18px;
  bottom: 18px;
  padding: 18px 22px;
  border-radius: 18px;
  background: rgba(255,255,255,0.9);
  box-shadow: var(--noah-shadow);
}

.product-grid {
  display: grid;
  grid-template-columns: repeat(4, minmax(0, 1fr));
  gap: 24px;
}

.product-card {
  overflow: hidden;
}

.product-card img {
  width: 100%;
  height: 310px;
  object-fit: cover;
}

.product-meta {
  padding: 18px 18px 22px;
}

.product-meta .tag {
  display: inline-block;
  margin-bottom: 10px;
  color: var(--noah-primary);
  font-size: 0.7rem;
  letter-spacing: 0.14em;
  text-transform: uppercase;
}

.product-meta h3 {
  margin: 0 0 8px;
  font-size: 1.12rem;
}

.product-meta .price-row {
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin-top: 12px;
}

.price-row strong {
  font-size: 1.25rem;
}

.rating {
  color: var(--noah-primary);
  letter-spacing: 0.12em;
}

.story-block {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 32px;
  align-items: center;
}

.story-block img {
  border-radius: 28px;
  min-height: 430px;
  object-fit: cover;
  box-shadow: var(--noah-shadow);
}

.story-copy h2 {
  margin-top: 0;
  font-size: clamp(2rem, 3vw, 3rem);
  letter-spacing: -0.04em;
}

.story-copy p {
  color: var(--noah-soft);
}

.metrics {
  display: grid;
  grid-template-columns: repeat(3, minmax(0, 1fr));
  gap: 18px;
  margin-top: 32px;
}

.metrics div {
  padding: 22px;
}

.metrics strong {
  display: block;
  margin-bottom: 6px;
  font-size: 2rem;
}

.testimonials {
  display: grid;
  grid-template-columns: repeat(3, minmax(0, 1fr));
  gap: 24px;
}

.testimonial {
  padding: 28px 24px;
}

.testimonial p {
  color: var(--noah-soft);
}

.testimonial strong {
  display: block;
  margin-top: 16px;
}

.cta-wrap {
  padding: 56px 38px;
  border-radius: 32px;
  text-align: center;
  background: linear-gradient(135deg, #171717, #251d17);
  color: white;
  box-shadow: var(--noah-shadow);
}

.cta-wrap h2 {
  margin: 0 0 16px;
  font-size: clamp(2rem, 3vw, 3rem);
}

.cta-wrap p {
  margin: 0 auto 28px;
  max-width: 650px;
  color: rgba(255,255,255,0.75);
}

.footer {
  padding: 38px 0 52px;
  background: #121212;
  color: rgba(255,255,255,0.72);
}

.footer-grid {
  display: grid;
  grid-template-columns: 1.2fr 0.8fr 0.8fr 1fr;
  gap: 32px;
}

.footer h4 {
  color: white;
  margin: 0 0 14px;
  font-size: 0.9rem;
  letter-spacing: 0.14em;
  text-transform: uppercase;
}

.footer ul {
  list-style: none;
  margin: 0;
  padding: 0;
  display: grid;
  gap: 8px;
}

.footer-bottom {
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 12px;
  margin-top: 30px;
  padding-top: 22px;
  border-top: 1px solid rgba(255,255,255,0.12);
  font-size: 0.82rem;
}

.entry-content,
.page-content,
.post-content {
  max-width: 1100px;
  margin: 0 auto;
  padding: 60px 0;
}

.page-header {
  padding: 80px 0 30px;
  text-align: center;
}

.page-header h1 {
  margin: 0;
  font-size: clamp(2.2rem, 4vw, 3.8rem);
  letter-spacing: -0.05em;
}

article {
  padding-bottom: 40px;
}

article h2,
article h3 {
  letter-spacing: -0.04em;
}

article p,
article li {
  color: var(--noah-soft);
}

@media (max-width: 980px) {
  .site-nav {
    display: none;
  }

  .hero .container,
  .featured-layout,
  .story-block,
  .footer-grid {
    grid-template-columns: 1fr;
  }

  .product-grid,
  .category-grid,
  .trust-bar,
  .metrics,
  .testimonials {
    grid-template-columns: repeat(2, minmax(0, 1fr));
  }
}

@media (max-width: 600px) {
  .product-grid,
  .category-grid,
  .trust-bar,
  .metrics,
  .testimonials {
    grid-template-columns: 1fr;
  }

  .site-header .container {
    flex-wrap: wrap;
    padding: 18px 0;
  }

  .brand {
    width: 100%;
    justify-content: center;
  }

  .header-tools {
    width: 100%;
    justify-content: center;
  }

  .hero {
    padding-top: 40px;
  }
}

@import url('https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500;600;700&display=swap');

.hero h1,
.section-head h2,
.story-copy h2,
.featured-copy h2,
.cta-wrap h2,
.page-header h1 {
  font-family: "Cormorant Garamond", serif;
}
