
    <div class="container">

        <div class="row">
            <div class="box">

            <div class="row ">
                <div class="item active ">
                <div class="col-sm-12 ">
                  <?php $no=1; foreach ($pesan_user as $list) {?>
                  <div class="well well-sm " style="background-color: rgba(69, 125, 142, 0.43);padding-left: 30px;padding-right: 30px;">
                  <div class="row">
                      <div class="col-md-12 text-left">
                          <h5>
                            <p><strong>
                              <?php echo $this->session->userdata('nama');?> :
                            </strong></p>
                            <br>
                            <?php echo str_replace('\n','<br>',$list['isi_pesan']);?>
                          </h5>
                      </div>

                      <div class="col-md-12 text-right">
                          <h5>
                            <p>
                              <strong>
                                Admin :
                              </strong>
                            </p>
                            <br>
                            <?php echo str_replace('\n','<br>',$list['balasan']);?>
                          </h5>
                      </div>

                  </div>
                  </div>
                  <?php } ?>
                  <div class="row">
                    <div class="col-md-4"> </div>
                    <div class="col-md-4">
                      <a href="<?php echo base_url('kontak')?>" class="btn btn-primary btn-block"  > Kirim Pesan Baru </a>
                    </div>
                    <div class="col-md-4"> </div>
                  </div>
                </div>

                  <div class="clearfix">
                  </div>

                  </div>
                </div>

        </div>

    </div>

    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
