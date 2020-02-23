<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Tabel Data Siswa</h3>
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
              <th>NIS</th>
              <th>Nama</th>
              <th>Alamat</th>
              <th>Nama Ayah</th>
              <th>Nama Ibu</th>
              <th>Tahun Masuk</th>
              <th>JK</th>
              <th>Jurusan</th>
              <th colspan='2'>Action</th>
            </tr>
          </thead>
          <tbody> 
            <?php 
            $query = mysqli_query($koneksi,'select * from tbl_siswa');
            while($data = mysqli_fetch_assoc($query)){
                ?>
                <tr>
                    <td><?php echo $data['nis'] ?></td>
                    <td><?php echo $data['nama'] ?></td>
                    <td><?php echo $data['alamat'] ?></td>
                    <td><?php echo $data['nama_ayah'] ?></td>
                    <td><?php echo $data['nama_ibu'] ?></td>
                    <td><?php echo $data['tahun_masuk'] ?></td>
                    <td><?php echo $data['jk'] ?></td>
                    <td><?php echo $data['jurusan'] ?></td>
                    <td><a href="index.php?url=tambah-siswa&&edit&&id=<?php echo $data['nis'] ?>">Edit</a></td>
                    <td><a href="index.php?url=tampil-siswa&&delete&&id=<?php echo $data['nis'] ?>">Delete</a></td>
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
    $query = mysqli_query($koneksi,'delete from tbl_siswa where nis = "'.$_GET['id'].'"') or die(mysqli_error($koneksi));
    if($query){
        ?> <script>
        location.replace('index.php?url=tampil-siswa');
        alert('Berhasil Hapus Data !');
        </script><?php
    }else{
        ?> <script> alert('Gagal Hapus Data!')</script><?php
    }
}
?>