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
</head>
    <body>
    <h1> Edit existing certification </h1>
      <p> Make sure to put the right CE_Num to edit the correct record </p>
      <form method="post" action="edit_class_data.php">

      <div>
          <label>CE_Num</label><br>
          <input type="text" name="CE_Num" required>
          </div>

          <div>
          <label>Class_ID</label><br>
          <input type="text" name="Class_ID" required>
          </div>

          <div>
          <label>Year</label><br>
          <input type="text" name="Year" required> 
          </div>

          <div>
          <label>Status</label><br>
          <input type="text" name="Status" required>
          </div>
          
          <div>
          <label>Semester</label><br>
          <input type="text" name="Semester" required> 
          </div>

          <input type="submit" value="submit">

      </form>
    </body>
</html>