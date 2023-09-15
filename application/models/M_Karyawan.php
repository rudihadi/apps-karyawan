<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Karyawan extends CI_Model
{
    public function getDataKaryawan()
    {
        $this->db->select('*');
        $this->db->from('tb_karyawan');
        $query = $this->db->get();
        return $query->result();
    }

    public function InsertDataKrywn($data)
    {
        $this->db->insert('tb_karyawan', $data);
    }

    public function EditDataKrywn($data, $id)
    {
        $this->db->where('npk', $id);
        $this->db->update('tb_karyawan', $data);
    }

    public function DeleteDataKrywn($id)
    {
        $this->db->where('npk', $id);
        $this->db->delete('tb_karyawan');
    }

    public function getDataKaryawanDetail($id)
    {
        $this->db->where('npk', $id);
        $query = $this->db->get('tb_karyawan');
        return $query->row();
    }

    public function get_keyword($keyword)
    {
        $this->db->select('*');
        $this->db->from('tb_karyawan');
        $this->db->like('npk', $keyword);
        $this->db->or_like('nama', $keyword);
        $this->db->or_like('jabatan', $keyword);
        return $this->db->get()->result();
    }
}
