<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Search extends CI_Controller
{
    public function index()
    {
        $data['keyword'] = $this->input->get('keyword');
        $this->load->model('M_Karyawan');

        $data['search_result'] = $this->m_Karyawan->search($data['keyword']);

        $this->load->view('', $data);
    }
}
