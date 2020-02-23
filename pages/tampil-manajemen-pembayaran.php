<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Tabel Data Manajemen Pembayaran</h3>
        <div class="card-tools">
          <div class="input-group input-group-sm" style="width: 150px;">
            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
            <div class="input-group-append">
              <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
            </div>
          </div>
        </div>
      </div>
      <div class="card-body table-responsive p-0" style="height: 300px;">
        <table class="table table-head-fixed text-nowrap">
          <thead>
            <tr>
              <th>Jenis Pembayaran</th>
              <th>Jumlah</th>
              <th>Tahun</th>
              <th colspan='2'>Action</th>
            </tr>
          </thead>
          <tbody> 
            <?php 
            $query = mysqli_query($koneksi,'select * from parameter');
            while($data = mysqli_fetch_assoc($query)){
                ?>
                <tr>
                    <td><?php echo $data['jenis_pembayaran'] ?></td>
                    <td><?php echo $data['jumlah'] ?></td>
                    <td><?php echo $data['tahun'] ?></td>
                    <td><a href="index.php?url=tambah-manajemen-pembayaran&&edit&&id=<?php echo $data['id'] ?>">Edit</a></td>
                    <td><a href="index.php?url=tampil-manajemen-pembayaran&&delete&&id=<?php echo $data['id'] ?>">Delete</a></td>
                </tr>
                <?php
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<?php
if(isset($_GET['delete'])){
    $query = mysqli_query($koneksi,'delete from parameter where id = "'.$_GET['id'].'"') or die(mysqli_error($koneksi));
    if($query){
        ?> <script>
        location.replace('index.php?url=tampil-manajemen-pembayaran');
        alert('Berhasil Hapus Data !');
        </script><?php
    }else{
        ?> <script> alert('Gagal Hapus Data!')</script><?php
    }
}
?>