<!DOCTYPE html>
<html>
<head>
  <title>Edit a students internship record</title> 
</head>
    <body>
    <h1> Edit existing Internship </h1>
      <p> Make sure to put the right IA_Num to edit the correct record </p>
      
      <div id="error"></div>
      <form method="post" action="edit_internship_data.php">

      <div>
          <label>IA_Num</label><br>
          <input type="text" name="IA_Num" required>
          </div>

          <label>UIN</label><br>
          <input type="text" name="UIN" required>
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
          
          <button type="submit">Submit</button>

      </form>
    </body>
</html>