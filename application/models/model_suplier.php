<?php
class Model_suplier extends CI_Model{
    
    function tampilkan_data(){
        
        return $this->db->get('suplier');
    }
    
    function tampilkan_data_paging($halaman,$batas)
    {
        return $this->db->query("select * from suplier");
    }
    
    function post(){
        $data = array(
            'nama' =>  $this->input->post('suplier'),
            'asal'=> $this->input->post('asal'),
            'id'=> $this->input->post('id')
        );
        $this->db->insert('suplier',$data);
    }
    
    
    function edit()
    {
        $data = array(
            'nama' =>  $this->input->post('suplier'),
            'asal'=> $this->input->post('asal')
        );
        $this->db->where('id',$this->input->post('id'));
        $this->db->update('suplier',$data);
    }
    
    function get_one($id)
    {
        $param  =   array('id'=>$id);
        return $this->db->get_where('suplier',$param);
    }
    
    
    function delete($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('suplier');
    }
}