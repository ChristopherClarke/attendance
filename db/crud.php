<?php 
Class crud{
    private $db;


    function __construct($conn){
        $this->db=$conn;
    }

    public function insertAttendees($firstname,$lastname,$dob,$email,$contact,$specialty){
        try{
    $sql="INSERT INTO attendee(firstname,lastname,dateofbirth,emailaddress,contactnumber,specialty_id) 
    VALUES (:firstname,:lastname,:dob,:email,:contact,:specialty)";
    $stmt =$this-> db->prepare($sql);
    $stmt->bindparam(':firstname',$firstname);
    $stmt->bindparam(':lastname',$lastname);
    $stmt->bindparam(':dob',$dob);
    $stmt->bindparam(':email',$email);
    $stmt->bindparam(':contact',$contact);
    $stmt->bindparam(':specialty',$specialty);

    $stmt->execute();
    return true;

        }catch (PDOException $e){
echo $e->getMessage();
return false;
        }
    }


    public function editAttendee($id,$firstname,$lastname,$dob,$email,$contact,$specialty){

        try{
        
        $sql = "UPDATE  'attendee' SET 'firstname'=:firstname, 'lastname'=:lastname, 
        'dateofbirth'=:dob, 'emailaddress'=:email, 'contactnumber=:contact,
         'specialty_id'=:specialty WHERE attendee_id=:id";
        
       
        $stmt =$this-> db->prepare($sql);
        $stmt->bindparam(':id',$id);
        $stmt->bindparam(':firstname',$firstname);
        $stmt->bindparam(':lastname',$lastname);
        $stmt->bindparam(':dob',$dob);
        $stmt->bindparam(':email',$email);
        $stmt->bindparam(':contact',$contact);
        $stmt->bindparam(':specialty',$specialty);
        
        $stmt->execute();
        return true;
        
        }catch (PDOException $e){
            echo $e->getMessage();
            return false;
             
        }
        }


    public function getAttendees(){
        try{
            $sql= "SELECT * FROM `attendee` a inner join specialties  s on a.specialty_id = s.specialty_id";
            $result= $this->db->query($sql);
            return $result;
        }
        catch (PDOException $e){
            echo $e->getMessage();
            return false;

        }
       
    }

    public  function deleteAttendee($id){
        try {
            $sql ="delete from 'attendee' where attendee_id = :id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindparam(':id', $id);
            $stmt->execute();
            return true;

        }catch (PDOException $e){
            echo $e->getMessage();
            return false;
             
        }
    }


    public function getSpecialties(){
        try {
            $sql= "SELECT * FROM `attendee`;";
            $result= $this->db->query($sql);
            return $result;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }


    public function getAttendeesDetails($id){
    
        $sql="select * from attendee a inner join specialties  s on a.specialty_id = s.specialty_id where attendee_id=:id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindparam(':id', $id);
        $stmt->execute();
        $result= $stmt->fetch();
        return $result;
    }
}






?> 