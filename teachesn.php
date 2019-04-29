<?php include "inc/headerrTeaches.php"; ?>
<?php
    spl_autoload_register(function($class){
        include "classes/".$class.".php";
    });
    ?>

    <?php
    $user = new Teaches();?>


<section class="mainright">
  <table class="tblone">
    <tr>
        <th>No</th>
        <th>T_ID</th>
        <th>sec_id</th>
        <th>semester</th>
        <th>Year</th>
        <th>course_id</th>
        
    </tr>

    <?php
  $i = 0;
    foreach ($user->readAll() as $key => $value) {
        $i++;
    
?>

    <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $value['T_ID'];?></td>
        <td><?php echo $value['sec_id'];?></td>
        <td><?php echo $value['semester'];?></td>
        <td><?php echo $value['year'];?></td>
        <td><?php echo $value['course_id'];?></td>
        
       
    </tr>
<?php } ?>
  </table>
</section>


<?php include "inc/footerr.php"; ?>