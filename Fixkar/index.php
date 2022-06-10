<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="css/all.min.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <title>FixKar</title>
</head>

<body>
    <!-- Start Navigation -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-warning pl-5 fixed-top">
        <a href="index.php" class="navbar-brand">FixKar</a>
        <span class="navbar-text">Customer's Happiness is our Aim</span>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="myMenu">
            <ul class="navbar-nav pl-5 custom-nav">
                <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="#Services" class="nav-link">Services</a></li>
                <li class="nav-item"><a href="#registration" class="nav-link">Registration</a></li>
                <li class="nav-item"><a href="User/RequesterLogin.php" class="nav-link">Login</a></li>
                <li class="nav-item"><a href="#Contact" class="nav-link">Contact</a></li>
            </ul>
        </div>
    </nav> <!-- End Navigation -->

    <!-- Start Header Jumbotron-->
    <header class="jumbotron back-image" style="background-image: url(images/Banner2.jpg);">
        <div class="myclass mainHeading">
            <h1 class="text-uppercase text-danger font-weight-bold">Welcome to </h1>
            <h1 class="text-uppercase text-primary font-weight-bold">FixKar</h1>
            <p class="font-italic">Don't Fikkar just FixKar</p>
            <a href="User/RequesterLogin.php" class="btn btn-success mr-4">Login</a>
            <a href="#registration" class="btn btn-danger mr-4">Sign Up</a>
        </div>
    </header> <!-- End Header Jumbotron -->

    <div class="container">
        <!--Introduction Section-->
        <div class="jumbotron">
            <h3 class="text-center">FixKar Services</h3>
            <p>
                Fixkar Services is providing you to reair your Electrical devices.We focus on enhancing your uses experience by offering world-class
        Electronic Appliances maintenance services. Our main moto is " Customer first.." ..<br>
        Now,don't fikkar for your Electronic devices 
        just FixKar..
            </p>

        </div>
    </div>
    <!--Introduction Section End-->
    <!-- Start Services -->
    <div class="container text-center border-bottom" id="Services">
        <h2>Our Services</h2>
        <div class="row mt-4">
            <div class="col-sm-4 mb-4">
                <a href="#"><i class="fa fa-desktop fa-8x text-sucess"></i></a>
                <h4 class="mt-4">Electronic Devices</h4>
            </div>
            <div class="col-sm-4 mb-4">
                <a href="#"><i class="fa fa-wrench  fa-8x text-primary"></i></a>
                <h4 class="mt-4">Servicing & Maintenance</h4>
            </div>
            <div class="col-sm-4 mb-4">
                <a href="#"><i class="fab fa-android fa-8x text-info"></i></a>
                <h4 class="mt-4">Software Installation</h4>
            </div>
        </div>
    </div> <!-- End Services -->

    <!-- Start Registration  -->
    <?php include('userRegistration.php') ?>
    <!-- End Registration  -->

    <!-- Start Happy Customer  -->
    <div class="jumbotron bg-primary" id="Customer">
        <!-- Start Happy Customer Jumbotron -->
        <div class="container">
            <!-- Start Customer Container -->
            <h2 class="text-center text-white">Happy Customers</h2>
            <div class="row mt-5">
                <div class="col-lg-3 col-sm-6">
                    <!-- Start Customer 1st Column-->
                    <div class="card shadow-lg mb-2">
                        <div class="card-body text-center">
                            <img src="images/avtar1.jpg" class="img-fluid" style="border-radius: 100px;">
                            <h4 class="card-title">Vraj Shah</h4>
                            <p class="card-text">Itaque illo explicabo voluptatum, saepe libero rerum, ad
                                ducimus voluptas
                                nesciunt debitis numquam.</p>
                        </div>
                    </div>
                </div> <!-- End Customer 1st Column-->

                <div class="col-lg-3 col-sm-6">
                    <!-- Start Customer 2nd Column-->
                    <div class="card shadow-lg mb-2">
                        <div class="card-body text-center">
                            <img src="images/avtar2.jpg" class="img-fluid" style="border-radius: 100px;">
                            <h4 class="card-title">Mann Shah</h4>
                            <p class="card-text">Itaque illo explicabo voluptatum, saepe libero rerum, ad
                                ducimus voluptas
                                nesciunt debitis numquam.</p>
                        </div>
                    </div>
                </div> <!-- End Customer 2nd Column-->

                <div class="col-lg-3 col-sm-6">
                    <!-- Start Customer 3rd Column-->
                    <div class="card shadow-lg mb-2">
                        <div class="card-body text-center">
                            <img src="images/avtar3.jpg" class="img-fluid" style="border-radius: 100px;">
                            <h4 class="card-title">Yash vataliya</h4>
                            <p class="card-text">Itaque illo explicabo voluptatum, saepe libero rerum, ad
                                ducimus voluptas
                                nesciunt debitis numquam.</p>
                        </div>
                    </div>
                </div> <!-- End Customer 3rd Column-->

                <div class="col-lg-3 col-sm-6">
                    <!-- Start Customer 4th Column-->
                    <div class="card shadow-lg mb-2">
                        <div class="card-body text-center">
                            <img src="images/avtar4.jpg" class="img-fluid" style="border-radius: 100px;">
                            <h4 class="card-title">Harshit </h4>
                            <p class="card-text">Itaque illo explicabo voluptatum, saepe libero rerum, ad
                                ducimus voluptas
                                nesciunt debitis numquam.</p>
                        </div>
                    </div>
                </div> <!-- End Customer 4th Column-->
            </div> <!-- End Customer Row-->
        </div> <!-- End Customer Container -->
    </div> <!-- End Customer Jumbotron -->

    <!--Start Contact Us-->
    <div class="container" id="Contact">
        <!--Start Contact Us Container-->
        <h2 class="text-center mb-4">Contact US</h2> <!-- Contact Us Heading -->
        <div class="row">

            <!--Start Contact Us Row-->
            <?php include('contactform.php'); ?>
            <!-- End Contact Us 1st Column -->

            <div class="col-md-4 text-center">
                <!-- Start Contact Us 2nd Column-->
                <strong>Headquarter:</strong> <br>
                FixKar Pvt Ltd, <br>
                Maninagar,Ahmedabad <br>
                
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29382.75771871012!2d72.58687003091534!3d22.992737037948068!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e85c2e335ed6b%3A0xd19a77c6688f5c9b!2sManinagar%2C%20Ahmedabad%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1652828202193!5m2!1sen!2sin" width="auto" height="auto style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
               Gujarat - 380008 <br> 
               Phone:  <a href="tel:+91 9054508327">+91 9054508327 </a><br>
                E-mail :<br>
                <a href="mailto:shahmeetjayendrakumar@gmail.com">
                 shahmeetjayendrakumar@gmail.com <br>

                <a href="#" target="_blank">www.Fixkar.com</a> <br>

             
            </div> <!-- End Contact Us 2nd Column-->
        </div> <!-- End Contact Us Row-->
    </div> <!-- End Contact Us Container-->
    <!-- End Contact Us -->

    <!-- Start Footer-->
    <footer class="container-fluid bg-dark text-white mt-5" style="border-top: 3px solid #DC3545;">
        <div class="container">
            <!-- Start Footer Container -->
            <div class="row py-3">
                <!-- Start Footer Row -->
                <div class="col-md-6">
                    <!-- Start Footer 1st Column -->
                    <span class="pr-2">Follow Us: </span>
                    <a href="https://www.linkedin.com/in/meet-shah-330a46219" target="_blank" class="pr-2 fi-color"><i class="fab fa-hackerrank"></i></a>
                    <a href="https://twitter.com/meetshahj?t=DbAavLiSI8B3NGLA0srGjQ&s=08" target="_blank" class="pr-2 fi-color"><i class="fab fa-twitter"></i></a>
                    <a href="https://youtu.be/4aJ_1PETCeE" target="_blank" class="pr-2 fi-color"><i class="fab fa-youtube"></i></a>
                    <a href="https://github.com/settings/profile" target="_blank" class="pr-2 fi-color"><i class="fab fa-github"></i></a>
                    <a href="https://www.linkedin.com/in/meet-shah-330a46219" target="_blank" class="pr-2 fi-color"><i class="fab fa-linkedin"></i></a>
                </div> <!-- End Footer 1st Column -->

                <div class="col-md-6 text-right">
                    <!-- Start Footer 2nd Column -->
                    <small> Designed by Meet &copy; 2022.
                    </small>
                    <small class="ml-2"><a href="Admin/login.php">Admin Login</a></small>
                </div> <!-- End Footer 2nd Column -->
            </div> <!-- End Footer Row -->
        </div> <!-- End Footer Container -->
    </footer> <!-- End Footer -->

    <!-- Boostrap JavaScript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/all.min.js"></script>
</body>

</html>