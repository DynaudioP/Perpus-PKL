<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="catalog.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Percobaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/107e356048.js" crossorigin="anonymous"></script>
    <script defer></script>
</head>

<body>
    <div class="wrap">
        <div class="box-nav">
            <div class="top-nav">
                <p>Copyright PKL</p>
            </div>
            <nav>
                <div class="left-side">
                    <div class="wrap-logo-image">
                        <a class="navbar-brand"><img src="assets/logo1.png"></a>
                    </div>

                </div>

                <!-- <div class="right-side">
                    <div class="profil">
                        <i class="fa-solid fa-user fa-lg"></i>
                    </div>
                    
                </div> -->
            </nav>
        </div>
        <div class="box-body">
            <div class="wrap-filter">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown button
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div>
                <form class="filter-buku">
                    <p>Rekomendasi Buku</p>
                    <button class="btn-filter">
                        <p>Filter</p>
                        <i class="fa-solid fa-filter"></i>
                    </button>
                </form>
            </div>
            <div class="wrap-list-buku">
                <div class="list-buku">
                    <?php
                    $produk = mysqli_query($conn, 'SELECT * FROM `buku` ORDER BY `id_buku` DESC
                        ');
                    if (mysqli_num_rows($produk) > 0) {
                        while ($p = mysqli_fetch_array($produk)) {


                    ?>
                            <div class="list-buku-item">
                                <img src="assets/itembuku1.png" alt="item-buku">
                                <div class="wrap-item-title">
                                    <p class="item-title"><?php echo $p['judul_buku'] ?></p>
                                </div>
                                <div class="wrap-item-kategori">
                                    <button class="btn-kategori-item"><?php echo $p['kategori'] ?></button>
                                    <img src="assets/kategori1.png" alt="kategori item">
                                </div>
                            </div>
                        <?php
                        }
                    } else {
                        ?>
                        <P>tidak ada data</P>
                    <?php
                    }
                    ?>
                </div>
            </div>

            <div class="wrap-footer">
                <div class="footer">
                    <div class="footer-left">
                        <p>Saran & Masukan</p>
                        <div class="wrap-form">
                            <form>
                                <input type="text" class="input-saran" placeholder="Your Email">
                                <button>
                                    <i class="fa-solid fa-paper-plane"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="footer-right">
                        <ul>
                            <li><i class="fa-brands fa-facebook-f lg"></i></li>
                            <li><i class="fa-brands fa-twitter lg"></i></li>
                            <li><i class="fa-brands fa-youtube lg"></i></li>
                        </ul>
                    </div>
                </div>

            </div>


        </div>
    </div>

</body>

</html>