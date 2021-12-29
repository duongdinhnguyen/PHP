<?php 
    class actionRegist{
        // Handle login: Check user, password,...
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
                    $name= trim($_POST["regist_name"]," ");
                    $gioitinh= trim($_POST["regist_gioitinh"]," ");
                    $phankhoa= trim($_POST["regist_phankhoa"]," ");
                    $age= trim($_POST["regist_age"]," ");
                    $_SESSION['dataInsert']=[$name, $gioitinh, $phankhoa, $age];
                    header("location:http://localhost/project_MVC/register_user_2/?router=do-regist");
                    exit(); // ẩn các require đã import vào từ trước
            }
            
        }
        
        }
    }
?>