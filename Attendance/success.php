<?php   
    $title='Success';
    require 'includes/header.php';
?>
    <h1 class="text-center text-success">You Have Been Registered</h1>

    <div class="card"  style="width: 22rem;">
        <div class="card-body text-center">
            <h5 class="card-title"><?php echo $_GET['firstname']." ".$_GET['lastname'];?></h5>
            <h6 class="card-text"><?php echo $_GET['speciality'];?></h6>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Email: <?php echo $_GET['email'];?></li>
            <li class="list-group-item">Contact: <?php echo $_GET['contact'];?></li>
            <li class="list-group-item">Dob: <?php echo $_GET['dob'];?></li>
        </ul>
    </div>

    <?php
        
    ?>

<?php require 'includes/footer.php'; ?>