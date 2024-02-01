<!DOCTYPE html>
<html>
<head>
    <title>Home | Data Peserta</title>
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
    </header>
    <!-- Main content -->
    <br><br><br><br><br><section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h2>DATA PESERTA</h2> 
              </div><br><br>
              <div class="search-box">
                <form method="post" action="">
                  <input type="text" name="keyword" placeholder="Cari Peserta...">
                  <button type="submit" name="search" class="button-search">Cari</button>
                </form>
              </div><br><br><br>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table custom-table" align="center">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Kode Skema</th>
                    <th>Nama Peserta</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>No. Hp</th>
                    <th>NIK</th>
                  </tr>
                  </thead>
                  
                  <tbody>
                    <?php
                        include "koneksidatabase.php";
                        
                        if (isset($_POST['search'])) {
                          $keyword = $_POST['keyword'];
                          $query = "SELECT * FROM tb_peserta 
                                    WHERE nm_peserta LIKE '%$keyword%' 
                                       OR kd_skema LIKE '%$keyword%' 
                                       OR jekel LIKE '%$keyword%' 
                                       OR alamat LIKE '%$keyword%' 
                                       OR no_hp LIKE '%$keyword%'
                                       OR nik LIKE '%$keyword%'";
                      } else {
                          $query = "SELECT * FROM tb_peserta";
                      }
                       

                        $eksekusi = mysqli_query($db, $query);
                        while($data = mysqli_fetch_array($eksekusi)){
                            $id_peserta = $data[0];
                            $kd_skema = $data[1];
                            $nm_peserta= $data[2];
                            $jekel= $data[3];
                            $alamat= $data[4];
                            $no_hp= $data[5];
                            $nik= $data[6];
                    ?>
                      <tr>
                        <td><?php echo $id_peserta?></td>
                        <td><?php echo $kd_skema?></td>
                        <td><?php echo $nm_peserta?></td>
                        <td><?php echo $jekel?></td>
                        <td><?php echo $alamat?></td>
                        <td><?php echo $no_hp?></td>
                        <td><?php echo $nik?></td>
                      </tr>

                    <?php
                        }
                    ?>

                  </tbody>
                  
                </table>
              </div> <!-- /.card-body -->
            </div> <!-- /.card -->
          </div> <!-- /.col -->
        </div> <!-- /.row -->
      </div> <!-- /.container-fluid -->
    </section> 

</body>
</html>