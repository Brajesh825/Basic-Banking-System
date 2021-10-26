<?php   
    $title='Index';
    require 'includes/header.php';
    require_once './db/conn.php';

    $results = $crud->getSpecialty();
?>

<!-- Body -->

<h1 class="text-center">Registration for IT Conference</h1>
<br>
<form method="post" action="success.php">
  <div class="form-row">
    <div class="form-group col-md-6">
        <label for="firstname">First Name</label>
        <input required type="text" class="form-control" id="firstname" name="firstname" placeholder="Enter your first name">
    </div>
    <div class="form-group col-md-6">
        <label for="lastname">Last Name</label>
        <input required type="text" class="form-control" id="lastname" name="lastname" placeholder="Enter your last name">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
    <label for="email">Email address</label>
    <input required type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group col-md-6">
        <label for="contact">Contact No.</label>
        <input type="number" class="form-control" id="contact" name="contact" placeholder="Enter your mobile number">
    </div>
  </div> 
  <div class="form-row">
    <div class="form-group col-md-6">
        <label for="dob">Date of Birth</label>
        <input type="date" class="form-control" id="dob" name="dob">
    </div>
    <div class="form-group col-md-6">
        <label for="specialty">Speciality</label>
        <select id="specialty" class="form-control" name="specialty">
            <?php while($r = $results->fetch(PDO::FETCH_ASSOC)){ ?>
            <option value=<?php echo $r['specialty_id'] ?>><?php echo $r['name']?></option>
            <?php } ?>
        </select>
    </div>
  </div>
  <button type="submit" name="submit" class="btn btn-lg btn-block submit-btn">Submit</button>
</form>

<!-- Ending of body -->

<?php require 'includes/footer.php'; ?>