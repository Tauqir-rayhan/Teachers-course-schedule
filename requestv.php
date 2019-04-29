<?php include "inc/headerrrequest.php"; ?>
<?php
    spl_autoload_register(function($class){
        include "classes/".$class.".php";
    });
    ?>

    <?php
    $user = new Request();
    ?>


<section class="mainright">
  <table class="tblone">
    <tr>
        <th>No</th>
        <th>T_ID</th>
        <th>Course id</th>
        <th>Time slot</th>
        <th>Day</th>
        <th>Year</th>
        <th>Semester</th>
        <th>Start Time</th>
        <th>priority</th>
        <th>Date modified</th>
    </tr>

    <?php
  $i = 0;
    foreach ($user->readAll() as $key => $value) {
        $i++;
    
?>

    <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $value['T_ID'];?></td><?php echo date("Y"); ?>
        <td><?php echo $value['course_id'];?></td>
        <td><?php echo $value['time_slot_id'];?></td>
        <td><?php echo $value['day'];?></td>
        <td><?php echo $value['year'];?></td>
        <td><?php echo $value['semester'];?></td>
        <td><?php echo $value['Start_time'];?></td>
        <td><?php echo $value['priority'];?></td>
        
       
        <td><?php echo $value['register_date'];?></td>
    </tr>
<?php } ?>
  </table>
</section>

<a href="requestedit.php">Create</a>
<?php include "inc/footerr.php"; ?>