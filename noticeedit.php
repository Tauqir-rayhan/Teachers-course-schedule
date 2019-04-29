<?php include "inc/headerr.php"; ?>
<?php
    spl_autoload_register(function($class){
        include "classes/".$class.".php";
    });
    ?>

    <?php
    $user = new Notice();
    if(isset($_POST['create']))
    {
        $nid = $_POST['nid'];
        $Sub = $_POST['Sub'];
        $dept_name = $_POST['dept_name'];
        $discription = $_POST['discription'];
       
       

        $user->setnid($nid);
        $user->setSub($Sub);
        $user->setdept_name($dept_name);
        $user->setdiscription($discription);
        
        

        if($user->insert())
        {
            echo "<span class='insert'>Data inserted Successfully...</span>";
        }

    }

if(isset($_POST['update']))
    {
       $nid = $_POST['nid'];
        $Sub = $_POST['Sub'];
        $dept_name = $_POST['dept_name'];
        $discription = $_POST['discription'];
       
       

        $user->setnid($nid);
        $user->setSub($Sub);
        $user->setdept_name($$dept_name);
        $user->setdiscription($discription);

        if($user->update($nid))
        {
            echo "<span class='insert'>Data updated Successfully...</span>";
        }

    }


    ?>

 <?php
         
         if(isset($_GET['action']) && $_GET['action']=='delete')
         {

             $nid =(int)$_GET['nid'];

             if ($user->delete($nid)) {
                 echo "<span class='delete'>Data Deleted Successfully...</span>";
             }

        }


    ?>




    <?php
         
         if(isset($_GET['action']) && $_GET['action']=='update')
         {

             $nid =(string)$_GET['nid'];

             $result = $user->readById($nid);


    ?>

<form action="" method="post">
    
 <table>
    <input type="hidden" name="nid" value="<?php echo $result['nid'];?>" />
     
    <tr>
        <td>nid: </td>
        <td><input type="Number" name="nid" value="<?php echo $result['nid'];?>" required="1"/></td>    
    </tr>
    <tr>
        <td>Sub: </td>
        <td><input type="text" name="Sub" value="<?php echo $result['Sub'];?>" required="1"/></td>    
    </tr>

    <tr>
        <td>dept_name: </td>
        <td><input type="text" name="dept_name" value="<?php echo $result['dept_name'];?>" required="1"/></td>    
    </tr>
    <tr>
        <td>discription: </td>
        <td><input type="text" name="discription" value="<?php echo $result['discription'];?>" required="1"/></td>    
    </tr>

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
        <td>nid: </td>
        <td><input type="Number" name="nid" required="1"/></td>    
    </tr>
    <tr>
        <td>Sub: </td>
        <td><input type="text" name="Sub" required="1"/></td>    
    </tr>

    <tr>
        <td>dept_name: </td>
        <td><input type="text" name="dept_name" required="1"/></td>    
    </tr>
    <tr>
        <td>discriptions: </td>
        <td><input type="text" name="discription" required="1"/></td>    
    </tr>

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
<a href="notice.php">Go Back</a>