<!DOCTYPE html>
<html>
<head>
  <title>Insert Students Certificate</title>
  <script defer src="validate_insert_cert.js"></script>
</head>

    <body>

    <h1>Insert Certificate</h1>
      <p>All fields required</p>
      
      <div id="error"></div>
      <form id="form" form method="post" action="insert_cert_data.php">

      <div>
          <label>UIN (must be at least 3 characters)</label><br>
          <input type="text" name="UIN" id="UIN" required>
          </div>

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
          <input type="text" name="Program_Num" id="Program_Num" required> 
          </div>

          <div>
          <label>Semester [Fall, Spring, Summer Note: Case sensitive]</label><br>
          <input type="text" name="Semester" id="Semester" required> 
          </div>

          <div>
          <label>Year (Format: xxxx)</label><br>   
          <input type="text" name="Year" id="Year" required>
          </div>

          <button type="Submit">Submit</button>

      </form>

    </body>
</html>