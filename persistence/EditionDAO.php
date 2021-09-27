<?php
class EditionDAO
{
  public function EditionDAO(){
    //Do nothing
  }

  public function allEditions()
  {
    return "SELECT idEdition, name, `year` FROM `edition` ORDER BY `year` DESC;";
  }
}
