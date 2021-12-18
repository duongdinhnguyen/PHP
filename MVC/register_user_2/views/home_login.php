<?php
    // quay trở lại login.php khi chưa nhập đủ thông tin login
    // Viết ở đây, bởi vì tránh vào trực tiếp: localhost/project_MVC/register_user_2/views/home_login.php
    if(!isset($_SESSION['notification'])){
        header("location:http://localhost/project_MVC/register_user_2/");
    }
    
    
?>
<style>
    a{
        display: block;
        font-size: 24px;
        margin: 50px 60px;
    }
</style>

    <a href="?router=register" >Màn hình đăng kí sinh viên</a>
