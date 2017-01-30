<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Riwayat extends CI_Controller {


	public function index()
	{
		$this->model_keamanan->getkeamanan();
		if ($this->session->userdata ('level')=='2') {
			redirect(base_url('admin'));
		}
		$data=array('title'=>'Riwayat - Aplikasi Administrasi Persuratan Online',
				'permintaan_surat' => $this->model_permintaan->tampilriwayat($this->session->userdata('nomor_induk')),
				'nim' => $this->session->userdata('nomor_induk'),
				'pesan_masuk'=> $this->model_permintaan->hitungpesanuser($this->session->userdata('nomor_induk')),
				'isi'=>'user/tampilan_riwayat');
		$this->load->view('user/layout/wrapper', $data);
	}

	public function kirim_pesan(){
		$data=array(
		'penerima'=>$this->input->post('penerima'),
		'id_surat'=>$this->input->post('id_surat'),
		'pengirim'=>$this->input->post('pengirim'),
		'created_at'=>date('Y-m-d'),
		'isi_pesan'=>str_replace(PHP_EOL,'\n',$this->input->post('isi_pesan')),
		'balasan'=>' ',
		'status'=>0,
		'jenissurat'=>$this->input->post('jenis_surat'));
		$namatabel= "pesan";
		$this->model_permintaan->getpermintaan($namatabel,$data);
		redirect(base_url('kontak'));
	}

}
