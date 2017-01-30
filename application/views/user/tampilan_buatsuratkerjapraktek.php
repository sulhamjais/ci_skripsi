

     <div class="container" id="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center"> <strong>Pilih Surat</strong>
                    </h2>
                    <hr>
                </div>



<form action="<?php echo base_url('buatsurat/ajukan_suratkerjapraktek'); ?>" method="post">
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
                  <h2 class="intro-text text-center"> <strong>Surat Kerja Praktek</strong></h2>
                  <br/>
                </div>
                <div class="box-form">

                  <div class="row">
                    <div name="nama_mahasiswa" id="nama_mahasiswa" class="form-group col-md-7 ">
                        <label >Nama Mahasiswa</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $this->session->userdata('nama');?>" placeholder="Nama Lengkap">
                    </div>
                    <div name="nim" id="nim" class="form-group col-md-5">
                        <label >NIM</label>
                        <input type="text" class="form-control" id="nim" name="nim" value="<?php echo $this->session->userdata('nomor_induk');?>" placeholder="NIM">
                    </div>
                  </div>
                  <div class="form-group">
                      <span onclick="tambahmahasiswa()" class="btn btn-default">Tambah Mahasiswa</span>
                  </div>
                    <div class="form-group">
                        <label >Nama Perusahaan</label>
                        <input type="text" class="form-control" id="namaperusahaan" name="namaperusahaan" placeholder="Nama Perusahaan">
                    </div>

                     <div class="form-group">
                        <label >Alamat Perusahaan</label>
                        <input type="text" class="form-control" id="alamatperusahaan" name="alamatperusahaan" placeholder="Alamat Perusahaan">
                    </div>
                    <div class="form-group">
                       <label >Waktu Kerja Praktek</label>
                       <div class="row">
                         <div class="form-group col-md-5">

                            <input type="date" class="form-control" id="waktukp1" name="waktukp1" placeholder="Waktu Kerja Praktek">
                         </div>
                         <div class="form-group col-md-2">
                            <label >sampai</label>

                         </div>
                        <div class="form-group col-md-5">
                           <input type="date" class="form-control" id="waktukp2" name="waktukp2" placeholder="Waktu Kerja Praktek">
                       </div>
                       </div>
                       <div class="form-group">
                          <label >Lama Kerja Praktek</label>
                          <input type="text" class="form-control" id="lamakp" name="lamakp" placeholder="Lama Kerja Praktek">
                      </div>
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

    var i=0;
    function tambahmahasiswa() {
      i++;
    if (i<4) {
      var nama = document.createElement("input");
      var nim = document.createElement("input");
      nama.type= "text";
      nama.name="nama"+i;
      nama.id="nama"+i;
      nim.type= "text";
      nim.name="nim"+i;
      nim.id="nim"+i;
      nama.className = "form-control";
      nim.className = "form-control";
      document.getElementById("nama_mahasiswa").appendChild(nama);
      document.getElementById("nim").appendChild(nim);
    }

    }
    </script>
