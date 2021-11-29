<?php 
require_once "../../config/config.php";
$chk = $_POST['checked'];
if(!isset($chk)) {
    echo "<script>alert('Tidak ada data yang dipilih!'); window.location='data_target_treg4.php'; </script>";
} else{
    foreach($chk as $id){
        $sql = mysqli_query($con, "DELETE FROM tb_target_indibox_treg4 WHERE Witel = '$id' ") or die(mysqli_error($con));
    }

    if($sql){
        echo "<script>alert('".$total." data berhasil dihapus');window.location='data_target_treg4.php'; </script>";
    }else{
        echo "<script>alert('".$total." gagal hapus data, coba ulang');</script>";
    }
}
?>