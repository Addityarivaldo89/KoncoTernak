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
                $this->load->view("admin/overview");
        }
        
        public function user()
        {
                $data['user'] = $this->M_Admin->tampil_data()->result();
                $this->load->view('admin/user',$data);
        }

        public function hapus($id_user)
        {
                $where = array('id_user' => $id_user);
		$this->M_Admin->hapus_data($where,'user');
		redirect('admin/user');
        }
}
