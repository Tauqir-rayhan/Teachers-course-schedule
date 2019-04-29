<?php include "inc/headerrroom_book.php"; ?>
<?php
    spl_autoload_register(function($class){
        include "classes/".$class.".php";
    });
    ?>

    <?php
    $user = new Room_book(); ?>



<section class="mainright">
  <table class="tblone">
    <tr>
        <th>No</th>
        <th>building</th>
        <th>room_number</th>
        <th>time_slot_id</th>
        <th>day</th>
        <th>Start_time</th>
        <th>Status</th>
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
        <td><?php echo $value['Status'];?></td>
        <td><?php echo $value['T_ID'];?></td>
        
        <td>
            <?php echo "<a href='room_bookedit.php?action=update&T_ID=".$value['T_ID']."'>Edit</a>";?> ||
             <?php echo "<a href='room_bookedit.php?action=delete&T_ID=".$value['T_ID']."' onClick='return confirm(\"Are you sure to Delete Data\")'>Delete</a>";?> 
        </td>
    </tr>
<?php } ?>
  </table>
</section>

<a href="room_bookedit.php">Create</a>

<?php include "inc/footerr.php"; ?>