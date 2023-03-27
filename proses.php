<?php
include 'koneksi.php';

if(isset($_POST['aksi'])){
    if($_POST['aksi']=="add"){

        
      
        $nama = $_POST['nama'];
        $tempat = $_POST['tempat'];
        $tgl = $_POST['tgl'];
        $person = $_POST['person'];
        $status = $_POST['status'];
        $logo = $_FILES['logo']['name'];
        $warna = $_POST['warna'];

        $dir = "img/";
        $tmpFile = $_FILES['logo']['tmp_name'];

        move_uploaded_file($tmpFile,  $dir.$logo);

        //die();

        $query = "INSERT INTO produk values(null, '$nama', '$tempat', '$tgl', '$person', '$logo', '$status', '$warna')";
        $sql = mysqli_query($conn, $query);

        if($sql){
            header("location: index.php");
           // echo "data berarti sudah siap <a href='index.php'>Home</a>";
        } else {
            echo $query;
        }

        //echo $nama." | ".$tempat." | ".$tgl." | ".$person." | ".$status." | ".$logo;


        //echo "Tambah Data <a href='index.php'>Home</a>";
    } else if($_POST['aksi']=="edit"){
        echo "Edit Data <a href='index.php'>Home</a>";
        //var_dump($_POST);
        $id = $_POST ['id'];
        $nama = $_POST['nama'];
        $tempat = $_POST['tempat'];
        $tgl = $_POST['tgl'];
        $person = $_POST['person'];
        $status = $_POST['status'];
        $warna = $_POST['warna'];

        $queryshow = "SELECT * FROM produk WHERE id = '$id'";
        $sqlshow = mysqli_query($conn, $queryshow);
        $result = mysqli_fetch_assoc($sqlshow);

        if($_FILES['logo']['name'] == ""){
            $logo = $result['gambar_produk'];
        } else{
            $logo = $_FILES['logo']['name'];
            unlink("img/".$result['gambar_produk']);
            move_uploaded_file($_FILES['logo']['tmp_name'], 'img/'.$_FILES['logo']['name']);
        }

        $query = "UPDATE produk SET nama_kegiatan='$nama', tempat='$tempat', tanggal='$tgl', person='$person', status='$status', warna='$warna', gambar_produk='$logo' WHERE id = '$id';";
        $sql = mysqli_query($conn, $query);
        header("location: index.php");
    } 
}
    if(isset($_GET['hapus'])){
        $id = $_GET['hapus'];

        $queryshow = "SELECT * FROM produk WHERE id = '$id'";
        $sqlshow = mysqli_query($conn, $queryshow);
        $result = mysqli_fetch_assoc($sqlshow);

        //var_dump($result);

        unlink("img/".$result['gambar_produk']);


        $query = "DELETE FROM produk WHERE id = '$id;'";
        $sql = mysqli_query($conn, $query);

        if($sql){
            header("location: index.php");
        } else {
            echo $query;
        }


        //echo "Hapus Data <a href='index.php'>Home</a>";
    }

?>