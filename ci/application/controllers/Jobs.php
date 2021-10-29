<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Jobs extends CI_Controller {
    
        public function __construct()
        {
            parent::__construct();
            $this->load->model('Employee_Jobs');
        }

        public function index()
        {
            $this->load->view('dash/add_job');
        }
        
        public function add_jobs()
        {
            if( $this->input->post('add_job'))
            {
                $j_name= $this->input->post('j_name');

                $jobs_data = array(
                    'j_name' => $j_name
                );

                $this->Employee_Jobs->add_jobs($jobs_data);
            }
            redirect('dash','refresh');
        }
    }
    
    /* End of file Controllername.php */
    
?>