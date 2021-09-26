SELECT b.name, a.accepted, a.rejected FROM editiontopic a
INNER JOIN topic b ON a.topic_idTopic = b.idTopic
INNER JOIN edition c ON a.edition_idEdition = c.idEdition
WHERE c.year = "2020"
GROUP BY 1 ORDER BY 1;

SELECT (SUM(a.accepted) + SUM(a.rejected)) as papers,  
	SUM(a.accepted) as accepted, SUM(a.rejected) as rejected, 
    CONCAT( CAST( SUM( a.accepted ) *100 / (SUM(a.accepted) + SUM(a.rejected)) as decimal(5,2)), "%")  as percentage_accepted,
    CONCAT( CAST( SUM( a.rejected ) *100 / (SUM(a.accepted) + SUM(a.rejected)) as decimal(5,2)), "%") as percentage_rejected
    FROM editiontopic a INNER JOIN edition b ON a.edition_idEdition = b.idEdition
	WHERE b.year = "2020";

SELECT idEdition, name, `year` FROM `edition`;