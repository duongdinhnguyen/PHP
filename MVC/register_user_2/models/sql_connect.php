<?php
class DB{
  private $servername = "localhost";
  private $username = "root";
  private $password = "";
  private $myDB= "sql_register";
  public $conn = null;
  public function config(){
    try {
      $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->myDB", $this->username, $this->password);
      // set the PDO error mode to exception
      $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      
    } catch(PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
    }
  }
  public function selectData(){
    $sql= "SELECT * FROM admin";
    $result = $this->conn->query($sql);
    return $result;
  }
  public function printData(){
    $data= $this->selectData();
    foreach($data as $item):
      echo $item['username'];
    endforeach;
  }
}
?>