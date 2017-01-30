




			  <tr>
					<?php foreach ($surat as $list) {?>
            <td colspan="5" >
							<input type="hidden" name="idnomor" id="idnomor" value="<?php echo $nosurat;?>">
		          <input type="hidden" name="idsurat" id="idsurat" value="<?php echo $list['id'];?>">
						<table style="width:110%;" border="0">
						  <tr>
						    <td>Nomor</td>
						    <td>:<?php if ($list['nomor_surat']=="-") {?>  
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
						    <td>  <?php $today = date("j F Y"); echo $today; ?></td>
						  </tr>
						  <tr>

						    <td>Lamp</td>
						    <td>: 1 Lembar </td>
						  </tr>
						  <tr>
						    <td>Hal</td>
						    <td>: Penutup Strata </td>
						  </tr>
              <tr>
						    <td>Kepada Yth</td></tr>
                <tr>
                <td></td>
						    <td>: Bapak Wakil Dekan Bidang Akademik <br>&nbsp Fakultas Teknik UNHAS <br>&nbsp Di- <br>&nbsp Makassar</td>
						  </tr>

						</table>
                	</td>
                </tr>

                <tr>

                	<td colspan="5">
                    <br>
                		<p style="text-align:justify; width: 95%">
                			Dengan hormat,<br> Berdasarkan permintaan mahasiswa dan telah memenuhi persyaratan Penutup Strata maka Mahasiswa <a href="#" id="nama_mahasiswa" data-type="text"> <?php echo $list['nama']?></a> / <a href="#" id="nim" data-type="text"> <?php echo $list['nim']?></a>
                      dengan matakuliah sebagai berikut :
                		</p>
                		<table style="width:100%" border="0">
						  <tr>

						    <td style="width:30%">&nbsp 1. Mata Kuliah </td>
						    <td>: <a href="#" id="kode_matakuliah" data-type="text"> <?php echo $list['kode_matakuliah']?></a> / <a href="#" id="matakuliah" data-type="text"> <?php echo $list['matakuliah']?></a></td>
						    	<tr>
						    		<td>&nbsp &nbsp &nbsp Dosen</td>
						    		<td>: <a href="#" id="nama_dosen" data-type="text"> [Nama Dosen]</a>  </td>
						    	</tr>

						  </tr>
              <tr>

						    <td>&nbsp 2. Mata Kuliah </td>
						    <td>: <a href="#" id="kode_matakuliah" data-type="text"> <?php echo $list['kode_matakuliah']?> </a> / <a href="#" id="matakuliah" data-type="text"> <?php echo $list['matakuliah']?></a></td>
						    	<tr>
						    		<td>&nbsp &nbsp &nbsp Dosen</td>
						    		<td>: <a href="#" id="nama_dosen" data-type="text"> [Nama Dosen]</a>  </td>
						    	</tr>

						  </tr>
						</table>
                		<p>
                    </br> Sehubungan hal tersebut, maka mohon kiranya dapat diberikan penugasan Penutup Strata (4 minggu dan 12 kali pertemuan) keada Dosen yang bersangkutan.
                    <br> Demikianlah penyampaian kami, atas kehadiran Bapak/Ibu kami ucapkan terima kasih.
                		</p>
                	</td>

                </tr>
            <tr>
                <tr>
                	<td colspan="3"></td>
                	<td colspan="4">
                	<p>&nbspMakassar, <?php $today = date("j F Y"); echo $today; ?></p>
                	</td>
                </tr>
                <tr>
                	<td colspan="3">

					</td>
					<td colspan="4">
						<center><p> Ketua Program Studi Teknik Informatika </p><br><br><br><br><u>
						<a class="editable editable-click" href="#" id="nama" data-type="text"> Dr. Amil Ahmad Ilham, ST., M.IT.</a></u><br><u><a class="editable editable-click" href="#" id="nip" data-type="text"> NIP. 197310101998021001</a></u></center>
					</td>

				</tr>
				<?php } ?>
			</tr>
			<tr>
					<td colspan="4" style="text-align: left; font-size:12px; font-style:italic;">
						<p><br>Tembusan:
						<ol>
							<li>Arsip</li>
							<li>Ketua Program Studi <?php echo $this->session->userdata('programstudi');?> Unhas</li>
						</ol>
						</p>

					</td>

				</tr>
			</tbody>
		</tabel>

	</div>
	</div>
	</div>
	<script type="text/javascript">
	$('#nosurat').editable({
	type: 'text',
	success: function(k,v){
	  $.ajax({
	        type: "POST",
	        url: '<?php echo base_url().'tutupstrata/updatenomorsurat'; ?>',
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
