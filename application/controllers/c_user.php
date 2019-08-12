<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_user extends CI_Controller {

function __construct()
{
	parent::__construct();
	$this->load->model('m_konsultasi');
	$this->load->library('form_validation');
} 
function index()
{
	$this->load->view('v_homepage');
	
}	
public function login()
{
	$this->load->view('v_login');
}	
// konsultasi
function halaman_konsultasi()
{
	$this->load->view('v_halaman_konsultasi');
}
// input pasien
function inputpasien(){
	$this->form_validation->set_rules('nama_pasien','Nama Pasien','required');
	$this->form_validation->set_rules('umur','Umur Pasien','required');
	$this->form_validation->set_rules('nomor_telepon','Nomor Telphone Pasien','required');
	$this->form_validation->set_rules('jenis_kelamin','Jenis Kelamin Pasien','required');
	$this->form_validation->set_rules('alamat','Alamat Pasien','required');
	if($this->form_validation->run() == false){
		$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissable">
										<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
										<p>Data Pasien ada yang belum diisi. Silahkan dicek kembali</p></div>');
		$this->load->view('v_halaman_konsultasi');
	}else{
		$q=$this->m_konsultasi->inputpasien();
		redirect(base_url('admin/konsultasi/'.$q."?gejala=G5"));
	}
}

//opsi pertanyaan
function opsi($q)
{
	$data['datagejala']= $this->m_konsultasi->getGejala()->result();
	$this->load->view('v_opsi',$data);
}

//penyakit abses
function abses()
{
	$this->load->view('v_abses');
}

//penyakit kalkulus
function kalkulus()
{
	$this->load->view('v_kalkulus_gigi');
}

//penyakit karis gigi
function karies_gigi()
{
	$this->load->view('v_karies');
}
}
	
