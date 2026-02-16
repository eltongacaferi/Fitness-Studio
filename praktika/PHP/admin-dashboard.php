

<?php
session_start();
if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: index.php");
    exit();
}
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="../CSS/admin.css">
</head>
<body>

<nav class="admin-nav">
  <h2>Fitness Studio Admin</h2>
 <a href="admin-dashboard.php?logout=true">
    <button>Logout</button>
</a>
</nav>

<div class="dashboard">

  <!-- STATS -->
  <div class="stats-grid">
    <div class="stat-card">
      <h3>Total Members</h3>
      <p id="membersCount">0</p>
    </div>
    <div class="stat-card">
      <h3>Active Classes</h3>
      <p id="classesCount">0</p>
    </div>
    <div class="stat-card">
      <h3>Monthly Income</h3>
      <p>$<span id="monthlyIncome">0</span></p>
    </div>
    <div class="stat-card highlight">
      <h3>Annual Income</h3>
      <p>$<span id="annualIncome">0</span></p>
    </div>
  </div>

  <!-- MANAGEMENT -->
  <div class="manage-grid">

    <div class="panel">
      <h3>Trainers</h3>
      <input id="trainerName" placeholder="Name">
      <input id="trainerSkill" placeholder="Specialty">
      <button onclick="addTrainer()">Add</button>
      <ul id="trainerList"></ul>
    </div>

    <div class="panel">
      <h3>Membership Plans</h3>
      <input id="planName" placeholder="Plan">
      <input id="planPrice" placeholder="Price">
      <button onclick="addPlan()">Add</button>
      <ul id="planList"></ul>
    </div>

    <div class="panel">
      <h3>Schedule</h3>
      <input id="className" placeholder="Class">
      <input id="classTrainer" placeholder="Trainer">
      <input id="classDay" placeholder="Day">
      <input id="classTime" placeholder="Time">
      <button onclick="addClass()">Add</button>
      <ul id="classList"></ul>
    </div>

  </div>
</div>

<script src="../JS/admin.js"></script>
</body>
</html>
