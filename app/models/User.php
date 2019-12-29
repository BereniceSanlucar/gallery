<?php

    class User {

        public function __construct() {
        }

        public function saveUser($temp) {
            if(file_put_contents("../app/models/LoginData.txt", serialize($temp))) {
                return true;
            } else {
                return false;
            }
        }

        public function findUsername($username) {

            $loginData = unserialize(file_get_contents("../app/models/LoginData.txt"));
            if($loginData['username'] == $username){
              return true;
            } else {
              return false;
            }
        }

        public function findEmail($email) {

            $loginData = unserialize(file_get_contents("../app/models/LoginData.txt"));
            if($loginData['email'] == $email){
              return true;
            } else {
              return false;
            }
        }

        public function authenticateUser($username, $password) {

            $loginData = unserialize(file_get_contents("../app/models/LoginData.txt"));
            $hashed_password = $loginData['password'];

            if(password_verify($password, $hashed_password)){
              return $hashed_password;
            } else {
              return false;
            }

        }

    }

?>