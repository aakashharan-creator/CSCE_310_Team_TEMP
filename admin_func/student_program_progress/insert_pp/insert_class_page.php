
<!--
  INSERT INTO Class_Enrollment (UIN, Class_ID, Status, Semester, Year)
  VALUES ("120", "310", "In progess", "Fall", "2023");
-->
<!DOCTYPE html>
<html>
<head>
  <title>Insert Class</title> 
</head>

    <body>

    <h1>Insert Class</h1>

      <form method="post" action="insert_class_data.php">

      <div>
          <label>UIN</label><br>
          <input type="text" name="UIN" required>
          </div>

          <div>
          <label>Class_ID</label><br>
          <input type="text" name="Class_ID" required>
          </div>
          
          <div>
          <label>Status</label><br>
          <input type="text" name="Status" required>
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
