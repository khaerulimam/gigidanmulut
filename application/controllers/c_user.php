<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_user extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct(){
		parent::__construct();
		$this->load->model('m_konsultasi');
	} 
public function index()
		{
			$this->load->view('v_halaman_utama_user');
		}
		
// konsultasi
public function halaman_konsultasi()
		{
			$this->load->view('v_halaman_konsultasi');
		}
// input pasien
public function inputpasien(){
	    $this->m_konsultasi->inputpasien($data);
        redirect(base_url('index.php/c_user/opsi'));
		}

		public function opsi()
		{
			$this->load->view('v_opsi');
		}

	}
	
