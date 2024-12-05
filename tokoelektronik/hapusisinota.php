<?php
if (isset($_POST['submit'])) {
    include_once('koneksi.php');
    $NoNo=mysqli_real_escape_string($kon,$_POST['NoNo']);
    $KodeB=mysqli_real_escape_string($kon,$_POST['KodeB']);
    $sql="DELETE FROM `IsiNota` WHERE `NoNo`='".$NoNo."' and `KodeB`='".$KodeB."'";
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