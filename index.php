<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Axiom Metrics - Advanced Quantitative Analytics</title>
  <link rel="icon" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'%3E%3Cpath fill='%23FF5E00' d='M2.75 3.333c-.414-.414-1.086-.414-1.5 0s-.414 1.086 0 1.5L8.5 12l-7.25 7.167c-.414.414-.414 1.086 0 1.5s1.086.414 1.5 0L10 12l-7.25-8.667zM12 20h10v2H12z'/%3E%3C/svg%3E" sizes="any" type="image/svg+xml">
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  
  <style>
    /* CSS Variables */
    :root {
      --primary: hsl(25 81% 49%); /* #FF5E00 */
      --primaryLight: hsl(24 70% 69%); /* #FF9A52 */
      --primaryDark: hsl(25 81% 34%); /* #B24200 */
      --secondary: hsl(54 61% 49%); /* #D8C333 */
      --accent: hsl(205 80% 54%); /* #3D9FED */
      --backgroundDusk: rgba(43, 31, 24, 0.9);
      --surfaceCards: hsl(0 0% 100%); /* #FFFFFF */
      --textDark: hsl(25 15% 15%); /* #2B2420 */
      --textLight: hsl(0 0% 100%); /* #FFFFFF */

      --border-radius-global: 12px;
      --section-spacing-y: 6rem;
      --hover-translateY-large: translateY(-12px);
    }

    /* Base styles, mobile-first */
    body {
      font-family: 'Lora', serif;
      color: var(--textDark);
      line-height: 1.6;
      background-color: var(--surfaceCards);
    }

    h1, h2, h3, h4, h5, h6 {
      font-family: 'Raleway', sans-serif;
      font-weight: 700;
      color: var(--textDark);
    }

    .spacious {
      padding-top: var(--section-spacing-y);
      padding-bottom: var(--section-spacing-y);
    }

    /* Global border-radius */
    .border-radius-global {
      border-radius: var(--border-radius-global);
    }

    /* Shadow subtle effect for cards */
    .shadow-subtle {
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
      border: none;
    }

    /* Hover effect: translateY-large */
    .hover-lift {
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .hover-lift:hover {
      transform: var(--hover-translateY-large);
      box-shadow: 0 8px 16px rgba(0,0,0,0.2);
    }

    /* Icon containers */
    .icon-square {
      border-radius: 0; /* Square corners */
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 3rem; /* Example size */
      height: 3rem; /* Example size */
      background-color: var(--accent); /* Example color */
      color: var(--textLight);
    }

    /* Navigation Bar */
    .navbar {
      transition: background-color 0.3s ease, box-shadow 0.3s ease;
      background-color: transparent;
    }
    .navbar.scrolled {
      background-color: var(--surfaceCards) !important;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }
    .navbar-brand, .nav-link {
        color: var(--textLight) !important; /* Initial transparent state */
    }
    .navbar.scrolled .navbar-brand, .navbar.scrolled .nav-link {
        color: var(--textDark) !important;
    }
    .navbar-toggler-icon {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255, 255, 255, 1)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E") !important;
    }
    .navbar.scrolled .navbar-toggler-icon {
      background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(43, 31, 24, 1)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E") !important;
    }
    .navbar-toggler {
        border-color: rgba(255, 255, 255, 0.5) !important;
    }
    .navbar.scrolled .navbar-toggler {
      border-color: rgba(43, 31, 24, 0.5) !important;
    }

    /* Buttons */
    .btn-solid-accent {
      background-color: var(--accent);
      color: var(--textLight);
      border: none;
      padding: 0.75rem 1.75rem;
      border-radius: var(--border-radius-global);
      transition: background-color 0.3s ease, transform 0.3s ease;
    }
    .btn-solid-accent:hover {
      background-color: hsl(205 80% 44%); /* Slightly darker accent */
      color: var(--textLight);
      transform: translateY(-2px);
    }

    /* Hero Section */
    .hero-overlay {
      position: relative;
      background-size: cover;
      background-position: center;
      color: var(--textLight);
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      min-height: 100vh;
    }
    .hero-overlay::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: linear-gradient(135deg, rgba(200, 75, 10, 0.8), rgba(15, 65, 120, 0.8));
    }
    .hero-content {
      position: relative;
      z-index: 10;
      padding: 1.5rem;
    }
    .hero-content h1 {
      font-size: clamp(2.5rem, 5vw, 4.5rem);
      margin-bottom: 1rem;
      color: var(--textLight);
    }
    .hero-content p {
      font-size: clamp(1rem, 2vw, 1.25rem);
      max-width: 800px;
      margin: 0 auto 2rem auto;
      color: var(--textLight);
    }

    /* Bento Grid */
    .bento-grid {
      display: grid;
      gap: 1.5rem;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); /* Mobile first, single column potentially */
      grid-auto-rows: minmax(200px, auto); /* Default row height */
    }

    .bento-item {
      background-color: var(--surfaceCards);
      padding: 1.5rem;
      border-radius: var(--border-radius-global);
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      overflow: hidden;
    }
    .bento-item img {
      width: 100%;
      height: auto;
      max-height: 200px;
      object-fit: cover;
      border-radius: var(--border-radius-global);
      margin-bottom: 1rem;
    }
    .bento-item.large img {
      max-height: 300px;
    }

    /* Staggered Bento grid for wider screens */
    @media (min-width: 768px) {
      .bento-grid-staggered {
        grid-template-columns: repeat(2, 1fr);
        grid-auto-rows: auto;
      }
      .bento-grid-staggered .bento-item.large:nth-child(1) {
        grid-row: span 1;
        grid-column: span 1;
      }
      .bento-grid-staggered .bento-item.large:nth-child(2) {
        grid-row: span 1;
        grid-column: span 1;
      }
      .bento-grid-staggered .bento-item.small:nth-child(3) {
        grid-row: span 1;
        grid-column: span 1;
      }
      .bento-grid-staggered .bento-item.small:nth-child(4) {
        grid-row: span 1;
        grid-column: span 1;
      }
      .bento-grid-staggered .bento-item.small:nth-child(5) {
        grid-row: span 1;
        grid-column: span 2; /* Smallest item spanning two columns */
      }
    }
    @media (min-width: 992px) {
      .bento-grid-staggered {
        grid-template-columns: repeat(2, 1fr);
      }
      .bento-grid-staggered .bento-item.large {
        grid-column: span 1;
        min-height: 400px; /* Ensure larger items have a defined height */
      }
      .bento-grid-staggered .bento-item.small {
        min-height: 200px; /* Ensure smaller items have a defined height */
      }
      .bento-grid-staggered .bento-item:nth-child(1) { /* Algo Trading */
        grid-column: 1 / 2;
        grid-row: 1 / 2;
      }
      .bento-grid-staggered .bento-item:nth-child(2) { /* Predictive Analytics */
        grid-column: 2 / 3;
        grid-row: 1 / 2;
      }
      .bento-grid-staggered .bento-item:nth-child(3) { /* Data Modeling */
        grid-column: 1 / 2;
        grid-row: 2 / 3;
      }
      .bento-grid-staggered .bento-item:nth-child(4) { /* Risk Assessment */
        grid-column: 2 / 3;
        grid-row: 2 / 3;
      }
      .bento-grid-staggered .bento-item:nth-child(5) { /* Statistical Analysis */
        grid-column: 1 / 3; /* Spans full width */
        grid-row: 3 / 4;
      }
    }


    /* Methodology Section */
    .methodology-feature img {
      border-radius: var(--border-radius-global);
      object-fit: contain;
      width: 100%;
      height: auto;
      max-height: 250px;
      margin-bottom: 1.5rem;
    }
    .methodology-feature h3 {
      color: var(--primaryDark);
      margin-top: 1rem;
    }

    /* Testimonials */
    .testimonial-card {
      background-color: var(--primary);
      color: var(--textLight);
      padding: 3rem 1.5rem;
      border-radius: var(--border-radius-global);
      text-align: center;
    }
    .testimonial-card img {
      width: 128px;
      height: 128px;
      object-fit: cover;
      border-radius: 50%;
      border: 4px solid var(--primaryLight);
      margin: 0 auto 1.5rem auto;
      display: block;
    }
    .testimonial-card blockquote {
      font-size: clamp(1.25rem, 2.5vw, 1.75rem);
      font-style: italic;
      margin-bottom: 1.5rem;
      color: var(--textLight);
    }
    .testimonial-card footer {
      font-size: 1rem;
      color: var(--primaryLight);
    }
    .testimonial-card footer strong {
      color: var(--textLight);
    }

    /* Contact Section */
    .bg-light {
      background-color: hsl(0 0% 95%) !important; /* Slightly off-white for contrast */
    }
    .contact-details {
        background-color: var(--surfaceCards);
        border-radius: var(--border-radius-global);
        padding: 2rem;
        box-shadow: 0 4px 8px rgba(0,0,0,0.05); /* Subtle shadow */
    }
    .contact-details h3 {
        color: var(--primary);
    }
    .contact-details p {
        margin-bottom: 0.5rem;
    }
    .contact-map {
        border-radius: var(--border-radius-global);
        overflow: hidden;
        margin-top: 2rem; /* Spacing for small screens */
    }
    .contact-map iframe {
        width: 100%;
        height: 350px;
        border: 0;
    }

    @media (min-width: 992px) {
        .contact-map {
            margin-top: 0; /* Remove top margin for larger screens */
        }
    }


    /* Footer */
    footer {
        background-color: var(--backgroundDusk) !important;
        color: var(--textLight) !important;
    }
    footer a {
        color: var(--primaryLight) !important;
        text-decoration: none;
    }
    footer a:hover {
        text-decoration: underline;
    }

    /* Utility classes for text colors */
    .text-primary { color: var(--primary) !important; }
    .text-light { color: var(--textLight) !important; }
    .bg-primary { background-color: var(--primary) !important; }
    .bg-dark { background-color: var(--backgroundDusk) !important; } /* Reusing backgroundDusk for dark footer */

    .transition-all {
      transition: all 0.3s ease-in-out;
    }
  </style>
</head>
<body>
  <header>
    <nav id="mainNav" class="navbar navbar-expand-lg fixed-top transition-all">
      <div class="container">
        <a class="navbar-brand text-light" href="#">
          <svg style="vertical-align: middle; margin-right: 8px;" width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M12 2L2 7V17L12 22L22 17V7L12 2Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M7 17L12 14L17 17" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M12 14V22" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M22 7L12 12L2 7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M12 2V12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M7 7L12 10" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M17 7L12 10" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
          Axiom Metrics
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="#services">Services 🚀</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#approach">Our Magic 🧮</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#testimonials">Praise ✨</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Ping Us 📞</a>
            </li>
            <li class="nav-item ms-lg-3">
              <a class="btn btn-solid-accent" href="#contact">Get Analytics</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="hero-overlay text-center" style="background-image: url('images/hero-data-viz-overlay-1280x768.jpeg');">
      <div class="container hero-content">
        <h1 class="display-3 fw-bold">Let's Make Your Data Dance! 🕺📈</h1>
        <p class="lead mb-4">Welcome to Axiom Metrics. We turn boring numbers into wildly profitable algorithmic strategies, beautiful predictive models, and bulletproof risk assessments.</p>
        <a class="btn btn-solid-accent btn-lg" href="#services">Explore Services 🎯</a>
      </div>
    </div>
  </header>
<main>
    <section id="services" class="spacious bg-light">
      <div class="container">
        <div class="text-center mb-5">
          <h2 class="display-5 fw-bold mb-3">Our Math Magic 🪄</h2>
          <p class="lead">Discover the delightful ways Axiom Metrics crunches the numbers for maximum ROI.</p>
        </div>
        <div class="bento-grid bento-grid-staggered">
          <div class="bento-item large shadow-subtle hover-lift border-radius-global">
            <img src="images/algo-trading-concept-640x384.jpeg" alt="Abstract representation of algorithmic trading with dynamic lines and numbers" class="mb-3 border-radius-global">
            <h3 class="fw-bold fs-4 text-primary">Algorithmic Trading 🤖</h3>
            <p>Custom trading bots that don't sleep, powered by high-frequency statistical arbitrage. It's like having a hyper-active genius trading for you, tirelessly optimizing every micro-opportunity the market presents.</p>
          </div>
          <div class="bento-item large shadow-subtle hover-lift border-radius-global">
            <img src="images/predictive-crystal-ball-640x384.jpeg" alt="Stylized crystal ball showing future market trends" class="mb-3 border-radius-global">
            <h3 class="fw-bold fs-4 text-primary">Predictive Analytics 🔮</h3>
            <p>Sneak a peek into the future! We map historical data to forward-looking trends so you can stay five steps ahead of the market, anticipating shifts before they become mainstream knowledge.</p>
          </div>
          <div class="bento-item small shadow-subtle hover-lift border-radius-global d-flex align-items-start">
            <div class="icon-square me-3 flex-shrink-0">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M22 17V3H2V17H12L17 22L22 17ZM13 14H11V8H13V14Z" fill="currentColor"/>
                </svg>
            </div>
            <div>
                <h3 class="fw-bold fs-5 text-primary">Data Modeling 🏗️</h3>
                <p class="mb-0">Structuring messy datasets into clean, playful, and interactive pipelines that speak volumes.</p>
            </div>
          </div>
          <div class="bento-item small shadow-subtle hover-lift border-radius-global d-flex align-items-start">
            <div class="icon-square me-3 flex-shrink-0">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 1L3 5V11C3 16.5 6.5 21.3 12 23C17.5 21.3 21 16.5 21 11V5L12 1ZM12 12.3L6.3 9L12 5.7L17.7 9L12 12.3Z" fill="currentColor"/>
                </svg>
            </div>
            <div>
                <h3 class="fw-bold fs-5 text-primary">Risk Assessment 🛡️</h3>
                <p class="mb-0">A safety net built on heavy math. We stress-test portfolios against the wildest market scenarios imaginable.</p>
            </div>
          </div>
          <div class="bento-item small shadow-subtle hover-lift border-radius-global d-flex align-items-start">
            <div class="icon-square me-3 flex-shrink-0">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M16 11V3H8V11H16ZM12 12C12.5523 12 13 12.4477 13 13V21C13 21.5523 12.5523 22 12 22C11.4477 22 11 21.5523 11 21V13C11 12.4477 11.4477 12 12 12ZM4 11V3H6V11H4ZM18 11V3H20V11H18Z" fill="currentColor"/>
                </svg>
            </div>
            <div>
                <h3 class="fw-bold fs-5 text-primary">Statistical Analysis 📊</h3>
                <p class="mb-0">Extracting the signal from the noise with deep, rigorous statistical breakdowns, turning raw data into actionable insights.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="approach" class="spacious">
      <div class="container">
        <div class="text-center mb-5">
          <h2 class="display-5 fw-bold mb-3">How We Crunch the Numbers 🧩</h2>
          <p class="lead">The secret algorithm behind Axiom Metrics's success isn't just math—it's imagination!</p>
        </div>
        <div class="row g-4 justify-content-center">
          <div class="col-md-6 col-lg-4 d-flex">
            <div class="methodology-feature text-center shadow-subtle hover-lift border-radius-global p-4">
              <img src="images/data-sweeping-cute-illustration-384x384.jpeg" alt="Illustration of a cute broom sweeping data into a pile" class="mx-auto mb-3">
              <h3 class="fw-bold">1. Data Gathering 🧹</h3>
              <p>First, we sweep up all your raw, messy data. We have automated pipelines that vacuum up market ticks, alternative datasets, and historical logs, ensuring no valuable insight gets left behind.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-flex">
            <div class="methodology-feature text-center shadow-subtle hover-lift border-radius-global p-4">
              <img src="images/rollercoaster-chart-384x384.jpeg" alt="Chart symbolizing a rollercoaster ride for data testing" class="mx-auto mb-3">
              <h3 class="fw-bold">2. The Playground Testing 🎢</h3>
              <p>Using our proprietary backtesting engine, we throw your strategies onto a metaphorical rollercoaster to see where they break, bend, or fly. We rigorously simulate market conditions to prove robustness.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-flex">
            <div class="methodology-feature text-center shadow-subtle hover-lift border-radius-global p-4">
              <img src="images/rocket-launch-metrics-384x384.jpeg" alt="Rocket launching with data metrics flowing from it" class="mx-auto mb-3">
              <h3 class="fw-bold">3. Live Deployment 🚀</h3>
              <p>Once safe, we blast off! Integrating directly with execution APIs to unleash our quantitative models in the real world, constantly monitoring and optimizing for peak performance and stability.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="testimonials" class="spacious bg-primary text-light">
      <div class="container">
        <div class="testimonial-card">
          <img src="images/happy-client-jane-256x256.jpeg" alt="Portrait illustration of Jane Doe, Chief Investment Officer" class="img-fluid">
          <blockquote class="mb-4">
            “Axiom Metrics completely transformed how we view predictive analytics. It used to be a dull chore; now it's our favorite competitive advantage! Their algorithms run like clockwork, giving us a literal crystal ball into market shifts.”
          </blockquote>
          <footer>
            <strong class="d-block">Aisha Khan</strong>
            <span class="d-block">Chief Investment Officer at Alpha Hedge Collective</span>
          </footer>
        </div>
        <div class="row pt-5 justify-content-center g-4">
          <div class="col-md-6 col-lg-4 d-flex">
            <div class="card shadow-subtle hover-lift border-radius-global bg-light text-dark p-4">
              <p class="fst-italic mb-3">"Their risk assessment models are simply unparalleled. We sleep sounder knowing our portfolio is stress-tested against every imaginable volatility."</p>
              <footer class="blockquote-footer text-end mt-auto">
                <strong class="d-block text-primary">Dr. Kai Chen</strong>
                <span class="d-block text-secondary">Head of Quant Research, Zenith Capital</span>
              </footer>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-flex">
            <div class="card shadow-subtle hover-lift border-radius-global bg-light text-dark p-4">
              <p class="fst-italic mb-3">"The data modeling expertise at Axiom Metrics is stellar. They took our chaotic datasets and built intuitive, robust pipelines that have revolutionized our workflows."</p>
              <footer class="blockquote-footer text-end mt-auto">
                <strong class="d-block text-primary">Isabella Rossi</strong>
                <span class="d-block text-secondary">Senior Data Strategist, Nexus Investments</span>
              </footer>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-flex">
            <div class="card shadow-subtle hover-lift border-radius-global bg-light text-dark p-4">
              <p class="fst-italic mb-3">"Algorithmic trading with Axiom Metrics has yielded consistent, superior returns. Their innovative approach to statistical arbitrage is truly a game-changer."</p>
              <footer class="blockquote-footer text-end mt-auto">
                <strong class="d-block text-primary">Hiroshi Tanaka</strong>
                <span class="d-block text-secondary">Fund Manager, Sakura Capital Group</span>
              </footer>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="contact" class="spacious bg-light">
      <div class="container">
        <div class="text-center mb-5">
          <h2 class="display-5 fw-bold mb-3">Say Hello! 👋</h2>
          <p class="lead">Ready to turbo-charge your analytics? Drop us a line—we're eager to collaborate!</p>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-6 mb-4 mb-lg-0">
            <div class="contact-details p-4 shadow-subtle text-dark">
              <h3 class="fw-bold mb-3">Reach Out to Axiom Metrics</h3>
              <p><strong>Address:</strong> 80 Greene Avenue, New York, NY 11238, USA</p>
              <p><strong>Phone:</strong> <a href="tel:+19834031872" class="text-primary text-decoration-none">+1 (983) 403-1872</a></p>
              <p><strong>Email:</strong> <a href="mailto:info@<?php echo $_SERVER['HTTP_HOST']; ?>" class="text-primary text-decoration-none">info@<?php echo $_SERVER['HTTP_HOST']; ?></a></p>
              <p class="mt-4 fst-italic">Expect a reply faster than our high-frequency trading bots! ⚡</p>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="contact-map border-radius-global">
              <iframe src="https://www.google.com/maps?q=New+York,+USA&z=10&output=embed" allowfullscreen="" loading="lazy"></iframe>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
<footer id="footer" class="bg-dark text-light py-4">
    <div class="container text-center">
      <p class="mb-2">&copy; 2024 Axiom Metrics. Spreadsheets and smiles all rights reserved. 😊</p>
      <p class="mb-2"><strong>Axiom Metrics Quantitative Analytics</strong></p>
      <ul class="list-inline mb-0">
        <li class="list-inline-item"><a href="./privacy.html" class="text-primaryLight">Privacy Policy</a></li>
        <li class="list-inline-item">&bull;</li>
        <li class="list-inline-item"><a href="./tos.html" class="text-primaryLight color: var(--primaryLight);">Terms of Service</a></li>
      </ul>
    </div>
    
    <div id="cookieConsentBanner" class="position-fixed bottom-0 start-0 w-100 bg-secondary text-dark p-3 text-center shadow-lg" style="display: none; z-index: 1050;">
      <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center">
        <p class="mb-2 mb-md-0 me-md-3">We use cookies to enhance your experience. By continuing to visit this site, you agree to our use of cookies.</p>
        <button id="acceptCookies" class="btn btn-primaryLight">Accept</button>
      </div>
    </div>
  </footer>

  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    /**
     * @file Global JavaScript functions for Axiom Metrics website.
     * @author Axiom Metrics Team
     * @version 1.0.0
     */

    /**
     * IIFE (Immediately Invoked Function Expression) for encapsulating site-wide JavaScript.
     * Prevents global scope pollution and ensures all scripts run after the DOM is ready.
     */
    (function() {
      'use strict';

      /**
       * Initializes all necessary components and event listeners on DOMContentLoaded.
       * @function init
       */
      function init() {
          setupNavbarScrollEffect();
          handleCookieConsent();
      }

      /**
       * Adds a scroll event listener to the window to change the navbar's appearance.
       * The navbar transitions from transparent to solid white with a shadow on scroll.
       * @function setupNavbarScrollEffect
       */
      function setupNavbarScrollEffect() {
          const navbar = document.getElementById('mainNav');
          if (navbar) {
              window.addEventListener('scroll', () => {
                  if (window.scrollY > 50) { // Adjust scroll threshold as needed
                      navbar.classList.add('scrolled');
                      // Change nav-link color for better contrast on solid background
                      document.querySelectorAll('#mainNav .nav-link, #mainNav .navbar-brand').forEach(link => {
                        link.style.color = 'var(--textDark)';
                      });
                  } else {
                      navbar.classList.remove('scrolled');
                      // Revert nav-link color for transparent background
                      document.querySelectorAll('#mainNav .nav-link, #mainNav .navbar-brand').forEach(link => {
                        link.style.color = 'var(--textLight)';
                      });
                  }
              });
              // Trigger once on load in case the page is loaded scrolled
              window.dispatchEvent(new Event('scroll'));
          }
      }

      /**
       * Manages the cookie consent banner's visibility and user interaction.
       * Uses localStorage to remember user's choice.
       * @function handleCookieConsent
       */
      function handleCookieConsent() {
        const consentBanner = document.getElementById('cookieConsentBanner');
        const acceptButton = document.getElementById('acceptCookies');
        // Unique prefix for cookie name to prevent conflicts
        const cookieName = 'consent_Axiom Metrics_accepted'; 

        /**
         * Checks if the user has previously accepted cookies.
         * @returns {boolean} True if consent is found, false otherwise.
         */
        function getCookieConsent() {
          return localStorage.getItem(cookieName);
        }

        /**
         * Sets the cookie consent status to true.
         */
        function setCookieConsent() {
          localStorage.setItem(cookieName, 'true');
        }

        // Show banner if consent not given
        if (!getCookieConsent() && consentBanner) {
          consentBanner.style.display = 'block';
        }

        // Handle accept button click
        if (acceptButton) {
          acceptButton.addEventListener('click', () => {
            setCookieConsent();
            if (consentBanner) {
              consentBanner.style.display = 'none';
            }
          });
        }
      }

      // Initialize the script when the DOM is fully loaded.
      document.addEventListener('DOMContentLoaded', init);
    })();
  </script>
</body>
</html>