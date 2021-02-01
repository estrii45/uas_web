<?php
      include "koneksi.php";
      $id = $_GET['id'];
      $ambilData = mysqli_query($koneksi,"DELETE FROM tb_siswi WHERE NPM='$id'");

      echo "<script>alert('Data Berhasil Di Hapus');document.location='index.php'</script>";
?> 

