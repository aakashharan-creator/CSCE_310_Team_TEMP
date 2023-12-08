<!--	
IA_Num
Intern_ID
Status
Year
-->

<!DOCTYPE html>
<html>
<head>
  <title>Edit existing internship record</title> 
  <script defer src="validate_edit_internship.js"></script>

</head>
    <body>
    <h1> Edit existing internship record </h1>
      <p> Make sure to put the right IA_Num to edit the correct record </p>
      
      <div id="error"></div>
      <form id="form" form method="post" action="edit_internship_data.php">

      <div>
          <label>IA_Num (number)</label><br>
          <input type="number" name="IA_Num" id="IA_Num" required>
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
          
          <input type="submit" value="submit">

      </form>
    </body>
</html>