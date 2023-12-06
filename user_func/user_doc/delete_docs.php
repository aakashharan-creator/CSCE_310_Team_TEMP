<!DOCTYPE html>
<html>
<head>
  <title>Delete Existing Documents</title> 
</head>
    <body>
    <h1>Delete Below:</h1>
    <a href="./document_page.php" style="position: absolute; top: 25px; right: 25px;">Go back</a>
      <form method="post" action="delete_doc_data.php">

      <div>
          <div>
          <label>Document Number</label><br>
          <input type="text" name="Doc_Num" required>
      </div>

      <input type="submit" value="submit">

      </form>
    </body>
</html>