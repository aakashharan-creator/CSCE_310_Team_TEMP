<!DOCTYPE html>
<html>
<head>
  <title>Delete existing internship</title> 
</head>
    <body>
    <a href="../program_progress_page.php" style="position: absolute; top: 25px; right: 25px;">Go back</a>
    <h1> Delete existing internship </h1>
      <p> Make sure to put the right IA_Num to edit the correct record </p>
      <form method="post" action="delete_internship_data.php">

      <div>
          <div>
          <label>IA_Num</label><br>
          <input type="number" name="IA_Num" required>
      </div>

      <input type="submit" value="submit">

      </form>
    </body>
</html>