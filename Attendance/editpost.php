<?php   
    require_once './db/conn.php';
    require_once './includes/auth_check.php';
    // Get values from post operation
    if(isset($_POST['submit'])){
        // extract value from the post array
        $id = $_POST['id'];
        $fname=$_POST['firstname'];
        $lname=$_POST['lastname'];
        $email=$_POST['email'];
        $contact=$_POST['contact'];
        $dob=$_POST['dob'];
        $specialty=$_POST['specialty'];

        // Call Crud function
        $result=$crud->editAttendee($id,$fname,$lname,$email,$contact,$dob,$specialty);

        // Redirect to index.php
        if($result){
            header("Location:viewrecords.php");
        }else{
            echo "error";
        }
    }
    else{
        echo "error";
    }

?>