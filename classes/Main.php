<?php
include "DB.php";

  abstract class Main{
  	protected $table;

  	abstract public function insert();
  	abstract public function update($T_ID);

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
         header("Location: index.php?msg=");
         return $stmt->execute();
   }

  }


?>