<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employees_List extends CI_Model {

    public function add_Employee($user_data)
    {
        $this->db->insert('employees', $user_data);   
    }    

}

/* End of file ModelName.php */
?>