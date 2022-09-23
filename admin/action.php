<?php
session_start();
require_once '../vendor/autoload.php';
use App\classes\Auth;

$auth=new Auth();




    if (isset($_POST['action']) && $_POST['action']==="register"){


        $name=$_POST['name'];
        $email=$_POST['email'];
        $password=password_hash($_POST['r_password'],PASSWORD_DEFAULT);

       if ( $auth->userExist($email)>0){

           echo $auth->showMessage('warning','This '.$email.' is already exists');

       }
       else{

            if ( $auth->register($name,$email,$password)){

                echo "ok";
                $_SESSION['user_email']=$email;

            }else{

                echo $auth->showMessage('warning','something went wrong');

            }


       }


    }

    else{


         print_r("wrong");

    }


?>