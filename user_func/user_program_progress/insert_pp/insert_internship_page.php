<!DOCTYPE html>
<html>
<head>
  <title>Insert Internship</title> 
  <script defer src="validate_insert_internship.js"></script>
</head>

    <body>

    <h1>Insert Internship</h1>
      <div id="error"></div>
      
      <form id = "form" form method="post" action="insert_internship_data.php">

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

          <input type="submit" value="submit">

      </form>

    </body>
</html>
