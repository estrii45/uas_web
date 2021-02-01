<!DOCTYPE HTML>
<html>
<head>
<center>
<style>
		body{
			background-image:url(bg2.jpg);
			background-size:cover;
			background-attachment: fixed;
		}
		
	</style>
</head>
    <h3>Tambah Data Mahasiswa</h3>

    <form action="" method="post">
        <table>
             <tr>
                <td width="130">NPM</td>
                <td><input type="text" name="NPM" value=""></td>
            </tr>
            <tr>
                <td width="130">NAMA</td>
                <td><input type="text" name="NAMA" value=""></td>
            </tr>
            <tr>
                <td width="130">TANGGAL LAHIR</td>
                <td><input type="text" name="TANGGAL_LAHIR" value=""></td>
            </tr>
            <tr>
                <td width="130">TEMPAT LAHIR</td>
                <td><input type="text" name="TEMPAT_LAHIR" value=""></td>
            </tr>
            <tr>
                <td width="130">JENIS KELAMIN</td>
                <td><input type="enum" name="JENIS_KELAMIN" value=""></td>
            </tr>
            
            <tr>
                <td width="130">ALAMAT</td>
                <td><input type="text" name="ALAMAT" value=""></td>
            </tr>
            <tr>
                <td width="130">KODE POS</td>
                <td><input type="text" name="KODE_POS" value=""></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="proses" value="TAMBAH"></td>
            </tr>
        </table>
    </form>

<?php 
 include "koneksi.php";
     if(isset($_POST['proses']))
        {

            $NPM= $_POST['NPM'];
            $NAMA= $_POST['NAMA'];
            $TEMPAT_LAHIR= $_POST['TEMPAT_LAHIR'];
            $TANGGAL_LAHIR= $_POST['TANGGAL_LAHIR'];
            $JENIS_KELAMIN= $_POST['JENIS_KELAMIN'];
            $ALAMAT= $_POST['ALAMAT'];
            $KODE_POS= $_POST['KODE_POS'];
            $tambah= mysqli_query($koneksi,"insert into tb_siswi(NPM,NAMA,TEMPAT_LAHIR,TANGGAL_LAHIR,JENIS_KELAMIN,ALAMAT,KODE_POS) values('$NPM','$NAMA','$TEMPAT_LAHIR','$TANGGAL_LAHIR','$JENIS_KELAMIN','$ALAMAT','$KODE_POS')");
                   if($tambah){
                            ?>
                            <script type="text/javascript">
                                alert('Tambah data berhasil');
                                document.location='index.php';
                            </script>
                            <?php
                        }else {
                            echo "GAGAL";
        }

    }
?>
</center>
</html>