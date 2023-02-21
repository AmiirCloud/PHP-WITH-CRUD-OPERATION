<?php
class conn{
    public $db; 
    public $result ;
    public function setConn(){
        $this->db=new mysqli("localhost","root","","mydb");
        echo $this->db? "Success ": "Failed";
    }
}


?>