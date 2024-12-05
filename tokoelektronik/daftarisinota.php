<?php
include_once('koneksi.php');
$NoNo=mysqli_real_escape_string($kon,$_POST['NoNo']);
$sql="SELECT * FROM `IsiNota` WHERE `NoNo`='".$NoNo."'";
$q=mysqli_query($kon,$sql);
$r=mysqli_fetch_assoc($q);
$hasil=array();
if (empty($r)) {
    do {
        array_push($hasil,$r);
    } while($r=mysqli_fetch_assoc($q));
    echo json_encode($hasil);
} else {
    echo 'Rekord tabel tidak ada !';
}
?>