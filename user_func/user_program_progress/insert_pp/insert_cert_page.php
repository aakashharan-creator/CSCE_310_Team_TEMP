
<!DOCTYPE html>
<html>
<head>
  <title>Insert Course</title> 
  <script defer src="validate_insert.js"></script>
</head>

    <body>

    <h1>Insert Certification</h1>

    <div id="error"></div>

      <form id="form" method="post" action="insert_cert_data.php">

      <div>
          <label>UIN</label><br>
          <input type="text" name="UIN" id="UIN" required>
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

          <button type="submit">Submit</button>

      </form>

    </body>
</html>
