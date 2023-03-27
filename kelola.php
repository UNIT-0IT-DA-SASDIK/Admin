<?php
include 'koneksi.php';

if(isset($_POST['ganti'])){
    if($_POST['ganti']=="add"){

        
      
        $materi = $_POST['materi'];
        $pages = $_POST['pages'];
        $size = $_POST['size'];
        $link = $_POST['link'];

        $query = "INSERT INTO perpus values(null, '$materi', '$pages', '$size', '$link')";
        $sql = mysqli_query($conn, $query);

        if($sql){
            header("location: index.php");
           // echo "data berarti sudah siap <a href='index.php'>Home</a>";
        } else {
            echo $query;
        }

        //echo $nama." | ".$tempat." | ".$tgl." | ".$person." | ".$status." | ".$logo;


        //echo "Tambah Data <a href='index.php'>Home</a>";
    } else if($_POST['ganti']=="edit"){
        echo "Edit Data <a href='index.php'>Home</a>";
    } 
}
    if(isset($_GET['hapus'])){
        $id = $_GET['hapus'];

        $queryshow = "SELECT * FROM perpus WHERE id = '$id'";
        $sqlshow = mysqli_query($conn, $queryshow);
        $result = mysqli_fetch_assoc($sqlshow);


        $query = "DELETE FROM perpus WHERE id = '$id;'";
        $sql = mysqli_query($conn, $query);

        if($sql){
            header("location: index.php");
        } else {
            echo $query;
        }


        //echo "Hapus Data <a href='index.php'>Home</a>";
    }

?>