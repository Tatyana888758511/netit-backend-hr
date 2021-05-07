<?php  include('header.php'); ?>
<?php  include('./signinEmployerControler.php'); ?>


<div class="container">
	

	<div style="width: 40%; margin: 20px auto;">
		
			<h2>Вход</h2>
                        <form method="POST" >
			 <div class="placeholder">
                         <?php echo $message; ?>
                         </div>
			<input type="text" name="username"  placeholder="потребителско име">
			<input type="password" name="password" placeholder="парола">
                        <button type="submit" class="btn" name="login_btn">Влез</button>
                        <input type="hidden" name="tokken" value="1">
                         <div>         
                         <?php echo $message;?>
                         </div>
			
		</form>
	</div>
</div>
    <div>
            <?php include('./footer.php'); ?>
        </div>
	

