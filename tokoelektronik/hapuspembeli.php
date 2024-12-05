<?php
if (isset($_POST['submit'])) {
    include_once('koneksi.php');
    $NoTelpWA=mysqli_real_escape_string($kon,$_POST['NoTelpWA']);
    $sql="DELETE FROM `Pembeli` WHERE `NoTelpWA`='".$NoTelpWA."'";
    $q=mysqli_query($kon,$sql);
    if ($sql) {
        echo 'Rekord yang dikoreksi sudah dihapus !';
    } else {
        echo 'Rekord yang dikoreksi gagal dihapus !';
    }
} else {
    echo 'Salah format API !';
}
?>