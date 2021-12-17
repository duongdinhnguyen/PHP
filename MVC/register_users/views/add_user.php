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
   
    <div class="add">
        <h2>Đây là trang đăng kí thành viên</h2>
        <span class="notification"><?php echo $_SESSION['notification']; ?></span>
        <form action="" class="content_add" method="POST">
            <div class="item_add">
                <label for="name">Name:</label>
                <input id="name" name="name" type="text">
            </div>
            <div class="item_add">
                <label for="namsinh">Năm sinh:</label>
                <input id="namsinh" name="namsinh" type="text">
            </div>
            <div class="item_add">
                <label for="address">Địa chỉ:</label>
                <input id="address" name="address" type="text">
            </div>
            <div class="item_add">
            <button type="submit" name="add_submit">Đăng kí</button>
            </div>
            <div class="item_add">
            <a href="?router=home">Trở lại trang chủ</a>
            </div>
        </form>
    </div>
</body>
</html>