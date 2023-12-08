
<!--
    INSERT INTO Intern_App (UIN, Intern_ID, Status, Year)
    VALUES (120, 2, "Done", 2023);
-->
<!DOCTYPE html>
<html>
<head>
  <title>Insert Internship</title>
  <script defer src="validate_insert_internship.js"></script>
</head>

    <body>

    <h1>Insert Internship</h1>

      <div id="error"></div>
      <form id="form" form method="post" action="insert_internship_data.php">

      <div>
          <label>UIN (3 or more characters)</label><br>
          <input type="text" name="UIN" id="UIN" required>
          </div>

          <div>
          <label>Internship ID (1-10)</label><br>
          <input type="number" name="Intern_ID" id="Intern_ID" required>
          </div>
          
          <div>
          <label>Status [Done, In Progress, Not Started (Case sensitive)]</label><br>
          <input type="text" name="Status" id="Status" required>
          </div>

          <div>
          <label>Year (Format: xxxx) </label><br>   
          <input type="text" name="Year" id="Year" required>
          </div>

          <button type="Submit">Submit</button>

      </form>

    </body>
</html>
