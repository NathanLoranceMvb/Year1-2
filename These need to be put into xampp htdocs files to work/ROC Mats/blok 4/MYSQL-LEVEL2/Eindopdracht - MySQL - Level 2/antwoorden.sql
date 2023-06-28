Opdracht 1
SELECT  races.name AS race, circuits.name as circuit FROM races 
JOIN circuits ON races.circuitId = circuits.circuitId 
WHERE races.year = 2018
-- Opdracht 2
SELECT races.name, drivers.surname, driver_standing.points FROM races 
JOIN driver_standing on races.raceId = driver_standing.raceId
JOIN drivers ON drivers.driverId = driver_standing.driverId 
WHERE year = 2017 AND points = 10
-- Opdracht 3
SELECT drivers.forename, drivers.surname, pitstops.duration FROM drivers 
JOIN pitstops on drivers.driverId = pitstops.driverId 
WHERE pitstops.duration <25;
-- Opdracht 4
SELECT constructors.name AS constructor, races.name AS GrandPrix FROM races 
JOIN constructor_standing on races.raceId = constructor_standing.raceId 
JOIN constructors on constructor_standing.constructorid = constructors.constructorid 
WHERE constructors.name = "McLaren" 
AND races.year = 2010
-- Opdracht 5
SELECT circuits.name AS curcuit, circuits.country, races.name AS GrandPrix, drivers.surname FROM circuits 
JOIN races ON circuits.circuitId = races.circuitId 
JOIN driver_standing ON races.raceId = driver_standing
JOIN drivers ON driver_standing.driverId = drivers.driverId 
WHERE races.year = 1950 
AND drivers.surname LIKE 'F%'