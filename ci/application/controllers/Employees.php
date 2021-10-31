 <?php


    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Employees extends CI_Controller {
    

        public function __construct()
        {
            parent::__construct();
            $this->load->model('Employees_List');
        }

        public function index()
        {
            $this->load->view('dash/employees_list');
            
        }
        public function single_employee($e_id){
            $this->load->view('dash/single_employee',$e_id);
        }
        
        public function add_employee()
        {
            $this->load->view('dash/add_employee');   
        }
        public function add_employee_process()
        {
            if( $this->input->post('add_employee'))
            {
                $e_name= $this->input->post('e_name');
                $e_email= $this->input->post('e_email');
                $e_phone= $this->input->post('e_phone');
                $e_job= $this->input->post('e_job');

                $employee_data = array(
                    'e_name' => $e_name,
                    'e_email' => $e_email,
                    'e_phone' => $e_phone,
                    'e_job' => $e_job,
                );
                $this->Employees_List->add_employee($employee_data);
            }
            redirect('employees/','refresh');
        }
        public function update_employee_process($e_id)
        {
            if( $this->input->post('update_employee'))
            {
                $e_name= $this->input->post('e_name');
                $e_email= $this->input->post('e_email');
                $e_phone= $this->input->post('e_phone');
                $e_job= $this->input->post('e_job');

                $employee_data = array(
                    'e_name' => $e_name,
                    'e_email' => $e_email,
                    'e_phone' => $e_phone,
                    'e_job' => $e_job,
                );
                $this->db->where('e_id',$e_id);
                $this->db->update('employees',$employee_data);
            }
            redirect('employees/','refresh');
        }

        public function update_employee($e_id)
        {
            $this->load->view('dash/update_employee',$e_id);
            
        }
        public function delete_employee($e_id)
        {
            $this->db->where('e_id', $e_id);
            $this->db->delete('employees');

            redirect('employees','refresh');
        }
    }
    
    /* End of file Controllername.php */
    