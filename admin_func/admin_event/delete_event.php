<!DOCTYPE html>
<html>
<head>
  <title>Delete Existing Events</title> 
</head>
    <body>
    <h1>Delete Below:</h1>
    <a href="./view_events.php" style="position: absolute; top: 25px; right: 25px;">Go back</a>
      <form method="post" action="delete_event_data.php">

      <div>
          <div>
          <label>Event ID</label><br>
          <input type="text" name="Event_ID" required>
      </div>

      <input type="submit" value="submit">

      </form>
    </body>
</html>