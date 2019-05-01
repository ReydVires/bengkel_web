<?php
class Barang extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->model('model_barang');
        chek_session();
    }


    function index()
    {
        $data['stat'] = $this->model_barang->get_all_status();
        $data['record'] = $this->model_barang->tampil_data();
        $this->template->load('template','barang/lihat_data',$data);
    }
    
    function post()
    {
        if(isset($_POST['submit'])){
            // proses barang
            $id = $this->input->post('kode');
            $nama = $this->input->post('nama');
            $status = $this->input->post('status');
            $sup = $this->input->post('suplier');
            $admin_id = $this->input->post('admin_id');
            $pengadaan_id = $this->input->post('pengadaan_id');
            $data = array('kode'=>$id,
                            'name'=>$nama,
                            'status'=>$status,
                            'admin_id'=>'admin',
                            'suplier_id'=>$sup,
                            'pengadaan_id'=>$pengadaan_id);
            $this->model_barang->post($data);
            redirect('barang');
        }
        else{
            $this->load->model('model_suplier');
            $data['suplier']=  $this->model_suplier->tampilkan_data()->result();
            $this->load->model('model_pengadaan');
            $data['pengadaan']= $this->model_pengadaan->tampilkan_data()->result();
            //$this->load->view('barang/form_input',$data);
            $data['stat'] = $this->model_barang->get_all_status();
            $this->template->load('template','barang/form_input',$data);
        }
    }
    
    
    function edit()
    {
       if(isset($_POST['submit'])){
            // proses barang
            $id         =   $this->input->post('kode');
            $nama       =   $this->input->post('nama');
            $status   =   $this->input->post('status');
            $sup   =   $this->input->post('suplier');
            $admin_id = $this->input->post('admin_id');
            $data       = array('kode'=>$id,
                                'name'=>$nama,
                                'status'=>$status,
                                'admin_id'=>'admin',
                                'suplier_id'=>$sup,
                                'pengadaan_id'=>'P0001');
            $this->model_barang->edit($data,$id);
            redirect('barang');
        }
        else{
            $id=  $this->uri->segment(3);
            $this->load->model('model_suplier');
            $data['suplier'] =  $this->model_suplier->tampilkan_data()->result();
            $data['stat'] = $this->model_barang->get_all_status();
            $data['record']     =  $this->model_barang->get_one($id)->row_array();
            //$this->load->view('barang/form_edit',$data);
            $this->template->load('template','barang/form_edit',$data);
        }
    }
    
    
    function delete()
    {
        $id=  $this->uri->segment(3);
        $this->model_barang->delete($id);
        redirect('barang');
    }
}