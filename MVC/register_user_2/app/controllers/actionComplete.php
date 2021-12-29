<?php 
    class actionComplete{
        // Handle insert data input vào database
        public function handleInsert(){
            if(isset($_SESSION['dataInsert'])){
                require_once('./app/common/sql_connect.php');
                $db =new DB();
                $db->config();

                $data = $_SESSION['dataInsert'];
                $gender = $this->convertGender();
                $faculty = $this->convertFaculty();
                $sql = "INSERT INTO student(name, gender, faculty, birthday_year) VALUES ('$data[0]','$gender','$faculty','$data[3]')";
                $db->conn->exec($sql);

                $sql = "SELECT MAX(id) FROM student";
                return $db->conn->query($sql);
            }
            
            
        }

        //convert gender
        public function convertGender(){
            require_once './app/models/gender.php';
            $Gender = new Gender();
            $gender = $Gender->genderRegist();
            foreach($gender as $row){
                if($row['name'] == $_SESSION['dataInsert'][1]){
                    return $row['value'];
                }
            }
        }

        //convert faculty
        public function convertFaculty(){
            require_once './app/models/faculty.php';
            $Faculty = new Faculty();
            $faculty = $Faculty->facultyRegist();
            foreach($faculty as $row){
                if($row['name'] == $_SESSION['dataInsert'][2]){
                    return $row['value'];
                }
            }
        }
    }
?>