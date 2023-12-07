
<!--
    INSERT INTO Intern_App (UIN, Intern_ID, Status, Year)
    VALUES (120, 2, "Done", 2023);
-->
<!DOCTYPE html>
<html>
<head>
  <title>Insert Internship</title> 
</head>

    <body>

    <h1>Insert Internship</h1>

      <div id="error"></div>
      <form id="form" form method="post" action="insert_internship_data.php">

      <div>
          <label>UIN</label><br>
          <input type="text" name="UIN" id="UIN" required>
          </div>

          <div>
          <label>Internship ID</label><br>
          <input type="text" name="Intern_ID" id="Intern_ID" required>
          </div>
          
          <div>
          <label>Status</label><br>
          <input type="text" name="Status" id="Status" required>
          </div>

          <div>
          <label>Year</label><br>   
          <input type="text" name="Year" id="Year" required>
          </div>

          <button type="Submit">Submit</button>

      </form>

    </body>
</html>
