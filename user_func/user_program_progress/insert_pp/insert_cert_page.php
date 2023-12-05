
<!--
  INSERT INTO Class_Enrollment (UIN, Class_ID, Status, Semester, Year)
  VALUES ("120", "310", "In progess", "Fall", "2023");
-->
<!DOCTYPE html>
<html>
<head>
  <title>Insert Course</title> 
</head>

    <body>

    <h1>Insert Course</h1>

      <form method="post" action="insert_cert_data.php">

      <div>
          <label>UIN</label><br>
          <input type="text" name="UIN" required>
          </div>

          <div>
          <label>Certification ID</label><br>
          <input type="text" name="Cert_ID" required>
          </div>
          
          <div>
          <label>Status</label><br>
          <input type="text" name="Status" required>
          </div>

          <div>
          <label>Training Status</label><br>
          <input type="text" name="Training_Status" required>
          </div>

          <div>
          <label>Program Number</label><br>
          <input type="text" name="Program_Num" required> 
          </div>

          <div>
          <label>Semester</label><br>
          <input type="text" name="Semester" required> 
          </div>

          <div>
          <label>Year</label><br>   
          <input type="text" name="Year" required>
          </div>

          <input type="submit" value="submit">

      </form>

    </body>
</html>

<!--
    INSERT INTO Cert_Enrollment (UIN, Cert_ID, Status, Training_Status, Program_Num, Semester,Year)
    VALUES (120, 2, "Not Started", "Not enrolled in online course yet", 2, "Fall", "2023");
-->