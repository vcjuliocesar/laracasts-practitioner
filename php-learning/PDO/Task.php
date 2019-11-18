<?php

class Task{
  public $description;

  public $completed = false;

  public function isCompleted() {
      return $this->completed;
  }

  public function complete() {
    $this->completed = true;
  }

  public function description(){
    return 'Task : '.$this->description;
  }
}
