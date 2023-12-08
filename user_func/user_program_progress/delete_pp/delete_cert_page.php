<!DOCTYPE html>
<html>
<head>
  <title>Delete existing certification</title> 
</head>
    <body>
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