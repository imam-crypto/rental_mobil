<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	function __construct(){
		parent::__construct();
		$this->load->model('M_rental');
	}

	public function index(){
		$this->load->view('login');
	}


	function login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$this->form_validation->set_rules('username','Username','trim|required');
		$this->form_validation->set_rules('password','Password','trim|required');
		if($this->form_validation->run() != false){
			$where = array(
				'username' => $username,
				'password' => md5($password)			
			);
			$data = $this->M_rental->edit_data($where,'tb_admin');
			$d = $this->M_rental->edit_data($where,'tb_admin')->row();
			$cek = $data->num_rows();
			if($cek > 0){
				$session = array(
					'id'=> $d->id,
					'nama'=> $d->nama,
					'status' => 'login'
				);
				$this->session->set_userdata($session);
				redirect(base_url().'admin/index');
			}else{
				redirect(base_url().'welcome?pesan=gagal');			
			}
		}else{
			$this->load->view('login');
		}
	}
}
