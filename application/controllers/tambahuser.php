<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tambahuser extends CI_Controller {

	public function index()
	{
		$this->model_keamanan->getkeamanan();
		if ($this->session->userdata ('level')=='1') {
			redirect(base_url('user'));
		}
		$data=array('title'=>'Tambah Mahasiswa - Aplikasi Administrasi Persuratan Online',
					'surat_aktifkuliah'=> $this->model_permintaan->hitungjenissurat('surat',$this->session->userdata('programstudi')),
					'surat_kp'=> $this->model_permintaan->hitungjenissurat('kerjapraktek',$this->session->userdata('programstudi')),
					'surat_tutupstrata'=> $this->model_permintaan->hitungjenissurat('tutupstrata',$this->session->userdata('programstudi')),
					'surat_izinpenelitian'=> $this->model_permintaan->hitungjenissurat('izinpenelitian',$this->session->userdata('programstudi')),
					'surat_pindahkampus'=> $this->model_permintaan->hitungjenissurat('pindahkampus',$this->session->userdata('programstudi')),
					'surat_lain'=> $this->model_permintaan->hitungjenissurat('suratlain',$this->session->userdata('programstudi')),
					'pesan_masuk'=> $this->model_permintaan->hitungpesan($this->session->userdata('nomor_induk')),
					'isi'=>'admin/tampilan_tambahuser');
		$this->load->view('admin/layout/wrapper', $data);
	}

	public function tambahmahasiswa(){
		$data=array(
		'nama'=>$this->input->post('nama'),
		'nomor_induk'=>$this->input->post('nim'),
		'password'=>$this->input->post('password'),
		'tempat_lahir'=>$this->input->post('tempatlahir'),
		'ttl' =>date('Y-m-d', strtotime(str_replace('/','-',$this->input->post('ttl')))),
		'fakultas'=>$this->input->post('fakultas'),
		'programstudi'=>$this->input->post('programstudi'),
		'alamat'=>$this->input->post('alamat'),
		'agama'=>$this->input->post('agama'),
		'no_telepon'=>$this->input->post('telepon'),
		'email'=>$this->input->post('email'),
		'foto'=>'assets/img/find_user.png',
		'level'=>'1',
		'jenis_kelamin'=>$this->input->post('jeniskelamin'));
		$namatabel= "users";
		$this->model_permintaan->getpermintaan($namatabel,$data);
		redirect(base_url('tambahuser'));
	}
}
