<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Student_list extends CI_Controller
{
    public function index()
    {
        $this->load->model('Student_model', 'student');
        $this->load->library('pagination');
        $data['title'] = 'Daftar Siswa';

        if ($this->input->post('search-button')) {
            $data['keyword'] = $this->input->post('keyword');
            $this->session->set_userdata('keyword', $data['keyword']);
        } elseif (!$this->input->post('search-button')) {
            $data['keyword'] = $this->session->userdata('keyword');
        }

        $this->db->like('nama', $data['keyword']);
        $this->db->or_like('email', $data['keyword']);
        $this->db->from('student_list');
        $config['total_rows'] = $this->db->count_all_results();
        $data['total_rows'] = $config['total_rows'];
        $config['per_page'] = 6;

        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
        $data['students'] = $this->student->searchStudent($config['per_page'], $data['start'], $data['keyword']);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('student_list/index');
        $this->load->view('templates/modal');
        $this->load->view('templates/footer');
    }

    public function addStudent()
    {
        $this->load->model('Student_model', 'student');
        $this->load->model('Sweetalert_model', 'sweet');
        $this->form_validation->set_rules('name', 'Nama', 'required');
        $this->form_validation->set_rules('nisn', 'NISN', 'numeric');
        $this->form_validation->set_rules('email', 'Email', 'valid_email');
        $this->form_validation->set_rules('hp', 'Nomer Hp', 'numeric');

        if ($this->form_validation->run() == false) {
            if (form_error('name')) {
                $error = form_error('name');
            } elseif (form_error('nisn')) {
                $error = form_error('nisn');
            } elseif (form_error('email')) {
                $error = form_error('email');
            } elseif (form_error('hp')) {
                $error = form_error('hp');
            }
            $this->sweet->alert('info', 'Gagal', $error, 'student_list');
        } else {
            $this->student->addStudent();
            $this->sweet->alert('success', 'Berhasil', 'Data siswa berhasil ditambahkan', 'student_list');
        }
    }

    public function deleteStudent($id)
    {
        $this->load->model('Student_model', 'student');
        $this->student->deleteStudent($id);
        redirect('student_list');
    }

    public function detail($id)
    {
        $this->load->model('Student_model', 'student');

        $data['title'] = 'Detail Siswa';
        $data['student'] = $this->student->getStudentByID($id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('student_list/detail', $data);
        $this->load->view('templates/modal');
        $this->load->view('templates/footer');
    }

    public function update() {
        $this->load->model('Student_model', 'student');
        $this->load->model('Sweetalert_model', 'sweet');
        $this->form_validation->set_rules('name', 'Nama', 'required');
        $this->form_validation->set_rules('nisn', 'NISN', 'numeric');
        $this->form_validation->set_rules('email', 'Email', 'valid_email');
        $this->form_validation->set_rules('hp', 'Nomer Hp', 'numeric');

        if ($this->form_validation->run() == false) {
            if (form_error('name')) {
                $error = form_error('name');
            } elseif (form_error('nisn')) {
                $error = form_error('nisn');
            } elseif (form_error('email')) {
                $error = form_error('email');
            } elseif (form_error('hp')) {
                $error = form_error('hp');
            }
            $id = $this->input->post('id');
            $this->sweet->alert('info', 'Gagal', $error, 'student_list/detail/'.$id.'');           
        } else { 
            $id = $this->input->post('id');
            $this->student->update_dataStudent();
            $this->sweet->alert('success', 'Berhasil', 'Data siswa berhasil diUbah', 'student_list/detail/'.$id.'');
        }
}

public function getedit()
{
$this->load->model('Student_model', 'student');
echo json_encode($this->student->getStudentByID($this->input->post('id')));
}
}