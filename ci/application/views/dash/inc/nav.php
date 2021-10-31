<div class="container">
  <nav class="navbar navbar-expand-lg navbar-dark">
  <a class="navbar-brand" href="#">LOGO</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Employees
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo site_url(); ?>employees/add_employee">Add Employee</a>
          <a class="dropdown-item" href="<?php echo site_url(); ?>employees">View Employee</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Jobs
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo site_url(); ?>jobs">Add Jobs</a>
          <a class="dropdown-item" href="<?php echo site_url(); ?>jobs/view_jobs">View Jobs</a>
        </div>
      </li>
    </ul>
    <div class="navbar-nav ml-auto">
    <a class="nav-item nav-link" href="#"><span>Hello admin! </span> <span class="sr-only">(current)</span></a>
    <a class="nav-item nav-link" href="<?php echo site_url(); ?>home/logout">Logout <span class="sr-only">(current)</span></a>
    </div>
  </div>
  </nav>
