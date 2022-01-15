<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Picket_schedule extends CI_Controller
{
    public function index()
    {
        $this->load->model('Picket_model', 'picket');
        $data['senin'] = $this->picket->getpicketByHari('senin');
        $data['selasa'] = $this->picket->getpicketByHari('selasa');
        $data['rabu'] = $this->picket->getpicketByHari('rabu');
        $data['kamis'] = $this->picket->getpicketByHari('kamis');
        $data['jumat'] = $this->picket->getpicketByHari('jumat');
        $data['sabtu'] = $this->picket->getpicketByHari('sabtu');
        $data['title'] = 'Jadwal Piket';

        // var_dump($data['senin']);die;

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('picket_schedule/index', $data);
        $this->load->view('templates/modal', $data);
        $this->load->view('templates/footer');
    }

    public function getedit()
    {
        $this->load->model('Picket_model', 'picket');
        echo json_encode($this->picket->getpicketByHari($this->input->post('hari')));
    }

    public function update()
    {
        $this->load->model('Picket_model', 'picket');
        $this->load->model('Sweetalert_model', 'sweet');

        if ($this->picket->update_picket() > 0) {
            $this->sweet->alert('success', 'Berhasil', 'Piket Berhasil di Ubah', 'picket_schedule');
        } else {
            $this->sweet->alert('error', 'Gagal', 'Gagal Mengubah Piket', 'picket_schedule');
        }
    }
}