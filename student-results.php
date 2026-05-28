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
                                            <td>National ID : 123456</td>
                                        </tr>

                                        <tr>
                                            <td>Name : Promise Siafwiyo</td>
                                        </tr>

                                        <tr>
                                            <td>Department : Computer Science</td>
                                        </tr>

                                        <tr>
                                            <td>DOB : 05/04/2005</td>
                                        </tr>

                                        <tr>
                                            <td>Gender : Male</td>
                                        </tr>

                                        <tr>
                                            <td>Degree : Bachelor's Degree in Computer Science</td>
                                        </tr>
                                    </table>
                                </th>

                                <th>
                                    <table>

                                        <tr>
                                            <td>Student Number : 123456</td>
                                        </tr>

                                        <tr>
                                            <td>Country : Zimbabwe</td>
                                        </tr>

                                        <tr>
                                            <td>City : Bulawayo</td>
                                        </tr>

                                        <tr>
                                            <td>Address : Magwegwe North</td>
                                        </tr>

                                        <tr>
                                            <td>Phone Number : 0789880071</td>
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
