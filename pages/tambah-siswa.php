<div class="row">
  <div class="col-md-10 offset-md-1">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Tambah Data Siswa</h3>
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fas fa-minus"></i></button>
        </div>
      </div>
      <div class="card-body">
      <?php
      if(isset($_GET['edit'])){
          ?>
          <form action="" method="post">
          <?php
          $query = mysqli_query($koneksi,'select * from tbl_siswa where nis = "'.$_GET['id'].'"');
          while ($data = mysqli_fetch_assoc($query)) {
              ?>
        <div class="form-group">
          <label for="id">NIS</label>
          <input type="text" value='<?php echo $data['nis'] ?>' class='form-control' readonly name="nis" required>
        </div>
        <div class="form-group">
          <label for="inputClientCompany">Nama</label>
          <input type="text" value='<?php echo $data['nama'] ?>' class='form-control' name="nama" required>
        </div>
        <div class="form-group">
          <label for="inputClientCompany">Alamat</label>
          <input type="text" value='<?php echo $data['alamat'] ?>' class='form-control' name="alamat" required>
        </div>
        <div class="form-group">
          <label for="inputClientCompany">Nama Ayah</label>
          <input type="text" value='<?php echo $data['nama_ayah'] ?>' class='form-control' name="nama_ayah" required>
        </div>
        <div class="form-group">
          <label for="inputClientCompany">Nama Ibu</label>
          <input type="text" value='<?php echo $data['nama_ibu'] ?>' class='form-control' name="nama_ibu" required >
        </div>
        <div class="form-group">
          <label for="inputClientCompany">Tahun Masuk</label>
          <input type="text" value='<?php echo $data['tahun_masuk'] ?>' class='form-control' name="tahun_masuk" required >
        </div>
        <div class="form-group">
          <label for="inputClientCompany">Jenis Kelamin</label>
            <select class='form-control' required name="jk" id="">
            <option>- Jenis Kelamin -</option>
            <option value="L" <?php echo $data['jk'] =='L'?'selected':'' ?>>Laki-Laki</option>
            <option value="P" <?php echo $data['jk'] =='P'?'selected':'' ?>>Perempuan</option>
            </select>
        </div>
        <div class="form-group">
          <label for="inputClientCompany">Jurusan</label>
          <input type="text" class='form-control' value='<?php echo $data['jurusan'] ?>' name="jurusan" required >
        </div>
          <?php } ?>
        <div class="form-group">
          <input type="submit" value="Submit" name='edit' class='form-control'>
        </div>
      </form>
          <?php
           }else{
          ?>
      <form action="" method="post">
        <div class="form-group">
          <label for="id">NIS</label>
          <input type="text" class='form-control' name="nis" required>
        </div>
        <div class="form-group">
          <label for="inputClientCompany">Nama</label>
          <input type="text" class='form-control' name="nama" required id="total">
        </div>
        <div class="form-group">
          <label for="inputClientCompany">Alamat</label>
          <input type="text" class='form-control' name="alamat" required id="total">
        </div>
        <div class="form-group">
          <label for="inputClientCompany">Nama Ayah</label>
          <input type="text" class='form-control' name="nama_ayah" required id="total">
        </div>
        <div class="form-group">
          <label for="inputClientCompany">Nama Ibu</label>
          <input type="text" class='form-control' name="nama_ibu" required id="total">
        </div>
        <div class="form-group">
          <label for="inputClientCompany">Tahun Masuk</label>
          <input type="text" class='form-control' name="tahun_masuk" required id="total">
        </div>
        <div class="form-group">
          <label for="inputClientCompany">Jenis Kelamin</label>
            <select class='form-control' required name="jk" id="">
            <option>- Jenis Kelamin -</option>
            <option value="L">Laki-Laki</option>
            <option value="P">Perempuan</option>
            </select>
        </div>
        <div class="form-group">
          <label for="inputClientCompany">Jurusan</label>
          <input type="text" class='form-control' name="jurusan" required id="total">
        </div>
        <div class="form-group">
          <input type="submit" value="Submit" name='submit' class='form-control'>
        </div>
      </form>
      <?php
      } ?>
      </div>
    </div>
  </div>
</div>
<?php
if(isset($_POST['submit'])){
    $query=mysqli_query($koneksi,'insert into tbl_siswa values("'.$_POST['nis'].'","'.$_POST['nama'].'","'.$_POST['alamat'].'","'.$_POST['nama_ayah'].'","'.$_POST['nama_ibu'].'","'.$_POST['tahun_masuk'].'","'.$_POST['jk'].'","'.$_POST['jurusan'].'")')or die(mysqli_error($koneksi));
    if($query){
        ?> <script>
        location.replace('index.php?url=tampil-siswa');
        alert('Berhasil Tambah Data !');
        </script><?php
    }else{
        ?> <script> alert('Gagal Tambah Data!')</script><?php
    }
}
if(isset($_POST['edit'])){
    $query=mysqli_query($koneksi,'update tbl_siswa set nama = "'.$_POST['nama'].'",alamat = "'.$_POST['alamat'].'",nama_ayah = "'.$_POST['nama_ayah'].'",nama_ibu = "'.$_POST['nama_ibu'].'",tahun_masuk = "'.$_POST['tahun_masuk'].'",jk = "'.$_POST['jk'].'",jurusan = "'.$_POST['jurusan'].'" where nis="'.$_POST['nis'].'"')or die(mysqli_error($koneksi));
    if($query){
        ?> <script>
        location.replace('index.php?url=tampil-siswa');
        alert('Berhasil Update Data !');
        </script><?php
    }else{
        ?> <script> alert('Gagal Update Data!')</script><?php
    }
}
?>