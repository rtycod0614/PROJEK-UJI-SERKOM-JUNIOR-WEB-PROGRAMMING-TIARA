<?php
include "koneksidatabase.php";

$id = $_POST['id'];
$kd_skema = $_POST['kd_skema'];
$nm_skema = $_POST['nm_skema'];
$jenis = $_POST['jenis'];
$jml_unit = $_POST['jml_unit'];

$query = "UPDATE tb_skema set kd_skema='$kd_skema',
                                nm_skema='$nm_skema',
                                jenis='$jenis',
                                jml_unit='$jml_unit' 
                                WHERE id = '$id'";
$eksekusi = mysqli_query($db, $query);
if ($eksekusi){
    echo "<script> 
            alert('Data Berhasil diubah!');
            window.location='sertifikasi.php';
    
    </script>";
}
else{
    echo "<script> 
    alert('Data Gagal diubah!');
    window.location='editdata.php';

</script>";
}



?>