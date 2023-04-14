<?php
header("Location: /about");
exit;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <script src="bootstrap.bundle.min.js"></script>
    <title>Fair Chase</title>
</head>
<body class="bg-white">

<!-- nav bar -->
    <nav class="navbar navbar-expand-lg bg-primary navbar-light py-0 p-lg-1 pt-lg-1 fixed-top">
        <div class="container bg-primary">
            <a href="about.html" class="navbar-brand">
                <img src="Logo.png" alt="Fair Chase Logo" height="120">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ms-auto text-white">
                    <li class="nav-item hover">
                        <a href="index.html" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="about.html" class="nav-link">About us</a>
                    </li>
                    <li class="nav-item">
                        <a href="services.html" class="nav-link">Services</a>
                    </li>
                    </li>
                    <li class="nav-item">
                        <a href="contact.html" class="nav-link">Contact</a>
                    </li>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <hr style="background-color: #542c62; height: 5px; margin: 0;">

    <section id="About" style="background-image: url('Pic2.png'); background-size: cover;" class="text-primary vh-50 p-5 text-center text-sm-start bg-white border-bottom border-top">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-sm-7">
                    <h1 class="text-primary">Meet the Team</h1>
                    <p class="lead my-2 pb-4">Fair Chase was founded by Alex Ydlibi, with a simple goal of reducing the friction costs that businesses encounter day-to-day and enhancing performance.  
                </div>
            </div>
            <a href="services.html" class="btn btn-secondary btn-lg" >
                <i class="bi bi-chevron-right"></i> Find out about our services
            </a>
        </div>
    </section>
    <hr style="background-color: #542c62; height: 20px; margin: 0;"> 

<section id="About" style="background-image: url('Slide13.JPG'); background-size: cover;" class="text-primary vh-75 p-5 text-center text-sm-start bg-warning border-bottom border-top">
    <div class="container ">
        <div class="row align-items-top justify-content-between ">
            <div class="col-sm-6">
                <img src="me.png" class="border border-secondary border-3 img-fluid d-block mx-auto w-70 h-auto"></img>
            </div>
            <div class="col-sm-6">
               
                <h2 class="text-primary">Alex</h2>
                <p class="my-3">Alex graduated from the University of Warwick with a first class degree in Economics before joining PwC in its Banking and Capital Markets team, where he qualified as a Chartered Accountant (ACA). 
                </p>
                <p class="my-3">Experience at PwC gave him his first exposure to credit management. He specialised in credit loss working with household brand name banks, seeing hundreds of millions being lost each year to bad credit! It was here that he advised banks on their development of credit governance processes.
                </p>
                <p class="my-3">He was subsequently the Fund Financial Controller of a leading infrastructure investment fund. A key responsibility was to ensure timely collection of cash into the fund from its portfolio investments that spanned the EU.</p>
                <p class="my-3">He acts a Corporate Finance adviser alongside Fair Chase, helping shareholders of mid-market businesses in the UK to raise funds for growth or realise their investments. He sees first-hand how bad debt can impact business valuations, through both headline prices achieved on a sale and increased working capital investment requirements. He is a Chartered Financial Analyst (CFA®).</p>
                <p class="my-3">Alex’s multi-layered experience enables him to provide well-considered support across different aspects of credit management.</p>

                <p><strong><i>Feel free to get in touch with via email or LinkedIn:</i></strong></p>
                <strong>Email:</strong> <a href="mailto:alex@fairchase.co.uk">alex@fairchase.co.uk</a>
                <div class="pl-2 pt-2"> 
                    <strong>LinkedIn:</strong> <a href="https://www.linkedin.com/in/alexydlibi/"><img src="linkedin.png" alt="LinkedIn Logo"></a>
                </div>
            </div>
        </div>
    </div>
</section>

<hr style="background-color: #542c62; height: 20px; margin: 0;"> 
<!-- footer -->

<footer class="bg-primary text-center text-lg-start text-white py-0 p-lg-1 pt-lg-1 ">
    <hr style="background-color: #542c62; height: 5px; margin: 5px; padding-bottom: 5px;">
  <div class="container p-4">
    <div class="row">
      <div class="col-lg-4 mb-md-0">
        <p>&copy; Fair Chase Ltd 2023</p>
      </div>
      <div class="col-lg-4 mb-md-0">
        <div class="d-flex justify-content-center text-white">
          <a href="privacy.html" class="me-3 nav-link-foot">Privacy Policy</a>
          <a href="terms.html" class="me-3 nav-link-foot">Terms of Use</a>
        </div>
      </div>
      <div class="col-lg-4 mb-md-0">
        <div class="d-flex justify-content-end">
          <a href="#" class="me-3 text-white"><img src="facebook.png"><i class="fab fa-facebook"></i></a>
          <a href="#" class="me-3 text-white"><img src="twitter.png"><i class="fab fa-twitter"></i></a>
          <a href="#" class="me-3 text-white"><img src="linkedin.png"><i class="fab fa-linkedin"></i></a>
        </div>
      </div>
    </div>
  </div>
</footer>

</body>
</html>