<?php  include('header.php'); ?>
<?php

  $message = null;


if(isset($_POST['tokken']) && $_POST['tokken'] == 1) {
    $id          = $_POST['id'];
    $firm        = $_POST['firm'];
    $sity        = $_POST['sity'];
    $occupation   = $_POST['occupation'];
    $works       = $_POST['works'];
    $obiava      = $_POST['obiava'];
    $tel         = $_POST['tel'];

    Database::update('tb_obiavi',[
         'id'     => $id,
        'firm'     => Database::str($firm),
        'sity'     => Database::str($sity),
        'occupation'=> Database::str($occupation),
        'works '    => Database::str($works) ,
        'obiava'   => Database::str($obiava),
        'tel'      =>Database::str($tel)
    ])::where(['id'=>$id])::execute();
     
 

Database::insert('tb_obiavi', [ 
     
        'firm'     => Database::str($firm),
        'sity'     => Database::str($sity),
        'occupation'=> Database::str($occupation),
        'works '    => Database::str($works) ,
        'obiava'   => Database::str($obiava),
        'tel'      =>Database::str($tel)
       
    ]);
 $message = 'Успешно променихте обявата си';
 } 
?>


<div class="container">
	

	<div style="width: 70%; margin: 20px auto;">
		
			<h2>Актуализиране на обява</h2>
                        <form method="POST" >
			 <div class="placeholder">
                         <?php echo $message; ?>
                         </div>
                            <input type="hidden" name="id" >
                         <label for="firm">Името на вашата фирма:</label>   
                         <input type="text" name="firm"  >
                         <label for="sity">Населено място:</label>
                        <input type="text" name="sity" >
                        <label for="occupation">длъжнстта, която предлагате</label>
                        <input type="text" name="occupation" >
                        <label for="works">Посочете сферата на работа:</label>
                        <select id="works" name="works"  >
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
                        <textarea id="obiava" name="obiava" rows="10" cols="100" ></textarea>
                        <label for="tel">Телефон за контакт</label>
                        <input type="text" name="tel" >
                        <button type="submit" class="btn" name="obiava_btn">Актуализирай</button>
                        <input type="hidden" name="tokken" value="1">
                        
          
			
				
                       
                              
                         <?php echo $message;?>
                        
			
		</form>
	</div>
</div>
