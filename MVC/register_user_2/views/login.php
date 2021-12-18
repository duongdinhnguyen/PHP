<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/login.css">
    <title>Document</title>
    
</head>
<body>
       <div class="content">
        <form class="login_form" action="<?php $_PHP_SELF ?>" method="POST">
            <div class="login_item">
                <p class="notification">
                    <?php 
                    $notifi = isset($_SESSION["notification"]) ? $_SESSION["notification"] :"";
                    echo $notifi;
                    ?>
                </p>
            </div>
            <div class="login_item">
                <p class="description_item">Tên đăng nhập</p>
                <input type="text" class="input_item" name="login_user" maxlength="10" >
            </div>
            <div class="login_item">
            <p class="description_item" >Mật khẩu</p>
                <input type="password" class="input_item" name="login_password" maxlength="10" > 
            </div>
            <div class="login_item">
                <button class="submit_form" type="submit" name="login_submit">Login</button>
            </div>
        </form> 
       </div>
</body>
<script>
    var 
</script>
</html>