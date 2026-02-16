<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact - Fitness Studio</title>
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

  <div id="contact-page" class="page">
    <div class="container">
      <h2 class="section-title">Get In Touch</h2>
      <div class="contact-grid">
        <div class="contact-info">
          <div class="info-item">
            <div class="info-icon">📍</div>
            <div>
              <h4 style="margin: 0 0 0.5rem 0; color: #1f2937">Address</h4>
              <p style="margin: 0; color: #6b7280" id="contact-address-display">123 Nbaqe Tbabs, Kosovo</p>
            </div>
          </div>
          <div class="info-item">
            <div class="info-icon">📞</div>
            <div>
              <h4 style="margin: 0 0 0.5rem 0; color: #1f2937">Phone</h4>
              <p style="margin: 0; color: #6b7280" id="contact-phone-display">+123 456 7890</p>
            </div>
          </div>
          <div class="info-item">
            <div class="info-icon">✉️</div>
            <div>
              <h4 style="margin: 0 0 0.5rem 0; color: #1f2937">Email</h4>
              <p style="margin: 0; color: #6b7280" id="contact-email-display">info@fitlifestudio.com</p>
            </div>
          </div>
        </div>

        <form id="contact-form">
          <div class="form-group">
            <label for="contact-name" class="form-label">Name</label>
            <input type="text" id="contact-name" class="form-input" required />
          </div>
          <div class="form-group">
            <label for="contact-email-input" class="form-label">Email</label>
            <input type="email" id="contact-email-input" class="form-input" required />
          </div>
          <div class="form-group">
            <label for="contact-message" class="form-label">Message</label>
            <textarea id="contact-message" class="form-textarea" required></textarea>
          </div>
          <button type="submit" class="btn btn-primary btn-full">Send Message</button>
        </form>
      </div>

      <!-- Live Google Map Embed -->
<div class="map-placeholder">
  <iframe
    src="https://www.google.com/maps?q=123+Fitness+Ave,+Pristina+Kosovo&output=embed"
    width="100%"
    height="300"
    style="border:0;"
    allowfullscreen=""
    loading="lazy"
    referrerpolicy="no-referrer-when-downgrade">
  </iframe>
</div>

</div>


      <!-- Reviews -->
      <div class="reviews">
        <h3 class="section-title">What Our Members Say</h3>

        <div class="review-card">
          <div class="review-header">
            <div class="review-author">Jessica T.</div>
            <div class="review-stars">★★★★★</div>
          </div>
          <p>"Amazing trainers and great atmosphere! I've achieved results I never thought possible."</p>
        </div>

        <div class="review-card">
          <div class="review-header">
            <div class="review-author">Michael R.</div>
            <div class="review-stars">★★★★★</div>
          </div>
          <p>"The best fitness studio in town. Clean facilities, professional staff, and flexible schedules."</p>
        </div>
        <div class="review-card">
  <div class="review-header">
    <div class="review-author">E.G.</div>
    <div class="review-stars">★☆☆☆☆</div>
  </div>
  <p>"catastrophic website"</p>
</div>


        <div class="review-card">
          <div class="review-header">
            <div class="review-author">Amanda K.</div>
            <div class="review-stars">★★★★★</div>
          </div>
          <p>"I love the variety of classes offered. There's always something new to try!"</p>
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
