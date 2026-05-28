<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Page - University Management System</title>
    <link rel="stylesheet" href="Login-page.css">
    <link rel="stylesheet" href="global.css">
    <link rel="stylesheet" href="forms.css">
</head>
<body>

<div id="loginpage">

    <!-- NAVBAR -->
    <nav>
        <img src="./public/logo_nust_png.png" alt="NUST Logo" id="nust-logo">
        <h2>University Management System</h2>
    </nav>

    <!-- MAIN BODY -->
    <div id="main-login-body">

        <div>
            <!-- Left empty section (can be used for image/banner later) -->
        </div>

        <!-- LOGIN CONTAINER -->
        <div id="login-container">

            <div id="logo-wrapper">
                <img src="./public/logo_nust_png.png" alt="NUST Logo" id="nust-logo">
            </div>

            <h3>STUDENTS PORTAL</h3>
            <br>

            <form method="POST" action="login.php">

                <div id="textbox-container">
                    <input type="text" name="student_number" placeholder="Student Number" required>
                    <input type="password" name="password" placeholder="Password" required>
                </div>

                <br>

                <button type="submit" id="login-btn">LOG IN</button>

            </form>

        </div>

    </div>

</div>

</body>
</html>