<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Izinpenelitian extends CI_Controller {


	public function index()
	{
		$namasurat='izinpenelitian';
		$this->model_keamanan->getkeamanan();
		if ($this->session->userdata ('level')=='1') {
			redirect(base_url('user'));
		}
		$data=array('title'=>'Surat Izin Penelitian - Aplikasi Administrasi Persuratan Online',
					'isi'=>'admin/tampilan_izinpenelitian',
					'pesan_masuk'=> $this->model_permintaan->hitungpesan($this->session->userdata('nomor_induk')),
					'surat_aktifkuliah'=> $this->model_permintaan->hitungjenissurat('surat',$this->session->userdata('programstudi')),
					'surat_kp'=> $this->model_permintaan->hitungjenissurat('kerjapraktek',$this->session->userdata('programstudi')),
					'surat_tutupstrata'=> $this->model_permintaan->hitungjenissurat('tutupstrata',$this->session->userdata('programstudi')),
					'surat_izinpenelitian'=> $this->model_permintaan->hitungjenissurat('izinpenelitian',$this->session->userdata('programstudi')),
					'surat_pindahkampus'=> $this->model_permintaan->hitungjenissurat('pindahkampus',$this->session->userdata('programstudi')),
					'surat_lain'=> $this->model_permintaan->hitungjenissurat('suratlain',$this->session->userdata('programstudi')),
					'permintaan_surat' => $this->model_permintaan->tampilsurat($namasurat,$this->session->userdata('programstudi')));
		$this->load->view('admin/layout/wrapper', $data);
	}

	public function suratselesai()
		{
			$id = $this->uri->segment(3);
			$tanggal=date('Y-m-d');
			$this->model_permintaan->aprovesurat('izinpenelitian',$id,$tanggal);
			//$email=$this->model_permintaan->getemail('izinpenelitian',$id);
			//$this->send_mail($email[0]['email']);
			redirect(base_url("/izinpenelitian"));
		}

		public function view_izinpenelitian()
		{
			$nomorsurat = "";
			$namasurat='izinpenelitian';
			$id = $this->uri->segment(3);
			$this->model_keamanan->getkeamanan();
			if ($this->session->userdata ('level')=='1') {
				redirect(base_url('user'));
			}

			$ceknomorsurat=$this->model_permintaan->cetaksurat('izinpenelitian',$id);
			if ($ceknomorsurat[0]['nomor_surat']=='-') {
					$nomorsurat = $this->model_permintaan->ambilnomorsurat($this->session->userdata('programstudi'));
					$nomorsurat++;
				$this->model_permintaan->ubahnomorsurat($nomorsurat,$this->session->userdata('programstudi'));
			}
			$data=array('title'=>'Surat Izin Penelitian - Aplikasi Administrasi Persuratan Online',
						'isi'=>'surat/tampilan_suratizinpenelitian',
						'nosurat'=> $nomorsurat,
						'surat' => $this->model_permintaan->cetaksurat($namasurat,$id));
			$this->load->view('surat/layout/wrapper', $data);
		}

		public function suratproses()
			{
				$id = $this->uri->segment(3);
				$tanggal=date('Y-m-d');
				$this->model_permintaan->prosessurat('izinpenelitian',$id,$tanggal);
				redirect(base_url("/izinpenelitian/view_izinpenelitian/$id"));
			}

			public function updatenomorsurat(){
				$nosurat = $this->input->post('nosurat');
				$idnomor = $this->input->post('idnomor');
				$idsurat = $this->input->post('idsurat');
				$this->model_permintaan->updatenomorsurat('izinpenelitian',$idnomor,$idsurat,$nosurat,$this->session->userdata('programstudi'));
				//redirect(base_url("/aktifkuliah/view_aktifkuliah/$idsurat"));
			}
		public function suratkefakultas()
			{
				$id = $this->uri->segment(3);
				$tanggal=date('Y-m-d');
				$this->model_permintaan->kirimkefakultas('izinpenelitian',$id,$tanggal);
				redirect(base_url("/izinpenelitian"));
			}

			public function suratbatal()
				{
					$id = $this->uri->segment(3);
					$this->model_permintaan->batalsurat('izinpenelitian',$id);
					redirect(base_url("/izinpenelitian"));
				}

				public function send_mail($email)
				{
							$from_email = "cullamaja@gmail.com";
							$to_email = $email;

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
