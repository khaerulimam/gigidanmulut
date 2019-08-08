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
	$q=$this->m_konsultasi->inputpasien();
    redirect(base_url('admin/inputpasien/'.$q));
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
	
