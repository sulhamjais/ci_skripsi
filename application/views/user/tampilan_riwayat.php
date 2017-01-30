  <div class="container">
    <div class="row">
      <div class="box">
        <div class="col-lg-12">
          <hr>
            <h2 class="intro-text text-center">Riwayat<strong>Pengajuan Surat</strong></h2>
          <hr>
        </div>

        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <div class="table-responsive">
              <table class="table table-bordered table-hover table-striped " >
                <thead >
                  <tr>
                    <th >Nomor</th>
                    <th >Tanggal Pengajuan</th>
                    <th >Jenis Surat</th>
                    <th >Status</th>
                    <th >Keterangan</th>
                  </tr>
                </thead>
                <tbody align="center">
                  <?php $no=0; foreach ($permintaan_surat as $list) { $no++;?>
                  <tr >
                    <td><?php echo $no?></td>
                    <td><?php echo $list['created_at'];?></td>
                    <td><?php echo $list['jenissurat'];?></td>
                    <td>
                        <?php if ($list['status'] == '1'){ ?>
                        <label>Surat Diproses Staff</label>
                        <?php }elseif ($list['status'] == '2') {?>
                        <label >Surat Dikirim Ke Fakultas</label>
                        <?php }elseif ($list['status'] == '3') {?>
                        <label >Surat Selesai</label>
                        <?php }elseif ($list['status'] == '4') {?>
                        <label >Surat Dibatalkan</label>
                        <?php } ?>
                    </td>
                    <td>
                      <button class="btn btn-primary btn-block" onclick="myFunction('-','<?php echo $list['id']; ?>','<?php echo $list['jenissurat']; ?>')" title="Share this content" data-toggle="modal" data-target="#myModal"> Kirim Pesan </button>
                    </td>
                  </tr>
                  <?php } ?>
                </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
          <h4 class="modal-title" id="myModalLabel"><i class="fa fa-share-alt"></i> Kirim Pesan</h4>
        </div>
        <div class="modal-body">
          <h3> Tulis Pesan</h3>
          <form action="<?php echo base_url('riwayat/kirim_pesan'); ?>" method="post">
            <div class="input-group">
                <input type="hidden" id="penerima" name="penerima">
                <input type="hidden" id="id_surat" name="id_surat">
                <input type="hidden" id="jenis_surat" name="jenis_surat">
                <input type="hidden" id="pengirim" name="pengirim" value="<?php echo $nim;?>">
                <textarea rows="4" cols="78" placeholder="Tulis pesan disini" name="isi_pesan" id="isi_pesan"></textarea>
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

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
    <script>
    function myFunction(str,str1,str2) {
         $('#penerima').val(str);
         $('#id_surat').val(str1);
         $('#jenis_surat').val(str2);
    }
    </script>
