

     <div class="container" id="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center"> <strong>Pilih Surat</strong>
                    </h2>
                    <hr>
                </div>



<form action="<?php echo base_url('buatsurat/ajukan_suratizinpenelitian'); ?>" method="post">
                <div class="col-md-4 col-md-offset-4">
                  <div class="form-group">
                      <select class="form-control" onChange="pilih_surat()" name="jenissurat" id="jenissurat">
                          <option value="" disabled selected style="display:none;">Pilih Jenis Surat</option>
                          <option value="aktifkuliah">- Surat Aktif Kuliah</option>
                          <option value="tutupstrata">- Surat Tutup Strata</option>
                          <option value="kerjapraktek">- Surat Kerja Praktek</option>
                          <option value="pindahkampus">- Surat Pindah Kampus</option>
                          <option value="izinpenelitian">- Surat Izin Penelitian</option>
                          <option value="suratlain">- Surat Lain-lain</option>
                      </select>
                  </div>
                </div>
                <div class="col-md-6 col-md-offset-3">
                <div class="col-lg-12">
                  <h2 class="intro-text text-center"> <strong>Surat Izin Penelitian</strong></h2>
                </div>
                <div class="box-form">
                    <div class="form-group">
                        <label >Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $this->session->userdata('nama');?>" placeholder="Nama Lengkap">
                    </div>
                    <div class="form-group">
                        <label >NIM</label>
                        <input type="text" class="form-control" id="nim" name="nim" value="<?php echo $this->session->userdata('nomor_induk');?>" placeholder="NIM">
                    </div>
                    <div class="form-group">
                        <label >Judul Tugas Akhir</label>
                        <input type="text" class="form-control" id="judulTA" name="judulTA" placeholder="Judul Tugas Akhir">
                    </div>

                     <div class="form-group">
                        <label >Tempat Penelitian</label>
                        <input type="text" class="form-control" id="tempat" name="tempat" placeholder="Tempat Penelitian">
                    </div>

                    <div class="form-group">
                      <label>Data/Penelitian yang diperlukan</label>
                      <textarea rows="4" cols="78"  name="data" class="form-control"></textarea>
                    </div>

                        <button type="submit" class="btn btn-default">Submit</button>


                    </div>
                    <hr>
                </div>

                </div>
            </div>
        </div>
                </form>
    <!-- /.container -->
    <?php include('fungsi.php'); ?>
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
