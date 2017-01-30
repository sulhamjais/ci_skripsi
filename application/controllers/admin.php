<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$namasurat='surat';
		$this->model_keamanan->getkeamanan();
		if ($this->session->userdata ('level')=='1') {
			redirect(base_url('user'));
		}
		$data=array('title'=>'Beranda - Aplikasi Administrasi Persuratan Online',
					'permintaan_surat' => $this->model_permintaan->tampilsuratselesai($this->session->userdata('programstudi')),
					'permintaan_nomorsurat' => $this->model_permintaan->tampilnomorsurat($this->session->userdata('programstudi')),
					'pesan_masuk'=> $this->model_permintaan->hitungpesan($this->session->userdata('nomor_induk')),
					'surat_aktifkuliah'=> $this->model_permintaan->hitungjenissurat('surat',$this->session->userdata('programstudi')),
					'surat_kp'=> $this->model_permintaan->hitungjenissurat('kerjapraktek',$this->session->userdata('programstudi')),
					'surat_tutupstrata'=> $this->model_permintaan->hitungjenissurat('tutupstrata',$this->session->userdata('programstudi')),
					'surat_izinpenelitian'=> $this->model_permintaan->hitungjenissurat('izinpenelitian',$this->session->userdata('programstudi')),
					'surat_pindahkampus'=> $this->model_permintaan->hitungjenissurat('pindahkampus',$this->session->userdata('programstudi')),
					'surat_lain'=> $this->model_permintaan->hitungjenissurat('suratlain',$this->session->userdata('programstudi')),
					'surat_proses'=> $this->model_permintaan->hitungsurat($this->session->userdata('programstudi'),1),
					'surat_selesai'=> $this->model_permintaan->hitungsurat($this->session->userdata('programstudi'),3),
					'surat_batal'=> $this->model_permintaan->hitungsurat($this->session->userdata('programstudi'),4),
					'isi'=>'admin/tampilan_beranda');
		$this->load->view('admin/layout/wrapper', $data);
	}

	public function profile()
	{
		$this->model_keamanan->getkeamanan();
		if ($this->session->userdata ('level')=='1') {
			redirect(base_url('user'));
		}
		$data=array('title'=>'Profile - Aplikasi Administrasi Persuratan Online',
					'pesan_masuk'=> $this->model_permintaan->hitungpesan($this->session->userdata('nomor_induk')),
					'surat_aktifkuliah'=> $this->model_permintaan->hitungjenissurat('surat',$this->session->userdata('programstudi')),
					'surat_kp'=> $this->model_permintaan->hitungjenissurat('kerjapraktek',$this->session->userdata('programstudi')),
					'surat_tutupstrata'=> $this->model_permintaan->hitungjenissurat('tutupstrata',$this->session->userdata('programstudi')),
					'surat_izinpenelitian'=> $this->model_permintaan->hitungjenissurat('izinpenelitian',$this->session->userdata('programstudi')),
					'surat_pindahkampus'=> $this->model_permintaan->hitungjenissurat('pindahkampus',$this->session->userdata('programstudi')),
					'surat_lain'=> $this->model_permintaan->hitungjenissurat('suratlain',$this->session->userdata('programstudi')),
					'isi'=>'admin/tampilan_profile');
		$this->load->view('admin/layout/wrapper', $data);
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
			redirect(base_url('admin/profile'));
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
