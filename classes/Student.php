<?php

include "DB.php";

class Student {
    protected $table='student';
    private $ID;
    private $name;
    private $dept_name;
    private $tot_cred;
    private $T_ID;

private static $instance = null;
  
  private function __construct()
  {
   
  }
 
  
  public static function getInstance()
  {
    if (self::$instance == null)
    {
      self::$instance = new Student();
    }
 
    return self::$instance;

    
  }

    public function setId($ID)
    { 
       $this->ID = $ID;
    }


    public function setName($name)
    { 
       $this->name = $name;
    }


    public function setDep($dept_name)
    { 
       $this->dept_name = $dept_name;

    }

    public function setTot_cred($tot_cred)
    { 
       $this->tot_cred = $tot_cred;
    }

     public function setT_ID($T_ID)
    { 
       $this->T_ID = $T_ID;
    }


public function insert(){
       $sql = "INSERT INTO $this->table(ID,name,dept_name,tot_cred,T_ID) VALUES(:ID,:name,:dept_name,:tot_cred,:T_ID)";
       $stmt = DB::prepare($sql); 
       $stmt->bindParam(':ID',$this->ID);
       $stmt->bindParam(':name',$this->name);
       $stmt->bindParam(':dept_name',$this->dept_name);
       $stmt->bindParam(':tot_cred',$this->tot_cred);
       $stmt->bindParam(':T_ID',$this->T_ID);
       header("Location: student.php?msg=");
       return $stmt->execute();
  }
     
public function update($ID)
{
    $sql="UPDATE $this->table SET name=:name,dept_name=:dept_name,tot_cred=:tot_cred,T_ID=:T_ID WHERE ID=:ID";

    $stmt = DB::prepare($sql); 
       $stmt->bindParam(':ID',$this->ID);
       $stmt->bindParam(':name',$this->name);
       $stmt->bindParam(':dept_name',$this->dept_name);
       $stmt->bindParam(':tot_cred',$this->tot_cred);
       $stmt->bindParam(':T_ID',$this->T_ID);
       header("Location: student.php?msg=");
       return $stmt->execute();
}

 public function readById($ID)
    {
         $sql = "SELECT * FROM $this->table WHERE ID=:ID";
         $stmt = DB::prepare($sql); 
         $stmt->bindParam(':ID',$ID);
         $stmt->execute();
         return $stmt ->fetch();
    } 

   
public function readAll(){
       $sql = "SELECT * FROM $this->table";
       $stmt = DB::prepare($sql); 
       $stmt->execute();
       return $stmt ->fetchAll();
  }



   public function delete($ID)
   {
         $sql = "DELETE FROM $this->table WHERE ID=:ID";
         $stmt = DB::prepare($sql); 
         $stmt->bindParam(':ID',$ID);
         header("Location: student.php?msg=");
         return $stmt->execute();
   }



   

  }


   


?>