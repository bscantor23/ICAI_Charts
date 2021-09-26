<?php
require_once "persistence/Connection.php";
require_once "persistence/EditionDAO.php";

class Edition
{
  private $idEdition;
  private $name;
  private $year;
  private $dao;
  private $connection;

  public function Edition($idEdition = 0, $name = "", $year = "")
  {
    $this->idEdition = $idEdition;
    $this->name = $name;
    $this->year = $year;
    $this->connection = new Connection();
    $this->dao = new EditionDAO();
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

  /**
   * @return EditionDAO
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

  public function getIdEdition()
  {
    return $this->idEdition;
  }

  public function getName()
  {
    return $this->name;
  }

  public function getYear()
  {
    return $this->year;
  }
}
