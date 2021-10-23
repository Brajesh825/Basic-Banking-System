<?php   
    $title='Index';
    require 'includes/header.php';
    require_once './db/conn.php';

    // Get atteendee by id
    if(!isset($_GET['id'])){
        echo '<h1 class="text-danger">Please check details and try again</h1>';        
    }else{
        $id = $_GET['id'];
        $result = $crud->getAttendeeDetails($id);
        if(!$result){
            echo '<h1 class="text-danger">Please check details and try again</h1>';        
        }else
        {
?>

<div class="card"  style="width: 22rem;">
        <div class="card-body text-center">
            <h5 class="card-title"><?php echo $result['firstname']." ".$result['lastname'];?></h5>
            <h6 class="card-subtitle"><?php echo $result['name'];?></h6>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Email: <?php echo $result['emailaddress'];?></li>
            <li class="list-group-item">Contact: <?php echo $result['contactnumber'];?></li>
            <li class="list-group-item">Dob: <?php echo $result['dateofbirth'];?></li>
        </ul>
 </div>

<?php }} ?>
<?php require 'includes/footer.php'; ?>