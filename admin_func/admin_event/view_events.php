<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view_style_event.css">
    <script src="event_data.js"></script>
    <title>Event Page</title>
</head>

<body onload="populateEventData()">
<a href="../admin_home.php" style="position: absolute; top: 25px; right: 25px;">Go back</a>
    <h1>Event Page</h1>


    <h3>Create Events</h3>
        <a href="./add_event.php">
            <button>Add Events</button> 
        </a>
    <h3>Update Existing Events</h3>
        <a href="./edit_event.php">
            <button>Edit Events</button> 
        </a>
    <h3>Remove Existing Events</h3>
        <a href="./delete_event.php">
            <button>Delete Events</button> 
        </a>
    
        <h3> </h3>

        <table id="event-data">
        <tr>
            <th>Event ID</th>
            <th>UIN</th>
            <th>Program Number</th>
            <th>Start Date</th>
            <th>Start Time</th>
            <th>Location</th>
            <th>End Date</th>
            <th>End Time</th>
            <th>Event Type</th>
        </tr>
    </table>
</body>


</html>