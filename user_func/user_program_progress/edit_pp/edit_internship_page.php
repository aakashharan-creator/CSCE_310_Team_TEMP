<!--	
IA_Num
Intern_ID
Status
Year
-->

<!DOCTYPE html>
<html>
<head>
  <title>Edit existing class</title> 
</head>
    <body>
    <h1> Edit existing certification </h1>
      <p> Make sure to put the right IA_Num to edit the correct record </p>
      <form method="post" action="edit_internship_data.php">

      <div>
          <label>IA_Num</label><br>
          <input type="text" name="IA_Num" required>
          </div>

          <div>
          <label>Intern_ID</label><br>
          <input type="text" name="Intern_ID" required>
          </div>

          <div>
          <label>Status</label><br>
          <input type="text" name="Status" required>
          </div>

          <div>
          <label>Year</label><br>
          <input type="text" name="Year" required> 
          </div>
          
          <input type="submit" value="submit">

      </form>
    </body>
</html>