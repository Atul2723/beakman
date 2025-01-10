<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title><?php echo 'Beakman'; ?></title>
  <meta name="description" content="<?php echo 'Beakman Interiors offers expert interior design, home automation, custom furniture, and renovation services in New York and beyond.'; ?>">
  <meta name="keywords" content="<?php echo 'Interior Design Solutions, Home Automation Services, Custom Furniture Makers, Handcrafted Drapery, Renovation and Remodeling Services, Motorized Shades Installation, Modern Interior Design, Real Estate Revitalization, Cabinet Distribution and Installation, Upholstery Services, Interior Designers in New York, Home Renovation Services in Huntington Station, Cabinet Installation in the Northeast, Custom Drapery in Huntington Station, New York Real Estate Flipping, Bespoke Interior Design, Automated Shades by Lutron®, Custom Upholstery for Furniture, Professional Home Remodeling, Cabinet Sales and Installation, Advanced Motorized Blinds, Real Estate Flipping Experts, Home Automation Systems, Affordable Interior Design Services in New York, Customized Drapery and Blinds Solutions, High-End Home Renovations with Expert Designers, Where to Get Motorized Shades Installed in NY, Best Cabinet Installation Services Near Me, Beakman Interiors, Beakman Home Automation, Beakman Custom Furniture, Beakman Drapery Services, Residential Interior Design Experts, Commercial Property Renovations, Interior Design for Modern Spaces, Luxurious Home Automation Solutions'; ?>">

  <!-- Favicons -->
  <link href="<?php echo "assets/img/"; ?>favicon.png" rel="icon">
  <link href="<?php echo "assets/img/"; ?>apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo "assets/vendor/"; ?>bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo "assets/vendor/"; ?>bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo "assets/vendor/"; ?>aos/aos.css" rel="stylesheet">
  <link href="<?php echo "assets/vendor/"; ?>glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?php echo "assets/vendor/"; ?>swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="<?php echo "assets/css/"; ?>main.css" rel="stylesheet">


</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="home.html" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="<?php echo "assets/img/"; ?>logo.png" alt="Beakmen">
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#index.php" class="active">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="./services.php">Services</a></li>
          <li><a href="#features">Our Story</a></li>
          <li><a href="#team">Team</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <!-- <a class="cta-btn" href="index.html#about">Get Started</a> -->

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <img src="<?php echo "assets/img/"; ?>lillistar-sunset.jpg" alt="Beakman" data-aos="fade-in">

      <div class="container d-flex flex-column align-items-center">
        <h2 data-aos="fade-up" data-aos-delay="100">Beakman Interiors, Automation, & More</h2>
        <p data-aos="fade-up" data-aos-delay="200">"Transforming Spaces, Elevating Lives."</p>
        <div class="d-flex mt-4" data-aos="fade-up" data-aos-delay="300">
          <a href="#about" class="btn-get-started">Get Started</a>
          <!-- <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a> -->
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">
  <div class="container section-title" data-aos="fade-up">
    <h2>About Us</h2>
    <p>Beakman Interiors, Automation, &amp; More</p>
  </div>

  <div class="container">
    <div class="row gy-4">

      <!-- Left Column -->
      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
        <h3>Where Innovation Meets Craftsmanship.</h3>
        <div id="aboutSlideshow" class="carousel slide rounded-4 mb-4" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="<?php echo "assets/img/"; ?>about/1.png" class="img-fluid rounded-4 mb-4" alt="Beakman Interiors Showcase 1">
            </div>
            <div class="carousel-item">
              <img src="<?php echo "assets/img/"; ?>about/2.png" class="img-fluid rounded-4 mb-4" alt="Beakman Interiors Showcase 2">
            </div>
            <div class="carousel-item">
              <img src="<?php echo "assets/img/"; ?>about/3.png" class="img-fluid rounded-4 mb-4" alt="Beakman Interiors Showcase 3">
            </div>
            <div class="carousel-item">
              <img src="<?php echo "assets/img/"; ?>about/4.png" class="img-fluid rounded-4 mb-4" alt="Beakman Interiors Showcase 4">
            </div>
            <div class="carousel-item">
              <img src="<?php echo "assets/img/"; ?>about/5.png" class="d-block w-100" alt="Beakman Interiors Showcase 5">
            </div>
            <div class="carousel-item">
              <img src="<?php echo "assets/img/"; ?>about/6.png" class="img-fluid rounded-4 mb-4" alt="Beakman Interiors Showcase 6">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#aboutSlideshow" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#aboutSlideshow" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>

      <!-- Right Column -->
      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">
        <div class="content ps-0 ps-lg-5">
          <p class="fst-italic">
            Our story begins with a passion for transforming spaces into masterpieces. Rooted in a rich tradition of design and construction excellence, we combine decades of expertise with cutting-edge technology to deliver tailored solutions for homes and businesses alike.
            <br><b>With a focus on innovation, we specialize in:</b>
          </p>

          <ul class="list-unstyled">
            <li>
              <i class="bi bi-check-circle-fill text-primary"></i>
              <strong>Interior Design:</strong> Creating bespoke spaces that reflect your style and elevate your living experience.
            </li>
            <li>
              <i class="bi bi-check-circle-fill text-primary"></i>
              <strong>Automation Solutions:</strong> Partnering with leading manufacturers to offer advanced motorized shades and smart systems that enhance comfort and convenience.
            </li>
            <li>
              <i class="bi bi-check-circle-fill text-primary"></i>
              <strong>Custom Furniture &amp; Upholstery:</strong> Working with Home Interiors by Anthony Giaramita to craft unique pieces that blend functionality with beauty.
            </li>
            <li>
              <i class="bi bi-check-circle-fill text-primary"></i>
              <strong>Remodeling &amp; Real Estate Revitalization:</strong> Breathing new life into properties through meticulous design and construction.
            </li>
          </ul>

          <p>
            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.
          </p>
        </div>
      </div>

    </div>
  </div>
</section>


    <!-- Stats Section -->
    
    <section id="stats" class="stats section light-background">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-emoji-smile color-blue flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                <p>Happy Clients</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-journal-richtext color-orange flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
                <p>Projects</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-headset color-green flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
                <p>Hours Of Support</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-people color-pink flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
                <p>Hard Workers</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>

    </section><!-- /Stats Section -->

    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Services</h2>
        <p>Featured Srvices<br></p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-5">

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="<?php echo "assets/img/"; ?>services/design.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <i class="bi bi-pencil"></i>
                </div>
                <a href="./services.php" class="stretched-link">
                  <h3>Design</h3>
                </a>
                <!-- <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure perferendis.</p> -->
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
            <div class="service-item">
              <div class="img">
                <img src="<?php echo "assets/img/"; ?>services/drapery.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <i class="bi bi-broadcast"></i>
                </div>
                <a href="./services.php" class="stretched-link">
                  <h3>Custom Drapery and Window Treatments</h3>
                </a>
                <!-- <p>Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum hic non ut nesciunt dolorem.</p> -->
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
            <div class="service-item">
              <div class="img">
                <img src="<?php echo "assets/img/"; ?>services/upholstery.webp" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <i class="bi bi-broadcast"></i>
                </div>
                <a href="./services.php" class="stretched-link">
                  <h3>Custom Furniture and Upholstery</h3>
                </a>
                <!-- <p>Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum hic non ut nesciunt dolorem.</p> -->
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
            <div class="service-item">
              <div class="img">
                <img src="<?php echo "assets/img/"; ?>services/realestate.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <i class="bi bi-broadcast"></i>
                </div>
                <a href="./services.php" class="stretched-link">
                  <h3>Real Estate Revitalization</h3>
                </a>
                <!-- <p>Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum hic non ut nesciunt dolorem.</p> -->
              </div>
            </div>
          </div><!-- End Service Item -->


          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
            <div class="service-item">
              <div class="img">
                <img src="<?php echo "assets/img/"; ?>services/SG.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <i class="bi bi-easel"></i>
                </div>
                <a href="./services.php" class="stretched-link">
                  <h3>Cabinetry</h3>
                </a>
                <!-- <p>Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id voluptas adipisci eos earum corrupti.</p> -->
              </div>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section><!-- /Services Section -->

    <!-- Clients Section -->
    <section id="clients" class="clients section light-background">

      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="<?php echo "assets/img/"; ?>clients/client-1.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="<?php echo "assets/img/"; ?>clients/client-2.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="<?php echo "assets/img/"; ?>clients/client-3.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="<?php echo "assets/img/"; ?>clients/client-4.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="<?php echo "assets/img/"; ?>clients/client-5.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="<?php echo "assets/img/"; ?>clients/client-6.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

        </div>

      </div>

    </section><!-- /Clients Section -->

    <!-- Features Section -->
    <section id="features" class="features section">
      
      <div class="container section-title" data-aos="fade-up">
        <h2>Our Story</h2>
        <p>Who We Are<br></p>
      </div><!-- End Section Title -->

      <div class="container">

        <ul class="nav nav-tabs row  d-flex" data-aos="fade-up" data-aos-delay="100">
          <li class="nav-item col-3">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#features-tab-1">
              <i class="bi bi-hourglass-split"></i>
              <h4 class="d-none d-lg-block">Our Story</h4>
            </a>
          </li>
          <li class="nav-item col-3">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-2">
              <i class="bi bi-brightness-high"></i>
              <h4 class="d-none d-lg-block">Our Vision </h4>
            </a>
          </li>
          <li class="nav-item col-3">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-3">
              <i class="bi bi-bullseye"></i>
              <h4 class="d-none d-lg-block">Our Mission</h4>
            </a>
          </li>
          <!-- <li class="nav-item col-3">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-4">
              <i class="bi bi-command"></i>
              <h4 class="d-none d-lg-block">Nostrum qui dile node</h4>
            </a>
          </li> -->
        </ul><!-- End Tab Nav -->

        <div class="tab-content" data-aos="fade-up" data-aos-delay="200">

          <div class="tab-pane fade active show" id="features-tab-1">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Home Interiors by Anthony Giaramita: A Legacy of Quality and Innovation</h3>
                <p class="fst-italic">
                  Founded over <b>60 years ago</b> in Italy by <b>Anthony Giaramita</b>, Home Interiors by Anthony Giaramita is built on a foundation of quality, craftsmanship, and family values.
                </p>
                <ul>
                  <li><i class="bi bi-check2-all"></i>
                    <span>Expanded to the <b>United States</b>, establishing a trusted name in design and furniture.</span>
                  </li>
                  <li><i class="bi bi-check2-all"></i>
                    <span>Thriving under the leadership of <b> Frank Giaramita</b>, who brings innovation and dedication to every project.</span>
                  </li>
                  <li><i class="bi bi-check2-all"></i>
                    <span><b>James Aravena's</b> expertise in engineering, real estate, and technology enables exceptional automated solutions and contracting.
                    </span>
                  </li>
                </ul>
                <p>
                  Together, <b>Frank Giaramita and James Aravena </b> lead a team that blends artistry and technology to create remarkable spaces. Frank continues his father’s legacy with a focus on client relationships and meticulous attention to detail, while James expands the business with cutting-edge innovations.
                </p>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="<?php echo "assets/img/"; ?>our story.png" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End Tab Content Item -->

          <div class="tab-pane fade" id="features-tab-2">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0" style="text-align: justify;">
              <h3>Our Vision</h3>
              <p class="fst-italic">
                To become the premier provider of innovative interior design and home improvement solutions, setting new standards for quality, craftsmanship, and client satisfaction.
              </p>
              <ul>
                <li><i class="bi bi-check2-all"></i>
                  <span>Creating solutions for families across America.</span>
                </li>
                <li><i class="bi bi-check2-all"></i>
                  <span>Expanding our expertise to serve businesses globally.</span>
                </li>
                <li><i class="bi bi-check2-all"></i>
                  <span>Setting benchmarks in the interior design and home improvement industry.</span>
                </li>
              </ul>
              <p>
                We are committed to delivering exceptional designs and services that exceed expectations, ensuring satisfaction for clients worldwide.
              </p>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="<?php echo "assets/img/"; ?>working-2.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End Tab Content Item -->

          <div class="tab-pane fade" id="features-tab-3">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0" style="text-align: justify;">
      <h3>Our Mission</h3>
      <p class="fst-italic">
        To transform spaces into exceptional environments by combining bespoke design, advanced technology, and a family-first approach.
      </p>
      <ul>
        <li><i class="bi bi-check2-all"></i>
          <span>Delivering customized designs tailored to individual needs.</span>
        </li>
        <li><i class="bi bi-check2-all"></i>
          <span>Incorporating advanced technology to create innovative solutions.</span>
        </li>
        <li><i class="bi bi-check2-all"></i>
          <span>Fostering collaboration and exceeding expectations through commitment to excellence.</span>
        </li>
      </ul>
      <p>
        We aim to exceed expectations through collaboration, innovation, and a commitment to excellence in every project we undertake, ensuring each space reflects our clients' vision and values.
      </p>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="<?php echo "assets/img/"; ?>working-3.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End Tab Content Item -->

          <!-- <div class="tab-pane fade" id="features-tab-4">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Omnis fugiat ea explicabo sunt dolorum asperiores sequi inventore rerum</h3>
                <p>
                  Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                  culpa qui officia deserunt mollit anim id est laborum
                </p>
                <p class="fst-italic">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna aliqua.
                </p>
                <ul>
                  <li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Duis aute irure dolor in reprehenderit in voluptate velit.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</span></li>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="<?php echo "assets/img/"; ?>working-4.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div> --><!-- End Tab Content Item -->

        </div>

      </div>

    </section><!-- /Features Section -->

    <!-- Services 2 Section -->
    <section id="services-2" class="services-2 section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Process</h2>
        <p>How We Work</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item d-flex position-relative h-100">
              <i class="bi bi-briefcase icon flex-shrink-0"></i>
              <div>
                
                 <h4 class="title"><a href="#" class="stretched-link">1. Consultation</a></h4>
                <p class="description">
                <ul>
                  <li>We begin by understanding your needs, preferences, and goals.</li>
                  <li>We work with designers, architecture firms, furniture shops, general contractors, and end clients to work within their time and product specifications.</li>
                </ul>  
                </p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item d-flex position-relative h-100">
              <i class="bi bi-pencil-square icon flex-shrink-0"></i>
              <div>
                <h4 class="title"><a href="#" class="stretched-link">2. Design Planning</a></h4>
                <p class="description">
                  <ul>
                  <li>Our in-house designers create personalized plans that balance functionality and aesthetics.</li>
                  <li>We take our clients ideas and use our skills to analyze how it can be made a reality.</li>
                </p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item d-flex position-relative h-100">
              <i class="bi bi-bar-chart-steps icon flex-shrink-0"></i>
              <div>
                <h4 class="title"><a href="#" class="stretched-link">3. Execution</a></h4>
                <p class="description">
                <ul>
                 <li> From handcrafted furniture to automated shades, our skilled team ensures precision and quality at every step.</li>
                 </ul>
                </p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item d-flex position-relative h-100">
              <i class="bi bi-bookmark-check-fill icon flex-shrink-0"></i>
              <div>
                <h4 class="title"><a href="#" class="stretched-link">4. Final Touches</a></h4>
                <p class="description">
                 <ul>
                  <li>We review every detail to guarantee your satisfaction before unveiling your transformed space.</li>
                </ul>
                </p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-item d-flex position-relative h-100">
              <i class="bi bi-box2-heart-fill icon flex-shrink-0"></i>
              <div>
                <h4 class="title"><a href="#" class="stretched-link">5. Aftercare</a></h4>
                <p class="description">
                  <ul>
                 <li> Our relationship doesn’t end with project completion; we provide ongoing support to maintain the beauty and functionality of your space.
                 </li>
                  <li>We reupholster damaged furniture, clean upholstery, and provide service to your automated window systems.</li>
                </ul>
                </p>
              </div>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

        </div>

      </div>

    </section><!-- /Services 2 Section -->

    <!-- Testimonials Section -->
    
    <!-- Portfolio Section -->
    

    <!-- Team Section -->
    <section id="team" class="team section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Team</h2>
        <p>CHECK OUR TEAM</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-5 justify-content-center">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="pic"><img src="<?php echo "assets/img/"; ?>team/team-1.png" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>James Aravena</h4>
                <span>Real Estate and Construction</span>
                <div class="contact-info mt-2">
                    <span>Email: <a href="mailto:james.aravena@example.com">james.aravena@example.com</a></span>
                    <span>Contact: <a href="tel:+17184835256">(718) 483-5256</a></span>
                </div>
                <div class="social">
                  <!-- <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a> -->
                  <a href="https://www.instagram.com/homeintag1"><i class="bi bi-instagram"></i></a>
                  <a href="https://www.linkedin.com/in/jamesaravena/"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <div class="pic"><img src="<?php echo "assets/img/"; ?>team/team-2.png" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Frank Giaramita</h4>
                <span>Real Estate and Construction</span>
                <div class="contact-info mt-2">
                <span>Email: <a href="mailto:Frank@homeintag.com">Frank@homeintag.com</a></span>
                <span>Contact: <a href="tel:+16314230931">(631) 423-0931</a></span>
              </div>
              <div class="social">
                  <!-- <a href=""><i class="bi bi-twitter-x"></i></a> -->
                  <!-- <a href=""><i class="bi bi-facebook"></i></a> -->
                  <a href="https://www.instagram.com/homeintag1"><i class="bi bi-instagram"></i></a>
                  <!-- <a href=""><i class="bi bi-linkedin"></i></a> -->
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <!-- <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <div class="pic"><img src="<?php echo "assets/img/"; ?>team/team-3.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>CTO</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div> --><!-- End Team Member -->

        </div>

      </div>

    </section><!-- /Team Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Connect With Us!</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
          <div class="col-lg-6 ">
            <div class="row gy-4">

              <div class="col-lg-12">
                <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="200">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Address</h3>
                  <p>261 Broadway, Huntington Station, New York 11746, United States</p>
                </div>
              </div><!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="300">
                  <i class="bi bi-telephone"></i>
                  <h3>Call Us</h3>
                  <p> (718) 483-5256</p>
                </div>
              </div><!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="400">
                  <i class="bi bi-envelope"></i>
                  <h3>Email Us</h3>
                  <p>James@homeintag.com <br> Frank@homeintag.com</p>
                </div>
              </div><!-- End Info Item -->

            </div>
          </div>

          <div class="col-lg-6">
    <form action="" method="post" id="contactForm" class="" data-aos="fade-up" data-aos-delay="500">
        <h2>Contact Us</h2>
        <div class="row gy-4">
            <div class="col-md-6">
                <input type="text" name="name" id="name" class="form-control" placeholder="Your Name" required>
                <small class="error-message" id="nameError"></small>
            </div>

            <div class="col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                <small class="error-message" id="emailError"></small>
            </div>

            <div class="col-md-12">
                <input type="text" name="contact" id="contact" class="form-control" placeholder="Your Contact Number" required>
                <small class="error-message" id="contactError"></small>
            </div>

            <div class="col-md-12">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                <small class="error-message" id="subjectError"></small>
            </div>

            <div class="col-md-12">
                <textarea class="form-control" name="message" id="message" rows="4" placeholder="Message" required></textarea>
                <small class="error-message" id="messageError"></small>
            </div>

            <div class="col-md-12 text-center">
                <button type="submit" name="send">Send Message</button>
            </div>
        </div>
    </form>
</div>
<!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer dark-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="home.html" class="logo d-flex align-items-center">
            <span class="sitename">Beakman Interiors Automation, & More</span>
          </a>
          <div class="footer-contact pt-3">
            <p>261 Broadway, Huntington Station</p>
            <p>New York 11746, United States</p>
            <p class="mt-3"><strong>Phone:</strong> <span>(718) 483-5256</span></p>
            <p><strong>Email:</strong> <span>James@homeintag.com <br> Frank@homeintag.com</span></p>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#home">Home</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#about">About us</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#services">Services</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#features">Our Story</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#team">Team</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-12 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="./services.php">Design</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="./services.php">Custom Drapery and Window Treatments</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="./services.php">Custom Furniture and Upholstery</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="./services.php">Real Estate Revitalization</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="./services.php">Cabinetry</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Social Media</h4>
          <p>Follow Us On</p>
            <div class="social-links d-flex mt-4">
            <a href="https://www.instagram.com/homeintag1/  "><i class="bi bi-instagram"></i></a>
            <a href="https://www.linkedin.com/in/beakman-interiors-cabinets-automation-923b52341/"><i class="bi bi-linkedin"></i></a>
            </div>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename"></strong>Beakman <span></span></p>
  
    </div>
		
  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="<?php echo "assets/vendor/"; ?>bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo "assets/vendor/"; ?>php-email-form/validate.js"></script>
  <script src="<?php echo "assets/vendor/"; ?>aos/aos.js"></script>
  <script src="<?php echo "assets/vendor/"; ?>glightbox/js/glightbox.min.js"></script>
  <script src="<?php echo "assets/vendor/"; ?>purecounter/purecounter_vanilla.js"></script>
  <script src="<?php echo "assets/vendor/"; ?>swiper/swiper-bundle.min.js"></script>
  <script src="<?php echo "assets/vendor/"; ?>imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="<?php echo "assets/vendor/"; ?>isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="<?php echo "assets/js/"; ?>main.js"></script>

</body>

</html>


<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST['send'])) {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $contact = trim($_POST['contact']);
    $subject = trim($_POST['subject']);
    $message = trim($_POST['message']);

    // Server-side validation
    $errors = [];

    if (strlen($name) < 3) {
        $errors[] = "Name must be at least 3 characters long.";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email address.";
    }
    if (!preg_match('/^[0-9]{10}$/', $contact)) {
        $errors[] = "Invalid contact number. It should be 10 digits.";
    }
    if (strlen($subject) < 5) {
        $errors[] = "Subject must be at least 5 characters long.";
    }
    if (strlen($message) < 10) {
        $errors[] = "Message must be at least 10 characters long.";
    }

    if (empty($errors)) {
        require './Phpmailer/Exception.php';
        require './Phpmailer/PHPMailer.php';
        require './Phpmailer/SMTP.php';

        $mail = new PHPMailer(true);

        try {
            // Server settings
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'atulcokaco@gmail.com';
            $mail->Password   = 'ktyf eltv swst zdcq';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port       = 465;

            // Recipients
            $mail->setFrom('atulcokaco@gmail.com', 'Enquiry Details');
            $mail->addAddress('cakeshavkumarroy@gmail.com ', 'Beakman');

            // Content
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body    = "Custmer Name - $name <br> Email - $email <br> Contact - $contact <br> Message - $message";

            $mail->send();
            echo "<script>
                    alert('Thank you for connecting with us! Our team will contact you.');
                    window.location.href = '';
                  </script>";
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    } else {
        foreach ($errors as $error) {
            echo "<p style='color:red;'>$error</p>";
        }
    }
}
?>
