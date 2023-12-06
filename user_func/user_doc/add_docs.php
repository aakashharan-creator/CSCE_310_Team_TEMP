<!DOCTYPE html>
<html>
<head>
  <title>Upload Documents</title> 
</head>

    <body>

    <h1>Upload Below:</h1>
    <a href="./document_page.php" style="position: absolute; top: 25px; right: 25px;">Go back</a>

      <form method="post" action="add_doc_data.php">

      <div>
          <label>Document Number</label><br>
          <input type="text" name="Doc_Num" required>
          </div>

          <div>
          <label>Application Number</label><br>
          <input type="text" name="App_Num" required>
          </div>
          
          <div>
          <label>Link</label><br>
          <input type="text" name="Link" required>
          </div>

          <div>
          <label>Document Type</label><br>
          <input type="text" name="Doc_Type" required> 
          </div>

          <input type="submit" value="submit">

      </form>

    </body>
</html>
