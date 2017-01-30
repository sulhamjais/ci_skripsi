<div id="page-wrapper" >
<div id="page-inner">

    <hr />

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="table-responsive">
        <div class="x_title">
            <h2>Daftar Pesan Masuk</h2>
        <div class="clearfix"></div>
        </div>
<table class="table table-bordered table-hover table-striped " >
  <thead >
    <tr >
      <th >Nomor</th>
      <th >Tanggal Masuk</th>
      <th >Pengirim</th>
      <th >Aksi</th>
    </tr>
  </thead>
  <tbody align="center">
      <?php $no=1; foreach ($pengiriman_pesan as $list) {?>
    <tr >
      <td><?php echo $no++;?></td>
      <td><?php echo $list['created_at'];?></td>
      <td><?php echo $list['pengirim'];?></td>
      <td>
          <label class="btn btn-info" onclick="isiModal('<?php echo $list['id'];?>','<?php echo $list['isi_pesan']; ?>')" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-ok" aria-hidden="true"></label>
          <a href="<?php echo base_url(); ?>kontak/hapuspesan/<?php echo $list['id']?>"><label class="btn btn-danger" ><span class="glyphicon glyphicon-remove" aria-hidden="true"></label> &nbsp;</a>
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
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-share-alt"></i> Balas Pesan</h4>
      </div>
      <div class="modal-body">
        <h3> Pesan Masuk</h3>
        <form action="<?php echo base_url('kontak/balas_pesan'); ?>" method="post">
          <div class="input-group">
              <input type="hidden" id="idpesan" name="idpesan">
              <textarea rows="4" cols="78" placeholder="Tulis pesan disini" name="isi_pesan" id="isi_pesan" readonly=""></textarea>
              <h3> Balas Pesan</h3>
              <textarea rows="4" cols="78" placeholder="Tulis pesan disini" name="balas_pesan" id="balas_pesan"></textarea>
          </div>
          <br />
            <button type="submit" value="sub" name="sub" class="btn btn-primary"><i class="fa fa-share"></i> Kirim Pesan</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
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
function isiModal(str,str2) {
    console.log(str+str2);
     $('#idpesan').val(str);
     $('#isi_pesan').val(str2);
}
</script>
