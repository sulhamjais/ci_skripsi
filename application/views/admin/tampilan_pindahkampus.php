<div id="page-wrapper" >
<div id="page-inner">

    <hr />

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="table-responsive">
        <div class="x_title">
            <h2>Daftar Permintaan Surat Pindah Kampus</h2>
        <div class="clearfix"></div>
        </div>
<table class="table table-bordered table-hover table-striped " >
  <thead >
    <tr >
      <th style="vertical-align:top">Nomor</th>
      <th style="vertical-align:top">Tanggal Pengajuan</th>
      <th style="vertical-align:top">Tanggal Diproses Staff</th>
      <th style="vertical-align:top">Tanggal Pengiriman ke Staff Fakultas</th>
      <th style="vertical-align:top">Tanggal Surat Selesai</th>
      <th style="vertical-align:top">Jenis Surat</th>
      <th style="vertical-align:top">Status</th>
    </tr>
  </thead>
  <tbody align="center">
      <?php $no=1; foreach ($permintaan_surat as $list) {?>
    <tr >
      <td><?php echo $no++?></td>
      <td><?php echo $list['created_at'];?></td>
      <td><?php echo $list['waktu_prosesstaff'];?></td>
      <td><?php echo $list['waktu_kirimfakultas'];?></td>
      <td><?php echo $list['waktu_suratselesai'];?></td>
      <td><?php echo $list['jenissurat'];?></td>
      <td>
        <select name="status<?php echo $list['id']?>" id="status<?php echo $list['id']?>" onchange="getval(this);">
          <option value="" disabled selected>Status Surat</option>
          <option value="1"<?php if ($list['status']==1) {
            echo "selected";
          } ?>>Surat Diproses</option>
          <option value="2" <?php if ($list['status']==2) {
            echo "selected";
          } ?>>Surat Dikirim ke Fakultas</option>
          <option value="3" <?php if ($list['status']==3) {
            echo "selected";
          } ?>>Surat Selesai</option>
          <option value="4" <?php if ($list['status']==4) {
            echo "selected";
          } ?>>Surat Dibatalkan</option>
        </select>
        <input type="hidden" name="id<?php echo $list['id']?>" id="id<?php echo $list['id']?>" value="<?php echo $list['id']?>"> </input>
        <!--
          <a href="<?php echo base_url(); ?>pindahkampus/suratselesai/<?php echo $list['id']?>"><label class="btn btn-info" ><span class="glyphicon glyphicon-ok" aria-hidden="true"></label></a>
          <a href="<?php echo base_url(); ?>pindahkampus/suratproses/<?php echo $list['id']?>"><label class="btn btn-warning" ><span class="glyphicon glyphicon-time" aria-hidden="true"></label></a>
          <a href="<?php echo base_url(); ?>pindahkampus/suratbatal/<?php echo $list['id']?>"><label class="btn btn-danger" ><span class="glyphicon glyphicon-remove" aria-hidden="true"></label></a> &nbsp;
        -->
      </td>
    </tr>
    <?php } ?>

                </table>
            </div>
    </div>


</div>


</div>
 <!-- /. PAGE INNER  -->
</div>
<!-- /. PAGE WRAPPER  -->
</div>
<!-- /. WRAPPER  -->
<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
<!-- JQUERY SCRIPTS -->
<script src="<?php echo base_url(); ?>assets/js/jquery-1.10.2.js"></script>
<!-- BOOTSTRAP SCRIPTS -->
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<!-- METISMENU SCRIPTS -->
<script src="<?php echo base_url(); ?>assets/js/jquery.metisMenu.js"></script>
<!-- MORRIS CHART SCRIPTS -->
<script src="<?php echo base_url(); ?>assets/js/morris/raphael-2.1.0.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/morris/morris.js"></script>
<!-- CUSTOM SCRIPTS -->
<script src="<?php echo base_url(); ?>assets/js/custom.js"></script>

<script>
var str = null;
function getval(sel)
{
  str = sel.name;
}
 $('select').on('change', function() {

  var id = str.replace('status','');
  console.log(id);
  switch (this.value) {
    case '1':
      window.location='<?php echo base_url(); ?>pindahkampus/suratproses/'+document.getElementById('id'+id).value;
      break;
    case '2':
      window.location='<?php echo base_url(); ?>pindahkampus/suratkefakultas/'+document.getElementById('id'+id).value;
      break;
    case '3':
      window.location='<?php echo base_url(); ?>pindahkampus/suratselesai/'+document.getElementById('id'+id).value;
      break;
    case '4':
      window.location='<?php echo base_url(); ?>izinpenelitian/suratbatal/'+document.getElementById('id'+id).value;
      break;
    default:

  }

})
</script>
