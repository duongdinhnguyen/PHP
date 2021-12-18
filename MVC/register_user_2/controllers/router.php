<?php 

class Router{
    public $path;
    // Truyền path từ ngoài vào
    public function router($path){
    
        switch ($path) {
            case '':
                $this->handleLogin();
                require_once('views/login.php');
                break;
            
            case 'home-login':
                require_once('views/home_login.php');
                break;
            case 'register':
                $gender = $this->genderRegist();
                $faculty = $this->facultyRegist();
                $this->handleRegist();
                require_once('views/regist.php');
                break;
            case 'do-regist':
                
                $this->viewDoRegist();
                $data = $_SESSION['dataInsert'];
                require_once('views/do_regist.php');                
                break;

            case 'complete':
                $id =$this->handleInsert();
                $data = $_SESSION['dataInsert'];
                require_once('views/complete_regist.php');
                break;
            default:
                require_once('views/error.php');
                break;
       }
    }

    

    // Handle login: Check user, password,...
    public function handleLogin(){
        $_SESSION["notification"]=null;// Reset notifi về trống để không thông báo khi vừa vào login
        function equal($x, $y){
            if($x == $y){
                return true;
            }
            return false;
        }
        
        if(isset($_REQUEST["login_submit"])){
            if(empty($_REQUEST["login_user"])){
                $_SESSION["notification"]="Hãy nhập user";
            }
            else if(empty($_REQUEST["login_password"])){
                $_SESSION["notification"]="Hãy nhập password";
            }
            else {
                require_once('models/sql_connect.php');
                $db =new DB();
                $db->config();

                $sql= "SELECT * FROM admin";
                $data= $db->conn->prepare($sql);
                $data->execute();
                $userName = trim($_REQUEST["login_user"]," ");
                $passWord = trim($_REQUEST["login_password"], " ");
                foreach($data as $row){
                    if(equal(!$row["username"],$userName)  || !equal($row["password"], md5($passWord))){
                        $_SESSION["notification"]="Sai user hoặc password, vui lòng nhập lại";
                    }
                    if(equal($row["username"],$userName)  &&  equal($row["password"],md5($passWord))){
                        $_SESSION["notification"]="Đăng nhập thành công, nhập thông tin cần đăng kí";
                        $this->path = 'home-login';
                        $this->router($this->path);
                        exit();// ẩn các require đã import từ trước
                    }
                }
            }
        }
    }

    // Handle valiable form register
    public function handleRegist(){
        
        // Kiểm tra dữ liệu
        if(isset($_REQUEST["regist_submit"])){
           
            if(empty($_POST["regist_name"])) {
               $_SESSION["notification"]="Hãy nhập tên.";
           }
           else if(empty($_POST["regist_gioitinh"])){
               $_SESSION["notification"]="Hãy nhập giới tính.";
           }
           else if(empty($_POST["regist_phankhoa"])){
               $_SESSION["notification"]="Hãy nhập phân khoa.";
           }
           else if(empty($_POST["regist_age"])){
               $_SESSION["notification"]="Hãy nhập năm sinh.";
           }
           else if($_POST["regist_name"] &&  $_POST["regist_gioitinh"]  &&  $_POST["regist_phankhoa"]  &&  $_POST["regist_age"]){
               $_SESSION["notification"]="Đăng kí thành công";
               $isview = false;// không cho register đc require
               $this->path = 'do-regist';
                $this->router($this->path);
                exit(); // ẩn các require đã import vào từ trước
          }
          
       }
       
    }

    // Lấy thông tin từ gender
    public function genderRegist(){
        require_once('models/sql_connect.php');
        $db =new DB();
        $db->config();

        $sql= "SELECT * FROM gender";
        $data= $db->conn->query($sql);
        return $data;
    }

    //Lấy thông tin từ faculty
    public function facultyRegist(){
        require_once('models/sql_connect.php');
        $db =new DB();
        $db->config();

        $sql= "SELECT * FROM faculty";
        $data= $db->conn->query($sql);
        return $data;
    }
    
    // Lấy thông tin valiable mà user nhập
    public function viewDoRegist(){
        $name= trim($_POST["regist_name"]," ");
        $gioitinh= trim($_POST["regist_gioitinh"]," ");
        $phankhoa= trim($_POST["regist_phankhoa"]," ");
        $age= trim($_POST["regist_age"]," ");
        $_SESSION['dataInsert']=[$name, $gioitinh, $phankhoa, $age];
        return $_SESSION['dataInsert'];
    }

    // Handle insert data input vào database
    public function handleInsert(){
        if(isset($_SESSION['dataInsert'])){
            require_once('models/sql_connect.php');
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
        $gender = $this->genderRegist();
        foreach($gender as $row){
            if($row['name'] == $_SESSION['dataInsert'][1]){
                return $row['value'];
            }
        }
    }

    //convert faculty
    public function convertFaculty(){
        $faculty = $this->facultyRegist();
        foreach($faculty as $row){
            if($row['name'] == $_SESSION['dataInsert'][2]){
                return $row['value'];
            }
        }
    }
}

$path = isset($_GET['router'])? $_GET['router'] :'';
$router = new Router();
$router->router($path);




?>