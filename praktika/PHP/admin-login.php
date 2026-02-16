<?php
session_start();

/* =======================
   DATABASE CONNECTION
======================= */
$conn = mysqli_connect("localhost", "root", "", "praktikelton");
if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

/* =======================
   LOGIN LOGIC
======================= */
$login_error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Check admin table
    $sql = "SELECT * FROM admin WHERE name='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 1) {
        $_SESSION['admin'] = $username;
        header("Location: admin-dashboard.php"); // redirect
        exit();
    } else {
        $login_error = "Wrong username or password";
    }
}
?>


<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Login</title>
  <link rel="stylesheet" href="../CSS/admin.css">
</head>
<body>

<div class="login-wrapper">
  <div class="login-card">
    <h2>Admin Login</h2>

    <?php if ($login_error !== ''): ?>
        <p style="color:red;"><?php echo $login_error; ?></p>
    <?php endif; ?>

    <form method="POST" action="">
        <input name="username" placeholder="Username" required>
        <input name="password" type="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>
  </div>
</div>

</body>
</html>
