<?php 
// require_once('path.php');
class Router{
    
    public function router($path){
    
        switch ($path) {
            case '':
                require_once './app/controllers/actionLogin.php';
                $actionLogin = new actionLogin();
                $actionLogin->handleLogin();
                require_once('./app/views/login.php');
                break;
            
            case 'home':
                require_once('./app/views/home_login.php');
                break;
            case 'register':
                require_once './app/models/gender.php';
                $Gender = new Gender();
                $gender = $Gender->genderRegist();

                require_once './app/models/faculty.php';
                $Faculty = new Faculty();
                $faculty = $Faculty->facultyRegist();

                require_once './app/controllers/actionRegist.php';
                $actionRegist = new actionRegist();
                $actionRegist->handleRegist();
                require_once('./app/views/regist.php');
                break;
            case 'do-regist':
                $data = $_SESSION['dataInsert'];
                require_once('./app/views/do_regist.php');                
                break;

            case 'complete':
                require_once './app/controllers/actionComplete.php';
                $actionComplete = new actionComplete();
                $id =$actionComplete->handleInsert();
                $data = $_SESSION['dataInsert'];
                require_once('./app/views/complete_regist.php');
                break;
            default:
                require_once('./app/views/error.php');
                break;
       }
    }    
}

$path = isset($_GET['router'])? $_GET['router'] :'';

$router = new Router();
$router->router($path);





?>