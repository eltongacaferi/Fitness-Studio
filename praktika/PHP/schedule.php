<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Schedule - Fitness Studio</title>
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

<div id="success-toast" class="toast"></div>


  <div id="schedule-page" class="page">
    <div class="container">
      <h2 class="section-title">Training Schedule</h2>

      <div class="filters">
        <select id="filter-type" class="filter-select">
          <option value="">All Class Types</option>
          <option value="Yoga">Yoga</option>
          <option value="HIIT">HIIT</option>
          <option value="Strength">Strength Training</option>
          <option value="Cardio">Cardio</option>
          <option value="Pilates">Pilates</option>
        </select>

        <select id="filter-trainer" class="filter-select">
          <option value="">All Trainers</option>
          <option value="Sarah Johnson">Sarah Johnson</option>
          <option value="Mike Chen">Mike Chen</option>
          <option value="Emma Williams">Emma Williams</option>
          <option value="David Martinez">David Martinez</option>
        </select>

        <select id="filter-day" class="filter-select">
          <option value="">All Days</option>
          <option value="Monday">Monday</option>
          <option value="Tuesday">Tuesday</option>
          <option value="Wednesday">Wednesday</option>
          <option value="Thursday">Thursday</option>
          <option value="Friday">Friday</option>
          <option value="Saturday">Saturday</option>
          <option value="Sunday">Sunday</option>
        </select>
      </div>

      <div id="classes-container" class="card-grid">
        <!-- JS will render class cards here -->
      </div>
    </div>
  </div>

  <!-- Booking Modal -->
  <div id="booking-modal" class="modal">
    <div class="modal-content">
      <button class="modal-close">×</button>
      <h3 class="modal-title">Book Your Class</h3>
      <form id="booking-form">
        <div class="form-group">
          <label for="user-name" class="form-label">Your Name</label>
          <input type="text" id="user-name" class="form-input" required />
        </div>
        <div class="form-group">
          <label for="user-email" class="form-label">Email Address</label>
          <input type="email" id="user-email" class="form-input" required />
        </div>
        <div class="form-group">
          <p><strong>Class:</strong> <span id="booking-class-name"></span></p>
          <p><strong>Time:</strong> <span id="booking-class-time"></span></p>
          <p><strong>Trainer:</strong> <span id="booking-trainer-name"></span></p>
        </div>
        <button type="submit" class="btn btn-primary btn-full">Confirm Booking</button>
      </form>
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
  <script>
    // Trigger modal close
    document.querySelectorAll(".modal-close").forEach(btn => {
      btn.addEventListener("click", () => {
        btn.closest(".modal").classList.remove("active");
      });
    });

    document.querySelectorAll(".modal").forEach(modal => {
      modal.addEventListener("click", e => {
        if (e.target === modal) modal.classList.remove("active");
      });
    });

    // Initialize page
    document.addEventListener("DOMContentLoaded", () => {
      // Set current page for rendering
      if (typeof navigateToPage === "function") navigateToPage("schedule");
    });
  </script>
</body>
</html>
