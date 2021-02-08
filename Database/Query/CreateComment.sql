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


