<?php
    class Faculty{
        
          //Lấy thông tin từ faculty
        public function facultyRegist(){
            require_once('./app/common/sql_connect.php');
            $db =new DB();
            $db->config();

            $sql= "SELECT * FROM faculty";
            $data= $db->conn->query($sql);
            return $data;
        }
    }
?>
