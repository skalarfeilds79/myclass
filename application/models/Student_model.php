<?php

class Student_model extends CI_Model
{
    public function getAllStudent()
    {
        return $this->db->get('student_list')->result_array();
    }

    public function getStudentByID($id)
    {
        return $this->db->get_where('student_list', ['id' => $id])->row_array();
    }

    public function addStudent()
    {
        $data = [
            'nama' => $this->input->post('name', true),
            'nisn' => $this->input->post('nisn', true),
            'email' => $this->input->post('email', true),
            'hp' => $this->input->post('hp', true),
            'jurusan' => $this->input->post('major', true),
        ];
        $this->db->insert('student_list', $data);
    }

    public function deleteStudent($id)
    {
        $this->db->delete('student_list', ['id' => $id]);
    }

    public function searchStudent($limit, $start, $keyword = null)
    {
        if ($keyword) {
            $this->db->like('nama', $keyword);
            $this->db->or_like('email', $keyword);
        }

        return $this->db->get('student_list', $limit, $start)->result_array();
    }

    public function update_dataStudent()
    {
        $data = [
            'nama' => $this->input->post('name', true),
            'nisn' => $this->input->post('nisn', true),
            'email' => $this->input->post('email', true),
            'hp' => $this->input->post('hp', true),
            'jurusan' => $this->input->post('major', true),
        ];

        // var_dump($this->input->post('id'));die;
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('student_list', $data);
    }

}