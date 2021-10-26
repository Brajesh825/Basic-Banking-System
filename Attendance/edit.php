<?php   
    $title='Edit Record';
    require 'includes/header.php';
    require_once './includes/auth_check.php';
    require_once './db/conn.php';

    $results = $crud->getSpecialty();

    if(!isset($_GET['id'])){
       include 'includes/errormessage.php';
    }else{
        $id = $_GET['id'];
        $attendee = $crud->getAttendeeDetails($id);
        if(!$attendee){
            include 'includes/errormessage.php';
            header("Location: viewrecords.php");
        }else{
?>

<!-- Body -->

<h1 class="text-center">Registration for IT Conference</h1>

<form method="post" action="editpost.php">
  <input type="hidden" name="id" value ="<?php echo $attendee['attendee_id']; ?>">
  <div class="form-row">
    <div class="form-group col-md-6">
        <label for="firstname">First Name</label>
        <input type="text" class="form-control"value=<?php echo $attendee['firstname'];?> id="firstname" name="firstname" placeholder="Enter your first name">
    </div>
    <div class="form-group col-md-6">
        <label for="lastname">Last Name</label>
        <input type="text" class="form-control"value=<?php echo $attendee['lastname'];?> id="lastname" name="lastname" placeholder="Enter your last name">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
    <label for="email">Email address</label>
    <input type="email" class="form-control"value=<?php echo $attendee['emailaddress'];?> id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group col-md-6">
        <label for="contact">Contact No.</label>
        <input type="number" class="form-control"value=<?php echo $attendee['contactnumber'];?> id="contact" name="contact" placeholder="Enter your mobile number">
    </div>
  </div> 
  <div class="form-row">
    <div class="form-group col-md-6">
        <label for="dob">Date of Birth</label>
        <input type="date" class="form-control"value=<?php echo $attendee['dateofbirth'];?> id="dob" name="dob">
    </div>
    <div class="form-group col-md-6">
        <label for="specialty">Speciality</label>
        <select id="specialty" class="form-control" name="specialty">
            <?php while($r = $results->fetch(PDO::FETCH_ASSOC)){ ?>
                <option value="<?php echo $r['specialty_id'] ?>"<?php if($r['specialty_id']==$attendee['specialty_id']){echo "selected";} ?>><?php echo $r['name']?></option>
            <?php } ?>
        </select>
    </div>
  </div>
  <button type="submit" name="submit" class="btn btn-success btn-lg btn-block">Save Changes</button>
</input>

<!-- Ending of body -->
<?php }} ?>
<?php require 'includes/footer.php'; ?>