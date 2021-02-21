<?php
  namespace App\classes;

  class FromTo {
    protected $firstNum,$secondNum;

    public function __construct(){
      $this->firstNum  = $_POST['first_number'];
      $this->secondNum = $_POST['second_number'];
    }

    public function getFromTo(){
      $result = null;
      if($this->firstNum < $this->secondNum){
        for ($i=$this->firstNum; $i <= $this->secondNum; $i++) {
          $result.= $i.',';
        }
      }else{
        for ($i=$this->firstNum; $i >= $this->secondNum; $i--) {
          $result.= $i.',';
        }
      }
      
      return rtrim($result,',');
    }


  }
  

?>