<?php include('./header.php') ?>
<?php  include('./signupControler.php'); ?>
<div class="container">
	
<div style="width: 40%; margin:20 auto;">
		
	<h2>Регистрация</h2>
        <form method="POST">
            <div class="placeholder">
             <?php echo $message; ?>
            </div> 
         <div class="input-group">
  	  <label>потребителско име</label>
  	  <input type="text" name="username" >
  	</div>
  	<div class="input-group">
  	  <label>E-mail</label>
  	  <input type="email" name="email">
  	</div>
  	<div class="input-group">
  	  <label>парола</label>
  	  <input type="password" name="password">
  	</div>
  	<div class="input-group">
  	  <label>повтори парола</label>
  	  <input type="password" name="repeat_password">
  	</div>
           
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Регистрация</button>
  	</div>
         <input type="hidden" name="tokken" value="1">    
        </form>
        
        <h3>След регистрация влезте <a href="signin.php">Тук</a></h3>
   
</div>
   

	
           
       

