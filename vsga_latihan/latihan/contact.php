<!-- Page Contact -->
<html lang="en" id="contact">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--css link-->
    <link rel="stylesheet" href="css/css_contact.css">
    <link rel="stylesheet" href="css/css_navbar.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!--css link-->
    <title>contact</title>
</head>
<body>

<!-- Contact ME -->
<section class="page-contact">
    <div id="contact" class="contact" data-aos="fade-up" data-aos-duration="2000" data-aos-mirror="true" data-aos-delay="100">
    <div class="box-contact">
    <form class="contact-me" action="mailto:lordrobby26@gmail.com" method="post" enctype="text/plain">
        <input type="text" placeholder="Enter your Name:" id="name">
        <br>
        <input type="text" placeholder="Enter your Email:" id="email">
        <br>
        <input type="text" placeholder="Enter your Contact number:" id="contact">
        <br>
        <input type="text" placeholder="Enter your subject:" id="subject">
        <br>
        <textarea name="" rows="6" cols="50" id="message" placeholder="Enter your message...."></textarea>
        <br>
        <button type="button" class="btn btn-outline-primary btn-sm" onclick="SendEmail()" value="Send">Kirim</button>
    </form>
    </div>
  </div>
  </section>
<!-- End Contact me -->

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
<script src="https://smtpjs.com/v3/smtp.js"></script>
<script src="js/js_navbar.js"></script>
<script src="js/js_sendemail.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>AOS.init();//Animation by Data Aos</script>
<!--script js-->
</html>