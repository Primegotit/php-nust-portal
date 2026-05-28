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

                                <th>
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

                                <th>
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

            <!-- RESULTS TABLE -->
            <div id="students-results-table-container">

                <section id="examination-heading">

                    <h2>📊 Examination Results</h2>

                    <span>
                        <button onclick="takeScreenshot()">Screenshot</button>
                        <button onclick="window.print()">Print</button>
                    </span>

                </section>

                <section id="exam-table-con">

                    <table>

                        <thead>
                            <tr>
                                <th>Academic Year</th>
                                <th>Semester & Part</th>
                                <th>Course Code</th>
                                <th>Course Name</th>
                                <th>Mark</th>
                                <th>Classification</th>
                            </tr>
                        </thead>

                        <tbody>

                            <tr>
                                <td>2026</td>
                                <td>2.1</td>
                                <td>SCS2104</td>
                                <td>Web Development</td>
                                <td>78</td>
                                <td>1</td>
                            </tr>

                            <tr>
                                <td>2026</td>
                                <td>2.1</td>
                                <td>SCS2100</td>
                                <td>Introduction to Statistics</td>
                                <td>78</td>
                                <td>1</td>
                            </tr>

                            <tr>
                                <td>2026</td>
                                <td>2.1</td>
                                <td>SCS2101</td>
                                <td>Database Systems</td>
                                <td>81</td>
                                <td>1</td>
                            </tr>

                            <tr>
                                <td>2026</td>
                                <td>2.1</td>
                                <td>SCS2102</td>
                                <td>Operating Systems</td>
                                <td>75</td>
                                <td>1</td>
                            </tr>

                        </tbody>

                    </table>

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
```
