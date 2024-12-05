<?php
if (isset($_POST['submit'])) {
    include_once('koneksi.php');
    $NoNota=mysqli_real_escape_string($kon,$_POST['NoNota']);
    $sql="DELETE FROM `Nota` WHERE `NoNota`='".$NoNota."'";
    $q=mysqli_query($kon,$sql);
    if ($sql) {
        echo 'Rekord sudah dihapus !';
    } else {
        echo 'Rekord gagal dihapus !';
    }
} else {
    echo 'Salah format API !';
}
?>