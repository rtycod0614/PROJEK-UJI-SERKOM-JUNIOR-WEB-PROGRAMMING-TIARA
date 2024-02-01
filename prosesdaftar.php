
<?php
include "koneksidatabase.php";

$kd_skema = $_POST['kd_skema'];
$nm_peserta = $_POST['nm_peserta'];
$jekel = $_POST['jekel'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];
$nik = $_POST['nik'];


$query = "INSERT into tb_peserta (kd_skema, nm_peserta, jekel, alamat, no_hp, nik) VALUES 
        ('$kd_skema', '$nm_peserta', '$jekel', '$alamat', '$no_hp', '$nik')";
$eksekusi = mysqli_query($db, $query);
if ($eksekusi){
    echo "<script> 
            alert('Data Berhasil ditambahkan!');
            window.location='home.php';
    
    </script>";
}
else{
    echo "<script> 
    alert('Data Gagal ditambahkan!');
    window.location='daftar.php';

</script>";
}



?>