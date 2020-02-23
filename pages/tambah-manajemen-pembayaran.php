<div class="row">
  <div class="col-md-10 offset-md-1">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Tambah Manajemen Pembayaran</h3>
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
          $query = mysqli_query($koneksi,'select * from parameter where id = "'.$_GET['id'].'"');
          while ($data = mysqli_fetch_assoc($query)) {
            ?>
            <input type="hidden" class='form-control' value='<?php echo $data['id'] ?>' name="id" required >
        <div class="form-group">
          <label for="inputClientCompany">Jenis Pembayaran</label>
            <select class='form-control' required name="jenis_pembayaran" id="">
            <option>- Jenis Pembayaran -</option>
            <option value="LKS" <?php echo $data['jenis_pembayaran'] =='LKS'?'selected':'' ?>>LKS</option>
            <option value="ATRIBUT" <?php echo $data['jenis_pembayaran'] =='ATRIBUT'?'selected':'' ?>>ATRIBUT</option>
            <option value="SPP" <?php echo $data['jenis_pembayaran'] =='SPP'?'selected':'' ?>>SPP</option>
            <option value="INFAQ" <?php echo $data['jenis_pembayaran'] =='INFAQ'?'selected':'' ?>>INFAQ</option>
            <option value="AKHIR" <?php echo $data['jenis_pembayaran'] =='AKHIR'?'selected':'' ?>>AKHIR</option>
            <option value="UJIAN" <?php echo $data['jenis_pembayaran'] =='UJIAN'?'selected':'' ?>>UJIAN</option>
            </select>
        </div>
        <div class="form-group">
          <label for="inputClientCompany">Jumlah</label>
          <input type="text" class='form-control' value='<?php echo $data['jumlah'] ?>' name="jumlah" required >
        </div>
        <div class="form-group">
          <label for="inputClientCompany">Tahun Masuk</label>
          <input type="text" value='<?php echo $data['tahun'] ?>' class='form-control' name="tahun" required >
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
          <label for="inputClientCompany">Jenis Pembayaran</label>
            <select class='form-control' required name="jenis_pembayaran" id="">
            <option>- Jenis Pembayaran -</option>
            <option value="LKS">LKS</option>
            <option value="ATRIBUT">ATRIBUT</option>
            <option value="SPP">SPP</option>
            <option value="INFAQ">INFAQ</option>
            <option value="AKHIR">AKHIR</option>
            <option value="UJIAN">UJIAN</option>
            </select>
        </div>
        <div class="form-group">
          <label for="inputClientCompany">Jumlah</label>
          <input type="text" class='form-control' name="jumlah" required >
        </div>
        <div class="form-group">
          <label for="inputClientCompany">Tahun Masuk</label>
          <input type="text" class='form-control' name="tahun" required >
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
    $query=mysqli_query($koneksi,'insert into parameter(jenis_pembayaran,jumlah,tahun) values("'.$_POST['jenis_pembayaran'].'","'.$_POST['jumlah'].'","'.$_POST['tahun'].'")')or die(mysqli_error($koneksi));
    if($query){
        ?> <script>
        location.replace('index.php?url=tampil-manajemen-pembayaran');
        alert('Berhasil Tambah Data !');
        </script><?php
    }else{
        ?> <script> alert('Gagal Tambah Data!')</script><?php
    }
}
if(isset($_POST['edit'])){
    $query=mysqli_query($koneksi,'update parameter set jenis_pembayaran = "'.$_POST['jenis_pembayaran'].'",jumlah = "'.$_POST['jumlah'].'",tahun = "'.$_POST['tahun'].'" where id="'.$_POST['id'].'"')or die(mysqli_error($koneksi));
    if($query){
        ?> <script>
        location.replace('index.php?url=tampil-manajemen-pembayaran');
        alert('Berhasil Update Data !');
        </script><?php
    }else{
        ?> <script> alert('Gagal Update Data!')</script><?php
    }
}
?>