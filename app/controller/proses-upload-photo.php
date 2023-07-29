<?php
include "../config/koneksi.php";
// mysqli_report (MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); 
session_start(); 

$level = $_SESSION['level'];

    if ($level === 'Calon Peserta Didik'){        
        $id = $_POST['id_siswa'];
    
        $img = $_FILES['foto']['name'];
        $gambar_baru = date('dYHiS').$img;

        $query = $koneksi->query("SELECT * FROM tb_siswa WHERE id_siswa = '$id' ");
        $data = mysqli_fetch_array($query);
        $lokasi = $data['foto'];
        $hapus_gbr = "../../assets/image/foto_siswa/".$lokasi;
        unlink($hapus_gbr);
    
        move_uploaded_file($_FILES['foto']['tmp_name'], '../../assets/image/foto_siswa/'.$gambar_baru);
    
            $update = "UPDATE tb_siswa SET foto='$gambar_baru' WHERE id_siswa = '".$id."' ";
    
            $sql = mysqli_query($koneksi, $update) or die(mysqli_error($koneksi));
    
            $_SESSION['pesan'] = 'Photo Berhasil Di Update';
            $_SESSION['status'] = 'success';
            echo "<script> document.location.href='../../views/user/upload-photo';</script>";
            die();
    }else{
        $id_pendaftaran = $_POST['no_pendaftaran'];
    
        $img = $_FILES['foto']['name'];
        $gambar_baru = date('dYHiS').$img;
        
        $query = $koneksi->query("SELECT * FROM tb_siswa WHERE no_pendaftaran = '$id_pendaftaran' ");
        
        $data = mysqli_fetch_array($query);
        $lokasi = $data['foto'];
        $hapus_gbr = "../../assets/image/foto_siswa/".$lokasi;
        unlink($hapus_gbr);
    
        move_uploaded_file($_FILES['foto']['tmp_name'], '../../assets/image/foto_siswa/'.$gambar_baru);
    
            $update = "UPDATE tb_siswa SET foto='$gambar_baru' WHERE no_pendaftaran = '".$id_pendaftaran."' ";
    
            $sql = mysqli_query($koneksi, $update) or die(mysqli_error($koneksi));
    
            $_SESSION['pesan'] = 'Photo Berhasil Di Update';
            $_SESSION['status'] = 'success';
            echo "<script> document.location.href='../../views/admin/upload-photo?no-pendaftaran=$id_pendaftaran';</script>";
            die();
    }
?>