<?php session_start(); /* Starts the session */

if(!isset($_SESSION['UserData']['Username'])){
	header("location:login.php");
	exit;
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <title>Training & Placements -BVM</title>
    <link rel="icon" type="image/ico" href="../images/logo.png" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300i,400,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" href="../fonts/icomoon/style.css">
     <link rel="stylesheet" href="../fonts/Training/style.css">
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
                        <a href="../" class="text-black h3 mb-0"><img src="../images/logo.svg"></a>
                    </div>
                    <div class="col-10 col-md-8 d-none d-xl-block" data-aos="fade-down">
                        <nav class="site-navigation position-relative text-right text-lg-center" role="navigation">

                            <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block ">
                                <li><a class="text-white" href="admin.php">Admin's Home</a></li>
                                <li><a class="text-white"   href="view.php">View</a></li>
                                <li class="has-children">
                                    <a class="text-white"  >Add</a>
                                    <ul class="dropdown bg-black">
                                        <li><a class="text-white"  href="addongoing.php">Ongoing</a></li>
                                        <li><a class="text-white"  href="addupcoming.php">Upcoming</a></li>
                                    </ul>
                                </li>
                                <li><a class="text-white"   href="delete.html">Delete</a></li>
                                <li><a class="text-white"   href="logout.php">Log Out</a></li>
                            </ul>
                        </nav>
                    </div>

                    <div class="col-6 col-xl-2 text-right" data-aos="fade-down">
                        <div class="d-none d-xl-inline-block">
                            <ul class="site-menu js-clone-nav ml-auto list-unstyled d-flex text-right mb-0" data-class="social">
                                <li>
                                    <a href="https://www.facebook.com/bvmcollegetpc" class="pl-0 pr-3"><span class="icon-facebook text-white"></span></a>
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




        <div class="site-section" data-aos="fade">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-md-7">
                        <div class="row mb-5">
                            <div class="col-12 ">
                                <h2 class="site-section-heading text-center text-white"> What you wanna do?</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid" data-aos="fade" data-aos-delay="500">
            <div class="swiper-container images-carousel">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="image-wrap">
                            <div class="image-info">
                                <h2 class="mb-2">Add Ongoing Activities</h2>
                                <a href="addongoing.php" class="btn btn-outline-white py-2 px-4">See Pics</a>
                            </div>
                            <img src="../images/on.jpg" alt="Image">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="image-wrap">
                            <div class="image-info">
                                <h2 class="mb-2">Add Upcoming Activities</h2>
                                <a href="addupcoming.php" class="btn btn-outline-white py-2 px-4">See Pics</a>
                            </div>
                            <img src="../images/up.jpg" alt="Image">
                        </div>
                    </div>
					<div class="swiper-slide">
                        <div class="image-wrap">
                            <div class="image-info">
                                <h2 class="mb-2">Delete Activities</h2>
                                <a href="delete.html" class="btn btn-outline-white py-2 px-4">See Pics</a>
                            </div>
                            <img src="../images/about.jpg" alt="Image">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="image-wrap">
                            <div class="image-info">
                                <h2 class="mb-2">View Activities</h2>
                                <a href="view.php" class="btn btn-outline-white py-2 px-4">See Pics</a>
                            </div>
                            <img src="../images/about.jpg" alt="Image">
                        </div>
                    </div>
                </div>
				<div class="swiper-pagination"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-scrollbar"></div>
            </div>
        </div>
		  <!---<div class="row mb-5 site-section">
                            <div class="col-12 ">
                                <h2 class="site-section-heading text-center">Our Insta-Feed</h2>
                            </div>
                        </div>
                        <div id="pixlee_container"></div>
                        <script type="text/javascript">
                            window.PixleeAsyncInit = function() {
                                Pixlee.init({
                                    apiKey: 'x6M7tCv_PccxadsC3Z7A'
                                });
                                Pixlee.addSimpleWidget({
                                    widgetId: '13302'
                                });
                            };

                        </script>
                        <script src="//instafeed.assets.pixlee.com/assets/pixlee_widget_1_0_0.js"></script>-->

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
