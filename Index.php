<!DOCTYPE html>
<html>

<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@200;300;400&display=swap" rel="stylesheet">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Accident & HealthCare System</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="About.php">About Us</a>
                </li>
                <li class="nav-item">
                    <a id="Our Motto, Mission & Vision"></a>
                    <a class="nav-link" href="#os">Specialities</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Accident Response System
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="modal.php">Report an Accident</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Accident Guideline Resources
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="postag.php">Post Accident Guidelines</a>
                        <a class="dropdown-item" href="faq.php">Auto Accident FAQ's</a>
                        <a class="dropdown-item" href="commis.php">Common Mistakes</a>
                        <a class="dropdown-item" href="mvr.php">Myths v/s Reality</a>
                    </div>
                </li>
            </ul>
            
            <?php
                include 'header.php';

                ?>
                <form class="form-inline my-2 my-lg-0" action="search.php" method="post">
                <input class="form-control mr-sm-2" type="text" name="search" placeholder="Find a Hospital . . ." aria-label="Search">
                <button class="btn btn-outline-light my-2 my-sm-0" type="submit" name="btn-search">Search</button>
            </form>
        </div>
    </nav>




    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/cor1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/cor2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/cor3.jpg" alt="Third slide">
    </div>
  </div>
</div>

                        



        <section class="my-5" style="background-color:ivory;">
            <div class="py-5">
                <h3 class="text-center display-4"><b>About Us</b></h3>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12">
                        <img src="images/about.jpg" class="img-fluid aboutimg" style="margin-left: 90px; margin-bottom: 40px;">
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <h3 class="display-4" style="margin-left: 100px;"><b>A</b>&<b>HS</b> is an initiative to Save Lives.</h3>
                        <p class="py-3" style="margin-left: 100px;" >We are Healthcare made easy and conviniently accessible for everyone.</p>
                        <a href="about.php" class="btn btn-dark" style="margin-left: 100px; margin-bottom:40px;"> Check More </a>
                    </div>
                </div>

            </div>
        </section> 



        <section class="my-5" style="background-color:aliceblue;">
            <div class="py-5">
                <h3 class="text-center display-4"><b>Our Motto, Mission & Vision</b></h3>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="card" style="margin-bottom: 40px;">
                            <img class="card-img-top" src="images/motto.jpg" alt="Card image">
                            <div class="card-body">
                              <h1>Our Motto</h1>
                                <h4 class="card-title">To build a system which matches the highest standards of healthcare across the world in affordable cost. </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="card">
                            <img class="card-img-top" src="images/mission.jpg" alt="Card image">
                            <div class="card-body">
                              <h1>Our Mission</h1>
                                <h4 class="card-title">Putting the patient first, we deliver the best clinical care, learning and research focused on progress through evidence.</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="card">
                            <img class="card-img-top" src="images/vision.jpg" alt="Card image">
                            <div class="card-body">
                              <h1>Our Vision</h1>
                                <h4 class="card-title">To be a world-class university health sciences centre, integrating clinical care, learning and research to improve lives.</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


<section class="text-center my-5 p-1" style="background-color:mediumturquoise;">

  <!-- Section heading -->
  <h1 class="h1-responsive font-weight-bold my-5" id="os">Our Specialities</h1>
  <!-- Section description -->
  <h3 class="dark-grey-text w-responsive mx-auto mb-5">AHS provides a wide range of options for Medical Services and best suited Expertise to make the healthcare as feasiable as possible.</h3>

  <!-- Grid row -->
  <div class="row p-4">

    <!--Grid column-->
    <div class="col-lg-4 col-md-12 mb-lg-0 p-4">
      <!--Card-->
      <div class="card testimonial-card">
        <!--Background color-->
        <div class="card-up info-color"> </div>
        <!--Avatar-->
        <div class="avatar mx-auto white">
          <img class="card-img-center" src="images/arvind_r.jpg" alt="Card image">
        </div>
        <div class="card-body">
          <!--Name-->
          <h4 class="font-weight-bold mb-4">Musculoskeletal Orthopediacs <br><br>Best Dr : Dr. Arwind Rawal</h4>
          <hr>
          <a href="http://arvindrawal.com">Click to visit Dr. Arwind Rawal</a>
        </div>
      </div>
      <!--Card-->
    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-lg-4 col-md-6 mb-md-0 p-4">
      <!--Card-->
      <div class="card testimonial-card">
        <!--Background color-->
        <div class="card-up blue-gradient">
        </div>
        <!--Avatar-->
        <div class="avatar mx-auto white">
          <img class="card-img-center" src="images/milind_s.jpg" alt="Card image">
        </div>
        <div class="card-body">
          <!--Name-->
          <h4 class="font-weight-bold mb-4">Respiratory and Pulmonologist <br><br>Best Dr : Dr. Milind Sathe</h4>
          <hr>
          <!--Quotation-->
          <a href="https://book-appointment.healthplix.com/dr-milind-sathe-chest-physician--ravindra-nagar--old-palasia-indore">Click to visit Dr. Milind Sathe</a>
        </div>
      </div>
      <!--Card-->
    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-lg-4 col-md-6 p-4">
      <!--Card-->
      <div class="card testimonial-card">
        <!--Background color-->
        <div class="card-up indigo"></div>
        <!--Avatar-->
        <div class="avatar mx-auto white">
          <img class="card-img-center" src="images/op_r.jpg" alt="Card image">
        </div>
        <div class="card-body">
          <!--Name-->
          <h4 class="font-weight-bold mb-4">Nephrology <br><br>Best Dr : Dr. Omprakash Rathi</h4>
          <hr>
          <!--Quotation-->
          <a href="https://www.credihealth.com/doctor/omprakash-rathi-nephrologist/overview">Click to visit Dr. Omprakash Rathi</a>
        </div>
      </div>
      <!--Card-->
    </div>
    <!--Grid column-->
<div class="col-lg-4 col-md-12 mb-lg-0 p-4">
      <!--Card-->
      <div class="card testimonial-card">
        <!--Background color-->
        <div class="card-up info-color"></div>
        <!--Avatar-->
        <div class="avatar mx-auto white">
          <img class="card-img-center" src="images/akshat_p.jpg" alt="Card image">
        </div>
        <div class="card-body">
          <!--Name-->
          <h4 class="font-weight-bold mb-4">Immunology and Rheumatology <br><br>Best Dr : Dr. Akshat Pandey</h4>
          <hr>
          <!--Quotation-->
          <a href="https://www.drpandey.com/">Click to visit Dr. Akshat Pandey</a>
        </div>
      </div>
      <!--Card-->
    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-lg-4 col-md-6 mb-md-0 p-4">
      <!--Card-->
      <div class="card testimonial-card">
        <!--Background color-->
        <div class="card-up blue-gradient">
        </div>
        <!--Avatar-->
        <div class="avatar mx-auto white">
          <img class="card-img-center" src="images/meenu_c.jpg" alt="Card image">
        </div>
        <div class="card-body">
          <!--Name-->
          <h4 class="font-weight-bold mb-4">Critical care & Anesthesiology <br><br>Best Dr : Dr. Meenu Chadha</h4>
          <hr>
          <!--Quotation-->
          <a href="https://www.chlhospitals.com/doctor-profile/dr-meenu-chadha">Click to visit Dr. Meenu Chadha</a>
        </div>
      </div>
      <!--Card-->
    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-lg-4 col-md-6 p-4">
      <!--Card-->
      <div class="card testimonial-card">
        <!--Background color-->
        <div class="card-up indigo"></div>
        <!--Avatar-->
        <div class="avatar mx-auto white">
          <img class="card-img-center" src="images/rajeev_h.jpg" alt="Card image">
        </div>
        <div class="card-body">
          <!--Name-->
          <h4 class="font-weight-bold mb-4">Opthalmology <br><br>Best Dr : Dr. Rajeev Hardia</h4>
          <hr>
          <!--Quotation-->
          <a href="http://www.drpshardia.com/">Click to visit Dr. Rajeev Hardia</a>
        </div>
      </div>
      <!--Card-->
    </div><div class="col-lg-4 col-md-12 mb-lg-0 p-4">
      <!--Card-->
      <div class="card testimonial-card">
        <!--Background color-->
        <div class="card-up info-color"></div>
        <!--Avatar-->
        <div class="avatar mx-auto white">
          <img class="card-img-center" src="images/salil_b.jpg" alt="Card image">
        </div>
        <div class="card-body">
          <!--Name-->
          <h4 class="font-weight-bold mb-4">Chest Surgery <br><br>Best Dr : Dr. Salil Bhargava</h4>
          <hr>
          <!--Quotation-->
          <a href="https://bhargava-dr-salil.business.site/?utm_source=gmb&utm_medium=referral">Click to visit Dr. Salil Bhargava</a>
        </div>
      </div>
      <!--Card-->
    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-lg-4 col-md-6 mb-md-0 p-4">
      <!--Card-->
      <div class="card testimonial-card">
        <!--Background color-->
        <div class="card-up blue-gradient">
        </div>
        <!--Avatar-->
        <div class="avatar mx-auto white">
          <img class="card-img-center" src="images/sandeep_s.jpg" alt="Card image">
        </div>
        <div class="card-body">
          <!--Name-->
          <h4 class="font-weight-bold mb-4">Cardiological Surgery <br><br>Best Dr : Dr. Sandeep Shrivastava</h4>
          <hr>
          <!--Quotation-->
          <a href="https://www.medanta.org/doctors/dr-sandeep-srivastava">Click to visit Dr. Sandeep Shrivastava</a>
        </div>
      </div>
      <!--Card-->
    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-lg-4 col-md-6 p-4">
      <!--Card-->
      <div class="card testimonial-card">
        <!--Background color-->
        <div class="card-up indigo"></div>
        <!--Avatar-->
        <div class="avatar mx-auto white">
          <img class="card-img-center" src="images/manoj_b.jpg" alt="Card image">
        </div>
        <div class="card-body">
          <!--Name-->
          <h4 class="font-weight-bold mb-4">Electrophysiology and Pacing <br><br>Best Dr : Dr. Manoj Bansal</h4>
          <hr>
          <!--Quotation-->
          <a href="https://dr-manoj-bansal-cardiologist-in-indore.business.site/?utm_source=gmb&utm_medium=referral">Click to visit Dr. Manoj Bansal</a>
        </div>
      </div>
      <!--Card-->
    </div><div class="col-lg-4 col-md-12 mb-lg-0 p-4">
      <!--Card-->
      <div class="card testimonial-card">
        <!--Background color-->
        <div class="card-up info-color"></div>
        <!--Avatar-->
        <div class="avatar mx-auto white">
          <img class="card-img-center" src="images/sanjay_k.jpg" alt="Card image">
        </div>
        <div class="card-body">
          <!--Name-->
          <h4 class="font-weight-bold mb-4">Plastic Reconstructive Surgery <br><br>Best Dr : Dr. Sanjay Kucheria</h4>
          <hr>
          <!--Quotation-->
          <a href="https://www.drkucheria.com/">Click to visit Dr. Sanjay Kucheria</a>
        </div>
      </div>
      <!--Card-->
    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-lg-4 col-md-6 mb-md-0 p-4">
      <!--Card-->
      <div class="card testimonial-card">
        <!--Background color-->
        <div class="card-up blue-gradient">
        </div>
        <!--Avatar-->
        <div class="avatar mx-auto white">
          <img class="card-img-center" src="images/tarun_g.jpg" alt="Card image">
        </div>
        <div class="card-body">
          <!--Name-->
          <h4 class="font-weight-bold mb-4">Endovascular Sciences <br><br>Best Dr : Dr. Tarun Gandhi</h4>
          <hr>
          <!--Quotation-->
          <a href="http://drtarungandhi.com/">Click to visit Dr. Tarun Gandhi</a>
        </div>
      </div>
      <!--Card-->
    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-lg-4 col-md-6 p-4">
      <!--Card-->
      <div class="card testimonial-card">
        <!--Background color-->
        <div class="card-up indigo"></div>
        <!--Avatar-->
        <div class="avatar mx-auto white">
          <img class="card-img-center" src="images/yatin_m.jpg" alt="Card image">
        </div>
        <div class="card-body">
          <!--Name-->
          <h4 class="font-weight-bold mb-4">Emergency and Trauma Care <br><br>Best Dr : Dr. Yatin Mehta</h4>
          <hr>
          <!--Quotation-->
          <a href="https://www.medanta.org/doctors/dr-yatin-mehta">Click to visit Dr. Yatin Mehta</a>
        </div>
      </div>
      <!--Card-->
    </div>
  </div>
  <!-- Grid row -->

    
  </div><br><br>



</section>


        <section class="my-5" style="background-color:papayawhip;">
            <div class="py-5">
                <h1 class="text-center"> Our Popular Collaborations </h1>
            </div>

            <div class="container-fluid">
                <div class="row">
                <div class="col-lg-3 col-md-3 col-12 p-4">
                        <img src="images/medanta.jpg" title="Medanta Medicity" class="img-fluid">
                    </div>
                    <div class="col-lg-3 col-md-3 col-12 p-4">
                        <img src="images/bombay.jpg" title="Bombay Hospital" class="img-fluid">
                    </div>
                    <div class="col-lg-3 col-md-3 col-12 p-4">
                        <img src="images/aurbindo.jpg" title="Aurbindo Hospital" class="img-fluid">
                    </div>
                    <div class="col-lg-3 col-md-3 col-12 p-4">
                        <img src="images/vishesh.jpg" title="Vishesh Hospital" class="img-fluid">
                    </div>
                    <div class="col-lg-3 col-md-3 col-12 p-4">
                        <img src="images/jupiter.jpg" title="Jupiter Hospital" class="img-fluid">
                    </div>
                    <div class="col-lg-3 col-md-3 col-12 p-4">
                        <img src="images/fortis.jpg" title="Fortis Hospital" class="img-fluid">
                    </div>
                    <div class="col-lg-3 col-md-3 col-12 p-4">
                        <img src="images/apollo1.jpg" title="Apollo Hospital" class="img-fluid">
                    </div>
                    <div class="col-lg-3 col-md-3 col-12 p-4">
                        <img src="images/shalby.jpg" title="Shalby Hospital" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>





        <section class="my-5">
            <div class="py-5">
            </div><center>
                    <a href="login.php"> <button type="submit" class="btn btn-dark ">Login</button></a>
                    <a href="register.php"> <button type="submit" class="btn btn-dark ">Signup</button></a>
            </center></div>
        </section>

        <section id="lab_social_icon_footer">
<!-- Include Font Awesome Stylesheet in Header -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
        <div class="text-center center-block">
                <a href="https://www.facebook.com/bootsnipp"><i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a>
	            <a href="https://twitter.com/bootsnipp"><i id="social-tw" class="fa fa-twitter-square fa-3x social"></i></a>
	            <a href="https://plus.google.com/+Bootsnipp-page"><i id="social-gp" class="fa fa-google-plus-square fa-3x social"></i></a>
	            <a href="mailto:#"><i id="social-em" class="fa fa-envelope-square fa-3x social"></i></a>
    </div>
</div>
</section>

        <footer>
            <center><p class="p-3 bg-dark text-white text-center">Trilogy Production</p></center>
        </footer>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>