<!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Koperasi Simpan Pinjam</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> <?php echo $_SESSION['nama'];?></a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login/logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="<?php echo $url;?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                      
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Master<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Anggota <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="<?php echo $url;?>index.php?m=anggota&p=add">Tambah Baru</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo $url;?>index.php?m=anggota&p=all">Semua Data</a>
                                        </li>
									</ul>
								</li>
								<li>
									<a href="#">Karyawan <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
								
                                        <li>
                                            <a href="<?php echo $url;?>index.php?m=karyawan&p=add">Tambah Baru</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo $url;?>index.php?m=karyawan&p=all">Semua Data</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
							<a href="#"><i class="fa fa-sitemap fa-fw"></i> Transaksi<span class="fa arrow"></span></a>
							<ul class="nav nav-second-level">
                                 <li>
                                    <a href="#">Pinjaman <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="<?php echo $url;?>index.php?m=pinjaman&p=add">Tambah Baru</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo $url;?>index.php?m=pinjaman&p=all">Semua Data</a>
                                        </li>
									</ul>
								</li>
								<li>
									<a href="#">Simpanan <span class="fa arrow"></span></a>
									<ul class="nav nav-third-level">
                                        <li>
                                            <a href="<?php echo $url;?>index.php?m=simpanan&p=add">Tambah Baru</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo $url;?>index.php?m=simpanan&p=all">Semua Data</a>
                                        </li>
									</ul>
								</li>
								<!-- /.nav-second-level -->
								<li>
								<a href="#">Pengembalian Pinjaman <span class="fa arrow"></span></a>
									<ul class="nav nav-third-level">
										<li>
                                            <a href="<?php echo $url;?>index.php?m=pengembalian&p=add">Tambah Baru</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo $url;?>index.php?m=pengembalian&p=all">Semua Data</a>
                                        </li>
										<!-- /.nav-second-level -->
                                        </ul>
								</li>
							</ul>
						</li>
						<li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Laporan<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
										<li>
                                            <a href="<?php echo $url;?>index.php?m=laporan&p=pinjaman">Pinjaman</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo $url;?>index.php?m=laporan&p=simpanan">Simpanan</a>
                                        </li>
										<li>
                                            <a href="<?php echo $url;?>index.php?m=laporan&p=angsuran">Angsuran</a>
                                        </li>
									</ul>
								</li>	
						</li>
						<!-- /.nav-second-level -->
                    </ul>
					
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
