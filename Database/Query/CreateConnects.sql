CREATE TABLE Connects(
	AccountSpecID int(11),
    donePages int(11),
    state int,
    ISBN varchar(255),
    FOREIGN KEY (AccountSpecID) REFERENCES AccountSpecs(AccountSpecID),
    FOREIGN KEY (ISBN) REFERENCES Books(ISBN),
	PRIMARY KEY(ISBN , AccountSpecID)
)ENGINE = MYISAM;


