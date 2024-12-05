<?php
if (isset($_POST['submit'])) {
    include_once('koneksi.php');
    $NoNo=mysqli_real_escape_string($kon,$_POST['NoNo']);
    $KodeB=mysqli_real_escape_string($kon,$_POST['KodeB']);
    $sql="SELECT * FROM `IsiNota` WHERE `NoNo`='".$NoNo."' and `KodeB`='".$KodeB."'";
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