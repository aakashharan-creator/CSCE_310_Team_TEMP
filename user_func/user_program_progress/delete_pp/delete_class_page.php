<!DOCTYPE html>
<html>
<head>
  <title>Delete existing class</title> 
</head>
    <body>
    <a href="../program_progress_page.php" style="position: absolute; top: 25px; right: 25px;">Go back</a>
    <h1> Delete existing class </h1>
      <p> Make sure to put the right CE_Num to edit the correct record </p>
      
      <form method="post" action="delete_class_data.php">

      <div>
          <div>
          <label>CE_Num</label><br>
          <input type="number" name="CE_Num" required>
      </div>

      <input type="submit" value="submit">

      </form>
    </body>
</html>