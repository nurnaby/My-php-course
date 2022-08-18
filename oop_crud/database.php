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
       
    }
    public function resultDispaly(){
        $val = $this->result;
        $this->result= array();
        return $val;
    }
    public function update($table_name,$pram= array(),$pk_id){
        $fildValus = [];
        foreach($pram as $key=> $val){
            $fildValus []= "$key ='$val'";
            
            
        }
        $fild_Valus = implode(",",$fildValus);

        $sql ="UPDATE $table_name SET $fild_Valus WHERE id=$pk_id";
        if ($this->mysqli->query($sql)) {
            array_push($this->result,'update suceesfully');
            return true;
       } else {
        array_push($this->result,$this->mysqli->error);
        return false;
       }


        
    }
    public function delete($table_name,$pk_id){
        
        // $sql ="DELET $table_name SET $fild_Valus WHERE id=$pk_id";
        $sql = "DELETE FROM $table_name WHERE id =$pk_id";
        if ($this->mysqli->query($sql)) {
            array_push($this->result,'Delete suceesfully');
            return true;
       } else {
        array_push($this->result,$this->mysqli->error);
        return false;
       }

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