<?php include('./header.php') ?>
<?php  include('./signupEmployerControler.php'); ?>

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
  	  <label>Собствено име</label>
  	  <input type="text" name="fname" >
  	</div>
            <div class="input-group">
  	  <label>Фамилно име</label>
  	  <input type="text" name="lname" >
  	</div>
          <div class="input-group">
  	  <label>Име на фирмата</label>
  	  <input type="text" name="firmname">
  	</div>
        <div class="input-group">
          <label>Адрес</label>
  	  <input type="text" name="address">
  	</div>
        <div class="input-group">
           <label>Телефонен номер</label>
  	  <input type="text" name="tel">
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
</div>

    <div> След успешна регистрация,влезте в своя<a href="signinEmployer.php">ПРОФИЛ</a></div>
	
</body>
</html>
       

