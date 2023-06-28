-- Opdracht 1 
SELECT MAX(wage) AS hoogste_loon_speler_fc_utrecht FROM players WHERE club = "FC Utrecht ";
-- Opdracht 2 
SELECT AVG(wage) AS Averige_wage_player FROM players;
-- Opdracht 3
SELECT sum(wage) AS SUM_wage_player FROM players;
-- Opdracht 4
SELECT Count(name) AS Total_Manchester_players FROM `players` WHERE club = "Manchester City " AND club = "Manchester United ";
-- Opdracht 5
SELECT AVG(wage) AS avarige_wage_Dutch_players FROM `players` WHERE nationality = "Netherlands";
-- Opdracht 6 
SELECT AVG(wage) AS Younger_than_20 FROM `players` WHERE age <= 20;
-- Opdracht 7 
SELECT AVG(wage) AS Year_20_or_above FROM `players` WHERE age > 20;
-- Opdracht 8
SELECT SUM(wage) AS Chelsea_total_player_wage FROM `players` WHERE club = "Chelsea";
-- Opdracht 9
SELECT AVG(age) AS avarige_age FROM `players`;
-- Opdracht 10
SELECT club, SUM(wage) as wage_players, ROUND(AVG(value)) as AVG_value FROM `players` WHERE club = "Liverpool ";