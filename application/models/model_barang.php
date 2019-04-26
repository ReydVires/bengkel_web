<?php
class model_barang extends ci_model{
    
    function tampil_data()
    {
        // $query= "SELECT b.barang_id,b.nama_barang,b.harga,kb.nama_kategori
        //         FROM barang as b,kategori_barang as kb
        //         WHERE b.kategori_id=kb.kategori_id";
        $query = "SELECT ab.id, ab.nama, ab.stok, ab.harga, s.nama as sup
            FROM alat_berat as ab, suplier as s
            WHERE s.id = ab.suplier_id";
        return $this->db->query($query);
    }
    
    function post($data)
    {
        $this->db->insert('alat_berat', $data);
    }
    
    function get_one($id)
    {
        $param  =   array('id'=>$id);
        return $this->db->get_where('alat_berat', $param);
    }
    
    function edit($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('alat_berat', $data);
    }    
    
    function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('alat_berat');
    }
}