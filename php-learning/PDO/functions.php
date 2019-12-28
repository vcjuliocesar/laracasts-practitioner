<?php

  if(!function_exists('connectToDb')){
      function connectToDb(){
        try{
          return new \PDO('mysql:host=localhost:3306;dbname=mytodos;','root','');
        }catch(\PDOException $e){
          die($e->getMessage());
        }
      }
  }

  if(!function_exists('fetchAllTasks')){
    function fetchAllTasks($pdo) {
      $statement = $pdo->prepare("select * from todos");

      $statement->execute();

      return $statement->fetchAll(PDO::FETCH_CLASS,'Task');
    }
  }

 if(!function_exists("dd")){
   function dd($data) {
     echo "<pre>";
      var_dump($data);
     echo "</pre>";
   }
 }
