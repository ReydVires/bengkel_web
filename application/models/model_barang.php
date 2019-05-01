<?php
class model_barang extends ci_model{
    
    function tampil_data()
    {
        // $query= "SELECT b.barang_id,b.nama_barang,b.harga,kb.nama_kategori
        //         FROM barang as b,kategori_barang as kb
        //         WHERE b.kategori_id=kb.kategori_id";
        $query = "SELECT ab.kode, ab.name, ab.status, s.nama as sup
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
        $param  =   array('kode'=>$id);
        return $this->db->get_where('alat_berat', $param);
    }

    function get_all_status()
    {
        return ["DIPAKAI", "DIPINJAM", "DIPERBAIKI", "TIDAK TERSEDIA"];
    }
    
    function edit($data, $id)
    {
        $this->db->where('kode', $id);
        $this->db->update('alat_berat', $data);
    }    
    
    function delete($id)
    {
        $this->db->where('kode', $id);
        $this->db->delete('alat_berat');
    }
}