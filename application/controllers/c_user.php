<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_user extends CI_Controller {

function __construct()
{
	parent::__construct();
	$this->load->model('m_konsultasi');
} 
function index()
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
	$this->m_konsultasi->inputpasien($data);
    redirect(base_url('admin/inputpasien'));
}

function opsi()
{
	$this->load->view('v_opsi');
}
}
	
