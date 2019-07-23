<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{


	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('status') != "login") {
			redirect(base_url("admin/login"));
		}
		$this->load->model('m_admincrud');
	}
	public function index()
	{
		$this->load->view('v_dashboard');
	}
	public function accordion()
	{
		$data['codepenyakit'] = $this->m_admincrud->get_codepenyakit();
		$this->load->view('v_accordion', $data);
	}
	public function inbox()
	{
		$data['codegejala'] = $this->m_admincrud->get_codegejala();
		// die(json_encode($data['codegejala']));
		$this->load->view('v_inbox', $data);
	}
	public function datagejala()
	{

		$data['tampilgejala'] = $this->m_admincrud->get_seluruhgejala();
		$this->load->view('v_datagejala', $data);
	}

	public function datapenyakit()
	{
		$data['tampilpenyakit'] = $this->m_admincrud->get_seluruhpenyakit();
		$this->load->view('v_datapenyakit', $data);
	}
	public function datagabungan()
	{
		$datas = null;
		$gabung = $this->m_admincrud->tampil_relasi()->result_array();

		foreach ($gabung as $key) {
			$datas[$key['nama_diagnosa']][] = $key;
		}
		// die(json_encode($datas));
		$data['relasi'] = $datas;
		$this->load->view('v_datagabungan', $data);
	}
	public function inputrelasi()
	{
		$data['tampilpenyakit'] = $this->m_admincrud->get_seluruhpenyakit();
		$data['tampilgejala'] = $this->m_admincrud->get_seluruhgejala();
		$this->load->view('v_inputrelasi', $data);
	}
	public function laporangejala()
	{
		$data['tampilpenyakit'] = $this->m_admincrud->get_seluruhpenyakit();
		$this->load->view('v_laporangejalaawal', $data);
	}
	public function laporanpenyakit()
	{
		$data['tampilpenyakit'] = $this->m_admincrud->get_seluruhpenyakit();
		$this->load->view('v_laporanpenyakit', $data);
	}
	public function riwayatpasien()
	{
		$data['pasien'] = $this->m_admincrud->data_pasien();
		$this->load->view('v_riwayatpasien', $data);
	}

	public function change_password()
	{
		$this->load->view('v_ubah_password');
	}
}
