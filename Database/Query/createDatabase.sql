CREATE TABLE Books(
	ISBN varchar(255),
    publisher text,
    files varchar(255),
    descriptions text,
    numberofPage int,
    title text,
    dates Date,
    image varchar(225),
    author text,
    AccountSpecID int(11),
    FOREIGN KEY (AccountSpecID) REFERENCES AccountSpecs(AccountSpecID),
	PRIMARY KEY(ISBN)
)ENGINE = MYISAM;

CREATE TABLE Comments(
	ISBN varchar(255),
    ID int NOT NULL AUTO_INCREMENT,
    WAccountSpecID int(11),
    likeCount int DEFAULT 0,
    content text,
    FOREIGN KEY (WAccountSpecID) REFERENCES AccountSpecs(AccountSpecID),
    FOREIGN KEY (ISBN) REFERENCES Books(ISBN),
	PRIMARY KEY(ISBN , ID)
)ENGINE = MYISAM;


CREATE TABLE Connects(
	AccountSpecID int(11),
    donePages int(11),
    state int,
    ISBN varchar(255),
    FOREIGN KEY (AccountSpecID) REFERENCES AccountSpecs(AccountSpecID),
    FOREIGN KEY (ISBN) REFERENCES Books(ISBN),
	PRIMARY KEY(ISBN , AccountSpecID)
)ENGINE = MYISAM;



CREATE TABLE Reply(
	ISBN varchar(255),
    FID int,
    SID int,
    FOREIGN KEY (ISBN) REFERENCES Books(ISBN),
    FOREIGN KEY (FID) REFERENCES Comments(id),
    FOREIGN KEY (SID) REFERENCES Comments(id),
    PRIMARY KEY(ISBN , FID , SID)
)ENGINE = MYISAM;



CREATE TABLE Rating(
	AccountSpecID int(11),
    rating int(11),
    ISBN varchar(255),
    FOREIGN KEY (AccountSpecID) REFERENCES AccountSpecs(AccountSpecID),
    FOREIGN KEY (ISBN) REFERENCES Books(ISBN),
	PRIMARY KEY(ISBN , AccountSpecID)
)ENGINE = MYISAM;





