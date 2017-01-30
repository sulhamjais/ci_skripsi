<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_keamanan extends CI_Model {


	public function getkeamanan()
	{
		$nomor_induk = $this->session->userdata('nomor_induk');
		if (empty($nomor_induk)) {
			$this->session->sess_destroy();
			redirect('login');
		}
	}
}
