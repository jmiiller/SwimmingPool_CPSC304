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
	Street CHAR(20),
	City CHAR(20),
	Province CHAR(2),
	PRIMARY KEY (Postal_Code));

CREATE TABLE Location(
	LocationID INTEGER,
	Location_Name CHAR(30),
	Opening_Time INTEGER, /* changed from TIME to INTEGER */
	Closing_Time INTEGER, /* changed from TIME to INTEGER */
	Phone_Number CHAR(10),
	Postal_Code CHAR(6) NOT NULL,
	PRIMARY KEY (LocationID),
	UNIQUE (Phone_Number),
	UNIQUE (Location_Name, Postal_Code),
	FOREIGN KEY (Postal_Code) REFERENCES Address(Postal_Code));

CREATE TABLE EquipmentType(
	EquipmentID INTEGER,
	Type CHAR(30),
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
	Num_Dependents INTEGER,
	PRIMARY KEY (PatronID),
	FOREIGN KEY (Postal_Code) REFERENCES Address(Postal_Code));

CREATE TABLE Visits(
	LocationID INTEGER,
	PatronID INTEGER,
	visitdate DATE, /* changed name from date to visitdate and removed Time field */
	PRIMARY KEY (LocationID, PatronID),
	FOREIGN KEY (LocationID) REFERENCES Location(LocationID),
	FOREIGN KEY (PatronID) REFERENCES Patron(PatronID));

CREATE TABLE Membership(
	MembershipID INTEGER,
	Start_Date DATE,
	Payment_Type CHAR(20),
	Amount_Paid REAL,
	PatronID INTEGER NOT NULL,
	PRIMARY KEY (MembershipID),
	UNIQUE (PatronID, Start_Date),
	FOREIGN KEY (PatronID) REFERENCES Patron(PatronID));

CREATE TABLE MembershipExpiry(
	PatronID INTEGER,
	Start_Date DATE,
	Amount_Paid REAL,
	End_Date DATE,
	PRIMARY KEY (PatronID, Start_Date, Amount_Paid),
	FOREIGN KEY (PatronID, Start_Date) REFERENCES Membership(PatronID, Start_Date));

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
	Condition CHAR(15),
	PRIMARY KEY (Locker_Num, LocationID),
	FOREIGN KEY (LocationID) REFERENCES Location(LocationID) ON DELETE CASCADE);

CREATE TABLE PatronLeasesLocker(
	PatronID INTEGER,
	Locker_Num INTEGER,
	LocationID INTEGER, /* added locationID to make Oracle happy */
	Lease_Start_Date DATE,
	Lease_End_Date DATE,
	PRIMARY KEY (PatronID, Locker_Num, LocationID),
	FOREIGN KEY (PatronID) REFERENCES Patron(PatronID),
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
	shiftdate DATE,
	Start_Time INTEGER, /* changed field type for both to INTEGER */
	End_Time INTEGER,
	PRIMARY KEY (shiftdate, Start_Time, End_Time));

CREATE TABLE StaffWorksShift(
	StaffID INTEGER,
	shiftdate DATE,
	Start_Time INTEGER,
	End_Time INTEGER, /* changed field type for start and end time to integer from time */
	PRIMARY KEY (StaffID, shiftdate, Start_Time, End_Time),
	FOREIGN KEY (StaffID) REFERENCES Staff(StaffID),
	FOREIGN KEY (shiftdate, Start_Time, End_Time) REFERENCES Shift(shiftdate, Start_Time, End_Time));

CREATE TABLE RoomCapacity(
	Room_Type CHAR (20),
   Capacity INTEGER,
   PRIMARY KEY (Room_Type));

CREATE TABLE Room(
	Room_Num INTEGER,
	LocationID INTEGER,
	Room_Type CHAR(20), /* Room_Type made a foreign key of roomcapacity table */
	Condition CHAR(10),
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

INSERT INTO Location
VALUES(1, 'Thunderbird', 800, 2300, '7786826862', 'V6T1K2');

INSERT INTO Location
VALUES(2, 'RichmondCenter', 900, 2200, '6049581234', 'V6V0A1');

INSERT INTO Location
VALUES(3, 'Burnaby', 800, 2300, '6042988688', 'V5G1M2');

INSERT INTO Location
VALUES(4, 'Downtown1', 1100, 1900, '6136900100', 'K2H5Y9');

INSERT INTO Location
VALUES(5, 'Downtown2', 1130, 2200, '4165951975', 'M5G1Z4');

INSERT INTO Patron
VALUES(1, 'Chris', to_date('23/05/1987', 'DD/MM/YYYY'), 'M', '7786826666', 'V6T1K2', 1);

INSERT INTO Patron
VALUES(2, 'Jeff', to_date('13/06/1991', 'DD/MM/YYYY'), 'M', '6046804567', 'V6V0A1', 1);

INSERT INTO Patron
VALUES(3, 'Tim', to_date('15/01/1994', 'DD/MM/YYYY'), 'M', '6040624347', 'V6V0A1', 1);

INSERT INTO Patron
VALUES(4, 'Illean', to_date('01/11/1978', 'DD/MM/YYYY'), 'M', '6049871234', 'V5G1M2', 1);

INSERT INTO Patron
VALUES(5, 'Matthew', to_date('27/12/1997', 'DD/MM/YYYY'), 'M', '6134565798', 'K2H5Y9', 1);

INSERT INTO Patron
VALUES(6, 'Joe', to_date('19/05/1982', 'DD/MM/YYYY'), 'M', '7786820527', 'M5G1Z4', 1);

INSERT INTO Visits
VALUES(1, 1, to_date('04/04/2019', 'DD/MM/YYYY'));

INSERT INTO Visits
VALUES(2, 2, to_date('04/04/2019', 'DD/MM/YYYY'));

INSERT INTO Visits
VALUES(2, 3, to_date('19/04/2019', 'DD/MM/YYYY'));

INSERT INTO Visits
VALUES(3, 4, to_date('23/02/2019', 'DD/MM/YYYY'));

INSERT INTO Visits
VALUES(4, 5, to_date('04/12/2018', 'DD/MM/YYYY'));

INSERT INTO Visits
VALUES(5, 6, to_date('04/04/2019', 'DD/MM/YYYY'));

INSERT INTO Membership
VALUES(101, to_date('05/05/2019', 'DD/MM/YYYY'), 'Visa', 9.99, 1);

INSERT INTO Membership
VALUES(102, to_date('15/05/2019', 'DD/MM/YYYY'), 'Cash', 9.99, 2);

INSERT INTO Membership
VALUES(103, to_date('16/05/2019', 'DD/MM/YYYY'), 'Visa', 9.99, 3);

INSERT INTO Membership
VALUES(104, to_date('01/05/2019', 'DD/MM/YYYY'), 'Cash', 9.99, 4);

INSERT INTO Membership
VALUES(105, to_date('25/05/2019', 'DD/MM/YYYY'), 'Visa', 29.99, 5);

INSERT INTO Membership
VALUES(106, to_date('05/05/2019', 'DD/MM/YYYY'), 'Visa', 9.99, 6);

INSERT INTO MembershipExpiry
VALUES(1, to_date('05/05/2019', 'DD/MM/YYYY'), 9.99, to_date('05/06/2019', 'DD/MM/YYYY'));

INSERT INTO MembershipExpiry
VALUES(2, to_date('15/05/2019', 'DD/MM/YYYY'), 9.99, to_date('15/06/2019', 'DD/MM/YYYY'));

INSERT INTO MembershipExpiry
VALUES(3, to_date('16/05/2019', 'DD/MM/YYYY'), 9.99, to_date('16/06/2019', 'DD/MM/YYYY'));

INSERT INTO MembershipExpiry
VALUES(4, to_date('01/05/2019', 'DD/MM/YYYY'), 9.99, to_date('01/06/2019', 'DD/MM/YYYY'));

INSERT INTO MembershipExpiry
VALUES(5, to_date('25/05/2019', 'DD/MM/YYYY'), 29.99, to_date('25/08/2019', 'DD/MM/YYYY'));

INSERT INTO MembershipExpiry
VALUES(6, to_date('05/05/2019', 'DD/MM/YYYY'), 9.99, to_date('05/06/2019', 'DD/MM/YYYY'));

INSERT INTO Dependents
VALUES('Christine', 1, to_date('24/05/1987', 'DD/MM/YYYY'), 'F', 'Wife');

INSERT INTO Dependents
VALUES('Jim', 2, to_date('14/06/1990', 'DD/MM/YYYY'), 'M', 'Brother');

INSERT INTO Dependents
VALUES('Todd', 3, to_date('16/01/1995', 'DD/MM/YYYY'), 'M', 'Brother');

INSERT INTO Dependents
VALUES('Amber', 4, to_date('02/11/1959', 'DD/MM/YYYY'), 'F', 'Mother');

INSERT INTO Dependents
VALUES('Tomas', 5, to_date('28/12/1966', 'DD/MM/YYYY'), 'M', 'Father');

INSERT INTO Dependents
VALUES('Pattson', 6, to_date('20/05/1983', 'DD/MM/YYYY'), 'M', 'Husband');

INSERT INTO Locker
VALUES(1,1, 'Out of Order');
INSERT INTO Locker
VALUES(2,1, 'Poor');
INSERT INTO Locker
VALUES(3,1, 'Poor');
INSERT INTO Locker
VALUES(4,1, 'Poor');
INSERT INTO Locker
VALUES(5,1, 'Poor');
INSERT INTO Locker
VALUES(1,2, 'Fair');
INSERT INTO Locker
VALUES(2,2, 'Fair');
INSERT INTO Locker
VALUES(3,2, 'Fair');
INSERT INTO Locker
VALUES(4,2, 'Fair');
INSERT INTO Locker
VALUES(1,3, 'Good');
INSERT INTO Locker
VALUES(2,3, 'Good');
INSERT INTO Locker
VALUES(3,3, 'Good');
INSERT INTO Locker
VALUES(1,4, 'Good');
INSERT INTO Locker
VALUES(2,4, 'Good');
INSERT INTO Locker
VALUES(3,4, 'Excellent');
INSERT INTO Locker
VALUES(1,5, 'Excellent');
INSERT INTO Locker
VALUES(2,5, 'Excellent');
INSERT INTO Locker
VALUES(3,5, 'Excellent');
INSERT INTO Locker
VALUES(4,5, 'Excellent');

INSERT INTO PatronLeasesLocker
VALUES(1, 1, 2, to_date('05/05/2019', 'DD/MM/YYYY'), to_date('05/05/2020', 'DD/MM/YYYY'));

INSERT INTO PatronLeasesLocker
VALUES(2, 2, 1, to_date('15/05/2019', 'DD/MM/YYYY'), to_date('15/05/2020', 'DD/MM/YYYY'));

INSERT INTO PatronLeasesLocker
VALUES(3, 3, 1, to_date('16/05/2019', 'DD/MM/YYYY'), to_date('16/05/2020', 'DD/MM/YYYY'));

INSERT INTO PatronLeasesLocker
VALUES(4, 4, 2, to_date('01/05/2019', 'DD/MM/YYYY'), to_date('01/05/2020', 'DD/MM/YYYY'));

INSERT INTO PatronLeasesLocker
VALUES(5, 4, 5, to_date('25/05/2019', 'DD/MM/YYYY'), to_date('25/05/2020', 'DD/MM/YYYY'));

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