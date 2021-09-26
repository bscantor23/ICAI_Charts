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
    SUM(a.accepted) as accepted, SUM(a.rejected) as rejected
    FROM editiontopic a INNER JOIN edition b ON a.edition_idEdition = b.idEdition
    WHERE b.year = '$this->year';";
  }
}
