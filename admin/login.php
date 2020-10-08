<?php session_start(); /* Starts the session */
	$msg="";
	/* Check Login form submitted */	
	if(isset($_POST['Submit'])){
		/* Define username and associated password array */
		$logins = array('Rajesh' => 'Tnp@007','Ankur' => 'LodaMera','TeamLogistics' => 'naibatana');
		
		/* Check and assign submitted Username and Password to new variable */
		$Username = isset($_POST['Username']) ? $_POST['Username'] : '';
		$Password = isset($_POST['Password']) ? $_POST['Password'] : '';
		
		/* Check Username and Password existence in defined array */		
		if (isset($logins[$Username]) && $logins[$Username] == $Password){
			/* Success: Set session variables and redirect to Protected page  */
			$_SESSION['UserData']['Username']=$logins[$Username];
			header("location:admin.php");
			exit;
		} else {
			/*Unsuccessful attempt: Set error message */
			$msg="<span style='color:red'>Wrong!!</span>";
		}
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
                        <a href="admin.php" class="text-black h3 mb-0"><img src="../images/logo.svg"></a>
                    </div>
                    <div class="col-10 col-md-8 d-none d-xl-block" data-aos="fade-down">
                        <nav class="site-navigation position-relative text-right text-lg-center" role="navigation">

                            <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block ">
                                <li><a class="text-white" href="../index.html">Home</a></li>
                                <li><a class="text-white"  href="../intro.html">Faculty</a></li>
                                <li class="has-children">
                                    <a class="text-white"  href="../story.html">Activity</a>
                                    <ul class="dropdown bg-black">
                                        <li><a class="text-white"  href="../insta.html">Ongoing</a></li>
                                        <li><a class="text-white"  href="admin/local.php">Upcoming</a></li>
                                    </ul>
                                </li>
                                <li><a class="text-white"  href="../about.html">About US</a></li>
                                <li><a class="text-white"  href="../contact.html">Contact Us</a></li>
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
        <div class="" data-aos="fade">
            <div class="container-fluid">
                <div class="row justify-content-center">

                    <div class="row mb-5 site-section">
                        <div class="col-12 ">
                            <h2 class="site-section-heading text-center text-white">Hey Admin, Login</h2><br /><br />
                            
                            <form name="myForm" method="post" action="">
                                <div class="wrap-input100 validate-input" align="center">
                                    <input class="input100" type="text" name="Username" placeholder="User Name" required>
                                    <span class="focus-input100"></span>
                                    <span class="symbol-input100">
                                        <i class="icon-qrcode" aria-hidden="true"></i>
                                    </span>
                                </div>
                                <div class="wrap-input100 validate-input" required>
                                    <input class="input100" type="password" name="Password" placeholder="Password" required>
                                    <span class="focus-input100"></span>
                                    <span class="symbol-input100">
                                        <i class="fa fa-lock" aria-hidden="true"></i>
                                    </span>
                                </div>
                                <div class="container-login100-form-btn">
                                    <input type="submit" name="Submit" value="Login" class="login100-form-btn" />
                                </div>
                                <h4 class="site-section-heading text-center text-white"></h4><br /><br />
                                <h5 class="site-section-heading text-center text-white"><?php if(isset($msg)){?>
    
      <?php echo $msg;?>
    <?php } ?></h5>
                            </form>
                            
                            
                        </div>
                         
                    </div>
                   


                </div>
            </div>
        </div><div class="footer py-4 bg-black">
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