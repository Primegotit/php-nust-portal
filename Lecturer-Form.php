<?php
    require "config/config.php";
    session_start();
    

$correct_current_part = "";
$correct_course_code = "";
$correct_course_name = "";
$tablename = "";
    if(isset($_POST["lecturer-submit-btn"])) {
        $lecturer_id = $_POST["lecturer_id"] ?? '';
        $fullname = $_POST["fullname"] ?? '';
        $department = $_POST["department"] ?? '';
        $current_part = $_POST["current_part"] ?? '';
        $course_code = $_POST["course_code"] ?? '';
        $current_module = $_POST["current_module"] ?? '';
        $current_year = $_POST["current_year"] ?? '';


        
        $sql = "SHOW TABLES LIKE '" . strtolower($course_code) . "%'";
        $tableexists = mysqli_query($conn, $sql);

        while($row = mysqli_fetch_array($tableexists)) {
            $tablename = $row[0];
            $correct_current_part = $current_part;
            $correct_course_code = $course_code;
            $correct_course_name = $current_module;


            $_SESSION["tablename"] = $tablename;
            $_SESSION["current_part"] = $correct_current_part;
            $_SESSION["course_code"] = $correct_course_code;
            $_SESSION["course_name"] = $correct_course_name;
                        
        }


        

    }





?>

<?php
    require "config/config.php";

        
        if(isset($_POST["mark-save-btn"])) {
            $student_id = $_POST["student_id"] ?? '';
            $student_name = $_POST["student_name"] ?? '';
            $student_middle_name = $_POST["student_middle_name"] ?? '';
            $student_surname = $_POST["student_surname"] ?? '';
            $final_mark = $_POST["final_mark"] ?? '';
            $grade = $_POST["grade"] ?? '';

            $sql2 = "INSERT INTO " . $_SESSION["tablename"]. "  VALUES ('$student_id', '$student_name', '$student_middle_name', '$student_surname', '" . $_SESSION["current_part"] . "', '" . $_SESSION["course_code"] . "', '" . $_SESSION["course_name"] . "', '$final_mark', '$grade')";
            mysqli_query($conn, $sql2);

            echo "<script>alert('User results saved successfully!');</script>";
        
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lecturer Form</title>
    <link rel="stylesheet" href="global.css">
    <link rel="stylesheet" href="forms.css">
    <link rel="stylesheet" href="LecturerForm.css">

</head>
<body>

<div id="lecturer-form-container">

    <!-- TOP HEADER -->
    <nav id="top-heading">
        <h2>
            Lecturer Form <i class="fa fa-envelope"></i>
        </h2>
    </nav>

    <div id="bottom-border"></div>
       <div id=modules-info>
                    <h3 style="text-align:center;">Welcome ⚡</h3>
                    <br>
                    <p style="text-align:center;">This is where a lecturer enters their details first, then underneath there's a form to enter all student's mark</p>
        </div>

    <!-- MAIN CONTENT -->
    <div id="main-content-container">

        <h2 id="instr">
            <i class="fa fa-user"></i> Enter details
        </h2>
        <br>
        <form method="POST" action="">
            
            <section id="lecturer-field-container">
                <label for="lecturer-id">Lecturer ID</label>
                <input type="text" id="lecturer-id" name="lecturer_id" placeholder="Enter your Lecturer ID">
            </section>

            <section id="lecturer-field-container">
                <label for="fullname">Full Name</label>
                <input type="text" id="fullname" name="fullname" placeholder="Enter full name">
            </section>

            <section id="lecturer-field-container">
                <label for="department">Department</label>
                <select name="department" id="department">
                    <option value="">--Select Department--</option>
                    <option value="computer-science">Computer Science</option>
                    <option value="mathematics">Mathematics</option>
                    <option value="physics">Physics</option>
                </select>
            </section>

            <section id="lecturer-field-container">
                <label for="part">Current Part</label>
                <select name="current_part" id="part">
                    <option value="1.1">1.1</option>
                    <option value="1.2">1.2</option>
                    <option value="2.1">2.1</option>
                    <option value="2.2">2.2</option>
                    <option value="3.1">3.1</option>
                    <option value="3.2">3.2</option>
                    <option value="4.1">4.1</option>
                    <option value="4.2">4.2</option>
                </select>
            </section>

            <section id="lecturer-field-container">
                <label for="course_code">Course Code</label>
                <select id="course_code" name="course_code" placeholder="Enter course code">
                    <?php
                        require "config/config.php";
                        $sql = "SELECT course_code, course_name FROM tblmodules";
                        $result = mysqli_query($conn, $sql);
                        while($row = mysqli_fetch_assoc($result)) {
                            echo "<option value='" . $row['course_code'] . "'>" . $row['course_code'] . "</option>";
                        }
                    ?>

                </select>
            </section>

            <section id="lecturer-field-container">
                <label for="current_module">Current Module</label>
                <select name="current_module" id="current_module">
                    <?php
                        require "config/config.php";
                        $sql = "SELECT course_code, course_name FROM tblmodules";
                        $result = mysqli_query($conn, $sql);
                        while($row = mysqli_fetch_assoc($result)) {
                            echo "<option value='" . $row['course_name'] . "'>". $row['course_name'] . "</option>";
                        }
                    ?>

                </select>
            </section>

            <section id="lecturer-field-container">
                <label>Current Year</label>
                <input type="text" value="" id="yearBox" readonly><script>yearBox.value=new Date().getFullYear()</script>
            </section>
            <div id="lecturer-btn-container">
                    <button type="submit" name="lecturer-submit-btn"><i class="fa fa-save"></i>✅ Submit</button>
                    <button type="reset" name="lecturer-reset-btn"><i class="fa fa-undo"></i>🔄 Reset</button>
            </div>
        </form>

  

    </div>

    <div id="students-details-container">

        <div id="students-input-container">

            <h2>
                <i class="fa fa-file-text"></i> Student Details
            </h2>

            <form method="POST" action="">

                <section id="student-field-container">
                    <label for="student-id">Student ID</label>
                    <input type="text" id="student-id" name="student_id" placeholder="Enter Student ID">
                </section>

                <section id="student-field-container">
                    <label for="student-name">First Name</label>
                    <input type="text" id="student-name" value="" name="student_name" >
                </section>

                <section id="student-field-container">
                    <label for="student-middle-name">Middle Name</label>
                    <input type="text" id="student-middle-name" value="" name="student_middle_name" >
                </section>

                <section id="student-field-container">
                    <label for="student-surname">Surname</label>
                    <input type="text" id="student-surname" value="" name="student_surname" >
                </section>

                <section id="student-field-container">
                    <label>Current Part</label>
                    <input type="text" value="<?php echo $correct_current_part; ?>"  name="current_part">
                </section>

                <section id="student-field-container">
                    <label>Course Code</label>
                    <input type="text" value="<?php echo $correct_course_code; ?>"  name="course_code">
                </section>

                <section id="student-field-container">
                    <label>Course Name</label>
                    <input type="text" value="<?php echo $correct_course_name; ?>"  name="course_name">
                </section>

                <section id="student-field-container">
                    <label>Final Mark</label>
                    <input type="text" name="final_mark" value="" >
                </section>

                <section id="student-field-container">
                    <label>Grade</label>
                    <input type="text" value=""  name="grade">
                    <button name="generate-grade"><i class="fa fa-edit"></i>Generate Grade</button>

                </section>


                <div id="lecturer-btn-container">
                    <button name="mark-save-btn"><i class="fa fa-save" ></i>  ✅ Save </button>
                    <button name="mark-update-btn"><i class="fa fa-edit"></i> 🔧
                     Update </button>
                    <button name="mark-delete-btn><i class="fa fa-undo"></i> 🔄 Reset </button>
                </div>
            </form>

        </div>

        <!-- RIGHT SEARCH + TABLE -->
        <div id="students-info-container">

            <div id="student-search-container">

                <form method="POSt" action="">

                    <span>
                        <label>Search by</label>
                        <select name="search_criteria">
                            <option value="student_id">Student ID</option>
                            <option value="fullname">Full Name</option>
                            <option value="final_mark">Final Mark</option>
                            <option value="grade">Grade</option>
                        </select>
                    </span>

                    <span>
                        <label>Search For</label>
                        <input type="text" name="search_value" placeholder="Search for">
                    </span>

                    <div id="buttton-conn">
                        <button type="submit" name="btn-search"><i class="fa fa-search"></i>🔎 Search</button>
                        <button type="submit" name="btn-reset"><i class="fa fa-undo"></i>🔄 Reset</button>
                    </div>

                </form>
            </div>

            <div id="student-table-container">
                 <?php

                 if(isset($_POST["btn-reset"])) {
                    $sql2 = "SELECT * FROM " . $_SESSION["tablename"];

                 }

        if(isset($_POST["btn-search"])) {
            $search_criteria = $_POST["search_criteria"] ?? '';
            $search_value = $_POST["search_value"] ?? '';

            $sql2 = "SELECT * FROM " . $_SESSION["tablename"] . " WHERE " . $search_criteria . " LIKE '%" . $search_value . "%'";
        } else {
            $sql2 = "SELECT * FROM " . $_SESSION["tablename"];
        }

        
    require "config/config.php";

        echo "<table>";
                echo "<thead>";
                    echo "<tr>";
                        echo "<th>Student ID</th>";
                        echo "<th>First Name</th>";
                        echo "<th>Middle Name</th>";
                        echo "<th>Surname</th>";
                        echo "<th>Current Part</th>";
                        echo "<th>Course Code</th>";
                        echo "<th>Course Name</th>";
                        echo "<th>Final Mark</th>";
                        echo "<th>Grade</th>";
                    echo "</tr>";

                echo "</thead>";

                echo "<tbody>";
                    // $sql2 = "SELECT * FROM " . $_SESSION["tablename"];
                    $result = mysqli_query($conn, $sql2);
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                            echo "<td>" . $row["student_id"] . "</td>";
                            echo "<td>" . $row["student_first_name"] . "</td>";
                            echo "<td>" . $row["student_middle_name"] . "</td>";
                            echo "<td>" . $row["student_surname"] . "</td>";
                            echo "<td>" . $row["current_part"] . "</td>";
                            echo "<td>" . $row["course_code"] . "</td>";
                            echo "<td>" . $row["course_name"] . "</td>";
                            echo "<td>" . $row["final_mark"] . "</td>";
                            echo "<td>" . $row["grade"] . "</td>";
                        echo "</tr>";
                    }
                echo "</tbody>";

            echo "</table>";


    
    


    ?>
        

            </div>

        </div>

    </div>

</div>

</body>
</html>