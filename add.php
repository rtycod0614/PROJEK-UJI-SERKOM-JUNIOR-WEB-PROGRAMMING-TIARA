<!DOCTYPE html>
<html lang="en">
<head>
<title>Tambah Data Skema Sertifikasi</title>
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
                <h2 class="card-title">Tambah Data Skema Sertifikasi</h2>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="prosestambahdata.php" method="POST"> 
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Kode Skema</label><br>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder=" " name="kd_skema">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Skema</label><br>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder=" " name="nm_skema">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Jenis</label><br>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder=" " name="jenis">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Jumlah Unit</label><br>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder=" " name="jml_unit">
                  </div>
                <!-- /.card-body -->

                <br><div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
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