<?php include "inc/headerrRoom_status.php"; ?>
<?php
    spl_autoload_register(function($class){
        include "classes/".$class.".php";
    });
    ?>

    <?php
    $user = new Room_status(); ?>



<section class="mainright">
  <table class="tblone">
    <tr>
        <th>No</th>
        <th>building</th>
        <th>room_number</th>
        <th>time_slot_id</th>
        <th>day</th>
        <th>Start_time</th>
        <th>T_ID</th>
        
    </tr>

    <?php
  $i = 0;
    foreach ($user->readAll() as $key => $value) {
        $i++;
    
?>

    <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $value['building'];?></td>
        <td><?php echo $value['room_number'];?></td>
        <td><?php echo $value['time_slot_id'];?></td>
        <td><?php echo $value['day'];?></td>
        <td><?php echo $value['Start_time'];?></td>
        <td><?php echo $value['T_ID'];?></td>
        
       
    </tr>
<?php } ?>
  </table>
</section>



<?php include "inc/footerr.php"; ?>