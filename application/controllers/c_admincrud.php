<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_admincrud extends CI_Controller
{
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
    $this->m_admincrud->inputgejala();
    redirect(base_url('admin/datagejala'));
  }

  //update_gejala

  public function vieweditgejala($id)
  {
    if ($this->input->post('submit')) {
      $this->session->set_flashdata('success', 'Berhasil Ubah Gejala');
      $this->m_admincrud->updategejala($id);
      redirect('admin/datagejala');
    }
    $data['gejala'] = $this->m_admincrud->get_gejala_id($id);
    $this->load->view('v_form_modal_gejala', $data);
  }
  //delete_gejala
  public function delgejala($id)
  {
    $this->session->set_flashdata('success', 'Berhasil Hapus Gejala');
    $this->m_admincrud->delgejala($id);
    redirect('admin/datagejala');
  }

  //search_gejala_per_penyakit
  public function search_gejala()
  {
    $data['tampilpenyakit'] = $this->m_admincrud->get_seluruhpenyakit();
    $data['tampilsearch'] = $this->m_admincrud->get_keyword();
    $this->load->view('v_laporangejala', $data);
  }

  //penyakit
  public function inputpenyakit()
  {
    $this->session->set_flashdata('success', 'Berhasil Tambah Penyakit');
    $this->m_admincrud->inputpenyakit($data);
    redirect(base_url('admin/datapenyakit'));
  }

  //update_penyakit
  public function vieweditpenyakit($id)
  {
    if ($this->input->post('submit')) {
      $this->session->set_flashdata('success', 'Berhasil Ubah Penyakit');
      $this->m_admincrud->updatepenyakit($id);
      redirect('admin/datapenyakit');
    }
    $data['penyakit'] = $this->m_admincrud->get_penyakit_id($id);
    $this->load->view('v_from_modal_penyakit', $data);
  }

  public function delpenyakit($id)
  {
    $this->session->set_flashdata('success', 'Berhasil Hapus Penyakit');
    $this->m_admincrud->delpenyakit($id);
    redirect('admin/datapenyakit');
  }

  //relasi

  //input relasi
  public function inputrelasi()
  {
    $data = null;
    $p = $this->input->post('daftar_penyakit');
    $g = $this->input->post('daftar_gejala');
    // $bobot = $this->input->post('nilai_bobot');
    $where = array(
      'kd_diagnosa' => $p,
    );
    $i = 0;
    foreach ($g as $key) {
      $data[$i]['kd_diagnosa'] = $p;
      $data[$i]['kd_gejala'] = $key;
      $i++;
    }

    // die(json_encode($data));
    $cek = $this->m_admincrud->check_relasi("tb_relasi", $where);
    $row =  $cek->num_rows();
    if ($row > 0) {
      $i = 0;
      $dat = $cek->result_array();
      // die(json_encode($dat));
      foreach ($dat as $key) {
        $data[$i]['id'] = $key['id'];
        $i++;
      }
      // die(json_encode($data));
      $this->m_admincrud->update_multiple('tb_relasi', $data, 'id');
      $this->session->set_flashdata('success', 'Data berhasil diperbarui');
      redirect('admin/datagabungan');
      // $this->session->set_flashdata('error', 'Data yang anda masukan sudah ada !');
      // redirect('admin/inputrelasi');
      // echo "Data yang anda masukan sudah ada"; 
    } else {
      $this->session->set_flashdata('success', 'Data berhasil dimasukkan');
      $this->m_admincrud->insert_multiple('tb_relasi', $data);
      redirect('admin/datagabungan');
    }
  }

  //edit_data_gabungan
  public function vieweditrelasi($id)
  {
    $datas = null;
    $gabung = $this->m_admincrud->select('tb_relasi.id as id_relasi,tb_relasi.kd_gejala,tb_relasi.kd_diagnosa,tb_penyakit.nama_diagnosa,tb_gejala.nama_gejala');
    $gabung = $this->m_admincrud->getWhere('tb_relasi.kd_diagnosa',$id);
		$gabung = $this->m_admincrud->getJoin('tb_gejala','tb_gejala.kd_gejala = tb_relasi.kd_gejala','inner');
    $gabung = $this->m_admincrud->getJoin('tb_penyakit','tb_penyakit.kd_diagnosa = tb_relasi.kd_diagnosa','inner');
    $gabung = $this->m_admincrud->getData('tb_relasi')->result_array();
    $data_p = null;
    // die(json_encode($gabung));
    if ($this->input->post('submit')) {
      $data = null;
      $p = $this->input->post('daftar_penyakit');
      $g = $this->input->post('daftar_gejala');
      $i = 0;
      foreach ($g as $key) {
        $data_p = array(
          "kd_gejala" => $key,
          "kd_diagnosa" => $p[0],
        );
        // die(json_encode($data_p));
        // var_dump($gabung);
        if(isset($gabung[$i]['id_relasi'])){
          $this->m_admincrud->update('id = ' . $gabung[$i]['id_relasi'],'tb_relasi',$data_p);
        }else{
          $this->m_admincrud->insert('tb_relasi',$data_p);
        }
        $i++;
        unset($data_p);
      }
      // die();

      $this->session->set_flashdata('success', 'Data berhasil diubah');
      // $this->m_admincrud->updaterelasi($id);
      redirect('admin/datagabungan');
    }
		foreach ($gabung as $key) {
      $data_p = array(
        "kd_diagnosa" => $key['kd_diagnosa'],
        "nama_diagnosa" => $key['nama_diagnosa'],
        "id" => $key['id_relasi']
      );
			//$datas[$key['nama_diagnosa']][] = $key;
    }
    // die(json_encode($data_p));
    // $data['tampilpenyakit'] = $this->m_admincrud->get_seluruhpenyakit();
    $data['tampilgejala'] = $this->m_admincrud->get_seluruhgejala();
    // $data['relasi'] = $this->m_admincrud->get_relasi_id($id);
    $data['datas'] = $gabung;
    $data['penyakit'] = $data_p;
    $this->load->view('v_from_modal_relasi', $data);
  }

  public function hapus_gejala($id){
    $this->session->set_flashdata('success', 'Data berhasil dihapus');
    $this->m_admincrud->delete('id',$id,'tb_relasi');
    redirect('admin/datagabungan');
  }

  //delete relasi
  public function delrelasi($id)
  {
    $this->session->set_flashdata('success', 'Data berhasil dihapus');
    // $this->m_admincrud->delrelasi($id);
    $this->m_admincrud->delete('kd_diagnosa',$id,'tb_relasi');
    redirect('admin/datagabungan');
  }

  //delete riwayat pasien
  public function delriwayat_pasien($id)
  {
    $this->session->set_flashdata('success', 'Data berhasil dihapus');
    $this->m_admincrud->delriwayat_pasien($id);
    redirect('admin/riwayatpasien');
  }
}