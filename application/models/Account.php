<?
namespace application\models;
use application\core\Model;
use PDOException;

class Account extends Model{
    public function updateAvatar(){
        $id = $_POST["id"];
        $file = $_FILES["file"];
        $filename = microtime() . $file["name"];
        $uploadDir = 'public/images/avatars/';
        $path = $uploadDir . $filename;

        $update = $this->db->query("UPDATE `users` SET `avatar` = '$filename' WHERE `id` = '$id'");

        if(!$update){
            echo "Ошибка обновления";
        }

        if(!move_uploaded_file($file["tmp_name"], $path)){
            echo "Ошибка загрузки нового аватара. Повторите попытку.";
            die();
        }else{
            session_start();
            session_destroy();
            header("Location: /");
        }
    }

    public function updatePhoneAndUsername(){

        $id = $_POST["id"];
        $phoneNumber = $_POST["phonenum"];
        $username = $_POST["username"];

        $selectPhoneNumber = $this->db->row("SELECT * FROM `users` WHERE `phonenum` = '$phoneNumber'");

        foreach($selectPhoneNumber as $phone){
            if($phone["phonenum"] === $phoneNumber){
                echo "Данный номер телефона уже используется другим пользователем. Повторите попытку";
                die();
            }else{
                $phoneUpdate = $this->db->query("UPDATE `users` SET `phonenum` = '$phoneNumber' WHERE `id` = '$id'");

                if(!$phoneUpdate){
                    echo "Ошибка обновления. Повторите попытку";
                    die();
                }
                session_start();
                session_destroy();
                header("Location: /");
                die();
            }
        };
        

        $update = $this->db->query("UPDATE `users` SET `phonenum` = '$phoneNumber', `username` = '$username' WHERE `id` = '$id'");


        if(!$update){
            echo "Ошибка обновления. Повторите попытку";
        }
        session_start();
        session_destroy();
        header("Location: /");
    }


    public function updateFIO(){

        $id = $_POST["id"];
        $surname = $_POST["surname"];
        $name = $_POST["name"];
        $fathername = $_POST["fathername"];
        $birthdate = $_POST["birthdate"];
        
        $update = $this->db->query("UPDATE `users` SET `surname` = '$surname', `name` = '$name', `fathname` = '$fathername', `birthdate` = '$birthdate' WHERE `id` = '$id'");

        if(!$update){
            echo "Ошибка обновления данных. Повторите попытку";
            die();
        }
        session_start();
        session_destroy();
        header("Location: /");
    }

    public function updateEmail(){

        $newEmail = $_POST['email'];
        $selectEmail = $this->db->row("SELECT * FROM `users` WHERE `email` = '$newEmail'");

        foreach($selectEmail as $email){
            if($email["email"] === $newEmail){
                echo "Данный Email уже используется другим пользователем. Повторите попытку";
                die();
            }
        }

        $confEmail = $_POST['confemail'];
        $id = $_POST['id'];
        if($newEmail === $confEmail){
            $update = $this->db->query("UPDATE `users` SET `email` = '$newEmail' WHERE `id` = '$id'");

            if(!$update){
                echo "Ошибка обновления данных. Повторите попытку";
                die();
            }
            session_start();
            session_destroy();
            header("Location: /");
        }else{
            echo "Emails не совпали. Повторите попытку";
        }
    }

    public function updatePassword(){

        $currentPass = $_POST['yourpass'];
        $newPass = $_POST['password'];
        $selectPassword = $this->db->row("SELECT * FROM `users` WHERE `password` = '$currentPass'");

        foreach($selectPassword as $password){
            $passwordDB = $password['password'];
        }
        if($passwordDB === $currentPass){
            $confPass = $_POST['confpass'];
            $id = $_POST['id'];

            if($newPass === $confPass){
                $update = $this->db->query("UPDATE `users` SET `password` = '$newPass' WHERE `id` = '$id'");

                if(!$update){
                    echo "Ошибка обновления данных. Повторите попытку";
                    die();
                }
                session_start();
                session_destroy();
                header("Location: /");
            }else{
                echo "Новые пароли не совпали. Повторите попытку";
            }
        }else{
            echo "Вы ввели неправильный свой пароль. Повторите попытку";
        }
    }
}