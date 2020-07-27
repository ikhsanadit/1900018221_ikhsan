<!DOCTYPE html>
<html>

<head>
  <title>About Ikhsan Aditya</title>
  <link rel="icon" href="images/isan.png">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- My CSS -->
  <link rel="stylesheet" href="styles/style.css">
</head>

<body class="bg-dark text-dark">
  <!-- Navbar -->
  <nav id="navbar" class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: rgb(20, 20, 45)">
    <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
      aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link active" href="#about">About</a>
        <a class="nav-item nav-link" href="open.php">Gallery</a>
        <a class="nav-item nav-link" href="contact.php">Contact</a>
        <a class="nav-item nav-link" href="upload.php">Upload</a>
        
      </div>
    </div>
  </nav>
  <!-- Akhir Navbar -->
  <!-- About -->
  
  <section id="about" class="m-4 bg-white">
    <div class="container">
      <div class="row my-4">
        <div class="col text-center">
          <h1>About</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-10 px-4">
          <?php
          echo '<img src="images/ikhsan.jpg" width="200px" class="rounded mr-3 mb-2 d-block float-left">';
          echo '<p class="text-justify" style="text-indent: 10%;">';
            echo "Ikhsan Aditya NUUR QODRI biasa dipanggil Ikhsan.
            Lahir di Kota Yogyakarta pada tanggal 6 Oktober 2000.
            Beragama Islam.
            Ia tinggal di Ngadisuryan KT1/80 
            Kelurahan Patehan, Kecamatan Kraton, Yogyakarta, DIY, Indonesia.
            Ia anak pertama dari dua bersaudara.";
         echo '</p>';
          
         echo "<br>";
            echo '<p class="text-justify" style="text-indent: 10%;">';
            echo "Mengenyam pendidikan di Sd Negeri Keputran 1 Yogyakarta selama 6 tahun.
            Kemudian dilanjutkan di SMP Negeri 16 Yogyakarta selama 3 tahun.
            Lulus dari SMP ia melanjutkan sekolah di SMA Negeri 10 Yogyakarta dan lulus pada tahun 2019.
            Sekarang Ikhsan tengah menempuh pendidikan S1 di Universitas Ahmad Dahlan Yogyakarta.
            Mengambil jurusan Teknik Informatika.";
          echo'</p>';
          ?>
        </div>
        <div class="col-lg-2 d-none d-lg-block">
          <div class="mb-5">
            <h4 class="text-center">Skills</h4>
            <div class="d-flex bd-highlight bar my-3">
              <div class="p-2 bd-highlight bar-name">HTML</div>
              <div class="p-2 bd-highlight ml-auto">35%</div>
            </div>
            <div class="d-flex bd-highlight bar my-3">
              <div class="p-2 bd-highlight bar-name">CSS</div>
              <div class="p-2 bd-highlight ml-auto">30%</div>
            </div>
            <div class="d-flex bd-highlight bar my-3">
              <div class="p-2 bd-highlight bar-name">PHP</div>
              <div class="p-2 bd-highlight ml-auto">25%</div>
            </div>
            <div class="d-flex bd-highlight bar my-3">
              <div class="p-2 bd-highlight bar-name">C++</div>
              <div class="p-2 bd-highlight ml-auto">50%</div>
            </div>
            <div class="d-flex bd-highlight bar my-3">
              <div class="p-2 bd-highlight bar-name">Illustrator</div>
              <div class="p-2 bd-highlight ml-auto">10%</div>
            </div>
            <div class="d-flex bd-highlight bar my-3">
              <div class="p-2 bd-highlight bar-name">Photoshop</div>
              <div class="p-2 bd-highlight ml-auto">15%</div>
            </div>
          </div>
          <div class="mb-5">
          <h4 class="text-center">Social Media</h4>
            <div class="m-2">
              <a href="https://www.facebook.com/ikhsan.aditya.108">
                <img src="images/fb.png" class="sosmed rounded float-left m-2" title="Facebook">
              </a>
              <a href="https://twitter.com/isann_08">
                <img src="images/tw.png" class="sosmed rounded float-right m-2" title="Twitter">
              </a>
              <a href="https://www.instagram.com/isann_08/">
                <img src="images/ig.png" class="sosmed rounded float-left m-2 mb-5" title="Instagram">
              </a>
              <a href="https://www.youtube.com/channel/UCtm-SKBCRxgOtQtcGwKSzww">
                <img src="images/yt.png" class="sosmed rounded float-right m-2 mb-5" title="Youtube">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Akhir About -->
  
  <!-- Footer -->
  <footer class="py-3" style="background-color: rgb(20, 20, 45);">
    <div class="container">
      <div class="row">
        <a href="#about">
          <button class="btn btn-dark mt-button">
            <svg preserveAspectRatio="none" height="20" width="10" viewBox="0 0 100 100">
              <path d="M50 25 L0 75 L100 75 Z" fill="white" stroke="white"></path>
            </svg>
          </button>
        </a>
      </div>
    </div>
    <div class="container">
      <div class="row align-items-end">
        <div class="col text-white text-center py-3 mt-2">
          <p class="my-0">Ikhsan Aditya &copy2019|| made by &hearts;</p>
        </div>
      </div>
    </div>
  </footer>
<!-- Akhir Footer -->
  
</body>

</html>