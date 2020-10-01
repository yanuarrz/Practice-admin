<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_0148 extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_0148');
        $this->load->helper('url');
    }

    public function index()
    {
        $a['user'] = $this->m_0148->absensi('$query');
        $this->load->view('v_0148', $a);
    }
}
