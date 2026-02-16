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
   SIGN UP LOGIC
======================= */
$signup_error = '';
$login_error  = '';

if (isset($_POST['signup1'])) {

    // Sanitize input
    $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
    $lastname  = mysqli_real_escape_string($conn, $_POST['lastname']);
    $email     = mysqli_real_escape_string($conn, $_POST['email']);
    $password  = mysqli_real_escape_string($conn, $_POST['PASSWORD']);
    $idnumber  = mysqli_real_escape_string($conn, $_POST['IDNumber']);

    // Check if email already exists in student table
    $check = mysqli_query($conn, "SELECT email FROM trainer WHERE email='$email'");
    if (mysqli_num_rows($check) > 0) {
        $signup_error = "Email already exists";
    } else {
        // Insert new student
        $sql = "INSERT INTO trainer (firstname, lastname, email, PASSWORD, IDNumber)
                VALUES ('$firstname', '$lastname', '$email', '$password', '$idnumber')";

        if (mysqli_query($conn, $sql)) {
            $_SESSION['email'] = $email;
            header("Location: trainer_dashboard.php");
            exit();
        } else {
            $signup_error = "Registration failed: " . mysqli_error($conn);
        }
    }
}

/* =======================
   LOGIN LOGIC
======================= */
if (isset($_POST['login1'])) {

    $email    = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['PASSWORD']);

    // Check student table
    $query = "SELECT * FROM trainer WHERE email='$email' AND PASSWORD='$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $_SESSION['email'] = $email;
        header("Location: trainer_dashboard.php");
        exit();
    } else {
        $login_error = "Wrong email or password";
    }
}
?>
