<p>
<button onclick="window.location.href = 'home.php';">Home</button>
<button onclick="window.location.href = 'staff.php';">Back to Staff Page</button>
</p>

<html>
<style>
  #table {
     border: 1px solid black;
  }
	
  th {
      font-family: Arial, Helvetica, sans-serif;
      font-size: .7em;
      background: #666;
      color: #FFF;
      padding: 2px 6px;
      border-collapse: separate;
      border: 1px solid #000;
  }
  td {
      font-family: Arial, Helvetica, sans-serif;
      font-size: .7em;
      border: 1px solid #DDD;
      color: black;
  }
</style>
</html>

<?php

/* This tells the system that it's no longer just parsing
   HTML; it's now parsing PHP. */

// keep track of errors so it redirects the page only if
// there are no errors
$success = True;
include 'connect.php';
$conn = OpenCon();

function printTable($resultFromSQL, $namesOfColumnsArray, $tablename, $id)
{
    echo '<br>'.$tablename.'<br>';
    echo "<table id=$id>";
    echo "<tr>";
    // iterate through the array and print the string contents
    foreach ($namesOfColumnsArray as $name) {
        echo "<th>$name</th>";
    }
    echo "</tr>";

    while ($row = $resultFromSQL->fetch_assoc()) {
        echo "<tr>";
        $string = "";

        // iterates through the results returned from SQL query and
        // creates the contents of the table
		foreach ($namesOfColumnsArray as $name) {
			echo "<td>" . $row["$name"] . "</td>";
		}
        echo $string;
        echo "</tr>";
    }
    echo "</table>";
}

// Connect Oracle...
if ($conn) {
    // Show the number of rooms per location
    $roomCountResult = $conn->query("SELECT l.LocationID, l.Location_Name, COUNT(r.Room_Num) AS Room_Count
                                     FROM Location l, Room r
                                     WHERE l.LocationID=r.LocationID
                                     GROUP BY l.LocationID, l.Location_Name
                                     ORDER BY l.LocationID ASC");
    $roomCountColumnNames = array("LocationID", "Location_Name", "Room_Count");
    printTable($roomCountResult, $roomCountColumnNames, "Number of Rooms per Location", "LocationRooms");

    // Show Locations that have all Room Types
    $allRoomsResult = $conn->query("
	SELECT DISTINCT x.LocationID, x.Location_Name
	FROM Location x
	WHERE NOT EXISTS(
		SELECT y.Room_Type
		FROM RoomCapacity y
		WHERE NOT EXISTS(
			SELECT z.Room_Type
			FROM Room z
			WHERE z.LocationID=x.LocationID AND z.Room_Type=y.Room_Type))");
	
    $allRoomsColumnNames = array("LocationID", "Location_Name");
    printTable($allRoomsResult, $allRoomsColumnNames, "Locations with All Room Types", "LocationsWithAllRooms");
} else {
	echo "cannot connect";
}
	CloseCon($conn);
?>