<?php include "inc/headerrstudent.php"; ?>
<?php
    spl_autoload_register(function($class){
        include "classes/".$class.".php";
    });
    ?>

    <?php
     $user = Student::getInstance();
    if(isset($_POST['create']))
    {
        $ID = $_POST['ID'];
        $name = $_POST['name'];
        $dept_name = $_POST['dept_name'];
        $tot_cred = $_POST['tot_cred'];
        $T_ID = $_POST['T_ID'];

        $user->setId($ID);
        $user->setName($name);
        $user->setDep($dept_name);
        $user->setTot_cred($tot_cred);
        $user->setT_ID($T_ID);

        if($user->insert())
        {
            echo "<span class='insert'>Data inserted Successfully...</span>";
        }

    }

if(isset($_POST['update']))
    {
         $ID = $_POST['ID'];
        $name = $_POST['name'];
        $dept_name = $_POST['dept_name'];
        $tot_cred = $_POST['tot_cred'];
        $T_ID = $_POST['T_ID'];

        $user->setId($ID);
        $user->setName($name);
        $user->setDep($dept_name);
        $user->setTot_cred($tot_cred);
        $user->setT_ID($T_ID);

        if($user->update($ID))
        {
            echo "<span class='insert'>Data updated Successfully...</span>";
        }

    }


    ?>

 <?php
         
         if(isset($_GET['action']) && $_GET['action']=='delete')
         {

             $ID =(string)$_GET['ID'];

             if ($user->delete($ID)) {
                 echo "<span class='delete'>Data Deleted Successfully...</span>";
             }

        }


    ?>




    <?php
         
         if(isset($_GET['action']) && $_GET['action']=='update')
         {

             $ID =(string)$_GET['ID'];

             $result = $user->readById($ID);


    ?>

<form action="" method="post">
    
 <table>
    <input type="hidden" name="ID" value="<?php echo $result['ID'];?>" />
    <tr>
        <td>Id: </td>
        <td><input type="text" name="ID" value="<?php echo $result['ID'];?>" required="1"/></td>    
    </tr>
    <tr>
        <td>Name: </td>
        <td><input type="text" name="name" value="<?php echo $result['name'];?>"required="1"/></td>    
    </tr>

    <tr>
       <td>Department: </td>
        <td><input type="text" name="dept_name" value="<?php echo $result['dept_name'];?>"required="1"/></td>
    </tr>

    <tr>
        <td>Total Credit: </td>
        <td><input type="number" name="tot_cred" value="<?php echo $result['tot_cred'];?>"required="1"/></td>  
    </tr>

    <td>T_id: </td>
        <td><input type="text" name="T_ID" value="<?php echo $result['T_ID'];?>" required="1"/></td>

    <tr>
      <td></td>
        <td>
        <input type="submit" name="update" value="Submit"/>
        
        </td>
    </tr>
  </table>
</form>

<?php
} else{
?>




<section class="mainleft">
<form action="" method="post">
 <table>
    <tr>
        <td>Id: </td>
        <td><input type="text" name="ID"  required="1"/></td>    
    </tr>
    <tr>
        <td>Name: </td>
        <td><input type="text" name="name" required="1"/></td>    
    </tr>

    <tr>
       <td>Department: </td>
        <td><input type="text" name="dept_name" required="1"/></td>
    </tr>

    <tr>
        <td>Total Credit: </td>
        <td><input type="number" name="tot_cred" required="1"/></td>  
    </tr>

    <td>Advisor: </td>
        <td><input type="text" name="T_ID"  required="1"/></td>

    <tr>
      <td></td>
        <td>
        <input type="submit" name="create" value="Submit"/>
        <input type="reset" value="Clear"/>
        </td>
    </tr>
  </table>
</form>
<?php }?>
</section>

<a href="student.php">Go Back</a>