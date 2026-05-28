<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Module Manager</title>
    <link rel="stylesheet" href="Module-manager.css">
    <link rel="stylesheet" href="global.css">
    <link rel="stylesheet" href="forms.css">

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

    <!-- MAIN CONTAINER -->
    <div id="module-manager-container">

        <!-- INPUT FORM SECTION -->
        <div id="module-manager-input-container">

            <p>
                This is a form which allows the admin to add new courses to the system.
            </p>

            <form method="POST" action="add_module.php">

                <span>
                    <label>Course Code</label>
                    <input type="text" name="course_code">
                </span>

                <span>
                    <label>Course Name</label>
                    <input type="text" name="course_name">
                </span>

                <span>
                    <label>Lecturer ID</label>
                    <input type="text" name="lecturer_id">
                </span>

                <span>
                    <label>Lecturer Name</label>
                    <input type="text" name="lecturer_name">
                </span>

                <span>
                    <label>Lecturer Surname</label>
                    <input type="text" name="lecturer_surname">
                </span>

                <span>
                    <label>Department</label>
                    <input type="text" name="department">
                </span>

                <br>

                <button type="submit">Save Module</button>

            </form>

        </div>

        <!-- TABLE SECTION -->
        <div id="module-manager-table-container">

            <table border="1">
                <thead>
                    <tr>
                        <th>Course Code</th>
                        <th>Course Name</th>
                        <th>Lecturer ID</th>
                        <th>Lecturer Name</th>
                        <th>Lecturer Surname</th>
                        <th>Department</th>
                    </tr>
                </thead>

                <tbody>
                    <!-- Example static rows (replace with PHP loop later) -->
                    <tr>
                        <td>SCS2104</td>
                        <td>Web Development</td>
                        <td>L001</td>
                        <td>John</td>
                        <td>Doe</td>
                        <td>Computer Science</td>
                    </tr>
                </tbody>

            </table>

        </div>

    </div>

</div>

</body>
</html>