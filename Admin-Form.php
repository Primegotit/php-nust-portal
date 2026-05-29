<?php
   
    require "config/config.php";

    if(isset($_POST['btn-delete'])) {
    }

    if(isset($_POST['btn-update'])) {
    }

    if(isset($_POST['btn-reset'])) {
      header("Location: " . $_SERVER['PHP_SELF']);
        exit();  
    }

    if(isset($_POST['btn-save'])) {
        $nationalID = $_POST['national-id'];
        $firstName = $_POST['first-name'];
        $middleName = $_POST['middle-name'];
        $lastName = $_POST['last-name'];
        $gender = $_POST['gender'];
        $dob = $_POST['dob'];
        $country = $_POST['country'];
        $city = $_POST['city'];
        $address = $_POST['address'];
        $phoneNumber = $_POST['phone-number'];
        $email = $_POST['email'];
        $department = $_POST['department'];
        $degree = $_POST['degree'];
        $studentID = $_POST['student-id'];
        $password = $_POST['password'];



        $sql = "INSERT INTO tblstudents 
            VALUES ('$nationalID', '$firstName', '$middleName', '$lastName', '$gender', '$dob', '$country', '$city', '$address', '$phoneNumber', '$email', '$department', '$degree', '$studentID', '$password')"; 

        mysqli_query($conn, $sql);
        // header("Location: " . $_SERVER['PHP_SELF']);
        // exit();
        echo "<script>alert('Student information saved successfully!');</script>";
    }

    if(isset($_POST['btn-update'])) {
        $nationalID = $_POST['national-id'];
        $firstName = $_POST['first-name'];
        $middleName = $_POST['middle-name'];
        $lastName = $_POST['last-name'];
        $gender = $_POST['gender'];
        $dob = $_POST['dob'];
        $country = $_POST['country'];
        $city = $_POST['city'];
        $address = $_POST['address'];
        $phoneNumber = $_POST['phone-number'];
        $email = $_POST['email'];
        $department = $_POST['department'];
        $degree = $_POST['degree'];
        $studentID = $_POST['student-id'];
        $password = $_POST['password'];



        $sql = "UPDATE tblstudents 
            SET first_name='$firstName', middle_name='$middleName', last_name='$lastName', gender='$gender', dob='$dob', country='$country', city='$city', address='$address', phone_number='$phoneNumber', email='$email', department='$department', degree='$degree', student_id='$studentID', password='$password' 
            WHERE national_id='$nationalID'"; 

        mysqli_query($conn, $sql);
        // header("Location: " . $_SERVER['PHP_SELF']);
        // exit();
        echo "<script>alert('Student information updated successfully!');</script>";
    }

    if(isset($_POST['btn-delete'])) {
        $nationalID = $_POST['national-id'];

        $sql = "DELETE FROM tblstudents WHERE national_id='$nationalID'"; 

        mysqli_query($conn, $sql);
        // header("Location: " . $_SERVER['PHP_SELF']);
        // exit();
        echo "<script>alert('Student information deleted successfully!');</script>";
    }

    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Form</title>
    <link rel="stylesheet" href="Admin-Form.css">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="global.css">
    <link rel="stylesheet" href="forms.css">
</head>

<body>

<div id="Admin-form-page">

    <!-- TOP HEADING -->
    <div id="top-heading">
        <h2>Admin Form 📧</h2>
    </div>

    <div id="bottom-border"></div>

    <main>

        <!-- FORM SECTION -->
        <section id="input-form-container">

            <!-- PERSONAL DETAILS -->
            <form id="student-personal-details" name="student-personal-details" method="post">

                <div id="personal-heading">
                    <h2>👤 Personal Details</h2>
                </div>

                <div id="input-field-container">

                    <div class="input-field">
                        <label>National ID</label>
                        <input type="text" placeholder="National ID" name="national-id" form="student-personal-details">
                    </div>

                    <div class="input-field">
                        <label>First Name</label>
                        <input type="text" placeholder="First Name" name="first-name" form="student-personal-details">
                    </div>

                    <div class="input-field">
                        <label>Middle Name</label>
                        <input type="text" placeholder="(Optional)" name="middle-name" form="student-personal-details">
                    </div>

                    <div class="input-field">
                        <label>Last Name</label>
                        <input type="text" placeholder="Last Name" name="last-name" form="student-personal-details">
                    </div>

                    <div class="input-field">
                        <label>Gender</label>
                        <select name="gender" form="student-personal-details">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>

                    <div class="input-field">
                        <label>DOB</label>
                        <input type="date" name="dob" form="student-personal-details">
                    </div>

                    <div class="input-field">
                        <label>Country</label>
                        <input type="text" placeholder="Country" name="country" form="student-personal-details">
                    </div>

                    <div class="input-field">
                        <label>City</label>
                        <input type="text" placeholder="City" name="city" form="student-personal-details">
                    </div>

                    <div class="input-field">
                        <label>Address</label>
                        <input type="text" placeholder="Address" name="address" form="student-personal-details">
                    </div>

                    <div class="input-field">
                        <label>Phone Number</label>
                        <input type="tel" placeholder="Phone Number" name="phone-number" form="student-personal-details">
                    </div>

                    <div class="input-field">
                        <label>Email</label>
                        <input type="email" placeholder="Email" name="email" form="student-personal-details">
                    </div>

                </div>

            </form>

            <!-- ENROLLMENT INFORMATION -->
            <form id="student-enrollment-information" name="student-personal-details" method="post">

                <div id="personal-heading">
                    <h2>Enrollment Information 🚪</h2>
                </div>

                <div id="input-field-container">

                    <div class="input-field">
                        <label>Select Department</label>

                        <select name="department" form="student-personal-details">
                            <option value="">-- Select Department --</option>
                            <option value="computer_science">Department of Computer Science</option>
                            <option value="mathematics">Department of Mathematics</option>
                            <option value="physics">Department of Physics</option>
                        </select>
                    </div>

                    <div class="input-field">

                        <label>Select Degree</label>

                        <select name="degree" form="student-personal-details">
                            <option value="">-- Select Degree --</option>
                            <option value="bachelor">Bachelor's Degree in Computer Science</option>
                            <option value="master">Bachelor's Degree in Mathematics</option>
                            <option value="engineering">Bachelor's Degree in Electrical Engineering</option>
                            <option value="informatics">Bachelor's Degree in Informatics</option>
                            <option value="physics">Bachelor's Degree in Physics</option>
                        </select>

                    </div>

                    <div class="input-field">

                        <label>Auto Generate Student Number</label>

                        <input type="text"
                               id="student-id"
                               placeholder="Student Number will be generated automatically"
                               name="student-id"
                               form="student-personal-details"
                               readonly>

                        <br>

                        <button type="button" onclick="generateStudentID()" >
                            🔀 Generate Student ID
                        </button>

                    </div>

                    <div class="input-field">

                        <label>Auto Generate Password for Portal</label>

                        <input type="text"
                               id="password"
                               placeholder="Password will be generated automatically"
                               name="password"
                               form="student-personal-details"
                               readonly>

                        <br>

                        <button type="button" onclick="generatePassword()">
                            🔀 Generate Password
                        </button>

                    </div>

                </div>

            </form>

            <!-- BUTTON CONTAINER -->
            <div id="button-container">

                <form method="post">

                    <h2 style="font-size:17px; font-weight:300;">
                        Choose an operation
                    </h2>

                    <span>
                        <button id="btn-save" class="btn2" name="btn-save" form="student-personal-details">💾 Save</button>
                        <button id="btn-update" class="btn2" name="btn-update" form="student-personal-details">✏️ Update</button>
                        <button id="btn-delete" class="btn2" name="btn-delete" form="student-personal-details">🗑️ Delete</button>
                        <button id="btn-reset" class="btn2" name="btn-reset" form="student-personal-details">↩ Reset</button>
                    </span>

                </form>

                <!-- SEARCH SECTION -->
                <div id="search-container">

                    <div id="search-inputs">

                        <span>

                            <div class="input-field">

                                <label>Search using</label>

                                <select name="search-criteria" form="student-personal-details">

                                    <option value="">-- Select Search Criteria --</option>
                                    <option value="student_id">Student ID</option>
                                    <option value="national_id">National ID</option>
                                    <option value="first_name">First Name</option>
                                    <option value="middle_name">Middle Name</option>
                                    <option value="last_name">Last Name</option>
                                    <option value="gender">Gender</option>
                                    <option value="dob">DOB</option>    
                                    <option value="country">Country</option>
                                    <option value="city">City</option>
                                    <option value="address">Address</option>
                                    <option value="phone_number">Phone Number</option>
                                    <option value="email">Email</option>
                                    <option value="department">Department</option>
                                    <option value="degree">Degree</option>


                                </select>

                            </div>

                        </span>

                        <span>

                            <label>Search for</label>

                            <input type="text" form="student-personal-details"
                                   placeholder="Enter what you are looking for" name="search-query">

                        </span>

                    </div>

                    <button id="search-btn" type="submit" name="btn-search" form="student-personal-details">
                        🔍 Search
                    </button>
                    <button id="search-btn" class="btn2" name="btn-reset" form="student-personal-details">↩ Reset</button>


                </div>

            </div>

        </section>

        <!-- TABLE SECTION -->
        <section id="information-table-container">
<?php



            require "config/config.php";

            if(isset($_POST['btn-search']) ) {

            $searchCriteria = $_POST['search-criteria'] ?? '';
            $searchQuery = $_POST['search-query'] ?? '';

            // Allowed searchable columns
            $allowedColumns = [
                "national_id",
                "first_name",
                "middle_name",
                "last_name",
                "gender",
                "dob",
                "country",
                "city",
                "address",
                "phone_number",
                "department",
                "degree",
                "student_id",
                "email"
            ];

            // Validate selected column
            if(in_array($searchCriteria, $allowedColumns)) {

                $sql = "SELECT * FROM tblstudents 
                        WHERE $searchCriteria LIKE '%$searchQuery%'";

                $result = mysqli_query($conn, $sql);

            } else {

                $result = false;
            }

            } else {

            // Default query (show all students)
            $sql = "SELECT * FROM tblstudents";
            $result = mysqli_query($conn, $sql);
            }

            echo "<table>";

            echo "<thead>";
            echo "<tr>";
            echo "<th>National ID</th>";
            echo "<th>First Name</th>";
            echo "<th>Middle Name</th>";
            echo "<th>Last Name</th>";
            echo "<th>Gender</th>";
            echo "<th>DOB</th>";
            echo "<th>Country</th>";
            echo "<th>City</th>";
            echo "<th>Address</th>";
            echo "<th>Phone Number</th>";
            echo "<th>Email</th>";
            echo "<th>Department</th>";
            echo "<th>Degree</th>";
            echo "<th>Student ID</th>";
            echo "<th>Password</th>";
            echo "</tr>";
            echo "</thead>";

            echo "<tbody>";

            if($result && mysqli_num_rows($result) > 0) {

            while($row = mysqli_fetch_assoc($result)) {

                echo "<tr>";

                    echo "<td>" . $row["national_id"] . "</td>";
                    echo "<td>" . $row["first_name"] . "</td>";
                    echo "<td>" . $row["middle_name"] . "</td>";
                    echo "<td>" . $row["last_name"] . "</td>";
                    echo "<td>" . $row["gender"] . "</td>";
                    echo "<td>" . $row["dob"] . "</td>";
                    echo "<td>" . $row["country"] . "</td>";
                    echo "<td>" . $row["city"] . "</td>";
                    echo "<td>" . $row["address"] . "</td>";
                    echo "<td>" . $row["phone_number"] . "</td>";
                    echo "<td>" . $row["email"] . "</td>";
                    echo "<td>" . $row["department"] . "</td>";
                    echo "<td>" . $row["degree"] . "</td>";
                    echo "<td>" . $row["student_id"] . "</td>";
                    echo "<td>" . $row["password"] . "</td>";

                echo "</tr>";
            }

            } else {

            echo "<tr>";
            echo "<td colspan='15'>No students found.</td>";
            echo "</tr>";
            }

            echo "</tbody>";
            echo "</table>";

?>

    

        </section>

    </main>

</div>

<script>

    function generateStudentID() {

        let randomID = "CS" + Math.floor(Math.random() * 1000000);

        document.getElementById("student-id").value = randomID;
    }

    function generatePassword() {

        let password =
            Math.random().toString(36).slice(-8);

        document.getElementById("password").value = password;
    }

</script>




</body>
</html>
```
