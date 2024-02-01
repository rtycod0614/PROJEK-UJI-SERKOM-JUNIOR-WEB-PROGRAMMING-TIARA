<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Skema Sertifikasi</title>
    <link rel="stylesheet" type="text/css" href="demo.css">
</head>
<body>
    <header>
        <nav class="header-left">
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="daftar.php">Daftar</a></li>
                <li><a href="sertifikasi.php">Sertifikasi</a></li>
            </ul>
        </nav>
    </header><br><br><br><br><br>
    <!-- Main content -->
    <center><section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h2 class="card-title">Edit Data Skema Sertifikasi</h2>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="proseseditdata.php" method="POST"> 
                            <div class="card-body">
                                <?php
                                include "koneksidatabase.php";
                                $id=$_GET['id'];
                                $query = "SELECT * FROM tb_skema where id=$id";
                                $eksekusi = mysqli_query($db, $query);
                                $data = mysqli_fetch_array($eksekusi);
                                    $id = $data[0];
                                    $kd_skema = $data[1];
                                    $nm_skema = $data[2];
                                    $jenis = $data[3];
                                    $jml_unit = $data[4];
                                ?>

                                <div class="form-group">
                                    <input type="hidden" class="form-control" id="exampleInputEmail1" placeholder=" " name="id" value="<?php echo $id?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Kode Skema</label><br>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder=" " name="kd_skema" value="<?php echo $kd_skema?>"> 
                                </div><br>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Skema</label><br>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder=" " name="nm_skema" value="<?php echo $nm_skema?>"> 
                                </div><br>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Jenis</label><br>
                                    <input type="checkbox" class="form-control" id="KKNI" name="jenis" value="KKNI">KKNI
                                    <input type="checkbox" class="form-control" id="Klaster" name="jenis" value="Klaster">Klaster
                                </div><br>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Jumlah Unit</label><br>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder=" " name="jml_unit" value="<?php echo $jml_unit?>"> 
                                </div>                  
                            </div> <!-- /.card-body -->
                            <br><div class="card-footer">
                                <button type="submit" class="btn btn-primary">Edit</button>
                            </div> 
                        </form> 
                    </div> <!-- /.card-primary-->      
                </div> <!-- /.col-md-12 -->
            </div> <!-- /.row -->
        </div> <!-- /.container-fluid -->
    </section></center>
    
</body>
</html>