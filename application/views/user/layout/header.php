<header>
	<div class="brand">Universitas Hasanuddin</div>
	<div class="address-bar">Sistem Administrasi Persuratan Kampus</div>
</header>

<nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.html">Universitas Hasanuddin</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
               <ul class="nav navbar-nav">
            <li> <a href="<?php echo base_url(); ?>user"> Beranda </a></li>
            <li> <a href="<?php echo base_url(); ?>buatsurat"> Buat Surat </a></li>
            <li> <a href="<?php echo base_url(); ?>riwayat"> Riwayat</a></li>
            <li> <a href="<?php echo base_url(); ?>kontak"> Kontak </a></li>
            <li class="dropdown pull-right">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Akun <b class="caret"></b> <span class="badge"> <?php echo $pesan_masuk; ?></span></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo base_url('user/profile'); ?>">Profil</a></li>
								<li>
									<a href="<?php echo base_url('pesan'); ?>">Pesan <span class="badge"> <?php echo $pesan_masuk; ?></span></a>
								</li>
                <li><a href="<?php echo base_url(); ?>login/logout">Keluar</a></li>
              </ul>
            </li>
        </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
</nav>
