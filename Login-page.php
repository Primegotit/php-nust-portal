<?php 

    require "config/config.php";
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $student_number = $_POST["student_number"];
        $password = $_POST["password"];

        $sql = "SELECT * FROM students WHERE student_number = '$student_number' AND password = '$password'";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) == 1) {
            session_start();
            $_SESSION["student_number"] = $student_number;
            header("Location: Student-Home.php");
            exit();
        } else {
            echo "<script>alert('Invalid student number or password. Please try again.');</script>";
        }
    }

?>
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

    <nav>
        <img src="./public/logo_nust_png.png" alt="NUST Logo" id="nust-logo">
        <h2>University Management System</h2>
    </nav>

    <div id="main-login-body">

        <div>
        </div>

        <div id="login-container">

            <div id="logo-wrapper">
                <img src="./public/logo_nust_png.png" alt="NUST Logo" id="nust-logo">
            </div>

            <h3>STUDENTS PORTAL</h3>
            <br>

            <form method="POST" >

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