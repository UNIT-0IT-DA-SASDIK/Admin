<?php
  include 'koneksi.php';

  $query = "SELECT * FROM perpus";
  $sql = mysqli_query($conn, $query);
  $no = 0;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-Perpustakaan</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"> 
            Admin
          </a>
          <ul class="nav justify-content-end  nav-pills">
          <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Program</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="perpus.php">Library</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">News</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
          </li>
        </ul>
        </div>
      </nav>
      <div class="container">
        <figure>
          <blockquote class="blockquote">
            <p>Perpustakaan Digital Dewan Ambalan SASTRODIKORO</p>
          </blockquote>
          <figcaption class="blockquote-footer">
          Unit IT Dewan Ambalan<cite title="Source Title"> SASTRODIKORO</cite>
          </figcaption>
        </figure>
        <a href="T_Library.php" type="button" class="btn btn-primary mb-3">
          <i class="fa fa-plus"></i>
          Tambah Data</a>
        <div class="table-responsive">
          <table class="table align-middle table-bordered table-hover table-$purple-700">
            <thead>
            <tr class="table-dark">
                <th><center>Nomor</center></th>
                <th>Materi</th>
                <th>Pages</th>
                <th>Size</th>
                <th>Dwonload</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
                while($result = mysqli_fetch_assoc($sql)){
                  $t = substr($result['link'],0,20);
              ?>
  
              <tr>
  
                <td class="table-light"><center>
                  <?php echo ++$no?>
                </center></td>
                <td class="table-light">
                  <?php echo $result['materi']; ?>
                </td>
                <td class="table-light">
                <?php echo $result['pages']; ?>
                </td>
                <td class="table-light">
                <?php echo $result['size']; ?>
                </td>
                <td class="table-light">
                <?php echo $t; ?>
                </td>
                <td class="table-light">
                  <a href="T_Library.php?ubah=<?php echo $result['id']; ?>" type="button" class="btn btn-success btn-sm">
                      <i class="fa fa-pencil"></i>
                      Ubah</a>
                      <a href="kelola.php?hapus=<?php echo $result['id']; ?>" type="button" class="btn btn-danger btn-sm" onClick="return confirm('Apakah Anda yakin mau hapus???')">
                      <i class="fa fa-trash"></i>
                      </a>
                </td>
              </tr>
              <?php
                }
              ?>
              </tbody>
              </table>
              </div>
      </div>
</body>
</html>