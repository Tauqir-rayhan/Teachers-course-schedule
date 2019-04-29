<?php include "inc/headerr.php"; ?>
<?php
    spl_autoload_register(function($class){
        include "classes/".$class.".php";
    });
    ?>

    <?php
    $user = new Teacher();
   ?>



<section>
  <table class="tblone">
    <tr>
       
        <th>No</th>
        <th>T_ID</th>
        <th>Name</th>
        <th>salary</th>
        <th>email</th>
        <th>dob</th>
        <th>present adress</th>
        <th>permanet adress</th>
        <th>Department</th>
        <th>Grade</th>
        <th>Action</th>
    </tr>

    <?php
  $i = 0;
    foreach ($user->readAll() as $key => $value) {
        $i++;
    
?>

    <tr>
        <td><?php echo $i; ?></td>
       
        <td><?php echo $value['T_ID'];?></td>
        <td><?php echo $value['name'];?></td>
        <td><?php echo $value['salary'];?></td>
        <td><?php echo $value['email_address'];?></td>
        <td><?php echo $value['dob'];?></td>
        <td><?php echo $value['pr_address'];?></td>
        <td><?php echo $value['per_address'];?></td>
        <td><?php echo $value['dept_name'];?></td>
        <td><?php echo $value['grade'];?></td>
        <td>
            <?php echo "<a href='teacheredit.php?action=update&T_ID=".$value['T_ID']."'>Edit</a>";?> ||
             <?php echo "<a href='teacheredit.php?action=delete&T_ID=".$value['T_ID']."' onClick='return confirm(\"Are you sure to Delete Data\")'>Delete</a>";?> 
        </td>
    </tr>
<?php } ?>
  </table>
</section>


<a href="teacheredit.php">Create</a>

<?php include "inc/footerr.php"; ?>