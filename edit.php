<?php
    include "koneksi.php";
    $id = $_GET['id'];
    $ambilData = mysqli_query($koneksi,"SELECT * FROM tb_siswi WHERE NPM='$id'");
    $data=mysqli_fetch_array($ambilData);


?> 

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
<body>

    <h3>EDIT Data Mahasiswa</h3>

    <form action="" method="post">
        <table>

            <tr>
                <td width="130">NPM</td>
                <td><input type="text" name="NPM" value="<?php echo $data ['NPM']?>"></td>
            </tr>
            <tr>
                <td width="130">NAMA</td>
                <td><input type="text" name="NAMA" value="<?php echo $data ['NAMA']?>"></td>
            </tr>
            <tr>
                <td width="130">TANGGAL_LAHIR</td>
                <td><input type="text" name="TANGGAL_LAHIR" value="<?php echo $data ['TANGGAL_LAHIR']?>"></td>
            </tr>
            <tr>
                <td width="130">TEMPAT_LAHIR</td>
                <td><input type="text" name="TEMPAT_LAHIR" value="<?php echo $data ['TEMPAT_LAHIR']?>"></td>
            </tr>
            <tr>
                <td width="130">JENIS_KELAMIN</td>
                <td><input type="enum" name="JENIS_KELAMIN" value="<?php echo $data ['JENIS_KELAMIN']?>""></td>
            </tr>
            
            <tr>
                <td width="130">ALAMAT</td>
                <td><input type="text" name="ALAMAT" value="<?php echo $data ['ALAMAT']?>"></td>
            </tr>
            <tr>
                <td width="130">KODE_POS</td>
                <td><input type="text" name="KODE_POS" value="<?php echo $data ['KODE_POS']?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="proses" value="simpan"></td>
            </tr>
        </table>
    </form>
   </center>
</html>

 <?php 
     if(isset($_POST['proses']))
        {
            $NPM= $_POST['NPM'];
            $NAMA= $_POST['NAMA'];
            $TEMPAT_LAHIR= $_POST['TEMPAT_LAHIR'];
            $TANGGAL_LAHIR= $_POST['TANGGAL_LAHIR'];
            $JENIS_KELAMIN= $_POST['JENIS_KELAMIN'];
            $ALAMAT= $_POST['ALAMAT'];
            $KODE_POS= $_POST['KODE_POS'];
            $tambah= mysqli_query($koneksi,"UPDATE  tb_siswi SET NAMA='$NAMA',TEMPAT_LAHIR='$TEMPAT_LAHIR',TANGGAL_LAHIR='$TANGGAL_LAHIR',JENIS_KELAMIN='$JENIS_KELAMIN' , ALAMAT='$ALAMAT', KODE_POS='$KODE_POS' WHERE 
                                NPM='$id'");
                   if($tambah){
                            ?>
                            <script type="text/javascript">
                                alert('edit data berhasil');
                                document.location='index.php';
                            </script>
                            <?php
                        }else {
                            echo "GAGAL";
        }

    }
?>