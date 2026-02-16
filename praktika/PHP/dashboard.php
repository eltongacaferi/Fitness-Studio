<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard - Fitness Studio</title>
  <link rel="stylesheet" href="../CSS/style.css" />
  <link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
/>
</head>
<body>
  <nav class="nav">
    <div class="nav-content">
      <div class="logo" id="studio-name">Fitness Studio</div>
      <ul class="nav-links">
        <li><a href="index.html">Home</a></li>
        <li><a href="schedule.html">Schedule</a></li>
        <li><a href="trainers.html">Trainers</a></li>
        <li><a href="membership.html">Membership</a></li>
        <li><a href="dashboard.html">Dashboard</a></li>
        <li><a href="contact.html">Contact</a></li>
      </ul>
      <button class="mobile-menu-btn">☰</button>
    </div>
  </nav>

  <!-- Dashboard Page content from your original code -->
  <div id="dashboard-page" class="page">
    <div class="container">
      <h2 class="section-title">My Dashboard</h2>
      <div class="dashboard-grid">
        <div class="stat-card">
          <div class="stat-number" id="active-bookings-count">0</div>
          <div class="stat-label">Active Bookings</div>
        </div>
        <div class="stat-card">
          <div class="stat-number" id="completed-classes-count">0</div>
          <div class="stat-label">Classes Completed</div>
        </div>
        <div class="stat-card">
          <div class="stat-number" id="membership-status">Active</div>
          <div class="stat-label">Membership Status</div>
        </div>
      </div>

      <h3 style="font-size: 1.75rem; margin: 2rem 0 1.5rem 0; color: #1f2937;">Upcoming Classes</h3>
      <ul id="upcoming-bookings" class="booking-list"></ul>

      <h3 style="font-size: 1.75rem; margin: 3rem 0 1.5rem 0; color: #1f2937;">Past Classes</h3>
      <ul id="past-bookings" class="booking-list"></ul>
    </div>
  </div>
  <footer class="footer">
  <div class="footer-content">
    <div class="footer-section">
      <p>© 2025 FitLife Studio. All Rights Reserved.</p>
    </div>
    <div class="footer-section">
      <i class="fa-brands fa-facebook-f"></i>
      <i class="fa-brands fa-twitter"></i>
      <i class="fa-brands fa-instagram"></i>
      <i class="fa-brands fa-linkedin-in"></i>
    </div>
    <div class="footer-section">
      <p>123 Nbaqe Tbabs, Kosovo</p>
      <p>info@fitlife.com | +123 456 7890</p>
    </div>
  </div>
</footer>

  <script src="../JS/script.js"></script>
</body>
</html>
