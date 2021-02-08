CREATE TABLE Rating(
	AccountSpecID int(11),
    rating int(11),
    ISBN varchar(255),
    FOREIGN KEY (AccountSpecID) REFERENCES AccountSpecs(AccountSpecID),
    FOREIGN KEY (ISBN) REFERENCES Books(ISBN),
	PRIMARY KEY(ISBN , AccountSpecID)
)ENGINE = MYISAM;


