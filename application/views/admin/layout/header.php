
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url(); ?>admin">Admin Staff</a>
            </div>
        </nav>

           <!-- /. NAV TOP  -->
            <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                <li class="text-center">
                    <img src="<?php echo base_url().$this->session->userdata('foto'); ?>" class="user-image img-responsive"/>
                    </li>

                    <li>
                        <a   href="<?php echo base_url(); ?>admin"><i class="fa fa-home fa-3x"></i> Beranda </a>
                    </li>
                     <li>
                        <a href="<?php echo base_url(); ?>kp1"><i class="fa fa-sitemap fa-3x"></i> Surat Kerja Praktek  <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo base_url(); ?>kerjapraktek">Surat Permohonan KP <span class="badge"><?php echo $surat_kp; ?></span></a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>kerjapraktek/view_nilaiKP"> Surat Keterangan Nilai</span></a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a  href="<?php echo base_url(); ?>aktifkuliah"><i class="fa fa-qrcode fa-4x"></i> SK Aktif Kuliah <span class="badge"><?php echo $surat_aktifkuliah; ?></span> </a>
                    </li>


                           <li  >
                        <a  href="<?php echo base_url(); ?>tutupstrata"><i class="fa fa-bar-chart-o fa-3x"></i> Surat Tutup Strata <span class="badge"><?php echo $surat_tutupstrata; ?></span></a>
                    </li>
                      <li  >
                        <a  href="<?php echo base_url(); ?>Pindahkampus"><i class="fa fa-table fa-3x"></i> Surat Pindah Kampus <span class="badge"><?php echo $surat_pindahkampus; ?></span></a>
                    </li>
                    <li  >
                        <a  href="<?php echo base_url(); ?>Izinpenelitian"><i class="fa fa-edit fa-3x"></i> Surat Izin Penelitian <span class="badge"><?php echo $surat_izinpenelitian; ?></span> </a>
                    </li>
                    <li  >
                        <a  href="<?php echo base_url(); ?>suratlain"><i class="fa fa-edit fa-3x"></i> Surat Lainnya <span class="badge"><?php echo $surat_lain; ?></span> </a>
                    </li>
                    <li  >
                        <a  href="<?php echo base_url(); ?>edit_template"><i class="fa fa-edit fa-3x"></i> Edit Template Surat </a>
                    </li>
                    <li>
                        <a   href="<?php echo base_url(); ?>tambahuser"><i class="fa fa-users fa-3x"></i> Tambah Mahasiswa</a>
                    </li>

                    <li>
                       <a href="<?php echo base_url(); ?>kp1"><i class="fa fa-sitemap fa-3x"></i> Akun  <span class="fa fa-chevron-down"></span></span></a>
                       <ul class="nav nav-second-level">
                           <li>
                               <a href="<?php echo base_url(); ?>admin/profile">Edit Profile</a>
                           </li>
                           <li>
                               <a href="<?php echo base_url(); ?>kontak/tampilan_pesan"> Pesan <span class="badge"><?php echo $pesan_masuk; ?></span></a>
                           </li>
                           <li>
                                <a href="<?php echo base_url(); ?>login/logout" >Log Out</a>
                           </li>
                       </ul>
                   </li>
                </ul>

            </div>

        </nav>
