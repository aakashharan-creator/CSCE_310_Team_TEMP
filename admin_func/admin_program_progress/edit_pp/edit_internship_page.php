<!DOCTYPE html>
<html>
<head>
  <title>Edit a students internship record</title> 
  <script defer src="validate_edit_internship.js"></script>

</head>
    <body>
    <a href="../program_progress_page.php" style="position: absolute; top: 25px; right: 25px;">Go back</a>
    <h1> Edit existing Internship </h1>
      <p> Make sure to put the right IA_Num to edit the correct record </p>
      
      <div id="error"></div>
      <form id="form" form method="post" action="edit_internship_data.php">

          <div>
          <label>IA_Num</label><br>
          <input type="number" name="IA_Num" id="IA_Num" required>
          </div>

          <label>UIN (3 or more charcaters)</label><br>
          <input type="text" name="UIN" id="UIN" required>
          </div>

          <div>
          <label>Intern_ID (1-10)</label><br>
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
          
          <button type="submit">Submit</button>

      </form>
    </body>
</html>