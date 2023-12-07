<!DOCTYPE html>
<html>
<head>
  <title>Edit Existing Events</title> 
</head>
    <body>
    <h1>Edit Below:</h1>
    <a href="./view_events.php" style="position: absolute; top: 25px; right: 25px;">Go back</a>
    <p>Please put a 0 in any field you do not want to change.</p>
      <form method="post" action="edit_event_data.php">

      <div>
          <label>Event ID</label><br>
          <input type="text" name="Event_ID" required>
          </div>
          
          <div>
          <label>Start Date</label><br>
          <input type="text" name="Start_Date" required>
          </div>

          <div>
          <label>Start Time</label><br>
          <input type="text" name="Start_Time" required>
          </div>

          <div>
          <label>Location</label><br>
          <input type="text" name="Location" required>
          </div>

          <div>
          <label>End Date</label><br>
          <input type="text" name="End_Date" required>
          </div>

          <div>
          <label>End Time</label><br>
          <input type="text" name="End_Time" required>
          </div>
          
          <input type="submit" value="submit">

      </form>
    </body>
</html>