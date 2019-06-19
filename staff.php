<p>
<button onclick="window.location.href = 'home.php';">Home</button>
<button onclick="window.location.href = 'locationManagement.php';">Location Management</button>
</p>

<p>Enter StaffID:</p>
<form method="POST" action="staff.php">
<!-- refreshes page when submitted -->

<p><input type="text" name="insStaffID" size="6">

<input type="submit" value="Submit" name="selectStaffID">
<input type="submit" value="Reset" name="selectAll"></p>
</form>


<p>Insert or Update Staff</p>
<p>
  <font size="2"> StaffID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  DOB&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  Sex&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  Pay Rate&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  YTD Pay&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  Hours Worked&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  LocationID</font>
</p>
<form method="POST" action="staff.php"> 
<!-- refreshes page when submitted -->
   <p>
      <input type="text" name="StaffID" size="8">
      <input type="text" name="Name" size="8">
      <input type="text" name="DOB" size="8">
      <input type="text" name="Sex" size="8">
      <input type="text" name="PayRate" size="8">
      <input type="text" name="YTDPay" size="10">
      <input type="text" name="HoursWorkedInCurrentPeriod" size="15">
      <input type="text" name="LocationID" size="10">
      <input type="submit" value="Insert New Staff" name="insertStaff">
      <input type="submit" value="Update Staff Information" name="updateStaff">
   </p>
</form>

<p>Insert or Update Lifeguards</p>
<p>
  <font size="2"> StaffID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  CPR Certification Expiry Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  SupervisorID
  </font>
</p>
<form method="POST" action="staff.php"> 
<!-- refreshes page when submitted -->
   <p>
      <input type="text" name="LifeguardStaffID" size="8">
      <input type="text" name="LifeguardCPRExpiryDate" size="25">
      <input type="text" name="LifeguardSupervisorID" size="8">
      <input type="submit" value="Insert New Lifeguard" name="insertLifeguard">
      <input type="submit" value="Update Lifeguard Information" name="updateLifeguard">
   </p>
</form>

<p>Insert CleaningStaff</p>
<p>
  <font size="2"> StaffID
  </font>
</p>
<form method="POST" action="staff.php"> 
<!-- refreshes page when submitted -->
   <p>
      <input type="text" name="CleaningStaffID" size="8">
      <input type="submit" value="Insert New CleaningStaff" name="insertCleaningStaff">
   </p>
</form>


<p>Delete Staff</p>
<p>
  <font size="2">StaffID</font>
</p>
<form method="POST" action="staff.php">
<!-- refreshes page when submitted -->
   <p>
      <input type="text" name="deleteStaffID" size="8">
      <input type="submit" value="Delete Staff" name="deleteStaff">
   </p>
</form>

<br>
<u>Shifts</u>
<p>Insert Shift</p>
<p>
  <font size="2"> Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  Start Time&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  End Time</font>
</p>
<form method="POST" action="staff.php">
<!-- refreshes page when submitted -->
   <p>
      <input type="text" name="insDate_shift" size="8">
      <input type="text" name="insStart_Time_shift" size="8">
      <input type="text" name="insEnd_Time_shift" size="8">
      <input type="submit" value="Insert Shift" name="insert_shift">
   </p>
</form>

<!-- StaffWorkShift(15) -->
<p>Insert StaffWorksShift</p>
<p>
  <font size="2"> StaffID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  Start Time&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  End Time</font>
</p>
<form method="POST" action="staff.php">
<!-- refreshes page when submitted -->
   <p>
      <input type="text" name="insStaffID_staffworksshift" size="8">  
      <input type="text" name="insDate_staffworksshift" size="8">
      <input type="text" name="insStart_Time_staffworksshift" size="8">
      <input type="text" name="insEnd_Time_staffworksshift" size="8">
      <input type="submit" value="Insert StaffWorksShift" name="insert_staffworksshift">
   </p>
</form>

<html>
<style>
  #table {
     border: 1px solid black;
  }
	
	#Staff {
		width: 35%;
	}
	
	#StaffAll {
		width: 5%;
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

function printTable($resultFromSQL, $namesOfColumnsArray, $namesOfSQLArray, $tablename, $id)
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
		foreach ($namesOfSQLArray as $name) {
			echo "<td>" . $row["$name"] . "</td>";
		}
        echo $string;
        echo "</tr>";
    }
    echo "</table>";
}

if ($conn) {
	if (array_key_exists('selectStaffID', $_POST)) {
		$bind1 = $_POST['insStaffID'];
		
		// Select data...	
		$isLifeguard = $conn->query("SELECT COUNT(StaffID) AS Num FROM Lifeguard WHERE StaffID=$bind1");
		$isCleaningStaff = $conn->query("SELECT COUNT(StaffID) AS Num FROM CleaningStaff WHERE StaffID=$bind1");		
		
		if($isLifeguard->fetch_assoc()['Num'] > 0) {
		    // Select Staff data joined with additional data from Lifeguard table
		    $result = $conn->query("SELECT s.StaffID, s.Name, s.DOB, s.Sex, s.Pay_Rate, s.YTD_Pay, s.Hours_Worked_In_Current_Period, s.LocationID, l.CPR_Certification_Expiry_Date, l.SupervisorID
			FROM Staff s, Lifeguard l
			WHERE l.StaffID=$bind1 AND s.StaffID = l.StaffID");
			$columnNames = array("StaffID", "Name", "DOB", "Sex", "Pay Rate", "YTD Pay", "Hours Worked In Current Period", "LocationID", "CPR Certification Expiry Date", "SupervisorID");
		    $selectNames = array("StaffID", "Name", "DOB", "Sex", "Pay_Rate", "YTD_Pay", "Hours_Worked_In_Current_Period", "LocationID", "CPR_Certification_Expiry_Date", "SupervisorID");
		    printTable($result, $columnNames, $selectNames, "Staff", "Staff");
		} else if($isCleaningStaff->fetch_assoc()['Num'] > 0) {
		    // Select Staff data; nothing additional from CleaningStaff table
		    $result = $conn->query("SELECT StaffID, Name, DOB, Sex, Pay_Rate, YTD_Pay, Hours_Worked_In_Current_Period, LocationID
			FROM Staff
			WHERE StaffID=$bind1");
		    $columnNames = array("StaffID", "Name", "DOB", "Sex", "Pay Rate", "YTD Pay", "Hours Worked In Current Period", "LocationID");
		    $selectNames = array("StaffID", "Name", "DOB", "Sex", "Pay_Rate", "YTD_Pay", "Hours_Worked_In_Current_Period", "LocationID");
		    printTable($result, $columnNames, $selectNames, "Staff", "Staff");

		    // Select data from CleaningStaffCleansRoom, RoomCleaningStatus
		    $result = $conn->query("SELECT cscr.Room_Num, cscr.LocationID, rcs.Last_Cleaned_Date, rcs.Additional_Notes FROM CleaningStaffCleansRoom cscr, RoomCleaningStatus rcs WHERE cscr.Room_Num=rcs.Room_Num AND cscr.LocationID=rcs.LocationID AND cscr.StaffID=$bind1");
		    $columnNames = array("Room Num", "LocationID", "Last Cleaned Date", "Additional Notes");
			$selectNames = array("Room_Num", "LocationID", "Last_Cleaned_Date", "Additional_Notes");
		    printTable($result, $columnNames, $selectNames, "Rooms Cleaned by Staff", "CleaningStaffCleansRooms");
		    
			// Select data from CleaningStaffMaintainsLocker, LockerMaintenanceStatus
		    $result = $conn->query("SELECT csml.Locker_Num, csml.LocationID, lms.Last_Maintenance_Date, lms.Additional_Notes FROM LockerMaintenanceStatus lms, CleaningStaffMaintainsLocker csml WHERE lms.Locker_Num=csml.Locker_Num AND lms.LocationID=csml.LocationID AND csml.StaffID=$bind1");
		    $columnNames = array("Locker #", "LocationID", "Last Maintenance Date", "Additional Notes");
			$selectNames = array("Locker_Num", "LocationID", "Last_Maintenance_Date", "Additional_Notes");
		    printTable($result, $columnNames, $selectNames, "Lockers Maintained by Staff", "CleaningStaffMaintainsLockers");
		} else {
			// Select just Staff data if not CleaningStaff or Lifeguard
			$result = $conn->query("SELECT StaffID, Name, DOB, Sex, Pay_Rate, YTD_Pay, Hours_Worked_In_Current_Period, LocationID  FROM Staff WHERE StaffID=$bind1");
			$columnNames = array("StaffID", "Name", "DOB", "Sex", "Pay Rate", "YTD Pay", "Hours Worked In Current Period", "LocationID");
			$selectNames = array("StaffID", "Name", "DOB", "Sex", "Pay_Rate", "YTD_Pay", "Hours_Worked_In_Current_Period", "LocationID");
			printTable($result, $columnNames, $selectNames, "Staff", "Staff");
		}
			
		// Select data...
		$result = $conn->query("SELECT Shiftdate, Start_Time, End_Time FROM StaffWorksShift WHERE StaffID=$bind1");
		$columnNames = array("Shiftdate", "Start Time", "End Time");
		$selectNames = array("Shiftdate", "Start_Time", "End_Time");
		printTable($result, $columnNames, $selectNames, "This Staff's Shifts", "StaffWorksShift");	

	} else {
    if(array_key_exists('insertStaff', $_POST)) {
		$bind1 = $_POST['StaffID'];
		$bind2 = $_POST['Name'];
		$bind3 = $_POST['DOB'];
		$bind4 = $_POST['Sex'];
		$bind5 = $_POST['PayRate'];
		$bind6 = $_POST['YTDPay'];
		$bind7 = $_POST['HoursWorkedInCurrentPeriod'];
		$bind8 = $_POST['LocationID'];
		$sql = "insert into Staff(StaffID, Name, DOB, Sex, Pay_Rate, YTD_Pay,Hours_Worked_In_Current_Period, LocationID) values($bind1, '$bind2', date '$bind3', '$bind4', $bind5, $bind6, $bind7, $bind8)";
		if ($conn->query($sql) == False) {
			echo "Failed Insert";
		}
    } else if(array_key_exists('updateStaff', $_POST)) {
		$bind1 = $_POST['StaffID'];
		$bind2 = $_POST['Name'];
		$bind3 = $_POST['DOB'];
		$bind4 = $_POST['Sex'];
		$bind5 = $_POST['PayRate'];
		$bind6 = $_POST['YTDPay'];
		$bind7 = $_POST['HoursWorkedInCurrentPeriod'];
		$bind8 = $_POST['LocationID'];
		
		$sql = "update Staff
		set Name='$bind2', DOB=date '$bind3', Sex='$bind4', Pay_Rate=$bind5, YTD_Pay=$bind6, Hours_Worked_In_Current_Period=$bind7, LocationID=$bind8
		WHERE StaffID=$bind1";
		
		if ($conn->query($sql) == False) {
			echo "Failed Update";
		}
    } else if(array_key_exists('deleteStaff', $_POST)) {
		$staffToDelete = $_POST['deleteStaffID'];
		$conn->query("delete FROM Staff WHERE StaffID='$staffToDelete'");
		$conn->query("delete FROM Lifeguard WHERE StaffID='$staffToDelete'");
		$conn->query("delete FROM CleaningStaff WHERE StaffID='$staffToDelete'");
    } else if(array_key_exists('insertLifeguard', $_POST)) {
        $bind1 = $_POST['LifeguardStaffID'];
        $bind2 = $_POST['LifeguardCPRExpiryDate'];
        $bind3 = $_POST['LifeguardSupervisorID'];
		$sql = "insert into Lifeguard (StaffID, CPR_Certification_Expiry_Date, SupervisorID) values ($bind1, $bind2, $bind3)";
    
		if ($conn->query($sql) == False) {
			echo "Failed Insert";
		}
	} else if(array_key_exists('updateLifeguard', $_POST)) {
        $bind1 = $_POST['LifeguardStaffID'];
        $bind2 = $_POST['LifeguardCPRExpiryDate'];
        $bind3 = $_POST['LifeguardSupervisorID'];
		$sql = "update Lifeguard set CPR_Certification_Expiry_Date=date '$bind2', SupervisorID=$bind3
		WHERE StaffID=$bind1";
		if ($conn->query($sql) == False) {
			echo "Failed Update";
		}
	} else if(array_key_exists('insertCleaningStaff', $_POST)) {
        $bind1 = $_POST['CleaningStaffID'];
		$sql = "insert into CleaningStaff (StaffID) values ($bind1)";
    
		if ($conn->query($sql) == False) {
			echo "Failed Insert";
		}
    } if(array_key_exists('insert_shift', $_POST)) {
        $bind1 = $_POST['insDate_shift'];
        $bind2 = $_POST['insStart_Time_shift'];
		$bind3 = $_POST['insEnd_Time_shift'];
		
		$sql = "insert into Shift (Shiftdate, Start_Time, End_Time) values (date '$bind1', $bind2, $bind3)";
		if ($conn->query($sql) == False) {
			echo "Failed Insert";
		}
    } else if(array_key_exists('insert_staffworksshift', $_POST)) {
        $bind1 = $_POST['insStaffID_staffworksshift'];
        $bind2 = $_POST['insDate_staffworksshift'];
        $bind3 = $_POST['insStart_Time_staffworksshift'];
        $bind4 = $_POST['insEnd_Time_staffworksshift'];

		$sql = "insert into StaffWorksShift (StaffID, Shiftdate, Start_Time, End_Time) values ($bind1, date '$bind2', $bind3, $bind4)";
		if ($conn->query($sql) == False) {
			echo "Failed Insert";
		}
	}
		
    // Show all Staff
    $staffResult = $conn->query("SELECT StaffID, Name 
      FROM Staff 
      WHERE StaffID NOT IN (SELECT StaffID FROM Lifeguard) AND StaffID NOT IN (SELECT StaffID FROM CleaningStaff)");
    $staffColumnNames = array("StaffID", "Name");
    printTable($staffResult, $staffColumnNames, $staffColumnNames, "Staff", "StaffAll");

    //Show all Lifeguards
    $lifeguardResult = $conn->query("SELECT lifeguard.StaffID, staff.Name FROM Lifeguard lifeguard, Staff staff WHERE staff.StaffID=lifeguard.StaffID");
    $lifeguardColumnNames = array("StaffID", "Name");
    printTable($lifeguardResult, $lifeguardColumnNames, $lifeguardColumnNames, "Lifeguards", "LifeguardAll");

    //Show all CleaningStaff
    $cleaningStaffResult = $conn->query("SELECT cstaff.StaffID, staff.Name FROM CleaningStaff cstaff, Staff staff WHERE staff.StaffID=cstaff.StaffID");
    $cleaningStaffColumnNames = array("StaffID", "Name");
    printTable($cleaningStaffResult, $cleaningStaffColumnNames, $cleaningStaffColumnNames, "CleaningStaff", "CleaningStaffAll");

    //Show all Shifts
    $shiftResult = $conn->query("SELECT * FROM Shift");
	$shiftColumnNames = array("Shiftdate", "Start Time", "End Time");
    $selectNames= array("Shiftdate", "Start_Time", "End_Time");
    printTable($shiftResult, $shiftColumnNames, $selectNames, "Shifts", "ShiftsAll");
  }
} else {
	echo "cannot connect";
}
	CloseCon($conn);
?>