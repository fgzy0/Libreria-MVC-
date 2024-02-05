<?
namespace application\controllers;

use application\core\Controller;
use application\models\Test;

class NewsController extends Controller{

    public $model;

    public function listAction(){
        $this->model = new Test;
        $result = $this->model->getUsers();
        //debug($result);
        $this->view->render('Страница новостей', ['test' => $result]);
    }
}
?>