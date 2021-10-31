<?php        
defined('BASEPATH') OR exit('No direct script access allowed');

if(!$_SESSION['u_name']){
    redirect('home','refresh');
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
      body{
      background: #aaa;
    }
    .submit-btn{
      background: #cce;
    }
    </style>
    
    <title>Attendance - View Records</title>
  </head>
  <body>

  <?php 
        $this->load->view('dash/inc/nav');
  ?>

`<table class="table table-striped table-dark">
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
        <td><a href="<?php echo site_url(); ?>employees/single_employee/<?php echo $employee->e_id; ?> " class="btn btn-info btn-xs btn-block">Details</></td>
                        <td><a href="<?php echo site_url(); ?>employees/update_employee/<?php echo $employee->e_id; ?> " class="btn btn-warning btn-block btn-xs">Edit</a></td>
                        <td><a href="<?php echo site_url(); ?>employees/delete_employee/<?php echo $employee->e_id; ?> "" class="btn btn-danger btn-block btn-xs">Delete</a></td>            
                      </tr>
                      <?php
                    }  ?>
</table>
</div>

  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>