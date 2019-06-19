Drop table address cascade constraints purge;
Drop table location cascade constraints purge;
Drop table equipmenttype cascade constraints purge;
Drop table equipment cascade constraints purge;
Drop table patron cascade constraints purge;
Drop table visits cascade constraints purge;
Drop table membershipexpiry cascade constraints purge;
Drop table membership cascade constraints purge;
Drop table dependents cascade constraints purge;
Drop table locker cascade constraints purge;
Drop table patronleaseslocker cascade constraints purge;
Drop table staff cascade constraints purge;
Drop table cleaningstaff cascade constraints purge;
Drop table lifeguard cascade constraints purge;
Drop table shift cascade constraints purge;
Drop table staffworksshift cascade constraints purge;
Drop table room cascade constraints purge;
Drop table roomcapacity cascade constraints purge;
Drop table roomcleaningstatus cascade constraints purge;
Drop table cleaningstaffcleansroom cascade constraints purge;
Drop table lockermaintenancestatus cascade constraints purge;
Drop table cleaningstaffmaintainslocker cascade constraints purge;

CREATE TABLE Address(
	Postal_Code CHAR(6),
	Street CHAR(30),
	City CHAR(20),
	Province CHAR(2),
	PRIMARY KEY (Postal_Code));

CREATE TABLE Location(
	LocationID INTEGER,
	Location_Name CHAR(30),
	Opening_Time SMALLINT,
	Closing_Time SMALLINT,
	Phone_Number CHAR(10),
	Postal_Code CHAR(6) NOT NULL,
	PRIMARY KEY (LocationID),
	UNIQUE (Phone_Number),
	UNIQUE (Location_Name, Postal_Code),
	FOREIGN KEY (Postal_Code) REFERENCES Address(Postal_Code));

CREATE TABLE EquipmentType(
	EquipmentID INTEGER,
	Type CHAR(20),
	PRIMARY KEY (EquipmentID));

CREATE TABLE Equipment(
	EquipmentID INTEGER,
	LocationID INTEGER,
	Quantity INTEGER,
	PRIMARY KEY(EquipmentID, LocationID),
	FOREIGN KEY (EquipmentID) REFERENCES EquipmentType(EquipmentID),
	FOREIGN KEY (LocationID) REFERENCES Location(LocationID));

CREATE TABLE Patron(
	PatronID INTEGER,
	Name CHAR(30),
	DOB DATE,
	Sex CHAR(1),
	Phone_Number CHAR(10),
	Postal_Code CHAR(6) NOT NULL,
	PRIMARY KEY (PatronID),
	FOREIGN KEY (Postal_Code) REFERENCES Address(Postal_Code));

CREATE TABLE Visits(
	LocationID INTEGER,
	PatronID INTEGER,
	visitdate DATE,
	PRIMARY KEY (LocationID, PatronID),
	FOREIGN KEY (LocationID) REFERENCES Location(LocationID),
	FOREIGN KEY (PatronID) REFERENCES Patron(PatronID) ON DELETE CASCADE);

CREATE TABLE Membership(
	MembershipID INTEGER,
	Start_Date DATE,
	Payment_Type CHAR(20),
	Amount_Paid REAL,
	PatronID INTEGER NOT NULL,
	PRIMARY KEY (MembershipID),
	UNIQUE (PatronID, Start_Date),
	FOREIGN KEY (PatronID) REFERENCES Patron(PatronID) ON DELETE CASCADE);

CREATE TABLE MembershipExpiry(
	PatronID INTEGER,
	Start_Date DATE,
	Amount_Paid REAL,
	End_Date DATE,
	PRIMARY KEY (PatronID, Start_Date, Amount_Paid),
	FOREIGN KEY (PatronID, Start_Date) REFERENCES Membership(PatronID, Start_Date) ON DELETE CASCADE);

CREATE TABLE Dependents(
	Name CHAR(30),
	PatronID INTEGER,
	DOB DATE,
	Sex CHAR(1),
	Relationship_To_Patron CHAR(20),
	PRIMARY KEY (Name, PatronID),
	FOREIGN KEY (PatronID) REFERENCES Patron(PatronID) ON DELETE CASCADE);

CREATE TABLE Locker(
	Locker_Num INTEGER,
	LocationID INTEGER,
	Locker_Condition CHAR(15),
	PRIMARY KEY (Locker_Num, LocationID),
	FOREIGN KEY (LocationID) REFERENCES Location(LocationID) ON DELETE CASCADE);

CREATE TABLE PatronLeasesLocker(
	PatronID INTEGER,
	Locker_Num INTEGER,
	LocationID INTEGER,
	Lease_Start_Date DATE,
	Lease_End_Date DATE,
	PRIMARY KEY (PatronID, Locker_Num, LocationID),
	FOREIGN KEY (PatronID) REFERENCES Patron(PatronID) ON DELETE CASCADE,
	FOREIGN KEY (Locker_Num, LocationID) REFERENCES Locker(Locker_Num, LocationID));

CREATE TABLE Staff(
	StaffID INTEGER,
	Name CHAR(30),
	DOB DATE,
	Sex CHAR(1),
	Pay_Rate REAL,
	YTD_Pay REAL,
	Hours_Worked_In_Current_Period INTEGER,
	LocationID INTEGER NOT NULL,
	PRIMARY KEY (StaffID),
	FOREIGN KEY (LocationID) REFERENCES Location(LocationID));

CREATE TABLE CleaningStaff(
	StaffID INTEGER,
	PRIMARY KEY (StaffID),
	FOREIGN KEY (StaffID) REFERENCES Staff(StaffID));

CREATE TABLE Lifeguard(
	StaffID INTEGER,
	CPR_Certification_Expiry_Date DATE,
	SupervisorID INTEGER,
	PRIMARY KEY (StaffID),
	FOREIGN KEY (StaffID) REFERENCES Staff(StaffID),
	FOREIGN KEY (SupervisorID) REFERENCES Lifeguard(StaffID));

CREATE TABLE Shift(
	Shiftdate DATE,
	Start_Time SMALLINT,
	End_Time SMALLINT,
	PRIMARY KEY (Shiftdate, Start_Time, End_Time));

CREATE TABLE StaffWorksShift(
	StaffID INTEGER,
	Shiftdate DATE,
	Start_Time SMALLINT,
	End_Time SMALLINT,
	PRIMARY KEY (StaffID, Shiftdate, Start_Time, End_Time),
	FOREIGN KEY (StaffID) REFERENCES Staff(StaffID),
	FOREIGN KEY (Shiftdate, Start_Time, End_Time) REFERENCES Shift(Shiftdate, Start_Time, End_Time));

CREATE TABLE RoomCapacity(
	Room_Type CHAR (20),
	Capacity INTEGER,
	PRIMARY KEY (Room_Type));

CREATE TABLE Room(
	Room_Num INTEGER,
	LocationID INTEGER,
	Room_Type CHAR(20),
	Room_Condition CHAR(10),
	PRIMARY KEY (Room_Num, LocationID),
	FOREIGN KEY (LocationID) REFERENCES Location(LocationID) ON DELETE CASCADE,
	FOREIGN KEY (Room_Type) REFERENCES RoomCapacity(Room_Type));

CREATE TABLE RoomCleaningStatus(
	Room_Num INTEGER,
	LocationID INTEGER,
	Last_Cleaned_Date DATE,
	Additional_Notes CHAR(100),
	PRIMARY KEY (Room_Num, LocationID),
	FOREIGN KEY (Room_Num, LocationID) REFERENCES Room(Room_Num, LocationID));

CREATE TABLE CleaningStaffCleansRoom(
	StaffID INTEGER,
	Room_Num INTEGER,
	LocationID INTEGER,
	PRIMARY KEY (StaffID, Room_Num, LocationID),
	FOREIGN KEY (StaffID) REFERENCES CleaningStaff(StaffID),
	FOREIGN KEY (Room_Num, LocationID) REFERENCES RoomCleaningStatus(Room_Num, LocationID));

CREATE TABLE LockerMaintenanceStatus(
	Locker_Num INTEGER,
	LocationID INTEGER,
	Last_Maintenance_Date DATE,
	Additional_Notes CHAR(100),
	PRIMARY KEY (Locker_Num, LocationID),
	FOREIGN KEY (Locker_Num, LocationID) REFERENCES Locker(Locker_Num, LocationID));

CREATE TABLE CleaningStaffMaintainsLocker(
	StaffID INTEGER,
	Locker_Num INTEGER,
    LocationID INTEGER,
    PRIMARY KEY (StaffID, Locker_Num, LocationID),
    FOREIGN KEY (StaffID) REFERENCES CleaningStaff(StaffID),
    FOREIGN KEY (Locker_Num, LocationID) REFERENCES LockerMaintenanceStatus(Locker_Num, LocationID));

INSERT INTO Address
VALUES ('V6T1K2', '3366 Main St', 'Vancouver', 'BC');

INSERT INTO Address
VALUES ('V6V0A1', '1478 NO.3 Rd', 'Richmond', 'BC');

INSERT INTO Address
VALUES ('V5G1M2', '2521 Kincaid St', 'Burnaby', 'BC');

INSERT INTO Address
VALUES ('K2H5Y9', '2055 Robertson Rd', 'Nepean', 'ON');

INSERT INTO Address
VALUES ('M5G1Z4', '33 Gerrard St W', 'Toronto', 'ON');

INSERT INTO Address
VALUES ('V5H4N2', '4700 Kingsway', 'Burnaby', 'BC');

INSERT INTO Address
VALUES ('V5H1Z5', '4299 Kingsway', 'Burnaby', 'BC');

INSERT INTO Address
VALUES ('V6Y2B6', '6551 No 3 Road', 'Richmond', 'BC');

INSERT INTO Address
VALUES ('V6X4C7', '5911 Minoru Blvd', 'Richmond', 'BC');

INSERT INTO Address
VALUES ('V3L0G2', '85 Merivale St', 'New Westminster', 'BC');

INSERT INTO Address
VALUES ('V3T2W1', '10153 King George Blvd', 'Surrey', 'BC');

INSERT INTO Location
VALUES(1, 'Thunderbird', 800, 2300, '7786826862', 'V6T1K2');

INSERT INTO Location
VALUES(2, 'RichmondCenter', 900, 2200, '6049581234', 'V6V0A1');

INSERT INTO Location
VALUES(3, 'Burnaby', 800, 2300, '6042988688', 'V5G1M2');

INSERT INTO Location
VALUES(4, 'Burrard', 1100, 1900, '6136900100', 'K2H5Y9');

INSERT INTO Location
VALUES(5, 'Granville', 1130, 2200, '4165951975', 'M5G1Z4');

INSERT INTO EquipmentType
VALUES(1, 'Kick Board');

INSERT INTO EquipmentType
VALUES(2, 'Beach Chair');

INSERT INTO EquipmentType
VALUES(3, 'Table');

INSERT INTO EquipmentType
VALUES(4, 'Pool Noodle');

INSERT INTO EquipmentType
VALUES(5, 'Lifebuoy');

INSERT INTO Equipment
VALUES(1, 1, 10);

INSERT INTO Equipment
VALUES(1, 2, 10);

INSERT INTO Equipment
VALUES(1, 3, 3);

INSERT INTO Equipment
VALUES(1, 4, 10);

INSERT INTO Equipment
VALUES(2, 1, 16);

INSERT INTO Equipment
VALUES(2, 2, 16);

INSERT INTO Equipment
VALUES(2, 3, 4);

INSERT INTO Equipment
VALUES(2, 4, 16);

INSERT INTO Equipment
VALUES(2, 5, 1);

INSERT INTO Equipment
VALUES(3, 1, 8);

INSERT INTO Equipment
VALUES(3, 2, 10);

INSERT INTO Equipment
VALUES(3, 3, 5);

INSERT INTO Equipment
VALUES(3, 5, 1);

INSERT INTO Equipment
VALUES(4, 1, 6);

INSERT INTO Equipment
VALUES(4, 2, 12);

INSERT INTO Equipment
VALUES(4, 3, 12);

INSERT INTO Equipment
VALUES(4, 4, 5);

INSERT INTO Equipment
VALUES(4, 5, 2);

INSERT INTO Equipment
VALUES(5, 1, 22);

INSERT INTO Equipment
VALUES(5, 2, 18);

INSERT INTO Equipment
VALUES(5, 3, 16);

INSERT INTO Equipment
VALUES(5, 4, 20);

INSERT INTO Equipment
VALUES(5, 5, 2);

INSERT INTO Patron
VALUES(1, 'Chris', date '1998-06-06', 'M', '7786826666', 'V5H4N2');

INSERT INTO Patron
VALUES(2, 'Jeff', date '1991-06-13', 'M', '6046804567', 'V5H1Z5');

INSERT INTO Patron
VALUES(3, 'Tim', date '1994-01-15', 'M', '6040624347', 'V6Y2B6');

INSERT INTO Patron
VALUES(4, 'Illean', date '2000-01-23', 'M', '6049871234', 'V6X4C7');

INSERT INTO Patron
VALUES(5, 'Matthew', date '1997-12-27', 'M', '6134565798', 'V3L0G2');

INSERT INTO Patron
VALUES(6, 'Joe', date '1982-09-05', 'M', '7786820527', 'V3T2W1');

INSERT INTO Visits
VALUES(1, 1, date '2019-04-04');

INSERT INTO Visits
VALUES(2, 2, date '2019-04-04');

INSERT INTO Visits
VALUES(2, 3, date '2019-04-07');

INSERT INTO Visits
VALUES(3, 4, date '2019-02-23');

INSERT INTO Visits
VALUES(4, 5, date '2019-02-23');

INSERT INTO Visits
VALUES(5, 6, date '2019-04-04');

INSERT INTO Membership
VALUES(101, date '2019-05-05', 'Visa', 9.99, 1);

INSERT INTO Membership
VALUES(102, date '2019-05-15', 'Cash', 9.99, 2);

INSERT INTO Membership
VALUES(103, date '2019-05-16', 'Visa', 9.99, 3);

INSERT INTO Membership
VALUES(104, date '2019-05-01', 'Cash', 9.99, 4);

INSERT INTO Membership
VALUES(105, date '2019-05-25', 'Visa', 29.99, 5);

INSERT INTO Membership
VALUES(106, date '2019-06-05', 'Visa', 9.99, 6);

INSERT INTO Membership
VALUES(107, date '2019-07-05', 'Visa', 19.99, 6);

INSERT INTO MembershipExpiry
VALUES(1, date '2019-05-05', 9.99, date '2019-06-05');

INSERT INTO MembershipExpiry
VALUES(2, date '2019-05-15', 9.99, date '2019-06-15');

INSERT INTO MembershipExpiry
VALUES(3, date '2019-05-16', 9.99, date '2019-06-16');

INSERT INTO MembershipExpiry
VALUES(4, date '2019-05-01', 9.99, date '2019-06-01');

INSERT INTO MembershipExpiry
VALUES(5, date '2019-05-25', 29.99, date '2019-08-25');

INSERT INTO MembershipExpiry
VALUES(6, date '2019-06-05', 9.99, date '2019-07-05');

INSERT INTO MembershipExpiry
VALUES(6, date '2019-07-05', 19.99, date '2019-09-05');

INSERT INTO Dependents
VALUES('Christine', 1, date '1987-05-24', 'F', 'Wife');

INSERT INTO Dependents
VALUES('Jim', 1, date '1990-06-14', 'M', 'Brother');

INSERT INTO Dependents
VALUES('Todd', 1, date '1995-01-16', 'M', 'Brother');

INSERT INTO Dependents
VALUES('Amber', 4, date '1959-11-02', 'F', 'Mother');

INSERT INTO Dependents
VALUES('Tomas', 5, date '1966-12-28', 'M', 'Father');

INSERT INTO Locker
VALUES(1,1, 'Out of Order');

INSERT INTO Locker
VALUES(2,1, 'Excellent');

INSERT INTO Locker
VALUES(3,1, 'Poor');

INSERT INTO Locker
VALUES(4,1, 'Good');

INSERT INTO Locker
VALUES(5,1, 'Poor');

INSERT INTO Locker
VALUES(1,2, 'Fair');

INSERT INTO Locker
VALUES(2,2, 'Poor');

INSERT INTO Locker
VALUES(3,2, 'Fair');

INSERT INTO Locker
VALUES(4,2, 'Fair');

INSERT INTO Locker
VALUES(1,3, 'Good');

INSERT INTO Locker
VALUES(2,3, 'Excellent');

INSERT INTO Locker
VALUES(3,3, 'Good');

INSERT INTO Locker
VALUES(1,4, 'Good');

INSERT INTO Locker
VALUES(2,4, 'Poor');

INSERT INTO Locker
VALUES(3,4, 'Excellent');

INSERT INTO Locker
VALUES(4,4, 'Fair');

INSERT INTO Locker
VALUES(1,5, 'Excellent');

INSERT INTO Locker
VALUES(2,5, 'Excellent');

INSERT INTO Locker
VALUES(3,5, 'Good');

INSERT INTO Locker
VALUES(4,5, 'Excellent');

INSERT INTO Locker
VALUES(5,5, 'Out of Order');

INSERT INTO PatronLeasesLocker
VALUES(1, 1, 2, date '2019-05-05', date '2020-05-05');

INSERT INTO PatronLeasesLocker
VALUES(2, 2, 1, date '2019-05-15', date '2020-05-15');

INSERT INTO PatronLeasesLocker
VALUES(3, 3, 1, date '2019-05-16', date '2020-05-16');

INSERT INTO PatronLeasesLocker
VALUES(4, 4, 2, date '2019-05-01', date '2020-05-01');

INSERT INTO PatronLeasesLocker
VALUES(5, 4, 5, date '2019-05-25', date '2020-05-25');

INSERT INTO PatronLeasesLocker
VALUES(5, 3, 5, date '2019-05-25', date '2020-05-25');

INSERT INTO PatronLeasesLocker
VALUES(6, 1, 5, date '2019-06-16', date '2021-05-25');

INSERT INTO Staff
VALUES(1001, 'Alex', date '1978-01-01', 'M', 25, 125, 8, 1);

INSERT INTO Staff
VALUES(1002, 'Adam', date '1988-02-01', 'M', 25, 125, 8, 1);

INSERT INTO Staff
VALUES(1003, 'Eric', date '1997-02-10', 'M', 25, 150, 20, 1);

INSERT INTO Staff
VALUES(2001, 'Brandon', date '1997-02-10', 'M', 35, 200, 7, 2);

INSERT INTO Staff
VALUES(2002, 'Brian', date '1989-08-09', 'M', 35, 200, 7, 2);

INSERT INTO Staff
VALUES(3001, 'Chloe', date '1979-07-18', 'F', 38, 220, 8, 3);

INSERT INTO Staff
VALUES(3002, 'Charles', date '1991-05-18', 'M', 35, 200, 7, 3);

INSERT INTO Staff
VALUES(4001, 'David', date '1988-02-01', 'M', 27, 180, 8, 4);

INSERT INTO Staff
VALUES(4002, 'Peter', date '1992-12-30', 'M', 35, 200, 7, 4);

INSERT INTO Staff
VALUES(4003, 'Arthur', date '1992-12-30', 'M', 25, 200, 10, 4);

INSERT INTO Staff
VALUES(5001, 'Ellen', date '1991-05-18', 'F', 20, 90, 8, 5);

INSERT INTO Staff
VALUES(5002, 'Joyce', date '1994-04-30', 'F', 35, 200, 7, 5);

INSERT INTO Staff
VALUES(5003, 'Riana', date '1994-04-30', 'F', 25, 180, 7, 5);

INSERT INTO Staff
VALUES(5004, 'Wendy', date '1995-04-30', 'F', 25, 180, 20, 5);

INSERT INTO CleaningStaff
VALUES(1002);

INSERT INTO CleaningStaff
VALUES(2002);

INSERT INTO CleaningStaff
VALUES(3002);

INSERT INTO CleaningStaff
VALUES(4002);

INSERT INTO CleaningStaff
VALUES(4003);

INSERT INTO CleaningStaff
VALUES(5002);

INSERT INTO Lifeguard
VALUES(1001, date '2022/06/24', NULL);

INSERT INTO Lifeguard
VALUES(1003, date '2022/06/24', 1001);

INSERT INTO Lifeguard
VALUES(2001, date '2022/06/24', NULL);

INSERT INTO Lifeguard
VALUES(3001, date '2022/06/24', NULL);

INSERT INTO Lifeguard
VALUES(4001, date '2022/06/24', NULL);

INSERT INTO Lifeguard
VALUES(5001, date '2022/06/24', NULL);

INSERT INTO Lifeguard
VALUES(5004, date '2022/06/24', 5001);

INSERT INTO Shift
VALUES(date '2019-06-23', 600, 1400);

INSERT INTO Shift
VALUES(date '2019-06-23', 1400, 2200);

INSERT INTO Shift
VALUES(date '2019-06-24', 600, 1400);

INSERT INTO Shift
VALUES(date '2019-06-24', 1400, 2200);

INSERT INTO Shift
VALUES(date '2019-06-25', 600, 1400);

INSERT INTO Shift
VALUES(date '2019-06-25', 1400, 2200);

INSERT INTO Shift
VALUES(date '2019-06-26', 600, 1400);

INSERT INTO Shift
VALUES(date '2019-06-26', 1400, 2200);

INSERT INTO Shift
VALUES(date '2019-06-27', 600, 1400);

INSERT INTO Shift
VALUES(date '2019-06-27', 1400, 2200);

INSERT INTO StaffWorksShift
VALUES(1001, date '2019-06-23', 600, 1400);

INSERT INTO StaffWorksShift
VALUES(1002, date '2019-06-23', 1400, 2200);

INSERT INTO StaffWorksShift
VALUES(1003, date '2019-06-23', 1400, 2200);

INSERT INTO StaffWorksShift
VALUES(2001, date '2019-06-23', 600, 1400);

INSERT INTO StaffWorksShift
VALUES(2002, date '2019-06-23', 1400, 2200);

INSERT INTO StaffWorksShift
VALUES(3001, date '2019-06-23', 600, 1400);

INSERT INTO StaffWorksShift
VALUES(3002, date '2019-06-23', 1400, 2200);

INSERT INTO StaffWorksShift
VALUES(4001, date '2019-06-23', 600, 1400);

INSERT INTO StaffWorksShift
VALUES(4002, date '2019-06-23', 1400, 2200);

INSERT INTO StaffWorksShift
VALUES(5001, date '2019-06-23', 600, 1400);

INSERT INTO StaffWorksShift
VALUES(5002, date '2019-06-23', 1400, 2200);

INSERT INTO StaffWorksShift
VALUES(5003, date '2019-06-23', 600, 1400);

INSERT INTO StaffWorksShift
VALUES(5004, date '2019-06-23', 600, 1400);

INSERT INTO RoomCapacity
VALUES('Large Swimming Pool', 300);

INSERT INTO RoomCapacity
VALUES('Medium Swimming Pool', 200);

INSERT INTO RoomCapacity
VALUES('Small Changing Room', 25);

INSERT INTO RoomCapacity
VALUES('Medium Changing Room', 50);

INSERT INTO RoomCapacity
VALUES('Large Gym', 100);

INSERT INTO RoomCapacity
VALUES('Medium Gym', 50);

INSERT INTO Room
VALUES(1, 1, 'Large Swimming Pool', 'Excellent');

INSERT INTO Room
VALUES(2, 1, 'Medium Changing Room', 'Excellent');

INSERT INTO Room
VALUES(3, 1, 'Large Gym', 'Excellent');

INSERT INTO Room
VALUES(1, 2, 'Medium Swimming Pool', 'Excellent');

INSERT INTO Room
VALUES(2, 2, 'Small Changing Room', 'Good');

INSERT INTO Room
VALUES(1, 3, 'Medium Swimming Pool', 'Poor');

INSERT INTO Room
VALUES(2, 3, 'Medium Changing Room', 'Poor');

INSERT INTO Room
VALUES(1, 4, 'Medium Changing Room', 'Good');

INSERT INTO Room
VALUES(2, 4, 'Large Gym', 'Excellent');

INSERT INTO Room
VALUES(1, 5, 'Medium Gym', 'Excellent');

INSERT INTO Room
VALUES(2, 5, 'Small Changing Room', 'Good');

INSERT INTO Room
VALUES(3, 5, 'Large Swimming Pool', 'Fair');

INSERT INTO RoomCleaningStatus
VALUES(1, 1, date '2019-05-23', NULL);

INSERT INTO RoomCleaningStatus
VALUES(2, 1, date '2019/06/20', NULL);

INSERT INTO RoomCleaningStatus
VALUES(3, 1, date '2019-05-23', NULL);

INSERT INTO RoomCleaningStatus
VALUES(1, 2, date '2019-05-23', 'Need tables and chairs on 05/27/2019');

INSERT INTO RoomCleaningStatus
VALUES(2, 2, date '2019-05-23', NULL);

INSERT INTO RoomCleaningStatus
VALUES(1, 3, date '2019-06-23', NULL);

INSERT INTO RoomCleaningStatus
VALUES(2, 3, date '2019-06-23', NULL);

INSERT INTO RoomCleaningStatus
VALUES(1, 4, date '2019-05-23', 'Closed on 05/25/2019');

INSERT INTO RoomCleaningStatus
VALUES(2, 4, date '2019-05-23', 'Closed on 05/25/2019');

INSERT INTO RoomCleaningStatus
VALUES(1, 5, date '2019-05-23', NULL);

INSERT INTO RoomCleaningStatus
VALUES(2, 5, date '2019-05-23', NULL);

INSERT INTO RoomCleaningStatus
VALUES(3, 5, date '2019-05-23', NULL);

INSERT INTO CleaningStaffCleansRoom
VALUES(1002, 1, 1);

INSERT INTO CleaningStaffCleansRoom
VALUES(2002, 1, 2);

INSERT INTO CleaningStaffCleansRoom
VALUES(3002, 1, 3);

INSERT INTO CleaningStaffCleansRoom
VALUES(4002, 1, 4);

INSERT INTO CleaningStaffCleansRoom
VALUES(5002, 1, 5);

INSERT INTO LockerMaintenanceStatus
VALUES(1,1, date '2019-05-20', NULL);

INSERT INTO LockerMaintenanceStatus
VALUES(2,1, date '2019-05-20', NULL);

INSERT INTO LockerMaintenanceStatus
VALUES(3,1, date '2019-05-20', NULL);

INSERT INTO LockerMaintenanceStatus
VALUES(4,1, date '2019-05-20', NULL);

INSERT INTO LockerMaintenanceStatus
VALUES(5,1, date '2019-05-20', NULL);

INSERT INTO LockerMaintenanceStatus
VALUES(1,2, date '2019-05-20', NULL);

INSERT INTO LockerMaintenanceStatus
VALUES(2,2, date '2019-05-20', 'Repair scheduled 25/05/2019');

INSERT INTO LockerMaintenanceStatus
VALUES(3,2, date '2019-05-20', NULL);

INSERT INTO LockerMaintenanceStatus
VALUES(4,2, date '2019-05-20', NULL);

INSERT INTO LockerMaintenanceStatus
VALUES(1,3, date '2019-05-20', NULL);

INSERT INTO LockerMaintenanceStatus
VALUES(2,3, date '2019-05-20', NULL);

INSERT INTO LockerMaintenanceStatus
VALUES(3,3, date '2019-05-20', NULL);

INSERT INTO LockerMaintenanceStatus
VALUES(1,4, date '2019-05-20', NULL);

INSERT INTO LockerMaintenanceStatus
VALUES(2,4, date '2019-05-20', NULL);

INSERT INTO LockerMaintenanceStatus
VALUES(3,4, date '2019-05-20', NULL);

INSERT INTO LockerMaintenanceStatus
VALUES(1,5, date '2019-05-20', NULL);

INSERT INTO LockerMaintenanceStatus
VALUES(2,5, date '2019-05-20', NULL);

INSERT INTO LockerMaintenanceStatus
VALUES(3,5, date '2019-05-20', NULL);

INSERT INTO LockerMaintenanceStatus
VALUES(4,5, date '2019-05-20', 'Repair scheduled 27/05/2019');

INSERT INTO CleaningStaffMaintainsLocker
VALUES(1002,1,1);

INSERT INTO CleaningStaffMaintainsLocker
VALUES(1002,2,1);

INSERT INTO CleaningStaffMaintainsLocker
VALUES(1002,3,1);

INSERT INTO CleaningStaffMaintainsLocker
VALUES(1002,4,1);

INSERT INTO CleaningStaffMaintainsLocker
VALUES(1002,5,1);

INSERT INTO CleaningStaffMaintainsLocker
VALUES(2002,1,2);

INSERT INTO CleaningStaffMaintainsLocker
VALUES(2002,2,2);

INSERT INTO CleaningStaffMaintainsLocker
VALUES(2002,3,2);

INSERT INTO CleaningStaffMaintainsLocker
VALUES(2002,4,2);

INSERT INTO CleaningStaffMaintainsLocker
VALUES(3002,1,3);

INSERT INTO CleaningStaffMaintainsLocker
VALUES(3002,2,3);

INSERT INTO CleaningStaffMaintainsLocker
VALUES(3002,3,3);

INSERT INTO CleaningStaffMaintainsLocker
VALUES(4002,1,4);

INSERT INTO CleaningStaffMaintainsLocker
VALUES(4002,2,4);

INSERT INTO CleaningStaffMaintainsLocker
VALUES(4003,3,4);

INSERT INTO CleaningStaffMaintainsLocker
VALUES(5002,1,5);

INSERT INTO CleaningStaffMaintainsLocker
VALUES(5002,2,5);

INSERT INTO CleaningStaffMaintainsLocker
VALUES(5002,3,5);

INSERT INTO CleaningStaffMaintainsLocker
VALUES(5002,4,5);

grant select on Address to public;
grant select on Location to public;
grant select on EquipmentType to public;
grant select on Equipment to public;
grant select on Patron to public;
grant select on Visits to public;
grant select on Membership to public;
grant select on MembershipExpiry to public;
grant select on Dependents to public;
grant select on Locker to public;
grant select on PatronLeasesLocker to public;
grant select on Staff to public;
grant select on CleaningStaff to public;
grant select on Lifeguard to public;
grant select on Shift to public;
grant select on StaffWorksShift to public;
grant select on RoomCapacity to public;
grant select on Room to public;
grant select on RoomCleaningStatus to public;
grant select on CleaningStaffCleansRoom to public;
grant select on LockerMaintenanceStatus to public;
grant select on CleaningStaffMaintainsLocker to public;
