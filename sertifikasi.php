<!DOCTYPE html>
<html>
<head>
    <title>Data Skema Sertifikasi</title>
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
                <h2>DATA SKEMA SERTIFIKASI</h2>
                <h3 class="btn-add"><a href="add.php"><button>ADD</button></a></h3>
              </div><br><br>
              <!-- /.card-header -->
              <div class="card-body">
                <table align="center">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Kode Skema</th>
                    <th>Nama Skema</th>
                    <th>Jenis</th>
                    <th>Jumlah Unit</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  
                  <tbody>
                    <?php
                        include "koneksidatabase.php";
                        $query = "SELECT * FROM tb_skema";
                        $eksekusi = mysqli_query($db, $query);
                        while($data = mysqli_fetch_array($eksekusi)){
                            $id = $data[0];
                            $kd_skema= $data[1];
                            $nm_skema= $data[2];
                            $jenis= $data[3];
                            $jml_unit= $data[4];
                    ?>
                      <tr>
                        <td><?php echo $id?></td>
                        <td><?php echo $kd_skema?></td>
                        <td><?php echo $nm_skema?></td>
                        <td><?php echo $jenis?></td>
                        <td><?php echo $jml_unit?></td>
                        <td> 
                          <a href="editdata.php?id=<?php echo $id?>"><button class="btn-edit">Edit</button></a>
                          <a href="deletedata.php?id=<?php echo $id?>"><button class="btn-delete">Delete</button></a>
                        </td>
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