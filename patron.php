<!--Oracle/PHP test file for UBC CPSC 304.
  Created by Jiemin Zhang, 2011.
  Modified by Simona Radu, Raghav Thakur, Ed Knorr, and others.

  This file shows the very basics of how to execute PHP commands
  on Oracle.

  Specifically, it will drop a table, create a table, insert values,
  update values, and perform select queries.

  NOTE:  If you have a table called "tab1", it will be destroyed
         by this sample program.

  The script assumes you already have a server set up.
  All OCI commands are commands to the Oracle libraries.
  To get the file to work, you must place it somewhere where your
  Apache server can run it, and you must rename it to have a ".php"
  extension.  You must also change the username and password on the
  OCILogon below to be your own ORACLE username and password.

  Next, we have some sample HTML code that will appear when you run
  this script.
 -->

<button onclick="window.location.href = 'home.php';">Home</button>

<br>
<u>Find your info</u>
<p>Enter PatronID:</p>
<form method="POST" action="patron.php">
<!-- refreshes page when submitted -->

<p><input type="text" name="insPatronID" size="6">

<input type="submit" value="Submit" name="selectPatronID">
<input type="submit" value="Reset" name="selectAll"></p>
</form>


<br>
<u>Find your local swimming pool</u>
<p>Enter Location Name</p>
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
<p>Lease Locker</p>
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
   </p>
</form>

<p>Update Lease</p>
<p>
  <font size="2">PatronID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  Locker Number&nbsp;&nbsp;&nbsp;&nbsp;
  LocationID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  New Lease Start Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  New Lease End Date</font>
</p>
<form method="POST" action="patron.php">
<!-- refreshes page when submitted -->
<p>
  <input type="text" name="updatedPatronID_patronleaseslocker" size="8">
  <input type="text" name="updatedLockerNum_patronleaseslocker" size="8">
  <input type="text" name="updatedLocationID_patronleaseslocker"size="8">
  <input type="text" name="updatedLeaseStartDate_patronleaseslocker"size="8">
  <input type="text" name="updatedLeaseEndDate_patronleaseslocker"size="8">
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
		width: 35%;
	}

	#PatronAll {
		width: 5%;
	}

	#Membership {
		width: 25%;
	}

	#Dependents {
		width: 15%;
	}

	#Visit {
		width: 15%;
	}

	#PatronLeasesLocker {
		width: 30%;
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
$db_conn = OCILogon("ora_changmat", "a84452614",
                    "dbhost.students.cs.ubc.ca:1522/stu");

function executePlainSQL($cmdstr) {
     // Take a plain (no bound variables) SQL command and execute it.
	//echo "<br>running ".$cmdstr."<br>";
	global $db_conn, $success;
	$statement = OCIParse($db_conn, $cmdstr);
     // There is a set of comments at the end of the file that
     // describes some of the OCI specific functions and how they work.

	if (!$statement) {
		echo "<br>Cannot parse this command: " . $cmdstr . "<br>";
		$e = OCI_Error($db_conn);
           // For OCIParse errors, pass the connection handle.
		echo htmlentities($e['message']);
		$success = False;
	}

	$r = OCIExecute($statement, OCI_DEFAULT);
	if (!$r) {
		echo "<br>Cannot execute this command: " . $cmdstr . "<br>";
		$e = oci_error($statement);
           // For OCIExecute errors, pass the statement handle.
		echo htmlentities($e['message']);
		$success = False;
	} else {

	}
	return $statement;

}

function executeBoundSQL($cmdstr, $list) {
	/* Sometimes the same statement will be executed several times.
        Only the value of variables need to be changed.
	   In this case, you don't need to create the statement several
        times.  Using bind variables can make the statement be shared
        and just parsed once.
        This is also very useful in protecting against SQL injection
        attacks.  See the sample code below for how this function is
        used. */

	global $db_conn, $success;
	$statement = OCIParse($db_conn, $cmdstr);

	if (!$statement) {
		echo "<br>Cannot parse this command: " . $cmdstr . "<br>";
		$e = OCI_Error($db_conn);
		echo htmlentities($e['message']);
		$success = False;
	}

	foreach ($list as $tuple) {
		foreach ($tuple as $bind => $val) {
			//echo $val;
			//echo "<br>".$bind."<br>";
			OCIBindByName($statement, $bind, $val);
			unset ($val); // Make sure you do not remove this.
                              // Otherwise, $val will remain in an
                              // array object wrapper which will not
                              // be recognized by Oracle as a proper
                              // datatype.
		}
		$r = OCIExecute($statement, OCI_DEFAULT);
		if (!$r) {
			echo "<br>Cannot execute this command: " . $cmdstr . "<br>";
			$e = OCI_Error($statement);
                // For OCIExecute errors pass the statement handle
			echo htmlentities($e['message']);
			echo "<br>";
			$success = False;
		}
	}
	return $statement;
}

function printResult($result) { //prints results from a select statement
	echo "<br>Got data from table tab1:<br>";
	echo "<table>";
	echo "<tr><th>ID</th><th>Name</th></tr>";

	while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
		echo "<tr><td>" . $row["NID"] . "</td><td>" . $row["NAME"] . "</td></tr>"; //or just use "echo $row[0]"
	}
	echo "</table>";
}


/*
Function printTable created by Raghav Thakur on 2018-11-15.

Input:  takes in a result returned from your SQL query and an array of
        strings of the column names
Output: prints an HTML table of the results returned from your SQL query.

printTable is an easy way to iteratively print the columns of a table,
instead of having to manually print out each column which can be
cumbersome and lead to duplicate code all over the place.

If you will be making calls to printTable multiple times and intend to
use it for multiple php files, please do the following:

Step 1) Create a new php file and copy the printTable function and the
        associated HTML styling code into the file you created, give
        this file a meaningful name such as 'print-table.php'.
        (Search for "style" above.)

Step 2) In whichever file you want to use the printTable function,
        assuming this file also contains the server code to communicate
        with the database:  Type in "include 'print-table.php'" without
        double quotes.  If the file in which you want to use printTable
        is not in the root directory, you'll need to specify the path of
        root directory where 'print-table.php' is.  As an example:
        "include '../print-table.php'" without double quotes.

Step 3) You can now make calls to the printTable function without
        needing to redeclare it in your current file.

Note:  You can move all the server code into a separate file called
       'server.php' in a similar way, except whichever file needs to
       use the server code needs to have "require 'server.php'" without
       double quotes.  So, you might have something like what's shown
       below in each file:

require 'server.php';
require 'print-table.php'

Using printTable as an example:

Note: PHP uses '$' to declare variables

$result = executePlainSQL("SELECT CUST_ID, NAME, PHONE_NUM FROM CUSTOMERS");

$columnNames = array("Customer ID", "Name", "Phone Number");
printTable($result, $columnNames); // this will print the table
                                   // in the current webpage

*/

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

    while ($row = OCI_Fetch_Array($resultFromSQL, OCI_BOTH)) {
        echo "<tr>";
        $string = "";

        // iterates through the results returned from SQL query and
        // creates the contents of the table
        for ($i = 0; $i < sizeof($namesOfColumnsArray); $i++) {
            $string .= "<td>" . $row["$i"] . "</td>";
        }
        echo $string;
        echo "</tr>";
    }
    echo "</table>";
}

// Connect Oracle...
if ($db_conn) {
	OCICommit($db_conn);

	if (array_key_exists('selectPatronID', $_POST)) {
		// Get values from the user and insert data into
			// the table.
		$tuple = array (
			":bind1" => $_POST['insPatronID']
		);
		$alltuples = array (
			$tuple
		);
		// Select data...
		$result = executeBoundSQL("select p.Name, p.DOB, p.Sex, p.Phone_Number, p.Postal_Code, a.Street, a.City, a.Province, p.Num_Dependents from Patron p, Address a where p.Postal_Code=a.Postal_Code and PatronID=:bind1", $alltuples);
		$columnNames = array("Name", "DOB", "Sex", "Phone Number", "Postal Code", "Street", "City", "Province", "Dependents");
		printTable($result, $columnNames, "Patron", "Patron");

		// Select data...
		$result = executeBoundSQL("select m.MembershipID, m.Start_Date, me.End_Date, m.Amount_Paid, m.Payment_Type from Membership m, MembershipExpiry me where m.PatronID=me.PatronID and m.Start_Date=me.Start_Date and m.PatronID=:bind1", $alltuples);
		$columnNames = array("MembershipID", "Start Date", "End Date", "Amount Paid ($)", "Payment Type");
		printTable($result, $columnNames, "Memberships", "Membership");

		// Select data...
		$result = executeBoundSQL("select Name, DOB, Sex, Relationship_To_Patron from Dependents where PatronID=:bind1", $alltuples);
		$columnNames = array("Name", "DOB", "Sex", "Relationship");
		printTable($result, $columnNames, "Dependents", "Dependents");

		// Select data...
		$result = executeBoundSQL("select l.LocationID, l.Location_Name, v.visitdate from Visits v, Location l where v.LocationID=l.LocationID and PatronID=:bind1", $alltuples);
		$columnNames = array("Location ID", "Location", "Date");
		printTable($result, $columnNames, "Visits", "Visit");

		// Select data...
		$result = executeBoundSQL("select l.LocationID, loc.Location_Name, pl.Locker_Num, l.Condition, pl.Lease_Start_Date, pl.Lease_End_Date from Location loc, PatronLeasesLocker pl, Locker l where pl.LocationID=loc.LocationID and pl.LocationID=l.LocationID and pl.Locker_Num=l.Locker_Num and pl.PatronID=:bind1", $alltuples);
		$columnNames = array("LocationID", "Location", "Locker Number", "Locker Condition", "Lease Start", "Lease End");
		printTable($result, $columnNames, "Lockers", "PatronLeasesLocker");
	} else if (array_key_exists('selectLocationID', $_POST)) {
		// Get values from the user and insert data into
			// the table.
		$tuple = array (
			":bind1" => $_POST['queryLocationID']
		);
		$alltuples = array (
			$tuple
		);
		// Select data...
		$result = executeBoundSQL("select l.location_name, l.Opening_Time, l.Closing_Time, l.Phone_Number, l.Postal_Code, a.street, a.city, a.province from Location l, Address a where l.Postal_Code=a.Postal_Code and l.locationID=:bind1", $alltuples);
		$columnNames = array("Name", "Opening Time", "Closing Time", "Phone Number", "Postal Code", "Street", "City", "Province");
		printTable($result, $columnNames, "Location", "Location");

    //this query is not working on the webpage, and I have no clue why. It works in the command line. I would love if someone could tell me what I am doing wrong here
  /*  // Select data...
		$result = executeBoundSQL("select r.Room_Type from Location l, Room r where l.locationID=2 and l.LocationID=r.LocationID", $alltuples);
		$columnNames = array("Room Types");
		printTable($result, $columnNames, "Facilities", "Facilities"); */
    // Select data...
		$result = executeBoundSQL("select lo.Locker_Num, lo.condition from Location l, Locker lo where l.LocationID=lo.LocationID and l.locationID=:bind1 and lo.locker_num not in (Select pll.locker_num from PatronLeasesLocker pll where pll.LocationID=l.locationID) order by lo.Locker_Num", $alltuples);
		$columnNames = array("Locker_Num", "Condition");
		printTable($result, $columnNames, "Empty Lockers", "Empty_Lockers");
	} else {
		if(array_key_exists('insert_dependents', $_POST)) {
		// Update identified row in Address table
		$tuple = array (
			":bind1" => $_POST['insName_dependents'],
			":bind2" => $_POST['insPatronID_dependents'],
			":bind3" => $_POST['insDOB_dependents'],
			":bind4" => $_POST['insSex_dependents'],
			":bind5" => $_POST['insRelationshipToPatron_dependents']
		);
		$alltuples = array (
			$tuple
		);
		$id = $_POST['insPatronID_dependents'];
		executePlainSQL("update Patron set Num_Dependents = Num_Dependents + 1 where PatronID=$id");
		executeBoundSQL("insert into dependents values (:bind1, :bind2, :bind3, :bind4, :bind5)", $alltuples);
		OCICommit($db_conn);
		} else if(array_key_exists('delete_dependents', $_POST)) {
			$deletedName_dependents = $_POST['deletedName_dependents'];
			$deletedPatronID_dependents = $_POST['deletedPatronID_dependents'];
			
			if (executePlainSQL("select Num_Dependents from Patron where PatronID=$deletedPatronID_dependents") > 1) {
				executePlainSQL("update Patron set Num_Dependents = Num_Dependents - 1 where PatronID=$deletedPatronID_dependents");
				executePlainSQL("delete from dependents where Name='$deletedName_dependents' and PatronID=$deletedPatronID_dependents");
			}
			OCICommit($db_conn);
		} else if(array_key_exists('insert_membership', $_POST)) {
		  // Update identified row in Address table
				$tuple = array (
			":bind1" => $_POST['insMembershipID_membership'],
			":bind2" => $_POST['insStartDate_membership'],
			":bind3" => $_POST['insEndDate_membership'],
			":bind4" => $_POST['insPaymentType_membership'],
			":bind5" => $_POST['insAmountPaid_membership'],
			":bind6" => $_POST['insPatronID_membership']
			);
			$alltuples = array (
				$tuple
			);

			executeBoundSQL("insert into Membership values (:bind1, :bind2, :bind4, :bind5, :bind6)", $alltuples);
			executeBoundSQL("insert into MembershipExpiry values (:bind6, :bind2, :bind5, :bind3)", $alltuples);
			OCICommit($db_conn);
		} else if(array_key_exists('delete_membership', $_POST)) {
			$deletedMembershipID_membership = $_POST['deletedMembershipID_membership'];
			executePlainSQL("delete from MembershipExpiry where
				PatronID=(select PatronID from Membership where MembershipID=$deletedMembershipID_membership) and
				Start_Date=(select Start_Date from Membership where MembershipID=$deletedMembershipID_membership) and
				Amount_Paid=(select Amount_Paid from Membership where MembershipID=$deletedMembershipID_membership)");
			executePlainSQL("delete from Membership where MembershipID=$deletedMembershipID_membership");
			OCICommit($db_conn);
		} else if(array_key_exists('insert_patronleaseslocker', $_POST)) {
			// Update identified row in Address table
			$tuple = array (
			":bind1" => $_POST['insPatronID_patronleaseslocker'],
			":bind2" => $_POST['insLockerNum_patronleaseslocker'],
			":bind3" => $_POST['insLocationID_patronleaseslocker'],
			":bind4" => $_POST['insLeaseStartDate_patronleaseslocker'],
			":bind5" => $_POST['insLeaseEndDate_patronleaseslocker']
			);
			$alltuples = array (
				$tuple
			);
			executeBoundSQL("insert into PatronLeasesLocker values (:bind1, :bind2, :bind3, :bind4, :bind5)", $alltuples);
			OCICommit($db_conn);
		} else if(array_key_exists('update_patronleaseslocker', $_POST)) {
			// Update identified row in Address table
			$tuple = array (
			":bind1" => $_POST['updatedPatronID_patronleaseslocker'],
			":bind2" => $_POST['updatedLockerNum_patronleaseslocker'],
			":bind3" => $_POST['updatedLocationID_patronleaseslocker'],
			":bind4" => $_POST['updatedLeaseStartDate_patronleaseslocker'],
			":bind5" => $_POST['updatedLeaseEndDate_patronleaseslocker']
			);
			$alltuples = array (
				$tuple
			);
			executeBoundSQL("update PatronLeasesLocker set Lease_Start_Date=:bind4, Lease_End_Date=:bind5 where PatronID=:bind1 and Locker_Num=:bind2 and locationID=:bind3", $alltuples);
			OCICommit($db_conn);
		} else if(array_key_exists('delete_patronleaseslocker', $_POST)) {
			$deletedPatronID_patronleaseslocker = $_POST['deletedPatronID_patronleaseslocker'];
			$deletedLockerNum_patronleaseslocker = $_POST['deletedLockerNum_patronleaseslocker'];
			$deletedLocationID_patronleaseslocker = $_POST['deletedLocationID_patronleaseslocker'];
			executePlainSQL("delete from patronleaseslocker where PatronID=$deletedPatronID_patronleaseslocker and Locker_Num=$deletedLockerNum_patronleaseslocker and LocationID=$deletedLocationID_patronleaseslocker");
			OCICommit($db_conn);
		}

		// Select data...
		$result = executePlainSQL("select PatronID, Name from Patron");
		/*printResult($result);*/
		/* next two lines from Raghav replace previous line */
		$columnNames = array("PatronID", "Name");
		printTable($result, $columnNames, "Patrons", "PatronAll");

    // Select data...
    $result = executePlainSQL("select l.locationID, l.Location_Name from Location l order by locationID");
    /*printResult($result);*/
    /* next two lines from Raghav replace previous line */
    $columnNames = array("LocationID", "Location Name");
    printTable($result, $columnNames, "Locations", "LocationAll");
	}
	//Commit to save changes...
	OCILogoff($db_conn);
} else {
	echo "cannot connect";
	$e = OCI_Error(); // For OCILogon errors pass no handle
	echo htmlentities($e['message']);
}

/* OCILogon() allows you to log onto the Oracle database
     The three arguments are the username, password, and database.
     You will need to replace "username" and "password" for this to
     to work.
     all strings that start with "$" are variables; they are created
     implicitly by appearing on the left hand side of an assignment
     statement */
/* OCIParse() Prepares Oracle statement for execution
      The two arguments are the connection and SQL query. */
/* OCIExecute() executes a previously parsed statement
      The two arguments are the statement which is a valid OCI
      statement identifier, and the mode.
      default mode is OCI_COMMIT_ON_SUCCESS. Statement is
      automatically committed after OCIExecute() call when using this
      mode.
      Here we use OCI_DEFAULT. Statement is not committed
      automatically when using this mode. */
/* OCI_Fetch_Array() Returns the next row from the result data as an
     associative or numeric array, or both.
     The two arguments are a valid OCI statement identifier, and an
     optinal second parameter which can be any combination of the
     following constants:

     OCI_BOTH - return an array with both associative and numeric
     indices (the same as OCI_ASSOC + OCI_NUM). This is the default
     behavior.
     OCI_ASSOC - return an associative array (as OCI_Fetch_Assoc()
     works).
     OCI_NUM - return a numeric array, (as OCI_Fetch_Row() works).
     OCI_RETURN_NULLS - create empty elements for the NULL fields.
     OCI_RETURN_LOBS - return the value of a LOB of the descriptor.
     Default mode is OCI_BOTH.  */
?>
