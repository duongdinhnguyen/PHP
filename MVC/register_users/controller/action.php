<?php
require_once('models/config.php');

// Mô phỏng tuyến đường bằng cách truyền value vào key của $_GET
//vd: http://localhost/project_MVC/register_users/?router=add-user
// nhận được $_GET['router']= add-user

$path = isset($_GET['router']) ? $_GET['router'] : 'home';
function router($path){
    switch ($path) {
        case 'add-user':
            actionadd();    
            require_once('views/add_user.php');
            break;
        case 'change-user':
            action_change();// update data trước khi đọc
            $user_change= view_user_change();// đọc data cần thay đổi
            require_once('views/change.php');
            break;
        case 'home':
            require_once('views/homeDefault.php');
            break;
        case 'all-user':
            action_delete();// xóa user trước khi đọc data
            $data = action_all();
            require_once('views/view_all_user.php');
            break;        
    
            
        default:
            require_once('views/error.php');
            break;
    }
}

// thực hiện thêm user vào database
function actionadd(){
    // vì đây là các biến global nên phương thức không lỗi
    if(isset($_REQUEST['add_submit'])){
        
        $name = $_REQUEST['name'];
        $namsinh= $_REQUEST['namsinh'];
        $quequan = $_REQUEST['address'];
        $sql = "INSERT INTO user(name, namsinh, quequan) VALUES('$name','$namsinh','$quequan')";
        $GLOBALS['conn']->exec($sql);
        // chuyển $conn thành global==> ko cần tryền qua đối số vì $conn dùng nhiều lần
        $_SESSION['notification'] = "Đăng kí thành công";
        
        
    }
    else{
        $_SESSION['notification'] = "";

    }
        
}
// Lấy ra danh sách user từ database
function action_all(){
    $sql= "SELECT * FROM user";
    $data = $GLOBALS['conn']->query($sql);
    return $data;

}

//Lấy ra thông tin user cần chỉnh sửa để hiển thị
function view_user_change(){
    $id = $_GET['id'];
    
    $sql = "SELECT * FROM user WHERE id='$id'";
    $result = $GLOBALS['conn'] -> query($sql);
    
    return $result;
}

// thực hiện chỉnh sửa user trên database
function action_change(){
    $_SESSION['notification']="";

    if(isset($_REQUEST['btn-change'])){
        $id = $_GET['id'];
        $name = $_REQUEST['name_change'];
        $namsinh = $_REQUEST['namsinh_change'];
        $quequan = $_REQUEST['quequan_change'];
        $sql = "UPDATE user SET name='$name', namsinh = '$namsinh', quequan='$quequan' WHERE id='$id'";
        $GLOBALS['conn']->exec($sql);

        $_SESSION['notification'] = "Đã cập nhật user có id=".$id;
      
    }
}

//xóa user
function action_delete(){
    if(isset($_REQUEST['delete_btn'])){
        $id= $_REQUEST['id_all'];
        $sql= "DELETE FROM user WHERE id='$id'";
        $GLOBALS['conn']-> exec($sql);
        $_SESSION['notification'] = "Đã xóa user có id=".$id;
    }
    else{
        $_SESSION['notification'] = "";

    }
}
router($path);
?>