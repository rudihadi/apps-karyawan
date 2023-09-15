<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Karyawan');
    }

    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('dashboard');
        $this->load->view('templates/footer');
    }

    public function dataKaryawan()
    {
        $recordKrywn = $this->M_Karyawan->getDataKaryawan();
        $DATA = array('data_krywn' => $recordKrywn);

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('data_karyawan', $DATA);
        $this->load->view('templates/footer');
    }

    public function carikaryawan()
    {
        $data['keyword'] = $this->input->get('keyword');
        $this->load->model('M_Karyawan');

        $data['search_result'] = $this->M_Karyawan->search($data['keyword']);

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('search', $data);
        $this->load->view('templates/footer');
    }

    public function formInput()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('form_input');
        $this->load->view('templates/footer');
    }

    public function AksiInsert()
    {
        $npk = $this->input->post('npk');
        $nama = $this->input->post('nama');
        $jabatan = $this->input->post('jabatan');

        $DataInsert = array(
            'npk' => $npk,
            'nama' => $nama,
            'jabatan' => $jabatan,
        );
        $this->M_Karyawan->InsertDataKrywn($DataInsert);
        redirect(base_url('Dashboard/datakaryawan'));
    }

    public function formEdit($id)
    {
        $recordKrywn = $this->M_Karyawan->getDataKaryawanDetail($id);
        $DATA = array('data_krywn' => $recordKrywn);

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('form_edit', $DATA);
        $this->load->view('templates/footer');
    }

    public function AksiEdit()
    {
        $npk = $this->input->post('npk');
        $nama = $this->input->post('nama');
        $jabatan = $this->input->post('jabatan');

        $DataUpdate = array(
            'nama' => $nama,
            'jabatan' => $jabatan,
        );

        $this->M_Karyawan->EditDataKrywn($DataUpdate, $npk);
        redirect(base_url('Dashboard/datakaryawan'));
    }

    public function AksiDeleteData($npk)
    {
        $this->M_Karyawan->DeleteDataKrywn($npk);
        redirect(base_url('Dashboard/datakaryawan'));
    }

    public function AksiCari()
    {
        $npk = $this->input->post('npk');
        $nama = $this->input->post('nama');
        $jabatan = $this->input->post('jabatan');

        $DataCari = array(
            'npk' => $npk,
            'nama' => $nama,
            'jabatan' => $jabatan,
        );

        $data['search_result'] = $this->M_Karyawan->search($DataCari, $npk);
        redirect(base_url('Dashboard/carikaryawan'));
    }

    public function search()
    {
        $keyword = $this->input->post('keyword');
        $data['data_karyawan'] = $this->M_Karyawan->get_keyword($keyword);

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('data_karyawan', $data);
        $this->load->view('templates/footer');
    }
}
