<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Form</title>
    <link rel="stylesheet" href="Admin-Form.css">
    <link rel="stylesheet" href="global .css">
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
            <form id="Student-personal-details" name="student-personal-details" method="post">

                <div id="personal-heading">
                    <h2>👤 Personal Details</h2>
                </div>

                <div id="input-field-container">

                    <div class="input-field">
                        <label>National ID</label>
                        <input type="text" placeholder="National ID" name="national-id">
                    </div>

                    <div class="input-field">
                        <label>First Name</label>
                        <input type="text" placeholder="First Name" name="first-name">
                    </div>

                    <div class="input-field">
                        <label>Middle Name</label>
                        <input type="text" placeholder="(Optional)" name="middle-name">
                    </div>

                    <div class="input-field">
                        <label>Last Name</label>
                        <input type="text" placeholder="Last Name" name="last-name">
                    </div>

                    <div class="input-field">
                        <label>Gender</label>
                        <select name="gender">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>

                    <div class="input-field">
                        <label>DOB</label>
                        <input type="date" name="dob">
                    </div>

                    <div class="input-field">
                        <label>Country</label>
                        <input type="text" placeholder="Country" name="country">
                    </div>

                    <div class="input-field">
                        <label>City</label>
                        <input type="text" placeholder="City" name="city">
                    </div>

                    <div class="input-field">
                        <label>Address</label>
                        <input type="text" placeholder="Address" name="address">
                    </div>

                    <div class="input-field">
                        <label>Phone Number</label>
                        <input type="tel" placeholder="Phone Number" name="phone-number">
                    </div>

                    <div class="input-field">
                        <label>Email</label>
                        <input type="email" placeholder="Email" name="email">
                    </div>

                </div>

            </form>

            <!-- ENROLLMENT INFORMATION -->
            <form id="student-enrollment-information" name="student-enrollment-information" method="post">

                <div id="personal-heading">
                    <h2>Enrollment Information 🚪</h2>
                </div>

                <div id="input-field-container">

                    <div class="input-field">
                        <label>Select Department</label>

                        <select name="department">
                            <option value="">-- Select Department --</option>
                            <option value="computer_science">Department of Computer Science</option>
                            <option value="mathematics">Department of Mathematics</option>
                            <option value="physics">Department of Physics</option>
                        </select>
                    </div>

                    <div class="input-field">

                        <label>Select Degree</label>

                        <select name="degree">
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
                               readonly>

                        <br>

                        <button type="button" onclick="generateStudentID()">
                            🔀 Generate Student ID
                        </button>

                    </div>

                    <div class="input-field">

                        <label>Auto Generate Password for Portal</label>

                        <input type="text"
                               id="password"
                               placeholder="Password will be generated automatically"
                               name="password"
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

                <form>

                    <h2 style="font-size:17px; font-weight:300;">
                        Choose an operation
                    </h2>

                    <span>
                        <button id="btn-save" name="btn-save">💾 Save</button>
                        <button id="btn-update" name="btn-update">✏️ Update</button>
                        <button id="btn-delete" name="btn-delete">🗑️ Delete</button>
                        <button id="btn-reset" name="btn-reset">↩ Reset</button>
                    </span>

                </form>

                <!-- SEARCH SECTION -->
                <div id="search-container">

                    <div id="search-inputs">

                        <span>

                            <div class="input-field">

                                <label>Search using</label>

                                <select name="search-criteria">

                                    <option value="">-- Select Search Criteria --</option>
                                    <option value="student-id">Student ID</option>
                                    <option value="national-id">National ID</option>
                                    <option value="email">First Name</option>
                                    <option value="phone">Middle Name</option>
                                    <option value="phone">Last Name</option>

                                </select>

                            </div>

                        </span>

                        <span>

                            <label>Search for</label>

                            <input type="text"
                                   placeholder="Enter what you are looking for">

                        </span>

                    </div>

                    <button id="search-btn">
                        🔍 Search
                    </button>

                </div>

            </div>

        </section>

        <!-- TABLE SECTION -->
        <section id="information-table-container">

            <table>

                <thead>

                <tr>
                    <th>National ID</th>
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>Last Name</th>
                    <th>Gender</th>
                    <th>DOB</th>
                    <th>Country</th>
                    <th>City</th>
                    <th>Address</th>
                    <th>Phone Number</th>
                    <th>Email</th>
                    <th>Department</th>
                    <th>Degree</th>
                    <th>Student ID</th>
                    <th>Password</th>
                </tr>

                </thead>

                <tbody>

                <tr>
                    <td>123456789</td>
                    <td>Promise</td>
                    <td>Doe</td>
                    <td>Siafwiyo</td>
                    <td>Male</td>
                    <td>22/10/2005</td>
                    <td>Zimbabwe</td>
                    <td>Bulawayo</td>
                    <td>Magwegwe North</td>
                    <td>0789880071</td>
                    <td>promise@example.com</td>
                    <td>Computer Science</td>
                    <td>Computer Science</td>
                    <td>CS123456</td>
                    <td>password123</td>
                </tr>

                </tbody>

            </table>

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


<?php

    include "config/db.php";
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

    $btnSave = $_POST['btn-save'];
    $btnUpdate = $_POST['btn-update'];
    $btnDelete = $_POST['btn-delete'];
    $btnReset = $_POST['btn-reset'];


    $sql = "INSERT INTO students (national_id, first_name, middle_name, last_name, gender, dob, country, city, address, phone_number, email, department, degree, student_id, password)
            VALUES ('$nationalID', '$firstName', '$middleName', '$lastName', '$gender', '$dob', '$country', '$city', '$address', '$phoneNumber', '$email', '$department', '$degree', '$studentID', '$password')"; 
              
?>

</body>
</html>
```
