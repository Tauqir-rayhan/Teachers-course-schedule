<?php include "inc/headerrrequest.php"; ?>
<?php
    spl_autoload_register(function($class){
        include "classes/".$class.".php";
    });
    ?>

    <?php
    $user = new Request();
    if(isset($_POST['create']))
    {
        $T_ID = $_POST['T_ID'];
        $course_id = $_POST['course_id'];
        $time_slot_id = $_POST['time_slot_id'];
        $day = $_POST['day'];
        $year = $_POST['year'];
        $semester = $_POST['semester'];
        $Start_time = $_POST['Start_time'];
        $priority = $_POST['priority'];
       

        $user->setTId($T_ID);
        $user->setCourse($course_id);
        $user->setTimeslot($time_slot_id);
        $user->setDay($day);
        $user->setYear($year);
        $user->setSemester($semester);
        $user->setStartTime($Start_time);
        $user->setPriority($priority);
        
        

        if($user->insert())
        {
            echo "<span class='insert'>Data inserted Successfully...</span>";
        }

    }

if(isset($_POST['update']))
    {
        $T_ID = $_POST['T_ID'];
        $course_id = $_POST['course_id'];
        $time_slot_id = $_POST['time_slot_id'];
        $day = $_POST['day'];
        $year = $_POST['year'];
        $semester = $_POST['semester'];
        $Start_time = $_POST['Start_time'];
        $priority = $_POST['priority'];
       

         $user->setTId($T_ID);
        $user->setCourse($course_id);
        $user->setTimeslot($time_slot_id);
        $user->setDay($day);
        $user->setYear($year);
        $user->setSemester($semester);
        $user->setStartTime($Start_time);
        $user->setPriority($priority);

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
        <td>Course: </td>
        <td><input type="text" name="course_id" value="<?php echo $result['course_id'];?>" required="1"/></td>    
    </tr>

    <tr>
        <td>Time: </td>
        <td><input type="text" name="time_slot_id" value="<?php echo $result['time_slot_id'];?>" required="1"/></td>    
    </tr>
    <tr>
        <td>Day: </td>
        <td><input type="text" name="day" value="<?php echo $result['day'];?>" required="1"/></td>    
    </tr>

    <tr>
        <td>Year: </td>
        <td><input type="Number" name="year" value="<?php echo $result['year'];?>" required="1"/></td>    
    </tr>
    <tr>
        <td>Semester: </td>
        <td><input type="text" name="semester" value="<?php echo $result['semester'];?>" required="1"/></td>    
    </tr>

    <tr>
       <td>Start_time: </td>
        <td><input type="text" name="Start_time" value="<?php echo $result['Start_time'];?>" required="1"/></td>
    </tr>

    <tr>
        <td>Priority: </td>
        <td><input type="Number" name="priority" value="<?php echo $result['priority'];?>" required="1"/></td>  
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
        <td>Course: </td>
        <td><input type="text" name="course_id" required="1"/></td>    
    </tr>

    <tr>
        <td>Time: </td>
        <td><input type="text" name="time_slot_id" required="1"/></td>    
    </tr>
    <tr>
        <td>Day: </td>
        <td><input type="text" name="day" required="1"/></td>    
    </tr>

    <tr>
        <td>Year: </td>
        <td><input type="Number" name="year" required="1"/></td>    
    </tr>
    <tr>
        <td>Semester: </td>
        <td><input type="text" name="semester" required="1"/></td>    
    </tr>

    <tr>
       <td>Start_time: </td>
        <td><input type="text" name="Start_time" required="1"/></td>
    </tr>

    <tr>
        <td>Priority: </td>
        <td><input type="Number" name="priority" required="1"/></td>  
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
<a href="request.php">Go Back</a>