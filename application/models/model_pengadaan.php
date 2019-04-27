<?php
class Model_Pengadaan extends CI_Model{
    
    function tampilkan_data(){
        
        return $this->db->get('pengadaan_bengkel');
    }
    
    function tampilkan_data_paging($halaman,$batas)
    {
        return $this->db->query("select * from pengadaan_bengkel");
    }
    
    function post(){
        $this->db->insert('pengadaan_bengkel',$data);
    }
    
    
    function edit()
    {
        $this->db->where('id',$this->input->post('id'));
        $this->db->update('pengadaan_bengkel',$data);
    }
    
    function get_one($id)
    {
        $param  =   array('id'=>$id);
        return $this->db->get_where('pengadaan_bengkel',$param);
    }
    
    
    function delete($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('pengadaan_bengkel');
    }
}