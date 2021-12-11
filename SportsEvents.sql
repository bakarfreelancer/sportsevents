#Creating database
#CREATE DATABASE SportsEvent;

#Perfrom all operations in sports_event database
#use SportsEvent;

#Create Admin table
CREATE TABLE Admin(Email varchar(90) NOT NULL PRIMARY KEY, Password VARCHAR(255) NOT NULL);

#create Game table
CREATE TABLE Game(GId int NOT NULL AUTO_INCREMENT, GName varchar(50) NOT NULL, GDate datetime, GVenue varchar(100),
PRIMARY KEY(GId));

#Create Player table
CREATE TABLE Player (PNic varchar(13) NOT NULL PRIMARY KEY, PName varchar(50) NOT NULL, PAddress varchar(255), PContact varchar(11));

#Create PlayerGame table
CREATE TABLE PlayerGame (
    PNic VARCHAR(13) NOT NULL, GId INT NOT NULL,
    CONSTRAINT pnic_fk FOREIGN KEY(PNic) REFERENCES Player(PNic) ON DELETE NO ACTION,
    CONSTRAINT gid_fk FOREIGN KEY(GId) REFERENCES Game(GId) ON DELETE NO ACTION,
    PRIMARY KEY(PNic, GId)

);

#creating Items table
CREATE TABLE Item(
    PNic VARCHAR(13), SItemName VARCHAR(30),
    CONSTRAINT pnic_fk2 FOREIGN KEY(PNic) REFERENCES Player(PNic) ON DELETE NO ACTION,
    CHECK(SItemName in ('Bat', 'Ball', 'Gloves', 'Wickets', 'Helmet', 'Football', 'Shoes', 'Basketball', 'Pool Stick', 'Hockey', 'Pads', 'Track Suit', 'Cap')),
    PRIMARY KEY(SItemName, PNic)
    );


#Create player award table
CREATE TABLE Award(
    PNic VARCHAR(13) NOT NULL, GId int, AwardName VARCHAR(50),
    CONSTRAINT gid_fk2 FOREIGN KEY(GId) REFERENCES Game(GId) ON DELETE NO ACTION,
    CONSTRAINT pnic_fk3 FOREIGN KEY(PNic) REFERENCES Player(PNic) ON DELETE NO ACTION,
    PRIMARY KEY(GId, AwardName)
    );
