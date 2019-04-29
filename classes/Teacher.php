<?php
include "main.php";

class Teacher extends Main{
	  protected $table='instructor';
	  private $T_ID;
	  private $name;
    private $salary;
    private $email_address;
    private $dob;
    private $pr_address;
    private $per_address;
    private $dept_name;
    private $grade;

  


    public function setTid($T_ID)
    { 
       $this->T_ID = $T_ID;
    }


    public function setName($name)
    { 
       $this->name = $name;
    }

    public function setSal($salary)
    { 
       $this->salary = $salary;
    }

    public function setEmail($email_address)
    { 
       $this->email_address = $email_address;
    }

    public function setDob($dob)
    { 
       $this->dob = $dob;
    }

    public function setPaddress($pr_address)
    { 
       $this->pr_address = $pr_address;
    }

    public function setPeaddress($per_address)
    { 
       $this->per_address = $per_address;
    }

    public function setDep($dept_name)
    { 
       $this->dept_name = $dept_name;

    }

    public function setGrade($grade)
    { 
       $this->grade = $grade;
    }

   


public function insert(){
       $sql = "INSERT INTO $this->table(T_ID,name,salary,email_address,dob,pr_address,per_address,dept_name,grade) VALUES(:T_ID,:name,:salary,:email_address,:dob,:pr_address,:per_address,:dept_name,:grade)";
       $stmt = DB::prepare($sql); 
       $stmt->bindParam(':T_ID',$this->T_ID);
       $stmt->bindParam(':name',$this->name);
       $stmt->bindParam(':salary',$this->salary);
       $stmt->bindParam(':email_address',$this->email_address);
       $stmt->bindParam(':dob',$this->dob);
       $stmt->bindParam(':pr_address',$this->pr_address);
       $stmt->bindParam(':per_address',$this->per_address);
       $stmt->bindParam(':dept_name',$this->dept_name);
       $stmt->bindParam(':grade',$this->grade);
       header("Location: index.php?msg=");
    
       return $stmt->execute();

	}
     
public function update($T_ID)
{
    $sql="UPDATE $this->table SET name=:name,salary=:salary,email_address=:email_address,dob=:dob,pr_address=:pr_address,per_address=:per_address,dept_name=:dept_name,grade=:grade WHERE T_ID=:T_ID";

    $stmt = DB::prepare($sql); 
       $stmt->bindParam(':T_ID',$this->T_ID);
       $stmt->bindParam(':name',$this->name);
       $stmt->bindParam(':salary',$this->salary);
       $stmt->bindParam(':email_address',$this->email_address);
       $stmt->bindParam(':dob',$this->dob);
       $stmt->bindParam(':pr_address',$this->pr_address);
       $stmt->bindParam(':per_address',$this->per_address);
       $stmt->bindParam(':dept_name',$this->dept_name);
       $stmt->bindParam(':grade',$this->grade);
      header("Location: index.php?msg=");
       return $stmt->execute();

}




   

}
?>