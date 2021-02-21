<?php
  namespace App\classes;

  class Calculator {

    protected $firstNum,$secondNum,$btn,$result;

    public function __construct(){
      $this->firstNum   = $_POST['first_number'];
      $this->secondNum  = $_POST['second_number'];
      $this->btn        = $_POST['btn'];
    }


    public function myCalculator(){
      switch ($this->btn) {
        case '+':
          $this->result = $this->add();
          break;
        case '-':
          $this->result = $this->sub();
          break;
        case '*':
          $this->result = $this->mul();
          break;
        case '/':
          $this->result = $this->div();
          break;
      }
      return $this->result;
    }

    public function add(){
      return $this->firstNum + $this->secondNum;
    }

    public function sub(){
      return $this->firstNum - $this->secondNum;
    }

    public function mul(){
      return $this->firstNum * $this->secondNum;
    }

    public function div(){
      return $this->firstNum / $this->secondNum;
    }


  }


?>