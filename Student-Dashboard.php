<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Dashboard</title>
    <link rel="stylesheet" href="Student-Dashboard.css">
    <link rel="stylesheet" href="global.css">
    <link rel="stylesheet" href="forms.css">
     
</head>
<body>

<div id="student-dashboard-page">

    <!-- HEADER -->
    <header>
        <div id="header-things">

            <div id="left-top-container">
                <button onclick="toggleAside()">
                    <i class="fa fa-bars"></i>
                </button>

                <h3>
                    STUDENT PORTAL
                    <img src="/logo_nust_png.png" id="uni-logo">
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
                <img src="/me1.png" id="student-dp">
                <h4>N02528961Y</h4>
                <h4>Promise Siafwiyo</h4>
            </div>

            <button>Portal Dashboard</button>
            <button>New Registration</button>
            <button>Payments History</button>
            <button>Continuous Assessment</button>
            <button>Examinations Results</button>
            <button>Modules Information</button>
        </aside>

        <!-- CONTENT -->
        <section id="content-container">

            <!-- PERSONAL + ACADEMIC -->
            <div id="person-and-financial-box">

                <!-- PERSONAL -->
                <div class="content-box">
                    <h3>Personal Information</h3>

                    <table>
                        <tr><td>Name</td><td>Promise Siafwiyo</td></tr>
                        <tr><td>ID Number</td><td>08-9905455555</td></tr>
                        <tr><td>City</td><td>Bulawayo, Nkulumane</td></tr>
                        <tr><td>Country</td><td>Zimbabwe</td></tr>

                        <tbody id="personal-extra" class="hidden">
                            <tr><td>Gender</td><td>Male</td></tr>
                            <tr><td>Date of Birth</td><td>05-04-2005</td></tr>
                            <tr><td>Place of Birth</td><td>Zimbabwe</td></tr>
                        </tbody>
                    </table>

                    <button onclick="togglePersonal()">Show More</button>
                </div>

                <!-- ACADEMIC -->
                <div class="content-box">
                    <h3>Academic Details</h3>

                    <table>
                        <tr><td>Student Number</td><td>N02528961Y</td></tr>
                        <tr><td>Programme</td><td>Computer Science</td></tr>
                        <tr><td>Year</td><td>2026</td></tr>
                        <tr><td>Part</td><td>2.1</td></tr>

                        <tbody id="academic-extra" class="hidden">
                            <tr><td>Semester</td><td>1</td></tr>
                        </tbody>
                    </table>

                    <button onclick="toggleAcademic()">Show More</button>
                </div>

            </div>

            <!-- COURSES + FINANCE -->
            <div id="reg-and-academic-box">

                <!-- COURSES -->
                <div class="content-box">
                    <h3>Registered Courses</h3>

                    <table border="1">
                        <tr><th>Code</th><th>Name</th><th>Type</th></tr>

                        <tr><td>SCS1111</td><td>Intro CS</td><td>Core</td></tr>
                        <tr><td>SCS1112</td><td>DSA</td><td>Core</td></tr>
                        <tr><td>SCS1113</td><td>Software Engineering</td><td>Core</td></tr>

                        <tbody id="courses-extra" class="hidden">
                            <tr><td>SCS1114</td><td>Database Systems</td><td>Core</td></tr>
                            <tr><td>SCS1115</td><td>AI</td><td>Core</td></tr>
                            <tr><td>SCS1116</td><td>Machine Learning</td><td>Core</td></tr>
                        </tbody>
                    </table>

                    <button onclick="toggleCourses()">Show More</button>
                </div>

                <!-- FINANCIAL -->
                <div class="content-box">
                    <h3>Financial Details</h3>

                    <table>
                        <tr><td>Name</td><td>Promise Siafwyo</td></tr>
                        <tr><td>ID</td><td>08-9905455555</td></tr>
                        <tr><td>City</td><td>Bulawayo</td></tr>
                        <tr><td>Country</td><td>Zimbabwe</td></tr>
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
}

function toggleAcademic() {
    document.getElementById("academic-extra").classList.toggle("hidden");
}

function toggleCourses() {
    document.getElementById("courses-extra").classList.toggle("hidden");
}
</script>

</body>
</html>