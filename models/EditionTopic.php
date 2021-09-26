<?php
require_once "persistence/Connection.php";
require_once "persistence/EditionTopicDAO.php";

class EditionTopic
{
  private $papers;
  private $accepted;
  private $rejected;
  private $percentage_acepted;
  private $percentage_rejected;

  public function EditionTopic($year = "", $papers = 0, $accepted = 0, $rejected = 0, $percentage_acepted = "", $percentage_rejected = "")
  {
    $this->papers = $papers;
    $this->accepted = $accepted;
    $this->rejected = $rejected;
    $this->percentage_acepted = $percentage_acepted;
    $this->percentage_rejected = $percentage_rejected;
    $this->connection = new Connection();
    $this->dao = new EditionTopicDAO($year);
  }

  public function getEditions()
  {
    $this->connection->open();
    $this->connection->execute($this->dao->allEditions());
    $editions = array();
    while ($result = $this->connection->extraer() != null) {
      array_push($editions, new Edition($result[0], $result[1], $result[2]));
    }
    $this->connection->close();
    return $editions;
  }

  public function getInfoChart()
  {
    $this->connection->abrir();
    $this->connection->execute($this->dao->acceptedPapers());
    $results = $this->connection->extraer();
    $this->connection->close();

    $this->papers = $results[0];
    $this->accepted = $results[1];
    $this->rejected = $results[2];
    $this->percentage_acepted = $results[3];
    $this->percentage_rejected = $results[4];

    return $results;
  }

  /**
   * @return EditionTopicDAO
   */
  public function getDAO()
  {
    return $this->dao;
  }

  /**
   * @return Connection
   */
  public function getConnection()
  {
    return $this->connection;
  }

  public function getPapers()
  {
    return $this->papers;
  }

  public function getAccepted()
  {
    return $this->accepted;
  }

  public function getRejected()
  {
    return $this->rejected;
  }

  public function getPercentage_acepted()
  {
    return $this->percentage_acepted;
  }

  public function getPercentage_rejected()
  {
    return $this->percentage_rejected;
  }
}
