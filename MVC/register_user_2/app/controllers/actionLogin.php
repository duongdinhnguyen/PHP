<?php 
    class actionLogin{
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
                    require_once('./app/common/sql_connect.php');
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
                            header("location:http://localhost/project_MVC/register_user_2/?router=home");
                            exit();// ẩn các require đã import từ trước
                        }
                    }
                }
            }
        }
    }
?>