
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
          <input type="text" name="Cert_ID" id="Cert_ID" required>
          </div>
          
          <div>
          <label>Status</label><br>
          <input type="text" name="Status" id="Status" required>
          </div>

          <div>
          <label>Training Status</label><br>
          <input type="text" name="Training_Status" id="Training_Status" required>
          </div>

          <div>
          <label>Program Number</label><br>
          <input type="number" name="Program_Num" id="Program_Num" required> 
          </div>

          <div>
          <label>Semester [Fall, Spring, Summer Note: Case sensitive]</label><br>
          <input type="text" name="Semester" id="Semester" required> 
          </div>

          <div>
          <label>Year</label><br>   
          <input type="number" name="Year" id="Year" required>
          </div>

          <button type="submit">Submit</button>

      </form>

    </body>
</html>
