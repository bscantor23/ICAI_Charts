<?php
class EditionTopicDAO
{

  private $year;

  public function EditionTopicDAO($year = "")
  {
    $this->year = $year;
  }

  public function acceptedPapers()
  {
    return "SELECT (SUM(a.accepted) + SUM(a.rejected)) as papers,  
    SUM(a.accepted) as accepted, SUM(a.rejected) as rejected, 
      CONCAT( CAST( SUM( a.accepted ) *100 / (SUM(a.accepted) + SUM(a.rejected)) as decimal(5,2)), ' % ')  as percentage_accepted,
      CONCAT( CAST( SUM( a.rejected ) *100 / (SUM(a.accepted) + SUM(a.rejected)) as decimal(5,2)), ' % ') as percentage_rejected
      FROM editiontopic a INNER JOIN edition b ON a.edition_idEdition = b.idEdition
    WHERE b.year = '$this->year';";
  }
}
