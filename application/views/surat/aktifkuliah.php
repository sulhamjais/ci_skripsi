      <tr>
        <td colspan="5" align="center" class="col-md-6 col-md-offset-3">
          <h4>
      			<b><u> SURAT KETERANGAN </b></u>
      		</h4>
          <?php foreach ($surat as $list) {?>
          <input type="hidden" name="idnomor" id="idnomor" value="<?php echo $nosurat;?>">
          <input type="hidden" name="idsurat" id="idsurat" value="<?php echo $list['id'];?>">
      		<h6>
      			No.   :  <?php if ($list['nomor_surat']=="-") {?>
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
      		</h6>
        </td>
      </tr>

      <tr>
        <td colspan="5" >
      	  <p>Yang bertanda tangan di bawah ini Ketua Program Studi <?php echo $list['programstudi']?> Fakultas Teknik UNHAS: </p>
      	  <table style="width:80%; font-weight: bold;" border="0">
      		    <tr>
                <td>Nama</td>
      					<td>:<a href="#" id="kaprodi" data-type="text"> Amil Ahmad Ilham, ST,.M.it,.P.hD</a></td>
      				</tr>
              <tr>
                <td>Nip</td>
      					<td>:<a href="#" id="nomor_induk" data-type="text"> 19731010 199802 1 001</a></td>
      				</tr>
      				<tr>
      				  <td>Pangkat/Gol.</td>
      					<td>:<a href="#" id="pangkat" data-type="text"> III/d</a></td>
      				</tr>
          </table>
          <p></br>menerangkan bahwa : </p>
      		<table style="width:60%; font-weight: bold;" border="0">
      				<tr>

      					<td>Nama</td>
      					<td>:<a href="#" id="nama" data-type="text"> <?php echo $list['nama']?></a></td>
      				</tr>
      				<tr>
                <td>Stambuk</td>
      					<td>:<a href="#" id="nomor_induk" data-type="text"> <?php echo $list['nim']?></a></td>
      				</tr>
      				<tr>
                <td>Tempat/Tanggal Lahir</td>
      					<td>:<a href="#" id="ttl" data-type="text"> <?php echo $list['tempat_lahir']?> / <?php echo $list['ttl']?></a></td>
      				</tr>
      				<tr>
                <td>Fakultas</td>
      					<td>:<a href="#" id="fakultas" data-type="text"> <?php echo $list['fakultas']?></a></td>
      				</tr>
      				<tr>
                <td>Program Studi</td>
      					<td>:<a href="#" id="prodi" data-type="text"> <?php echo $list['programstudi']?></a></td>
      				</tr>
      				<tr>
                <td>Alamat</td>
      					<td colspan="5">:<a href="#" id="alamat" data-type="text"> <?php echo $list['alamat']?></a></td>
      				</tr>
      		</table>
        </td>
      </tr>

      <tr>
        <td colspan="5">
          <p>
          </br>Benar adalah mahasiswa Program Studi <?php echo $list['programstudi']?>  Fakultas Teknik Universitas Hasanuddin dan hingga saat ini masih aktif dalam mengikuti kegiatan akademik pada semester Awal 2016/2017.
          </p>
          <p>
            Demikian Surat Keterangan ini diberikan untuk dapat dipergunakan sebagaimana mestinya.
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
      <center><p> Ketua Program Studi <?php echo $list['programstudi']?> </p><br><br><br><br><u>
      <a class="editable editable-click" href="#" id="kaprodi1" data-type="text"> Dr. Amil Ahmad Ilham, ST., M.IT.</a></u>
      <br><u><a class="editable editable-click" href="#" id="nomor_induk1" data-type="text"> NIP. 197310101998021001</a></u></center>
    </td>

  </tr>

</tr>

    </div>

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
        url: '<?php echo base_url().'aktifkuliah/updatenomorsurat'; ?>',
        data: {"nosurat": document.getElementById('no').innerHTML+v,
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
