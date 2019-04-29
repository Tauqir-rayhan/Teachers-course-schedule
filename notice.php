<?php include "inc/headerrrequest.php"; ?>
<?php
    spl_autoload_register(function($class){
        include "classes/".$class.".php";
    });
    ?>

    <?php
    $user = new Notice();
    ?>


<section class="mainright">
  <table class="tblone">
    <tr>
        <th>No</th>
        <th>Nid</th>
        <th>Subject</th>
        <th>Depatment</th>
        <th>Discription</th>
        <th>Action</th>
        <th>Date modified</th>
    </tr>

    <?php
  $i = 0;
    foreach ($user->readAll() as $key => $value) {
        $i++;
    
?>

    <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $value['nid'];?></td>
        <td><?php echo $value['Sub'];?></td>
        <td><?php echo $value['dept_name'];?></td>
        <td><?php echo $value['discription'];?></td>
        
        <td>
            <?php echo "<a href='noticeedit.php?action=update&nid=".$value['nid']."'>Edit</a>";?> ||
             <?php echo "<a href='noticeedit.php?action=delete&nid=".$value['nid']."' onClick='return confirm(\"Are you sure to Delete Data\")'>Delete</a>";?> 
        </td>
        <td><?php echo $value['Date'];?></td>
    </tr>
<?php } ?>
  </table>
</section>

<a href="noticeedit.php">Create</a>
<?php include "inc/footerr.php"; ?>