<?php include ('koneksi.php') ?>
<form action="" method="post">
    <table>
    <tr><td colspan='2'>FORM PEMBAYARAN UJIAN</td></tr>
    <tr><td>ID Pembayaran</td><td><input type="text" value='BYR<?php $query = mysqli_query($koneksi,'select id_bayar from tbl_bayar');
    $param2 = 000;
    if (mysqli_num_rows($query)!=0) {
        while ($data = mysqli_fetch_assoc($query)) {
            $param1 = substr($data['id_bayar'], 3);
            $param2 = $param2<$param1?$param1   :$param2;
        };
    }
    echo str_pad($param2+1,3,"0",STR_PAD_LEFT);
    ?>' name="id"></td></tr>
    <tr><td>Nama Siswa</td><td>
    <select name="nama" id="id">
        <option disabled selected>- Nama Siswa -</option>
    <?php 
        $hasil = mysqli_query($koneksi,"select * from tbl_siswa") or die(mysqli_error($koneksi));
        while($data = mysqli_fetch_assoc($hasil)){
            echo '<option value="'.$data['nis'].'">'.$data['nis'].' - '.$data['nama'].'</option>';
        }
    ?>
    </select>
    </td></tr>
    <tr><td>Total yang Harus Dibayar</td><td><input type="number" onchange='bayar()' value = 0 name="pembayaran" id="total"></td></tr>
    <tr><td>Tanggal Pembayaran</td><td><input type="text" readonly value=<?php echo date('Y-m-d'); ?> name="tanggal" id=""></td></tr>
    <tr><td>Terbayar</td><td><input type="number" onchange='bayar()' value=0 name="terbayar" id="terbayar"></td></tr>
    <tr><td>Keterangan</td><td><input type="radio" name="keterangan" id="" value="Genap">Genap<input type="radio" name="keterangan" id="" value="Ganjil">Ganjil</td></tr>
    <tr><td colspan='2'><input type="submit" value="Submit" name='submit'></td></tr>
    </table>
</form>
<?php
if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $total = $_POST['pembayaran'];
    $tanggal = $_POST['tanggal'];
    $terbayar = $_POST['terbayar'];
    $keterangan = $_POST['keterangan'];
    $query = mysqli_query($koneksi,'insert into bayar_ujian values("'.$id.'","'.$nama.'","'.$terbayar.'","'.$keterangan.'")') or die(mysqli_error($koneksi));
    $query1 = mysqli_query($koneksi,'insert into tbl_bayar values("'.$id.'","'.$tanggal.'","UJIAN")') or die(mysqli_error($koneksi));
    if($query && $query1){
        ?> <script> 
        location.replace('bayar-ujian.php');
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