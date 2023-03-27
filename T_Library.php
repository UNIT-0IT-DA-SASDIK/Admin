<?php
  include 'koneksi.php';

  $id = '';
    $materi = '';
    $pages = '';
    $size = '';
    $view = '';
    $link = '';

  
  if(isset($_GET['ubah'])){
    $id = $_GET['ubah'];
    
    $query ="SELECT * FROM perpus WHERE id = '$id';";
    $sql = mysqli_query($conn, $query);

    $result = mysqli_fetch_assoc($sql);

    $materi = $result['materi'];
    $pages = $result['pages'];
    $size = $result['size'];
    $link = $result['link'];
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-light bg-light mb-5">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"> 
            Admin
          </a>
        </div>
      </nav>

      <div class="container">
        <form method="POST" action="kelola.php" enctype="multipart/form-data">
          <div class="mb-3 row">
              <label for="materi" class="col-sm-2 col-form-label">Materi</label>
              <div class="col-sm-10">
                <input required type="text" name="materi" class="form-control" id="materi" placeholder="Nama Materi" value="<?php echo $materi;?>">
              </div>
            </div>
          <div class="mb-3 row">
              <label for="pages" class="col-sm-2 col-form-label">Pages</label>
              <div class="col-sm-10">
                <input required type="text" name="pages" class="form-control" id="pages" placeholder="Halaman PDF" value="<?php echo $pages;?>">
              </div>
            </div>
          
          <div class="mb-3 row">
              <label for="size" class="col-sm-2 col-form-label">Size</label>
              <div class="col-sm-10">
                <input required type="text" name="size" class="form-control" id="size" placeholder="Ukuran File (MB)" value="<?php echo $size;?>">
              </div>
            </div>
          <div class="mb-3 row">
              <label for="link" class="col-sm-2 col-form-label">Drive</label>
              <div class="col-sm-10">
                <input required type="text" name="link" class="form-control" id="link" placeholder="Masukkan Link Drive" value="<?php echo $link;?>">
              </div>
            </div>
</select>
              </div>
            </div>
          
          <div class="mb-3 row mt-5">
            <div class="col">
              <?php
              if(isset($_GET['ubah'])){
              ?>
            <button type="submit" name="ganti" value="edit" class="btn btn-primary">
                <i class="fa fa-floppy-o" aria-hidden="true"></i>
                Simpan Perubahan</button>
                <?php
                } else {
                ?>
            <button type="submit" name="ganti" value="add" class="btn btn-primary">
                <i class="fa fa-floppy-o" aria-hidden="true"></i>
                Tambahkan</button>
                <?php
                }
                ?>
            <a href="perpus.php" type="button" class="btn btn-danger">
                <i class="fa fa-reply" aria-hidden="true"></i>
                Batal</a>  
            </div>
            </div>
            </form>
      </div>
      
</body>
</html>