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

        public function tambah()
        {
                $this->load->view('admin/user_tambah');
                
        }

        public function tambah_aksi()
        {
                $nama = $this->input->post('nama');
                $username = $this->input->post('username');
                $email = $this->input->post('email');
                $password = md5($this->input->post('password'));
 
		$data = array(
			'nama' => $nama,
                        'username' => $username,
                        'email' => $email,
                        'password' => $password
			);
		$this->M_Admin->input_data($data,'user');
		redirect('admin/user');
        }

        public function tambah_aksiR()
        {
                $nama = $this->input->post('nama');
                $username = $this->input->post('username');
                $email = $this->input->post('email');
                $password = md5($this->input->post('password'));
 
		$data = array(
			'nama' => $nama,
                        'username' => $username,
                        'email' => $email,
                        'password' => $password
			);
		$this->M_Admin->input_data($data,'user');
		redirect('index');
        }
        
        public function user()
        {
                $data['user'] = $this->M_Admin->tampil_data()->result();
                $this->load->view('admin/user',$data);
        }

        public function edit($id_user)
        {
                $where = array('id_user' => $id_user);
		$data['user'] = $this->M_Admin->edit_data($where,'user')->result();
		$this->load->view('admin/user_edit',$data);
        }

        function update(){
                $id_user = $this->input->post('id_user');
                $nama = $this->input->post('nama');
                $username = $this->input->post('username');
                $email = $this->input->post('email');
                $password = md5($this->input->post('password'));
        
                $data = array(
                        'id_user' => $id_user,
                        'nama' => $nama,
                        'username' => $username,
                        'email' => $email,
                        'password' => $password 
                );
        
                $where = array(
                        'id_user' => $id_user
                );
        
                $this->M_Admin->update_data($where,$data,'user');
                redirect('admin/user');
        }

        public function hapus($id_user)
        {
                $where = array('id_user' => $id_user);
		$this->M_Admin->hapus_data($where,'user');
		redirect('admin/user');
        }
}
