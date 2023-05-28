<?php

class MainModel extends CI_Model
{
    public function getdokter()
    {
        $query = $this->db->get('dokter');
        return $query->result();
    }
    function input_periksa($data, $table)
    {
        $this->db->insert($table, $data);
    }
    function getpetugas()
    {
        $query = $this->db->query('SELECT * FROM `petugas` WHERE id_petugas = "admin"');
        return $query->result();
    }
    function addpasien($data, $table)
    {
        $this->db->insert($table, $data);
    }
    function getperiksa()
    {
        $query = $this->db->query('SELECT id_pemeriksaan, passien.nama as pasnama,dokter.nama as nama,passien.nomor_rm as nomor_rm, tanggal_pemeriksaan FROM `pemeriksaan` JOIN dokter ON dokter.id_dokter = pemeriksaan.id_dokter JOIN passien ON passien.nomor_rm = pemeriksaan.nomor_rm');
        return $query->result();
    }
    function detailperiksa($data, $table)
    {
        $this->db->insert($table, $data);
    }
    function adddokter($data, $table)
    {
        $this->db->insert($table, $data);
    }
}
