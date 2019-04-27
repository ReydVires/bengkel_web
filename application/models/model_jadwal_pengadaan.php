<?php
class model_jadwal_pengadaan extends ci_model{
    
    function tampil_data()
    {
        // $query= "SELECT b.barang_id,b.nama_barang,b.harga,kb.nama_kategori
        //         FROM barang as b,kategori_barang as kb
        //         WHERE b.kategori_id=kb.kategori_id";
        return $this->db->query("select * from jadwal_pengadaan");
    }
    
    function post($data)
    {
        $this->db->insert('jadwal_pengadaan', $data);
    }
    
    function get_one($id)
    {
        $param  =   array('id'=>$id);
        return $this->db->get_where('jadwal_pengadaan', $param);
    }
    
    function edit($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('jadwal_pengadaan', $data);
    }    
    
    function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('jadwal_pengadaan');
    }
}