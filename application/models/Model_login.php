
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_login extends CI_model {


	public function getlogin($nomor_induk,$password,$level)
	{

		$this->db->where('nomor_induk',$nomor_induk);
		$this->db->where('password',$password);
		$chek = $this->db->get('users');

		if ($chek->num_rows()>0) {
			foreach ($chek->result () as $row)
			{
			 	$sess = array (	'nomor_induk'	=> $row->nomor_induk,
								'programstudi' =>$row->programstudi,
								'nama' =>$row->nama,
								'tempat_lahir' =>$row->tempat_lahir,
								'ttl' =>$row->ttl,
								'fakultas' =>$row->fakultas,
								'email'=> $row->email,
								'alamat'=> $row->alamat,
								'telepon'=> $row->no_telepon,
								'foto' =>$row->foto,
			 					'level' =>$row->level);
			 	$this->session->set_userdata($sess);
			 	//redirect(base_url('user'));
		 	}
		 	if ($this->session->userdata ('level')=='1') {
		 		redirect(base_url('user'));

		 	}
		 	elseif ($this->session->userdata ('level') =='2') {
		 		redirect(base_url('admin'));
		 	}
		 }
		 else
			{
				$this->session->set_flashdata('info','Maaf Nomor Induk atau password salah');
				redirect(base_url('login'));
			}

	}





}
