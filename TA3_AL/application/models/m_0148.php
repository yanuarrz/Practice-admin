<?php

class m_0148 extends CI_Model
{

    function absensi()
    {
        // $this->db->select('*');
        $this->db->select_SUM('id_pelanggan');
        $this->db->from('pelanggan');
        // $this->db->where('id_pelanggan', '148');

        $query = $this->db->get()->result();
        return $query;
    }
}
