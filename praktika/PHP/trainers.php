<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Trainers - Fitness Studio</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="../CSS/style.css"/>
  <link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
/>
</head>
<body>
  <nav class="nav">
    <div class="nav-content">
      <div class="logo">Fitness Studio</div>
      <ul class="nav-links">
        <li><a href="index.php">Home</a></li>
        <li><a href="schedule.php">Schedule</a></li>
        <li><a href="trainers.php">Trainers</a></li>
        <li><a href="membership.php">Membership</a></li>
        <li><a href="dashboard.php">Dashboard</a></li>
        <li><a href="Registration.php">Contact</a></li>
      </ul>
    </div>
  </nav>

  <div class="container">
    <h2 class="section-title">Our Expert Trainers</h2>
    <div id="trainers-container" class="card-grid"></div>
    <a href="Registration1.php">Sign Up as Trainer</a>
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
  <script>
    document.addEventListener("DOMContentLoaded", () => {

      const container = document.getElementById("trainers-container");
      if (container) {
        renderTrainers();
      }
    });
  </script>
</body>
</html>
