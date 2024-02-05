<?
namespace application\core;

use application\core\View;

abstract class Controller{
    public $route;
    public $view;
    public $model;
    public $acl;

    public function __construct($route)
    {
        $this->route = $route;
        if(!$this->checkAcl()){
            View::errorCode(403);
        }
        $this->view = new View($route);
        $this->model = $this->loadModel($route['controller']);
    }

    public function loadModel($name){
        $path = 'application\models\\' . ucfirst($name);
        if(class_exists($path)){
            return new $path();
        }else{

        }
    }

    public function checkAcl(){
        $this->acl = require 'application/acl/account.php';
        
        //обработчик условий
        if($this->isAcl('all')){
            return true;
        }elseif(isset($_SESSION['user']) and $this->isAcl('authorize')){
            return true;
        }elseif(isset($_SESSION['user']) and $this->isAcl('admin')){
            $session = $_SESSION['user']['role'];
            if($session == "Admin"){
                return true;
            }else{
                return false;
            }
        }
        return false;
    }

    public function isAcl($key){
        return in_array($this->route['action'], $this->acl[$key]);
        //проверяем  в массиве конкретный ключ
    }
}
?>