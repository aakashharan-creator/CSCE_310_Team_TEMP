<!DOCTYPE html>
<html>
<head>
  <title>Insert Class Page</title> 
  <script defer src="validate_insert_class.js"></script>
</head>

    <body>

    <h1>Insert Class</h1>
      <div id="error"></div>
      
      <form id="form" form method="post" action="insert_class_data.php">

      <div>
          <div>
          <label>Class_ID (3 Digits Ex: 310)</label><br>
          <input type="text" name="Class_ID" id="Class_ID" required>
          </div>
          
          <div>
          <label>Status [Done, In Progress, Not Started (Case sensitive)]</label><br>
          <input type="text" name="Status" id="Status" required>
          </div>

          <div>
          <label>Semester [Fall, Spring, Summer (Case sensitive)]</label><br>
          <input type="text" name="Semester" id="Semester" required> 
          </div>

          <div>
          <label>Year (Format: xxxx)</label><br>   
          <input type="text" name="Year" id="Year" required>
          </div>

          <input type="submit" value="submit">

      </form>

    </body>
</html>
