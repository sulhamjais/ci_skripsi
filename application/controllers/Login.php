<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$data=array('title'=>'Login',
					'isi'=>'login/tampilan_login');
		$this->load->view('login/layout/wrapper_login',$data);

	}
	public function getlogin()
	{
		$nomor_induk = $this->input->post('nomor_induk');
		$password = $this->input->post('password');
		$this->db->select('password');
		$this->db->from('users');
		$this->db->where('nomor_induk', $nomor_induk);		
		$level = $this->db->get()->row('level');
		$this->load->model('model_login');
		$this->model_login->getlogin($nomor_induk,$password,$level);
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect ('login');
	}
}
