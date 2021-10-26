<?php   
    $title='Index';
    require 'includes/header.php';
    require_once './includes/auth_check.php';
    require_once './db/conn.php';

    // Get atteendee by id
    if(!isset($_GET['id'])){
       include './includes/errormessage.php';
       header("Location:viewrecords.php");      
    }else{
        $id = $_GET['id'];
        $result = $crud->getAttendeeDetails($id);
        if(!$result){
            include './includes/errormessage.php';
        }else
        {
?>

<div class="card"  style="width: 22rem; margin:auto;" >
        <div class="card-body text-center">
            <h5 class="card-title"><?php echo $result['firstname']." ".$result['lastname'];?></h5>
            <h6 class="card-subtitle"><?php echo $result['name'];?></h6>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Email: <?php echo $result['emailaddress'];?></li>
            <li class="list-group-item">Contact: <?php echo $result['contactnumber'];?></li>
            <li class="list-group-item">Dob: <?php echo $result['dateofbirth'];?></li>
        </ul>
        <br>
        <tr>
            <a href="viewrecords.php" class="btn btn-info">Back to List</a>
            <a href="edit.php?id=<?php echo $result['attendee_id']; ?>" class="btn btn-warning">Edit</a>
            <a onclick="return confirm('Are you sure you want to delete this record?');"
            href="delete.php?id=<?php echo $result['attendee_id']; ?>" class="btn btn-danger">Delete
            </a>
        </tr>
 </div>
 


<?php }} ?>
<?php require 'includes/footer.php'; ?>