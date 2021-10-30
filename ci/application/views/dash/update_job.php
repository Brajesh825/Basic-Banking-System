<?php        
defined('BASEPATH') OR exit('No direct script access allowed');

if(!$_SESSION['u_name']){
    redirect('home','refresh');
}
$id=$this->uri->segment(3);
?>       

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Job</title>
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
                <div class="panel-heading">Add Jobs</div>
                <div class="panel-body">
                <?php echo form_open('jobs/update_process_jobs/'.$id,'class="form-horizontal"');?>
                  <?php
                      $job_list = $this->db->get_where('jobs',array('j_id' => $id));

                      foreach ($job_list->result() as $job) {
                  ?>
                  <div class="form-group">
                      <label class="col-sm-2 control-label">Job Name</label>
                      <div class="col-sm-6">
                         <input type="text" name="j_name" value="<?php echo $job->j_name; ?>" class="form-control" placeholder="Job Name">
                      </div>
                  </div>
                  <?php } ?>
                  <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">
                         <input type="submit" name="update_job" class="btn btn-warning" value="Update Job">
                      </div>
                  </div>
              </form>
              </div>
            </div>
        </div>
        </div> <!-- row -->
    </div> <!-- container -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
  </body>
</html>