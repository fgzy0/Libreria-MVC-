<?

namespace application\models;
use application\core\Model;

class Info extends Model{

    public $genres;

    public function infoShow(){
        $genres =  $this->db->row("SELECT * FROM `genres`");
        return $genres;
    }

    public function infoCount(){
        $count = $this->db->rowCount("SELECT * FROM `genres`");
        return $count;
    }


    public function bookShow(){
        $genres =  $this->db->row("SELECT * FROM `products`");
        return $genres;
    }

    public function bookCount(){
        $count = $this->db->rowCount("SELECT * FROM `products`");
        return $count;
    }    

    public function categoriesShow(){
        $categories = $this->db->row("SELECT * FROM `categories` WHERE `featured` = 'Да'");
        return $categories;
    }

    public function productsShow(){
        $products = $this->db->row("SELECT * FROM `products` WHERE `featured` = 'Да'");
        return $products;
    }

    public function productShow($id){
        $products = $this->db->row("SELECT * FROM `products` WHERE `id` = '$id'");
        return $products;
    }

    public function genresShow($id){
        $genres = $this->db->row("SELECT * FROM `products` WHERE `genre` = '$id'");
        return $genres;
    }

    public function similarProducts($id){
        $products = $this->db->row("SELECT * FROM `products` WHERE `id` = '$id'");
        foreach($products as $product);
        $genre = $product['genre'];
        $sim = $this->db->row("SELECT * FROM `products` WHERE `genre` = '$genre' and  `id` != '$id' ORDER BY RAND() LIMIT 5");
        return $sim;
    }
}

