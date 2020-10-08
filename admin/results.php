<!DOCTYPE html>
<html lang="en">

<head>
    <title>KnowHow'19 &mdash;Try Now To know how.</title>
    <link rel="icon" type="image/ico" href="../images/logo.png" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300i,400,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" href="../fonts/icomoon/style.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">
    <link rel="stylesheet" href="../css/jquery-ui.css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/lightgallery.min.css">
    <link rel="stylesheet" href="../css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="../css/swiper.css">
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../fonts/knowho/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.2/css/bulma.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <div class="site-wrap">

        <div class="site-mobile-menu">
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
                        <h1 class="eventlogo display-4 mb-0"><a href="../intro.html" class="text-black h2 mb-0">KnowHow'19</a></h1>
                    </div>
                    <div class="col-10 col-md-8 d-none d-xl-block" data-aos="fade-down">
                        <nav class="site-navigation position-relative text-right text-lg-center" role="navigation">

                            <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                                <li><a href="../index.html">Home</a></li>
                                <li><a href="../intro.html">Intro</a></li>
                                <li class="has-children">
                                    <a href="../events.html">Events</a>
                                    <ul class="dropdown">
                                        <li><a href="../events/ahlarry.html">Ahl ar'ray</a></li>
                                        <li><a href="../events/vyakti.html">Vyaktitvam</a></li>
                                        <li><a href="../events/accentus.html">Accentus</a></li>
                                        <li><a href="../events/segacite.html">Segacite</a></li>
                                        <li><a href="../events/cribado.html">Cribado</a></li>
                                        <li><a href="../events/msmr.html">Ms/Mr KnowHow</a></li>
                                    </ul>
                                </li>
                                <li><a href="results.php">Results</a></li>
                                <li class="has-children">
                                    <a href="../story.html">Story</a>
                                    <ul class="dropdown">
                                        <li><a href="../insta.html">Insta Feed</a></li>
                                        <li><a href="../admin/local.php">Editor's Pick</a></li>
                                    </ul>
                                </li>
                                <li><a href="../about.html">About US</a></li>
                                <li><a href="../contact.html">Contact Us</a></li>
                            </ul>
                        </nav>
                    </div>

                    <div class="col-6 col-xl-2 text-right" data-aos="fade-down">
                        <div class="d-none d-xl-inline-block">
                            <ul class="site-menu js-clone-nav ml-auto list-unstyled d-flex text-right mb-0" data-class="social">
                                <li>
                                    <a href="https://www.facebook.com/bvmcollegetpc" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/bvmtpc/" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>
                    </div>

                </div>
            </div>

        </header>
        <div class="site-section" data-aos="fade">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-md-7">
                        <div class="row mb-5">
                            <div class="col-12 ">
                                <h2 class="site-section-heading text-center">Results</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-aos="fade">
                    <div class="container-fluid">
                        <div class="row justify-content-center">
                            <div class="col-md-7">
                                <div class="row mb-5">
                                    <div class="col-12 ">
                                        <h2 class="text-black h2 mb-0" style="text-align:center">Attched Below</h2>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
  
      include 'connect.php';
      $sql="select * from results";
      $result=mysqli_query($conn,$sql);
        echo '<div class="row" id="lightgallery">';
      $countrow=0;
      while($res=mysqli_fetch_assoc($result))
      {
          echo "<div class='col-sm-6 col-md-4 col-lg-3 col-xl-2 item' data-aos='fade' data-src='$res[folder]' data-sub-html='<h4>$res[nameofevent]</h4>'>
          <a href='#'><img src='$res[folder]' alt='IMAge' class='img-fluid'></a>
        </div>";
        /*if($countrow==3)
        {
          echo"</div>";
          $countrow=0;
        }
        if ($countrow==0) 
        {
          echo"<div class='row'>";    
        }
        echo" 
          <div class='col-md-4' data-aos='flip-up'>
              <div class='thumbnail'>
                  <img src='$res[folder]' style='width:100px height:100px'>
                    <div class='caption'><p style='font-family: Bodoni MT Condensed; font-size:30px;'>$res[sname]</p></div>
                    <div class='lft'>       
                    <a href='delete.php?ps=$res[sno]'> <button class='btn btn-success' style='float:right; border:0.5px solid white;'>DELETE</button></a>
                    <div style='height:50px;'> </div>
                  </div>
                </div>
              </div>
          ";
        $countrow=$countrow+1;//This is a Single Line Comment<!-- This is a Comment -->*/
      }
      echo "</div>";
    ?>

        <div class="footer py-4">
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

    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/jquery-migrate-3.0.1.min.js"></script>
    <script src="../js/jquery-ui.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/jquery.stellar.min.js"></script>
    <script src="../js/jquery.countdown.min.js"></script>
    <script src="../js/jquery.magnific-popup.min.js"></script>
    <script src="../js/bootstrap-datepicker.min.js"></script>
    <script src="../js/swiper.min.js"></script>
    <script src="../js/aos.js"></script>
    <script src="../js/picturefill.min.js"></script>
    <script src="../js/lightgallery-all.min.js"></script>
    <script src="../js/jquery.mousewheel.min.js"></script>
    <script src="../js/main.js"></script>
    <script>
        $(document).ready(function() {
            $('#lightgallery').lightGallery();
        });

    </script>
</body>

</html>
