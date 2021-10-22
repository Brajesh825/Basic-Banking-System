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
                echo $e->getMessege();
                return false;
            }
        }
        public function getAttendees(){
            $sql = "select * from `attendee`";
            $result = $this->db->query($sql);
            return $result;
        }

        public function getSpecialty(){
            $sql = "select * from `specialties`";
            $result = $this->db->query($sql);
            return $result;
        }

    }

?>