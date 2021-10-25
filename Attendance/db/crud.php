<?php
    class crud{
        // Private database object
        private $db;

        //constructor to initialise a private variable to the database connection
        function __construct($con){
            $this->db=$con;
        }

        //function to insert a new record into the attendee database
        public function insertAttendees($fname,$lname,$email,$contact,$dob,$specialty){
            try {
                // define sql statement to be executed
                $sql = "INSERT INTO attendee(firstname,lastname,emailaddress,contactnumber,dateofbirth,specialty_id) VALUES (:fname,:lname,:email,:contact,:dob,:specialty)";
                // Prepare the sql statement for execution
                $stmt = $this->db->prepare($sql);
                // Bind all params to the actual value
                $stmt->bindparam(':fname',$fname);
                $stmt->bindparam(':lname',$lname);
                $stmt->bindparam(':email',$email);
                $stmt->bindparam(':contact',$contact);
                $stmt->bindparam(':dob',$dob);
                $stmt->bindparam(':specialty',$specialty);

                // Execute the sql statement
                $stmt->execute();
                return true;
            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }
        public function editAttendee($id,$fname,$lname,$email,$contact,$dob,$specialty){
            try {
                // define sql statement to be executed
                $sql = "UPDATE `attendee` SET `firstname`=:fname,`lastname`=:lname,`emailaddress`=:email,`contactnumber`=:contact,`dateofbirth`=:dob,`specialty_id`=:specialty WHERE `attendee_id`=:id";
                // Prepare the sql statement for execution
                $stmt = $this->db->prepare($sql);
                // Bind all params to the actual value
                $stmt->bindparam(':id',$id);
                $stmt->bindparam(':fname',$fname);
                $stmt->bindparam(':lname',$lname);
                $stmt->bindparam(':email',$email);
                $stmt->bindparam(':contact',$contact);
                $stmt->bindparam(':dob',$dob);
                $stmt->bindparam(':specialty',$specialty);

                // Execute the sql statement
                $stmt->execute();
                return true;
            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }
        public function getAttendees(){
            try {
                $sql = "select * from `attendee`a inner join specialties s on a.specialty_id = s.specialty_id ";
                $result = $this->db->query($sql);
                return $result;
            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }

        public function getAttendeeDetails($id){
            try{
                $sql = "select * from `attendee`a inner join specialties s on a.specialty_id = s.specialty_id where attendee_id = :id ";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':id',$id);
                $stmt->execute();
                $result= $stmt->fetch();
                return $result;
            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
        }
        }

        public function getSpecialty(){
            try{
                $sql = "select * from `specialties`";
                $result = $this->db->query($sql);
                return $result;
            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
        }
        }
        
        public function deleteAttendee($id){
            try {
                $sql = "delete from attendee where attendee_id = :id";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':id',$id);
                $result=$stmt->execute();
                return $result;
            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }

        }
    }

?>