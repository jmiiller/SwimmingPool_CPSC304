# SwimmingPool_CPSC304





Schema Changes:
#1 - Location Schema: "Opening_Time" and "Closing_Time" field types changed from TIME to SMALLINT. This is because Oracle does not have a time datatype that we felt could appropriately represent these two fields.
#2 - Visits schema: Removed "Time" field and changed name of the field "date" to "visitdate". Removed the "Time" field because we didn't feel that we needed to store that information for each patron's visit.
#3 - PatronLeasesLocker schema: Added "LocationID" to schema. This was because Oracle does not allow you to have foreign keys that are not unique in the parent table. Therefore, I added LocationID, so that we could keep Locker_Num as a foreign key. 
#4 - Shift: Changed "Start_Time" and "End_Time" field type from TIME to SMALLINT to maintain consistency with our representation of time in other schemas. Using SMALLINT also saves us space.
#5 - StaffWorksShift: Changed "Start_Time" and "End_Time" field type from TIME to SMALLINT to maintain consistency with our representation of time in other schemas. Using SMALLINT also saves us space.
#6 - Room: Made "Room_Type" field into a foreign key of RoomCapacity. Our TA suggested this to us after handing in Milestone 3.
