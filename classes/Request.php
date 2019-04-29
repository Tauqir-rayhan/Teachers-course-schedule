<?php

include "DB.php";

class Request{
    protected $table='request';
    private $T_ID;
    private $course_id;
    private $time_slot_id;
    private $day;
    private $year;
    private $semester;
    private $Start_time;
    private $priority;
    private $register_date;



    public function setTId($T_ID)
    { 
       $this->T_ID = $T_ID;
    }


    public function setCourse($course_id)
    { 
       $this->course_id = $course_id;
    }


    public function setTimeslot($time_slot_id)
    { 
       $this->time_slot_id = $time_slot_id;

    }

    public function setDay($day)
    { 
       $this->day = $day;
    }

     public function setYear($year)
    { 
       $this->year = $year;
    }

    public function setSemester($semester)
    { 
       $this->semester= $semester;
    }

    public function setStartTime($Start_time)
    { 
       $this->Start_time= $Start_time;
    }

    public function setPriority($priority)
    { 
       $this->priority = $priority;
    }


public function insert(){
       $sql = "INSERT INTO $this->table(T_ID,course_id,time_slot_id,day,year,semester,Start_time,priority) VALUES(:T_ID,:course_id,:time_slot_id,:day,:year,:semester,:Start_time,:priority)";
       $stmt = DB::prepare($sql); 
       $stmt->bindParam(':T_ID',$this->T_ID);
       $stmt->bindParam(':course_id',$this->course_id);
       $stmt->bindParam(':time_slot_id',$this->time_slot_id);
       $stmt->bindParam(':day',$this->day);
       $stmt->bindParam(':year',$this->year);
       $stmt->bindParam(':semester',$this->semester);
       $stmt->bindParam(':Start_time',$this->Start_time);
       $stmt->bindParam(':priority',$this->priority);
       header("Location: request.php?msg=");
       return $stmt->execute();
  }
     
public function update($T_ID)
{
    $sql="UPDATE $this->table SET course_id=:course_id,time_slot_id=:time_slot_id,day=:day,year=:year,semester=:semester,Start_time=:Start_time,priority=:priority WHERE T_ID=:T_ID";

    $stmt = DB::prepare($sql); 
       $stmt->bindParam(':T_ID',$this->T_ID);
       $stmt->bindParam(':course_id',$this->course_id);
       $stmt->bindParam(':time_slot_id',$this->time_slot_id);
       $stmt->bindParam(':day',$this->day);
       $stmt->bindParam(':year',$this->year);
       $stmt->bindParam(':semester',$this->semester);
       $stmt->bindParam(':Start_time',$this->Start_time);
       $stmt->bindParam(':priority',$this->priority);
       header("Location: request.php?msg=");
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
         header("Location: request.php?msg=");
         return $stmt->execute();
   }

  }


   


?>