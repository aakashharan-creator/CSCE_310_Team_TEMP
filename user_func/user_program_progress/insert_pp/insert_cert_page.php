
<!DOCTYPE html>
<html>
<head>
  <title>Insert Course</title> 
  <script defer src="validate_insert_cert.js"></script>
</head>

    <body>
    <a href="../program_progress_page.php" style="position: absolute; top: 25px; right: 25px;">Go back</a>
    <h1>Insert Certification</h1>

    <div id="error"></div>

      <form id="form" method="post" action="insert_cert_data.php">

      <div>

          <div>
          <label>Certification ID (1-10)</label><br>
          <input type="text" name="Cert_ID" id="Cert_ID" required>
          </div>
          
          <div>
          <label>Status [Done, In Progress, Not Started (Case sensitive)]</label><br>
          <input type="text" name="Status" id="Status" required>
          </div>

          <div>
          <label>Training Status [Done, In Progress, Not Started (Case sensitive)]</label><br>
          <input type="text" name="Training_Status" id="Training_Status" required>
          </div>

          <div>
          <label>Program Number (1-10)</label><br>
          <input type="number" name="Program_Num" id="Program_Num" required> 
          </div>

          <div>
          <label>Semester [Fall, Spring, Summer Note: Case sensitive]</label><br>
          <input type="text" name="Semester" id="Semester" required> 
          </div>

          <div>
          <label>Year (Format: xxxx)</label><br>   
          <input type="number" name="Year" id="Year" required>
          </div>

          <button type="submit">Submit</button>

      </form>

    </body>
</html>
