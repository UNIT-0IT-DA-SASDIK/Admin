<?php
  include 'koneksi.php';

  $query = "SELECT * FROM produk";
  $sql = mysqli_query($conn, $query);
  $no = 0;

?>
<!DOCTYPE html>
<html lang="en" title="Coding design">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Responsive HTML Table With Pure CSS - Web Design/UI Design</title>
    <link rel="stylesheet" href="css/stylesss.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>
    <main class="table">
        <section class="table__header">
            <h1>Program Kerja</h1>
           
                <div class="header">
                    <a href="index.html"><i class='bx bx-right-arrow-alt'></i></a>
        </div>
        </section>
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th> No <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Nama Kegiatan <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Lokasi <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Tanggal<span class="icon-arrow">&UpArrow;</span></th>
                        <th> Status <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Peserta <span class="icon-arrow">&UpArrow;</span></th>
                    </tr>
                </thead>
                <tbody>
                <?php
              while($result = mysqli_fetch_assoc($sql)){
            ?>
                    <tr>
                        <td>   <?php echo ++$no?> </td>
                        <td> <img src="img/<?php echo $result['gambar_produk']; ?>" alt=""> <?php echo $result['nama_kegiatan']; ?></td>
                        <td> <?php echo $result['tempat']; ?></td>
                        <td><?php echo $result['tanggal']; ?></td>
                        <td>
                            <p class="<?php echo $result['warna']; ?>"><?php echo $result['status']; ?></p>
                        </td>
                        <td> <strong> <?php echo $result['person']; ?></strong></td>
                    </tr>
                    <tr>
                    <?php
              }
                    ?>
                </tbody>
            </table>
        </section>
    </main>
</body>

</html>