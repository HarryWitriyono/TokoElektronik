<?php
if (isset($_POST['submit'])) {
    include_once('koneksi.php');
    $NoTelpWA=mysqli_real_escape_string($kon,$_POST['NoTelpWA']);
    $NamaPembeli=mysqli_real_escape_string($kon,$_POST['NamaPembeli']);
    $Alamat=mysqli_real_escape_string($kon,$_POST['Alamat']);
    $sql="UPDATE `Pembeli` SET `NamaPembeli`='".$NamaPembeli."',`Alamat`='".$Alamat."' WHERE `NoTelpWA`='".$NoTelpWA."'";
    $q=mysqli_query($kon,$sql);
    if ($sql) {
        echo 'Rekord yang dikoreksi sudah disimpan !';
    } else {
        echo 'Rekord yang dikoreksi gagal disimpan !';
    }
} else {
    echo 'Salah format API !';
}
?>