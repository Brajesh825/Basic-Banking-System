<?php        
defined('BASEPATH') OR exit('No direct script access allowed');

if(!$_SESSION['u_name']){
    redirect('home','refresh');
}
?>       

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>

  <!-- dash nav -->
    <?php 
        $this->load->view('dash/inc/nav');
    ?>
  <!-- dash nav -->
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-3">
      <?php 
        $this->load->view('dash/inc/sidebar');
      ?>
      </div>
      <div class="col-lg-9 col-md-9">
          <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Details</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                <?php
                    $employees_list = $this->db->get('employees');
                    foreach ($employees_list->result() as $employee) {
                      ?>
                      <tr>
                        <td><?php echo $employee->e_id; ?></td>
                        <td><?php echo $employee->e_name; ?></td>
                        <td><a href="<?php echo site_url(); ?>employees/view/<?php echo $employee->e_id; ?> " class="btn btn-info btn-xs btn-block">Details</></td>
                        <td><a href="<?php echo site_url(); ?>employees/update/<?php echo $employee->e_id; ?> " class="btn btn-warning btn-block btn-xs">Edit</a></td>
                        <td><a href="<?php echo site_url(); ?>employees/delete/<?php echo $employee->e_id; ?> "" class="btn btn-danger btn-block btn-xs">Delete</a></td>            
                      </tr>
                      <?php
                    }
                ?>
          </table>
      </div>
    </div> <!-- row -->
  </div> <!-- container -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
  </body>
</html>
