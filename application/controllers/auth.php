<?php
class auth extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->model('model_operator');
    }
    
    function login()
    {
        if(isset($_POST['submit'])){
            
            // proses login disini
            $username   =   $this->input->post('username');
            $password   =   $this->input->post('password');
            $hasil      =   $this->model_operator->login($username,md5($password));
            $admin_name   =   $this->model_operator->get_name($username);
            if($hasil==1)
            {
                // update last login
                $this->db->where('username',$username);
                $this->db->update('admin',array('last_login'=>date('Y-m-d')));
                $this->session->set_userdata(array(
                    'status_login'=>'oke',
                    'username'=>$username,
                    'name'=>$admin_name)
                );
                redirect('dashboard');
            }
            else{
                redirect('auth/login');
            }
        }
        else{
            chek_session_login();
            $this->load->view('form_login');
        }
    }
    
    
    function logout()
    {
        $this->session->sess_destroy();
        redirect('auth/login');
    }
}