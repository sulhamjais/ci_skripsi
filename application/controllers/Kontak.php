<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {


	public function index()
	{
		$this->model_keamanan->getkeamanan();
		if ($this->session->userdata ('level')=='2') {
			redirect(base_url('admin'));
		}
		$data=array('title'=>'Buat Surat - Aplikasi Administrasi Persuratan Online',
					'data_staff' => $this->model_permintaan->tampilstaff($this->session->userdata('programstudi')),
					'nim' => $this->session->userdata('nomor_induk'),
					'pesan_masuk'=> $this->model_permintaan->hitungpesanuser($this->session->userdata('nomor_induk')),
					'isi'=>'user/tampilan_kontak');
		$this->load->view('user/layout/wrapper', $data);
	}

	public function tampilan_pesan()
	{
		$namatabel='pesan';
		$this->model_keamanan->getkeamanan();
		if ($this->session->userdata ('level')=='1') {
			redirect(base_url('user'));
		}
		$data=array('title'=>'Pesan Masuk - Aplikasi Administrasi Persuratan Online',
					'pesan_masuk'=> $this->model_permintaan->hitungpesan($this->session->userdata('nomor_induk')),
					'surat_aktifkuliah'=> $this->model_permintaan->hitungjenissurat('surat',$this->session->userdata('programstudi')),
					'surat_kp'=> $this->model_permintaan->hitungjenissurat('kerjapraktek',$this->session->userdata('programstudi')),
					'surat_tutupstrata'=> $this->model_permintaan->hitungjenissurat('tutupstrata',$this->session->userdata('programstudi')),
					'surat_izinpenelitian'=> $this->model_permintaan->hitungjenissurat('izinpenelitian',$this->session->userdata('programstudi')),
					'surat_pindahkampus'=> $this->model_permintaan->hitungjenissurat('pindahkampus',$this->session->userdata('programstudi')),
					'surat_lain'=> $this->model_permintaan->hitungjenissurat('suratlain',$this->session->userdata('programstudi')),
					'pengiriman_pesan' => $this->model_permintaan->tampilpesan($namatabel,$this->session->userdata('nomor_induk')),
					'isi'=>'admin/tampilan_pesan');
		$this->load->view('admin/layout/wrapper', $data);
	}

	public function balas_pesan()
		{
			$id=$this->input->post('idpesan');
			$balasan=$this->input->post('balas_pesan',true);
			$balas = str_replace(PHP_EOL,'<br>',$balasan);
			$namatabel= "pesan";
			$this->model_permintaan->balaspesan($namatabel,$id,$balas);
			redirect(base_url('kontak/tampilan_pesan'));
		}

	public function kirim_pesan(){
		$data=array(
		'penerima'=>$this->input->post('penerima'),
		'pengirim'=>$this->input->post('pengirim'),
		'created_at'=>date('Y-m-d'),
		'isi_pesan'=>str_replace(PHP_EOL,'\n',$this->input->post('isi_pesan')),
		'balasan'=>' ',
		'status'=>0);
		$namatabel= "pesan";
		$this->model_permintaan->getpermintaan($namatabel,$data);
		redirect(base_url('kontak'));
	}

	public function hapuspesan()
		{
			$id = $this->uri->segment(3);
			$this->model_permintaan->hapuspesan($id);
			redirect(base_url('kontak/tampilan_pesan'));
		}

}
