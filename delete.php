<?php
if(isset($_GET['id_gambar']))
{
    require 'koneksi.php';
    $id_gambar = $_GET['id_gambar'];
    $query = mysqli_query($koneksi,"delete from tb_gambar where id_gambar='$id_gambar'");
}
header('location:open.php');
?>