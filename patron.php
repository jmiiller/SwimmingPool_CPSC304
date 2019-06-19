<p>
<button onclick="window.location.href = 'home.php';">Home</button>
</p>
<br>
<u>Find your info</u>
<p>Enter PatronID</p>
<form method="POST" action="patron.php">
<!-- refreshes page when submitted -->

<p><input type="text" name="insPatronID" size="6">

<input type="submit" value="Submit" name="selectPatronID">
<input type="submit" value="Reset" name="selectAll"></p>
</form>

<br>
<u>Find your local swimming pool</u>
<p>Enter LocationID</p>
<form method="POST" action="patron.php">
<!-- refreshes page when submitted -->

<p><input type="text" name="queryLocationID" size="6">

<input type="submit" value="Submit" name="selectLocationID">
<input type="submit" value="Reset" name="selectAll"></p>
</form>

<br>
<u>Memberships</u>
<!-- Membership -->
<p>Buy Membership</p>
<p>
  <font size="2"> MembershipID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  Start Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  End Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  Payment Type&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  Amount Paid&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  PatronID</font>
</p>
<form method="POST" action="patron.php">
<!-- refreshes page when submitted -->
   <p>
      <input type="text" name="insMembershipID_membership" size="8">
      <input type="text" name="insStartDate_membership" size="8">
	  <input type="text" name="insEndDate_membership" size="8">
      <input type="text" name="insPaymentType_membership"size="8">
      <input type="text" name="insAmountPaid_membership"size="8">
      <input type="text" name="insPatronID_membership"size="10">
      <input type="submit" value="Buy" name="insert_membership">
   </p>
</form>

<p> Delete Membership </p>
<p><font size="2">MembershipID</font></p>
<form method="POST" action="patron.php">
<!-- refreshes page when submitted -->

   <p>
      <input type="text" name="deletedMembershipID_membership" size="6">
      <input type="submit" value="Delete" name="delete_membership">
   </p>
</form>

<!-- Patron -->
<p> Delete Patron </p>
<p><font size="2">PatronID</font></p>
<form method="POST" action="patron.php">
<!-- refreshes page when submitted -->

   <p>
      <input type="text" name="deletedPatronID_patron" size="6">
      <input type="submit" value="Delete" name="delete_patron">
   </p>
</form>

<!-- Dependents -->
<p>Add Dependent</p>
<p>
  <font size="2"> Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  PatronID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  DOB&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  Sex&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  Relationship To Patron</font>
</p>
<form method="POST" action="patron.php">
<!-- refreshes page when submitted -->
   <p>
     <input type="text" name="insName_dependents" size="8">
      <input type="text" name="insPatronID_dependents" size="8">
      <input type="text" name="insDOB_dependents"size="8">
      <input type="text" name="insSex_dependents"size="8">
      <input type="text" name="insRelationshipToPatron_dependents"size="10">
      <input type="submit" value="Add" name="insert_dependents">
   </p>
</form>

<p> Delete Dependent</p>
<p><font size="2">Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  PatronID</font></p>
<form method="POST" action="patron.php">
<!-- refreshes page when submitted -->

   <p>
      <input type="text" name="deletedName_dependents" size="6">
      <input type="text" name="deletedPatronID_dependents" size="6">
      <input type="submit" value="Delete" name="delete_dependents">
   </p>
</form>

<br>
<u>Lockers</u>
<!-- PatronLeasesLocker -->
<p>Buy/Update Lease Locker</p>
<p>
  <font size="2">PatronID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  Locker Number&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  LocationID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  Lease Start Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  Lease End Date</font>
</p>
<form method="POST" action="patron.php">
<!-- refreshes page when submitted -->
   <p>
      <input type="text" name="insPatronID_patronleaseslocker" size="8">
      <input type="text" name="insLockerNum_patronleaseslocker" size="8">
      <input type="text" name="insLocationID_patronleaseslocker"size="8">
      <input type="text" name="insLeaseStartDate_patronleaseslocker"size="8">
      <input type="text" name="insLeaseEndDate_patronleaseslocker"size="8">
      <input type="submit" value="Lease" name="insert_patronleaseslocker">
	  <input type="submit" value="Update" name="update_patronleaseslocker">
   </p>
</form>

<p>Delete Lease</p>
<p><font size="2">PatronID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  Locker Number&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  LocationID</font></p>
<form method="POST" action="patron.php">
<!-- refreshes page when submitted -->

   <p>
      <input type="text" name="deletedPatronID_patronleaseslocker" size="6">
      <input type="text" name="deletedLockerNum_patronleaseslocker" size="6">
      <input type="text" name="deletedLocationID_patronleaseslocker" size="6">
      <input type="submit" value="Delete" name="delete_patronleaseslocker">
   </p>
</form>

<html>
<style>
    #table {
        border: 1px solid black;
    }

	#Patron {
		width: 50%;
	}

	#PatronAll {
		width: 5%;
	}

	#Membership {
		width: 35%;
	}

	#Dependents {
		width: 20%;
	}

	#Visit {
		width: 20%;
	}

	#PatronLeasesLocker {
		width: 45%;
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
	if (array_key_exists('selectPatronID', $_POST)) {
		$bind1 = $_POST['insPatronID'];

		// Select data...
		$result = $conn->query("select p.Name, p.DOB, p.Sex, p.Phone_Number, p.Postal_Code, a.Street, a.City, a.Province
		from Address a, Patron p
		where p.Postal_Code=a.Postal_Code and p.PatronID=$bind1
		group by p.PatronID, p.Name, p.DOB, p.Sex, p.Phone_Number, p.Postal_Code, a.Street, a.City, a.Province");
		$columnNames = array("Name", "DOB", "Sex", "Phone #", "Postal Code", "Street", "City", "Province");
		$selectNames = array("Name", "DOB", "Sex", "Phone_Number", "Postal_Code", "Street", "City", "Province");
		printTable($result, $columnNames, $selectNames, "Patron", "Patron");

		// Select data...
		$result = $conn->query("select m.MembershipID, m.Start_Date, me.End_Date, m.Amount_Paid, m.Payment_Type
		from Membership m, MembershipExpiry me
		where m.PatronID=me.PatronID and m.Start_Date=me.Start_Date and m.PatronID=$bind1");
		$columnNames = array("MembershipID", "Start Date", "End Date", "Amount Paid ($)", "Payment Type");
		$selectNames = array("MembershipID", "Start_Date", "End_Date", "Amount_Paid", "Payment_Type");
		printTable($result, $columnNames, $selectNames, "Memberships", "Membership");

		// Select data...
		$result = $conn->query("select Name, DOB, Sex, Relationship_To_Patron from Dependents where PatronID=$bind1");
		$columnNames = array("Name", "DOB", "Sex", "Relationship");
		$selectNames = array("Name", "DOB", "Sex", "Relationship_To_Patron");
		printTable($result, $columnNames, $selectNames, "Dependents", "Dependents");

		// Select data...
		$result = $conn->query("select l.LocationID, l.Location_Name, v.visitdate
		from Visits v, Location l
		where v.LocationID=l.LocationID and PatronID=$bind1");
		$columnNames = array("Location ID", "Location", "Date");
		$selectNames = array("LocationID", "Location_Name", "visitdate");
		printTable($result, $columnNames, $selectNames, "Visits", "Visit");

		// Select data...
		$result = $conn->query("select l.LocationID, loc.Location_Name, pl.Locker_Num, l.Locker_Condition, pl.Lease_Start_Date, pl.Lease_End_Date
		from Location loc, PatronLeasesLocker pl, Locker l
		where pl.LocationID=loc.LocationID and pl.LocationID=l.LocationID and pl.Locker_Num=l.Locker_Num and pl.PatronID=$bind1");
		$columnNames = array("LocationID", "Location", "Locker Number", "Locker Condition", "Lease Start", "Lease End");
		$selectNames = array("LocationID", "Location_Name", "Locker_Num", "Locker_Condition", "Lease_Start_Date", "Lease_End_Date");
		printTable($result, $columnNames, $selectNames, "Lockers", "PatronLeasesLocker");
	} else if (array_key_exists('selectLocationID', $_POST)) {
		$bind1 = $_POST['queryLocationID'];

		// Select data...
		$result = $conn->query("select l.Location_Name, l.Opening_Time, l.Closing_Time, l.Phone_Number, l.Postal_Code, a.Street, a.City, a.Province
		from Location l, Address a
		where l.Postal_Code=a.Postal_Code and l.locationID=$bind1");
		$columnNames = array("Name", "Opening Time", "Closing Time", "Phone #", "Postal Code", "Street", "City", "Province");
		$selectNames = array("Location_Name", "Opening_Time", "Closing_Time", "Phone_Number", "Postal_Code", "Street", "City", "Province");
		printTable($result, $columnNames, $selectNames, "Location", "Location");

		// Select data...
		$result = $conn->query("select r.Room_Type, rc.Capacity
		from Location l, Room r, RoomCapacity rc
		where l.locationID=$bind1 and l.LocationID=r.LocationID and r.Room_Type=rc.Room_Type");
		$columnNames = array("Room Type", "Capacity");
		$selectNames = array("Room_Type", "Capacity");
		printTable($result, $columnNames, $selectNames, "Facilities", "Facilities");

		// Select data...
		$result = $conn->query("select lo.Locker_Num, lo.Locker_Condition
		from Location l, Locker lo
		where l.LocationID=lo.LocationID and l.LocationID=$bind1 and lo.Locker_Num not in (Select pll.Locker_Num from PatronLeasesLocker pll where pll.LocationID=l.LocationID) order by lo.Locker_Num");
		$columnNames = array("Locker #", "Condition");
		$selectNames = array("Locker_Num", "Locker_Condition");
		printTable($result, $columnNames, $selectNames, "Empty Lockers", "Empty_Lockers");
	} else {
		if(array_key_exists('insert_dependents', $_POST)) {
			$bind1 = $_POST['insName_dependents'];
			$bind2 = $_POST['insPatronID_dependents'];
			$bind3 = $_POST['insDOB_dependents'];
			$bind4 = $_POST['insSex_dependents'];
			$bind5 = $_POST['insRelationshipToPatron_dependents'];
			$sql = "insert into Dependents (Name, PatronID, DOB, Sex, Relationship_To_Patron) values ('$bind1', $bind2, date '$bind3', '$bind4', '$bind5')";
			if ($conn->query($sql) == False) {
				echo "Failed Insert";
			}
		} else if(array_key_exists('delete_patron', $_POST)) {
			$deletedPatronID_patron = $_POST['deletedPatronID_patron'];

			$conn->query("delete from Patron where PatronID=$deletedPatronID_dependents");
		} else if(array_key_exists('delete_dependents', $_POST)) {
			$deletedName_dependents = $_POST['deletedName_dependents'];
			$deletedPatronID_dependents = $_POST['deletedPatronID_dependents'];

			$conn->query("delete from Dependents where Name='$deletedName_dependents' and PatronID=$deletedPatronID_dependents");
		} else if(array_key_exists('insert_membership', $_POST)) {
			$bind1 = $_POST['insMembershipID_membership'];
			$bind2 = $_POST['insStartDate_membership'];
			$bind3 = $_POST['insEndDate_membership'];
			$bind4 = $_POST['insPaymentType_membership'];
			$bind5 = $_POST['insAmountPaid_membership'];
			$bind6 = $_POST['insPatronID_membership'];

			$sql = "insert into Membership (MembershipID, Start_Date, Payment_Type, Amount_Paid, PatronID) values ('$bind1', date '$bind2', '$bind4', $bind5 , $bind6)";
			if ($conn->query($sql) == False) {
				echo "Failed Insert";
			} else {
				$sql = "insert into MembershipExpiry (PatronID, Start_Date, Amount_Paid, End_Date) values ($bind6, date '$bind2', $bind5, date '$bind3')";
				if ($conn->query($sql) == False) {
					echo "Failed Insert";

					$conn->query("delete from MembershipExpiry where
					PatronID=(select PatronID from Membership where MembershipID=$bind1) and
					Start_Date=(select Start_Date from Membership where MembershipID=$bind1) and
					Amount_Paid=(select Amount_Paid from Membership where MembershipID=$bind1)");
				}
			}
		} else if(array_key_exists('delete_membership', $_POST)) {
			$deletedMembershipID_membership = $_POST['deletedMembershipID_membership'];
			$conn->query("delete from MembershipExpiry where
				PatronID=(select PatronID from Membership where MembershipID=$deletedMembershipID_membership) and
				Start_Date=(select Start_Date from Membership where MembershipID=$deletedMembershipID_membership) and
				Amount_Paid=(select Amount_Paid from Membership where MembershipID=$deletedMembershipID_membership)");
			$conn->query("delete from Membership where MembershipID=$deletedMembershipID_membership");
		} else if(array_key_exists('insert_patronleaseslocker', $_POST)) {
			$bind1 = $_POST['insPatronID_patronleaseslocker'];
			$bind2 = $_POST['insLockerNum_patronleaseslocker'];
			$bind3 = $_POST['insLocationID_patronleaseslocker'];
			$bind4 = $_POST['insLeaseStartDate_patronleaseslocker'];
			$bind5 = $_POST['insLeaseEndDate_patronleaseslocker'];

			$sql = "insert into PatronLeasesLocker (PatronID,Locker_Num, LocationID, Lease_Start_Date, Lease_End_Date) values ($bind1, $bind2, $bind3, date '$bind4', date '$bind5')";
			if ($conn->query($sql) == False) {
				echo "Failed Insert";
			}
		} else if(array_key_exists('update_patronleaseslocker', $_POST)) {
			$bind1 = $_POST['insPatronID_patronleaseslocker'];
			$bind2 = $_POST['insLockerNum_patronleaseslocker'];
			$bind3 = $_POST['insLocationID_patronleaseslocker'];
			$bind4 = $_POST['insLeaseStartDate_patronleaseslocker'];
			$bind5 = $_POST['insLeaseEndDate_patronleaseslocker'];

			$sql = "update PatronLeasesLocker
			set Lease_Start_Date=date '$bind4', Lease_End_Date=date '$bind5'
			where PatronID=$bind1 and Locker_Num=$bind2 and LocationID=$bind3";
			if ($conn->query($sql) == False) {
				echo "Failed Update";
			}
		} else if(array_key_exists('delete_patronleaseslocker', $_POST)) {
			$deletedPatronID_patronleaseslocker = $_POST['deletedPatronID_patronleaseslocker'];
			$deletedLockerNum_patronleaseslocker = $_POST['deletedLockerNum_patronleaseslocker'];
			$deletedLocationID_patronleaseslocker = $_POST['deletedLocationID_patronleaseslocker'];
			$conn->query("delete from patronleaseslocker
			where PatronID=$deletedPatronID_patronleaseslocker and Locker_Num=$deletedLockerNum_patronleaseslocker and LocationID=$deletedLocationID_patronleaseslocker");
		}

		// Select data...
		$result = $conn->query("select PatronID, Name from Patron");
		$columnNames = array("PatronID", "Name");
		printTable($result, $columnNames, $columnNames, "Patrons", "PatronAll");

		// Select data...
		$result = $conn->query("select l.LocationID, l.Location_Name from Location l order by locationID");
		$columnNames = array("LocationID", "Location Name");
		$selectNames = array("LocationID", "Location_Name");
		printTable($result, $columnNames, $selectNames, "Locations", "LocationAll");

    // Select data...
		$result = $conn->query("select d.name, d.patronid, d.Relationship_To_Patron from Dependents d order by d.patronid");
		$columnNames = array("Name", "PatronID", "Relationship To Patron");
		$selectNames = array("Name", "PatronID", "Relationship_To_Patron");
		printTable($result, $columnNames, $selectNames, "Dependents", "DependentsAll");
	}
} else {
	echo "cannot connect";
}

	CloseCon($conn);
?>
