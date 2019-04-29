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
        <th>Action</th>
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
        <td>
            <?php echo "<a href='studentedit.php?action=update&ID=".$value['ID']."'>Edit</a>";?> ||
             <?php echo "<a href='studentedit.php?action=delete&ID=".$value['ID']."' onClick='return confirm(\"Are you sure to Delete Data\")'>Delete</a>";?> 
        </td>
    </tr>
<?php } ?>
  </table>
</section>

<a href="studentedit.php">Create</a>
<?php include "inc/footerr.php"; ?>