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


