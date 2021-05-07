<?php
  $message = "";
if(User::isAuthenticated()) return header('Location:header.php');

if(!array_key_exists('tokken', $_POST)) return;


$username       = $_POST['username'];
function hasMinLength($input, $minLength) {
        return strlen($input) >= $minLength;
    }
  function isRepeatPasswordValid($originalPassword, $repeatPassword) {
        return $originalPassword == $repeatPassword;
    } 
 
$password       = $_POST['password'];
$repeatPassword = $_POST['repeat_password'];
$email          = $_POST['email'];

 
if(!hasMinLength($username, 5)) {
     $message = "Username length is below than 5 characters";
  return;
     
}

if(!hasMinLength($password, 5)) {
     $message =  "Password length is below than 5 characters";

     return;
}

if(!hasMinLength($email, 5)) {
   $message = "E-mail length is below than 5 characters";
   return;
   
}    

if(!isRepeatPasswordValid($password, $repeatPassword)) {
     $message = "Original and repeat password does not match";
    return;
     
}


Database::insert('tb_usersemploy', array(
    'username'  => Database::str($username),
    'password'  => Database::str(md5($password)),
    'mail'      => Database::str($email)
));

Database::insert('tm_usersemploy__user_role', array(
    'user_id'   => Database::getLastInsertedId(),
    'role_id'   => 3
));

