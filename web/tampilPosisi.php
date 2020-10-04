<?php

require "koneksi.php";

$sql = "SELECT * FROM tb_posisi_pegawai";

$query = mysqli_query($con, $sql);

$result = array();

while ($row = mysqli_fetch_array($query)) {

  //Memasukkan Nama dan ID kedalam Array Kosong yang telah dibuat
  array_push($result, array(
    "id" => $row['id'],
    "posisi" => $row['posisi'],
    "gajih" => $row['gajih']
  ));
}

//Menampilkan Array dalam Format JSON
echo json_encode(array('result' => $result));
mysqli_close($con);
