<?php   
    $title='Index';
    require 'includes/header.php';
?>

<!-- Body -->

<h1 class="text-center">Registration for IT Conference</h1>

<form method="get" action="success.php">
  <div class="form-row">
    <div class="form-group col-md-6">
        <label for="firstname">First Name</label>
        <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Enter your first name">
    </div>
    <div class="form-group col-md-6">
        <label for="lastname">Last Name</label>
        <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Enter your last name">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
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
        <label for="speciality">Speciality</label>
        <select id="speciality" class="form-control" name="speciality">
            <option selected>Choose...</option>
            <option value="Database Admin">Database Admin</option>
            <option value="Software Developer">Software Developer</option>
            <option value="Web Administrator">Web Administrator</option>
            <option value="Other">Other</option>
        </select>
    </div>
  </div>
  <button type="submit" class="btn btn-secondary btn-lg btn-block">Submit</button>
</form>

<!-- Ending of body -->

