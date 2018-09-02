<?php

class Account {
  private $errorArray;
		public function __construct() {
			$this->errorArray = array();
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
if($em != $em){
	 array_push($this->errorArray, "Your email dont match");
	 return;
}
if(!filter_var($em, FILTER_VALIDATE_EMAIL)){
 	 array_push($this->errorArray, "Email is invalid");
	 return;
}
}
private function validatePassword($pw, $pw2){
  if($pw != $pw2){
  array_push($this->errorArray, "Your password dont match");
	return;
  }

  if(preg_match('/[^A-Za-z0-9]/', $pw)){
   array_push($this->errorArray, "Your password can only contain numbers and letters");
   	return;
  }
   if(strlen($pw) > 30 || strlen($pw) < 5){
  array_push($this->errorArray, "Your password must be between 5 and 30 characters");
  return;
 }
}

}

?>