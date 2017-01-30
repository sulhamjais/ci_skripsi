
     <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Profile
                        <strong>Mahasiswa</strong>
                    </h2>
                    <hr>
                </div>

                <div class="row" style="padding-left: 12px;">
                    <div class="col-md-3" style="background-color: white; padding-top: 10px; padding-bottom:10px;">
                        <img src="<?php echo base_url().$this->session->userdata('foto'); ?>" class="img-thumbnail img-responsive" />
                        <br>
                        <label class="btn btn-primary btn-block" data-toggle="modal" data-target="#myModal">Ganti Foto Profil</label>
                    </div>
                    <div class="col-md-9 " >
                      <div class="col-md-12" style="background-color: white;margin-bottom: 20px;">
                        <div class="form-group col-md-12">
                          <form method="post" action="<?php echo base_url('user/editprofil'); ?>">
                            <h3>Edit Profil</h3>
                            <br />
                            <label>Nama</label>
                            <input type="text" class="form-control" name="nama" id="nama" value="<?php echo $this->session->userdata('nama'); ?>">
                            <label>Nomor Telepon</label>
                            <input type="text" class="form-control" name="telepon" id="telepon" value="<?php echo $this->session->userdata('telepon'); ?>">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" id="email" value="<?php echo $this->session->userdata('email'); ?>">
                            <label>Alamat</label>
                            <textarea rows="4" cols="78"  name="alamat" class="form-control"><?php echo $this->session->userdata('alamat'); ?></textarea>
                            <br>
                            <button type="submit" class="btn btn-primary">Update Profile</button>
                          </form>
                        </div>
                          </div>
                          <div class="col-md-12" style="background-color: white;margin-bottom: 20px;">
                        <div class="form-group col-md-9">
                          <form method="post" action="<?php echo base_url('user/gantipassword'); ?>">
                            <h3>Ganti Password</h3>
                            <br />
                            <label>Password Lama</label>
                            <input type="password" name="passwordlama" class="form-control">
                            <label>Password Baru</label>
                            <input type="password" name="passwordbaru" class="form-control">
                            <br>
                            <button type="submit" class="btn btn-primary">Change Password</button>
                          </form>
                        </div>
                          </div>

                    </div>
                </div>
            </div>
        </div>
        </div>

    <!-- /.container -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title" id="myModalLabel"><i class="fa fa-share-alt"></i> Upload Foto</h4>
          </div>
          <div class="modal-body">
            <h3>Upload Foto</h3>
            <form action="<?php echo base_url('user/simpangambar'); ?>" method="post" enctype="multipart/form-data">
              <div class="input-group">
                  <input type="file" id="fotoprofile" name="fotoprofile">
              </div>
                  <small> * Ukuran Foto Maks 2MB, orientasi landscape </small>
              <br />
              <br />
                <button type="submit" value="sub" name="sub" class="btn btn-primary"><i class="fa fa-share"></i> Kirim </button>
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
