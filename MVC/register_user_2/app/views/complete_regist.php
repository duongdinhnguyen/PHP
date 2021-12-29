<!DOCTYPE html>
<?php 
if(!isset($_SESSION['notification'])){
    header("location:http://localhost/project_MVC/register_user_2/");
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/complete_regist_css.css">
    <title>Document</title>
</head>
<body>
        <div class="content">
            <form action="#" class="complete_regist_form" >
                <div class="complete_all-item">
                    <div class="complete_item">
                        <span><?php  
                                foreach($id as $value):
                                    echo "Bạn vừa đăng kí thành công, mã sinh viên của bạn là: ".$value['MAX(id)']; 
                                endforeach;
                         ?></span>                    
                    </div>
                    <div class="complete_item">
                        <p class="description_item">Họ và tên</p>
                        <input class="input_item" type="text" readonly value="<?php echo $data[0];  ?>"/>
                    </div>
                    <div class="complete_item">
                        <p class="description_item">Giới tính</p>
                        <input class="input_item" type="text" readonly value="<?php echo $data[1];?>"/>
                               
                    </div>
                    <div class="complete_item">
                        <p class="description_item">Phân khoa</p>
                        <input class="input_item" type="text" readonly value="<?php echo $data[2];?>"/>
                           
                    </div>
                    <div class="complete_item">
                        <p class="description_item">Tuổi</p>
                        <input class="input_item" type="text" readonly value="<?php echo $data[3]; ?>"/>
                    </div>
                    <div class="complete_item">
                        <a href="?">Trang chủ</a>
                    </div>
                </div>

            </form>
        </div>
    <?php  
    
    session_unset();
        
    ?>
</body>
</html>
