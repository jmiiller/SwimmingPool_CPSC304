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

<!-- Address -->
<p>Insert Address</p>
<p>
  <font size="2"> Postal_Code&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  Street&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  City&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  Province</font>
</p>
<form method="POST" action="swimmingpool.php">
<!-- refreshes page when submitted -->
   <p>
      <input type="text" name="insPostalCode_address" size="6">
      <input type="text" name="insStreet_address"size="20">
      <input type="text" name="inCity_address" size="20">
      <input type="text" name="insProvince_address" size="2">
      <input type="submit" value="insert address" name="insert_address">
   </p>
</form>

<p> Update Address </p>
<p><font size="2"> Old Postal Code&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   New Postal Code&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   New Street&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   New City&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   New Province</font></p>
<form method="POST" action="swimmingpool.php">
<!-- refreshes page when submitted -->

   <p>
      <input type="text" name="oldPostalCode_address" size="6">
      <input type="text" name="updatedPostalCode_address" size="6">
      <input type="text" name="updatedStreet_address"size="20">
      <input type="text" name="updatedCity_address" size="20">
      <input type="text" name="updatedProvince_address" size="2">
      <input type="submit" value="update address" name="update_address">
   </p>
</form>

<p> Delete Address </p>
<p><font size="2">Postal Code</font></p>
<form method="POST" action="swimmingpool.php">
<!-- refreshes page when submitted -->

   <p>
      <input type="text" name="deletedPostalCode_address" size="6">
      <input type="submit" value="delete address" name="delete_address">
   </p>
</form>


<!-- Location -->
<p>Insert Location</p>
<p>
  <font size="2"> LocationID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  Location Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  Opening Time&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  Closing Time&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  Phone Number&nbsp;&nbsp;&nbsp;&nbsp;
  Postal_Code</font>
</p>
<form method="POST" action="swimmingpool.php">
<!-- refreshes page when submitted -->
   <p>
      <input type="text" name="insLocationID_location" size="8">
      <input type="text" name="insLocationName_location"size="20">
      <input type="text" name="insOpeningTime_location" size="6">
      <input type="text" name="insClosingTime_location" size="6">
      <input type="text" name="insPhoneNum_location" size="10">
      <input type="text" name="insPostalCode_location" size="6">
      <input type="submit" value="insert location" name="insert_location">
   </p>
</form>

<p> Update Location </p>
<p>
  <font size="2"> OldLocationID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  New LocationID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  New Location Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  New Opening Time&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  New Closing Time&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  New Phone Number&nbsp;&nbsp;&nbsp;&nbsp;
  New Postal_Code</font>
</p>
<form method="POST" action="swimmingpool.php">
<!-- refreshes page when submitted -->

<p>
   <input type="text" name="oldLocationID_location" size="8">
   <input type="text" name="updatedLocationID_location" size="8">
   <input type="text" name="updatedLocationName_location"size="20">
   <input type="text" name="updatedOpeningTime_location" size="6">
   <input type="text" name="updatedClosingTime_location" size="6">
   <input type="text" name="updatedPhoneNum_location" size="10">
   <input type="text" name="updatedPostalCode_location" size="6">
   <input type="submit" value="update location" name="update_location">
</p>
</form>

<p> Delete Location </p>
<p><font size="2">LocationID</font></p>
<form method="POST" action="swimmingpool.php">
<!-- refreshes page when submitted -->

   <p>
      <input type="text" name="deletedLocationID_location" size="6">
      <input type="submit" value="delete location" name="delete_location">
   </p>
</form>

<!-- EquipmentType -->
<p>Insert Equipment Type</p>
<p>
  <font size="2"> EquipmentID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  Type</font>
</p>
<form method="POST" action="swimmingpool.php">
<!-- refreshes page when submitted -->
   <p>
      <input type="text" name="insEquipmentID_equipmenttype" size="8">
      <input type="text" name="insType_equipmenttype"size="30">
      <input type="submit" value="insert equipment type" name="insert_equipmenttype">
   </p>
</form>

<p>Update Equipment Type</p>
<p>
  <font size="2"> Old EquipmentID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  New EquipmentID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  New Type</font>
</p>
<form method="POST" action="swimmingpool.php">
<!-- refreshes page when submitted -->

<p>
   <input type="text" name="oldEquipmentID_equipmenttype" size="8">
   <input type="text" name="updatedEquipmentID_equipmenttype" size="8">
   <input type="text" name="updatedType_equipmenttype"size="30">
   <input type="submit" value="update equipment type" name="update_equipmenttype">
</p>
</form>

<p> Delete EquipmentType </p>
<p><font size="2">EquipmentID</font></p>
<form method="POST" action="swimmingpool.php">
<!-- refreshes page when submitted -->

   <p>
      <input type="text" name="deletedEquipmentID_equipmenttype" size="6">
      <input type="submit" value="delete EquipmentType" name="delete_equipmenttype">
   </p>
</form>

<!-- Equipment -->
<p>Insert Equipment</p>
<p>
  <font size="2"> EquipmentID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  LocationID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  Quantity</font>
</p>
<form method="POST" action="swimmingpool.php">
<!-- refreshes page when submitted -->
   <p>
      <input type="text" name="insEquipmentID_equipment" size="8">
      <input type="text" name="insLocationID_equipment"size="30">
      <input type="text" name="insQuantity_equipment"size="30">
      <input type="submit" value="insert equipment" name="insert_equipment">
   </p>
</form>

<p>Update Equipment</p>
<p>
  <font size="2"> Old EquipmentID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  Old LocationID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  New EquipmentID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  New LocationID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  New Quantity</font>
</p>
<form method="POST" action="swimmingpool.php">
<!-- refreshes page when submitted -->

<p>
   <input type="text" name="oldEquipmentID_equipment" size="8">
   <input type="text" name="oldLocationID_equipment" size="8">
   <input type="text" name="updatedEquipmentID_equipment" size="8">
   <input type="text" name="updatedLocationID_equipment" size="8">
   <input type="text" name="updatedQuantity_equipment"size="30">
   <input type="submit" value="update equipment" name="update_equipment">
</p>
</form>

<p> Delete Equipment </p>
<p><font size="2">EquipmentID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  LocationID</font></p>
<form method="POST" action="swimmingpool.php">
<!-- refreshes page when submitted -->

   <p>
      <input type="text" name="deletedEquipmentID_equipment" size="6">
      <input type="text" name="deletedLocationID_equipment" size="6">
      <input type="submit" value="delete Equipment" name="delete_equipment">
   </p>
</form>

<!-- Patron -->
<p>Insert Patron</p>
<p>
  <font size="2"> PatronID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  DOB&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  Sex&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  Phone Number&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  Number of Dependents</font>
</p>
<form method="POST" action="swimmingpool.php">
<!-- refreshes page when submitted -->
   <p>
      <input type="text" name="insPatronID_patron" size="8">
      <input type="text" name="insName_patron"size="20">
      <input type="text" name="insDOB_patron"size="10">
      <input type="text" name="insSex_patron" size="2">
      <input type="text" name="insPhoneNum_patron"size="30">
      <input type="text" name="insPostalCode_patron"size="30">
      <input type="text" name="insNumOfDependents_patron"size="30">
      <input type="submit" value="insert patron" name="insert_patron">
   </p>
</form>

<p>Update Patron</p>
<p>
  <font size="2">Old PatronID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  New PatronID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  New Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  New DOB&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  New Sex&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  New Phone Number&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  New Number of Dependents</font>
</p>
<form method="POST" action="swimmingpool.php">
<!-- refreshes page when submitted -->

<p>
   <input type="text" name="oldPatronID_patron" size="8">
   <input type="text" name="updatedPatronID_patron" size="8">
   <input type="text" name="updatedName_patron"size="20">
   <input type="text" name="updatedDOB_patron"size="10">
   <input type="text" name="updatedSex_patron" size="2">
   <input type="text" name="updatedPhoneNum_patron"size="30">
   <input type="text" name="updatedPostalCode_patron"size="30">
   <input type="text" name="updatedNumOfDependents_patron"size="30">
   <input type="submit" value="update patron" name="update_patron">
</p>
</form>

<!-- Visits -->
<p>Insert Visits</p>
<p>
  <font size="2"> LocationID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  PatronID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  Date of Visit</font>
</p>
<form method="POST" action="swimmingpool.php">
<!-- refreshes page when submitted -->
   <p>
      <input type="text" name="insLocationID_visits" size="8">
      <input type="text" name="insPatronID_visits"size="8">
      <input type="text" name="insVisitDate_visits"size="10">
      <input type="submit" value="insert visit" name="insert_visits">
   </p>
</form>

<p>Update Visits</p>
<p>
  <font size="2">Old LocationID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  Old PatronID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  New LocationID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  New PatronID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  New Date of Visit</font>
</p>
<form method="POST" action="swimmingpool.php">
<!-- refreshes page when submitted -->

<p>
  <input type="text" name="oldLocationID_visits" size="8">
  <input type="text" name="oldPatronID_visits"size="8">
  <input type="text" name="updatedLocationID_visits" size="8">
  <input type="text" name="updatedPatronID_visits"size="8">
  <input type="text" name="updatedVisitDate_visits"size="10">
  <input type="submit" value="update visits" name="update_visits">
</p>
</form>

<!-- MembershipExpiry -->
<p>Insert MembershipExpiry</p>
<p>
  <font size="2">PatronID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  Start Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  Amount Paid&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  End Date</font>
</p>
<form method="POST" action="swimmingpool.php">
<!-- refreshes page when submitted -->
   <p>
      <input type="text" name="insPatronID_membershipexpiry" size="8">
      <input type="text" name="insStartDate_membershipexpiry" size="8">
      <input type="text" name="insAmountPaid_membershipexpiry"size="8">
      <input type="text" name="insEndDate_membershipexpiry"size="10">
      <input type="submit" value="insert membership expiry" name="insert_membershipexpiry">
   </p>
</form>

<p>Update MembershipExpiry</p>
<p>
  <font size="2">Old PatronID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  Old Start Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  Old Amount Paid&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  New PatronID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  New Start Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  New Amount Paid&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  New End Date</font>
</p>
<form method="POST" action="swimmingpool.php">
<!-- refreshes page when submitted -->

<p>
  <input type="text" name="oldPatronID_membershipexpiry" size="8">
  <input type="text" name="oldStartDate_membershipexpiry" size="8">
  <input type="text" name="oldAmountPaid_membershipexpiry"size="8">
  <input type="text" name="updatedPatronID_membershipexpiry" size="8">
  <input type="text" name="updatedStartDate_membershipexpiry" size="8">
  <input type="text" name="updatedAmountPaid_membershipexpiry"size="8">
  <input type="text" name="updatedEndDate_membershipexpiry"size="10">
  <input type="submit" value="update membershipexpiry" name="update_membershipexpiry">
</p>
</form>

<!-- Membership -->
<p>Insert Membership</p>
<p>
  <font size="2"> MembershipID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  Start Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  Payment Type&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  Amount Paid&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  PatronID</font>
</p>
<form method="POST" action="swimmingpool.php">
<!-- refreshes page when submitted -->
   <p>
      <input type="text" name="insMembershipID_membership" size="8">
      <input type="text" name="insStartDate_membership" size="8">
      <input type="text" name="insPaymentType_membership"size="8">
      <input type="text" name="insAmountPaid_membership"size="8">
      <input type="text" name="insPatronID_membership"size="10">
      <input type="submit" value="insert membership" name="insert_membership">
   </p>
</form>

<p>Update Membership</p>
<p>
  <font size="2">Old MembershipID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  New MembershipID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  New Start Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  New Payment Type&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  New Amount Paid&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  PatronID</font>
</p>
<form method="POST" action="swimmingpool.php">
<!-- refreshes page when submitted -->

<p>
  <input type="text" name="oldMembershipID_membership" size="8">
  <input type="text" name="updatedMembershipID_membership"size="8">
  <input type="text" name="updatedStartDate_membership" size="8">
  <input type="text" name="updatedPaymentType_membership"size="8">
  <input type="text" name="updatedAmountPaid_membership"size="10">
  <input type="text" name="updatedPatronID_membership"size="10">
  <input type="submit" value="update membership" name="update_membership">
</p>
</form>

<p> Delete Membership </p>
<p><font size="2">MembershipID</font></p>
<form method="POST" action="swimmingpool.php">
<!-- refreshes page when submitted -->

   <p>
      <input type="text" name="deletedMembershipID_membership" size="6">
      <input type="submit" value="delete membership" name="delete_membership">
   </p>
</form>

<!-- Dependents -->
<p>Insert Dependents</p>
<p>
  <font size="2"> Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  PatronID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  DOB&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  Sex&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  Relationship To Patron</font>
</p>
<form method="POST" action="swimmingpool.php">
<!-- refreshes page when submitted -->
   <p>
     <input type="text" name="insName_dependents" size="8">
      <input type="text" name="insPatronID_dependents" size="8">
      <input type="text" name="insDOB_dependents"size="8">
      <input type="text" name="insSex_dependents"size="8">
      <input type="text" name="insRelationshipToPatron_dependents"size="10">
      <input type="submit" value="insert dependents" name="insert_dependents">
   </p>
</form>

<p> Delete Dependents </p>
<p><font size="2">Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  PatronID</font></p>
<form method="POST" action="swimmingpool.php">
<!-- refreshes page when submitted -->

   <p>
      <input type="text" name="deletedName_dependents" size="6">
      <input type="text" name="deletedPatronID_dependents" size="6">
      <input type="submit" value="delete dependents" name="delete_dependents">
   </p>
</form>

<!-- Locker -->
<p>Insert Locker</p>
<p>
  <font size="2"> Locker Number&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  LocationID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  Condition</font>
</p>
<form method="POST" action="swimmingpool.php">
<!-- refreshes page when submitted -->
   <p>
      <input type="text" name="insLockerNum_locker" size="8">
      <input type="text" name="insLocationID_locker" size="8">
      <input type="text" name="insCondition_locker"size="8">
      <input type="submit" value="insert locker" name="insert_locker">
   </p>
</form>

<p>Update Locker</p>
<p>
  <font size="2">Old Locker Number&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  Old LocationID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  New Locker Number&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  New LocationID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  New Condition</font>
</p>
<form method="POST" action="swimmingpool.php">
<!-- refreshes page when submitted -->
<p>
  <input type="text" name="oldLockerNum_locker" size="8">
  <input type="text" name="oldLocationID_locker" size="8">
  <input type="text" name="updatedLockerNum_locker" size="8">
  <input type="text" name="updatedLocationID_locker" size="8">
  <input type="text" name="updatedCondition_locker"size="8">
  <input type="submit" value="update locker" name="update_locker">
</p>
</form>

<!-- PatronLeasesLocker -->
<p>Insert PatronLeasesLocker</p>
<p>
  <font size="2">PatronID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  Locker_Num&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  LocationID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  Lease Start Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  Lease End Date</font>
</p>
<form method="POST" action="swimmingpool.php">
<!-- refreshes page when submitted -->
   <p>
      <input type="text" name="insPatronID_patronleaseslocker" size="8">
      <input type="text" name="insLockerNum_patronleaseslocker" size="8">
      <input type="text" name="insLocationID_patronleaseslocker"size="8">
      <input type="text" name="insLeaseStartDate_patronleaseslocker"size="8">
      <input type="text" name="insLeaseEndDate_patronleaseslocker"size="8">
      <input type="submit" value="insert patronleaseslocker" name="insert_patronleaseslocker">
   </p>
</form>

<p>Update PatronLeasesLocker</p>
<p>
  <font size="2">Old PatronID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  Old Locker Number&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  Old LocationID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  New PatronID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  New Locker Number&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  New LocationID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  New Lease Start Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  New Lease End Date</font>
</p>
<form method="POST" action="swimmingpool.php">
<!-- refreshes page when submitted -->
<p>
  <input type="text" name="oldPatronID_patronleaseslocker" size="8">
  <input type="text" name="oldLockerNum_patronleaseslocker" size="8">
  <input type="text" name="oldLocationID_patronleaseslocker"size="8">
  <input type="text" name="updatedPatronID_patronleaseslocker" size="8">
  <input type="text" name="updatedLockerNum_patronleaseslocker" size="8">
  <input type="text" name="updatedLocationID_patronleaseslocker"size="8">
  <input type="text" name="updatedLeaseStartDate_patronleaseslocker"size="8">
  <input type="text" name="updatedLeaseEndDate_patronleaseslocker"size="8">
  <input type="submit" value="update PatronLeasesLocker" name="update_patronleaseslocker">
</p>
</form>

<p> Delete PatronLeasesLocker </p>
<p><font size="2">PatronID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  LockerNum&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  LocationID</font></p>
<form method="POST" action="swimmingpool.php">
<!-- refreshes page when submitted -->

   <p>
      <input type="text" name="deletedPatronID_patronleaseslocker" size="6">
      <input type="text" name="deletedLockerNum_patronleaseslocker" size="6">
      <input type="text" name="deletedLocationID_patronleaseslocker" size="6">
      <input type="submit" value="delete patronleaseslocker" name="delete_patronleaseslocker">
   </p>
</form>

<!-- Staff(11) -->
<p> Insert Staff </p>
<p><font size="2">StaffID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  DOB&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  Sex&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  PayRate&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  YTDpay&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  HoursWorked&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  LocationID</font></p>
<form method="POST" action="swimmingpool.php">
<!-- refreshes page when submitted -->

   <p>
      <input type="text" name="insStaffID_staff" size="8">
      <input type="text" name="insName_staff" size="8">
      <input type="text" name="insDOB_staff" size="8">
      <input type="text" name="insSex_staff" size="8">
      <input type="text" name="insPayRate_staff" size="8">
      <input type="text" name="insYTDpay_staff" size="8">
      <input type="text" name="insHoursWorked_staff" size="8">
      <input type="text" name="insLocationID_staff" size="8">
      <input type="submit" value="insert staff" name="insert_staff">
   </p>
</form>

<p> Update Staff </p>
<p><font size="2">Old StaffID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  New StaffID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  New Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  New DOB&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  New Sex&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  New PayRate&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  New YTDpay&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  New HoursWorked&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  New LocationID</font></p>
<form method="POST" action="swimmingpool.php">
<!-- refreshes page when submitted -->

   <p>
      <input type="text" name="oldStaffID_staff" size="8">
      <input type="text" name="updatedStaffID_staff" size="8">
      <input type="text" name="updatedName_staff" size="8">
      <input type="text" name="updatedDOB_staff" size="8">
      <input type="text" name="updatedSex_staff" size="8">
      <input type="text" name="updatedPayRate_staff" size="8">
      <input type="text" name="updatedYTDpay_staff" size="8">
      <input type="text" name="updatedHoursWorked_staff" size="8">
      <input type="text" name="updatedLocationID_staff" size="8">
      <input type="submit" value="update staff" name="update_staff">
   </p>
</form>

<!-- CleaningStaff(12) -->
<p>Insert CleaningStaff</p>
<p>
  <font size="2"> StaffID</font>
</p>
<form method="POST" action="swimmingpool.php">
<!-- refreshes page when submitted -->
   <p>
      <input type="text" name="insStaffID_cleaningstaff" size="8">
      <input type="submit" value="insert CleaningStaff" name="insert_staff">
   </p>
</form>

<p>Update CleaningStaff</p>
<p>
  <font size="2">Old StaffID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                 New StaffID</font>
</p>
<form method="POST" action="swimmingpool.php">
<!-- refreshes page when submitted -->
   <p>
      <input type="text" name="oldStaffID_cleaningstaff" size="8">
      <input type="text" name="updatedStaffID_cleaningstaff" size="8">
      <input type="submit" value="update CleaningStaff" name="update_staff">
   </p>
</form>

<!-- Lifeguard(13) -->
<p>Insert Lifeguard</p>
<p>
  <font size="2"> StaffID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  CPRExpiryDate&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  SupervisorID</font>
</p>
<form method="POST" action="swimmingpool.php">
<!-- refreshes page when submitted -->
   <p>
      <input type="text" name="insStaffID_lifeguard" size="8">
      <input type="text" name="insCPRExpiryDate_lifeguard" size="8">
      <input type="text" name="insSupervisorID_lifeguard" size="8">
      <input type="submit" value="insert Lifeguard" name="insert_lifeguard">
   </p>
</form>

<p>Update Lifeguard</p>
<p>
  <font size="2"> Old StaffID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  New StaffID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  New CPRExpiryDate&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  New SupervisorID</font>
</p>
<form method="POST" action="swimmingpool.php">
<!-- refreshes page when submitted -->
   <p>
      <input type="text" name="oldStaffID_lifeguard" size="8">
      <input type="text" name="updatedStaffID_lifeguard" size="8">
      <input type="text" name="updatedCPRExpiryDate_lifeguard" size="8">
      <input type="text" name="updatedSupervisorID_lifeguard" size="8">
      <input type="submit" value="update Lifeguard" name="update_lifeguard">
   </p>
</form>

<!-- Shift(14) -->
<p>Insert Shift</p>
<p>
  <font size="2"> DATE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  Start_Time&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  End_Time</font>
</p>
<form method="POST" action="swimmingpool.php">
<!-- refreshes page when submitted -->
   <p>
      <input type="text" name="insDate_shift" size="8">
      <input type="text" name="insStart_Time_shift" size="8">
      <input type="text" name="insEnd_Time_shift" size="8">
      <input type="submit" value="insert Shift" name="insert_shift">
   </p>
</form>

<p>Update Shift</p>
<p>
  <font size="2"> Old DATE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  Old Start_Time&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  Old End_Time&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  New DATE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  New Start_Time&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  New End_Time</font>
</p>
<form method="POST" action="swimmingpool.php">
<!-- refreshes page when submitted -->
   <p>
      <input type="text" name="oldDate_shift" size="8">
      <input type="text" name="oldStart_Time_shift" size="8">
      <input type="text" name="oldEnd_Time_shift" size="8">
      <input type="text" name="updatedDate_shift" size="8">
      <input type="text" name="updatedStart_Time_shift" size="8">
      <input type="text" name="updatedEnd_Time_shift" size="8">
      <input type="submit" value="update Shift" name="update_shift">
   </p>
</form>

<!-- StaffWorkShift(15) -->
<p>Insert StaffWorksShift</p>
<p>
  <font size="2"> StaffID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  DATE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  Start_Time&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  End_Time</font>
</p>
<form method="POST" action="swimmingpool.php">
<!-- refreshes page when submitted -->
   <p>
      <input type="text" name="insStaffID_staffworksshift" size="8">  
      <input type="text" name="insDate_staffworksshift" size="8">
      <input type="text" name="insStart_Time_staffworksshift" size="8">
      <input type="text" name="insEnd_Time_staffworksshift" size="8">
      <input type="submit" value="insert StaffWorksShift" name="insert_staffworksshift">
   </p>
</form>

<p>Update StaffWorksShift</p>
<p>
  <font size="2"> Old StaffID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  Old DATE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  Old Start_Time&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  Old End_Time&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  New StaffID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  New DATE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  New Start_Time&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  New End_Time</font>
</p>
<form method="POST" action="swimmingpool.php">
<!-- refreshes page when submitted -->
   <p>
      <input type="text" name="oldStaffID_staffworksshift" size="8">  
      <input type="text" name="oldDate_staffworksshift" size="8">
      <input type="text" name="oldStart_Time_staffworksshift" size="8">
      <input type="text" name="oldEnd_Time_staffworksshift" size="8">
      <input type="text" name="updatedStaffID_staffworksshift" size="8">  
      <input type="text" name="updatedDate_staffworksshift" size="8">
      <input type="text" name="updatedStart_Time_staffworksshift" size="8">
      <input type="text" name="updatedEnd_Time_staffworksshift" size="8">
      <input type="submit" value="update StaffWorksShift" name="update_staffworksshift">
   </p>
</form>

<!-- Room(16) -->
<p>Insert Room</p>
<p>
  <font size="2"> RoomNumber&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  LocationID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  RoomType&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  Condiiton</font>
</p>
<form method="POST" action="swimmingpool.php">
<!-- refreshes page when submitted -->
   <p>
      <input type="text" name="insRoomNumber" size="8">
      <input type="text" name="insLocationID" size="8">
      <input type="text" name="insRoomType" size="8">
      <input type="text" name="insCondition" size="8">
      <input type="submit" value="insert Room" name="insert_Room">
   </p>
</form>

<p>Update Room</p>
<p>
  <font size="2"> Old RoomNumber&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  Old LocationID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  New RoomNumber&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  New LocationID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  New RoomType&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  New Condition</font>
</p>
<form method="POST" action="swimmingpool.php">
<!-- refreshes page when submitted -->
   <p>
      <input type="text" name="oldRoomNumber" size="8">
      <input type="text" name="oldLocationID" size="8">
      <input type="text" name="updatedRoomNumber" size="8">
      <input type="text" name="updatedLocationID" size="8">
      <input type="text" name="updatedRoomType" size="8">
      <input type="text" name="updatedCondition" size="8">
      <input type="submit" value="update Room" name="update_Room">
   </p>
</form>

<!-- RoomCapacity(17) -->
<p>Insert RoomCapacity</p>
<p>
  <font size="2"> RoomType&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  Capacity</font>
</p>
<form method="POST" action="swimmingpool.php">
<!-- refreshes page when submitted -->
   <p>
      <input type="text" name="insRoomType" size="8">
      <input type="text" name="insCapacity" size="8">
      <input type="submit" value="insert RoomCapacity" name="insert_RoomCapacity">
   </p>
</form>

<p>Update RoomCapacity</p>
<p>
  <font size="2"> Old RoomType&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  New RoomType&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  New Capacity</font>
</p>
<form method="POST" action="swimmingpool.php">
<!-- refreshes page when submitted -->
   <p>
      <input type="text" name="oldRoomType" size="8">
      <input type="text" name="updatedRoomType" size="8">
      <input type="text" name="updatedCapacity" size="8">
      <input type="submit" value="update RoomCapacity" name="update_RoomCapacity">
   </p>
</form>

<!-- RoomCleaningStatus(18) -->
<p>Insert RoomCleaningStatus</p>
<p>
  <font size="2"> RoomNumber&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  LocationID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  LastCleanedDate&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  AdditionalNotes</font>
</p>
<form method="POST" action="swimmingpool.php">
<!-- refreshes page when submitted -->
   <p>
      <input type="text" name="insRoomNumber" size="8">
      <input type="text" name="insLocationID" size="8">
      <input type="text" name="insLastCleanedDate" size="8">
      <input type="text" name="insAdditionalNotes" size="8">
      <input type="submit" value="insert RoomCleaningStatus" name="insert_RoomCleaningStatus">
   </p>
</form>

<p>Update RoomCleaningStatus</p>
<p>
  <font size="2"> Old RoomNumber&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  Old LocationID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  New RoomNumber&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  New LocationID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  New LastCleanedDate&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  New AdditionalNotes</font>
</p>
<form method="POST" action="swimmingpool.php">
<!-- refreshes page when submitted -->
   <p>
      <input type="text" name="oldRoomNumber" size="8">
      <input type="text" name="oldLocationID" size="8">
      <input type="text" name="updatedRoomNumber" size="8">
      <input type="text" name="updatedLocationID" size="8">
      <input type="text" name="updatedLastCleanedDate" size="8">
      <input type="text" name="updatedAdditionalNotes" size="8">
      <input type="submit" value="update RoomCleaningStatus" name="update_RoomCleaningStatus">
   </p>
</form>

<!-- CleaningStaffCleansRoom(19) -->
<p>Insert CleaningStaffCleansRoom</p>
<p>
  <font size="2"> StaffID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  RoomNumber&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  LocationID</font>
</p>
<form method="POST" action="swimmingpool.php">
<!-- refreshes page when submitted -->
   <p><input type="text" name="insStaffID" size="8">
      <input type="text" name="insRoomNumber" size="8">
      <input type="text" name="insLocationID" size="8">
      <input type="submit" value="insert CleaningStaffCleansRoom" name="insert_CleaningStaffCleansRoom">
   </p>
</form>

<p>Update CleaningStaffCleansRoom</p>
<p>
  <font size="2"> Old StaffID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  Old RoomNumber&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  Old LocationID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  New StaffID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  New RoomNumber&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  New LocationID</font>
</p>
<form method="POST" action="swimmingpool.php">
<!-- refreshes page when submitted -->
   <p>
      <input type="text" name="oldStaffID" size="8">
      <input type="text" name="oldRoomNumber" size="8">
      <input type="text" name="oldLocationID" size="8">
      <input type="text" name="updatedStaffID" size="8">
      <input type="text" name="updatedRoomNumber" size="8">
      <input type="text" name="updatedLocationID" size="8">
      <input type="submit" value="update CleaningStaffCleansRoom" name="update_CleaningStaffCleansRoom">
   </p>
</form>

<!-- LockerMaintenanceStatus(20) -->
<p>Insert LockerMaintenanceStatus</p>
<p>
  <font size="2"> LockerNumber&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  LocationID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  LastCleanedDate&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  AdditionalNotes</font>
</p>
<form method="POST" action="swimmingpool.php">
<!-- refreshes page when submitted -->
   <p>
      <input type="text" name="insLockerNumber" size="8">
      <input type="text" name="insLocationID" size="8">
      <input type="text" name="insLastCleanedDate" size="8">
      <input type="text" name="insAdditionalNotes" size="8">
      <input type="submit" value="insert LockerMaintenanceStatus" name="insert_LockerMaintenanceStatus">
   </p>
</form>

<p>Update LockerMaintenanceStatus</p>
<p>
  <font size="2"> Old LockerNumber&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  Old LocationID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  New LockerNumber&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  New LocationID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  New LastCleanedDate&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  New AdditionalNotes</font>
</p>
<form method="POST" action="swimmingpool.php">
<!-- refreshes page when submitted -->
   <p>
      <input type="text" name="oldLockerNumber" size="8">
      <input type="text" name="oldLocationID" size="8">
      <input type="text" name="updatedLockerNumber" size="8">
      <input type="text" name="updatedLocationID" size="8">
      <input type="text" name="updatedLastCleanedDate" size="8">
      <input type="text" name="updatedAdditionalNotes" size="8">
      <input type="submit" value="update LockerMaintenanceStatus" name="update_LockerMaintenanceStatus">
   </p>
</form>

<!-- CleaningStaffMaintancesLocker(21) -->
<p>Insert CleaningStaffMaintancesLocker</p>
<p>
  <font size="2"> StaffID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  LockerNumber&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  LocationID</font>
</p>
<form method="POST" action="swimmingpool.php">
<!-- refreshes page when submitted -->
   <p><input type="text" name="insStaffID" size="8">
      <input type="text" name="insLockerNumber" size="8">
      <input type="text" name="insLocationID" size="8">
      <input type="submit" value="insert CleaningStaffMaintancesLocker" name="insert_CleaningStaffMaintancesLocker">
   </p>
</form>

<p>Update CleaningStaffMaintancesLocker</p>
<p>
  <font size="2"> Old StaffID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  Old LockerNumber&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  Old LocationID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  New StaffID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  New LockerNumber&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  New LocationID</font>
</p>
<form method="POST" action="swimmingpool.php">
<!-- refreshes page when submitted -->
   <p>
      <input type="text" name="oldStaffID" size="8">
      <input type="text" name="oldLockerNumber" size="8">
      <input type="text" name="oldLocationID" size="8">
      <input type="text" name="updatedStaffID" size="8">
      <input type="text" name="updatedLockerNumber" size="8">
      <input type="text" name="updatedLocationID" size="8">
      <input type="submit" value="update CleaningStaffMaintancesLocker" name="update_CleaningStaffMaintancesLocker">
   </p>
</form>

<html>
<style>
    table {
        width: 20%;
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
$db_conn = OCILogon("ora_jmiiller", "a27463141",
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

function printTable($resultFromSQL, $namesOfColumnsArray, $tablename)
{
    echo '<br>Here is the output of '.$tablename.':<br>';
    echo "<table>";
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

		if (array_key_exists('insert_address', $_POST)) {
			// Insert into Address table
			$tuple = array (
				":bind1" => $_POST['insPostalCode_address'],
				":bind2" => $_POST['insStreet_address'],
        ":bind3" => $_POST['insCity_address'],
        ":bind4" => $_POST['insProvince_address']
			);
			$alltuples = array (
				$tuple
			);
			executeBoundSQL("insert into address values (:bind1, :bind2, :bind3, :bind4)", $alltuples);
			OCICommit($db_conn);

		} else
    if(array_key_exists('update_address', $_POST)) {
      // Update identified row in Address table
			$tuple = array (
				":bind1" => $_POST['oldPostalCode_address'],
        ":bind2" => $_POST['updatedPostalCode_address'],
        ":bind3" => $_POST['updatedStreet_address'],
        ":bind4" => $_POST['updatedCity_address'],
        ":bind5" => $_POST['updatedProvince_address']
			);
			$alltuples = array (
				$tuple
			);
			executeBoundSQL("update address set Postal_Code=:bind2, Street=:bind3, City=:bind4, Province=:bind5 where Postal_Code=:bind1", $alltuples);
			OCICommit($db_conn);
    } else
    if(array_key_exists('delete_address', $_POST)) {
      $deletedPostalCode_address = $_POST['deletedPostalCode_address'];
      executePlainSQL("delete from address where Postal_Code='$deletedPostalCode_address'");
    	OCICommit($db_conn);
    } else
    if(array_key_exists('insert_location', $_POST)) {
      // Update identified row in Address table
			$tuple = array (
        ":bind1" => $_POST['insLocationID_location'],
				":bind2" => $_POST['insLocationName_location'],
        ":bind3" => $_POST['insOpeningTime_location'],
        ":bind4" => $_POST['insClosingTime_location'],
        ":bind5" => $_POST['insPhoneNum_location'],
        ":bind6" => $_POST['insPostalCode_location']
			);
			$alltuples = array (
				$tuple
			);
			executeBoundSQL("insert into location values (:bind1, :bind2, :bind3, :bind4, :bind5, :bind6)", $alltuples);
			OCICommit($db_conn);
    } else
    if(array_key_exists('update_location', $_POST)) {
      // Update identified row in Address table
			$tuple = array (
        ":bind1" => $_POST['oldLocationID_location'],
        ":bind2" => $_POST['updatedLocationID_location'],
				":bind3" => $_POST['updatedLocationName_location'],
        ":bind4" => $_POST['updatedOpeningTime_location'],
        ":bind5" => $_POST['updatedClosingTime_location'],
        ":bind6" => $_POST['updatedPhoneNum_location'],
        ":bind7" => $_POST['updatedPostalCode_location']
			);
			$alltuples = array (
				$tuple
			);
			executeBoundSQL("update location set LocationID=:bind2, Location_Name=:bind3, Opening_Time=:bind4, Closing_Time=:bind5, Phone_Number=:bind6, Postal_Code=:bind7 where locationID=:bind1", $alltuples);
			OCICommit($db_conn);
    } else
    if(array_key_exists('delete_location', $_POST)) {
      $deletedLocationID_location = $_POST['deletedLocationID_location'];
      executePlainSQL("delete from location where LocationID=$deletedLocationID_location");
    	OCICommit($db_conn);
    } else
    if(array_key_exists('insert_equipmenttype', $_POST)) {
      // Update identified row in Address table
			$tuple = array (
        ":bind1" => $_POST['insEquipmentID_equipmenttype'],
				":bind2" => $_POST['insType_equipmenttype']
			);
			$alltuples = array (
				$tuple
			);
			executeBoundSQL("insert into equipmenttype values (:bind1, :bind2)", $alltuples);
			OCICommit($db_conn);
    } else
    if(array_key_exists('update_equipmenttype', $_POST)) {
      // Update identified row in Address table
			$tuple = array (
        ":bind1" => $_POST['oldEquipmentID_equipmenttype'],
        ":bind2" => $_POST['updatedEquipmentID_equipmenttype'],
				":bind3" => $_POST['updatedType_equipmenttype']
			);
			$alltuples = array (
				$tuple
			);
			executeBoundSQL("update equipmenttype set EquipmentID=:bind2, type=:bind3 where EquipmentID=:bind1", $alltuples);
			OCICommit($db_conn);
    } else
    if(array_key_exists('delete_equipmenttype', $_POST)) {
      $deletedEquipmentID_equipmentType = $_POST['deletedEquipmentID_equipmenttype'];
      executePlainSQL("delete from equipmenttype where EquipmentID=$deletedEquipmentID_equipmentType");
    	OCICommit($db_conn);
    } else
    if(array_key_exists('insert_equipment', $_POST)) {
      // Update identified row in Address table
			$tuple = array (
        ":bind1" => $_POST['insEquipmentID_equipment'],
        ":bind2" => $_POST['insLocationID_equipment'],
				":bind3" => $_POST['insQuantity_equipment']
			);
			$alltuples = array (
				$tuple
			);
			executeBoundSQL("insert into equipment values (:bind1, :bind2, :bind3)", $alltuples);
			OCICommit($db_conn);
    } else
    if(array_key_exists('update_equipment', $_POST)) {
      // Update identified row in Address table
			$tuple = array (
        ":bind1" => $_POST['oldEquipmentID_equipment'],
        ":bind2" => $_POST['oldLocationID_equipment'],
        ":bind3" => $_POST['updatedEquipmentID_equipment'],
        ":bind4" => $_POST['updatedLocationID_equipment'],
				":bind5" => $_POST['updatedQuantity_equipment']
			);
			$alltuples = array (
				$tuple
			);
			executeBoundSQL("update equipment set EquipmentID=:bind3, LocationID=:bind4, quantity=:bind5 where EquipmentID=:bind1 and LocationID=:bind2", $alltuples);
			OCICommit($db_conn);
    } else
    if(array_key_exists('delete_equipment', $_POST)) {
      $deletedEquipmentID_equipment = $_POST['deletedEquipmentID_equipment'];
      $deletedLocationID_equipment = $_POST['deletedLocationID_equipment'];
      executePlainSQL("delete from equipment where EquipmentID=$deletedEquipmentID_equipment and LocationID=$deletedLocationID_equipment");
    	OCICommit($db_conn);
    }else
    if(array_key_exists('insert_patron', $_POST)) {
      // Update identified row in Address table
			$tuple = array (
        ":bind1" => $_POST['insPatronID_patron'],
        ":bind2" => $_POST['insName_patron'],
        ":bind3" => $_POST['insDOB_patron'],
        ":bind4" => $_POST['insSex_patron'],
        ":bind5" => $_POST['insPhoneNum_patron'],
        ":bind6" => $_POST['insPostalCode_patron'],
				":bind7" => $_POST['insNumOfDependents_patron']
			);
			$alltuples = array (
				$tuple
			);
			executeBoundSQL("insert into patron values (:bind1, :bind2, :bind3, :bind4, :bind5, :bind6, :bind7)", $alltuples);
			OCICommit($db_conn);
    } else
    if(array_key_exists('update_patron', $_POST)) {
      // Update identified row in Address table
			$tuple = array (
        ":bind1" => $_POST['oldPatronID_patron'],
        ":bind2" => $_POST['updatedPatronID_patron'],
        ":bind3" => $_POST['updatedName_patron'],
        ":bind4" => $_POST['updatedDOB_patron'],
        ":bind5" => $_POST['updatedSex_patron'],
        ":bind6" => $_POST['updatedPhoneNum_patron'],
        ":bind7" => $_POST['updatedPostalCode_patron'],
        ":bind8" => $_POST['updatedNumOfDependents_patron']
			);
			$alltuples = array (
				$tuple
			);
			executeBoundSQL("update patron set PatronID=:bind2, Name=:bind3, DOB=:bind4, Sex=:bind5, Phone_Number=:bind6, Postal_Code=:bind7, Num_Dependents=:bind8 where PatronID=:bind1", $alltuples);
			OCICommit($db_conn);
    } else
    if(array_key_exists('insert_visits', $_POST)) {
      // Update identified row in Address table
			$tuple = array (
        ":bind1" => $_POST['insLocationID_visits'],
        ":bind2" => $_POST['insPatronID_visits'],
        ":bind3" => $_POST['insVisitDate_visits']
			);
			$alltuples = array (
				$tuple
			);
			executeBoundSQL("insert into visits values (:bind1, :bind2, :bind3)", $alltuples);
			OCICommit($db_conn);
    } else
    if(array_key_exists('update_visits', $_POST)) {
      // Update identified row in Address table
			$tuple = array (
        ":bind1" => $_POST['oldLocationID_visits'],
        ":bind2" => $_POST['oldPatronID_visits'],
        ":bind3" => $_POST['updatedLocationID_visits'],
        ":bind4" => $_POST['updatedPatronID_visits'],
        ":bind5" => $_POST['updatedVisitDate_visits']
			);
			$alltuples = array (
				$tuple
			);
			executeBoundSQL("update visits set LocationID=:bind3, PatronID=:bind4, visitdate=:bind5 where LocationID=:bind1 and PatronID=:bind2", $alltuples);
			OCICommit($db_conn);
    } else
    if(array_key_exists('insert_membershipexpiry', $_POST)) {
      // Update identified row in Address table
			$tuple = array (
        ":bind1" => $_POST['insPatronID_membershipexpiry'],
        ":bind2" => $_POST['insStartDate_membershipexpiry'],
        ":bind3" => $_POST['insAmountPaid_membershipexpiry'],
        ":bind4" => $_POST['insEndDate_membershipexpiry']
			);
			$alltuples = array (
				$tuple
			);
			executeBoundSQL("insert into MembershipExpiry values (:bind1, :bind2, :bind3, :bind4)", $alltuples);
			OCICommit($db_conn);
    } else
    if(array_key_exists('update_membershipexpiry', $_POST)) {
      // Update identified row in Address table
			$tuple = array (
        ":bind1" => $_POST['oldPatronID_membershipexpiry'],
        ":bind2" => $_POST['oldStartDate_membershipexpiry'],
        ":bind3" => $_POST['oldAmountPaid_membershipexpiry'],
        ":bind4" => $_POST['updatedPatronID_membershipexpiry'],
        ":bind5" => $_POST['updatedStartDate_membershipexpiry'],
        ":bind6" => $_POST['updatedAmountPaid_membershipexpiry'],
        ":bind7" => $_POST['updatedEndDate_membershipexpiry']
			);
			$alltuples = array (
				$tuple
			);
			executeBoundSQL("update membershipexpiry set PatronID=:bind4, Start_Date=:bind5, Amount_Paid=:bind6, End_Date=:bind7 where PatronID=:bind1 and Start_Date=:bind2 and Amount_Paid=:bind3", $alltuples);
			OCICommit($db_conn);
    } else
    if(array_key_exists('insert_membership', $_POST)) {
      // Update identified row in Address table
			$tuple = array (
        ":bind1" => $_POST['insMembershipID_membership'],
        ":bind2" => $_POST['insStartDate_membership'],
        ":bind3" => $_POST['insPaymentType_membership'],
        ":bind4" => $_POST['insAmountPaid_membership'],
        ":bind5" => $_POST['insPatronID_membership']
			);
			$alltuples = array (
				$tuple
			);
			executeBoundSQL("insert into Membership values (:bind1, :bind2, :bind3, :bind4, :bind5)", $alltuples);
			OCICommit($db_conn);
    } else
    if(array_key_exists('update_membership', $_POST)) {
      // Update identified row in Address table
			$tuple = array (
        ":bind1" => $_POST['oldMembershipID_membership'],
        ":bind2" => $_POST['updatedMembershipID_membership'],
        ":bind3" => $_POST['updatedStartDate_membership'],
        ":bind4" => $_POST['updatedPaymentType_membership'],
        ":bind5" => $_POST['updatedAmountPaid_membership'],
        ":bind6" => $_POST['updatedPatronID_membership']
			);
			$alltuples = array (
				$tuple
			);
			executeBoundSQL("update membership set MembershipID=:bind2, Start_Date=:bind3, Payment_Type=:bind4, Amount_Paid=:bind5, PatronID=:bind6 where MembershipID=:bind1", $alltuples);
			OCICommit($db_conn);
    } else
    if(array_key_exists('delete_membership', $_POST)) {
      $deletedMembershipID_membership = $_POST['deletedMembershipID_membership'];
      executePlainSQL("delete from membership where MembershipID=$deletedMembershipID_membership");
    	OCICommit($db_conn);
    } else
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
			executeBoundSQL("insert into dependents values (:bind1, :bind2, :bind3, :bind4, :bind5)", $alltuples);
			OCICommit($db_conn);
    } else
    if(array_key_exists('delete_dependents', $_POST)) {
      $deletedName_dependents = $_POST['deletedName_dependents'];
      $deletedPatronID_dependents = $_POST['deletedPatronID_dependents'];
      executePlainSQL("delete from dependents where Name='$deletedName_dependents' and PatronID=$deletedPatronID_dependents");
    	OCICommit($db_conn);
    } else
    if(array_key_exists('insert_locker', $_POST)) {
      // Update identified row in Address table
			$tuple = array (
        ":bind1" => $_POST['insLockerNum_locker'],
        ":bind2" => $_POST['insLocationID_locker'],
        ":bind3" => $_POST['insCondition_locker']
			);
			$alltuples = array (
				$tuple
			);
			executeBoundSQL("insert into locker values (:bind1, :bind2, :bind3)", $alltuples);
			OCICommit($db_conn);
    } else
    if(array_key_exists('update_locker', $_POST)) {
      // Update identified row in Address table
			$tuple = array (
        ":bind1" => $_POST['oldLockerNum_locker'],
        ":bind2" => $_POST['oldLocationID_locker'],
        ":bind3" => $_POST['updatedLockerNum_locker'],
        ":bind4" => $_POST['updatedLocationID_locker'],
        ":bind5" => $_POST['updatedCondition_locker']
			);
			$alltuples = array (
				$tuple
			);
			executeBoundSQL("update locker set Locker_Num=:bind3, locationID=:bind4, Condition=:bind5 where Locker_Num=:bind1 and LocationID=:bind2", $alltuples);
			OCICommit($db_conn);
    } else
    if(array_key_exists('insert_patronleaseslocker', $_POST)) {
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
    } else
    if(array_key_exists('update_patronleaseslocker', $_POST)) {
      // Update identified row in Address table
			$tuple = array (
        ":bind1" => $_POST['oldPatronID_patronleaseslocker'],
        ":bind2" => $_POST['oldLockerNum_patronleaseslocker'],
        ":bind3" => $_POST['oldLocationID_patronleaseslocker'],
        ":bind4" => $_POST['updatedPatronID_patronleaseslocker'],
        ":bind5" => $_POST['updatedLockerNum_patronleaseslocker'],
        ":bind6" => $_POST['updatedLocationID_patronleaseslocker'],
        ":bind7" => $_POST['updatedLeaseStartDate_patronleaseslocker'],
        ":bind8" => $_POST['updatedLeaseEndDate_patronleaseslocker']
			);
			$alltuples = array (
				$tuple
			);
			executeBoundSQL("update PatronLeasesLocker set PatronID=:bind4, Locker_Num=:bind5, LocationID=:bind6, Lease_Start_Date=:bind7, Lease_End_Date=:bind8 where PatronID=:bind1 and Locker_Num=:bind2 and locationID=:bind3", $alltuples);
			OCICommit($db_conn);
    } else
    if(array_key_exists('delete_patronleaseslocker', $_POST)) {
      $deletedPatronID_patronleaseslocker = $_POST['deletedPatronID_patronleaseslocker'];
      $deletedLockerNum_patronleaseslocker = $_POST['deletedLockerNum_patronleaseslocker'];
      $deletedLocationID_patronleaseslocker = $_POST['deletedLocationID_patronleaseslocker'];
      executePlainSQL("delete from patronleaseslocker where PatronID=$deletedPatronID_patronleaseslocker and Locker_Num=$deletedLockerNum_patronleaseslocker and LocationID=$deletedLocationID_patronleaseslocker");
    	OCICommit($db_conn);
    } else if(array_key_exists('insert_staff', $_POST)) {
      // Insert into Staff table(11)
			$tuple = array (
        ":bind1" => $_POST['insStaffID_staff'],
        ":bind2" => $_POST['insName_staff'],
				":bind3" => $_POST['insDOB_staff'],
        ":bind4" => $_POST['insSex_staff'],
        ":bind5" => $_POST['insPayrate_staff'],
        ":bind6" => $_POST['insYTDpay_staff'],
        ":bind7" => $_POST['insHoursWorkedInCurrentPeriod_staff'],
        ":bind8" => $_POST['insLocationID_staff']
			);
			$alltuples = array (
				$tuple
			);
			executeBoundSQL("insert into Staff values (:bind1, :bind2, :bind3, :bind4, :bind5, :bind6, :bind7, :bind8)", $alltuples);
			OCICommit($db_conn);
    }else if(array_key_exists('update_staff', $_POST)) {
      // Update identified row in Staff table(11)
			$tuple = array (
        ":bind1" => $_POST['oldStaffID_staff'],
        ":bind2" => $_POST['updatedStaffID_staff'],
        ":bind3" => $_POST['updatedName_staff'],
				":bind4" => $_POST['updatedDOB_staff'],
        ":bind5" => $_POST['updatedSex_staff'],
        ":bind6" => $_POST['updatedPayrate_staff'],
        ":bind7" => $_POST['updatedYTDpay_staff'],
        ":bind8" => $_POST['updatedHoursWorkedInCurrentPeriod_staff'],
        ":bind9" => $_POST['updatedLocationID_staff']
			);
			$alltuples = array (
				$tuple
			);
			executeBoundSQL("update staff set StaffID=:bind2, Name=:bind3, DOB=:bind4, Sex=:bind5, Payrate=:bind6, YTD_pay=:bind7, HoursWorkedInCurrentPeriod=:bind8, LocationID=:bind9 where staffID=:bind1", $alltuples);
			OCICommit($db_conn);
    } else if(array_key_exists('insert_cleaningstaff', $_POST)) {
      // Insert into Staff table(12)
			$tuple = array (
        ":bind1" => $_POST['insStaffID']
			);
			$alltuples = array (
				$tuple
			);
			executeBoundSQL("insert into Staff values (:bind1)", $alltuples);
			OCICommit($db_conn);
    }else if(array_key_exists('update_cleaningstaff', $_POST)) {
      // Update identified row in Staff table(12)
			$tuple = array (
        ":bind1" => $_POST['oldCleaningStaffID'],
        ":bind2" => $_POST['updatedCleaningStaffID']
			);
			$alltuples = array (
				$tuple
			);
			executeBoundSQL("update Cleaningstaff set staffID=:bind2 where staffID=:bind1", $alltuples);
			OCICommit($db_conn);
    }else if(array_key_exists('insert_lifeguard', $_POST)) {
      // Insert into Lifeguard table(13)
			$tuple = array (
        ":bind1" => $_POST['insStaffID'],
        ":bind2" => $_POST['insCPRExpiryDate'],
        ":bind3" => $_POST['insSupervisorID']
			);
			$alltuples = array (
				$tuple
			);
			executeBoundSQL("insert into Lifeguard values (:bind1, :bind2, :bind3)", $alltuples);
			OCICommit($db_conn);
    }else if(array_key_exists('update_lifeguard', $_POST)) {
      // Update identified row in Lifeguard table(13)
			$tuple = array (
        ":bind1" => $_POST['oldStaffID'],
        ":bind2" => $_POST['updatedStaffID'],
        ":bind3" => $_POST['updatedCPRExpiryDate'],
        ":bind4" => $_POST['updatedSupervisorID']
			);
			$alltuples = array (
				$tuple
			);
			executeBoundSQL("update Lifeguard set staffID=:bind2, CPRExpiryDate=:bind3, SupervisorID=:bind4, where S  taffID=:bind1", $alltuples);
			OCICommit($db_conn);
    }else if(array_key_exists('insert_shift', $_POST)) {
      // Insert into shift table(14)
			$tuple = array (
        ":bind1" => $_POST['insDate'],
        ":bind2" => $_POST['insStartTime'],
        ":bind3" => $_POST['insEndTime']
			);
			$alltuples = array (
				$tuple
			);
			executeBoundSQL("insert into Shift values (:bind1, :bind2, :bind3)", $alltuples);
			OCICommit($db_conn);
    }else if(array_key_exists('update_shift', $_POST)) {
      // Update identified row in shift table(14)
			$tuple = array (
        ":bind1" => $_POST['oldDate'],
        ":bind2" => $_POST['oldStartTime'],
        ":bind3" => $_POST['oldEndTime'],
        ":bind4" => $_POST['updatedDate'],
        ":bind5" => $_POST['updatedStartTime'],
        ":bind6" => $_POST['updatedEndTime']
			);
			$alltuples = array (
				$tuple
			);
			executeBoundSQL("update Lifeguard set Date=:bind4, StartTime=:bind5, EndTime=:bind6, where Date=:bind1, StartTime=:bind2, EndTime=:bind3", $alltuples);
			OCICommit($db_conn);
    }else if(array_key_exists('insert_staffworksshift', $_POST)) {
      // Insert into Staffshift table(15)
			$tuple = array (
        ":bind1" => $_POST['insStaffID'],
        ":bind2" => $_POST['insDate'],
        ":bind3" => $_POST['insStartTime'],
        ":bind4" => $_POST['insEndTime']
			);
			$alltuples = array (
				$tuple
			);
			executeBoundSQL("insert into StaffShift values (:bind1, :bind2, :bind3, :bind4)", $alltuples);
			OCICommit($db_conn);
    }else if(array_key_exists('update_staffworksshift', $_POST)) {
      // Update identified row in Staffshift table(15)
			$tuple = array (
        ":bind1" => $_POST['oldStaffID'],
        ":bind2" => $_POST['oldDate'],
        ":bind3" => $_POST['oldStartTime'],
        ":bind4" => $_POST['oldEndTime'],
        ":bind5" => $_POST['updatedStaffID'],
        ":bind6" => $_POST['updatedDate'],
        ":bind7" => $_POST['updatedStartTime'],
        ":bind8" => $_POST['updatedEndTime']
			);
			$alltuples = array (
				$tuple
			);
			executeBoundSQL("update staffworksshift set StaffID=:bind5, Date=:bind6, StartTime=:bind7, EndTime=:bind8, where StaffID=:bind1, Date=:bind2, StartTime=:bind3, EndTime=:bind4", $alltuples);
			OCICommit($db_conn);
    }else if(array_key_exists('insert_Room', $_POST)) {
      // Insert into Room table(16)
			$tuple = array (
        ":bind1" => $_POST['insRoomNumber'],
        ":bind2" => $_POST['insLocationID'],
        ":bind3" => $_POST['insRoomType'],
        ":bind4" => $_POST['insCondition']
			);
			$alltuples = array (
				$tuple
			);
			executeBoundSQL("insert into Room values (:bind1, :bind2, :bind3, :bind4)", $alltuples);
			OCICommit($db_conn);
    }else if(array_key_exists('update_Room', $_POST)) {
      // Update identified row in Room table(16)
			$tuple = array (
        ":bind1" => $_POST['oldRoomNumber'],
        ":bind2" => $_POST['oldLocationID'],
        ":bind3" => $_POST['updatedRoomNumber'],
        ":bind4" => $_POST['updatedLocationID'],
        ":bind5" => $_POST['updatedRoomType'],
        ":bind6" => $_POST['updatedCondition']
			);
			$alltuples = array (
				$tuple
			);
			executeBoundSQL("update Room set RoomNumber=:bind3, LocationID=:bind4, RoomType=:bind5, Condition=:bind6, where RoomNumber=:bind1, LocationID=:bind2", $alltuples);
			OCICommit($db_conn);
    }else if(array_key_exists('insert_RoomCapacity', $_POST)) {
      // Insert into RoomCapacity table(17)
			$tuple = array (
        ":bind1" => $_POST['insRoomType'],
        ":bind2" => $_POST['insCapacity']
			);
			$alltuples = array (
				$tuple
			);
			executeBoundSQL("insert into RoomCapacity values (:bind1, :bind2)", $alltuples);
			OCICommit($db_conn);
    }else if(array_key_exists('update_RoomCapacity', $_POST)) {
      // Update identified row in RoomCapacity table(17)
			$tuple = array (
        ":bind1" => $_POST['oldRoomType'],
        ":bind2" => $_POST['updatedRoomType'],
        ":bind3" => $_POST['updatedCapacity']
			);
			$alltuples = array (
				$tuple
			);
			executeBoundSQL("update Room set RoomType=:bind2, Capacity=:bind3, where RoomType=:bind1", $alltuples);
			OCICommit($db_conn);
    }else if(array_key_exists('insert_RoomCleaningStatus', $_POST)) {
      // Insert into RoomCleaningStatus table(18)
			$tuple = array (
        ":bind1" => $_POST['insRoomNumber'],
        ":bind2" => $_POST['insLocationID'],
        ":bind3" => $_POST['insLastCleanedDate'],
        ":bind4" => $_POST['insAdditionNotes']
			);
			$alltuples = array (
				$tuple
			);
			executeBoundSQL("insert into RoomCleaningStatus values (:bind1, :bind2, :bind3, :bind4)", $alltuples);
			OCICommit($db_conn);
    }else if(array_key_exists('update_RoomCleaningStatus', $_POST)) {
      // Update identified row in RoomCleaningStatus table(18)
			$tuple = array (
        ":bind1" => $_POST['oldRoomNumber'],
        ":bind2" => $_POST['oldLocationID'],
        ":bind3" => $_POST['updatedRoomNumber'],
        ":bind4" => $_POST['updatedLocationID'],
        ":bind5" => $_POST['updatedLastCleanedDate'],
        ":bind6" => $_POST['updatedAdditionalNotes']
			);
			$alltuples = array (
				$tuple
			);
			executeBoundSQL("update Room set RoomNumber=:bind3, LocationID=:bind4, LastCleanedDate=:bind5, AdditionalNotes=:bind6 where RoomNumber=:bind1, LocationID=:bind2", $alltuples);
			OCICommit($db_conn);
    }else if(array_key_exists('insert_CleaningStaffCleansRoom', $_POST)) {
      // Insert into CtleaningSaffCleansRoom table(19)
			$tuple = array (
        ":bind1" => $_POST['insStaffID'],
        ":bind2" => $_POST['insRoomNumber'],
        ":bind3" => $_POST['insLocationID']
			);
			$alltuples = array (
				$tuple
			);
			executeBoundSQL("insert into CtleaningSaffCleansRoom values (:bind1, :bind2, :bind3)", $alltuples);
			OCICommit($db_conn);
    }else if(array_key_exists('update_CtleaningSaffCleansRoom', $_POST)) {
      // Update identified row in CtleaningSaffCleansRoom table(19)
			$tuple = array (
        ":bind1" => $_POST['oldStaffID'],
        ":bind2" => $_POST['oldRoomNumber'],
        ":bind3" => $_POST['oldLocationID'],
        ":bind4" => $_POST['updatedStaffID'],
        ":bind5" => $_POST['updatedRoomNumber'],
        ":bind6" => $_POST['updatedLocationID']
			);
			$alltuples = array (
				$tuple
			);
			executeBoundSQL("update Room set StaffID=:bind4, RoomNumber=:bind5, LocationID=:bind6 where StaffID=:bind1, RoomNumber=:bind2, LocationID=:bind3" , $alltuples);
			OCICommit($db_conn);
    }else if(array_key_exists('insert_LockerMaintenanceStatus', $_POST)) {
      // Insert into LockerMaintenanceStatus table(20)
			$tuple = array (
        ":bind1" => $_POST['insLockerNumber'],
        ":bind2" => $_POST['insLocationID'],
        ":bind3" => $_POST['insLastMaintenanceDate'],
        ":bind4" => $_POST['insAdditionalNotes']
			);
			$alltuples = array (
				$tuple
			);
			executeBoundSQL("insert into LockerMaintenanceStatus values (:bind1, :bind2, :bind3, :bind4)", $alltuples);
			OCICommit($db_conn);
    }else if(array_key_exists('update_LockerMaintenanceStatus', $_POST)) {
      // Update identified row in LockerMaintenanceStatus table(20)
			$tuple = array (
        ":bind1" => $_POST['oldLockerNumber'],
        ":bind2" => $_POST['oldLocationID'],
        ":bind3" => $_POST['updatedLockerNumber'],
        ":bind4" => $_POST['updatedLocationID'],
        ":bind5" => $_POST['updatedLastMaintenanceDate'],
        ":bind6" => $_POST['updatedAdditionalNotes']
			);
			$alltuples = array (
				$tuple
			);
			executeBoundSQL("update Room set LockerNumber=:bind3, LocationID=:bind4, LastMaintenanceDate=:bind5, AdditionalNotes=:bind6 where LockerNumber=:bind1, LocationID=:bind2" , $alltuples);
			OCICommit($db_conn);
    }
    else if(array_key_exists('insert_CleaningStaffMaintainsLocker', $_POST)) {
      // Insert into CleaningStaffMaintainsLocker table(21)
			$tuple = array (
        ":bind1" => $_POST['insStaffID'],
        ":bind2" => $_POST['insLockerNumber'],
        ":bind3" => $_POST['insLocationID']
			);
			$alltuples = array (
				$tuple
			);
			executeBoundSQL("insert into CleaningStaffMaintainsLocker values (:bind1, :bind2, :bind3)", $alltuples);
			OCICommit($db_conn);
    }else if(array_key_exists('update_CleaningStaffMaintainsLocker', $_POST)) {
      // Update identified row in CleaningStaffMaintainsLocker table(21)
			$tuple = array (
        ":bind1" => $_POST['oldStaffID'],
        ":bind2" => $_POST['oldLockerNmber'],
        ":bind3" => $_POST['oldLocationID'],
        ":bind4" => $_POST['updatedStaffID'],
        ":bind5" => $_POST['updatedLockerNumber'],
        ":bind6" => $_POST['updatedLocationID']
			);
			$alltuples = array (
				$tuple
			);
			executeBoundSQL("update Room set StaffID=:bind4, LockerNumber=:bind5, LocationID=:bind6 where StaffID=:bind1, LockerNumber=:bind2, LocationID=:bind3" , $alltuples);
			OCICommit($db_conn);
    }

		OCICommit($db_conn);

	if ($_POST && $success) {
		//POST-REDIRECT-GET -- See http://en.wikipedia.org/wiki/Post/Redirect/Get
		header("location: swimmingpool.php");
	} else {
    echo "<br/> operation did not succeed";
  }

  // Get Address Data
  $result_address = executePlainSQL("select * from Address");
  $columnNames_address = array("Postal_Code", "Street", "City", "Province");
  printTable($result_address, $columnNames_address, "Address");

  // Get Location Data
  $result_location = executePlainSQL("select * from Location");
  $columnNames_location = array("LocationID", "Location Name", "Opening Time", "Closing Time", "Phone Number", "Postal Code");
  printTable($result_location, $columnNames_location, "Location");

  // Get EquipmentType Data
  $result_equipmenttype = executePlainSQL("select * from EquipmentType");
  $columnNames_equipmenttype = array("EquipmentID", "Type");
  printTable($result_equipmenttype, $columnNames_equipmenttype, "EquipmentType");

  // Get Equipment Data
  $result_equipment = executePlainSQL("select * from Equipment");
  $columnNames_equipment = array("EquipmentID", "LocationID", "Quantity");
  printTable($result_equipment, $columnNames_equipment, "Equipment");

  // Get Patron Data
  $result_patron = executePlainSQL("select * from Patron");
  $columnNames_patron = array("PatronID", "Name", "DOB", "Sex", "Phone Number", "Postal Code", "Number of Dependents");
  printTable($result_patron, $columnNames_patron, "Patron");

  // Get Visits Data
  $result_visits = executePlainSQL("select * from Visits");
  $columnNames_visits = array("LocationID", "PatronID", "Visit Date");
  printTable($result_visits, $columnNames_visits, "Visits");

  // Get MembershipExpiry Data
  $result_membershipexpiry = executePlainSQL("select * from membershipexpiry");
  $columnNames_membershipexpiry = array("PatronID", "Start Date", "Amount Paid", "End Date");
  printTable($result_membershipexpiry, $columnNames_membershipexpiry, "MembershipExpiry");

  // Get Membership Data
  $result_membership = executePlainSQL("select * from membership");
  $columnNames_membership = array("MembershipID", "Start Date", "Payment Type", "Amount Type", "PatronID");
  printTable($result_membership, $columnNames_membership, "Membership");

  // Get Dependents Data
  $result_dependents = executePlainSQL("select * from Dependents");
  $columnNames_dependents = array("Name", "PatronID", "DOB", "Sex", "Relationship To Patron");
  printTable($result_dependents, $columnNames_dependents, "Dependents");

  // Get Locker Data
  $result_locker = executePlainSQL("select * from locker");
  $columnNames_locker = array("Locker Number", "LocationID", "Condition");
  printTable($result_locker, $columnNames_locker, "Locker");

  // Get PatronLeasesLocker Data
  $result_patronleaseslocker = executePlainSQL("select * from patronleaseslocker");
  $columnNames_patronleaseslocker = array("PatronID", "Locker Number", "LocationID", "Lease Start Date", "Lease End Date");
  printTable($result_patronleaseslocker, $columnNames_patronleaseslocker, "PatronLeasesLocker");

  // Get Staff Data(11)
  $result_staff = executePlainSQL("select * from staff");
  $columnNames_staff = array("StaffID", "Name", "DOB", "Sex", "Pay_Rate", "YTD_Pay", "HoursWorkedInCurrentPeriod", "LocationID");
  printTable($result_staff, $columnNames_staff, "Staff");

  // Get CleaningStaff Data(12)
  $result_cleaningstaff = executePlainSQL("select * from cleaningstaff");
  $columnNames_cleaningstaff = array("StaffID");
  printTable($result_cleaningstaff, $columnNames_cleaningstaff, "CleaningStaff");

  // Get Lifeguard Data(13)
  $result_lifeguard = executePlainSQL("select * from lifeguard");
  $columnNames_lifeguard = array("StaffID", "CPR_Expiry Date", "SupervisorID");
  printTable($result_lifeguard, $columnNames_lifeguard, "Lifeguard");

  // Get Shift Data(14)
  $result_shift = executePlainSQL("select * from shift");
  $columnNames_shift = array("DATE", "StartTime", "EndTime");
  printTable($result_shift, $columnNames_shift, "Shift");
  
  // Get StaffWorkShift Data(15)
  $result_staffworksshift = executePlainSQL("select * from staffworksshift");
  $columnNames_staffworksshift = array("StaffID", "Date", "StartTime", "EndTime");
  printTable($result_staffworksshift, $columnNames_staffworksshift, "StaffWorksShift");

  // Get Room Data(16)
  $result_Room = executePlainSQL("select * from Room");
  $columnNames_Room = array("RoomNumber", "LocationID", "Type", "Condition");
  printTable($result_Room, $columnNames_Room, "Room");

  // Get RoomCapacity Data(17)
  $result_RoomCapacity = executePlainSQL("select * from RoomCapacity");
  $columnNames_RoomCapacity = array("Type", "Capacity");
  printTable($result_RoomCapacity, $columnNames_RoomCapacity, "RoomCapacity");

  // Get RoomCleaningStatus Data(18)
  $result_RoomCleaningStatus = executePlainSQL("select * from RoomCleaningStatus");
  $columnNames_RoomCleaningStatus = array("RoomNumber", "LocationID", "LastCleanedDate", "AdditionalNotes");
  printTable($result_RoomCleaningStatus, $columnNames_RoomCleaningStatus, "RoomCleaningStatus");

  // Get CleaningStaffCleansRoom Data(19)
  $result_CleaningStaffCleansRoom = executePlainSQL("select * from CleaningStaffCleansRoom");
  $columnNames_CleaningStaffCleansRoom = array("StaffID", "RoomNumber", "LocationID");
  printTable($result_CleaningStaffCleansRoom, $columnNames_CleaningStaffCleansRoom, "CleaningStaffCleansRoom");

  // Get LockerMaintenanceStatus Data(20)
  $result_LockerMaintenanceStatus = executePlainSQL("select * from LockerMaintenanceStatus");
  $columnNames_LockerMaintenanceStatus = array("LockerNumber", "LocationID", "LastMaintenance", "AdditionalNotes");
  printTable($result_LockerMaintenanceStatus, $columnNames_LockerMaintenanceStatus, "LockerMaintenanceStatus");

  // Get CleaningStaffMaintainsLocker Data(21)
  $result_CleaningStaffMaintainsLocker = executePlainSQL("select * from CleaningStaffMaintainsLocker");
  $columnNames_CleaningStaffMaintainsLocker = array("StaffID", "LockerNumber", "LocationID");
  printTable($result_CleaningStaffMaintainsLocker, $columnNames_CleaningStaffMaintainsLocker, "CleaningStaffMaintainsLocker");

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
