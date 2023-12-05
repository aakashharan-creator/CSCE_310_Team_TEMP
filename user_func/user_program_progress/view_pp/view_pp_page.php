<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view_pp_style.css">
    <script src="view_pp_function.js"></script>
    <title>Document</title>
</head>
<body onload="populateUserData()">
    <h1>My current programs</h1>
    <h2>Certifications</h2>
    <a href="../program_progress_page.php" style="position: absolute; top: 25px; right: 25px;">Go back</a>

    <table id="user-data">
        <tr>
            <th>CertE_Num</th>
            <th>UIN</th>
            <th>Cert_ID</th>
            <th>Status</th>
            <th>Training_Status</th>
            <th>Program_Num</th>
            <th>Semester</th>
            <th>Year</th>
        </tr>
    </table>

    <h2>Classes</h2>
    <table id="user-data2">
        <tr>
            <th>CE_Num</th>
            <th>UIN</th>
            <th>Class_ID</th>
            <th>Status</th>
            <th>Semester</th>
            <th>Year</th>
        </tr>
    </table>

    <h2>Internships</h2>
    <table id="user-data3">
        <tr>
            <th>IA_Num</th>
            <th>UIN</th>
            <th>Intern_ID</th>
            <th>Status</th>
            <th>Year</th>
        </tr>
    </table>
</body>
</html>