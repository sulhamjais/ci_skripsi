<div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">

                         <form  action="<?php echo base_url('tambahuser/tambahmahasiswa'); ?>"class="form-horizontal" role="form" method="post">
                         <h2>Tambah Mahasiswa</h2>
                         <div class="form-group">
                             <label for="nama" class="col-sm-3 ">Nama Mahasiswa</label>
                             <div class="col-sm-9">
                                 <input type="text" name="nama" id="nama" placeholder="Nama Mahasiswa" class="form-control" autofocus>
                             </div>
                         </div>
                         <div class="form-group">
                             <label for="nim" class="col-sm-3 ">Nomor Induk Mahasiswa</label>
                             <div class="col-sm-9">
                                 <input name="nim" id="nim" type="text" placeholder="Nomor Induk Mahasiswa" class="form-control">
                             </div>
                         </div>
                         <div class="form-group">
                             <label for="password" class="col-sm-3 ">Password</label>
                             <div class="col-sm-9">
                                 <input type="password" name="password" id="password" placeholder="Password" class="form-control">
                             </div>
                         </div>
                         <div class="form-group">
                             <label for="tempatlahir" class="col-sm-3">Tempat Lahir</label>
                             <div class="col-sm-9">
                                 <input type="text" name="tempatlahir" id="tempatlahir" placeholder="Tempat Lahir" class="form-control">
                             </div>
                         </div>

                           <div class="form-group">
                             <label for="tanggallahir" class="col-sm-3 ">Tanggal Lahir</label>
                             <div class="col-sm-9">
                                 <input type="date" name="tanggallahir" id="tanggallahir" class="form-control">
                             </div>
                           </div>

                           <div class="form-group">
                               <label for="email" class="col-sm-3">E-mail</label>
                               <div class="col-sm-9">
                                   <input type="text" name="email" id="email" placeholder="E-mail" class="form-control">
                               </div>
                           </div>

                           <div class="form-group">
                               <label for="telepon" class="col-sm-3">Nomor Telepon</label>
                               <div class="col-sm-9">
                                   <input type="text" name="telepon" id="telepon" placeholder="Nomor Telepon" class="form-control">
                               </div>
                           </div>

                          <div class="form-group">
                               <label for="agama" class="col-sm-3 ">Agama</label>
                               <div class="col-sm-9">
                                   <select name="agama" id="agama" class="form-control">
                                       <option>Islam</option>
                                       <option>Kristen Protestan</option>
                                       <option>Kristen Katolik</option>
                                       <option>Hindu</option>
                                       <option>Buddha</option>
                                       <option>Konghucu</option>
                                   </select>
                               </div>
                          </div>

                         <div class="form-group">
                             <label for="prodi" class="col-sm-3 ">Program Studi</label>
                             <div class="col-sm-9">
                                 <select name="programstudi" id="programstudi" class="form-control">
                                     <option>Teknik Sipil</option>
                                     <option>Teknik Lingkungan</option>
                                     <option>Teknik Mesin</option>
                                     <option>Teknik Industri</option>
                                     <option>Teknik Perkapalan</option>
                                     <option>Teknik Sistem Perkapalan</option>
                                     <option>Teknik Kelautan</option>
                                     <option>Teknik Elektro</option>
                                     <option>Teknik Informatika</option>
                                     <option>Teknik Arsitektur</option>
                                     <option>Teknik Pengembangan Wilayah Kota</option>
                                     <option>Teknik Geologi</option>
                                     <option>Teknik Pertambangan</option>
                                 </select>
                             </div>
                         </div>

                         <div class="form-group">
                             <label for="fakultas" class="col-sm-3 ">Fakultas</label>
                             <div class="col-sm-9">
                                 <select name="fakultas" id="fakultas" class="form-control">
                                     <option>Fakultas Ekonomi dan Bisnis</option>
                                     <option>Fakultas Hukum</option>
                                     <option>Fakultas Kedokteran</option>
                                     <option>Fakultas Teknik</option>
                                     <option>Fakultas MIPA</option>
                                     <option>Fakultas Ilmu Sosial dan Ilmu Politik</option>
                                     <option>Fakultas Sastra</option>
                                     <option>Fakultas Kesehatan Masyarakat</option>
                                 </select>
                             </div>
                         </div>

                         <div class="form-group">
                             <label class=" col-sm-3">Jenis Kelamin</label>
                             <div class="col-sm-6">
                                 <div class="row">
                                     <div class="col-sm-6">
                                         <label class="radio-inline">
                                             <input type="radio" id="jeniskelamin" value="perempuan" name="jeniskelamin">Perempuan
                                         </label>
                                     </div>
                                     <div class="col-sm-6">
                                         <label class="radio-inline">
                                             <input type="radio" id="jeniskelamin" value="lakilaki" name="jeniskelamin">Laki-Laki
                                         </label>
                                     </div>
                                 </div>
                             </div>
                         </div>

                         <div class="form-group">
                            <label class=" col-sm-3" for="alamat">Alamat</label>
                            <div class="col-sm-9">
                              <textarea class="form-control" rows="5" name="alamat" id="alamat"></textarea>
                            </div>
                          </div>
                         <div class="form-group">
                             <div class="col-sm-12">
                                 <button type="submit" class="btn btn-primary btn-block">Tambahkan</button>
                             </div>
                         </div>
                     </form>

                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />

    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
