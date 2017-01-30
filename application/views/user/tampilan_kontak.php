

  <div class="container">
       <div class="row">

            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Hubungi
                        <strong>Staff</strong>
                    </h2>
                    <hr>
                </div>

                <div class="row">
                    <div class="item active">
                    <?php foreach ($data_staff as $list) {?>

                    <div class="col-sm-3">
                      <div class="well well-sm">

                        <div>
                          <img src="<?php echo base_url().$list['foto']; ?>" class="img-responsive center-block" alt="a"/>
                        </div>

                      <div class="row">
                          <div class="col-md-12">
                              <h5>
                                <?php echo $list['nama']; ?>
                              </h5>
                          </div>

                      </div>

                      <div class="row">
                        <div class="col-md-12">
                          <h5>
                              <?php echo $list['programstudi']; ?>
                          </h5>
                        </div>

                      </div>

                      <div class="row">
                        <div class="col-md-6">

                        </div>
                        <div class="col-md-6">
                          <button class="btn btn-primary btn-block" onclick="myFunction('<?php echo $list['nomor_induk']; ?>')" title="Share this content" data-toggle="modal" data-target="#myModal">Kirim Pesan
                          </button>
                        </div>
                      </div>
                      </div>
                    </div>
                    <?php } ?>
                      <div class="clearfix">
                      </div>

                      </div>
                    </div>







        </div>
      </div>
          <div class="clearfix"></div>
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
            <form action="<?php echo base_url('kontak/kirim_pesan'); ?>" method="post">
              <div class="input-group">
                  <input type="hidden" id="penerima" name="penerima">
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

    <!-- /.container -->



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
    function myFunction(str) {
         $('#penerima').val(str);
    }
    </script>
