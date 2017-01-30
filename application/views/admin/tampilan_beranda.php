<div id="page-wrapper" >
  <div id="page-inner">
    <div class="row">
      <div class="col-md-12">
        <h2>Selamat Datang</h2>
        <h5><?php echo $this->session->userdata('nama'); ?> , senang melihatmu kembali </h5>
      </div>
    </div>
    <hr />
    <div class="row">
      <a href="<?php echo base_url(); ?>kontak/tampilan_pesan">
      <div class="col-md-3 col-sm-6 col-xs-6">
			<div class="panel panel-back noti-box" style="max-height: 158px;min-height: 158px; font-size: 16px;">
        <span class="icon-box bg-color-red set-icon col-md-6">
          <i class="fa fa-envelope-o"></i>
        </span>
      <div class="text-box col-md-6" >
          <p class="main-text"><?php echo $pesan_masuk; ?></p>
          <p class="text-muted">Pesan Masuk</p>
        </div>
      </div>
		  </div>
      </a>

      <div class="col-md-3 col-sm-6 col-xs-6">
			<div class="panel panel-back noti-box" style="max-height: 158px;min-height: 158px; font-size: 16px;">
        <span class="icon-box bg-color-green set-icon col-md-6">
          <i class="fa fa-bars"></i>
        </span>
        <div class="text-box col-md-6" >
          <p class="main-text"><?php echo $surat_proses; ?></p>
          <p class="text-muted">Sementara Proses</p>
        </div>
      </div>
		  </div>

      <div class="col-md-3 col-sm-6 col-xs-6">
			<div class="panel panel-back noti-box" style="max-height: 158px;min-height: 158px; font-size: 16px;">
        <span class="icon-box bg-color-blue set-icon col-md-6">
          <i class="fa fa-bell-o"></i>
        </span>
        <div class="text-box col-md-6" >
          <p class="main-text"><?php echo $surat_selesai; ?></p>
          <p class="text-muted">Surat Selesai</p>
        </div>
      </div>
		  </div>

      <div class="col-md-3 col-sm-6 col-xs-6">
			<div class="panel panel-back noti-box" style="max-height: 158px;min-height: 158px; font-size: 16px;">
        <span class="icon-box bg-color-brown set-icon col-md-6">
          <i class="fa fa-rocket"></i>
        </span>
        <div class="text-box col-md-6" >
          <p class="main-text"><?php echo $surat_batal; ?></p>
          <p class="text-muted">Surat Dibatalkan</p>
        </div>
      </div>
		  </div>

		</div>  <!-- /. ROW  -->

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="table-responsive">
        <div class="x_title">
            <h2>Daftar Surat Selesai</h2>
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
      <th style="vertical-align:top" >Nama Mahasiswa</th>
    </tr>
  </thead>
  <tbody style="vertical-align:top" >
      <?php $no=1; foreach ($permintaan_surat as $list) {?>
    <tr >
      <td><?php echo $no++?></td>
      <td ><?php echo $list['created_at'];?></td>
      <td><?php echo $list['waktu_prosesstaff'];?></td>
      <td><?php echo $list['waktu_kirimfakultas'];?></td>
      <td><?php echo $list['waktu_suratselesai'];?></td>
      <td ><?php echo $list['jenissurat'];?></td>
      <?php if ($list['jenissurat']=='Surat Kerja Praktek') {
        $nama_mahasiswa= explode(",",  $list['nama']);
        $detail_mahasiswa=explode (":",  $nama_mahasiswa[0]); ?>
        <td ><?php echo $detail_mahasiswa[0].'&nbsp ('.$detail_mahasiswa[1].')';?></td>
      <?php } else { ?>
        <td ><?php echo $list['nama'].'&nbsp ('.$list['nim'].')';?></td>
    </tr>
    <?php }
      } ?>

                </table>
            </div>
    </div>


</div>

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="table-responsive">
    <div class="x_title">
        <h2>Daftar Nomor Surat Keluar</h2>
    <div class="clearfix"></div>
    </div>
<div class="table-responsive">
<table class="table table-bordered table-hover table-striped " >
<thead >
<tr >
  <th style="vertical-align:top">Nomor</th>
  <th style="vertical-align:top">Tanggal Pengajuan</th>
  <th style="vertical-align:top">Tanggal Surat Selesai</th>
  <th style="vertical-align:top">Jenis Surat</th>
  <th style="vertical-align:top"> Nomor Surat</th>

</tr>
</thead>
<tbody align="center">
  <?php $no=1; foreach ($permintaan_nomorsurat as $list) {?>
<tr >
  <td><?php echo $no++?></td>
  <td><?php echo $list['created_at'];?></td>
  <td><?php echo $list['waktu_suratselesai'];?></td>
  <td><?php echo $list['jenissurat'];?></td>
  <td><?php echo $list['nomor_surat'];?></td>
</tr>
<?php } ?>

            </table>
          </div>
        </div>
</div>


</div>
    <hr />
  </div> <!-- /. PAGE INNER  -->
</div> <!-- /. PAGE WRAPPER  -->

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
