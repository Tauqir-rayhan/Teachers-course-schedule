<?php include "inc/headerrroom_book.php"; ?>
<?php
    spl_autoload_register(function($class){
        include "classes/".$class.".php";
    });
    ?>

    <?php
    $user = new Room_book();
    if(isset($_POST['create']))
    {
        $building = $_POST['building'];
        $room_number= $_POST['room_number'];
        $time_slot_id = $_POST['time_slot_id'];
        $day = $_POST['day'];
        $Start_time = $_POST['Start_time'];
        $Status = $_POST['Status'];
        $T_ID = $_POST['T_ID'];
       

        $user->setTId($T_ID);
        $user->setbuilding($building);
        $user->setTimeslot($time_slot_id);
        $user->setDay($day);
        $user->setroom_number($room_number);
        $user->setStart_time($Start_time);
        $user->setStatus($Status);
        

        if($user->insert())
        {
            echo "<span class='insert'>Data inserted Successfully...</span>";
        }

    }

if(isset($_POST['update']))
    {
        $building = $_POST['building'];
        $room_number= $_POST['room_number'];
        $time_slot_id = $_POST['time_slot_id'];
        $day = $_POST['day'];
        $Start_time = $_POST['Start_time'];
        $Status = $_POST['Status'];
        $T_ID = $_POST['T_ID'];
       

        $user->setTId($T_ID);
        $user->setbuilding($building);
        $user->setTimeslot($time_slot_id);
        $user->setDay($day);
        $user->setroom_number($room_number);
        $user->setStart_time($Start_time);
        $user->setStatus($Status);
        

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
        <td>building: </td>
        <td><input type="text" name="building" value="<?php echo $result['building'];?>" required="1"/></td>    
    </tr>
    <tr>
        <td>room_number: </td>
        <td><input type="text" name="room_number" value="<?php echo $result['room_number'];?>" required="1"/></td>    
    </tr>

    <tr>
        <td>time_slot_id: </td>
        <td><input type="text" name="time_slot_id" value="<?php echo $result['time_slot_id'];?>" required="1"/></td>    
    </tr>
    <tr>
        <td>day: </td>
        <td><input type="text" name="day" value="<?php echo $result['day'];?>" required="1"/></td>    
    </tr>

    <tr>
        <td>Start_time: </td>
        <td><input type="text" name="Start_time" value="<?php echo $result['Start_time'];?>" required="1"/></td>    
    </tr>


     <tr>
        <td>Status: </td>
        <td><input type="text" name="Status" value="<?php echo $result['Status'];?>" required="1"/></td>    
    </tr>

     <tr>
        <td>T_ID: </td>
        <td><input type="text" name="T_ID" value="<?php echo $result['T_ID'];?>" required="1"/></td>    
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
        <td>building: </td>
        <td><input type="text" name="building" required="1"/></td>    
    </tr>
    <tr>
        <td>room_number: </td>
        <td><input type="text" name="room_number" required="1"/></td>    
    </tr>

    <tr>
        <td>time_slot_id: </td>
        <td><input type="text" name="time_slot_id"  required="1"/></td>    
    </tr>
    <tr>
        <td>day: </td>
        <td><input type="text" name="day" required="1"/></td>    
    </tr>

    <tr>
        <td>Start_time: </td>
        <td><input type="text" name="Start_time" required="1"/></td>    
    </tr>

     <tr>
        <td>Status: </td>
        <td><input type="text" name="Status" required="1"/></td>    
    </tr>



     <tr>
        <td>T_ID: </td>
        <td><input type="text" name="T_ID" required="1"/></td>    
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

<a href="room_book.php">Go Back</a>