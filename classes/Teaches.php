<?php
include "main.php";

class Teaches extends Main{
	  protected $table='teaches';
	  private $T_ID;
    private $sec_id;
    private $semester;
    private $year;
    private $course_id;


    public function setTid($T_ID)
    { 
       $this->T_ID = $T_ID;
    }


    public function setsec_id($sec_id)
    { 
       $this->sec_id = $sec_id;
    }

    public function setsemester($semester)
    { 
       $this->semester = $semester;
    }

    public function setyear($year)
    { 
       $this->year = $year;
    }

    public function setcourse_id($course_id)
    { 
       $this->course_id = $course_id;
    }

    


public function insert(){
       $sql = "INSERT INTO $this->table(T_ID,sec_id,semester,year,course_id) VALUES(:T_ID,:sec_id,:semester,:year,:course_id)";
       $stmt = DB::prepare($sql); 
       $stmt->bindParam(':T_ID',$this->T_ID);
       $stmt->bindParam(':sec_id',$this->sec_id);
       $stmt->bindParam(':semester',$this->semester);
       $stmt->bindParam(':year',$this->year);
       $stmt->bindParam(':course_id',$this->course_id);
       header("Location: teaches.php?msg=");
       return $stmt->execute();
	}
     
public function update($T_ID)
{
    $sql="UPDATE $this->table SET T_ID=:T_ID,sec_id=:sec_id,semester=:semester,year=:year,course_id=:course_id WHERE T_ID=:T_ID";

    $stmt = DB::prepare($sql); 
       $stmt->bindParam(':T_ID',$this->T_ID);
       $stmt->bindParam(':sec_id',$this->sec_id);
       $stmt->bindParam(':semester',$this->semester);
       $stmt->bindParam(':year',$this->year);
       $stmt->bindParam(':course_id',$this->course_id);
        header("Location: teaches.php?msg=");
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
          header("Location: teaches.php?msg=");
         return $stmt->execute();
   }


   

}
?>