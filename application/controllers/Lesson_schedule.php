<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Lesson_schedule extends CI_Controller
{
    public function index()
    {
        $this->load->model('Lesson_model', 'lesson');
        $data['title'] = 'Jadwal Pelajaran';
        $data['schedules'] = $this->lesson->get_lesson();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('lesson_schedule/index', $data);
        $this->load->view('templates/modal', $data);
        $this->load->view('templates/footer');
    }

    public function getedit()
    {
        $this->load->model('Lesson_model', 'lesson');

        echo json_encode($this->lesson->getLessonByID($this->input->post('id')));

    }

    public function update()
    {
        $this->load->model('Lesson_model', 'lesson');
        $this->load->model('Sweetalert_model', 'sweet');

        if ($this->lesson->update_schedule() > 0) {
            $this->sweet->alert('success', 'Berhasil', 'Jadwal Berhasil di Ubah', 'lesson_schedule');
        } else {
            $this->sweet->alert('error', 'Gagal', 'Gagal Mengubah Jadwal', 'lesson_schedule');
        }
    }

}