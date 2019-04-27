<?php
class Pengadaan extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->model('model_pengadaan');
        chek_session();
    }
    
    function index(){
        $this->load->library('pagination');
        $config['base_url'] = base_url().'index.php/kategori/index/';
        $config['total_rows'] = $this->model_pengadaan->tampilkan_data()->num_rows();
        $config['per_page'] = 3; 
        $this->pagination->initialize($config); 
        $data['paging']     =$this->pagination->create_links();
        $halaman            =  $this->uri->segment(3);
        $halaman            =$halaman==''?0:$halaman;
        $data['record']     =    $this->model_pengadaan->tampilkan_data_paging($halaman,$config['per_page']);
        $this->template->load('template','pengadaan/lihat_data',$data);
    }
    
    function post()
    {
        if(isset($_POST['submit'])){
            // proses post
            $id       =   $this->input->post('id');
            $nama_paket   =   $this->input->post('nama_paket');
            $unit      =   $this->input->post('unit');
            $pagu      =   $this->input->post('pagu');
            $tahap      =   $this->input->post('tahap');
            $tanggal      =   $this->input->post('tanggal');
            $metode      =   $this->input->post('metode');
            $lokasi      =   $this->input->post('lokasi');
            $sumber      =   $this->input->post('sumber');
            $data       = array('id'=>$id,
                                'nama_paket'=>$nama_paket,
                                'unit'=>$unit,
                                'pagu'=>$pagu,
                                'tahap'=>$tahap,
                                'tanggal'=>$tanggal,
                                'metode'=>$metode,
                                'lokasi'=>$lokasi,
                                'sumber'=>$sumber);
            $this->model_pengadaan->post($data);
            redirect('pengadaan');
        }
        else{
            //$this->load->view('post/form_input');
            $this->template->load('template','pengadaan/form_input');
        }
    }

    function jadwal()
    {
        if (isset($_POST['submit'])) {
            $this->model_pengadaan->post();
            redirect('pengadaan');
        }
        else{
            //$this->load->view('kategori/form_input');
            $this->template->load('template','pengadaan/jadwal_pengadaan');
        }
    }
    
    function edit()
    {
        if(isset($_POST['submit'])){
            // proses kategori
            $id       =   $this->input->post('id');
            $nama_paket   =   $this->input->post('nama_paket');
            $unit      =   $this->input->post('unit');
            $pagu      =   $this->input->post('pagu');
            $tahap      =   $this->input->post('tahap');
            $tanggal      =   $this->input->post('tanggal');
            $metode      =   $this->input->post('metode');
            $lokasi      =   $this->input->post('lokasi');
            $sumber      =   $this->input->post('sumber');
            $data       = array('id'=>$id,
                                'nama_paket'=>$nama_paket,
                                'unit'=>$unit,
                                'pagu'=>$pagu,
                                'tahap'=>$tahap,
                                'tanggal'=>$tanggal,
                                'metode'=>$metode,
                                'lokasi'=>$lokasi,
                                'sumber'=>$sumber);
            $this->model_pengadaan->edit($data);            
            redirect('pengadaan');
        }
        else{
            $id=  $this->uri->segment(3);
            $data['record']=  $this->model_pengadaan->get_one($id)->row_array();
            //$this->load->view('kategori/form_edit',$data);
            $this->template->load('template','pengadaan/form_edit',$data);
        }
    }
    
    function delete()
    {
        $id=  $this->uri->segment(3);
        $this->model_pengadaan->delete($id);
        redirect('pengadaan');
    }
}