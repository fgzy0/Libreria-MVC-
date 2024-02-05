<?
namespace application\models;

use application\core\Model;


class Test extends Model{
    public function getUsers(){
        $users = $this->db->row("SELECT * FROM `users`");
        return $users;
    }
}


?>