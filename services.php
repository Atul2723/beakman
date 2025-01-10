<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title><?php echo 'Service Details - Dewi Bootstrap Template'; ?></title>
  <meta name="description" content="<?php echo ''; ?>">
  <meta name="keywords" content="<?php echo ''; ?>">

  <!-- Favicons -->
  <link href="<?php echo "assets/img/"; ?>favicon.png" rel="icon">
  <link href="<?php echo "assets/img/"; ?>apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo "assets/vendor/"; ?>bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo "assets/vendor/"; ?>bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo "assets/vendor/"; ?>aos/aos.css" rel="stylesheet">
  <link href="<?php echo "assets/vendor/"; ?>glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?php echo "assets/vendor/"; ?>swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="<?php echo "assets/css/"; ?>main.css" rel="stylesheet">

    <style>
  .content ul {
            color: #666;
            font-size: 1.1em;
            list-style-type: disc;
            padding-left: 20px;
        }

        .content a {
            color: #0056b3;
            text-decoration: none;
            font-weight: bold;
        }

        .content a:hover {
            text-decoration: underline;
        }

        .button {
            background-color: #0056b3;
            color: white;
            padding: 10px 20px;
            text-align: center;
            border: none;
            cursor: pointer;
            font-size: 1.1em;
            text-decoration: none;
            display: inline-block;
            border-radius: 5px;
            margin-top: 10px;
        }

        .button:hover {
            background-color: #00408f;
        }

          </style>
  <!-- =======================================================
  * Template Name: Dewi
  * Template URL: https://bootstrapmade.com/dewi-free-multi-purpose-html-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="service-details-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="home.html" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="<?php echo "assets/img/"; ?>logo.png" alt="Beakmen">
      </a>

     <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="./index.php" class="active">Home</a></li>
          <li><a href="./index.php#about">About Us</a></li>
          <li><a href="./services.php">Services</a></li>
          <li><a href="./index.php#features">Our Story</a></li>
          <li><a href="./index.php#team">Team</a></li>
          <li><a href="./index.php#contact">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <!-- <a class="cta-btn" href="index.html#about">Get Started</a> -->

    </div>
  </header>
  <main class="main">
    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade" style="background-image: url(<?php echo "assets/img/"; ?>page-title-bg.webp);">
      <div class="container position-relative">
        <h1>Service Details</h1>
        <p>Esse dolorum voluptatum ullam est sint nemo et est ipsa porro placeat quibusdam quia assumenda numquam molestias.</p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">Service Details</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Service Details Section -->
      <section id="service-details" class="service-details section">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="services-list">
              <a href="#web-design" class="service-link active" data-target="web-design">Design</a>
              <a href="#software-development" class="service-link" data-target="software-development">Custom Drapery and Window Treatments</a>
              <a href="#product-management" class="service-link" data-target="product-management">Custom Furniture and Upholstery</a>
              <a href="#graphic-design" class="service-link" data-target="graphic-design">Real Estate Revitalization</a>
    
              <a href="#cabinetry" class="service-link" data-target="marketing">Cabinetry</a>
            </div>
          </div>
        <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
        <div id="service-content">
          <!-- Web Design Section -->
          <div id="web-design" class="service-section">
             <section id="portfolio" class="portfolio section">
            <div class="container section-title" data-aos="fade-up">
              <h2>Portfolio</h2>
              <p>Design</p>
            <div>
              <ul>
                <li>1. Full-service residential and commercial design.</li>
                <li>2. We have a team of renowned experts in the field of design who know how to fit client's needs.</li>
                <li>3. Learn more about our designers and how we bring your dreams to life by visiting &nbsp;  <a href="http://www.homeintag.info" target="_blank"> <b> www.homeintag.info</b></a>.</li>
              </ul>
              </div>
            </div><!-- End Section Title -->

      <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">Design</li>
            <!-- <li data-filter=".filter-app">Before</li>
            <li data-filter=".filter-product">Before</li> -->
            <!-- <li data-filter=".filter-branding">Branding</li>
            <li data-filter=".filter-books">Books</li> -->
          </ul><!-- End Portfolio Filters -->

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <div class="portfolio-content h-100">
                <img src="<?php echo "assets/img/"; ?>portfolio/design/1.webp" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <a href="<?php echo "assets/img/"; ?>portfolio/design/1.webp" title="Design 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <div class="portfolio-content h-100">
                <img src="<?php echo "assets/img/"; ?>portfolio/design/6.webp" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <a href="<?php echo "assets/img/"; ?>portfolio/design/6.webp" title="Design 2" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <div class="portfolio-content h-100">
                <img src="<?php echo "assets/img/"; ?>portfolio/design/2.webp" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <a href="<?php echo "assets/img/"; ?>portfolio/design/2.webp" title="Design 2" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <div class="portfolio-content h-100">
                <img src="<?php echo "assets/img/"; ?>portfolio/design/3.webp" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <a href="<?php echo "assets/img/"; ?>portfolio/design/3.webp" title="Design 3" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <div class="portfolio-content h-100">
                <img src="<?php echo "assets/img/"; ?>portfolio/design/9.webp" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <a href="<?php echo "assets/img/"; ?>portfolio/design/9.webp" title="Design 9" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <div class="portfolio-content h-100">
                <img src="<?php echo "assets/img/"; ?>portfolio/design/5.webp" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <a href="<?php echo "assets/img/"; ?>portfolio/design/5.webp" title="Design 5" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <div class="portfolio-content h-100">
                <img src="<?php echo "assets/img/"; ?>portfolio/design/7.webp" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <a href="<?php echo "assets/img/"; ?>portfolio/design/7.webp" title="Design 7" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <div class="portfolio-content h-100">
                <img src="<?php echo "assets/img/"; ?>portfolio/design/8.webp" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <a href="<?php echo "assets/img/"; ?>portfolio/design/8.webp" title="Design 8" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <div class="portfolio-content h-100">
                <img src="<?php echo "assets/img/"; ?>portfolio/design/4.webp" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <a href="<?php echo "assets/img/"; ?>portfolio/design/4.webp" title="Design 4" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->




          </div><!-- End Portfolio Container -->

        </div>

      </div>

    </section><!-- /Portfolio Section -->

          </div>
          <!-- Software Development Section -->
          <div id="software-development" class="service-section d-none">
            <h2>Custom Drapery and Window Treatments</h2>
            <p>Details about Software Development services...</p>
          </div>
          <!-- Product Management Section -->
          <div id="product-management" class="service-section d-none">
            <h2>Custom Furniture and Upholstery</h2>
            <p>Details about Product Management services...</p>
          </div>
          <!-- Graphic Design Section -->
          <div id="graphic-design" class="service-section d-none">
            <h2>Real Estate Revitalization</h2>
            <p>Details about Graphic Design services...</p>
          </div>
          <!-- Marketing Section -->
          <div id="cabinetry" class="service-section d-none">
            <h2>Cabinetry</h2>
            <p>Details about Marketing services...</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

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
            <li><i class="bi bi-chevron-right"></i> <a href="./index.php#home">Home</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="./index.php#about">About us</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="./index.php#Contact">Contact</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="./index.php#features">Our Story</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="./index.php#team">Team</a></li>
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

  <script>
    // Lightbox Initialization
    const lightbox = GLightbox();

    // Service navigation
    document.querySelectorAll('.service-link').forEach(link => {
      link.addEventListener('click', function (e) {
        e.preventDefault();
        document.querySelectorAll('.service-link').forEach(link => link.classList.remove('active'));
        this.classList.add('active');

        document.querySelectorAll('.service-section').forEach(section => section.classList.add('d-none'));
        const target = this.getAttribute('href').substring(1);
        document.getElementById(target).classList.remove('d-none');
      });
    });
  </script>

</body>

</html>
