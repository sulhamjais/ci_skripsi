<?php foreach ($surat as $list) {
	$nama_mahasiswa= explode(",",  $list['nama']);?>
<tr>
	<td colspan="5" >
		<input type="hidden" name="idnomor" id="idnomor" value="<?php echo $nosurat;?>">
		<input type="hidden" name="idsurat" id="idsurat" value="<?php echo $list['id'];?>">
		<table style="width:110%;" border="0">
				<tr>
					<td style="width:12%;">Nomor</td>
					<td style="width:65%;">:<?php if ($list['nomor_surat']=="-") {?>  
										<span id="no" name="no"><?php
										if (strlen($nosurat)==1) {
											echo "00".$nosurat;
										}else if(strlen($nosurat)==2) {
											echo "0".$nosurat;
										}else {
											echo $nosurat;
										} ?></span><a href="#" id="nosurat" data-type="text">/UN</a>
									 <?php }else{ ?>
										 <a href="#"><?php echo $list['nomor_surat'];?></a>
									 <?php } ?>
					</td>
					<td >  <?php $today = date("j F Y"); echo $today; ?></td>
				</tr>
				<tr>
					<td>Lamp</td>
					<td>: - </td>
					<td> </td>
				</tr>
				<tr>
					<td>Hal</td>
					<td>: Permohonan Kerja Praktek</td>
					<td></td>
				</tr>
				<tr>
					<td>Kepada Yth</td>
					<td rowspan="2">: Bapak Wakil Dekan Bidang Akademik <br>&nbsp Fakultas Teknik UNHAS <br>&nbsp Di- <br>&nbsp Makassar</td>
					<td></td>
				</tr>
				<tr>
					<td></br> </br> </br> </td>
					<td></td>
				</tr>
		</table>
	</td>
</tr>

<tr>
  <td colspan="5">
		<table style="width:100%;" border="0">
			<tr>
				<td style="width:14.4%"></td>
				<td colspan="3">
				</br>
					<p style="text-align:justify; width: 100%">
						Dengan hormat,<br> Bersama ini kami sampaikan bahwa mahasiswa tersebut di bawah ini :
					</p>
				</td>
			</tr>
			<?php foreach ($nama_mahasiswa as $data_mahasiswa) {
				$detail_mahasiswa=explode (":",  $data_mahasiswa);?>
				<tr>
					<td><td>
					<td style="width:23%">&nbsp Nama </td>
					<td>:  <?php echo $detail_mahasiswa[0]; ?>  </td>

				</tr>
				<tr>
					<td><td>
					<td>&nbsp Stambuk</td>
					<td>:  <?php echo $detail_mahasiswa[1]; ?>  </td>
				</tr>
			<?php } ?>

			<tr>
				<td style="width:13%"></td>
				<td colspan="3">
						Dapat diberikan surat pengantar untuk mendapat Kerja Praktek pada :
				</td>
			</tr>
			<tr>
				<td><td>
				<td colspan="2">&nbsp <strong> <?php echo $list['nama_perusahaan']?> </strong></td>
			</tr>
			<tr>
				<td><td>
				<td style="width:20%">Kerja Praktek Bidang</td>
				<td>: <?php echo $list['programstudi']?></td>
			</tr>
			<tr>
				<td><td>
				<td>Selama</td>
				<td>: <?php echo $list['lama_kp']?></td>
			</tr>
			<tr>
				<td><td>
				<td>Waktu yang diusulkan</td>
				<td>: <?php echo $list['waktu_kp']?></td>
			</tr>
			<tr>
				<td style="width:13%"></td>
				<td colspan="3">
				</br>Demikian penyampaian kami,atas perhatian dan kerjasamanya kami ucapkan terima kasih.
				</td>
			</tr>
		</table>
  </td>
</tr>

<tr>
	<td colspan="5">
		<table  style="width:100%" border="0">
			<tr>
				<td style="width:60%"></td>
				<td colspan="4">
					</br>
					<p>&nbsp Makassar, <?php $today = date("j F Y"); echo $today; ?>
					</br>&nbsp Ketua Program Studi Teknik Informatika,</p>
					<br><br><br><br><u>
					<center> Dr. Amil Ahmad Ilham, ST., M.IT.</u><br> NIP. 197310101998021001</center>
				</td>
			</tr>
			<tr>
				<td  style="text-align: left; font-size:12px; font-style:italic;">
					<p></br>Tembusan:
						<ol>
							<li>Arsip</li>
							<li>Ketua Program Studi <?php echo $this->session->userdata('programstudi');?> Unhas</li>
						</ol>
					</p>
				</td>
				<td > </td>
			</tr>
		</table>
	</td>
</tr>
			</tbody>
		</tabel>

	</div>
	</div>
	</div>
<?php } ?>

<script type="text/javascript">
$('#nosurat').editable({
type: 'text',
success: function(k,v){
  $.ajax({
        type: "POST",
        url: '<?php echo base_url().'kerjapraktek/updatenomorsurat'; ?>',
        data: {"nosurat": document.getElementById('no').innerHTML+v,  //ini mau diedit (liat aktifkuliah)
                "idnomor": document.getElementById('idnomor').value,
                "idsurat": document.getElementById('idsurat').value
              },  // fix: need to append your data to the call
        success: function (data) {
          console.log(data);
        }
    });
    //window.location='<?php echo base_url(); ?>aktifkuliah/updatenomorsurat/'+document.getElementById('idnomor').value+v+"/"+document.getElementById('idnomor').value+"/"+document.getElementById('idsurat').value;
}
});
</script>
