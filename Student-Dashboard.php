<?php
    session_start();
    $current_student_id = $_SESSION["student_id"];
    $current_student_first_name = "";
    $current_student_middle_name = "";
    $current_student_last_name = "";
    $current_national_id = "";
    $current_gender  = "";
    $current_country = "";
    $current_dob = "";
    $current_city = "";
    $current_address = "";
    $current_phone_number = "";
    $current_email = "";
    $current_department = "";
    $current_degree = "";
    $current_part = "2.1";

    require "config/config.php";

        $sql = "SELECT * FROM tblstudents WHERE student_id = '$current_student_id'";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) == 1) {
                while($row = mysqli_fetch_assoc($result)) {
                    $current_student_first_name = $row["first_name"];
                    $current_student_middle_name = $row["middle_name"];
                    $current_student_last_name = $row["last_name"];
                    $current_national_id = $row["national_id"];
                    $current_gender = $row["gender"];
                    $current_dob = $row["dob"];
                    $current_country = $row["country"];
                    $current_city = $row["city"];
                    $current_address = $row["address"];
                    $current_phone_number = $row["phone_number"];
                    $current_email = $row["email"];
                    $current_department = $row["department"];
                    $current_degree = $row["degree"];

                    $_SESSION["national_id"] = $current_national_id;
                    $_SESSION["student_first_name"] = $current_student_first_name;
                    $_SESSION["student_middle_name"] = $current_student_middle_name;
                    $_SESSION["student_last_name"] = $current_student_last_name;
                    $_SESSION["student_gender"] = $current_gender;
                    $_SESSION["student_dob"] = $current_dob;
                    $_SESSION["student_country"] = $current_country;
                    $_SESSION["student_city"] = $current_city;
                    $_SESSION["student_address"] = $current_address;
                    $_SESSION["student_phone_number"] = $current_phone_number;
                    $_SESSION["student_email"] = $current_email;
                    $_SESSION["student_department"] = $current_department;
                    $_SESSION["student_degree"] = $current_degree;

                }

 
        } else {
        }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Dashboard</title>
    <link rel="stylesheet" href="Student-Dashboard.css">
    <link rel="stylesheet" href="global.css">
    <link rel="stylesheet" href="forms.css">
    <link rel="stylesheet" href="index.css">
     
</head>
<body>

<div id="student-dashboard-page">

    <!-- HEADER -->
    <header>
        <div id="header-things">

            <div id="left-top-container">
                <button onclick="toggleAside()">
                    <img src="public/stack_14035097.png" alt="">
                </button>

                <h3>
                    STUDENT PORTAL
                    <img src="public/logo_nust_png.png" id="uni-logo">
                </h3>
            </div>

            <div id="right-top-container">
                <i class="fa fa-envelope"></i>
                <button id="logout-btn">
                    Logout <i class="fa fa-right-from-bracket"></i>
                </button>
            </div>

        </div>

        <div id="bottom-border"></div>
    </header>

    <!-- MAIN -->
    <div id="main-content" style="grid-template-columns: 100%;">

        <!-- ASIDE -->
        <aside id="sidebar" style="display:none;">
            <div id="student-card">
                <img src="public/logo_nust_png.png" id="student-dp">
                <h4 form="student-form" value=""><?php echo $current_national_id; ?></h4>
                <h4 form="student-form" value=""><?php echo $current_student_first_name; ?> <?php echo $current_student_middle_name; ?> <?php echo $current_student_last_name; ?></h4>
            </div>

            <a href="#.php" id="btns">Portal Dashboard</a>
            <a href="Register-Form.php" id="btns">New Registration</a>
            <a href="#" id="btns">Payments History</a>
            <a href="student-results.php" id="btns">Examinations Results</a>
            <a href="Module-Manager-Student.php" id="btns">Modules Information</a>
            <a href="Welcome-page.php" id="btns">Logout</a>

        </aside>

        <!-- CONTENT -->
        <section id="content-container">
            <form action="" id="student-form" method="POST">
                <div id=modules-info>
                    <h3 style="text-align:center;">Welcome <?php echo $current_student_first_name; ?> <?php echo $current_student_middle_name; ?> <?php echo $current_student_last_name; ?>⚡</h3>
                    <br>
                    <p>This is your student portal that shows you all the information you'll ever need including news updates and exam results.</p>
                </div>
            </form>
            <!-- PERSONAL + ACADEMIC -->
            <div id="person-and-financial-box">

                <!-- PERSONAL -->
                <div class="content-box">
                    <h3>Personal Information</h3>
                    <br>
                    <table>
                        <tr><td>Name</td><td form="student-form" ><?php echo $current_student_first_name; ?> <?php echo $current_student_middle_name; ?> <?php echo $current_student_last_name; ?></td></tr>
                        <tr><td>ID Number</td><td form="student-form"><?php echo $current_national_id; ?></td></tr>
                        <tr><td>City</td><td form="student-form"><?php echo $current_city; ?></td></tr>
                        <tr><td>Country</td><td form="student-form"><?php echo $current_country; ?></td></tr>

                        <tbody id="personal-extra" class="hidden">
                            <tr><td>Gender</td><td form="student-form"><?php echo $current_gender; ?></td></tr>
                            <tr><td>Date of Birth</td><td form="student-form"><?php echo $current_dob; ?></td></tr>
                        </tbody>
                    </table>

                    <button onclick="togglePersonal()" id="personal-btn" class="bottom-btn-show-more">Show More</button>
                </div>

                <!-- ACADEMIC -->
                <div class="content-box">
                    <h3>Academic Details</h3>
                    <br>

                    <table>
                        <tr><td>Student Number</td><td form="student-form"><?php echo $current_student_id; ?></td></tr>
                        <tr><td>Programme</td><td form="student-form"><?php echo $current_degree; ?></td></tr>
                        <tr><td>Year</td><td form="student-form"  id="yearBox"><script>document.getElementById("yearBox").textContent = new Date().getFullYear();</script></td></tr>
                        <tr><td>Part</td><td form="student-form"><?php echo $current_part; ?></td></tr>

                        <tbody id="academic-extra" class="hidden">
                            <tr><td>Semester</td><td><?php echo $current_part[0]; ?></td></tr>
                        </tbody>
                    </table>

                    <button onclick="toggleAcademic()" id="academic-btn" class="bottom-btn-show-more">Show More</button>
                </div>

            </div>

            <!-- COURSES + FINANCE -->
            <div id="reg-and-academic-box">

                <!-- COURSES -->
                <div class="content-box">
                    <h3>Registered Courses</h3>
                    <br>

                    <table >
                        <tr><td>Course Code<b></b></td><td><b>Course Name</b></td><td><b>Course Type</b></td></tr>

                        <tr><td>SCS1111</td><td>Intro CS</td><td>Core</td></tr>
                        <tr><td>SCS1112</td><td>DSA</td><td>Core</td></tr>
                        <tr><td>SCS1113</td><td>Software Engineering</td><td>Core</td></tr>

                        <tbody id="courses-extra" class="hidden">
                            <tr><td>SCS1114</td><td>Database Systems</td><td>Core</td></tr>
                            <tr><td>SCS1115</td><td>AI</td><td>Core</td></tr>
                            <tr><td>SCS1116</td><td>Machine Learning</td><td>Core</td></tr>
                        </tbody>
                    </table>

                    <button onclick="toggleCourses()" id="courses-btn" class="bottom-btn-show-more">Show More</button>
                </div>

                <!-- FINANCIAL -->
                <div class="content-box">
                    <h3>Financial Details</h3>
                    <br>

                    <table>
                        <tr><td>Name</td><td form="student-form"><?php echo $current_student_first_name; ?> <?php echo $current_student_middle_name; ?> <?php echo $current_student_last_name; ?></td></tr>
                        <tr><td>ID</td><td form="student-form"><?php echo $current_student_id; ?></td></tr>
                        <tr><td>City</td><td form="student-form"><?php echo $current_city; ?></td></tr>
                        <tr><td>Country</td><td form="student-form"><?php echo $current_country; ?></td></tr>
                    </table>
                </div>

            </div>

        </section>

    </div>

</div>

<!-- JS replacement for React state -->
<script>
function toggleAside() {
    const aside = document.getElementById("sidebar");
    aside.style.display = aside.style.display === "none" ? "block" : "none";
}

function togglePersonal() {
    document.getElementById("personal-extra").classList.toggle("hidden");
    document.getElementById("personal-btn").textContent = document.getElementById("personal-extra").classList.contains("hidden") ? "Show More" : "Show Less";
}

function toggleAcademic() {
    document.getElementById("academic-extra").classList.toggle("hidden");
    document.getElementById("academic-btn").textContent = document.getElementById("academic-extra").classList.contains("hidden") ? "Show More" : "Show Less";
}

function toggleCourses() {
    document.getElementById("courses-extra").classList.toggle("hidden");
    document.getElementById("courses-btn").textContent = document.getElementById("courses-extra").classList.contains("hidden") ? "Show More" : "Show Less";
}
</script>

</body>
</html>