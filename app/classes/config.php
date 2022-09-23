<?php

namespace App\classes;
use mysqli;
class config
{

    public $conn;

   public function __construct()
   {

       $this->conn=new mysqli('localhost','root','','oop_project');

       if ($this->conn->connect_errno){

           die($this->conn->connect_errno);
       }
   }

   public function showMessage($type,$message){

           $output='';

               $output .='<div class="alert alert-'.$type.' alert-dismissible fade show" role="alert">
                          <strong>'.$message.'</strong> 
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>';

           return $output;

   }

}