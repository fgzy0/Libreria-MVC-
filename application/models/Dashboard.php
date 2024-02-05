<?
namespace application\models;
use application\core\Model;
use PDOException;

class Dashboard extends Model{
    public function countUsers(){
        $users = $this->db->row("SELECT COUNT(*) FROM `users`");
        return $users;
    }

    public function countCategories(){
        $categories = $this->db->column("SELECT COUNT(*) FROM `categories`");
        return $categories;
    }
    public function countGenres(){
        $genres = $this->db->column("SELECT COUNT(*) FROM `genres`");
        return $genres;
    }
    public function countProducts(){
        $products = $this->db->column("SELECT COUNT(*) FROM `products`");
        return $products;
    }

    public function sumProducts(){
        $sum = $this->db->column("SELECT SUM(`price-discount`) FROM `products`");
        return $sum;
    }

    public function lastProduct(){
        $product = $this->db->row("SELECT `id`, `title`, `author`, `genre`, `img` FROM `products` ORDER BY id DESC LIMIT 1");
        return $product;
    }

    public function countGroupGenres(){
        $count = $this->db->row("SELECT genre, COUNT(*) AS count FROM products GROUP BY genre ORDER BY count DESC LIMIT 1");
        return $count;
    }

    public function lastCategory(){
        $category = $this->db->row("SELECT `id`, `title`, `featured`, `active` FROM `categories` ORDER BY id DESC LIMIT 1");
        return $category;
    }
}
?>