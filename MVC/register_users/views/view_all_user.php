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
        <table>
            <tr>
                <th>Số thứ tự</th>
                <th>Tên</th>
                <th>Năm sinh</th>
                <th>Quê quán</th>
                
            </tr>
            <?php 

            foreach($data as $row): ?>
            
                <tr>
                    <form action="" method="POST" class="all-user">
                        <td><input name="id_all" type="text" value="<?php echo $row['id']; $id=$row['id'];?>"></td>
                        <td ><input type="text" name="name_all" value="<?php echo $row['name']; ?>"></td>
                        <td ><input type="text" name="namsinh_all" value="<?php echo $row['namsinh']; ?>"></td>
                        <td ><input type="text" name="quequan_all" value="<?php echo $row['quequan']; ?>"></td>
                        <td ><a href="?router=change-user&id=<?php echo $row['id']; ?>">Chỉnh thông tin</a></td>
                        <td ><button type="submit" name="delete_btn">Xóa user</button></td>
                    </form>
                </tr>
                
            
            
            <?php endforeach;?>
        </table>
        
        <span class="notification"><?php echo $_SESSION['notification'];  ?></span>
    
        <div class="home">
            <a href="?router=home">Trở về trang chủ</a>
        </div>
                
</body>
</html>