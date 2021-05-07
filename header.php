<?php include'./user/User.php'?>
<?php include'./database/Database.php'?>

<?php
//function redirect($page){
//    header('Location:$page.php');
//}


?>
<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Averia+Serif+Libre|Noto+Serif" rel="stylesheet">
    
    <title>Document</title>
     <link rel="stylesheet" href="css/vendor/grid.css"/>
    <link rel="stylesheet" href="css/style.css"/>

    </head>
    
    <body> 
       
    <div id="component--header">

        <div class="row">
            <div class="col-xs-6">
                <div id="component--header-logo">
                      свободни работни места
                </div>
            </div>

            <div class="col-xs-6">
                <div id="component--menu">

                    <?php if(User::hasRoleUser()): ?>
                        <ul>
                            <li><a href="index.php">EMPLOY</a></li>
                             <li>|</li>
                            
                            
                        </ul> 
                    
     <div>
                    <?php endif; ?>
                   <?php if(User::hasRoleEmployer()): ?>
                        <ul>
                             <li>Здравейте,Вие сте регистриран, като </li>
                            <li><a href="employer.php">EMPLOYER</a></li>
                            
                        </ul> 
              <div class="baner">
     </div>
                    <?php endif; ?> 

                <?php if(User::hasRoleEmploy()): ?>
                        <ul>
                            <li>Здравейте,Вие сте регистриран, като </li>
                            <li><a href="employ.php">EMPLOY</a></li>
                             
                        </ul> 
          <div class="baner">
     </div>
                    <?php endif; ?>

                    <?php if(User::hasRoleAdmin()): ?>

                        <ul>
                            <li>Здравейте,Вие сте регистриран, като </li>
                            <li><a href="admin.php">ADMIN</a></li>
                           
                           
                        </ul> 
              <div class="baner">
     </div>
                    <?php endif; ?>                    


                    <?php if(User::isGuest()): ?>
                        <ul>
                            <li><a href="home.php">Начало</a></li>
                            <li>|</li>
                           <li><a href="signup.php">Търся работа</a></li>                        
                            <li>|</li>
                            <li><a href="signupEmployer.php">Работодател</a></li>
                           
                        </ul>                    
                    <?php endif; ?>

                     <?php if(User::hasRoleAdmin()): ?>
                        <ul>
                            <li><a href="home.php">Начало</a></li>
                            <li>|</li>
                            <li><a href="employ.php">Търся работа</a></li>                        
                            <li>|</li>
                            <li><a href="employer.php">Работодател</a></li>
                            <li>|</li>
                            <li><a href="logout.php">Изход</a></li>
                        </ul>                    
                    <?php endif; ?>  
                    <?php if(User::hasRoleEmploy()): ?>
                        <ul>
                            <li><a href="home.php">Начало</a></li>
                            <li>|</li>
                             <li><a href="employ.php">Търся работа</a></li>                        
                            <li>|</li>
                           <li><a href="logout.php">Изход</a></li>
                        </ul>                    
                    <?php endif; ?>
                    <?php if(User::hasRoleEmployer()): ?>
                        <ul>
                            <li><a href="home.php">Начало</a></li>
                            <li>|</li>
                             <li><a href="employer.php">Работодател</a></li>                        
                            <li>|</li>
                           <li><a href="logout.php">Изход</a></li>
                        </ul>                    
                    <?php endif; ?>
                </div>
   
</div>
            </div>
        </div>
   

             
               
           
