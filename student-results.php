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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Results</title>
    <link rel="stylesheet" href="Student-Results.css">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="forms.css">
    <link rel="stylesheet" href="globa;.css">

</head>
<body>

    <div id="student-results-container">

        <nav id="top-heading">
            <h2>Student Results 🔍</h2>
        </nav>

        <div id="bottom-border"></div>

        <div id="student-results-envelope">

            <!-- PERSONAL INFO -->
            <div id="student-results-personal-info">

                <section>
                    <h2>👤 Personal Information</h2>
                </section>

                <section id="results-table-con">

                    <table>
                        <thead>

                            <tr>

                                <th id="image-con">
                                    <img src="./public/logo_nust_png.png" alt="NUST Logo" id="nust-logo">
                                </th>

                                <th id="th1">
                                    <table>
                                        <tr>
                                            <td>National ID : <?php echo $current_national_id; ?></td>
                                        </tr>

                                        <tr>
                                            <td>Name : <?php echo $current_student_first_name . " " . $current_student_middle_name . " " . $current_student_last_name; ?></td>
                                        </tr>

                                        <tr>
                                            <td>Department : <?php echo $current_department; ?></td>
                                        </tr>

                                        <tr>
                                            <td>DOB : <?php echo $current_dob; ?></td>
                                        </tr>

                                        <tr>
                                            <td>Gender : <?php echo $current_gender; ?></td>
                                        </tr>

                                        <tr>
                                            <td>Degree : <?php echo $current_degree; ?></td>
                                        </tr>
                                    </table>
                                </th>

                                <th id="th1">
                                    <table>

                                        <tr>
                                            <td>Student Number : <?php echo $current_student_id; ?></td>
                                        </tr>

                                        <tr>
                                            <td>Country : <?php echo $current_country; ?></td>
                                        </tr>

                                        <tr>
                                            <td>City : <?php echo $current_city; ?></td>
                                        </tr>

                                        <tr>
                                            <td>Address : <?php echo $current_address; ?></td>
                                        </tr>

                                        <tr>
                                            <td>Phone Number : <?php echo $current_phone_number; ?></td>
                                        </tr>

                                    </table>
                                </th>

                            </tr>

                        </thead>
                    </table>

                </section>

            </div>

            <div id="students-results-table-container">

                <section id="examination-heading">

                    <h2>📊 Examination Results</h2>

                    <span>
                        <button onclick="takeScreenshot()">Screenshot</button>
                        <button onclick="window.print()">Print</button>
                    </span>

                </section>

                <section id="exam-table-con">
<?php

echo "<table border='1'>";
echo "<thead>";
echo "<tr>";
echo "<th>Academic Year</th>";
echo "<th>Semester & Part</th>";
echo "<th>Course</th>";
echo "<th>Mark</th>";
echo "<th>Classification</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";

require "config/config.php";

$sql = "SELECT * FROM tblregister WHERE student_id = '$current_student_id'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) == 1) {

    $row = mysqli_fetch_assoc($result);

    // number of module columns
    for($x = 1; $x <= 10; $x++) {

        if(isset($row["module_" . $x])) {

            $current_course_full_name = trim($row["module_" . $x]);

            if($current_course_full_name != "") {

                // RESET VARIABLES
                $tablename = "";
                $final_mark = "";
                $grade = "";

                // GET MODULE CODE
                // Example: "SCS2105 Calculus"
                // Result: "scs2105"
                $parts = explode(" ", $current_course_full_name);
                $module_code = strtolower($parts[0]);

                // FIND EXACT TABLE
                $sql_table = "SHOW TABLES LIKE '$module_code%'";
                $tableexists = mysqli_query($conn, $sql_table);

                if(mysqli_num_rows($tableexists) > 0) {

                    $table_row = mysqli_fetch_array($tableexists);
                    $tablename = $table_row[0];

                    // GET RESULTS
                    $sql_get_results = "SELECT * FROM $tablename WHERE student_id = '$current_student_id'";
                    $result_get_results = mysqli_query($conn, $sql_get_results);

                    if(mysqli_num_rows($result_get_results) > 0) {

                        $result_row = mysqli_fetch_assoc($result_get_results);

                        $final_mark = $result_row["final_mark"];
                        $grade = $result_row["grade"];
                    }
                }

                // DISPLAY
                echo "<tr>";
                echo "<td>" . date("Y") . "</td>";
                echo "<td>" . $current_part . "</td>";
                echo "<td>" . $current_course_full_name . "</td>";
                echo "<td>" . $final_mark . "</td>";
                echo "<td>" . $grade . "</td>";
                echo "</tr>";
            }
        }
    }
}

echo "</tbody>";
echo "</table>";

?>
                    
                </section>

            </div>

        </div>

    </div>

    <script>

        function takeScreenshot() {
            alert("Screenshot feature coming soon.");
        }

    </script>

</body>
</html>
