<?php
$message = "";
if(isset($_POST['tokken']) && $_POST['tokken'] == 1){
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $userData = Database::fetchQuery("SELECT * FROM tb_usersemploy where username = '$username' AND password = '$password'");

if(count($userData) == 1) {
   
   $userId = $userData[0]['id'];
  
    $query = "  SELECT b.title 
                FROM tm_usersemploy__user_role a, 
                         tm_role b
                WHERE a.user_id = $userId AND 
                          a.role_id = b.id";

                   

    $userRoleCollection = Database::fetchQuery($query);

    var_dump($userRoleCollection);


    User::auth($userData[0], $userRoleCollection);
    return header('Location:header.php');
    exit;
}
if(count($userData) == 1) {
 
    return header('Location:header.php');
    exit;
}
else{
$massage = "No user found"; 
}
}
