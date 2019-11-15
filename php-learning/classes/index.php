<?php
require 'functions/functions.php';
class Task{

  public $description;

  public $completed = false;

  public function __construct($description) {
    $this->description = $description;
  }

  public function isCompleted() {
      return $this->completed;
  }

  public function complete() {
    $this->completed = true;
  }

  public function description(){
    return $this->description;
  }
}


$tasks =[
  new Task('Go to the store'),
  new Task('Go to the gym'),
  new Task('Clean my room')
];
$tasks[0]->complete();

require 'index.view.php';
