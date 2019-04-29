<?php include "inc/headerrTeaches.php"; ?>
<?php
    spl_autoload_register(function($class){
        include "classes/".$class.".php";
    });
    ?>

    <?php
    $user = new Teaches();
    if(isset($_POST['create']))
    {
        $T_ID = $_POST['T_ID'];
        $sec_id = $_POST['sec_id'];
        $semester = $_POST['semester'];
        $year = $_POST['year'];
        $course_id = $_POST['course_id'];
       

        $user->setTid($T_ID);
        $user->setsec_id($sec_id);
        $user->setsemester($semester);
        $user->setyear($year);
        $user->setcourse_id($course_id);
        
        

        if($user->insert())
        {
            echo "<span class='insert'>Data inserted Successfully...</span>";
        }

    }

if(isset($_POST['update']))
    {
        $T_ID = $_POST['T_ID'];
        $sec_id = $_POST['sec_id'];
        $semester = $_POST['semester'];
        $year = $_POST['year'];
        $course_id = $_POST['course_id'];
       

        $user->setTid($T_ID);
        $user->setsec_id($sec_id);
        $user->setsemester($semester);
        $user->setyear($year);
        $user->setcourse_id($course_id);

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
        <td>Sec: </td>
        <td><input type="text" name="sec_id" value="<?php echo $result['sec_id'];?>" required="1"/></td>    
    </tr>

    <tr>
        <td>Semester: </td>
        <td><input type="text" name="semester" value="<?php echo $result['semester'];?>" required="1"/></td>    
    </tr>
    <tr>
        <td>Year: </td>
        <td><input type="Number" name="year" value="<?php echo $result['year'];?>" required="1"/></td>    
    </tr>

    <tr>
        <td>Course: </td>
        <td><input type="text" name="course_id" value="<?php echo $result['course_id'];?>" required="1"/></td>    
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
        <td>T_id: </td>
        <td><input type="text" name="T_ID" required="1"/></td>    
    </tr>
    <tr>
        <td>Sec: </td>
        <td><input type="text" name="sec_id" required="1"/></td>    
    </tr>

    <tr>
        <td>Semester: </td>
        <td><input type="text" name="semester"  required="1"/></td>    
    </tr>
    <tr>
        <td>Year: </td>
        <td><input type="Number" name="year" required="1"/></td>    
    </tr>

    <tr>
        <td>Course: </td>
        <td><input type="text" name="course_id" required="1"/></td>    
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
<a href="teaches.php">Go Back</a>