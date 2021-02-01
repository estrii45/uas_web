
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">    
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    </head>
    <br>
        <form action="" method="post" class="form-inline">
            <button type="submit" class="btn btn-primary mb-2" name="submit"><i class="fas fa-search"></i></button>
            <div class="col-sm-11">
                <input type="text" name="cari" palceholder="pencarian" autocomplete="off" class="col-sm-2 col-form-label">
            </div>
        </form>
            <body>
                <table class="table table-striped">
            <thead class="thead-dark">
                <tr align="center">
                     <th scope="col"> NO</th>
                    <th scope="col"> NPM</th>
                    <th scope="col">NAMA</th>
                    <th scope="col">TEMPAT_LAHIR</th>
                    <th scope="col">TANGGAL_LAHIR</th>
                    <th scope="col">JENIS_KELAMIN</th>
                    <th scope="col">ALAMAT</th>
                    <th scope="col">KODE_POS</th>
                    <th scope="col" colspan="2">Action</th>
                </tr>
            <tbody>
        </thead>
            <?php
                include "koneksi.php";
                $no=1;
                if(isset($_POST['submit'])){
                    $cari=$_POST['cari'];
                    $query = mysqli_query($koneksi,"SELECT * FROM tb_siswi WHERE nama LIKE '$cari%'");
                }else{
                    $query= mysqli_query($koneksi,"SELECT * FROM tb_siswi");
                }
                while ($data = mysqli_fetch_array($query)){
            ?>
                <tr align ="center">
                    <td><?php echo $no++;?></td>
                    <td><?php echo $data['NPM'];?></td>
                    <td><?php echo $data['NAMA'];?></td>
                    <td><?php echo $data['TEMPAT_LAHIR'];?></td>
                    <td><?php echo $data['TANGGAL_LAHIR'];?></td>
                    <td><?php echo $data['JENIS_KELAMIN'];?></td>
                    <td><?php echo $data['ALAMAT'];?></td>
                    <td><?php echo $data['KODE_POS'];?></td>
                    <td align="center" width="80"><a href="edit.php?id=<?php echo $data['NPM']; ?> ">
                    <button type="button" class="btn btn-warning">Edit</button>
                    <td align="center" width="80"><a href="hapus.php?id=<?php echo $data['NPM']; ?>">
                    <button type="button" class="btn btn-danger">Delet</button>
                    </td>
                </tr>
            <?php
                }
            ?>
            </tbody>
                </table>
                 <tr>
<a href="tambah.php"><input type="reset" class="btn btn-success" value="Tambah Data"></a>
</tr>
            </body>
        </div>
    </div>