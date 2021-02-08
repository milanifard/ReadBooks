INSERT INTO `sadaf`.`AccountSpecs`
(`AccountSpecID`,
`UserID`,
`UserPassword`,
`PersonID`)
VALUES
(2,
"shiva",
"12345",
2);


INSERT INTO `sadaf`.`AccountSpecs`
(`AccountSpecID`,
`UserID`,
`UserPassword`,
`PersonID`)
VALUES
(3,
"kasra",
"12345",
3);


INSERT INTO `sadaf`.`AccountSpecs`
(`AccountSpecID`,
`UserID`,
`UserPassword`,
`PersonID`)
VALUES
(4,
"sahar",
"12345",
4);


INSERT INTO `sadaf`.`AccountSpecs`
(`AccountSpecID`,
`UserID`,
`UserPassword`,
`PersonID`)
VALUES
(5,
"mahmoud",
"12345",
5);


INSERT INTO `sadaf`.`AccountSpecs`
(`AccountSpecID`,
`UserID`,
`UserPassword`,
`PersonID`)
VALUES
(6,
"ali",
"12345",
6);


INSERT INTO `sadaf`.`AccountSpecs`
(`AccountSpecID`,
`UserID`,
`UserPassword`,
`PersonID`)
VALUES
(7,
"tara",
"12345",
7);



INSERT INTO `sadaf`.`persons`
(`PersonID`,
`pfname`,
`plname`,
`CardNumber`)
VALUES
(2,
"shiva",
"radmanesh",
0);


INSERT INTO `sadaf`.`persons`
(`PersonID`,
`pfname`,
`plname`,
`CardNumber`)
VALUES
(3,
"kasra",
"korminejad",
0);


INSERT INTO `sadaf`.`persons`
(`PersonID`,
`pfname`,
`plname`,
`CardNumber`)
VALUES
(4,
"sahar",
"sheikholeslami",
0);

INSERT INTO `sadaf`.`persons`
(`PersonID`,
`pfname`,
`plname`,
`CardNumber`)
VALUES
(5,
"ali",
"nasri",
0);

INSERT INTO `sadaf`.`persons`
(`PersonID`,
`pfname`,
`plname`,
`CardNumber`)
VALUES
(6,
"mohsen",
"mahmoudzade",
0);


INSERT INTO `sadaf`.`persons`
(`PersonID`,
`pfname`,
`plname`,
`CardNumber`)
VALUES
(7,
"tara",
"jadidi",
0);




-- ===========================================


-- ===========================================================
-- state 0 -> to read | 1 -> currently reading | 2 -> have read 
INSERT INTO `sadaf`.`Connects`
(`AccountSpecID`,
`donePages`,
`state`,
`ISBN`)
VALUES
(5,
100,
1,
444);


INSERT INTO `sadaf`.`Connects`
(`AccountSpecID`,
`donePages`,
`state`,
`ISBN`)
VALUES
(1,
105,
2,
111);


INSERT INTO `sadaf`.`Connects`
(`AccountSpecID`,
`donePages`,
`state`,
`ISBN`)
VALUES
(1,
10,
1,
222);


INSERT INTO `sadaf`.`Connects`
(`AccountSpecID`,
`donePages`,
`state`,
`ISBN`)
VALUES
(1,
0,
0,
999);

INSERT INTO `sadaf`.`Connects`
(`AccountSpecID`,
`donePages`,
`state`,
`ISBN`)
VALUES
(3,
150,
2,
999);

INSERT INTO `sadaf`.`Connects`
(`AccountSpecID`,
`donePages`,
`state`,
`ISBN`)
VALUES
(3,
0,
0,
333);

INSERT INTO `sadaf`.`Connects`
(`AccountSpecID`,
`donePages`,
`state`,
`ISBN`)
VALUES
(3,
0,
0,
666);


INSERT INTO `sadaf`.`Connects`
(`AccountSpecID`,
`donePages`,
`state`,
`ISBN`)
VALUES
(7,
105,
2,
111);


INSERT INTO `sadaf`.`Connects`
(`AccountSpecID`,
`donePages`,
`state`,
`ISBN`)
VALUES
(7,
50,
1,
222);

INSERT INTO `sadaf`.`Connects`
(`AccountSpecID`,
`donePages`,
`state`,
`ISBN`)
VALUES
(7,
236,
2,
333);

INSERT INTO `sadaf`.`Connects`
(`AccountSpecID`,
`donePages`,
`state`,
`ISBN`)
VALUES
(7,
23,
2,
444);

INSERT INTO `sadaf`.`Connects`
(`AccountSpecID`,
`donePages`,
`state`,
`ISBN`)
VALUES
(7,
0,
0,
555);

INSERT INTO `sadaf`.`Connects`
(`AccountSpecID`,
`donePages`,
`state`,
`ISBN`)
VALUES
(7,
538,
2,
666);

INSERT INTO `sadaf`.`Connects`
(`AccountSpecID`,
`donePages`,
`state`,
`ISBN`)
VALUES
(7,
0,
0,
777);

INSERT INTO `sadaf`.`Connects`
(`AccountSpecID`,
`donePages`,
`state`,
`ISBN`)
VALUES
(7,
102,
1,
888);

INSERT INTO `sadaf`.`Connects`
(`AccountSpecID`,
`donePages`,
`state`,
`ISBN`)
VALUES
(4,
115,
2,
555);

INSERT INTO `sadaf`.`Connects`
(`AccountSpecID`,
`donePages`,
`state`,
`ISBN`)
VALUES
(4,
0,
0,
888);

-- ===========================================================
INSERT INTO `sadaf`.`Comments`
(`ISBN`,
`WAccountSpecID`,
`content`)
VALUES
(444,
5,
"Besyar jazzab va amuzande mibashad");


INSERT INTO `sadaf`.`Comments`
(`ISBN`,
`WAccountSpecID`,
`content`)
VALUES
(444,
5,
"Black lives matter");


INSERT INTO `sadaf`.`Comments`
(`ISBN`,
`WAccountSpecID`,
`content`)
VALUES
(111,
1,
"That was really awsome");

INSERT INTO `sadaf`.`Comments`
(`ISBN`,
`WAccountSpecID`,
`content`)
VALUES
(444,
1,
"Agar man bekhabam, che kasi mah ra be man khahad dad");

INSERT INTO `sadaf`.`Comments`
(`ISBN`,
`WAccountSpecID`,
`content`)
VALUES
(444,
1,
"man maho mikham");



INSERT INTO `sadaf`.`Comments`
(`ISBN`,
`WAccountSpecID`,
`content`)
VALUES(
333,
1,
"That idiot should have chosen Eric");


INSERT INTO `sadaf`.`Comments`
(`ISBN`,
`WAccountSpecID`,
`content`)
VALUES(
999,
3,
"Best book ever");


INSERT INTO `sadaf`.`Comments`
(`ISBN`,
`WAccountSpecID`,
`content`)
VALUES(
666,
3,
"I love romance books");


INSERT INTO `sadaf`.`Comments`
(`ISBN`,
`WAccountSpecID`,
`content`)
VALUES(
333,
3,
"It sounds so cool");



INSERT INTO `sadaf`.`Comments`
(`ISBN`,
`WAccountSpecID`,
`content`)
VALUES(
111,
7,
"khoob ast");


INSERT INTO `sadaf`.`Comments`
(`ISBN`,
`WAccountSpecID`,
`content`)
VALUES(
222,
7,
"zibast");


INSERT INTO `sadaf`.`Comments`
(`ISBN`,
`WAccountSpecID`,
`content`)
VALUES(
333,
7,
"Awli ast");

INSERT INTO `sadaf`.`Comments`
(`ISBN`,
`WAccountSpecID`,
`content`)
VALUES(
333,
7,
"mareke ham hast");


INSERT INTO `sadaf`.`Comments`
(`ISBN`,
`WAccountSpecID`,
`content`)
VALUES(
444,
7,
"Eeey badak nist");

INSERT INTO `sadaf`.`Comments`
(`ISBN`,
`WAccountSpecID`,
`content`)
VALUES(
555,
7,
"first comment :D");

INSERT INTO `sadaf`.`Comments`
(`ISBN`,
`WAccountSpecID`,
`content`)
VALUES(
666,
7,
"asir shodim bekhoda");


INSERT INTO `sadaf`.`Comments`
(`ISBN`,
`WAccountSpecID`,
`content`)
VALUES(
777,
7,
":| base dige");


INSERT INTO `sadaf`.`Comments`
(`ISBN`,
`WAccountSpecID`,
`content`)
VALUES(
888,
7,
"suzanesh gir karde -__-");


INSERT INTO `sadaf`.`Comments`
(`ISBN`,
`WAccountSpecID`,
`content`)
VALUES(
999,
7,
"sare kar gozashtin?");


INSERT INTO `sadaf`.`Comments`
(`ISBN`,
`WAccountSpecID`,
`content`)
VALUES(
888,
4,
"monaseb ast");


INSERT INTO `sadaf`.`Comments`
(`ISBN`,
`WAccountSpecID`,
`content`)
VALUES(
555,
4,
"ghashange");

-- -- ================= Likes ==========================


INSERT INTO `sadaf`.`Comments`
(`ISBN`,
`WAccountSpecID`,
`content`)
VALUES
(444,
2,
"I had originally said I was not going to read this book, I did not know how well I would like it, and I do not tend to get involved with things that can make life at work harder for me.");


INSERT INTO `sadaf`.`Comments`
(`ISBN`,
`WAccountSpecID`,
`content`)
VALUES
(111,
4,
"Can I read it Because I am really bored And I want to read a book so can i?");



INSERT INTO `sadaf`.`Comments`
(`ISBN`,
`WAccountSpecID`,
`content`)
VALUES
(111,
6,
"how to read this im new here?");


INSERT INTO `sadaf`.`Comments`
(`ISBN`,
`WAccountSpecID`,
`content`)
VALUES
(111,
6,
"how to read this im new here?");


INSERT INTO `sadaf`.`Comments`
(`ISBN`,
`WAccountSpecID`,
`content`)
VALUES
(444,
2,
"Mn liaqate ezhare nazar dar morede in asar ro nadaram!");


INSERT INTO `sadaf`.`Comments`
(`ISBN`,
`WAccountSpecID`,
`content`)
VALUES
(333,
7,
"Raoul is very nonsensical");
-- ======== Reply =========

INSERT INTO `sadaf`.`Reply`
(`ISBN`,
`FID`,
`SID`)
VALUES
(444,
2,
6);

INSERT INTO `sadaf`.`Reply`
(`ISBN`,
`FID`,
`SID`)
VALUES
(111,
2,
5);


INSERT INTO `sadaf`.`Reply`
(`ISBN`,
`FID`,
`SID`)
VALUES
(111,
2,
6);


INSERT INTO `sadaf`.`Reply`
(`ISBN`,
`FID`,
`SID`)
VALUES
(111,
4,
7);


INSERT INTO `sadaf`.`Reply`
(`ISBN`,
`FID`,
`SID`)
VALUES
(444,
5,
7);


INSERT INTO `sadaf`.`Reply`
(`ISBN`,
`FID`,
`SID`)
VALUES
(333,
1,
6);


-- =============== 
 

INSERT INTO `sadaf`.`Books`
(`ISBN`,
`publisher`,
`files`,
`descriptions`,
`numberofPage`,
`title`,
`dates`,
`image`,
`author`,
`AccountSpecID`)
VALUES
("111",
"",
"./UploadFile/pdf/1.pdf",
"Alice's Adventures in Wonderland is an 1865 novel by English author Lewis Carroll. It tells of a young girl named Alice, who falls through a rabbit hole into a subterranean fantasy world populated by peculiar, anthropomorphic creatures. It is considered to be one of the best examples of the literary nonsense genre.",
105,
"Alice’s Adventures in Wonderland",
NULL,
"./UploadFile/img/1_cover.jpeg",
"Lewis Carroll",
1);


#2
INSERT INTO `sadaf`.`Books`
(`ISBN`,
`publisher`,
`files`,
`descriptions`,
`numberofPage`,
`title`,
`dates`,
`image`,
`author`,
`AccountSpecID`)
VALUES
("222",
"",
"./UploadFile/pdf/2.pdf",
"Caligula, formally known as Gaius, was the third Roman emperor, ruling from AD 37 to 41. The son of the popular Roman general Germanicus and Augustus' granddaughter Agrippina the Elder, Caligula was born into the first ruling family of the Roman Empire, conventionally known as the Julio-Claudian dynasty ",
210,
"Caligula",
NULL,
"./UploadFile/img/2_cover.jpeg",
"Albert Camus",
1);


#3
INSERT INTO `sadaf`.`Books`
(`ISBN`,
`publisher`,
`files`,
`descriptions`,
`numberofPage`,
`title`,
`dates`,
`image`,
`author`,
`AccountSpecID`)
VALUES
("333",
"",
"./UploadFile/pdf/3.pdf",
"The Phantom of the Opera is a 1986 musical with music by Andrew Lloyd Webber, lyrics by Charles Hart, and a libretto by Lloyd Webber and Richard Stilgoe",
236,
"The Phantom of the Opera",
NULL,
"./UploadFile/img/3_cover.jpeg",
"Andrew Lloyd Webber and Richard Stilgoe",
1);


#4
INSERT INTO `sadaf`.`Books`
(`ISBN`,
`publisher`,
`files`,
`descriptions`,
`numberofPage`,
`title`,
`dates`,
`image`,
`author`,
`AccountSpecID`)
VALUES
("444",
"",
"./UploadFile/pdf/4.pdf",
"Starr Carter, an African-American teenager, faces pressure from various communities and tries to stand up for what is right after she witnesses the shooting of her best friend by the police.",
23,
"The Hate U Give",
NULL,
"./UploadFile/img/4_cover.jpeg",
"George Tillman Jr.",
1);



#5
INSERT INTO `sadaf`.`Books`
(`ISBN`,
`publisher`,
`files`,
`descriptions`,
`numberofPage`,
`title`,
`dates`,
`image`,
`author`,
`AccountSpecID`)
VALUES
("555",
"",
"./UploadFile/pdf/5.pdf",
"The Catcher in the Rye is a novel by J. D. Salinger, partially published in serial form in 1945–1946 and as a novel in 1951. It was originally intended for adults but is often read by adolescents for its themes of angst, alienation, and as a critique on superficiality in society. It has been translated widely.",
115,
"The Catcher in the Rye",
NULL,
"./UploadFile/img/5_cover.jpeg",
"J. D. Salinger",
1);



#6
INSERT INTO `sadaf`.`Books`
(`ISBN`,
`publisher`,
`files`,
`descriptions`,
`numberofPage`,
`title`,
`dates`,
`image`,
`author`,
`AccountSpecID`)
VALUES
("666",
"",
"./UploadFile/pdf/6.pdf",
" Pride and Prejudice is an 1813 romantic novel of manners written by Jane Austen. The novel follows the character development of Elizabeth Bennet, the dynamic protagonist of the book who learns about …",
538,
"pride and prejudice",
NULL,
"./UploadFile/img/6_cover.jpeg",
"Jane Austen",
1);



#7
INSERT INTO `sadaf`.`Books`
(`ISBN`,
`publisher`,
`files`,
`descriptions`,
`numberofPage`,
`title`,
`dates`,
`image`,
`author`,
`AccountSpecID`)
VALUES
("777",
"",
"./UploadFile/pdf/7.pdf",
"The Old Man and the Sea is a short novel written by the American author Ernest Hemingway in 1951 in Cayo Blanco, and published in 1952. It was the last major work of fiction written by Hemingway that was published during his lifetime.",
20,
"the old man and the sea",
NULL,
"./UploadFile/img/7_cover.jpeg",
"Ernest Hemingway",
1);



#8
INSERT INTO `sadaf`.`Books`
(`ISBN`,
`publisher`,
`files`,
`descriptions`,
`numberofPage`,
`title`,
`dates`,
`image`,
`author`,
`AccountSpecID`)
VALUES
("888",
"",
"./UploadFile/pdf/8.pdf",
"To Kill a Mockingbird is a novel by the American author Harper Lee. It was published in 1960 and, instantly successful in the United States, it is widely read in high schools and middle schools. To Kill a Mockingbird has become a classic of modern American literature, winning the Pulitzer Prize.
",
257,
"To Kill a Mockingbird",
NULL,
"./UploadFile/img/8_cover.jpeg",
"Harper Lee",
1);


#9
INSERT INTO `sadaf`.`Books`
(`ISBN`,
`publisher`,
`files`,
`descriptions`,
`numberofPage`,
`title`,
`dates`,
`image`,
`author`,
`AccountSpecID`)
VALUES
("999",
"",
"./UploadFile/pdf/9.pdf",
"Le Morte d'Arthur tells the story of King Arthur and his Knights at the Round Table. Arthur, who is son of King Uther Pendragon but was raised by another family, takes his rightful place as king when, as a boy, he is able to pull the sword called Excalibur from the stone.
",
150,
"The Legends of King Arthur and His Knights",
NULL,
"./UploadFile/img/9_cover.jpeg",
"James Thomas Knowles",
1);


