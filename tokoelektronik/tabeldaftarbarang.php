<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Daftar Barang</h2>
  <p>Berikut ini daftar stok barang yang tersedia saat ini :</p>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Kode Barang</th>
        <th>Nama Barang</th>
        <th>Jumlah Stok</th>
        <th>Harga Beli Tertinggi</th>
        <th>Harga Jual Tertinggi</th>
      </tr>
    </thead>
    <tbody>
        <?php
        $url='http://localhost/tokoelektronik/daftarbarang.php';//'http://tokoelektrokita.ct.ws/daftarbarang.php?i=1';
        $data=file_get_contents($url);
        //print_r($data); //ini dipakai untuk cek data
        if ($data=='Rekord tabel tidak ada !') {
            echo'<tr><td colspan="5">Tidak ada record !</td><tr>';
        } else {
        $data=json_decode($data,true);
        foreach($data as $d){
        ?>
      <tr>
        <td><?php echo $d['KodeBarang'];?></td>
        <td><?php echo $d['NamaBarang'];?></td>
        <td><?php echo $d['JumlahStok'];?></td>
        <td><?php echo $d['HargaBeliTertinggi'];?></td>
        <td><?php echo $d['HargaJualTertinggi'];?></td>
      </tr>
      <?php };
      } //endifcount ?>
    </tbody>
  </table>
</div>

</body>
</html>
