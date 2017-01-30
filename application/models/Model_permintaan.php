<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_permintaan extends CI_model {

	public function getpermintaan($namasurat,$data)
	{

		$query = $this->db->insert($namasurat,$data);
		//return $query->result_array();

	}

	public function tampilpesan($namatabel,$penerima)
	{
		$query = $this->db->query("SELECT * FROM $namatabel WHERE penerima='$penerima' ORDER BY created_at DESC") ;
		return $query->result_array();
	}

	public function hitungpesan ($penerima)
	{
		$query = $this->db->query("SELECT * FROM pesan WHERE penerima='$penerima' AND balasan=' '");
		return $query->num_rows();
	}

	public function hitungpesanuser ($pengirim)
	{
		$query = $this->db->query("SELECT * FROM pesan WHERE pengirim='$pengirim' AND status=1");
		return $query->num_rows();
	}
	public function ubahstatuspesanuser($nim){
		$query = $this->db->query("UPDATE pesan SET status=2 WHERE pengirim='$nim'");
	}

	public function hitungjenissurat ($jenissurat,$prodi)
	{
		$query = $this->db->query("SELECT * FROM $jenissurat WHERE status=0 AND programstudi='$prodi'");
		return $query->num_rows();
	}

	public function hitungsurat ($prodi,$status)
	{
		$query = $this->db->query("SELECT created_at,jenissurat,nama FROM surat WHERE programstudi='$prodi' AND status=$status
			UNION SELECT created_at,jenissurat,nama FROM kerjapraktek WHERE programstudi='$prodi' AND status=$status
			UNION SELECT created_at,jenissurat,nama FROM izinpenelitian WHERE programstudi='$prodi' AND status=$status
			UNION SELECT created_at,jenissurat,nama FROM tutupstrata WHERE programstudi='$prodi' AND status=$status
			UNION SELECT created_at,jenissurat,nama FROM suratlain WHERE programstudi='$prodi' AND status=$status
			UNION SELECT created_at,jenissurat,nama FROM pindahkampus WHERE programstudi='$prodi' AND status=$status");
		return $query->num_rows();
	}

	public function tampilpesanuser($namatabel,$pengirim)
	{
		$query = $this->db->query("SELECT * FROM $namatabel WHERE pengirim='$pengirim' ");
		return $query->result_array();
	}


	public function tampilsurat($namasurat, $prodi){
		$query = $this->db->query("SELECT * FROM $namasurat WHERE programstudi='$prodi' AND status !=3 AND status!=4 ORDER BY created_at ASC ");
		return $query->result_array();
	}

	public function balaspesan($namatabel,$id,$balasan){
		$query = $this->db->query("UPDATE $namatabel SET balasan='$balasan',status=1 WHERE id=$id");
	}

	public function tampilstaff($prodi){
		$query = $this->db->query("SELECT * FROM users WHERE level='2' AND programstudi='$prodi'");
		return $query->result_array();
	}

	public function gantipassword($passwordlama,$passwordbaru,$nomor_induk){
		$query = $this->db->query("UPDATE users SET password='$passwordbaru' WHERE nomor_induk='$nomor_induk' AND password='$passwordlama'");
	}

	public function editprofil($nomor_induk,$nama,$email,$telepon,$alamat){
		$query = $this->db->query("UPDATE users SET nama='$nama', email='$email', no_telepon='$telepon', alamat='$alamat' WHERE nomor_induk='$nomor_induk'");

	}

	public function tampilriwayat($nim){
		$query = $this->db->query("SELECT id,created_at,jenissurat,status FROM surat WHERE nim='$nim'
			UNION SELECT id,created_at,jenissurat,status FROM tutupstrata WHERE nim='$nim'
			UNION SELECT id,created_at,jenissurat,status FROM kerjapraktek WHERE nama LIKE '%$nim%'
			UNION SELECT id,created_at,jenissurat,status FROM izinpenelitian WHERE nim='$nim'
			UNION SELECT id,created_at,jenissurat,status FROM suratlain WHERE nim='$nim'
			UNION SELECT id,created_at,jenissurat,status FROM pindahkampus WHERE nim='$nim'");
		return $query->result_array();
	}

	public function tampilnomorsurat($prodi){
		$query = $this->db->query("(SELECT created_at,waktu_suratselesai,jenissurat,nomor_surat FROM surat WHERE programstudi='$prodi' AND status=3 )
			UNION (SELECT created_at,waktu_suratselesai,jenissurat,nomor_surat FROM kerjapraktek WHERE programstudi='$prodi' AND status=3 )
			UNION (SELECT created_at,waktu_suratselesai,jenissurat,nomor_surat FROM izinpenelitian WHERE programstudi='$prodi' AND status=3 )
			UNION (SELECT created_at,waktu_suratselesai,jenissurat,nomor_surat FROM tutupstrata WHERE programstudi='$prodi' AND status=3 )
			UNION (SELECT created_at,waktu_suratselesai,jenissurat,nomor_surat FROM suratlain WHERE programstudi='$prodi' AND status=3 )
			UNION (SELECT created_at,waktu_suratselesai,jenissurat,nomor_surat FROM pindahkampus WHERE programstudi='$prodi' AND status=3 ) ORDER BY created_at DESC");
		return $query->result_array();
	}
	public function tampilsuratselesai($prodi){
		$query = $this->db->query("(SELECT created_at,waktu_suratselesai,waktu_prosesstaff,waktu_kirimfakultas,jenissurat,nama,nim FROM surat WHERE programstudi='$prodi' AND status=3 )
			UNION (SELECT created_at,waktu_suratselesai,waktu_prosesstaff,waktu_kirimfakultas,jenissurat,nama,nim FROM kerjapraktek WHERE programstudi='$prodi' AND status=3 )
			UNION (SELECT created_at,waktu_suratselesai,waktu_prosesstaff,waktu_kirimfakultas,jenissurat,nama,nim FROM izinpenelitian WHERE programstudi='$prodi' AND status=3 )
			UNION (SELECT created_at,waktu_suratselesai,waktu_prosesstaff,waktu_kirimfakultas,jenissurat,nama,nim FROM tutupstrata WHERE programstudi='$prodi' AND status=3 )
			UNION (SELECT created_at,waktu_suratselesai,waktu_prosesstaff,waktu_kirimfakultas,jenissurat,nama,nim FROM suratlain WHERE programstudi='$prodi' AND status=3 )
			UNION (SELECT created_at,waktu_suratselesai,waktu_prosesstaff,waktu_kirimfakultas,jenissurat,nama,nim FROM pindahkampus WHERE programstudi='$prodi' AND status=3 ) ORDER BY created_at DESC");
		return $query->result_array();
	}

	public function getemail($jenissurat,$id){
		$query = $this->db->query("SELECT users.email FROM users,$jenissurat  WHERE users.nomor_induk=$jenissurat.nim AND $jenissurat.id=$id");
		return $query->result_array();
	}

	public function cetaksurat($jenissurat,$idsurat){
		$query = $this->db->query("SELECT * FROM $jenissurat WHERE id=$idsurat");
		return $query->result_array();
	}

	public function aprovesurat($jenissurat,$idsurat,$tanggal){
		$query = $this->db->query("UPDATE $jenissurat SET status=3, waktu_suratselesai='$tanggal' WHERE id=$idsurat");
	}

	public function prosessurat($jenissurat,$idsurat,$tanggal){
		$query = $this->db->query("UPDATE $jenissurat SET status=1,waktu_prosesstaff='$tanggal' WHERE id=$idsurat");
	}

	public function ubahnomorsurat($nomorsurat,$prodi){
		$query = $this->db->query("INSERT INTO nomorsurat (id,programstudi) VALUES ('$nomorsurat','$prodi')");
	}

	public function updatenomorsurat($jenissurat,$idnomor,$idsurat,$nomorsurat,$prodi){
		$query = $this->db->query("UPDATE $jenissurat SET nomor_surat='$nomorsurat' WHERE id=$idsurat");
		$query = $this->db->query("UPDATE nomorsurat SET nomor_surat='$nomorsurat' WHERE id=$idnomor AND programstudi='$prodi'");
	}

	public function ceknomorsurat($jenissurat,$idsurat){
		$query = $this->db->query("SELECT nomor_surat FROM $jenissurat WHERE id=$idsurat");
		return $query->result_array();
	}

	public function ambilnomorsurat($prodi){
		$qry = $this->db->query("SELECT * FROM nomorsurat WHERE programstudi='$prodi' ORDER BY id DESC LIMIT 1");
		$table_row_count = $qry->num_rows();
		if ($table_row_count>0) {
			$query = $this->db->query("SELECT * FROM nomorsurat WHERE programstudi='$prodi' ORDER BY index_id DESC LIMIT 1");
			$data = $query->result_array();
			return $data[0]["id"];
		} else {
			return $id=0;
		}
	}

	public function batalsurat($jenissurat,$idsurat){
		$query = $this->db->query("UPDATE $jenissurat SET status=4 WHERE id=$idsurat");
	}

	public function kirimkefakultas($jenissurat,$idsurat,$tanggal){
		$query = $this->db->query("UPDATE $jenissurat SET status=2, waktu_kirimfakultas='$tanggal' WHERE id=$idsurat");
	}

	public function hapuspesan($id){
		$query = $this->db->query("DELETE FROM pesan WHERE id=$id");
	}
}
