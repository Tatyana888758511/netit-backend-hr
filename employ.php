<?php  include('header.php'); ?>
 <?php  include('./employControler.php'); ?>
<div class="obiavata">
    <h1>Актуални обяви от работодатели </h1>
      <?php

echo '<h3>Ако желаете да кандидатствате се свържете с нас на телефон 088888888 или следният емейл work@abv.bg</h3>';
?>
    <?php foreach ($obiaviCollection as $element): ?>
    <div class="obiava_element">

      <div class ="w-px-210 display"><?php echo  $element['id'];?></div>
      <div class ="w-px-210 display"><?php echo  $element['firm'];?></div>
      <div class ="w-px-210 display"><?php echo  $element['sity'];?></div>
      <div class ="w-px-210 display"><?php echo  $element['occupation'];?></div>
      <div class ="w-px-210 display"><?php echo  $element['works'];?></div>
      <div class ="w-px-210 display"><?php echo  $element['obiava'];?></div>
      <div class ="w-px-210 display"><?php echo  $element['date'];?></div>

      
     </div> 
      <?php endforeach; ?>
</div>
    
    
    
    
    

  </body>
</html>