<!--
CertE_Num
UIN
Cert_ID
Status
Training_Status
Program_Num
Semester
Year
-->
<!DOCTYPE html>
<html>
<head>
  <title>Edit existing certification</title> 
</head>
    <body>
    <h1> Edit existing certification </h1>
      <p> Make sure to put the right CertE_Num to edit the correct record </p>
      <form method="post" action="edit_cert_data.php">

      <div>
          <div>
          <label>Cert_ID</label><br>
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