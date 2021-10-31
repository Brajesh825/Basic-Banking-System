<?php        
defined('BASEPATH') OR exit('No direct script access allowed');

if(!$_SESSION['u_name']){
    redirect('home','refresh');
}
$id = $this->uri->segment(3);
?>       

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Employee</title>
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>

  <!-- dash nav -->
    <?php 
        $this->load->view('dash/inc/nav');
    ?>
  <!-- dash nav -->
  <!-- Sidebar -->
    <div class="container">
        <div class="row">
        <div class="col-lg-3 col-md-3">
          <!-- Sidebar  -->
        <?php 
            $this->load->view('dash/inc/sidebar');
        ?>
          <!-- Sidebar  -->
        </div>
        <div class="col-lg-9 col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">Add Employee</div>
                <div class="panel-body">
                <?php
                    $employee_details= $this->db->get_where('employees', array('e_id'=>$id));                                    
                    foreach ($employee_details ->result() as $employee) {
                ?>

                <?php echo form_open('employees/update_employee_process/'.$id,'class="form-horizontal"');?>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-6">
                           <input type="text" name="e_name" class="form-control" placeholder="Name" value="<?php echo $employee->e_name; ?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-6">
                           <input type="email" name="e_email" class="form-control" placeholder="Email" value="<?php echo $employee->e_email; ?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Phone</label>
                        <div class="col-sm-6">
                           <input type="number" name="e_phone" class="form-control" placeholder="Phone" value="<?php echo $employee->e_phone; ?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Job</label>
                        <div class="col-sm-6">
                           <select name="e_job" class="form-control input-sm" >
                              <?php
                                  $job_list = $this->db->get('jobs');
                                  foreach ($job_list->result() as $job) {
                              ?>
                                <option value="
                                 <?php echo $job->j_name; ?>"
                                 <?php 
                                  if($employee->e_job == $job->j_name)
                                  echo "selected"; ?>
                                 >
                                 <?php echo $job->j_name;?></option>
                              <?php
                                  }
                              ?>
                              </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                           <input type="submit" name="update_employee" class="btn btn-success" value="Update Employee">
                        </div>
                    </div>
                </form>
                <?php } ?>
                </div>
            </div>
        </div>
        </div> <!-- row -->
    </div> <!-- container -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
  </body>
</html>