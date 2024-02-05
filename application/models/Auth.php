<?

namespace application\models;
use application\core\Model;
use PDOException;

class Auth extends Model{
    public function addUser(){
        try{
            $email = $_POST['email'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $name = '';
            $surname = '';
            $fathname = '';
            $phonenumber = '';
            $result = $this->db->query("INSERT INTO `users` (`id`, `email`, `username`, `password`, `name`, `surname`, `fathname`, `phonenum`) VALUES(NULL, '$email', '$username', '$password', '$name', '$surname', '$fathname', '$phonenumber')");

        }catch (PDOException $error) {
            echo "Ошибка базы данных: " . $error->getMessage();
            }
    }

    public function loginUser(){
        try{
            $email = $_POST['email'];
            $password = $_POST['password'];

            $users = $this->db->row("SELECT * FROM `users` WHERE `email` = '$email'");
            foreach($users as $user){
                if(empty($user)){
                    echo "Вы ввели неправильные данные";
                }
    
                if(!empty($user)){
                    if($user['email'] == $email && $user['password'] == $password){
                        $_SESSION['user'] = [
                            "id" => $user["id"],
                            "username" => $user["username"],
                            "email" => $user["email"],
                            "password" => $user["password"],
                            "name" => $user["name"],
                            "surname" => $user["surname"],
                            "fathname" => $user["fathname"],
                            "phonenum" => $user["phonenum"],
                            "birthdate" => $user["birthdate"],
                            "role" => $user["role"],
                            "avatar" => $user["avatar"]
                        ];
                    }
                }
            } 
        }catch(PDOException $error) {
            echo "Ошибка базы данных: " . $error->getMessage();
        }
    }

    public function logout(){
        session_start();
        session_destroy();
        header("Location: /");
    }

}