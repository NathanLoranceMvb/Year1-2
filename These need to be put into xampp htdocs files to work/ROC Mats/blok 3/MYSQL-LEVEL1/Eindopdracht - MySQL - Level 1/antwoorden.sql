-- Opdracht 1
SELECT * FROM videogamesales
-- Opdracht 2
SELECT COUNT(name) FROM videogamesales WHERE year="1999"
-- Opdracht 3
SELECT SUM(NA_Sales) AS FROM videogamesales WHERE genre="Sports"
-- Opdracht 4
SELECT name, platform FROM videogamesales WHERE publisher="Nintendo" AND year>="1990" AND year<="2005"
-- Opdracht 5
SELECT name, MAX(Global_Sales) FROM videogamesales
-- Opdracht 6
SELECT ROUND(AVG(EU_Sales)) FROM videogamesales WHERE genre="Puzzle"
-- Opdracht 7
SELECT name, genre, publisher FROM videogamesales WHERE JP_Sales="532"
-- Opdracht 8
SELECT SUM(Global_Sales) as Nintendo_total_sales FROM videogamesales WHERE publisher = "Nintendo"
-- Opdracht 9
SELECT name, year, genre FROM videogamesales WHERE publisher="Nintendo" AND genre="Racing" OR publisher="Activision" AND genre="Racing"
-- Opdracht 10
SELECT ROUND(AVG(NA_Sales)) AS NA_verkoop, ROUND(AVG(EU_Sales)) AS europa_verkoop, ROUND(AVG(JP_Sales)) AS japan_verkoop FROM videogamesales
SELECT AVG(NA_Sales) as North_America_sales,AVG(EU_Sales) as europe_sales,AVG(JP_Sales) as japan_sales FROM videogamesales 
-- Opdracht 11
DELETE FROM videogamesales WHERE name="Halo 2" AND platform="XB"
-- Opdracht 12
DELETE FROM videogamesales WHERE year="2012" OR publisher="Ubisoft"
-- Opdracht 13
DELETE FROM videogamesales WHERE genre="Adventure" AND publisher="Nintendo"
-- Opdracht 14
DELETE FROM videogamesales WHERE Global_Sales<"1000" AND publisher="Nintendo"
-- Opdracht 15
DELETE FROM videogamesales WHERE NA_Sales>"200000" AND year="1997"