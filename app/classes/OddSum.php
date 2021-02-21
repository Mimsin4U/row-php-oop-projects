<?php
  namespace App\classes;

  class OddSum{
    protected $firstNum, $secondNum;

    public function __construct(){
      $this->firstNum  = $_POST['first_number'];
      $this->secondNum = $_POST['second_number'];
    }

    public function getOddSum(){
      $leftSide = null;
      $sum      = null;
      for ($i = $this->firstNum; $i <= $this->secondNum; $i++) {
        if ($i % 2 !== 0) {
          $leftSide .= $i . '+';
          $sum      += $i;
        }
      }
      $data=[
        "leftSide" => rtrim($leftSide,'+').' = ',
        "sum"      => $sum
      ];
      return $data;
    }
  }
