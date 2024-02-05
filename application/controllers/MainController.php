<?
namespace application\controllers;

use application\core\Controller;
use application\models\Info;
use application\models\Auth;
use application\models\Main;
use application\lib\DB;

class MainController extends Controller{

    public $model;

    public function homeAction(){
        
        $this->model = new Info;
        $result = $this->model->infoShow();
        $count = $this->model->infoCount();
        $bookResult = $this->model->infoShow();
        $bookCount = $this->model->bookCount();
        $categories = $this->model->categoriesShow();
        $products = $this->model->productsShow();

        $this->view->render('Главная страница', ['rows' => $result, 'count' => $count, 'bookResult' => $bookResult, 'bookCount' => $bookCount, 'categories' => $categories, 'products' => $products]);
    }

    public function absoluteAction(){
        
        $this->model = new Info;
        $result = $this->model->infoShow();
        $count = $this->model->infoCount();
        $bookResult = $this->model->infoShow();
        $bookCount = $this->model->bookCount();
        $categories = $this->model->categoriesShow();
        $products = $this->model->productsShow();

        $this->view->render('Absolute', ['rows' => $result, 'count' => $count, 'bookResult' => $bookResult, 'bookCount' => $bookCount, 'categories' => $categories, 'products' => $products]);
    }
    public function homeIDAction($id){
        print_r($id);
    }

    public function bookIDAction($id){
        $this->model = new Info;
        $products = $this->model->productShow($id);
        $similarProducts = $this->model->similarProducts($id);

        $this->view->render('Книги', ['products' => $products, 'similar' => $similarProducts]);
    }

    public function genreIDAction($id){
        $this->model = new Info;
        $genres = $this->model->genresShow($id);
        
        $this->view->render('Жанры', ['rows' => $genres]);
    }

    public function registerAction(){
        $this->model = new Auth;
        $this->model->addUser();
        header("Location: /");
    }

    public function loginAction(){
        $this->model = new Auth;
        $this->model->loginUser();
        header("Location: /");
    }
}
?>