<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesan extends CI_Controller {


	public function index()
	{
		$this->model_keamanan->getkeamanan();
		if ($this->session->userdata ('level')=='2') {
			redirect(base_url('admin'));
		}
		$this->model_permintaan->ubahstatuspesanuser($this->session->userdata('nomor_induk'));
		$data=array('title'=>'Pesan - Aplikasi Administrasi Persuratan Online',
					'pesan_masuk'=> $this->model_permintaan->hitungpesanuser($this->session->userdata('nomor_induk')),
          'pesan_user' => $this->model_permintaan->tampilpesanuser('pesan',$this->session->userdata('nomor_induk')),
					'isi'=>'user/tampilan_pesan');
		$this->load->view('user/layout/wrapper', $data);
	}

	public function send_mail() {
				$from_email = "cullamaja@gmail.com";
				$to_email = "jaissulham@gmail.com";

				//Load email library
				$this->load->library('email');

				$this->email->from($from_email, 'Staff Prodi');
				$this->email->to($to_email);
				$this->email->subject('PEMBERITAHUAN');
				$this->email->message('Surat anda telah selesai,silahkan mengambil di staff prodi');

				//Send mail
				if($this->email->send())
				echo "Email sent successfully.";
				else
				echo "Error in sending Email.";
				//$this->load->view('email_form');
		 }
}
