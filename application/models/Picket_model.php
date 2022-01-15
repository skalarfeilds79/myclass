<?php

class Picket_model extends CI_Model
{
    public function get_picket()
    {
        return $this->db->get('picket')->result_array();
    }

    public function getpicketByHari($hari)
    {
        return $this->db->get_where('picket', ['hari' => $hari])->row_array();
    }

    public function update_picket()
    {
        $data = [
            'hari' => $this->input->post('hari', true),
            'nama_1' => $this->input->post('nama_1', true),
            'nama_2' => $this->input->post('nama_2', true),
            'nama_3' => $this->input->post('nama_3', true),
            'nama_4' => $this->input->post('nama_4', true),
            'nama_5' => $this->input->post('nama_5', true),
            'nama_6' => $this->input->post('nama_6', true),
        ];

        $this->db->where('hari', $this->input->post('hari'));
        $this->db->update('picket', $data);

        return $this->db->affected_rows();
    }
}