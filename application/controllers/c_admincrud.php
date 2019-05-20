<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_admincrud extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_admincrud');
    }

    //gejala

    //input_gejala
    public function inputgejala()
    {
        $this->session->set_flashdata('success', 'Berhasil Tambah Gejala');
        $this->m_admincrud->inputgejala($data);
        redirect(base_url('index.php/welcome/datagejala'));
    }

    //update_gejala
    
    public function vieweditgejala($id)
    {
		if($this->input->post('submit')){
      $this->session->set_flashdata('success', 'Berhasil Ubah Gejala');
			$this->m_admincrud->updategejala($id);
			redirect('welcome/datagejala');
		}
		  $data['gejala'] = $this->m_admincrud->get_gejala_id($id);
		  $this->load->view('v_form_modal_gejala', $data);
    }
    //delete_gejala
    public function delgejala($id){
    $this->session->set_flashdata('success', 'Berhasil Hapus Gejala');
		$this->m_admincrud->delgejala($id);
		redirect('welcome/datagejala');
  }

    //search_gejala_per_penyakit
    public function search_gejala(){
      $data['tampilpenyakit']=$this->m_admincrud->get_seluruhpenyakit();
      $data['tampilsearch']=$this->m_admincrud->get_keyword();
      $this->load->view('v_laporangejala',$data);
      }

    //penyakit
    public function inputpenyakit()
    {
        $this->session->set_flashdata('success', 'Berhasil Tambah Penyakit');
        $this->m_admincrud->inputpenyakit($data);
        redirect(base_url('index.php/welcome/datapenyakit'));
    }

    //update_penyakit
    public function vieweditpenyakit($id){
		if($this->input->post('submit')){
      $this->session->set_flashdata('success', 'Berhasil Ubah Penyakit');
			$this->m_admincrud->updatepenyakit($id);
			redirect('welcome/datapenyakit');
		}
		  $data['penyakit'] = $this->m_admincrud->get_penyakit_id($id);
		  $this->load->view('v_from_modal_penyakit', $data);

    }

    public function delpenyakit($id){
      $this->session->set_flashdata('success', 'Berhasil Hapus Penyakit');
		$this->m_admincrud->delpenyakit($id);
		redirect('welcome/datapenyakit');
    }

  //relasi

  //input relasi
  public function inputrelasi(){
    $p = $this->input->post('daftar_penyakit');
		$g = $this->input->post('daftar_gejala');
		$where = array(
			'kd_diagnosa' => $p,
			'kd_gejala' => $g
			);
		$cek = $this->m_admincrud->check_relasi("tb_relasi",$where);
		$row =	$cek->num_rows();
		if($row > 0){
      $this->session->set_flashdata('error', 'Data yang anda masukan sudah ada !');
      redirect('welcome/inputrelasi');
      echo "Data yang anda masukan sudah ada";
		}else{
      $this->session->set_flashdata('success', 'Data berhasil dimasukkan');
      $this->m_admincrud->input_relasi($data);
      redirect('welcome/datagabungan');
		}
  }

  //edit_data_gabungan
  public function vieweditrelasi($id){
		if($this->input->post('submit')){
     
        $this->session->set_flashdata('success', 'Data berhasil diubah');
        $this->m_admincrud->updaterelasi($id);
        redirect('welcome/datagabungan');
      
			
    }
      $data['tampilpenyakit']=$this->m_admincrud->get_seluruhpenyakit();
			$data['tampilgejala']=$this->m_admincrud->get_seluruhgejala();
		  $data['relasi'] = $this->m_admincrud->get_relasi_id($id);
		  $this->load->view('v_from_modal_relasi', $data);

    }

    //delete relasi
    public function delrelasi($id){
      $this->session->set_flashdata('success', 'Data berhasil dihapus');
      $this->m_admincrud->delrelasi($id);
      redirect('welcome/datagabungan');
      }

       //delete riwayat pasien
     public function delriwayat_pasien($id){
      $this->session->set_flashdata('success', 'Data berhasil dihapus');
      $this->m_admincrud->delriwayat_pasien($id);
      redirect('welcome/riwayatpasien');
      }
}