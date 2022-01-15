<?php

class Lesson_model extends CI_Model
{
    public function get_lesson()
    {
        return $this->db->get('schedule')->result_array();
    }

    public function getLessonByID($id)
    {
        return $this->db->get_where('schedule', ['id' => $id])->row_array();
    }

    public function update_schedule()
    {
        $data = [
            'jam' => $this->input->post('jam', true),
            'senin' => $this->input->post('senin', true),
            'selasa' => $this->input->post('selasa', true),
            'rabu' => $this->input->post('rabu', true),
            'kamis' => $this->input->post('kamis', true),
            'jumat' => $this->input->post('jumat', true),
            'sabtu' => $this->input->post('sabtu', true),
        ];

        // var_dump($this->input->post('id'));die;

        $this->db->where('id', $this->input->post('id_schedule'));
        $this->db->update('schedule', $data);

        return $this->db->affected_rows();
    }
}