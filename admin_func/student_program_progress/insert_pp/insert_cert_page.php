<!DOCTYPE html>
<html>
<head>
  <title>Insert Students Certificate</title> 
</head>

    <body>

    <h1>Insert Certificate</h1>
      <p>All fields required</p>
      
      <form method="post" action="insert_cert_data.php">

      <div>
          <label>UIN</label><br>
          <input type="text" name="UIN" required>
          </div>

          <div>
          <label>Certification ID</label><br>
          <input type="text" name="Cert_ID" required>
          </div>
          
          <div>
          <label>Status</label><br>
          <input type="text" name="Status" required>
          </div>

          <div>
          <label>Training Status</label><br>
          <input type="text" name="Training_Status" required>
          </div>

          <div>
          <label>Program Number</label><br>
          <input type="text" name="Program_Num" required> 
          </div>

          <div>
          <label>Semester</label><br>
          <input type="text" name="Semester" required> 
          </div>

          <div>
          <label>Year</label><br>   
          <input type="text" name="Year" required>
          </div>

          <input type="submit" value="submit">

      </form>

    </body>
</html>