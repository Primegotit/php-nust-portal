
<?php
    require "config/config.php";
        $student_id = "";
        $module1 = "";
        $module2 = "";
        $module3 = "";
        $module4 = "";
        $module5 = "";
        $module6 = "";
        $module7 = "";
        $module8 = "";

        
        if(isset($_POST["mark-save-btn"])) {
            $student_id = $_POST["student_id"] ?? '';
            $module1 = $_POST["module1"] ?? '';
            $module2 = $_POST["module2"] ?? '';
            $module3 = $_POST["module3"] ?? '';
            $module4 = $_POST["module4"] ?? '';
            $module5 = $_POST["module5"] ?? '';
            $module6 = $_POST["module6"] ?? '';
            $module7 = $_POST["module7"] ?? '';
            $module8 = $_POST["module8"] ?? '';
            $sql2 = "INSERT INTO tblregister VALUES ('$student_id', '$module1', '$module2', '$module3', '$module4', '$module5', '$module6', '$module7', '$module8')";
            mysqli_query($conn, $sql2);

            echo "<script>alert('Registration successfull!');</script>";
        
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register form</title>
    <link rel="stylesheet" href="LecturerForm.css">
    <link rel="stylesheet" href="global.css">
    <link rel="stylesheet" href="forms.css">
</head>
<body>

<div id="lecturer-form-container">

    <!-- TOP HEADER -->
    <nav id="top-heading">
        <h2>
            Register courses<i class="fa fa-envelope"></i>
        </h2>
    </nav>

    <div id="bottom-border"></div>

    <div id=modules-info>
                    <h3 style="text-align:center;">Welcome ⚡</h3>
                    <br>
                    <p style="text-align:center;">This is a registration form where an admin can register new students or a students can register their own modules</p>
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
                    <label for="course_code">Module 1</label>
                    <select id="course_code" name="module1" placeholder="Enter course code">
                        <?php
                            require "config/config.php";
                            $sql = "SELECT course_code, course_name FROM tblmodules";
                            $result = mysqli_query($conn, $sql);
                            while($row = mysqli_fetch_assoc($result)) {
                                echo "<option value='" . $row['course_code'] . " " . $row['course_name'] . "'>" . $row['course_code'] . " " . $row['course_name'] . "</option>";
                            }
                        ?>

                    </select>
                </section>

                <section id="student-field-container">
                    <label for="course_code">Module 2</label>
                    <select id="course_code" name="module2" placeholder="Enter course code">
                        <?php
                            require "config/config.php";
                            $sql = "SELECT course_code, course_name FROM tblmodules";
                            $result = mysqli_query($conn, $sql);
                            while($row = mysqli_fetch_assoc($result)) {
                                echo "<option value='" . $row['course_code'] . " " . $row['course_name'] . "'>" . $row['course_code'] . " " . $row['course_name'] . "</option>";

                            }
                        ?>

                    </select>
                </section>

                <section id="student-field-container">
                    <label for="course_code">Module 3</label>
                    <select id="course_code" name="module3" placeholder="Enter course code">
                        <?php
                            require "config/config.php";
                            $sql = "SELECT course_code, course_name FROM tblmodules";
                            $result = mysqli_query($conn, $sql);
                            while($row = mysqli_fetch_assoc($result)) {
                                echo "<option value='" . $row['course_code'] . " " . $row['course_name'] . "'>" . $row['course_code'] . " " . $row['course_name'] . "</option>";

                            }
                        ?>

                    </select>
                </section>

                <section id="student-field-container">
                    <label for="course_code">Module 4</label>
                    <select id="course_code" name="module4" placeholder="Enter course code">
                        <?php
                            require "config/config.php";
                            $sql = "SELECT course_code, course_name FROM tblmodules";
                            $result = mysqli_query($conn, $sql);
                            while($row = mysqli_fetch_assoc($result)) {
                                echo "<option value='" . $row['course_code'] . " " . $row['course_name'] . "'>" . $row['course_code'] . " " . $row['course_name'] . "</option>";

                            }
                        ?>

                    </select>
                </section>

                <section id="student-field-container">
                    <label for="course_code">Module 5</label>
                    <select id="course_code" name="module5" placeholder="Enter course code">
                        <?php
                            require "config/config.php";
                            $sql = "SELECT course_code, course_name FROM tblmodules";
                            $result = mysqli_query($conn, $sql);
                            while($row = mysqli_fetch_assoc($result)) {
                                echo "<option value='" . $row['course_code'] . " " . $row['course_name'] . "'>" . $row['course_code'] . " " . $row['course_name'] . "</option>";

                            }
                        ?>

                    </select>
                </section>

                <section id="student-field-container">
                    <label for="course_code">Module 6</label>
                    <select id="course_code" name="module6" placeholder="Enter course code">
                        <?php
                            require "config/config.php";
                            $sql = "SELECT course_code, course_name FROM tblmodules";
                            $result = mysqli_query($conn, $sql);
                            while($row = mysqli_fetch_assoc($result)) {
                                echo "<option value='" . $row['course_code'] . " " . $row['course_name'] . "'>" . $row['course_code'] . " " . $row['course_name'] . "</option>";

                            }
                        ?>

                    </select>
                </section>

                <section id="student-field-container">
                    <label for="course_code">Module 7</label>
                    <select id="course_code" name="module7" placeholder="Enter course code">
                        <?php
                            require "config/config.php";
                            $sql = "SELECT course_code, course_name FROM tblmodules";
                            $result = mysqli_query($conn, $sql);
                            while($row = mysqli_fetch_assoc($result)) {
                                echo "<option value='" . $row['course_code'] . " " . $row['course_name'] . "'>" . $row['course_code'] . " " . $row['course_name'] . "</option>";

                            }
                        ?>

                    </select>
                </section>

                <section id="student-field-container">
                    <label for="course_code">Module 8</label>
                    <select id="course_code" name="module8" placeholder="Enter course code">
                        <?php
                            require "config/config.php";
                            $sql = "SELECT course_code, course_name FROM tblmodules";
                            $result = mysqli_query($conn, $sql);
                            while($row = mysqli_fetch_assoc($result)) {
                                echo "<option value='" . $row['course_code'] . " " . $row['course_name'] . "'>" . $row['course_code'] . " " . $row['course_name'] . "</option>";

                            }
                        ?>

                    </select>
                </section>


                <div id="lecturer-btn-container">
                    <button name="mark-save-btn"><i class="fa fa-save" ></i> Save</button>
                    <button><i class="fa fa-edit"></i> Update</button>
                    <button><i class="fa fa-undo"></i> Reset</button>
                </div>
            </form>

        </div>

        <!-- RIGHT SEARCH + TABLE -->
        <div id="students-info-container">

            
            <div id="student-table-container">
                 <?php

        
    require "config/config.php";



        echo "<table>";
                echo "<thead>";
                    echo "<tr>";
                        echo "<th>Student ID</th>";
                        echo "<th>Module 1</th>";
                        echo "<th>Module 2</th>";
                        echo "<th>Module 3</th>";
                        echo "<th>Module 4</th>";
                        echo "<th>Module 5</th>";
                        echo "<th>Module 6</th>";
                        echo "<th>Module 7</th>";
                        echo "<th>Module 8</th>";
                    echo "</tr>";

                echo "</thead>";

                echo "<tbody>";
                    $sql2 = "SELECT * FROM tblregister";
                    $result = mysqli_query($conn, $sql2);
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                            echo "<td>" . $row["student_id"] . "</td>";
                            echo "<td>" . $row["module_1"] . "</td>";
                            echo "<td>" . $row["module_2"] . "</td>";
                            echo "<td>" . $row["module_3"] . "</td>";
                            echo "<td>" . $row["module_4"] . "</td>";
                            echo "<td>" . $row["module_5"] . "</td>";
                            echo "<td>" . $row["module_6"] . "</td>";
                            echo "<td>" . $row["module_7"] . "</td>";
                            echo "<td>" . $row["module_8"] . "</td>";
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