<?php
class Form_model extends CI_Model 
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
    
    function cek_password($table,$where){		
		return $this->db->get_where($table,$where);
	}	
	// function fetch_pass($session_id)
	// {
	// $fetch_pass=$this->db->query("select * from tb_admin where id='$session_id'");
	// $res=$fetch_pass->result();
	// }
	// function change_pass($session_id,$new_pass)
	// {
	// $update_pass=$this->db->query("UPDATE tb_admin set password ='$new_pass'  where id='$session_id'");
	// }
}