<?php

 /**
  *
  */
 class Connection
 {

   public static function make()
   {
     try{
       return new \PDO('mysql:host=localhost:3306;dbname=mytodos;','root','Jul10C3s4r');
     }catch(\PDOException $e){
       die($e->getMessage());
     }
   }
 }
