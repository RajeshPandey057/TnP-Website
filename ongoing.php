<!DOCTYPE html>
<html lang="en">

<head>
    <title>Training & Placements -BVM</title>
    <link rel="icon" type="image/ico" href="images/logo.png" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300i,400,700" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="fonts/Training/style.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/lightgallery.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/swiper.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.2/css/bulma.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <div class="site-wrap bg-black">

        <div class="site-mobile-menu bg-dark">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>




        <header class="site-navbar py-3 border-bottom" role="banner">

            <div class="container-fluid">
                <div class="row align-items-center">

                    <div class="col-6 col-xl-2" data-aos="fade-down">
                        <a href="index.html" class="text-black h3 mb-0"><img src="images/logo.svg"></a>
                    </div>
                    <div class="col-10 col-md-8 d-none d-xl-block" data-aos="fade-down">
                        <nav class="site-navigation position-relative text-right text-lg-center" role="navigation">

                            <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block ">
                                <li><a class="text-white" href="index.html">Home</a></li>
                                <li><a class="text-white"  href="officer.html">Officers</a></li>
                                <li class="has-children">
                                    <a class="text-white"  href="activity.html">Activity</a>
                                    <ul class="dropdown bg-black">
                                        <li><a class="text-white"  href="ongoing.php">Ongoing</a></li>
                                        <li><a class="text-white"  href="upcoming.php">Upcoming</a></li>
                                    </ul>
                                </li>
                                <li><a class="text-white"  href="about.html">About US</a></li>
                                <li><a class="text-white"  href="contact.html">Contact Us</a></li>
                            </ul>
                        </nav>
                    </div>

                    <div class="col-6 col-xl-2 text-right" data-aos="fade-down">
                        <div class="d-none d-xl-inline-block">
                            <ul class="site-menu js-clone-nav ml-auto list-unstyled d-flex text-right mb-0" data-class="social">
                                <li>
                                    <a href="linkedin.com/in/bvmcollege/" class="pl-0 pr-3"><span class="icon-linkedin text-white"></span></a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/bvmtpc/" class="pl-3 pr-3"><span class=" text-white icon-instagram"></span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>
                    </div>

                </div>
            </div>

        </header>




       <div class="" data-aos="fade">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-md-7">
                        <div class="row mb-5 site-section">
                            <div class="col-12 ">
                                <h2 class="site-section-heading text-center text-white">Ongoing Activities</h2>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <?php
        $files = glob("admin/ongoing/*.*");
         echo '<div class="row" id="lightgallery">';
     for ($i=0; $i<count($files); $i++)
      {
        $image = $files[$i];
        $supported_file = array(
                'gif',
                'jpg',
                'jpeg',
                'png'
         );

         $ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));
         if (in_array($ext, $supported_file)) {
             echo'<div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 item" data-aos="fade" data-src="'.$image .'" data-sub-html="<h4 style="color:red">';
             echo basename($image).'</h4>
          <a href="#"><img src="'.$image .'" alt="IMage" class="img-fluid"></a>
        </div>';
            } else {
                continue;
            }
          }
        echo "</div>";
    ?>
        
        <div class="footer py-4 bg-black">
            <div class="container-fluid text-center">
                <p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    <a href="https://github.com/RajeshPandey057">
                        <span class="icon">
                            <i class="fa fa-github"></i>
                        </span>
                    </a>Copyright &copy;<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                    <script>
                        document.write(new Date().getFullYear());

                    </script>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
            </div>
        </div>

    

    
    
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/swiper.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/picturefill.min.js"></script>
  <script src="js/lightgallery-all.min.js"></script>
  <script src="js/jquery.mousewheel.min.js"></script>
  <script src="js/main.js"></script>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <script>
    $(document).ready(function(){
      $('#lightgallery').lightGallery();
    });
  </script>
  </body>
</html>