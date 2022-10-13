<?php
$halalmart = array(
    'kd_barang' => array('0','1','2'),
    'nama_barang' => array('donat salju','piscok','milk tea'),
    'price' => array('Rp.2.000','Rp.1.500','Rp.5.000')

);
echo "kd barang || nama barang || harga \n";
echo $halalmart['kd_barang'] [0],  "||", $halalmart['nama_barang'] [0], "||", $halalmart['price'] [0], "\n";
echo $halalmart['kd_barang'] [1],  "||", $halalmart['nama_barang'] [1], "||", $halalmart['price'] [1], "\n";
echo $halalmart['kd_barang'] [2],  "||", $halalmart['nama_barang'] [2], "||", $halalmart['price'] [2], "\n";
?>