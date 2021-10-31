<?php        
defined('BASEPATH') OR exit('No direct script access allowed');

if(!$_SESSION['u_name']){
    redirect('home','refresh');
}
$id=$this->uri->segment(3)

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
                <?php
                    $employees_detail = $this->db->get('employees',array('e_id'=>$id));
                    foreach ($employees_detail->result() as $employee) {
                      ?>
                      <tr>
                        <th>Date</th>
                        <td><?php echo $employee->e_date; ?></td>           
                      </tr>
                      <tr>
                        <th>Namee</th>
                        <td><?php echo $employee->e_name; ?></td>           
                      </tr>
                      <tr>
                        <th>Email</th>
                        <td><?php echo $employee->e_email; ?></td>           
                      </tr>
                      <tr>
                        <th>Phone</th>
                        <td><?php echo $employee->e_phone; ?></td>           
                      </tr>
                      <tr>
                        <th>Jobs</th>
                        <td><?php echo $employee->e_job; ?></td>           
                      </tr>
                      <tr>
                        <td colspan="2">
                        <a href="<?php echo site_url(); ?>employees/update_employee/<?php echo $id; ?> " class="btn btn-warning  btn-sm">Edit</a>
                        <a href="<?php echo site_url(); ?>employees/delete_employee/<?php echo $id; ?> "" class="btn btn-danger  btn-sm">Delete</a>
                        </td>
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
