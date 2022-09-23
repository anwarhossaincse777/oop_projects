<?php

namespace App\classes;

class Auth extends config
{

    public function register($name,$email,$password){



          $result=$this->conn->query("INSERT INTO `users` (`name`, `email`, `password`) VALUES ('$name','$email','$password')");

          return $result ? true : false;
    }


            public function userExist($email){

             $result=$this->conn->query("SELECT email FROM users where email='$email'");

                return $result->num_rows;

            }

}