<?php
if (isset($_POST['submit'])) {
    include_once('koneksi.php');
    $NoNota=mysqli_real_escape_string($kon,$_POST['NoNota']);
    $WaktuTransaksi=mysqli_real_escape_string($kon,$_POST['WaktuTransaksi']);
    $NoHPWA	=mysqli_real_escape_string($kon,$_POST['NoHPWA']);
    $sql="UPDATE `Nota` SET `WaktuTransaksi`='".$WaktuTransaksi."',`NoHPWA`='".$NoHPWA."' WHERE `NoNota`='".$NoNota."'";
    $q=mysqli_query($kon,$sql);
    if ($q) {
        echo 'Rekord sudah disimpan !';
    } else {
        echo 'Rekord gagal disimpan !';
    }
} else {
    echo 'Salah format API !';
}
?>