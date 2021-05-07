<?php  include('header.php'); ?>
<?php  include('./employerControler.php'); ?>
<div class="container">
	

	<div style="width: 70%; margin: 20px auto;">
		
			<h2>Публикуване на обява</h2>
                        <form method="POST" >
			 <div class="placeholder">
                         <?php echo $message; ?>
                         </div>
                         <input type="hidden" name="id" value="$id">
                         <label for="firm">Името на вашата фирма:</label>   
			<input type="text" name="firm" >
                         <label for="sity">Населено място:</label>
                        <input type="text" name="sity">
                        <label for="occupation">длъжнстта, която предлагате</label>
                        <input type="text" name="occupation">
                        <label for="works">Посочете сферата на работа:</label>
                        <select id="works" name="works">
                             <option value="туризъм">Туризъм</option>
                             <option value="търговия">Търговия</option>
                             <option value="транспорт">Транспорт</option>
                             <option value="логистика">Логистика</option>
                             <option value="хотелиерство">Хотелиерство</option>
                             <option value="ресторантьорство">Ресторантьорство</option>
                             <option value="промишленост">Промишленост</option>
                             <option value="ит">Информационни технологии</option>
                             <option value="агенции">Агенции недвижими имоти</option>
                             <option value="земеделие">Земеделие</option>
                             <option value="друго">Друго</option>
                        </select>     
                             


                        <label for="obiava">Напишете обявата</label>
                        <textarea id="obiava" name="obiava" rows="10" cols="100"></textarea>
                        <label for="tel">Телефон за контакт</label>
                        <input type="text" name="tel" >
                          <label for="date">Въведете днешната дата</label>
                          <input type="date" name="date" >
                       
                        <button type="submit" class="btn" name="obiava_btn">Публикувай</button>
                        <input type="hidden" name="tokken" value="1">
                        <div><h3>Ако трябва да промените обявата си актуализирайте я <a href="update.php">ТУК</></h3></div>
          
			
				
                       
                         <div>         
                         <?php echo $message;?>
                         </div>
			
		</form>
	</div>
</div>

	

	
<div>  

</div>
   </body>
</html>