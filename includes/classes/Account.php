<?php

class Account {
  private $errorArray;
	public function __construct(){
  $this->$errorArray = array();
	}
	public function register($u, $em, $em2, $pw, $pw2){
					$this->validateUsername($un);
					$this->validateEmails($em, $em2);
					$this->validatePassword($pw, $pw2);
	}
private function validateUsername($un){
  if(strlen($un) > 20 || strlen($un) < 5){
  array_push($this->errorArray, "Your username must be between 5 and 20 characters");
  return;
 }
}
private function validateEmails($em, $em2){

}
private function validatePassword($pw, $pw2){

}

}

?>