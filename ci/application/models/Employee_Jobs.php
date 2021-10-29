<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee_Jobs extends CI_Model {

    public function add_jobs($user_data)
    {
        $this->db->insert('jobs', $user_data);   
    }    

}

/* End of file ModelName.php */
?>