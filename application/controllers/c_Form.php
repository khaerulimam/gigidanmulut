<?php 
class c_Form extends CI_Controller 
{
	public function __construct()
	{
		/*call CodeIgniter's default Constructor*/
		parent::__construct();
		/*load database libray manually*/
		$this->load->database();
		$this->load->library('session');
		/*load Model*/
		$this->load->helper('url');
		$this->load->model('Form_model');
	}       
	
	public function change_pass()
	{
		if($this->input->post('change_pass'))
		{
			$old_pass=$this->input->post('old_pass');
			$new_pass=$this->input->post('new_pass');
			$confirm_pass=$this->input->post('confirm_pass');
			$session_id=$this->session->userdata('id');
			$que=$this->db->query("select * from tb_admin where id='$session_id'");
			$row=$que->row();
			if((!strcmp($old_pass))&& (!strcmp($new_pass, $confirm_pass))){
				$this->Form_model->change_pass($session_id,$new_pass);
				echo "Password changed successfully !";
				}
			    else{
					echo "Invalid";
				}
		}
        // $this->load->view('v_ubah_password');	
        // redirect('welcome/change_password');
    }
    
    function aksi_gantipassword(){
		$old_pass=$this->input->post('old_pass');
		$new_pass=$this->input->post('new_pass');
		$confirm_pass=$this->input->post('confirm_pass');
        $session_id=$this->session->userdata('id');
        if(!strcmp($new_pass, $confirm_pass)){
            $cok = $this->db->get_where('tb_admin', array('id' => 1))->row();
            $cek = $this->db->query("select * from tb_admin where id=1")->result();
            if($cok->password == md5($old_pass)){
                
                $data = array(
                    'password' => md5($new_pass)
                    );
     
            $this->db->where('id', 1);
			$this->db->update('tb_admin', $data);  
			$this->session->set_flashdata('success', 'Berhasil Ubah Password');
           // echo 'berhasil';
            redirect(base_url('index.php/welcome/change_password'));
     
            }else{
				$data['error'] = '<div class="alert alert-danger" style="margin-top: 3px">
           		<div class="header"><b><i class="fa fa-exclamation-circle"></i> ERROR</b> Password yang anda masukan salah!</div></div>';
                $this->load->view('v_ubah_password', $data);
            }
        }else{
				$data['error'] = '<div class="alert alert-danger" style="margin-top: 3px">
           		<div class="header"><b><i class="fa fa-exclamation-circle"></i> ERROR</b> Konfirmasi password tidak sama!</div></div>';
				   $this->load->view('v_ubah_password', $data);
           
        }
		
    }
}