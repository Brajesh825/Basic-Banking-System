<?php   
    $title='Success';
    require 'includes/header.php';
    require_once './db/conn.php';

    if(isset($_POST['submit'])){
        // extract value from the post array
        $fname=$_POST['firstname'];
        $lname=$_POST['lastname'];
        $email=$_POST['email'];
        $contact=$_POST['contact'];
        $dob=$_POST['dob'];
        $specialty=$_POST['specialty'];
        // call function to insert and track if success or not
        $issuccess = $crud->insertAttendees($fname,$lname,$email,$contact,$dob,$specialty);

        if($issuccess){
            include './includes/successmessage.php';
        }else{
            include './includes/errormessage.php';
            header("Location:index.php");
        }
    }else{
        header("Location:index.php");
    }
?>
   
    <!-- This print out the value passes to the action page using method="post" -->
    <div class="card"  style="width: 22rem;">
        <div class="card-body text-center">
            <h5 class="card-title"><?php echo $_POST['firstname']." ".$_POST['lastname'];?></h5>
            <h6 class="card-subtitle"><?php echo $_POST['specialty'];?></h6>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Email: <?php echo $_POST['email'];?></li>
            <li class="list-group-item">Contact: <?php echo $_POST['contact'];?></li>
            <li class="list-group-item">Dob: <?php echo $_POST['dob'];?></li>
        </ul>
    </div>

<?php require 'includes/footer.php'; ?>