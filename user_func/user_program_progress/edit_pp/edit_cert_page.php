<!DOCTYPE html>
<html>
<head>
  <title>Edit existing certification</title> 
  <script defer src="validate_edit_cert.js"></script>
</head>

<body>
<a href="../program_progress_page.php" style="position: absolute; top: 25px; right: 25px;">Go back</a>
      <h1> Edit existing certification </h1>
      <p> Make sure to put the right CertE_Num to edit the correct record </p>
      
      <div id="error"></div>
      
      <form id="form" form method="post" action="edit_cert_data.php">

          <div>
          <label>CertE_Num</label><br>
          <input type="number" name="CertE_Num" id="CertE_Num" required>
          </div>

          <div>
          <label>Cert_ID (1-10)</label><br>
          <input type="number" name="Cert_ID" id="Cert_ID" required>
          </div>

          <div>
          <label>Status  [Done, In Progress, Not Started (Case sensitive)]</label><br>
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

          <button type="submit">Submit</button>

      </form>
    </body>
</html>