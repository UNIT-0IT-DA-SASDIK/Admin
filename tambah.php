<!DOCTYPE html>

<?php
  include 'koneksi.php';

  $id = '';
    $nama_kegiatan = '';
    $tempat = '';
    $tanggal = '';
    $person = '';
    $status = '';
    $warna ='';

  
  if(isset($_GET['ubah'])){
    $id = $_GET['ubah'];
    
    $query ="SELECT * FROM produk WHERE id = '$id';";
    $sql = mysqli_query($conn, $query);

    $result = mysqli_fetch_assoc($sql);

    $nama_kegiatan = $result['nama_kegiatan'];
    $tempat = $result['tempat'];
    $tanggal = $result['tanggal'];
    $person = $result['person'];
    $status = $result['status'];
    $warna = $result['warna'];

    //var_dump($result);
    //die();

  }
?>

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
        <form method="POST" action="proses.php" enctype="multipart/form-data">
          <input type="hidden" value="<?php echo $id; ?>" name="id">
          <div class="mb-3 row">
              <label for="namakegitan" class="col-sm-2 col-form-label">Nama Kegitan</label>
              <div class="col-sm-10">
                <input required type="text" name="nama" class="form-control" id="namakegitan" placeholder="Masukkan nama Kegiatan" value="<?php echo $nama_kegiatan;?>">
              </div>
            </div>
          <div class="mb-3 row">
              <label for="Tempat" class="col-sm-2 col-form-label">Tempat</label>
              <div class="col-sm-10">
                <input required type="text" name="tempat" class="form-control" id="Tempat" placeholder="Tempat Kegiatan" value="<?php echo $tempat;?>">
              </div>
            </div>
          <div class="mb-3 row">
              <label for="Tanggal" class="col-sm-2 col-form-label">Tanggal</label>
              <div class="col-sm-10">
                <input required type="date" name="tgl" class="form-control" id="Tanggal" placeholder="Tanggal Kegiatan" value="<?php echo $tanggal;?>">
              </div>
            </div>
          <div class="mb-3 row">
              <label for="Person" class="col-sm-2 col-form-label">Person</label>
              <div class="col-sm-10">
                <input required type="text" name="person" class="form-control" id="Person" placeholder="Peserta Kegiatan" value="<?php echo $person;?>">
              </div>
            </div>
          <div class="mb-3 row">
              <label for="status" class="col-sm-2 col-form-label">status</label>
              <div class="col-sm-10">
                <input required type="text" name="status" class="form-control" id="status" placeholder="Status Kegiatan" value="<?php echo $status;?>">
              </div>
            </div>
          <div class="mb-3 row">
              <label for="warna" class="col-sm-2 col-form-label">Warna</label>
              <div class="col-sm-10">
              <select value="<?php echo $status;?>" id="warna"  name="warna" class="form-select" placeholder="Status Kegiatan">
                  <option value="status delivered">sukses</option>
                  <option value="status pending">coming soon</option>
</select>
              </div>
            </div>
          <div class="mb-3 row">
            <label for="logo" class="col-sm-2 col-form-label">Logo</label>
            <div class="col-sm-10">
                <input <?php if(!isset($_GET['ubah'])){ echo "required";}?> class="form-control" type="file" name="logo" id="logo" accept="image/*">
            </div>
          </div>
          <div class="mb-3 row mt-5">
            <div class="col">
              <?php
              if(isset($_GET['ubah'])){
              ?>
            <button type="submit" name="aksi" value="edit" class="btn btn-primary">
                <i class="fa fa-floppy-o" aria-hidden="true"></i>
                Simpan Perubahan</button>
                <?php
                } else {
                ?>
            <button type="submit" name="aksi" value="add" class="btn btn-primary">
                <i class="fa fa-floppy-o" aria-hidden="true"></i>
                Tambahkan</button>
                <?php
                }
                ?>
            <a href="index.php" type="button" class="btn btn-danger">
                <i class="fa fa-reply" aria-hidden="true"></i>
                Batal</a>  
            </div>
            </div>
            </form>
      </div>
      
</body>
</html>