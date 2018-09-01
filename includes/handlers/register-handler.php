<?php
function sanitilizeFormPassword($inputText){
 $inputText = strip_tags($inputText);
 return $inputText;
}
function sanitilizeFormUsername($inputText){
 $inputText = strip_tags($inputText);
 $inputText  = str_replace(" ", "", $inputText);
 return $inputText;
}
function sanitilizeFormString($inputText){
 $inputText = strip_tags($inputText);
 $inputText  = str_replace(" ", "", $inputText);
 $inputText = ucfirst(strtolower($inputText));
 return $inputText;
}

if(isset($_POST['registerButton'])){
 $username = sanitilizeFormUsername($_POST['username']);
 $email = sanitilizeFormString($_POST['email']);
 $email2 = sanitilizeFormString($_POST['email2']);
 $password = sanitilizeFormPassword($_POST['password']);
 $password2 = sanitilizeFormPassword($_POST['password2']);


 $account->register($username, $email, $email2, $password, $password2);

}


?>