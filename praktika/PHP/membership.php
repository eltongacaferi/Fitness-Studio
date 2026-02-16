<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Membership - Fitness Studio</title>
  <link rel="stylesheet" href="../CSS/style.css" />
  <link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
/>
</head>
<body>
  <!-- Navigation copied from your original code -->
  <nav class="nav">
    <div class="nav-content">
      <div class="logo" id="studio-name">Fitness Studio</div>
      <ul class="nav-links">
        <li><a href="index.php">Home</a></li>
        <li><a href="schedule.php">Schedule</a></li>
        <li><a href="trainers.php">Trainers</a></li>
        <li><a href="membership.php">Membership</a></li>
        <li><a href="Registration.php">Dashboard</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
      <button class="mobile-menu-btn">☰</button>
    </div>
  </nav>

  <!-- Membership Page content (from your original code) -->
  <div id="membership-page" class="page">
    <div class="container">
      <h2 class="section-title">Membership Plans</h2>
      <div class="card-grid">
        <div class="card plan-card">
          <h3 class="card-title">Monthly</h3>
          <div class="plan-price">$79<span>/month</span></div>
          <ul class="plan-features">
            <li>Unlimited classes</li>
            <li>Access to all facilities</li>
            <li>Free fitness assessment</li>
            <li>Locker rental</li>
          </ul>
          <button class="btn btn-primary btn-full" data-plan="Monthly" data-price="79">Buy Membership</button>
        </div>

        <div class="card plan-card featured">
          <div class="plan-badge">POPULAR</div>
          <h3 class="card-title">3-Month</h3>
          <div class="plan-price">$199<span>/3 months</span></div>
          <ul class="plan-features">
            <li>Unlimited classes</li>
            <li>Access to all facilities</li>
            <li>Free fitness assessment</li>
            <li>Locker rental</li>
            <li>1 personal training session</li>
            <li>Nutrition consultation</li>
          </ul>
          <button class="btn btn-primary btn-full" data-plan="3-Month" data-price="199">Buy Membership</button>
        </div>

        <div class="card plan-card">
          <h3 class="card-title">Yearly</h3>
          <div class="plan-price">$599<span>/year</span></div>
          <ul class="plan-features">
            <li>Unlimited classes</li>
            <li>Access to all facilities</li>
            <li>Free fitness assessment</li>
            <li>Locker rental</li>
            <li>4 personal training sessions</li>
            <li>Nutrition consultation</li>
            <li>Guest pass (5 per month)</li>
            <li>Priority booking</li>
          </ul>
          <button class="btn btn-primary btn-full" data-plan="Yearly" data-price="599">Buy Membership</button>
        </div>
      </div>
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
