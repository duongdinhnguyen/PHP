<?php
    class Gender{
        
        // Lấy thông tin từ gender
        public function genderRegist(){
            require_once('./app/common/sql_connect.php');
            $db =new DB();
            $db->config();

            $sql= "SELECT * FROM gender";
            $data= $db->conn->query($sql);
            return $data;
        }
    }
?>
