<?php
include("../server1.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome Back</title>

    <link rel="stylesheet" href="registration.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
</head>

<body>

<div class="blockSign">
    <div id="formContent">

        <ul class="tab-group">
            <li class="tab active"><a href="#signin">Sign In</a></li>
            <li class="tab"><a href="#signup">Sign Up</a></li>
        </ul>

        <div class="tab-content">

            <!-- ================= SIGN IN ================= -->
            <div id="signin">
                <h1>Welcome</h1>

                <?php if (isset($login_error)) echo "<p style='color:red;'>$login_error</p>"; ?>

                <form method="POST" action="Registration1.php">
                    <input type="email" name="email" placeholder="Email Address" required>
                    <input type="password" name="PASSWORD" placeholder="Password" required>
                    <input type="submit" name="login1" value="Sign In">
                </form>
            </div>

            <!-- ================= SIGN UP ================= -->
            <div id="signup">
                <h1>Sign Up Now as a trainer to open your dashboard</h1>

                <?php if (isset($signup_error)) echo "<p style='color:red;'>$signup_error</p>"; ?>
                <?php if (isset($signup_success)) echo "<p style='color:green;'>$signup_success</p>"; ?>

                <form method="POST" action="Registration1.php">
                    <input type="text" name="firstname" placeholder="First Name" required>
                    <input type="text" name="lastname" placeholder="Last Name" required>
                    <input type="email" name="email" placeholder="Email" required>
                    <input type="password" name="PASSWORD" placeholder="Password" required>
                    
                    <input type="submit" name="signup1" value="Sign Up">
                </form>
            </div>

        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="js/index.js"></script>

<script>
$('.tab a').on('click', function (e) {
    e.preventDefault();
    $(this).parent().addClass('active').siblings().removeClass('active');
    let target = $(this).attr('href');
    $('.tab-content > div').hide();
    $(target).fadeIn(600);
});
</script>

</body>
</html>
