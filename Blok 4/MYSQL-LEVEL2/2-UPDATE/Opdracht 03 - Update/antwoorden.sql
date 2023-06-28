-- Opdracht 1
UPDATE studenten2 
SET woonplaats='Amstelveen';
-- Opdracht 2 
UPDATE studenten2 
SET klas='9A',adres='bonestraat 3',postcode='2002AG',geboortedatum='2002-2-2'
WHERE student_id >= 8;
-- Opdracht 3
UPDATE studenten2 
SET geboortedatum='2000-12-12' 
WHERE student_id = 2;
-- Opdracht 4
UPDATE studenten2 
SET klas = '9C'
WHERE student_id = 4;

UPDATE studenten2 
SET klas = '9A'
WHERE student_id = 8;
-- Opdracht 5
UPDATE studenten2 
SET voornaam='Johannah'
WHERE student_id = 6;