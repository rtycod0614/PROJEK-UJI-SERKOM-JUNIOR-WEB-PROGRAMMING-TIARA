<!DOCTYPE html>
<html lang="en">
<head>
<title>Form Pendaftaran Sertifikat</title>
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
                <h2 class="card-title">Pendaftaran Sertifikasi </h2>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="prosesdaftar.php" method="POST"> 
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Kode Skema</label><br>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder=" " name="kd_skema">
                  </div><br>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Peserta</label><br>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder=" " name="nm_peserta">
                  </div><br>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Jenis Kelamin</label><br>
                    <input type="checkbox" class="form-control" id="Laki-Laki" name="jekel" value="laki-laki">Laki-Laki
                    <input type="checkbox" class="form-control" id="Perempuan" name="jekel" value="perempuan">Perempuan
                  </div><br>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Alamat</label><br>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder=" " name="alamat">
                  </div><br>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nomor Handphone</label><br>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder=" " name="no_hp">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">NIK</label><br>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder=" " name="nik">
                  </div> 
                <!-- /.card-body -->

                <br><div class="card-footer">
                  <button type="submit" class="btn btn-primary">Daftar</button>
                </div>
              </form>
            </div>
              
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section></center>
 
</body>
</html>