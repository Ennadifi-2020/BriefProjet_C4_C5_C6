## Question 1
```sql
SELECT Title  FROM Movies; 
``` 
__
## question 2
```sql
. SELECT DISTINCT Rating  FROM Movies; 
``` 
__
## question 3
```sql
. SELECT *  FROM Movies  WHERE Rating IS NULL; 
``` 
__
## question 4
```sql
. SELECT *  FROM MovieTheaters  WHERE Movie IS NULL; 
``` 
__
## question 5
```sql
. SELECT * FROM MovieTheaters LEFT JOIN Movies ON MovieTheaters.Movie = Movies.Code; 
``` 
__
## question 6
```sql 
SELECT * FROM MovieTheaters RIGHT JOIN Movies ON MovieTheaters.Movie = Movies.Code; 
``` 
__
## question 7 
```sql
. SELECT Title FROM Movies 
 WHERE Code NOT IN 
   ( 
     SELECT Movie FROM MovieTheaters 
     WHERE Movie IS NOT NULL 
   ); 
 ``` 

__
## question 8
```sql
. INSERT INTO Movies(Title,Rating) VALUES('One, Two, Three',NULL);
```  
__
## question 9
```sql
. UPDATE Movies SET Rating='G' WHERE Rating IS NULL; 
10/ 
. DELETE FROM MovieTheaters WHERE Movie IN 
   (SELECT Code FROM Movies WHERE Rating = 'NC-17');
```     