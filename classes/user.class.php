<?php

include 'dbh.class.php';

class User extends Dbh {

        public function createUser($name, $email, $pwd){
            $sql = "INSERT INTO logingegevens(userName, userEmail, userPwd) VALUES (?, ?, ?)";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$name, $email, $pwd]);
            header('location: ./login.php');
        }

        public function emptyInputLogin($name, $pwd){
            $result;
            if(empty($name) || empty($pwd)){
            $result = true;
            }
            else {
                $result = false;
            }
            return $result;
        }

        public function loginUser($name, $pwd){
            $pwd = $_POST['pwd'];
            $sql = "SELECT * FROM logingegevens WHERE userName = ? AND userPwd = ? ";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$name, $pwd]);

            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            print_r($user);

            if($user['userName']){
                if($user['userPwd']){
                    header('location: succes.php');
                }
                }else{
                    header('location: login.php');
                }
        }
}