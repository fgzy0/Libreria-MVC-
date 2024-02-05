<?
namespace application\controllers;

use application\core\Controller;
use application\models\Admin;
use application\models\Dashboard;

class AdminController extends Controller{

    public $model;

    public function datausersAction(){
        $this->model = new Admin;
        $users = $this->model->getUsers();

        $this->view->render('Администратор: пользователи', ['users' => $users]);
    }

    public function reductuserAction(){
        $this->model = new Admin;
        $this->model->reductuser();
    }

    public function reductuserIDAction($id){
        $this->model = new Admin;
        $user = $this->model->reductuserID($id);

        $this->view->render('Админ: изменение данных пользователя', ['user' => $user]);
    }

    public function deleteuserAction(){
        $this->model = new Admin;
        $this->model->deleteuser();
    }

    public function deleteuserIDAction($id){
        $this->model = new Admin;
        $user = $this->model->deleteuserID($id);
        
        $this->view->render('Админ: удаление пользователя', ['user' => $user]);
    }


    public function productsAction(){
        $this->model = new Admin;
        $products = $this->model->selectProducts();

        $this->view->render('Админ: список товаров', ['products' => $products]);
    }

    public function addproductAction(){
        $this->model = new Admin;
        $categories = $this->model->selectCategories();
        $genres = $this->model->selectGenres();

        $this->view->render('Админ: добавить товар', ['categories' => $categories, 'genres' => $genres]);
    }

    public function addnewproductAction(){
        $this->model = new Admin;
        $this->model->addProduct();
    }

    public function reductproductIDAction($id){
        $this->model = new Admin;
        $products = $this->model->selectproductID($id);
        $categories = $this->model->selectCategories();
        $genres = $this->model->selectGenres();

        $this->view->render('Админ: обновление товара', ['products' => $products, 'categories' => $categories, 'genres' => $genres]);
    }

    public function reductproductAction(){
        $this->model = new Admin;
        $this->model->reductproduct();
    }

    public function deleteproductIDAction($id){
        $this->model = new Admin;
        $products = $this->model->selectproductID($id);

        $this->view->render('Админ: удаление товара', ['products' => $products]);
    }

    public function deleteproductAction(){
        $this->model = new Admin;
        $this->model->deleteProduct();
    }

    public function categoriesAction(){
        $this->model = new Admin;
        $categories = $this->model->selectAllCategories();

        $this->view->render('Админ: список категорий', ['categories' => $categories]);
    }

    public function addcategoryAction(){
        $this->view->render('Админ: добавить категорию', []);
    }

    public function addcategoriesAction(){
        $this->model = new Admin;
        $this->model->addCategory();
    }

    public function reductcategoryIDAction($id){
        $this->model = new Admin;
        $categories = $this->model->selectcategoryID($id);
        $this->view->render('Админ: обновление категории', ['categories' => $categories]);
    }

    public function reductcategoryAction(){
        $this->model = new Admin;
        $this->model->reductCategory();
    }

    public function deletecategoryIDAction($id){
        $this->model = new Admin;
        $categories = $this->model->selectcategoryID($id);
        $this->view->render('Админ: удаление категории', ['categories' => $categories]);
    }

    public function deletecategoryAction(){
        $this->model = new Admin;
        $this->model->deleteCategory();
    }

    public function genresAction(){
        $this->model = new Admin;
        $genres = $this->model->selectAllGenres();

        $this->view->render('Админ: список жанров', ['genres' => $genres]);
    }

    public function addgenreAction(){
        $this->view->render('Админ: добавить жанр', []);
    }

    public function addgenresAction(){
        $this->model = new Admin;
        $this->model->addGenre();
    }

    public function reductgenreIDAction($id){
        $this->model = new Admin;
        $genres = $this->model->selectgenreID($id);
        debug($genres);
        $this->view->render('Админ: обновление жанра', ['genres' => $genres]);
    }

    public function reductgenreAction(){
        $this->model = new Admin;
        $this->model->reductGenre();
    }

    public function deletegenreIDAction($id){
        $this->model = new Admin;
        $genres = $this->model->selectgenreID($id);
        $this->view->render('Админ: удаление жанра', ['genres' => $genres]);
    }

    public function deletegenreAction(){
        $this->model = new Admin;
        $this->model->deleteGenre();
    }

    public function dashboardAction(){
        $this->model = new Dashboard;
        $users = $this->model->countUsers();
        $categories = $this->model->countCategories();
        $genres = $this->model->countGenres();
        $products = $this->model->countProducts();

        $summa = $this->model->sumProducts();
        $lastproduct = $this->model->lastProduct();
        $countGenres = $this->model->countGroupGenres();
        $lastcategory = $this->model->lastCategory();

        $this->view->render('Dashboard', ['users' => $users, 'categories' => $categories, 'genres' => $genres, 'products' => $products, 'summa' => $summa, 'lastproduct' => $lastproduct, 'countgenres' => $countGenres, 'lastcategory' => $lastcategory]);
    }
}