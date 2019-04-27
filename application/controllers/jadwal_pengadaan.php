<?php
class Jadwal_pengadaan extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->model('model_jadwal_pengadaan');
        chek_session();
    }


    function index()
    {
        $data['record'] = $this->model_jadwal_pengadaan->tampil_data();
        $this->template->load('template','jadwal_pengadaan/lihat_data',$data);
    }
    
    function post()
    {
        if(isset($_POST['submit'])){
            // proses barang
            $id       =   $this->input->post('id');
            $tahap   =   $this->input->post('tahap');
            $mulai      =   $this->input->post('mulai');
            $sampai      =   $this->input->post('sampai');
            $perubahan = $this->input->post('perubahan');
            $data       = array('id'=>$id,
                                'tahap'=>$tahap,
                                'mulai'=>$mulai,
                                'sampai'=>$sampai,
                                'perubahan'=>$perubahan);
            $this->model_jadwal_pengadaan->post($data);
            redirect('jadwal_pengadaan');
        }
        else{
            $this->load->model('model_jadwal_pengadaan');
            $data['jadwal_pengadaan']=  $this->model_jadwal_pengadaan->tampil_data()->result();
            $this->template->load('template','jadwal_pengadaan/form_input',$data);
        }
    }
    
    
    function edit()
    {
       if(isset($_POST['submit'])){
            // proses barang
            $id       =   $this->input->post('id');
            $tahap   =   $this->input->post('tahap');
            $mulai      =   $this->input->post('mulai');
            $sampai      =   $this->input->post('sampai');
            $perubahan = $this->input->post('perubahan');
            $data       = array('id'=>$id,
                                'tahap'=>$tahap,
                                'mulai'=>$mulai,
                                'sampai'=>$sampai,
                                'perubahan'=>$perubahan);
            $this->model_jadwal_pengadaan->edit($data,$id);
            redirect('jadwal_pengadaan');
        }
        else{
            $id=  $this->uri->segment(3);
            $this->load->model('model_jadwal_pengadaan');
            $data['record']     =  $this->model_jadwal_pengadaan->get_one($id)->row_array();
            //$this->load->view('barang/form_edit',$data);
            $this->template->load('template','jadwal_pengadaan/form_edit',$data);
        }
    }
    
    
    function delete()
    {
        $id=  $this->uri->segment(3);
        $this->model_jadwal_pengadaan->delete($id);
        redirect('jadwal_pengadaan');
    }
}