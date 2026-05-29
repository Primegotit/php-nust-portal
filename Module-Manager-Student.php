<?php

    require "config/config.php";
    
        if(isset($_POST['btn-save-module'])) {
            $course_code = $_POST['course_code'] ?? '';
            $course_name = $_POST['course_name'] ?? '';
            $lecturer_id = $_POST['lecturer_id'] ?? '';
            $lecturer_name = $_POST['lecturer_name'] ?? '';
            $lecturer_middle_name = $_POST['lecturer_middle_name'] ?? '';
            $lecturer_surname = $_POST['lecturer_surname'] ?? '';
            $department = $_POST['department'] ?? '';
            $table_name = $course_code . '_' . $course_name;
            $table_name = str_replace(' ', '_', $table_name);

            $sql = "INSERT INTO tblmodules VALUES ('$course_code', '$course_name', '$lecturer_id', '$lecturer_name', '$lecturer_middle_name', '$lecturer_surname', '$department')";
            mysqli_query($conn, $sql);


            $sql_create_table = "
                    CREATE TABLE IF NOT EXISTS ". strip_tags(htmlspecialchars($table_name))."(
                        student_id VARCHAR(50) PRIMARY KEY ,
                        student_first_name VARCHAR(50) NOT NULL ,
                        student_middle_name VARCHAR(50) ,
                        student_surname VARCHAR(50) NOT NULL ,
                        current_part VARCHAR(10) NOT NULL ,
                        course_code VARCHAR(50) NOT NULL,
                        course_name VARCHAR(255) NOT NULL,
                        final_mark VARCHAR(10),
                        grade VARCHAR(5) 
                    )

            ";
            mysqli_query($conn, $sql_create_table);

            echo "<script>alert('Module saved successfully!');</script>";
        }
if(isset($_POST['btn-delete-module'])) {

    $course_code = trim($_POST['course_code'] ?? '');
    $course_name = trim($_POST['course_name'] ?? '');

    // Create table name
    $table_name = strtolower($course_code . '_' . $course_name);

    // Replace spaces with underscores
    $table_name = str_replace(' ', '_', $table_name);

    // Delete module record
    $sql = "DELETE FROM tblmodules 
            WHERE course_code='$course_code' 
            AND course_name='$course_name'";

    if(mysqli_query($conn, $sql)) {

        // Drop table
        $sql_drop_table = "DROP TABLE IF EXISTS `$table_name`";

        if(mysqli_query($conn, $sql_drop_table)) {

            echo "<script>alert('Module deleted successfully!');</script>";

        } else {

            echo mysqli_error($conn);
        }

    } else {

        echo mysqli_error($conn);
    }
}


if(isset($_POST['btn-reset'])) {
       header("Location: " . $_SERVER['PHP_SELF']);
        exit();  
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Module Manager</title>
    <link rel="stylesheet" href="global.css">
    <link rel="stylesheet" href="Module-manager.css">

    <link rel="stylesheet" href="forms.css">
    <style>
        #modules-info{
            padding:20px;
            border-bottom:4px solid var(--primary-color);
        }

        #modules-info h3{
            font-size:30px;
        }


        #module-manager-table-container{
            padding:20px;
        }
    </style>

</head>
<body>

<div id="module-manager-form">

    <!-- TOP HEADER -->
    <nav id="top-heading">
        <h2>
            Module Manager <i class="fa fa-search"></i>
        </h2>
    </nav>

    <div id="bottom-border"></div>


        <div id=modules-info>
            <h3>Welcome🌟</h3>
            <br>
            <p>This shows you basic information about the modules you either did or will do in the future.</p>
        </div>

        <div id="module-manager-table-container">
        <?php

            
            require "config/config.php";



            echo "<table>";
                    echo "<thead>";
                        echo "<tr>";
                            echo "<th>Course Code</th>";
                            echo "<th>Course Name</th>";
                            echo "<th>Lecturer ID</th>";
                            echo "<th>Lecturer Name</th>";
                            echo "<th>Lecturer Middle Name</th>";
                            echo "<th>Lecturer Surname</th>";
                            echo "<th>Department</th>";
                        echo "</tr>";

                    echo "</thead>";

                    echo "<tbody>";
                        $sql2 = "SELECT * FROM tblmodules";
                        $result = mysqli_query($conn, $sql2);
                        while($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                                echo "<td>" . $row["course_code"] . "</td>";
                                echo "<td>" . $row["course_name"] . "</td>";
                                echo "<td>" . $row["lecturer_id"] . "</td>";
                                echo "<td>" . $row["lecturer_name"] . "</td>";
                                echo "<td>" . $row["lecturer_middle_name"] . "</td>";
                                echo "<td>" . $row["lecturer_surname"] . "</td>";
                                echo "<td>" . $row["department"] . "</td>";
                            echo "</tr>";
                        }
                    echo "</tbody>";

                echo "</table>";

        ?>

        </div>

    </div>

</div>

</body>
</html>