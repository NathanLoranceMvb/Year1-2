-- Opdracht 1 
DELETE FROM `players` WHERE name = "David Silva";
-- Opdracht 2 
DELETE FROM players WHERE `club` = "Willem II"
-- Opdracht 3
DELETE FROM players WHERE nationality = "Belgium" AND  club = "FC Barcelona"
-- Opdracht 4
DELETE FROM players WHERE age >= 38 
-- Opdracht 5
DELETE FROM players WHERE id = 167905 OR id = 169595 