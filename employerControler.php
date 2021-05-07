
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
    $date         = $_POST['date'];
  
//    $obiaviCollection = $_POST['obiavi-set'];
    Database::insert('tb_obiavi', [ 
         
        'firm'     => Database::str($firm),
        'sity'     => Database::str($sity),
        'occupation'=> Database::str($occupation),
        'works '    => Database::str($works) ,
        'obiava'   => Database::str($obiava),
        'tel'      =>Database::str($tel),
         'date'      =>Database::str($date)
       
       
    ]);
  
     
  $message = 'inserted succesfuly';
}
  

