<?php
if (isset($_POST['submit'])) {
    include_once('koneksi.php');
    $NoNota=mysqli_real_escape_string($kon,$_POST['NoNota']);
    $sql="SELECT * FROM `Nota` WHERE `NoNota`='".$NoNota."'";
    $q=mysqli_query($kon,$sql);
    $r=mysqli_fetch_assoc($q);
    $hasil=array();
    if (!empty($r)) {
        do {
            array_push($hasil,$r);
        } while($r=mysqli_fetch_assoc($q));
        echo json_encode($hasil);
    } else {
        echo 'Rekord tidak ditemukan !';
    }
} else {
    echo 'Salah format API !';
}
?>