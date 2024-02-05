<?
namespace application\controllers;

use application\core\Controller;
use application\models\Account;
use application\models\Auth;

class AccountController extends Controller{

    public $model;

    public function profileAction(){
        
        $this->view->render('Профиль', []);

    }

    public function persondataAction(){
        $this->view->render('Данные пользователя', []);
    }

    public function ordersAction(){
        $this->view->render('Заказы', []);
    }

    public function logoutAction(){
        $this->model = new Auth;
        $this->model->logout();
    }

    public function updateavatarAction(){
        $this->model = new Account;
        $this->model->updateAvatar();
    }

    public function updatephoneusernameAction(){
        $this->model = new Account;
        $this->model->updatePhoneAndUsername();
    }

    public function updatefioAction(){
        $this->model = new Account;
        $this->model->updateFIO();
    }

    public function updateemailAction(){
        $this->model = new Account;
        $this->model->updateEmail();
    }

    public function updatepasswordAction(){
        $this->model = new Account;
        $this->model->updatePassword();
    }
}
?>