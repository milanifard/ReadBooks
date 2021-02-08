/*
state argument define which shelf we want to get, 0 means to read, 1 means reading , and 2 means done 
*/
SELECT * 
FROM Connects
WHERE state=0 and AccountSpecID=1;