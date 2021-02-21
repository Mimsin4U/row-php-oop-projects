<?php
  namespace App\classes;
  class WordCounter{
    protected $givenString;

    public function __construct(){
      $this->givenString = $_POST['given_string'];
    }

    public function getWordCharecter(){
      $totalWord      = str_word_count($this->givenString);
      $totalCharecter = strlen($this->givenString);

      $result = [
        'word'      => 'Total Word - '.$totalWord,
        'charecter' => 'Total Charecter - '.$totalCharecter
      ];


      return $result;
      // $strArry = explode(" ",$this->givenString);
      // sort($strArry);
      // return implode(",",$strArry);

    }

  }
?>