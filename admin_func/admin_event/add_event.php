<!DOCTYPE html>
<html>
<head>
  <title>Create Events</title> 
</head>

    <body>

    <h1>Create Below:</h1>
    <a href="./view_events.php" style="position: absolute; top: 25px; right: 25px;">Go back</a>

      <form method="post" action="add_event_data.php">

          <div>
          <label>Program Number</label><br>
          <input type="text" name="Program_Num" required>
          </div>

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

          <label>End Date</label><br>
          <input type="text" name="End_Date" required>
          </div>

          <div>
          <label>End Time</label><br>
          <input type="text" name="End_Time" required>
          </div>
          
          <div>
          <label>Event Type</label><br>
          <input type="text" name="Event_Type" required>
          </div>

          <input type="submit" value="submit">

      </form>

    </body>
</html>
