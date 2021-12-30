
<!DOCTYPE html>
<?php 
if(!isset($_SESSION['notification'])){
    header("location:http://localhost/project_MVC/register_user_2/");
}
?>
<html>
    <link rel="stylesheet" href="public/css/base.css">
    <link rel="stylesheet" href="public/css/regist_css.css">
     
<head></head>
<body>
    <div class="content">
        <form class="regist_form" action="" method = "POST"> <!-- action : ham do_regist là hàm xử lý-->
            <div class="regist_all_item">
                <div class="regist_item">
                    <p class="regist_notification" id="error">
                        <?php 

                        $notifi = isset($_SESSION["notification"]) ?$_SESSION["notification"] : '';
                        echo  $notifi;
                        
                        ?>
                    </p>
                </div>
                <div class="regist_item">
                    <p class="description_item"><?php echo "Họ và tên"?></p>
                    <input type="text" class="input_item" name ="regist_name" > </input>
                </div>
                <div class="regist_item">
                    <p class="description_item"><?php echo "Giới tính"?></p>
                    <div class="select_genders">
                        <?php 

                                foreach($gender as $row){  ?>
                                        <div class="select_gender_item">
                                            <input class="gioitinh" type="radio" name="regist_gioitinh"  value="<?php  print($row['name']);?>"> 
                                            <p><?php  print($row['name']);?></p>
                                        </div>
                            <?php 
                            }
                            ?>
                    </div>
                </div>
                <div class="regist_item">
                    <p class="description_item"><?php   echo "Phân Khoa"  ?></p>
                            <div class="select">
                                <select name="regist_phankhoa" class="input_item"> <!-- để name ở đây mới lấy được phankhoa, tại sao thế ạ? -->
                                    
                                <?php 
                                
                                foreach($faculty as $row){  ?>
                                
                                    <option class="input_item" name="regist_phankhoa" ><?php  print($row['name']);?></option>
                                <?php } ?>

                                    
                                
                                </select>
                            </div>
                </div>
                <div class="regist_item">
                    <p class="description_item"><?php echo "Năm sinh"?></p>
                    <input type="text" class="input_item" name="regist_age" > </input>
                </div>
                <div class="regist_item">
                    <input type="submit" value="<?php echo "Đăng ký" ?>" class="submit_form" name="regist_submit"></input>    
                </div>
            </div>
        </form>
    </div>
    
    
<body> 
</html>
