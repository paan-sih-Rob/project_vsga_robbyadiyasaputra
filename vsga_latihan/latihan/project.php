<!-- Page Form Register -->
<html lang="en" id="formregis">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--css link-->
    <link rel="stylesheet" href="css/css_project.css">
    <link rel="stylesheet" href="css/css_navbar.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!--css link-->
    <title>formregis</title>
</head>
<body>

<!-- Input Data Registrasi PHP dan output ke database phpmyadmin MYSQL-->
<?php 
$koneksi = mysqli_connect("localhost","root","","vsga_db");
if(isset($_POST['submit'])) {
    $nama=mysqli_real_escape_string($koneksi, $_POST['nama']);
    $no_regis =mysqli_real_escape_string($koneksi, $_POST['no_regis']);
    $universitas=mysqli_real_escape_string($koneksi, $_POST['universitas']);
    $prodi=mysqli_real_escape_string($koneksi, $_POST['prodi']);
    $semester=mysqli_real_escape_string($koneksi, $_POST['semester']);
    $submit=mysqli_query($koneksi,"insert into registrasi values('$nama','$no_regis','$universitas','$prodi','$semester')");
    if($submit) {
        echo "<script>window.alert('Registrasi Berhasil')
        window.location='index.php'</script>";
    }else{
        echo "<script>window.alert('Registrasi Gagal')
        window.location='index.php'</script>";
    }
}
?>
<!-- End Input Data Registrasi PHP dan output ke database phpmyadmin MYSQL -->

<!-- Display() form register -->
<section class="page-regis">
    <div id="regis" class="regis">
        <h2 id="h2" style="color: #F5F5DC;">registrasi</h2>
    <div class="box-regis" data-aos="fade-up" data-aos-duration="1500" data-aos-mirror="true" data-aos-delay="100">
        <form class="regisform" action="" method="post">
            <input type="text" name="nama" class="text-box" placeholder="nama" required style="background-color: #F5F5DC;">
            <br>
            <input type="text" name="no_regis" class="text-box" placeholder="no registrasi" required style="background-color: #F5F5DC;">
            <br>
            <input type="text" name="universitas" class="text-box" placeholder="universitas" required style="background-color: #F5F5DC;">
            <br>
            <input type="text" name="prodi" class="text-box" placeholder="prodi" required style="background-color: #F5F5DC;">
            <br>
            <input type="number" name="semester" class="text-box" placeholder="semester" required style="background-color: #F5F5DC;">
            <br>
            <input type="submit" name="submit" class="btn btn-Success btn-sm" value="Submit">
        </form>
    </div>
  </section>
<!-- End Display() form register-->

<!-- Calculator template -->
<section class="container-calc">
        <div class="calculator dark" data-aos="fade-up" data-aos-duration="1500" data-aos-mirror="true" data-aos-delay="100">
        <center><h5 style="color: #F5F5DC;">calculator</h5></center>      
        <div class="display-screen">
                <div id="display"></div>
            </div>
            <!--display() input calculator-->
                <table>
                    <tr>
                        <td><button class="btn-operator" id="clear">C</button></td>
                        <td><button class="btn-operator" id="/">&divide;</button></td>
                        <td><button class="btn-operator" id="*">&times;</button></td>
                        <td><button class="btn-operator" id="backspace"><</button></td>
                    </tr>
                    <tr>
                        <td><button class="btn-number" id="7">7</button></td>
                        <td><button class="btn-number" id="8">8</button></td>
                        <td><button class="btn-number" id="9">9</button></td>
                        <td><button class="btn-operator" id="-">-</button></td>
                    </tr>
                    <tr>
                        <td><button class="btn-number" id="4">4</button></td>
                        <td><button class="btn-number" id="5">5</button></td>
                        <td><button class="btn-number" id="6">6</button></td>
                        <td><button class="btn-operator" id="+">+</button></td>
                    </tr>
                    <tr>
                        <td><button class="btn-number" id="1">1</button></td>
                        <td><button class="btn-number" id="2">2</button></td>
                        <td><button class="btn-number" id="3">3</button></td>
                        <td rowspan="2"><button class="btn-equal" id="equal">=</button></td>
                    </tr>
                    <tr>
                        <td><button class="btn-operator" id="(">(</button></td>
                        <td><button class="btn-number" id="0">0</button></td>
                        <td><button class="btn-operator" id=")">)</button></td>
                    </tr>
                </table>
        </div>
</section>
<!-- End Calculator Template -->

<!-- Footer -->
<footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><img src="gambar/facebook.png" width="40px" alt=""></a>

      <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><img src="gambar/twitter.png" width="40px" alt=""></a>

      <!-- Linkedin -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><img src="gambar/instagram.png" width="40px" alt=""></a>

      <!-- Github -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><img src="gambar/github-mark-white.png" width="40px" style="border-radius: 50%;" alt=""></a>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2023 Copyright:
    <a class="text-white" href="https://mdbootstrap.com/">create by ♡ robby adiyasa putra </a>
  </div>
  <!-- Copyright -->
</footer>
<!-- End Footer -->

</body>
<!--script js-->
<script type="text/javascript" src="js/js_calc.js"></script>
<script src="js/js_navbar.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>AOS.init();//Animation by Data Aos</script>
<!--script js-->
</html>