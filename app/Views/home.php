<?= $this->extend('template');?>

<?= $this->section('bodycontent');?>  

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>
      <!-- Uncomment below if you prefer to use an text logo -->
      <!-- <h1 class="logo"><a href="index.html">Folio</a></h1> -->

      <nav id="navbar" class="navbar">
       
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <div id="hero" class="home">

    <div class="container">
      <div class="hero-content">
        <h1>i'm <span class="typed" data-typed-items="Rafi Abdul Mugni, Singer, Influencer"></span></h1>
        <p>Singer, Influencer</p>

        <ul class="list-unstyled list-social">
          <li><a href="https://www.facebook.com/rapi.rapi.758"><i class="bi bi-facebook"></i></a></li>
          <li><a href="https://www.instagram.com/rafimugni02/"><i class="bi bi-instagram"></i></a></li>
          <li><a href="https://www.tiktok.com/@panggilafi"><i class="bi bi-tiktok"></i></a></li>
        </ul>
      </div>
    </div>
  </div><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <div id="about" class="paddsection">
      <div class="container">
        <div class="row justify-content-between">

          <div class="col-lg-4 ">
            <div class="div-img-bg">
              <div class="about-img">
                <img src="assets/img/rafi.jpg" class="img-responsive" alt="me">
              </div>
            </div>
          </div>

          <div class="col-lg-7">
            <div class="about-descr">

              <p class="p-heading">Hai! Aku Rafi Abdul Mugni, aku berumur 19 tahun, dan aku seorang manusia periang. </p>
              <p class="separator">Aku suka bernyanyi, itu salah satu hobiku yang aku masih lakukan hingga saat ini, impianku bukan hanya penyanyi tapi aku juga ingin menjadi seseorang yang sukses.</p>

            </div>

          </div>
        </div>
      </div>
    </div><!-- End About Section -->

    <!-- ======= Services Section ======= -->
  

  
    <!-- ======= Pendidikan Section ======= -->
    <div id="Pendidikan" class="text-left paddsection">

      <div class="container">
        <div class="section-title text-center">
          <h2>Pendidikan</h2>
        </div>
      </div>

      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="TK SBH PERWINNA-info">
              <?php foreach ($porto as $row): ?>

                <div class="TK SBH PERWINNA-txt">
                  <p><em><?=$row['edu_name']?></em></p>
                  <p class="separator"><?=$row['edu_detail']?></p>
                </div>

                <?php endforeach; ?>
            </div>
          </div>

        </div>
      </div>

    </div><!-- End Journal Section -->

    <!-- ======= Contact Section ======= -->
    <div id="contact" class="paddsection">
      <div class="container">
        <div class="contact-block1">
          <div class="row">

            <div class="col-lg-6">
              <div class="contact-contact">

                <h2 class="mb-30">ALAMAT</h2>

                <ul class="contact-details">
                  <li><span>Kp. Cipawenang 03/07 Desa. Cisolok Kec. Cisolok</span></li>
                  <li><span>Kab. Sukabumi, Jawa Barat</span></li>
                  <li><span>085846246294</span></li>
                  <li><span>rafmugni02@gmail.com</span></li>
                </ul>

              </div>
            </div>

            <div class="col-lg-6">
              <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="row gy-3">

                  <div class="col-lg-6">
                    <div class="form-group contact-block1">
                      <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                    </div>
                  </div>

                  <div class="col-lg-6">
                    <div class="form-group">
                      <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                    </div>
                  </div>

                  <div class="col-lg-12">
                    <div class="form-group">
                      <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                    </div>
                  </div>

                  <div class="col-lg-12">
                    <div class="form-group">
                      <textarea class="form-control" name="message" placeholder="Message" required></textarea>
                    </div>
                  </div>

                  <div class="col-lg-12">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                  </div>

                  <div class="mt-0">
                    <input type="submit" class="btn btn-defeault btn-send" value="Send message">
                  </div>

                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Contact Section -->

  </main><!-- End #main -->
  <?= $this->endSection();?>