<?php
class Connection{
    private $mysqli;
    private $result;
    
    public function open(){
        $this -> mysqli = new mysqli("localhost", "root", "", "itiud_icai-s");
        $this -> mysqli -> set_charset("utf8");
    }

    public function close(){
        $this -> mysqli -> close();
    }
    
    public function execute($query){
        $this -> result = $this -> mysqli -> query($query);
    }
    
    public function extrain(){
        return $this -> result -> fetch_all();
    }
}
?>