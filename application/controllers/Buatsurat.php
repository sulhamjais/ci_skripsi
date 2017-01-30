<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buatsurat extends CI_Controller {


	public function index()
	{
		$this->model_keamanan->getkeamanan();
		if ($this->session->userdata ('level')=='2') {
			redirect(base_url('admin'));
		}
		$data=array('title'=>'Buat Surat - Aplikasi Administrasi Persuratan Online',
					'pesan_masuk'=> $this->model_permintaan->hitungpesanuser($this->session->userdata('nomor_induk')),
					'isi'=>'user/tampilan_buatsurat');
		$this->load->view('user/layout/wrapper', $data);
	}

	public function ajukan_surat(){
		$data=array(
		'nama'=>$this->input->post('nama'),
		'created_at'=>date('Y-m-d'),
		'nim'=>$this->input->post('nim'),
		'tempat_lahir'=>$this->input->post('tempatlahir'),
		'ttl' =>date('Y-m-d', strtotime(str_replace('/','-',$this->input->post('ttl')))),
		'fakultas'=>$this->input->post('fakultas'),
		'programstudi'=>$this->input->post('programstudi'),
		'alamat'=>$this->input->post('alamat'),
		'jenissurat'=>"Aktif Kuliah",
		'status'=>'0');
		$namasurat= "surat";
		$this->model_permintaan->getpermintaan($namasurat,$data);
		redirect(base_url('buatsurat'));
	}

	public function viewTutupstrata(){
		$this->model_keamanan->getkeamanan();
		if ($this->session->userdata ('level')=='2') {
			redirect(base_url('admin'));
		}
		$data=array('title'=>'Buat Surat - buat surat 2',
					'pesan_masuk'=> $this->model_permintaan->hitungpesanuser($this->session->userdata('nomor_induk')),
					'isi'=>'user/tampilan_buatsurat2');
		$this->load->view('user/layout/wrapper', $data);
	}

	public function ajukan_surattutupstrata(){
		$data=array(
		'nama'=>$this->input->post('nama'),
		'created_at'=>date('Y-m-d'),
		'nim'=>$this->input->post('nim'),
		'matakuliah'=>$this->input->post('matakuliah'),
		'programstudi'=>$this->session->userdata('programstudi'),
		'kode_matakuliah'=>$this->input->post('kodematakuliah'),
		'jenissurat'=>"Surat Tutup Strata",
		'status'=>'0');
		$namasurat= "tutupstrata";
		$this->model_permintaan->getpermintaan($namasurat,$data);
		redirect(base_url('buatsurat'));
	}

	public function viewPindahKampus(){
		$this->model_keamanan->getkeamanan();
		if ($this->session->userdata ('level')=='2') {
			redirect(base_url('admin'));
		}
		$data=array('title'=>'Buat Surat - buat surat 2',
					'pesan_masuk'=> $this->model_permintaan->hitungpesanuser($this->session->userdata('nomor_induk')),
					'isi'=>'user/tampilan_buatsuratPindahKampus');
		$this->load->view('user/layout/wrapper', $data);
	}

	public function ajukan_suratpindahkampus(){
		$data=array(
		'nama'=>$this->input->post('nama'),
		'created_at'=>date('Y-m-d'),
		'nim'=>$this->input->post('nim'),
		'fakultas'=>$this->input->post('fakultas'),
		'programstudi'=>$this->input->post('programstudi'),
		'jenissurat'=>"Surat Pindah Kampus",
		'status'=>'0');
		$namasurat= "pindahkampus";
		$this->model_permintaan->getpermintaan($namasurat,$data);
		redirect(base_url('buatsurat'));
	}

	public function viewIzinpenelitian(){
		$this->model_keamanan->getkeamanan();
		if ($this->session->userdata ('level')=='2') {
			redirect(base_url('admin'));
		}
		$data=array('title'=>'Buat Surat - Buat Surat Izin Penelitian',
					'pesan_masuk'=> $this->model_permintaan->hitungpesanuser($this->session->userdata('nomor_induk')),
					'isi'=>'user/tampilan_buatsuratizinpenelitian');
		$this->load->view('user/layout/wrapper', $data);
	}

	public function ajukan_suratizinpenelitian(){
		$data=array(
		'nama'=>$this->input->post('nama'),
		'created_at'=>date('Y-m-d'),
		'nim'=>$this->input->post('nim'),
		'programstudi'=>$this->session->userdata('programstudi'),
		'judulTA'=>$this->input->post('judulTA'),
		'tempat'=>$this->input->post('tempat'),
		'data_penelitian'=>$this->input->post('data'),
		'jenissurat'=>"Surat Izin Penelitian",
		'status'=>'0');
		$namasurat= "izinpenelitian";
		$this->model_permintaan->getpermintaan($namasurat,$data);
		redirect(base_url('buatsurat'));
	}

	public function viewKerjapraktek(){
		$this->model_keamanan->getkeamanan();
		if ($this->session->userdata ('level')=='2') {
			redirect(base_url('admin'));
		}
		$data=array('title'=>'Buat Surat - Buat Surat Kerja Praktek',
					'pesan_masuk'=> $this->model_permintaan->hitungpesanuser($this->session->userdata('nomor_induk')),
					'isi'=>'user/tampilan_buatsuratkerjapraktek');
		$this->load->view('user/layout/wrapper', $data);
	}

	public function ajukan_suratkerjapraktek(){
		if  ($this->input->post('nama3')=="" && $this->input->post('nama2')=="" && $this->input->post('nama1')=="") {
			$nama = $this->input->post('nama').":".$this->input->post('nim');
		}else if ($this->input->post('nama3')=="" && $this->input->post('nama2')=="") {
			$nama = $this->input->post('nama').":".$this->input->post('nim').",".$this->input->post('nama1').":".$this->input->post('nim1');
		}else if ($this->input->post('nama3')==""){
		$nama = $this->input->post('nama').":".$this->input->post('nim').",".$this->input->post('nama1').":".$this->input->post('nim1').",".
						$this->input->post('nama2').":".$this->input->post('nim2');
		}else {
			$nama = $this->input->post('nama').":".$this->input->post('nim').",".$this->input->post('nama1').":".$this->input->post('nim1').",".
							$this->input->post('nama2').":".$this->input->post('nim2').",".$this->input->post('nama3').":".$this->input->post('nim3')."";
		}
		$waktukp = $this->input->post('waktukp1')." s/d ". $this->input->post('waktukp2');
		$data=array(
		'nama'=>$nama,
		'nim'=>$this->session->userdata('nomor_induk'),
		'created_at'=>date('Y-m-d'),
		'nama_perusahaan'=>$this->input->post('namaperusahaan'),
		'alamat_perusahaan'=>$this->input->post('alamatperusahaan'),
		'lama_kp'=>$this->input->post('lamakp'),
		'waktu_kp'=>$waktukp,
		'programstudi'=>$this->session->userdata('programstudi'),
		'jenissurat'=>"Surat Kerja Praktek",
		'status'=>'0');
		$namasurat= "kerjapraktek";
		$this->model_permintaan->getpermintaan($namasurat,$data);
		redirect(base_url('buatsurat'));
	}

	public function viewSuratlain(){
		$this->model_keamanan->getkeamanan();
		if ($this->session->userdata ('level')=='2') {
			redirect(base_url('admin'));
		}
		$data=array('title'=>'Buat Surat - Buat Surat Lain',
					'pesan_masuk'=> $this->model_permintaan->hitungpesanuser($this->session->userdata('nomor_induk')),
					'isi'=>'user/tampilan_buatsuratlain');
		$this->load->view('user/layout/wrapper', $data);
	}

	public function ajukan_suratlain(){
		$data=array(
		'nama'=>$this->input->post('nama'),
		'created_at'=>date('Y-m-d'),
		'nim'=>$this->input->post('nim'),
		'programstudi'=>$this->session->userdata('programstudi'),
		'perihal'=>$this->input->post('perihal'),
		'tujuansurat'=>$this->input->post('tujuansurat'),
		'jenissurat'=>"Surat Lain",
		'status'=>'0');
		$namasurat= "suratlain";
		$this->model_permintaan->getpermintaan($namasurat,$data);
		redirect(base_url('buatsurat'));
	}



}
