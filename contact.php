<!DOCTYPE html>
<html>

<head>
  <title>Contact Ikhsan Aditya</title>
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
        <a class="nav-item nav-link" href="about.php">About</a>
        <a class="nav-item nav-link" href="open.php">Gallery</a>
        <a class="nav-item nav-link active" href="#contact">Contact</a>
        <a class="nav-item nav-link" href="upload.php">Upload</a>
        
      </div>
    </div>
  </nav>
  <!-- Akhir Navbar -->
  <!-- Contact -->
  <section id="contact" class="m-4 bg-white">
    <div class="container">
      <div class="row mt-4">
          <div class="col-md-6 text-center px-5">
            <div class="mb-2">
                <img src="images/ikhsan.jpg" width="150px" title="Ikhsan Aditya">
            </div>
            <div class="mb-5">
                <h4>Ikhsan Aditya Nuur Qodri</h4>
                <h6>NIM 1900018221</h6>
                <hr>
            </div>
            <div class="mb-5 text-justify">
                <img src="images/placeholder.png" width="30px" class="float-left mx-3">
                <p>Ngadisuryan Kt 1 / 80 Patehan, Kraton, Yogyakarta, DIY, Indonesia</p>
            </div>
            <div class="mb-5 text-justify">
                <img src="images/mail.png" width="30px" class="float-left mx-3">
                <p>ikhsan1900018221@webmail.uad.ac.id</p>
            </div>
          </div>
          <div class="col-md-6 px-5">
            <div class="row my-4">
                <div class="col text-center">
                    <h2>Contact Us</h2>
                </div>
            </div>
            <form method="post" action="process.php">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" id="name" name="a" required placeholder="Name">
                </div>
                <div class="form-group">
                    <label>Email address</label>
                    <input type="email" class="form-control" id="email" name="b" required placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label>Message</label>
                    <textarea class="form-control" id="message" name="message" required placeholder="Your message"></textarea>
                </div>
                <input type="submit" name="ok" class="btn btn-outline-dark float-right"></input>
            </form>
        
          </div>
      </div>
      <div class="row mb-4">
            <div class="col text-center mt-5">
                <h2>Let's Connect</h2>
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
                    <a href="https://www.youtube.com/channel/UCtm-SKBCRxgOtQtcGwKSzwwl">
                        <img src="images/yt.png" class="sosmed rounded mx-auto d-block" title="Youtube">
                    </a>
                </div>
            </div>
      </div>
    </div>
  </section>
  <!-- Akhir Contact -->
  <!-- Footer -->
  <footer class="py-3" style="background-color: rgb(20, 20, 45);">
    <div class="container">
      <div class="row">
        <a href="#contact">
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