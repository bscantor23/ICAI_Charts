<?php
require_once "persistence/Connection.php";
require_once "persistence/EditionTopicDAO.php";

class EditionTopic
{
  private $papers;
  private $accepted;
  private $rejected;

  public function EditionTopic($year = "", $papers = 0, $accepted = 0, $rejected = 0)
  {
    $this->papers = $papers;
    $this->accepted = $accepted;
    $this->rejected = $rejected;
    $this->connection = new Connection();
    $this->dao = new EditionTopicDAO($year);
    $this->getInfoChart();
  }

  public function getInfoChart()
  {
    $this->connection->open();
    $this->connection->execute($this->dao->acceptedPapers());
    $results = $this->connection->extrain();
    $this->connection->close();
    
    $this->papers = $results[0][0];
    $this->accepted = $results[0][1];
    $this->rejected = $results[0][2];
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

  public function toString(){
    return "papers: $this->papers, accepted: $this->accepted, rejected: $this->rejected";
  }
}
