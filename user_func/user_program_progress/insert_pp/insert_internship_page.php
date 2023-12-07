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
          <div>
          <label>Internship ID (1-10)</label><br>
          <input type="number" name="Intern_ID" id="Intern_ID" required>
          </div>
          
          <div>
          <label>Status [Done, In Progress, Not Started (Case sensitive)]</label><br>
          <input type="text" name="Status" id="Status" required>
          </div>

          <div>
          <label>Year (Format: xxxx)</label><br>   
          <input type="text" name="Year" id="Year" required>
          </div>

          <input type="submit" value="submit">

      </form>

    </body>
</html>
