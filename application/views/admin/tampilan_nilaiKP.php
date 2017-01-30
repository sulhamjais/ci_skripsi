<div id="page-wrapper" >
<div id="page-inner">

    <hr />

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="table-responsive">
        <div class="x_title">
            <h2>Daftar Permintaan Surat Keterangan Nilai Kerja Praktek</h2>
        <div class="clearfix"></div>
        </div>
<table class="table table-bordered table-hover table-striped " >
  <thead >
    <tr >
      <th >Nomor</th>
      <th >Tanggal Pengajuan</th>
      <th >Jenis Surat</th>
      <th >Status</th>
    </tr>
  </thead>
  <tbody align="center">
      <?php $no=1; foreach ($permintaan_surat as $list) {?>
    <tr >
      <td><?php echo $no++?></td>
      <td><?php echo $list['created_at'];?></td>
      <td><?php echo $list['jenissurat'];?></td>
      <td>
              <a href="<?php echo base_url(); ?>admin/hapus_surat"><label class="btn btn-info" ><span class="glyphicon glyphicon-ok" aria-hidden="true"></label></a>
              <a href="<?php echo base_url(); ?>admin/aprove/<?php echo $list['jenissurat']?>/<?php echo $list['id']?>"><label class="btn btn-warning" ><span class="glyphicon glyphicon-time" aria-hidden="true"></label></a>
              <a href="3"><label class="btn btn-danger" ><span class="glyphicon glyphicon-remove" aria-hidden="true"></label></a> &nbsp;
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
