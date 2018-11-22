<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class UserC extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        is_login();
        user_access();
        $this->load->model(array('Beranda_model','Ded_m'));
        $this->load->library('form_validation');        
        $this->load->library('datatables');
        $this->load->helper('form', 'url');

    }

    public function index(){
        $id_skpa = $this->session->userdata('id_skpa');
        $data['Beranda_model'] = $this->Beranda_model;
        $data['org_by_skpa'] = $this->Beranda_model->get_org_by_id_skpa($id_skpa)->result();
        $data['skpa'] = $this->Ded_m->get_all_ded_by_id($id_skpa)->result()[0];
        $data['ded'] = $this->Ded_m->get_all_ded($id_skpa)->result();
        $data['all'] = $this->Beranda_model->get_all_data($id_skpa)->result_array();
        $this->load->view('auth/user_read', $data);
    }

    public function cetak($id_skpa){
        $data['Beranda_model'] = $this->Beranda_model;
        $data['org_by_skpa'] = $this->Beranda_model->get_org_by_id_skpa($id_skpa)->result();
        $data['skpa'] = $this->Ded_m->get_all_ded_by_id($id_skpa)->result()[0];
        $data['ded'] = $this->Ded_m->get_all_ded($id_skpa)->result();
        $data['all'] = $this->Beranda_model->get_all_data($id_skpa)->result_array();
        $this->load->view('auth/cetak_layout',$data);
    }
}
