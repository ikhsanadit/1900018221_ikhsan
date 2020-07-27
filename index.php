<!DOCTYPE html>
<html>

<head>
  <title>Ikhsan Aditya</title>
  <link rel="icon" href="images/isan.png">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- My CSS -->
  <link rel="stylesheet" href="styles/style.css">
</head>

<body data-spy="scroll" data-target="#navbar" data-offset="50">
  <!-- Jumbotron -->
  <section id="home" class="p-0">
    <div class="jumbotron jumbotron-fluid row align-items-center">
      <div class="container">
        <div class="display-4 hello-title my-5">Hello, Aku <span>Ikhsan Aditya</span><br>Selamat Datang di Halaman Web Saya!</div>
        <div class="display-4">
          <a href="#about">
            <button type="button" class="btn btn-outline-light">Kepo in!</button>
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- Akhir Jumbotron -->
  <!-- Navbar -->
  <nav id="navbar" class="navbar navbar-expand-lg navbar-dark sticky-top" style="background-color: rgb(20, 20, 45)">
    <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
      aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link" href="#about">About</a>
        <a class="nav-item nav-link" href="#gallery">Gallery</a>
        <a class="nav-item nav-link" href="#contact">Contact</a>
        <a class="nav-item nav-link" href="upload.php">Upload</a>
        
      </div>
    </div>
  </nav>
  <!-- Akhir Navbar -->
  <!-- Content -->
  <!-- About -->
  <section id="about" class="about bg-about">
    <div class="container">
      <div class="row my-4">
        <div class="col text-center">
          <h1>About</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 px-4">
          <img src="images/ikhsan.jpg" id="img-about" width="200px" height="250px" class="rounded mx-auto d-block">
          <p class="text-justify">
            Ikhsan Aditya NUUR QODRI biasa dipanggil Ikhsan.
            Lahir di Kota Yogyakarta pada tanggal 6 Oktober 2000. Pendidikan terakhir SLTA.
            Sekarang ia adalah mahasiswa Universitas Ahmad Dahlan Yogyakarta program studi Teknik Informatika.
            <a href="about.php"><button class="btn btn-outline-info float-right my-2">Read More</button></a>
          </p>
        </div>
        <div class="col-md-6">
          <div class="d-flex bd-highlight bar my-3">
            <div class="bd-highlight bar-fill mr-auto" style="width: 35%">
              <div class="p-2 bd-highlight bar-name">HTML</div>
            </div>
            <div class="p-2 bd-highlight">35%</div>
          </div>
          <div class="d-flex bd-highlight bar my-3">
            <div class="bd-highlight bar-fill mr-auto" style="width: 30%">
              <div class="p-2 bd-highlight bar-name">CSS</div>
            </div>
            <div class="p-2 bd-highlight">30%</div>
          </div>
          <div class="d-flex bd-highlight bar my-3">
            <div class="bd-highlight bar-fill mr-auto" style="width: 25%">
              <div class="p-2 bd-highlight bar-name">PHP</div>
            </div>
            <div class="p-2 bd-highlight">25%</div>
          </div>
          <div class="d-flex bd-highlight bar my-3">
            <div class="bd-highlight bar-fill mr-auto" style="width: 50%">
              <div class="p-2 bd-highlight bar-name">C++</div>
            </div>
            <div class="p-2 bd-highlight">50%</div>
          </div>
          <div class="d-flex bd-highlight bar my-3">
            <div class="bd-highlight bar-fill mr-auto" style="width: 10%">
              <div class="p-2 bd-highlight bar-name">Illustrator</div>
            </div>
            <div class="p-2 bd-highlight">10%</div>
          </div>
          <div class="d-flex bd-highlight bar my-3">
            <div class="bd-highlight bar-fill mr-auto" style="width: 15%">
              <div class="p-2 bd-highlight bar-name">Photoshop</div>
            </div>
            <div class="p-2 bd-highlight">15%</div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Akhir About -->
  <!-- Galeri -->
  <section id="gallery">
  <div class="container">
        <div class="row my-4">
            <div class="col text-center">
                <h1>Portofolio</h1>
            </div>
        </div>
        <div class="row text-center text-white">
        <div class="col text-cente">
          <div class="mb-4 shadow-sm">
            <div class="inner">
              <img src="images/galeri.png" class="rounded mx-auto d-block prt-img">
              <div class="overlay rounded">
                <h3 class="my-3">My Gallery</h3>
                <p>Kumpulan Foto-Foto</p>
                <a href="open.php">
                  <button class="btn btn-outline-info mt-3">Lihat!</button>
                </a>
              </div>
            </div>
          </div>
        </div>
        </div>
    </div>
  </section>
  <!-- Akhir Galeri -->
  <!-- Contact -->
  <section id="contact" class="bg-dark pt-0 pb-5 mt-5">
    <svg preserveAspectRatio="none" height="75" width="100%" viewBox="0 0 100 125">
      <path d="M0 0 L50 100 L100 0 Z" fill="white" stroke="white"></path>
    </svg>
    <div class="container">
      <div class="row my-4">
        <div class="col text-center mt-5">
          <h1 class="text-white">Contact Us</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 mx-auto">
          <form method="post" action="process.php">
            <div class="form-group">
              <label class="text-white">Name</label>
              <input type="text" class="form-control" id="name" name="a" required placeholder="Name">
            </div>
            <div class="form-group">
              <label class="text-white">Email address</label>
              <input type="email" class="form-control" id="email" name="b" required placeholder="Enter email">
            </div>
            <div class="form-group">
              <label class="text-white">Message</label>
              <textarea class="form-control" id="message" name="message" required placeholder="Your message"></textarea>
            </div>
            <input name="ok" type="submit" class="btn btn-outline-light float-right"></input>
          </form>
        </div>
      </div>

      <div class="row my-4">
        <div class="col text-center mt-5">
          <h1 class="text-white">Let's Connect</h1>
        </div>
      </div>
      <div class="row mx-auto">
        <div class="col-3">
          <a href="https://www.facebook.com/ikhsan.aditya.108">
            <img src="images/fb.png" class="sosmed rounded mx-auto d-block" title="Facebook">
          </a>
        </div>
        <div class="col-3">
          <a href="https://twitter.com/isann_08">
            <img src="images/tw.png" class="sosmed rounded mx-auto d-block" title="Twitter">
          </a>
        </div>
        <div class="col-3">
          <a href="https://www.instagram.com/isann_08/">
            <img src="images/ig.png" class="sosmed rounded mx-auto d-block" title="Instagram">
          </a>
        </div>
        <div class="col-3">
            <a href="https://www.youtube.com/channel/UCtm-SKBCRxgOtQtcGwKSzww">
              <img src="images/yt.png" class="sosmed rounded mx-auto d-block" title="Youtube">
            </a>
        </div>
      </div>
    </div>
    </div>
  </section>
  <!-- Akhir Contact -->
  

  <!-- Akhir Content -->
  <!-- Footer -->
  <footer class="py-3" style="background-color: rgb(20, 20, 45);">
    <div class="container">
      <div class="row">
        <a href="#home">
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