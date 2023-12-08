<!--
CE_Num
Class_ID
Year
Status
Semester
-->

<!DOCTYPE html>
<html>
<head>
  <title>Edit existing class</title> 
  <script defer src="validate_edit_class.js"></script>
</head>
    <body>
    <a href="../program_progress_page.php" style="position: absolute; top: 25px; right: 25px;">Go back</a>
    <h1> Edit a students class record </h1>
      <p> Make sure to put the right CE_Num to edit the correct record </p>
      
      <div id="error"></div>
      <form id= "form" form method="post" action="edit_class_data.php">

      <div>
          <label>CE_Num</label><br>
          <input type="number" name="CE_Num" id="CE_Num" required>
          </div>

          <label>UIN (3 or more characters)</label><br>
          <input type="text" name="UIN" id="UIN" required>
          </div>

          <div>
          <label>Class_ID (Exactly 3 characters EX: 310) </label><br>
          <input type="text" name="Class_ID" id="Class_ID" required>
          </div>

          <div>
          <label>Year (Format: xxxx) </label><br>
          <input type="text" name="Year" id="Year" required> 
          </div>

          <div>
          <label>Status [Done, In Progress, Not Started (Case sensitive)]</label><br>
          <input type="text" name="Status" id="Status" required>
          </div>
          
          <div>
          <label>Semester [Fall, Spring, Summer Note: Case sensitive]</label><br>
          <input type="text" name="Semester" id="Semester" required> 
          </div>

          <button type="submit">Submit</button>

      </form>
    </body>
</html>