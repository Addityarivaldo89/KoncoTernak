<?php

class Admin extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Admin');
        $this->load->helper('url');
        
	}

	public function index()
	{
        // load view admin/overview.php
        $data['total_transaksi'] = $this->M_Admin->hitTransaksi();
        $this->load->view("admin/overview.php",$data);
	}
}
