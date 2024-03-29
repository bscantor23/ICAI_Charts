<?php
class TopicDAO
{
  private $year;

  public function TopicDAO($year = "")
  {
    $this->year = $year;
  }

  public function papersByTopic()
  {
    return "SELECT b.idTopic, b.name, a.accepted, a.rejected FROM editiontopic a
    INNER JOIN topic b ON a.topic_idTopic = b.idTopic
    INNER JOIN edition c ON a.edition_idEdition = c.idEdition
    WHERE c.year = '$this->year'
    GROUP BY 2 ORDER BY 2;";
  }
}
