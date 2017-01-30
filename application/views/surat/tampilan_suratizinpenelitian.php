



<?php foreach ($surat as $list) {?>
			<tr>
        <td colspan="5" >
					<input type="hidden" name="idnomor" id="idnomor" value="<?php echo $nosurat;?>">
          <input type="hidden" name="idsurat" id="idsurat" value="<?php echo $list['id'];?>">
					<table style="width:100%;" border="0">
						<tr>
							<td style="width:13.5%">Nomor</td>
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
							<td></td>
						</tr>

						<tr>
						  <td>Hal</td>
						  <td>: Pengambilan Data / Penelitian </td>
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
					<table style="width:100%" border="0">
						<tr>
							<td style="width:14.4%"></td>
							<td colspan="5" style="vertical-align:top">
                <br>
                <p style="text-align:justify; width: 100%">
                	Dengan hormat,<br> Kiranya Mahasiswa di bawah ini :
                </p>
							</td>
						</tr>
						<tr>
							<td></td>
						  <td style="width : 20%">&nbsp Nama / Stambuk </td>
							<td style="vertical-align:top">:</td>
						  <td> <a href="#" id="nama" data-type="text"> <?php echo $list['nama']?></a> / <a href="#" id="nim" data-type="text">  <?php echo $list['nim']?></a></td>
						</tr>
						<tr>
							<td></td>
						  <td style="vertical-align:top">&nbsp Judul Tugas Akhir</td>
							<td style="vertical-align:top">: </td>
						  <td style="vertical-align:top">"<a href="#" id="judulTA" data-type="text"><?php echo $list['judulTA']?></a> " </td>
						</tr>
						<tr>
							<td></td>
							<td colspan="5">
                		<p>Dapat diberikan surat pengantar untuk pengambilan data/penelitian skripsi/tugas akhir pada :
										</br><strong> &nbsp <?php echo $list['tempat']?> </strong>
										</br>Adapun data/penelitian yang diperlukan :
										</br><strong> &nbsp<?php echo $list['data_penelitian']?> </strong>
									</br>Demikian penyampaian kami, atas perhatian dan kerjasamanya kami ucapkan terima kasih.
                		</p>
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
                <p>&nbsp Makassar, <?php $today = date("j F Y"); echo $today; ?>
								</br>&nbsp Ketua Program Studi Teknik Informatika,</p>
								<br><br><br><br><u>
								<center><a class="editable editable-click" href="#" id="kaprodi" data-type="text"> Dr. Amil Ahmad Ilham, ST., M.IT.</a></u><br><u><a class="editable editable-click" href="#" id="nipkaprodi" data-type="text"> NIP. 197310101998021001</a></u></center>
              </td>
            </tr>
          	<tr>
							<td  style="text-align: left; font-size:12px; font-style:italic;">
								<p><br>Tembusan:
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
      <?php } ?>
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
	        url: '<?php echo base_url().'izinpenelitian/updatenomorsurat'; ?>',
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
