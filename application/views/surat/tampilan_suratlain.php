



<?php foreach ($surat as $list) {?>
			  <tr>
            <td colspan="5" >
							<input type="hidden" name="idnomor" id="idnomor" value="<?php echo $nosurat;?>">
		          <input type="hidden" name="idsurat" id="idsurat" value="<?php echo $list['id'];?>">
						<table style="width:110%;" border="0">
						  <tr>
						    <td>Nomor</td>
						    <td>:<?php if ($list['nomor_surat']=="-") {?>     //ini mau diedit (liat aktifkuliah)
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
						    <td>: Pengambilan Data / Penelitian </td>
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
                			Dengan hormat,<br> Kiranya Mahasiswa di bawah ini :
                		</p>
            <table style="width:90%" border="0">
						  <tr>

						    <td style="width : 30%">&nbsp Nama / Stambuk </td>
						    <td>: <a href="#" id="nama_mahasiswa" data-type="text"> <?php echo $list['nama']?></a> / <a href="#" id="nama_mahasiswa" data-type="text">  <?php echo $list['nim']?></a></td>
									<tr>
						    		<td>&nbsp Judul Tugas Akhir</td>
						    		<td>: <a href="#" id="nama_mahasiswa" data-type="text"></a>  </td>
						    	</tr>

						  </tr>
						</table>
                		<p></br>Dapat diberikan surat pengantar untuk pengambilan data/penelitian skripsi/tugas akhir pada :
										</br><strong> &nbsp  </strong>
									</br></br>Adapun data/penelitian yang diperlukan :
										</br>
									</br>Demikian penyampaian kami, atas perhatian dan kerjasamanya kami ucapkan terima kasih.
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

			</tr>
      <?php } ?>
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
	        url: '<?php echo base_url().'suratlain/updatenomorsurat'; ?>',
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
