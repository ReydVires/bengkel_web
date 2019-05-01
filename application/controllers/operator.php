<?php
class operator extends ci_controller{
    
   function __construct() {
        parent::__construct();
        $this->load->model('model_operator');
        chek_session();
    }
    
    function index()
    {
        $data['record'] =  $this->model_operator->tampildata();
        //$this->load->view('operator/lihat_data',$data);
        $this->template->load('template','operator/lihat_data',$data);
    }
    
    function post()
    {
        if(isset($_POST['submit'])){
            // proses data
            $nama       =  $this->input->post('nama',true);
            $username   =  $this->input->post('username',true);
            $password   =  $this->input->post('password',true);
            $data       =  array(   'name'=>$nama,
                                    'username'=>$username,
                                    'password'=>md5($password));
            $this->db->insert('admin',$data);
            redirect('operator');
        }
        else{
            //$this->load->view('operator/form_input');
            $this->template->load('template','operator/form_input');
        }
    }
    
    function edit()
    {
        if(isset($_POST['submit'])){
            $id         =  $this->input->post('username',true);
            $nama       =  $this->input->post('nama',true);
            $username   =  $this->input->post('username',true);
            $password   =  $this->input->post('password',true);
            if(empty($password)){
                 $data  =  array(   'name'=>$nama,
                                    'username'=>$username);
            }
            else{
                  $data =  array(   'name'=>$nama,
                                    'username'=>$username,
                                    'password'=>md5($password));
            }
             $this->db->where('username',$id);
             $this->db->update('admin',$data);
             redirect('operator');
        }
        else{
            $id=  $this->uri->segment(3);
            $data['record']=  $this->model_operator->get_one($id)->row_array();
            //$this->load->view('operator/form_edit',$data);
            $this->template->load('template','operator/form_edit',$data);
        }
    }
    
    
    function delete()
    {
        $id=  $this->uri->segment(3);
        $this->db->where('username',$id);
        $this->db->delete('admin');
        redirect('operator');
    }
}