<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Document</title>
</head>
<body>
    <?php  
        foreach($user_change as $user): ?>
            <form action="" method="POST" class="change">
                <div>
                    <label for="name-change">Tên</label>
                    <input id="name-change" type="text" name="name_change" value="<?php echo $user['name'] ?>"></div>
                <div>
                    <label for="namsinh-change">Năm sinh</label>
                    <input id="namsinh-change" type="text" name="namsinh_change" value="<?php echo $user['namsinh'] ?>"></div>
                <div>
                    <label for="quequan-change">Quê quán</label>
                    <input id="quequan-change" type="text" name="quequan_change" value="<?php echo $user['quequan'] ?>"></div>
                <div><button type="submit" name="btn-change">Sửa</button></div>
            </form>
        <?php endforeach; ?>
        <span class="notification"><?php echo $_SESSION['notification'];  ?></span>
        <div class="home">
            <a href="?router=home">Trở về trang chủ</a>

        </div>
</body>
</html>