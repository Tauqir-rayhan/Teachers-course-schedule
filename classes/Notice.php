<?php

include "DB.php";

class Notice{
    protected $table='notice';
    private $nid;
    private $Sub;
    private $dept_name;
    private $discription;
    private $Date;


    public function setnid($nid)
    { 
       $this->nid = $nid;
    }


    public function setSub($Sub)
    { 
       $this->Sub= $Sub;
    }


    public function setdept_name($dept_name)
    { 
       $this->dept_name = $dept_name;

    }

    public function setdiscription($discription)
    { 
       $this->discription = $discription;
    }




public function insert(){
       $sql = "INSERT INTO $this->table(nid,Sub,dept_name,discription) VALUES(:nid,:Sub,:dept_name,:discription)";
       $stmt = DB::prepare($sql); 
       $stmt->bindParam(':nid',$this->nid);
       $stmt->bindParam(':Sub',$this->Sub);
       $stmt->bindParam(':dept_name',$this->dept_name);
       $stmt->bindParam(':discription',$this->discription);
       header("Location: notice.php?msg=");
       return $stmt->execute();
  }
     
public function update($nid)
{
    $sql="UPDATE $this->table SET nid=:nid,Sub=:Sub,dept_name=:dept_name,discription=:discription WHERE nid=:nid";

    $stmt = DB::prepare($sql); 
      $stmt = DB::prepare($sql); 
       $stmt->bindParam(':nid',$this->nid);
       $stmt->bindParam(':Sub',$this->Sub);
       $stmt->bindParam(':dept_name',$this->dept_name);
       $stmt->bindParam(':discription',$this->discription);
      header("Location: notice.php?msg=");
       return $stmt->execute();
}

 public function readById($nid)
    {
         $sql = "SELECT * FROM $this->table WHERE nid=:nid";
         $stmt = DB::prepare($sql); 
         $stmt->bindParam(':nid',$nid);
         $stmt->execute();
         return $stmt ->fetch();
    } 

   
public function readAll(){
       $sql = "SELECT * FROM $this->table";
       $stmt = DB::prepare($sql); 
       $stmt->execute();
       return $stmt ->fetchAll();
  }



   public function delete($nid)
   {
         $sql = "DELETE FROM $this->table WHERE nid=:nid";
         $stmt = DB::prepare($sql); 
         $stmt->bindParam(':nid',$nid);
         header("Location: notice.php?msg=");
         return $stmt->execute();
   }

  }


   


?>