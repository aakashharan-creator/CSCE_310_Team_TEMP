<!DOCTYPE html>
<html>
<head>
  <title>Edit existing class</title> 
  <script defer src="validate_edit_class.js"></script>
</head>
    <body>
    <h1> Edit existing class </h1>
      <p> Make sure to put the right CE_Num to edit the correct record </p>
      
      <div id="error"></div>
      <form id="form" form method="post" action="edit_class_data.php">

        <div>
          <label>CE_Num</label><br>
          <input type="text" name="CE_Num" id="CE_Num" required>
          </div>

          <div>
          <label>Class_ID</label><br>
          <input type="text" name="Class_ID" id="Class_ID" required>
          </div>

          <div>
          <label>Status</label><br>
          <input type="text" name="Status" id="Status" required>
          </div>

          <div>
          <label>Semester</label><br>
          <input type="text" name="Semester" id="Semester" required> 
          </div>

          <div>
          <label>Year</label><br>
          <input type="text" name="Year" id="Year" required> 
          </div>

          <button type="submit">Submit</button>

      </form>
    </body>
</html>