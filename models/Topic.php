<?php
require_once "persistence/Connection.php";
require_once "persistence/TopicDAO.php";

class Topic
{
  private $idTopic;
  private $name;
  private $accepted;
  private $rejected;

  public function Topic( $year = "", $idTopic = 0, $name = "", $accepted = 0, $rejected = 0)
  {
    $this->idTopic = $idTopic;
    $this->name = $name;
    $this->accepted = $accepted;
    $this->rejected = $rejected;
    $this->connection = new Connection();
    $this->dao = new TopicDAO($year);
  }


  public function getInfoChart()
  {
    $this->connection->open();
    $this->connection->execute($this->dao->papersByTopic());
    $results = $this->connection->extrain();

    $topics = array();

    foreach ($results as $result) {
      array_push($topics, new Topic($result[0], $result[1], $result[2],$result[3]));
    }
    $this->connection->close();
    return $topics;
  }
  

  /**
   * @return TopicDAO
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

  public function getIdTopic()
  {
    return $this->idTopic;
  }

  public function getName()
  {
    return $this->name;
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
    return "id: $this->idTopic, name: $this->name, accepted: $this->accepted, rejected: $this->rejected";
  }
}
