  <div class="container">
    <div class="row">
      <div class="box">
        <div class="col-lg-12 text-center">
          <small>
            <h2 class="brand-name">
              Selamat Datang Di
            </h2>
            <h2 class="brand-name">Sistem Administrasi Persuratan Kampus </h2>
          </small>
          <div class="col-md-4"> </div>
          <div class="col-md-4">
            <div class="col-md-12" style="background-color: white; padding-top: 10px; ">
              <img src="<?php echo base_url().$this->session->userdata('foto'); ?>" class="img-thumbnail img-responsive" />
                <h3><?php echo $this->session->userdata('nama'); ?></h3>
                <h3><?php echo $this->session->userdata('nomor_induk'); ?></h3>
            </div>
            <div class="col-md-12">
              </br>
              <a href="<?php echo base_url('buatsurat'); ?>" class="btn btn-primary">Buat Surat</a>
            </div>
            <div class="col-md-4"> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    <!-- jQuery -->
  <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
  <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
