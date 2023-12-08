<!DOCTYPE html>
<html>
<head>
  <title>Delete existing certification</title> 
</head>
    <body>
    <a href="../program_progress_page.php" style="position: absolute; top: 25px; right: 25px;">Go back</a>
    <h1> Delete existing certification </h1>
      <p> Make sure to put the right CertE_Num to edit the correct record </p>
      <form method="post" action="delete_cert_data.php">

      <div>
          <div>
          <label>CertE_Num (number)</label><br>
          <input type="number" name="CertE_Num" required>
      </div>

      <input type="submit" value="submit">

      </form>
    </body>
</html>