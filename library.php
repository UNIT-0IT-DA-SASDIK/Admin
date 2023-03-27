<?php
  include 'koneksi.php';

  $query = "SELECT * FROM perpus";
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
            <h1>Materi</h1>
           
                <div class="header">
                    <a href="index.html"><i class='bx bx-right-arrow-alt'></i></a>
        </div>
        </section>
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th> No <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Materi <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Pages <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Size<span class="icon-arrow">&UpArrow;</span></th>
                        <th> Dwonload <span class="icon-arrow">&UpArrow;</span></th>
                    </tr>
                </thead>
                <tbody>
                <?php
              while($result = mysqli_fetch_assoc($sql)){
            ?>
                    <tr>
                        <td>   <?php echo ++$no?> </td>
                        <td> <?php echo $result['materi']; ?></td>
                        <td> <?php echo $result['pages']; ?></td>
                        <td><?php echo $result['size']; ?></td>
                        <td><a href="<?php echo $result['link']; ?>"><i class='bx bxs-download'>Dwonload</i></a></td>
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