<?php if (!isset($activePage)) $activePage = 'home'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body>
<nav class="navbar" id="navbar">
  <div class="container navbar__inner">
      <a href="index.php" class="navbar__logo">
      <svg width="36" height="36" viewBox="0 0 32 32" fill="none"><rect width="32" height="32" rx="8" fill="#2E7D32"/><path d="M8 22V14L16 8L24 14V22H19V17H13V22H8Z" fill="white"/><circle cx="16" cy="14" r="2" fill="#81C784"/></svg>
      <span>funaabhub</span>
    </a>
    <div class="navbar__nav" id="mainNav">
      <a href="index.php" class="nav-link <?php echo $activePage === 'home' ? 'active' : ''; ?>">Home</a>
      <a href="find-agent.html" class="nav-link <?php echo $activePage === 'find-agent' ? 'active' : ''; ?>">Find Agent</a>
      <a href="listings.html" class="nav-link <?php echo $activePage === 'listings' ? 'active' : ''; ?>">Listings</a>
      <a href="how-it-works.html" class="nav-link <?php echo $activePage === 'how-it-works' ? 'active' : ''; ?>">How It Works</a>
      <a href="report-scam.html" class="nav-link <?php echo $activePage === 'report-scam' ? 'active' : ''; ?>">Report Scam</a>
      <a href="contact.html" class="nav-link <?php echo $activePage === 'contact' ? 'active' : ''; ?>">Contact</a>
    </div>
    <div class="navbar__actions">
      <a href="agent-dashboard.php" class="btn btn--ghost btn--sm">Agent Login</a>
      <a href="student-dashboard.php" class="btn btn--ghost btn--sm">Student Login</a>
      <a href="register.html" class="btn btn--primary btn--sm">Register as Agent</a>
      <button class="navbar__hamburger" id="hamburger" aria-label="Menu">
        <span></span><span></span><span></span>
      </button>
    </div>
  </div>
</nav>
