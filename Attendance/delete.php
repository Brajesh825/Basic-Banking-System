<?php   
    $title='Delete Record';
    require_once './includes/auth_check.php';
    require_once './db/conn.php';

    if(!isset($_GET['id'])){
        include './includes/errormessage.php';
        header("Location: viewrecords.php");
    }else{
        // Get id value
        $id=$_GET['id'];
        // Call delete function
        $result=$crud->deleteAttendee($id);

        if($result){
            header("Location:viewrecords.php");
        }else{
            header("Location:viewrecords.php");
        }
    }

?>