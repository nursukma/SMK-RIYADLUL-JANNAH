<div class="row">
  <div class="col-md-10 offset-md-1">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Pembayaran Akhir</h3>
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fas fa-minus"></i></button>
        </div>
      </div>
      <div class="card-body">
        <div class="form-group">
          <form class="" action="" method="post">
          <label for="id">ID Pembayaran</label>
          <input type="text" class='form-control' value='BYR<?php $query = mysqli_query($koneksi,'select id_bayar from tbl_bayar');
          $param2 = 000;
          if (mysqli_num_rows($query)!=0) {
              while ($data = mysqli_fetch_assoc($query)) {
                  $param1 = substr($data['id_bayar'], 3);
                  $param2 = $param2<$param1?$param1   :$param2;
              };
          }
          echo str_pad($param2+1,3,"0",STR_PAD_LEFT);
          ?>' name="id" required>
        </div>
        <div class="form-group">
          <label for="nama">Nama Siswa</label>
          <select required class="custom-select form-control" name="nama" id="nama">
              <option disabled selected>- Nama Siswa -</option>
          <?php
              $hasil = mysqli_query($koneksi,"select * from tbl_siswa") or die(mysqli_error($koneksi));
              while($data = mysqli_fetch_assoc($hasil)){
                  echo '<option value="'.$data['nis'].'">'.$data['nis'].' - '.$data['nama'].'</option>';
              }
          ?>
          </select>
        </div>
        <div class="form-group">
          <label for="inputClientCompany">Total Bayar</label>
          <input type="number" class='form-control' onchange='bayar()' value = 0 name="pembayaran" id="total">
        </div>
        <div class="form-group">
          <label for="inputProjectLeader">Tanggal Pembayaran</label>
          <input type="text" readonly value=<?php echo date('Y-m-d'); ?> name="tanggal" id="" class='form-control'>
        </div>
        <div class="form-group">
          <label for="inputClientCompany">Bayar</label>
          <input required type="number" onchange='bayar()' value = 0 name="terbayar" class='form-control' id="terbayar">
        </div>
        <div class="form-group">
          <label for="inputProjectLeader">Sisa Pembayaran</label>
          <input type="number" readonly name="sisa" class='form-control' id="sisa">
        </div>
        <div class="form-group">
          <input type="submit" value="Submit" name='submit' class='form-control'>
        </div>
      </form>
      </div>
    </div>
  </div>
</div>
<?php
if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $total = $_POST['pembayaran'];
    $tanggal = $_POST['tanggal'];
    $terbayar = $_POST['terbayar'];
    $sisa = $_POST['sisa'];
    $query = mysqli_query($koneksi,'insert into bayar_akhir values("'.$id.'","'.$nama.'","'.$total.'","'.$terbayar.'","'.$sisa.'")') or die(mysqli_error($koneksi));
    $query1 = mysqli_query($koneksi,'insert into tbl_bayar values("'.$id.'","'.$tanggal.'","AKHIR")') or die(mysqli_error($koneksi));
    if($query && $query1){
        ?> <script>
        location.replace('bayar-akhir.php');
        alert('Berhasil Tambah Data !');
        </script><?php
    }else{
        ?> <script> alert('Gagal Tambah Data!')</script><?php
    }
}
?>
</html>
<script>
function bayar(){
    var total = parseInt(document.getElementById('total').value);
    var terbayar = parseInt(document.getElementById('terbayar').value);
    if(terbayar>total){
        document.getElementById('terbayar').value = total;
        document.getElementById('sisa').value = 0;
    }
    else{
        document.getElementById('sisa').value = total-terbayar;
    }
    if(total <0){
        document.getElementById('total').value = 0;
        document.getElementById('sisa').value = 0;
        document.getElementById('terbayar').value = 0;
    }
    if(terbayar<0){
        document.getElementById('terbayar').value = 0;
        document.getElementById('sisa').value = total;
    }
}
</script>
