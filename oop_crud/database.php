<?php
class ComonCrudControler{
    private $mysqli = "";
    private $result = [];
    private $conn = false;
    public function __construct()
    {
       if (!$this->conn) {
        $this->mysqli =new mysqli('localhost','root','','crud');
        if($this->mysqli->connect_errno){
            return false;
        }else{
            return true;
        }
       } else {
        return true;
       }
       
        
    }
    public function select(){
        
       

    }

    public function create($table_name,$pram= array()){
        // echo $table_name;
        
        $table_column= implode(',',array_keys($pram));
        $fileData = implode("','",$pram);

        $sql ="INSERT INTO $table_name($table_column) VALUES ('$fileData')";
      
       if ($this->mysqli->query($sql)) {
            array_push($this->result,'inserat suceesfully');
            return true;
       } else {
        array_push($this->result,$this->mysqli->error);
        return false;
       }
       
       
        // echo "'".$fileData."'";

        // die();
        // echo "<pre>";
            
        // echo "</pre>";
        // die();
        // echo "<pre>";
        // print_r($pram);
        // echo "</pre>";
        
        // die();
    }
    public function resultDispaly(){
        $val = $this->result;
        $this->result= array();
        return $val;
    }
    public function update(){

    }
    public function delete(){

    }
    public function __destruct()
    {
     if($this->conn){
        if($this->mysqli->close()){
            $this->conn= false;
            return true;
        }
     }else{
        return false;
     }
        
    }
}



?>