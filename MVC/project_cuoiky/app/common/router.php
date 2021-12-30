<?php 
class Router{
    public function setRouter($path){
        switch ($path) {
            case 'create-timetable':
                require_once 'app/views/create_timetable.php';
                break;
                
            case 'confirm-timetable':
                require_once 'app/views/confirm_timetable.php';
                break;
                
            case 'complete-timetable':
                require_once 'app/views/complete_timetable.php';
                break;
                        
            default:
                // require_once 'app/views/create_timetable.php';
                break;
        }
    }
}

$path = isset($_REQUEST['router']) ? $_REQUEST['router'] : 'create-timetable';

$router = new Router();
$router-> setRouter($path);
?>