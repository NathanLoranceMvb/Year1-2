-- Opdracht 1
Klas 9A gaat anders heten. Vanaf nu wordt dit 9X.
UPDATE studenten2 
SET klas='9X'
WHERE klas = '9A';
-- Opdracht 2 
Alle studenten die een id hebben dat groter is dan 7 verhuizen naar klas 9Z.
UPDATE studenten2 
SET klas='9Z'
WHERE student_id > '7';
-- Opdracht 3
Wijzig de woonplaats van studenten met een id van kleiner of gelijk aan 2 of groter dan 7 naar 'Amsterdam'.
UPDATE studenten2 
SET woonplaats ='Amsterdam'
WHERE student_id <= 2
OR student_id > 7;
-- Opdracht 4
Wijzig de woonplaats naar 'Uithoorn' van studenten die zitten in klas 9X en die wonen in Amsterdam.
UPDATE studenten2 
SET woonplaats ='Uithoorn' 
WHERE klas = '9X'
AND woonplaats ='Amsterdam';