<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lecturer Form</title>
    <link rel="stylesheet" href="LecturerForm.css">
    <link rel="stylesheet" href="global.css">
    <link rel="stylesheet" href="forms.css">
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

    <!-- MAIN CONTENT -->
    <div id="main-content-container">

        <h2 id="instr">
            <i class="fa fa-user"></i> Enter details
        </h2>

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
                <input type="text" id="course_code" name="course_code" placeholder="Enter course code">
            </section>

            <section id="lecturer-field-container">
                <label for="current_module">Current Module</label>
                <select name="current_module" id="current_module">
                    <option value="">--Select Current Module--</option>
                    <option value="data-structures">Data Structures</option>
                    <option value="algorithms">Algorithms</option>
                    <option value="database-systems">Database Systems</option>
                </select>
            </section>

            <section id="lecturer-field-container">
                <label>Current Year</label>
                <input type="text" value="2026" readonly>
            </section>

        </form>

        <div id="lecturer-btn-container">
            <button type="submit"><i class="fa fa-save"></i> Submit</button>
            <button type="reset"><i class="fa fa-undo"></i> Reset</button>
        </div>

    </div>

    <!-- STUDENT SECTION -->
    <div id="students-details-container">

        <!-- LEFT INPUT FORM -->
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
                    <label for="student-name">Full Name</label>
                    <input type="text" id="student-name" value="Promise Siafwiyo" readonly>
                </section>

                <section id="student-field-container">
                    <label>Current Part</label>
                    <input type="text" value="2.1" readonly>
                </section>

                <section id="student-field-container">
                    <label>Course Code</label>
                    <input type="text" value="SCS2104" readonly>
                </section>

                <section id="student-field-container">
                    <label>Current Module</label>
                    <input type="text" value="Data Structures" readonly>
                </section>

                <section id="student-field-container">
                    <label>Final Mark</label>
                    <input type="text" name="final_mark" value="74">
                </section>

                <section id="student-field-container">
                    <label>Grade</label>
                    <input type="text" value="2.1" readonly>
                </section>

            </form>

            <div id="lecturer-btn-container">
                <button><i class="fa fa-save"></i> Save</button>
                <button><i class="fa fa-edit"></i> Update</button>
                <button><i class="fa fa-undo"></i> Reset</button>
            </div>

        </div>

        <!-- RIGHT SEARCH + TABLE -->
        <div id="students-info-container">

            <div id="student-search-container">

                <form method="GET" action="">

                    <span>
                        <label>Search by</label>
                        <select name="search_by">
                            <option value="">--Select a field--</option>
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
                        <button type="submit"><i class="fa fa-search"></i> Search</button>
                        <button type="reset"><i class="fa fa-undo"></i> Reset</button>
                    </div>

                </form>
            </div>

            <div id="student-table-container">
                <table border="1">
                    <thead>
                        <tr>
                            <th>Student ID</th>
                            <th>Full Name</th>
                            <th>Current Part</th>
                            <th>Course Code</th>
                            <th>Current Module</th>
                            <th>Final Mark</th>
                            <th>Grade</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>111111111</td>
                            <td>Promise Siafwiyo</td>
                            <td>2.1</td>
                            <td>SCS2104</td>
                            <td>Web Development</td>
                            <td>74</td>
                            <td>2.1</td>
                        </tr>

                        <tr>
                            <td>222222222</td>
                            <td>John Doe</td>
                            <td>2.1</td>
                            <td>SCS2104</td>
                            <td>Web Development</td>
                            <td>85</td>
                            <td>1</td>
                        </tr>

                        <tr>
                            <td>333333333</td>
                            <td>Jane Smith</td>
                            <td>2.1</td>
                            <td>SCS2104</td>
                            <td>Web Development</td>
                            <td>90</td>
                            <td>1</td>
                        </tr>

                    </tbody>
                </table>
            </div>

        </div>

    </div>

</div>

</body>
</html>