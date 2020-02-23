<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <a href="#" class="brand-link">
    <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
         style="opacity: .8">
    <span class="brand-text font-weight-light">SMK RIYADLUL QUR'AN</span>
  </a>
  <div class="sidebar">
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Alexander Pierce</a>
      </div>
    </div>
    <nav class="mt-2">
    <?php 
    if(isset($_GET['url'])){
    ?>
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item has-treeview <?php echo $_GET['url']=='tampil-siswa'||$_GET['url']=='tambah-siswa'?'menu-open':''?>">
          <a href="#" class="nav-link <?php echo $_GET['url']=='tampil-siswa'||$_GET['url']=='tambah-siswa'?'active':''?>">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Siswa
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="index.php?url=tampil-siswa" class="nav-link  <?php echo $_GET['url']=='tampil-siswa'?'active':'' ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Data Siswa</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="index.php?url=tambah-siswa" class="nav-link  <?php echo $_GET['url']=='tambah-siswa'?'active':'' ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Tambah Siswa</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item has-treeview  <?php echo $_GET['url']=='bayar-lks'||$_GET['url']=='bayar-spp'||$_GET['url']=='bayar-infaq'||
          $_GET['url']=='bayar-ujian'||$_GET['url']=='bayar-atribut'||$_GET['url']=='bayar-akhir'?'menu-open':'';?>">
          <a href="#" <?php echo $_GET['url']=='bayar-lks'||$_GET['url']=='bayar-spp'||$_GET['url']=='bayar-infaq'||
          $_GET['url']=='bayar-ujian'||$_GET['url']=='bayar-atribut'||$_GET['url']=='bayar-akhir'?'class="nav-link active"':'class="nav-link"';?>>
            <i class="nav-icon fas fa-copy"></i>
            <p>
              Pembayaran
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="index.php?url=bayar-spp" <?php echo $_GET['url']=='bayar-spp'?'class="nav-link active"':'class="nav-link"';?>>
                <i class="far fa-circle nav-icon"></i>
                <p>Pembayaran SPP</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="index.php?url=bayar-infaq" <?php echo $_GET['url']=='bayar-infaq'?'class="nav-link active"':'class="nav-link"';?>>
                <i class="far fa-circle nav-icon"></i>
                <p>Pembayaran Infaq</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="index.php?url=bayar-lks" <?php echo $_GET['url']=='bayar-lks'?'class="nav-link active"':'class="nav-link"';?> >
                <i class="far fa-circle nav-icon"></i>
                <p>Pembayaran LKS</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="index.php?url=bayar-ujian" <?php echo $_GET['url']=='bayar-ujian'?'class="nav-link active"':'class="nav-link"';?>>
                <i class="far fa-circle nav-icon"></i>
                <p>Pembayaran Ujian</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="index.php?url=bayar-atribut" <?php echo $_GET['url']=='bayar-atribut'?'class="nav-link active"':'class="nav-link"';?>>
                <i class="far fa-circle nav-icon"></i>
                <p>Pembayaran Attribut</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="index.php?url=bayar-akhir" <?php echo $_GET['url']=='bayar-akhir'?'class="nav-link active"':'class="nav-link"';?>>
                <i class="far fa-circle nav-icon"></i>
                <p>Pembayaran Akhir</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item has-treeview <?php echo $_GET['url']=='tampil-manajemen-pembayaran'||$_GET['url']=='tambah-manajemen-pembayaran'?'menu-open':'';?>">
          <a href="#" class="nav-link <?php echo $_GET['url']=='tampil-manajemen-pembayaran'||$_GET['url']=='tambah-manajemen-pembayaran'?'active':'';?>">
            <i class="nav-icon fas fa-copy"></i>
            <p>
              Manajemen Data
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="index.php?url=tampil-manajemen-pembayaran" <?php echo $_GET['url']=='tampil-manajemen-pembayaran'?'class="nav-link active"':'class="nav-link"';?>>
                <i class="far fa-circle nav-icon"></i>
                <p>Manajemen Pembayaran</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="index.php?url=tambah-manajemen-pembayaran" <?php echo $_GET['url']=='tambah-manajemen-pembayaran'?'class="nav-link active"':'class="nav-link"';?>>
                <i class="far fa-circle nav-icon"></i>
                <p>Tambah Tahun Pembayaran</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class='nav-link'>
                <i class="far fa-circle nav-icon"></i>
                <p>Ganti Password</p>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    <?php }else{?>
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Siswa
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="index.php?url=tampil-siswa" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Data Siswa</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="index.php?url=tambah-siswa" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Tambah Siswa</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
              Pembayaran
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="index.php?url=bayar-spp" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Pembayaran SPP</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="index.php?url=bayar-infaq" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Pembayaran Infaq</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="index.php?url=bayar-lks" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Pembayaran LKS</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="index.php?url=bayar-ujian" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Pembayaran Ujian</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="index.php?url=bayar-atribut" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Pembayaran Attribut</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="index.php?url=bayar-akhir" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Pembayaran Akhir</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item has-treeview">
          <a href="" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
              Manajemen Data
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="index.php?url=tampil-manajemen-pembayaran" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Manajemen Pembayaran</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="index.php?url=tambah-manajemen-pembayaran" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Ganti Password</p>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    <?php } ?>
    </nav>
  </div>
</aside>
