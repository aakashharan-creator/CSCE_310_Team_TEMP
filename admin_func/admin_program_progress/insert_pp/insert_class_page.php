
<!--
  INSERT INTO Class_Enrollment (UIN, Class_ID, Status, Semester, Year)
  VALUES ("120", "310", "In progess", "Fall", "2023");
-->
<!DOCTYPE html>
<html>
<head>
  <title>Insert Class</title>
  <script defer src="validate_insert_class.js"></script>
</head>

    <body>
    <a href="../program_progress_page.php" style="position: absolute; top: 25px; right: 25px;">Go back</a>
    <h1>Insert Class</h1>

      <div id="error"></div>
      <form id="form" form method="post" action="insert_class_data.php">

          <div>
          <label>UIN (3 or more characters)</label><br>
          <input type="text" name="UIN" id="UIN" required>
          </div>

          <div>
          <label>Class_ID (Must be exactly 3 charcaters EX: 310)</label><br>
          <input type="text" name="Class_ID" id="Class_ID" required>
          </div>
          
          <div>
          <label>Status [Done, In Progress, Not Started (Case sensitive)]</label><br>
          <input type="text" name="Status" id="Status" required>
          </div>

          <div>
          <label>Semester [Fall, Spring, Summer Note: Case sensitive]</label><br>
          <input type="text" name="Semester" id="Semester" required> 
          </div>

          <div>
          <label>Year (Format: xxxx)</label><br>   
          <input type="text" name="Year" id="Year" required>
          </div>

          <button type="Submit">Submit</button>

      </form>

    </body>
</html>
