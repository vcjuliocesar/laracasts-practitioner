<?php

 /**
  *
  */
 class Connection
 {

   public static function make($config)
   {
     try{
       //return new \PDO('mysql:host=localhost:3306;dbname=mytodos;','root','Jul10C3s4r');
       return new \PDO(
         $config['connection'].';dbname='.$config['name'],

         $config['username'],

         $config['password'],

         $config['options']

       );
     }catch(\PDOException $e){
       die($e->getMessage());
     }
   }
 }
