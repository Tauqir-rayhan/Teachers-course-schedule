<?php

include "DB.php";

class Room_status {
    protected $table='book_room';
    private $building;
    private $room_number;
    private $time_slot_id;
    private $day;
    private $Start_time;
    private $T_ID;
    private $register_date;


    public function setTId($T_ID)
    { 
       $this->T_ID = $T_ID;
    }


    public function setbuilding($building)
    { 
       $this->building= $building;
    }


    public function setTimeslot($time_slot_id)
    { 
       $this->time_slot_id = $time_slot_id;

    }

    public function setDay($day)
    { 
       $this->day = $day;
    }

     public function setroom_number($room_number)
    { 
       $this->room_number = $room_number;
    }

    public function setStart_time($Start_time)
    { 
       $this->Start_time= $Start_time;
    }



public function insert(){
       $sql = "INSERT INTO $this->table(building,room_number,time_slot_id,day,Start_time,T_ID) VALUES(:building,:room_number,:time_slot_id,:day,:Start_time,:T_ID)";
       $stmt = DB::prepare($sql); 
       $stmt->bindParam(':building',$this->building);
       $stmt->bindParam(':room_number',$this->room_number);
       $stmt->bindParam(':time_slot_id',$this->time_slot_id);
       $stmt->bindParam(':day',$this->day);
       $stmt->bindParam(':Start_time',$this->Start_time);
       $stmt->bindParam(':T_ID',$this->T_ID);
       header("Location: room_status.php?msg=");
       return $stmt->execute();
  }
     
public function update($T_ID)
{
    $sql="UPDATE $this->table SET building=:building,room_number=:room_number,time_slot_id=:time_slot_id,day=:day,Start_time=:Start_time,Start_time=:Start_time,T_ID=:T_ID WHERE T_ID=:T_ID";

    $stmt = DB::prepare($sql); 
      $stmt->bindParam(':building',$this->building);
       $stmt->bindParam(':room_number',$this->room_number);
       $stmt->bindParam(':time_slot_id',$this->time_slot_id);
       $stmt->bindParam(':day',$this->day);
       $stmt->bindParam(':Start_time',$this->Start_time);
       $stmt->bindParam(':T_ID',$this->T_ID);
       header("Location: room_status.php?msg=");
       return $stmt->execute();
}

 public function readById($T_ID)
    {
         $sql = "SELECT * FROM $this->table WHERE T_ID=:T_ID";
         $stmt = DB::prepare($sql); 
         $stmt->bindParam(':T_ID',$T_ID);
         $stmt->execute();
         return $stmt ->fetch();
    } 

   
public function readAll(){
       $sql = "SELECT * FROM $this->table";
       $stmt = DB::prepare($sql); 
       $stmt->execute();
       return $stmt ->fetchAll();
  }



   public function delete($T_ID)
   {
         $sql = "DELETE FROM $this->table WHERE T_ID=:T_ID";
         $stmt = DB::prepare($sql); 
         $stmt->bindParam(':T_ID',$T_ID);
         header("Location: room_status.php?msg=");
         return $stmt->execute();

   }

  }


   


?>