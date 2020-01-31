<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto">Djari Production</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="assets/Frontend/img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#intro">Home</a></li>
          <li><a href="#about">services</a></li>
          <li><a href="#portfolio">Documentation</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active">
            <div class="carousel-background"><img src="<?php echo site_url('assets/Frontend/img/intro-carousel/1.jpg')?>" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>DJARI PRODUCTION</h2>
                <p>Wedding Organizer and Photos Studio.</p>
                <a href="#about" class="btn-get-started scrollto">Get Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="<?php echo site_url('assets/Frontend/img/intro-carousel/2.jpg')?>" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>We are professional</h2>
                <p>Melayani anda dengan segala kebutuhan yang anda inginkan.</p>
                <a href="#featured-services" class="btn-get-started scrollto">Get Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="<?php echo site_url('assets/Frontend/img/intro-carousel/3.jpg')?>" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>We are experienced</h2>
                <p>Kami telah melayani lebih dari seratus customers sejak 2016.</p>
                <a href="#featured-services" class="btn-get-started scrollto">Get Started</a>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3>services</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </header>

        <div class="row about-cols">

          <div class="col-md-4 wow fadeInUp">
            <div class="about-col">
              <div class="img">
                <img src="<?php echo site_url('assets/Frontend/img/about-mission.jpg')?>" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Our Mission</a></h2>
              <p>
                Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="about-col">
              <div class="img">
                <img src="<?php echo site_url('assets/Frontend/img/about-plan.jpg')?>" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-list-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Our Plan</a></h2>
              <p>
                Sed ut perspiciatis unde omnis iste natus error sit voluptatem  doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
              </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
            <div class="about-col">
              <div class="img">
                <img src="<?php echo site_url('assets/Frontend/img/about-vision.jpg')?>" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-eye-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Our Vision</a></h2>
              <p>
                Nemo enim ipsam voluptatem quia voluptas sit aut odit aut fugit, sed quia magni dolores eos qui ratione voluptatem sequi nesciunt Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #about -->


    <!--==========================
      Facts Section
    ============================-->
    <section id="facts"  class="wow fadeIn">
      <div class="container">

        <header class="section-header">
          <h3>Facts</h3>
          <p>Perlu anda ketahui sebagai calon customer kami</p>
        </header>

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">160</span>
            <p>Clients</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">220</span>
            <p>Photo Shoot</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">4</span>
            <p>Years of services</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">10</span>
            <p>Hard Workers</p>
          </div>

        </div>

       <!-- #facts -->

    <!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio"  class="section-bg" >
      <div class="container">

        <header class="section-header">
          <h3 class="section-title">Our Gallery</h3>
        </header>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">Wedding</li>
              <li data-filter=".filter-card">Photo Shoot</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php echo site_url('assets/Frontend/img/portfolio/1.jpg')?>" class="img-fluid" alt="">
                <a href="<?php echo site_url('assets/Frontend/img/portfolio/1.jpg')?>" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview" style="margin: 7%;"><i class="ion ion-eye"></i></a>
                <!-- <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a> -->
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Wedding</a></h4>
                <p>Pre-Wedding</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php echo site_url('assets/Frontend/img/portfolio/2.jpg')?>" class="img-fluid" alt="">
                <a href="<?php echo site_url('assets/Frontend/img/portfolio/2.jpg')?>" class="link-preview" data-lightbox="portfolio" data-title="Web 3" title="Preview" style="margin: 7%;"><i class="ion ion-eye"></i></a>
                <!-- <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a> -->
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Wedding</a></h4>
                <p>On Reception</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php echo site_url('assets/Frontend/img/portfolio/3.jpg')?>" class="img-fluid" alt="">
                <a href="<?php echo site_url('assets/Frontend/img/portfolio/3.jpg')?>" class="link-preview" data-lightbox="portfolio" data-title="App 2" title="Preview" style="margin: 7%;"><i class="ion ion-eye"></i></a>
                <!-- <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a> -->
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Wedding</a></h4>
                <p>On Reception</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php echo site_url('assets/Frontend/img/portfolio/4.jpg')?>" class="img-fluid" alt="">
                <a href="<?php echo site_url('assets/Frontend/img/portfolio/4.jpg')?>" class="link-preview" data-lightbox="portfolio" data-title="Card 2" title="Preview" style="margin: 7%;"><i class="ion ion-eye"></i></a>
                <!-- <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a> -->
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Photo Shoot</a></h4>
                <p>Personal Photo</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php echo site_url('assets/Frontend/img/portfolio/5.jpg')?>" class="img-fluid" alt="">
                <a href="<?php echo site_url('assets/Frontend/img/portfolio/5.jpg')?>" class="link-preview" data-lightbox="portfolio" data-title="Web 2" title="Preview" style="margin: 7%;"><i class="ion ion-eye"></i></a>
                <!-- <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a> -->
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Wedding</a></h4>
                <p>Pre-Wedding</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php echo site_url('assets/Frontend/img/portfolio/6.jpg')?>" class="img-fluid" alt="">
                <a href="<?php echo site_url('assets/Frontend/img/portfolio/6.jpg')?>" class="link-preview" data-lightbox="portfolio" data-title="App 3" title="Preview" style="margin: 7%;"><i class="ion ion-eye"></i></a>
                <!-- <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a> -->
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Photo Shoot</a></h4>
                <p>Personal Photo</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php echo site_url('assets/Frontend/img/portfolio/7.jpg')?>" class="img-fluid" alt="">
                <a href="<?php echo site_url('assets/Frontend/img/portfolio/7.jpg')?>" class="link-preview" data-lightbox="portfolio" data-title="Card 1" title="Preview" style="margin: 7%;"><i class="ion ion-eye"></i></a>
                <!-- <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a> -->
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Photo Shoot</a></h4>
                <p>Baby Look</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php echo site_url('assets/Frontend/img/portfolio/8.jpg')?>" class="img-fluid" alt="">
                <a href="<?php echo site_url('assets/Frontend/img/portfolio/8.jpg')?>" class="link-preview" data-lightbox="portfolio" data-title="Card 3" title="Preview" style="margin: 7%;"><i class="ion ion-eye"></i></a>
                <!-- <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a> -->
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Photo Shoot</a></h4>
                <p>Baby Look</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php echo site_url('assets/Frontend/img/portfolio/9.jpg')?>" class="img-fluid" alt="">
                <a href="<?php echo site_url('assets/Frontend/img/portfolio/9.jpg')?>" class="link-preview" data-lightbox="portfolio" data-title="Web 1" title="Preview" style="margin: 7%;"><i class="ion ion-eye"></i></a>
                <!-- <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a> -->
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Photo Shoot</a></h4>
                <p>Baby Look</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php echo site_url('assets/Frontend/img/portfolio/10.jpg')?>" class="img-fluid" alt="">
                <a href="<?php echo site_url('assets/Frontend/img/portfolio/10.jpg')?>" class="link-preview" data-lightbox="portfolio" data-title="Web 1" title="Preview" style="margin: 7%;"><i class="ion ion-eye"></i></a>
                <!-- <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a> -->
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Wedding</a></h4>
                <p>On Reception</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php echo site_url('assets/Frontend/img/portfolio/11.jpg')?>" class="img-fluid" alt="">
                <a href="<?php echo site_url('assets/Frontend/img/portfolio/11.jpg')?>" class="link-preview" data-lightbox="portfolio" data-title="Web 1" title="Preview" style="margin: 7%;"><i class="ion ion-eye"></i></a>
                <!-- <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a> -->
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Photo Shoot</a></h4>
                <p>Family Photo</p>
              </div>
            </div>
          </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php echo site_url('assets/Frontend/img/portfolio/12.jpg')?>" class="img-fluid" alt="">
                <a href="<?php echo site_url('assets/Frontend/img/portfolio/12.jpg')?>" class="link-preview" data-lightbox="portfolio" data-title="Web 1" title="Preview" style="margin: 7%;"><i class="ion ion-eye"></i></a>
                <!-- <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a> -->
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Wedding</a></h4>
                <p>Decoration</p>
              </div>
            </div>
          </div>

          

      </div>
    </section><!-- #portfolio -->


    <!--==========================
      Team Section
    ============================-->
    <section id="team">
      <div class="container">
        <div class="section-header wow fadeInUp">
          <h3>Team</h3>
          <p>Manajemen kami terstruktur dan terkoordinasi dengan baik, serta memberikan pelayanan yang akan memuaskan customers</p>
        </div>

        <div class="row">
        <?php foreach ($data->result() as $row):?>

          <div class="col-lg-3 col-md-6 wow fadeInUp">
            <div class="member">
              <img src="<?php echo base_url().'assets/Frontend/img/user/'.$row->gambar;?>" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4><?php echo $row->nama;?></h4>
                  <span><?php echo $row->jabatan;?></span>
                  <div class="social">
                    <a href="<?php echo site_url('Backend/login/login_by_id/'.$row->id_user);?>"><i class="fa fa-sign-in"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

        <?php endforeach;?>
        </div>

      </div>
    </section><!-- #team -->

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="section-bg wow fadeInUp">
      <div class="container">

        <div class="section-header">
          <h3>Contact Us</h3>
          
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Address</h3>
              <address><a href="https://www.google.com/maps/place/STUDIO+FOTO+DJARI/@-7.4047131,112.7165436,17z/data=!3m1!4b1!4m5!3m4!1s0x2dd7e55b3ebb2d5d:0x81213d9241c619c5!8m2!3d-7.4047131!4d112.7187323"> Perumahan Karang Indah Asri Blok B-30, Sidoarjo, Jawa Timur</a></address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Phone Number</h3>

              <p> <a href="https://api.whatsapp.com/send?phone=+6285856488881&text=Permisi kak,
              Saya ingin tau lebih lanjut tentang djariproduction"> +62 858-5648-8881</p>
            </a>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p>djariproduction@gmail.com</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #contact -->

  </main>