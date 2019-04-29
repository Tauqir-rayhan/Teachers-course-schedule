<?php include "inc/headerrstudent.php"; ?>
<?php
    spl_autoload_register(function($class){
        include "classes/".$class.".php";
    });
    ?>

    <?php
    $user = Student::getInstance(); ?>



<section class="mainright">
  <table class="tblone">
    <tr>
        <th>No</th>
        <th>ID</th>
        <th>Name</th>
        <th>Department</th>
        <th>Total_credit</th>
        <th>Advisor</th>
        
    </tr>

    <?php
  $i = 0;
    foreach ($user->readAll() as $key => $value) {
        $i++;
    
?>

    <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $value['ID'];?></td>
        <td><?php echo $value['name'];?></td>
        <td><?php echo $value['dept_name'];?></td>
        <td><?php echo $value['tot_cred'];?></td>
        <td><?php echo $value['T_ID'];?></td>
      
    </tr>
<?php } ?>
  </table>
</section>


<?php include "inc/footerr.php"; ?>