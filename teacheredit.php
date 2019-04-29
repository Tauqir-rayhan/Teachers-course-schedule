 <?php include "inc/headerr.php"; ?>
<?php
    spl_autoload_register(function($class){
        include "classes/".$class.".php";
    });
    ?>

    <?php
    $user = new Teacher();
   




 if(isset($_POST['create']))
    {
        $T_ID = $_POST['T_ID'];
        $name = $_POST['name'];
        $salary = $_POST['salary'];
        $email_address = $_POST['email_address'];
        $dob = $_POST['dob'];
        $pr_address = $_POST['pr_address'];
        $per_address = $_POST['per_address'];
        $dept_name = $_POST['dept_name'];
        $grade = $_POST['grade'];
        

        $user->setTid($T_ID);
        $user->setName($name);
        $user->setSal($salary);
        $user->setEmail($email_address);
        $user->setDob($dob);
        $user->setPaddress($pr_address);
        $user->setPeaddress($per_address);
        $user->setDep($dept_name);
        $user->setGrade($grade);
        if($user->insert())
        {
            echo "<span class='insert'>Data inserted Successfully...</span>";
        }

    }

if(isset($_POST['update']))
    {
        $T_ID = $_POST['T_ID'];
        $name = $_POST['name'];
        $salary = $_POST['salary'];
        $email_address = $_POST['email_address'];
        $dob = $_POST['dob'];
        $pr_address = $_POST['pr_address'];
        $per_address = $_POST['per_address'];
        $dept_name = $_POST['dept_name'];
        $grade = $_POST['grade'];


        $user->setTid($T_ID);
        $user->setName($name);
        $user->setSal($salary);
        $user->setEmail($email_address);
        $user->setDob($dob);
        $user->setPaddress($pr_address);
        $user->setPeaddress($per_address);
        $user->setDep($dept_name);
        $user->setGrade($grade);
        

        if($user->update($T_ID))
        {
            echo "<span class='insert'>Data updated Successfully...</span>";
        }

    }


    ?>

 <?php
         
         if(isset($_GET['action']) && $_GET['action']=='delete')
         {

             $T_ID =(string)$_GET['T_ID'];

             if ($user->delete($T_ID)) {
                 echo "<span class='delete'>Data Deleted Successfully...</span>";
             }

        }


    ?>




    <?php
         
         if(isset($_GET['action']) && $_GET['action']=='update')
         {

             $T_ID =(string)$_GET['T_ID'];

             $result = $user->readById($T_ID);


    ?>

<form action="" method="post">
    
 <table>
    <input type="hidden" name="T_ID" value="<?php echo $result['T_ID'];?>" />
     
    <tr>
        <td>T_id: </td>
        <td><input type="text" name="T_ID" value="<?php echo $result['T_ID'];?>" required="1"/></td>    
    </tr>
    <tr>
        <td>Name: </td>
        <td><input type="text" name="name" value="<?php echo $result['name'];?>"required="1"/></td>    
    </tr>

    <tr>
        <td>Salary: </td>
        <td><input type="Number" name="salary" value="<?php echo $result['salary'];?>"required="1"/></td>    
    </tr>
    <tr>
        <td>Email: </td>
        <td><input type="text" name="email_address" value="<?php echo $result['email_address'];?>"required="1"/></td>    
    </tr>
    <tr>
        <td>Date of birth: </td>
        <td><input type="Date" name="dob" value="<?php echo $result['dob'];?>"required="1"/></td>    
    </tr>

    <tr>
        <td>Permanent Address: </td>
        <td><input type="text" name="pr_address" value="<?php echo $result['pr_address'];?>"required="1"/></td>    
    </tr>
    <tr>
        <td>Present Address: </td>
        <td><input type="text" name="per_address" value="<?php echo $result['per_address'];?>"required="1"/></td>    
    </tr>

    <tr>
       <td>Department: </td>
        <td><input type="text" name="dept_name" value="<?php echo $result['dept_name'];?>"required="1"/></td>
    </tr>

    <tr>
        <td>Grade: </td>
        <td><input type="number" name="grade" value="<?php echo $result['grade'];?>"required="1"/></td>  
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




<section>
<form action="" method="post">
 <table class="tblone">
     

    <tr>
        <td>T_id: </td>
        <td><input type="text" name="T_ID" required="1"/></td>    
    </tr>
    <tr>
        <td>Name: </td>
        <td><input type="text" name="name" required="1"/></td>    
    </tr>

    <tr>
        <td>Salary: </td>
        <td><input type="Number" name="salary" required="1"/></td>    
    </tr>
    <tr>
        <td>Email: </td>
        <td><input type="text" name="email_address" required="1"/></td>    
    </tr>
    <tr>
        <td>Date of birth: </td>
        <td><input type="Date" name="dob" required="1"/></td>    
    </tr>

    <tr>
        <td>Permanent Address: </td>
        <td><input type="text" name="pr_address" required="1"/></td>    
    </tr>
    <tr>
        <td>Present Address: </td>
        <td><input type="text" name="per_address" required="1"/></td>    
    </tr>

    <tr>
       <td>Department: </td>
        <td><input type="text" name="dept_name" required="1"/></td>
    </tr>

    <tr>
        <td>Grade: </td>
        <td><input type="number" name="grade" required="1"/></td>  
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

<a href="index.php">Go Back</a>