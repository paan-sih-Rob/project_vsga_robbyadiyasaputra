<!-- Melanjutkan Materi Perkenalan-->
<!-- Pada materi kali ini project ini saya buat menggunakan
boostrap,cdn javascript,dan php untuk menghubungkan contact ke database mysql-->

<!-- Yth Bapak/ibu
Pengajar 
ini adalah hasil project saya-->

<!--    Nama        : Robby adiyasa Putra
        No.regis    : 1936763860-78
        Asal        : Universitas Pamulang
        Alamat      : Pamulang,Kota. Tangerang Selatan -->

<!-- Page Index Navigasi Bar menu/halaman -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/css_navbar.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik+Moonrocks&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!--Display() title home page php-->
    <title>
        <?php
        $p = $_GET['page'];
        if($p == 'home'){
            echo "Halaman Home";
        }elseif ($p == 'formregis'){
            echo "Halaman Form Regis";
        }elseif ($p == 'calculator'){
            echo "Halaman Calculator";
        }elseif ($p == 'contact'){
            echo "Halaman Contact";
        }
        ?>
    </title>
    <!-- End display() title home page php -->

</head>
<body>

<!-- Navigasi bar Template by Boostrap -->
<header id="navbar">
    <nav class="navbar-container container">
    <a href="/" id="home-link">
        <div class="navbar-logo-"><img src="gambar/github-mark-white.png" alt="" width="30px"></div>
    </a>
    <button type="button" id="navbar-toggle" aria-controls="navbar-menu" aria-label="Toggle menu"
    aria-expanded="false">
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    </button>
    <div id="navbar-menu" aria-labelledby="navbar-toggle">
    <ul class="navbar-links">
        <li class="navbar-item"><a class="navbar-link" href="?page=home">home</a></li>
        <li class="navbar-item"><a class="navbar-link" href="?page=project">project</a></li>
        <li class="navbar-item"><a class="navbar-link" href="?page=contact">contact</a></li>
    </ul>
    </div>
    </nav>
</header>
<!-- End Navigasi bar Template by Boostrap -->

<!-- Display() function click index menu/halaman -->
<?php 
@$page = $_GET['page'];

if(!empty($page)){
    switch ($page){
        case 'home';
        include "home.php";
        break;

        case 'project';
            include "project.php";
            break;

        case 'contact';
            include "contact.php";
            break;

        default;
            include "home.php";
            break;
    }
}else {
    include "home.php";
} 
?>
<!-- End Display() function click index menu/halaman-->

</body>
<!--script js-->
<script src="js/jsnavbar.js"></script>
<!--script js-->
</html>
