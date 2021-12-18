<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/do_regist_css.css"/>

<body>
    <div class="content">
        <form class="do-regist_form" action="" method="POST">
            <div class="do_regist_all_item">
                <div class="do_regist_item">
                    <p class="description_item"><?php echo "Họ và tên"?>    </p>
                    <input class="input_item" readonly name="do-regist_name" value="<?php echo $data[0];   ?>"></input>
                </div>

                <div class="do_regist_item">
                    <p class="description_item"><?php echo "Giới tính"?>    </p>
                    <input class="input_item" readonly value="<?php echo $data[1];   ?>"  name="do-regist_gender"></input>
                </div>

                <div class="do_regist_item">
                    <p class="description_item"><?php echo "Phân Khoa"?>    </p>
                    <input class="input_item" readonly value="<?php echo $data[2];   ?>" name="do-regist_faculty"></input>
                </div>

                <div class="do_regist_item">
                    <p class="description_item"><?php echo "Tuổi"?>    </p>
                    <input class="input_item" readonly value="<?php echo 2021-$data[3];   ?> " name="do-regist_age"></input>
                </div>
                <div class="do_regist_item">
                    <!-- <button class="submit_form" name="do_regist_submit">Đăng kí</button> -->
                    <a class="submit_form" href="?router=complete">Đăng kí</a>

                </div>
            </div>
        
        </form>
    </div>

</body>


</html>