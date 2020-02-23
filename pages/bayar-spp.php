<div class="row">
  <div class="col-md-10 offset-md-1">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Pembayaran SPP</h3>
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
          <select required class="custom-select form-control" onchange='siswa(this.value)' name="nama" id="nama">
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
          <input type="number" class='form-control' readonly value = 0 name="pembayaran" id="total">
        </div>
        <div class="form-group">
          <label for="inputProjectLeader">Tanggal Pembayaran</label>
          <input type="text" readonly value=<?php echo date('Y-m-d'); ?> name="tanggal" id="" class='form-control'>
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
$proses = mysqli_query($koneksi,'select * from tbl_siswa')or die(mysqli_error($koneksi));
$j=0;
echo "<script>var sis = [";
while($data = mysqli_fetch_assoc($proses)){
  echo "['".$data['nis']."','".$data['tahun_masuk']."'],";
  $j++;
}
echo '];';

$proses = mysqli_query($koneksi,'select * from parameter')or die(mysqli_error($koneksi));
$i=0;
echo "var data = [";
while($data = mysqli_fetch_assoc($proses)){
  echo "['".$data['jenis_pembayaran']."','".$data['jumlah']."','".$data['tahun']."'],";
  $i++;
}
echo '];</script>';
if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $total = $_POST['pembayaran'];
    $tanggal = $_POST['tanggal'];
    $query = mysqli_query($koneksi,'insert into bayar_spp values("'.$id.'","'.$nama.'","'.$total.'")') or die(mysqli_error($koneksi));
    $query1 = mysqli_query($koneksi,'insert into tbl_bayar values("'.$id.'","'.$tanggal.'","SPP")') or die(mysqli_error($koneksi));
    if($query && $query1){
        ?> <script>
        location.replace('index.php?url=bayar-spp');
        alert('Berhasil Tambah Data !');
        </script><?php
    }else{
        ?> <script> alert('Gagal Tambah Data!')</script><?php
    }
}
?>
</html>
<script>
function siswa(test){
    document.getElementById('total').value = 0;
    var param;
    console.log(sis.length);
    for(var i=0;i<sis.length;i++){
        if(test == sis[i][0]){
        param = sis[i][1];
        break;
        }
    }
    for(var i=0;i<data.length;i++){
        console.log(data[i][2]);
        if(data[i][2] == param && data[i][0]=="SPP"){
            document.getElementById('total').value = data[i][1];
        }
    }
}
</script>