<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_akses extends CI_Controller {
    function __construct(){
		parent::__construct();		
		$this->load->model('m_akses');
 
	}
    public function index(){
        $this->load->view("v_login");
    }
    function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		$cek = $this->m_akses->cek_login("tb_admin",$where);
		$row =	$cek->num_rows();
		if($row > 0){
			$cek = $cek->row_array();
			$data_session = array(
				'id' => $cek['id'],
				'nama' => $username,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
 
			redirect(base_url('admin/index'));
 
		}else{
			$data['error'] = '<div class="alert alert-danger" style="margin-top: 3px">
			<div class="header"><b><i class="fa fa-exclamation-circle"></i> ERROR</b></br> Username atau password yang anda masukan salah!</div></div>';
			 $this->load->view('v_login', $data);
		}
    }
    function logout(){
		$this->session->sess_destroy();
		redirect(base_url('admin/login'));
	}
}

