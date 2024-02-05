<?
namespace application\models;
use application\core\Model;
use PDOException;

class Admin extends Model{


    public function getUsers(){
        $users = $this->db->row("SELECT * FROM `users`");
        return $users;
    }

    public function reductuser(){
        $id = $_POST["id"];
        $email = $_POST["email"];
        $username = $_POST["username"];
        $birthDate = $_POST["birthdate"];
        $phoneNumber = $_POST["phonenumber"];
        $role = $_POST["role"];
        
        $users = $this->db->row("SELECT * FROM `users` WHERE `email` = '$email'");

        if($users["email"] === $email){
            echo "На данный Email уже зарегистрирован пользователь. Попробуйте еще раз";
            die();
        }
        $update = $this->db->query("UPDATE `users` SET `email` = '$email', `username` = '$username', `birthdate` = '$birthDate', `phonenum` = '$phoneNumber', `role` = '$role' WHERE `id` = '$id'");

        if (!$update){
            echo "Ошибка обновления данных пользователя";
            die();
        }else{
            session_start();
            $_SESSION["updateUser"] = "Данные пользователя успешно обновлены";
            header("Location: /datausers");
        }
    }


    public function reductuserID($id){
        $user = $this->db->row("SELECT * FROM `users` WHERE `id` = '$id'");
        return $user;
    }

    public function deleteuser(){
        $id = $_POST['id'];
        $delete = $this->db->query("DELETE FROM `users` WHERE `id` = '$id'");

        if(!$delete){
            echo "Ошибка удаления пользователя. Попробуйте еще раз";
        }else{
            session_start();
            $_SESSION['deleteSuccess'] = "Пользователь успешно удален";
            header("Location: /datausers");
        }
    }

    public function deleteuserID($id){
        $user = $this->db->row("SELECT * FROM `users` WHERE `id` = '$id'");
        return $user;
    }


    public function selectProducts(){
        $products = $this->db->row("SELECT * FROM `products`");
        return $products;
    }

    public function selectCategories(){
        $categories = $this->db->row("SELECT * FROM `categories` WHERE `active` = 'Да'");
        return $categories;
    }

    public function selectGenres(){
        $genres = $this->db->row("SELECT * FROM `genres` WHERE `active` = 'Да'");
        return $genres;
    }

    public function addProduct(){
        $title = $_POST["title"];
        $author = $_POST["author"];
        $date = $_POST["date"];
        $description = $_POST["description"];
        $fullprice = $_POST["fullprice"];
        $discountprice = $_POST["discountprice"];
        $category = $_POST["category"];
        $pages = $_POST["pages"];
        $featured = $_POST["featured"];
        $active = $_POST["active"];
        $genre = $_POST["genre"];
        $quantity = $_POST["quantity"];
        
        $file = $_FILES["img"];
        $filename = microtime() . $file["name"];
        $upload = 'public/images/products/';
        $path = $upload . $filename;
        if(!move_uploaded_file($file["tmp_name"], $path)){
            echo "Ошибка загрузки изображения товара";
        }
        
        $insert = $this->db->query("INSERT INTO `products` (`id`, `title`, `author`, `category_id`, `quantity`, `price-discount`, `price-full`, `description`, `date`, `pages-quantity`, `featured`, `active`, `img`, `genre`) VALUES(NULL, '$title', '$author', '$category', '$quantity', '$discountprice', '$fullprice', '$description', '$date', '$pages', '$featured', '$active', '$filename', '$genre')");

        if(!$insert){
            echo "Ошибка добавления товара";
            die();
        }

        if($insert == true){
            session_start();
            $_SESSION["productSuccess"] = "Товар успешно добавлен";
            header("Location: /products");
        }
    }

    public function selectproductID($id){
        $products = $this->db->row("SELECT * FROM `products` WHERE `id` = '$id'");
        return $products;
    }

    public function reductproduct(){
        $id = $_POST["id"];
        $file = $_FILES["img"];
        $title = $_POST["title"];
        $author = $_POST["author"];
        $date = $_POST["date"];
        $description = $_POST["description"];
        $fullprice = $_POST["price-full"];
        $discountprice = $_POST["discount-price"];
        $category = $_POST["category"];
        $pages = $_POST["pages"];
        $featured = $_POST["featured"];
        $active = $_POST["active"];
        $genre = $_POST["genre"];
        $quantity = $_POST['quantity'];
        
        if(isset($_FILES["img"]["name"])){
            $filename = microtime() . $file["name"];
            $upload = 'public/images/products/';
            $path = $upload . $filename;
            if(!move_uploaded_file($file["tmp_name"], $path)){
                echo "Ошибка загрузки изображения товара";
            }
        }else{
            $filename = $file;
        }

        $update = $this->db->query("UPDATE `products` SET `title` = '$title',  `author` = '$author',  `category_id` = '$category', `quantity` = '$quantity',  `price-discount` = '$discountprice',  `price-full` = '$fullprice',  `description` = '$description',  `date` = '$date',  `pages-quantity` = '$pages',  `featured` = '$featured',  `active` = '$active', `img` = '$filename', `genre` = '$genre' WHERE `id` = '$id'");

        if(!$update){
            echo "Ошибка обновления товара";
            die();
        }
        header("Location: /products");
    }

    public function deleteProduct(){
        $id = $_POST["id"];

        $delete = $this->db->query("DELETE FROM `products` WHERE `id` = '$id'");

        if(!$delete){
            echo "Ошибка удалении товара. Повторите попытку";
            die();
        }
        header("Location: /products");
    }

    public function selectAllCategories(){
        $categories = $this->db->row("SELECT * FROM `categories`");
        return $categories;
    }

    public function addCategory(){
        $title = $_POST["title"];
        $description = $_POST["description"];
        $featured = $_POST["featured"];
        $active = $_POST["active"];

        $insert = $this->db->query("INSERT INTO `categories` (`id`, `title`, `description`, `featured`, `active`) VALUES(NULL, '$title', '$description', '$featured', '$active')");

        if(!$insert){
            echo "Ошибка создания новой категории";
            die();
        }

        header("Location: /categories");
    }

    public function selectcategoryID($id){
        $categories = $this->db->row("SELECT * FROM `categories` WHERE `id` = '$id'");
        return $categories;
    }

    public function reductCategory(){
        $id = $_POST["id"];
        $title = $_POST["title"];
        $description = $_POST["description"];
        $featured = $_POST["featured"];
        $active = $_POST["active"];

        $update = $this->db->query("UPDATE `categories` SET `title` = '$title', `description` = '$description', `featured` = '$featured', `active` = '$active' WHERE `id` = '$id'");

        if(!$update){
            echo "Ошибка обновления категории. Повторите попытку";
            die();
        }

        header("Location: /categories");
    }

    public function deleteCategory(){
        $id = $_POST["id"];

        $delete = $this->db->query("DELETE FROM `categories` WHERE `id` = '$id'");
    
        if(!$delete){
            echo "Ошибка удалении категории. Повторите попытку";
            die();
        }

        header("Location: /categories");
    }

    public function selectAllGenres(){
        $genres = $this->db->row("SELECT * FROM `genres`");
        return $genres;
    }

    public function addGenre(){
        $title = $_POST["title"];
        $description = $_POST["description"];
        $featured = $_POST["featured"];
        $active = $_POST["active"];

        $file = $_FILES["img"];
        $filename = microtime() . $file["name"];
        $upload = 'public/images/genres/';
        $path = $upload . $filename;
        if(!move_uploaded_file($file["tmp_name"], $path)){
            echo "Ошибка загрузки изображения товара";
        }

        $insert = $this->db->query("INSERT INTO `genres` (`id`, `title`, `description`, `image`, `featured`, `active`) VALUES(NULL, '$title', '$description', '$filename','$featured', '$active')");

        if(!$insert){
            echo "Ошибка создания нового жанра";
            die();
        }

        header("Location: /genres");
    }

    public function selectgenreID($id){
        $genres = $this->db->row("SELECT * FROM `genres` WHERE `id` = '$id'");
        return $genres;
    }

    public function reductGenre(){
        $id = $_POST["id"];
        $title = $_POST["title"];
        $description = $_POST["description"];
        $featured = $_POST["featured"];
        $active = $_POST["active"];

        $update = $this->db->query("UPDATE `genres` SET `title` = '$title', `description` = '$description', `featured` = '$featured', `active` = '$active' WHERE `id` = '$id'");

        if(!$update){
            echo "Ошибка обновления жанра. Повторите попытку";
            die();
        }

        header("Location: /genres");
    }


    public function deleteGenre(){
        $id = $_POST["id"];

        $delete = $this->db->query("DELETE FROM `genres` WHERE `id` = '$id'");

        if(!$delete){
            echo "Ошибка удалении категории. Повторите попытку";
            die();
        }

        header("Location: /genres");
    }
}
?>