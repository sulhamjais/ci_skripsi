<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {


	public function index()
	{
		$this->model_keamanan->getkeamanan();
		if ($this->session->userdata ('level')=='2') {
			redirect(base_url('admin'));
		}
		$data=array('title'=>'Beranda - Aplikasi Administrasi Persuratan Online',
					'pesan_masuk'=> $this->model_permintaan->hitungpesanuser($this->session->userdata('nomor_induk')),
					'isi'=>'user/tampilan_user');
		$this->load->view('user/layout/wrapper', $data);
	}

	public function profile()
	{

		$this->model_keamanan->getkeamanan();
		if ($this->session->userdata ('level')=='2') {
			redirect(base_url('admin'));
		}
		$data=array('title'=>'Profile - Aplikasi Administrasi Persuratan Online',
					'pesan_masuk'=> $this->model_permintaan->hitungpesanuser($this->session->userdata('nomor_induk')),
					'isi'=>'user/tampilan_profile');
		$this->load->view('user/layout/wrapper', $data);
	}

	public function editprofil ()
		{
			$nama= $this->input->post('nama');
			$email= $this->input->post('email');
			$telepon= $this->input->post('telepon');
			$alamat= $this->input->post('alamat');
			$this->model_permintaan->editprofil($this->session->userdata ('nomor_induk'), $nama,$email,$telepon,$alamat);
			$this->session->set_userdata('nama',$nama);
			$this->session->set_userdata('email',$email);
			$this->session->set_userdata('telepon',$telepon);
			$this->session->set_userdata('alamat',$alamat);
			redirect(base_url('user/profile'));
		}

	public function gantipassword ()
		{
			$passwordlama= $this->input->post('passwordlama');
			$passwordbaru= $this->input->post('passwordbaru');
			$this->model_permintaan->gantipassword($passwordlama,$passwordbaru,$this->session->userdata('nomor_induk'));
			redirect(base_url('login'));
		}

	public function simpangambar()
	{
		$config['upload_path']          = './assets/img/';
		$config['file_name']       			= $this->session->userdata('nomor_induk');
		$config['allowed_types']        = 'jpg';
    $config['max_size']             = 2048;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;

		$this->load->library('upload', $config);
			unlink('assets/img/'.$this->session->userdata('nomor_induk').'.jpg');
			if ( ! $this->upload->do_upload('fotoprofile'))
				{
					echo '<script>alert("Pastikan Ukuran Foto tidak lebih dari 2 MB dan Berorientasi Landscape");</script>';

				}
				else
					{
						$data = array(
						        'foto' => 'assets/img/'.$this->session->userdata('nomor_induk').'.jpg'
						);
						$this->db->where('nomor_induk', $this->session->userdata('nomor_induk'));
						$this->db->update('users', $data);
						$this->session->set_userdata('foto','assets/img/'.$this->session->userdata('nomor_induk').'.jpg');
					}
					echo '<script>location.href="profile";</script>';
	}
}
