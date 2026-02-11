<?php
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'user') {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Taskify | Modern Productivity Suite</title>

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  
  <!-- Boxicons -->
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

  <!-- AOS CSS -->
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar">
    <div class="container">
      <div class="logo">
        <img src="assets/logo.png" alt="Taskify Logo">
        <span>Taskify</span>
      </div>
      <div class="nav-links">
        <a href="#features" class="nav-link">Features</a>
        <a href="#tools" class="nav-link">Tools</a>
        <div class="clock" id="clock"></div>
      </div>
      <div class="menu-btn">
        <i class='bx bx-menu'></i>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="hero">
    <div class="container">
      <div class="hero-content">
        <h1 data-aos="fade-up">Boost Your <span class="accent">Productivity</span></h1>
        <p data-aos="fade-up" data-aos-delay="100">All the tools you need to stay organized, focused, and efficient in one beautiful interface</p>
        <div class="hero-buttons" data-aos="fade-up" data-aos-delay="200">
          <a href="#features" class="btn btn-primary">Explore Features</a>
          <a href="#tools" class="btn btn-outline">View Demo</a>
        </div>
      </div>
      <div class="hero-video" data-aos="zoom-in" data-aos-delay="300">
        <video autoplay muted loop playsinline>
          <source src="assets/video.webm" type="video/webm">
        </video>
      </div>
    </div>
    <div class="hero-wave">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#000" fill-opacity="1" d="M0,96L48,112C96,128,192,160,288,160C384,160,480,128,576,122.7C672,117,768,139,864,149.3C960,160,1056,160,1152,138.7C1248,117,1344,75,1392,53.3L1440,32L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
      </svg>
    </div>
  </section>

  <!-- Features Section -->
  <section id="features" class="features">
    <div class="container">
      <div class="section-header" data-aos="fade-up">
        <h2>Powerful Features</h2>
        <p>Everything you need to manage your tasks and time effectively</p>
      </div>
      
      <div class="feature-grid">
        <!-- Calendar Feature -->
        <div class="feature-card" data-aos="fade-up">
          <div class="feature-icon">
            <i class='bx bx-calendar'></i>
          </div>
          <h3>BS Calendar</h3>
          <p>Organize your schedule and never miss an important event</p>
          <a href="bs.html" class="feature-link">
            <span>Open Calendar</span>
            <i class='bx bx-right-arrow-alt'></i>
          </a>
          <div class="feature-image">
            <img src="assets/calendarimage.png" alt="Calendar Preview">
          </div>
        </div>
        
        <!-- AD Calendar Feature -->
        <div class="feature-card" data-aos="fade-up" data-aos-delay="100">
          <div class="feature-icon">
            <i class='bx bx-calendar-check'></i>
          </div>
          <h3>AD Calendar</h3>
          <p>Advanced calendar with multiple view options and integrations</p>
          <a href="ad.html" class="feature-link">
            <span>Open Calendar</span>
            <i class='bx bx-right-arrow-alt'></i>
          </a>
          <div class="feature-image">
            <img src="assets/calendarimage.png" alt="Calendar Preview">
          </div>
        </div>
        
        <!-- Todo Feature -->
        <div class="feature-card" data-aos="fade-up" data-aos-delay="200">
          <div class="feature-icon">
            <i class='bx bx-task'></i>
          </div>
          <h3>To-Do App</h3>
          <p>Manage your tasks and stay productive throughout the day</p>
          <a href="index-todo.html" class="feature-link">
            <span>Open To-Do</span>
            <i class='bx bx-right-arrow-alt'></i>
          </a>
          <div class="feature-image">
            <img src="assets/todoimage.png" alt="Todo Preview">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Tools Section -->
  <section id="tools" class="tools">
    <div class="container">
      <div class="section-header" data-aos="fade-up">
        <h2>Productivity Tools</h2>
        <p>Additional tools to enhance your productivity</p>
      </div>
      
      <div class="tools-grid">
        <!-- Weather Tool -->
        <div class="tool-card" data-aos="fade-up">
          <div class="tool-icon">
            <i class='bx bx-cloud'></i>
          </div>
          <h3>Weather</h3>
          <p>Check the weather forecast</p>
          <a href="index-weather.html" class="tool-btn">Open</a>
        </div>
        
        <!-- Alarm Tool -->
        <div class="tool-card" data-aos="fade-up" data-aos-delay="100">
          <div class="tool-icon">
            <i class='bx bx-alarm'></i>
          </div>
          <h3>Alarm</h3>
          <p>Set reminders and alarms</p>
          <a href="index-alarm.html" class="tool-btn">Open</a>
        </div>
        
        <!-- News Tool -->
        <div class="tool-card" data-aos="fade-up" data-aos-delay="200">
          <div class="tool-icon">
            <i class='bx bx-news'></i>
          </div>
          <h3>News</h3>
          <p>Stay updated with latest news</p>
          <a href="index-news.html" class="tool-btn">Open</a>
        </div>
        
        <!-- Currency Tool -->
        <div class="tool-card" data-aos="fade-up" data-aos-delay="300">
          <div class="tool-icon">
            <i class='bx bx-dollar'></i>
          </div>
          <h3>Currency</h3>
          <p>Convert between currencies</p>
          <a href="index-currency.html" class="tool-btn">Open</a>
        </div>
        
        <!-- Stock Tool -->
        <div class="tool-card" data-aos="fade-up" data-aos-delay="400">
          <div class="tool-icon">
            <i class='bx bx-line-chart'></i>
          </div>
          <h3>Stock Market</h3>
          <p>Track stock market changes</p>
          <a href="index-stock.html" class="tool-btn">Open</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="logo">
        <img src="assets/logo.png" alt="Taskify Logo">
        <span>Taskify</span>
      </div>
      <p>© 2023 Taskify. All rights reserved.</p>
    </div>
  </footer>

  <!-- AOS JS -->
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
  <script>
    AOS.init({
      duration: 800,
      easing: 'ease-in-out',
      once: false,
      mirror: false
    });
  </script>

  <!-- Main JS -->
  <script src="main.js"></script>
</body>
</html>
