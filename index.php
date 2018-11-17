<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>BeautyScanner</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Regna
    Theme URL: https://bootstrapmade.com/regna-bootstrap-onepage-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body onload="startBanner();">

  <!--==========================
  Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
       <!--  <a href="#hero"><img src="img/logo.png" alt="" title="" /></img></a>-->
        <!-- Uncomment below if you prefer to use a text logo -->
        <h1><a href="#hero">BeautyScanner</a></h1>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#hero">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#services">Services</a></li>
             <li><a href="#call-to-action">View Salons</a></li>
          <li><a href="login/login.php">Sign in</a></li>
          <li><a href="login/registration.php">Sign up</a></li>
          <li><a href="#contact">Contact Us</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Hero Section
  ============================-->
  <section id="hero">
    <div class="hero-container">
      <h1>Welcome to BeautyScanner</h1>
      <h2>Making all your beauty needs come true</h2>
      <a href="#about" class="btn-get-started">Let's Get Started</a>
    </div>
  </section><!-- #hero -->

  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">
        <div class="row about-container">

          <div class="col-lg-6 content order-lg-1 order-2">
            <h2 class="title">About Us</h2>
            <p>
We are a new and upcoming booking system for all the beauty lovers around the UK. We help customers simplify their schedules whilst freeing up staff within many beauty organisations by giving people the oppurtunity to book their salon appointments online 24/7. 
            </p>

            <div class="icon-box wow fadeInUp">
              <div class="icon"><i class="fa fa-bolt"></i></div>
              <h4 class="title"><a href="">Quick and Reliable</a></h4>
              <p class="description">With taking appointments 24/7, customers can book any treatment at any time meaning they do not have to wait until the salon of their choice is open and this then helps to avoid waiting in queues.</p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-calendar"></i></div>
              <h4 class="title"><a href="">Manage your bookings</a></h4>
              <p class="description">Customers can modify, reschedule or cancel their bookings at anytime meaning that they can always avoid dissapointment.This also prevents customers from going back and forth via phone or email. </p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-deZlay="0.4s">
              <div class="icon"><i class="fa fa-question-circle"></i></div>
              <h4 class="title"><a href="">Support and Feedback</a></h4>
              <p class="description">As a team we are constantly wanting to keep our customers updated therefore we have provided a little form in which customers can write in any queries/questions, ask for support or provide feedback. With the help of our customers we can continuously grow and be better. So if you have any problems or need support, we are always here!</p>
            </div>

          </div>

          <div class="col-lg-6 background order-lg-2 order-1 wow fadeInRight"></div>
        </div>

      </div>
    </section><!-- #about -->

    <!--==========================
      Facts Section
    ============================-->
    <section id="facts">
      <div class="container wow fadeIn">
        <div class="section-header">
          <h3 class="section-title">Search Salons</h3>
       <div class="form-group">
    <div class="input-group">
      <input type="text" name="search_text" id="search_text" placeholder="Search for service you want such as hair or beauty" class="form-control" />
    </div>
   </div>
   <br />
   <div id="result"></div>

      </div>
    </section><!-- #facts -->

    <!--==========================
      Services Section
    ============================-->
    <section id="services">
      <div class="container wow fadeIn">
        <div class="section-header">
          <h3 class="section-title">Services</h3>
          <p class="section-description">Our listed salons provide all the beauty treatments you could possibly need on a daily basis</p>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="box">
              <div class="icon"><a href=""><i class="fa fa-cut"></i></a></div>
              <h4 class="title"><a href="">Hair</a></h4>
              <p class="description">
Most of our salons provide fabulous hairdressing for all occasions! Most of the salons advise that you have a consultation before your required appointment if you are requesting a hair colour treatment as a patch test will be required. The types of services are hair dressing companies which include cut and blow drys, up styles, bridal hair, full head of highlights and also half head of highlights.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
            <div class="box">
              <div class="icon"><a href=""><i class="fa fa-paint-brush"></i></a></div>
              <h4 class="title"><a href="">Make Up</a></h4>
              <p class="description">Have you’re make up done by one of our salon experts to ensure you look flawless for any special event; formals, a big night out or even your wedding day. All our make-up artists will advise you with the best looks and ideas to make you look perfect for your event as well as using the best make up brands to compliment your skin.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
            <div class="box">
              <div class="icon"><a href=""><i class="fa fa-female"></i></a></div>
              <h4 class="title"><a href="">Nails</a></h4>
              <p class="description">Treat yourself to a luxurious manicure, nail extensions or even pedicure! Most of our salons also provide shellac manicures and gel polish. All salons provide professional nail services by a trained nail technican so you are always in the hands of the best.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="box">
              <div class="icon"><a href=""><i class="fa fa-tint"></i></a></div>
              <h4 class="title"><a href="">Waxing</a></h4>
              <p class="description">Waxing is a very effective method of removing unwanted hair on the face and body, and regular waxing allows slower regrowth and finer hair. Many of the salons offer various waxing treatments from Lycon hot wax, strip wax and tea tree wax. All waxing treatments from the listed salons are carried out by senior wax specialists and their expertise allows them to achieve a fantastic result.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
            <div class="box">
              <div class="icon"><a href=""><i class="fa fa-eye"></i></a></div>
              <h4 class="title"><a href="">Tanning and Eye Treatments </a></h4>
              <p class="description">Get the ultimate bronzed, beach look professionally applied with one of our Fake Bake cream tans. Fake bake lotion is an easy, safe and natural way to achieve the Hollywood look, without the risks of sun bathing. Check out all the salons that provide this! All our listed salons also have everything you need to make your eyes pop. Some of the treatments include eyelash extensions, eyelash and eyebrow tinting and even lash lifts. Many tinting treatments will require a patch test with the salon beforehand so please ensure you look this before your required appointment.
</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
            <div class="box">
              <div class="icon"><a href=""><i class="fa fa-user"></i></a></div>
              <h4 class="title"><a href="">Massage</a></h4>
              <p class="description">If you need to unwind after a busy day, why not try a salon professional facial or massage. Relax in the peacefulness of a beauty room in the hands of a trained therapist. Our listed salons provide everything from back, neck and shoulder massages to deep tissue massages and chemical peels.</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- #services -->

    <!--==========================
    Call To Action Section
    ============================-->
   <section id="call-to-action">
      <div class="container wow fadeIn">
        <div class="row">
   <a href="https://scm.ulster.ac.uk/~Team10/mvp3/index.php" onload="startBanner();" onclick=
"goSite();return false;"><img src="img/hair1.jpg"
name="myBanner" width="1100" height="500" border="0" alt="hair"></a>
        </div>

      </div>
    </section><!-- #call-to-action -->

    
    
    <!--==========================
      Contact Section
    ============================-->
    <section id="contact">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">Contact</h3>
          <p class="section-description">Don't hestitate to contact us for any questions or queries you may have</p>
        </div>
      </div>
 <div align="center">
         <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d18447.841167095896!2d-5.885364955911261!3d54.692377022634936!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2suk!4v1525275092914" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
       </div>
<br>
<br>
      <div class="container wow fadeInUp">
        <div class="row justify-content-center">

          <div class="col-lg-3 col-md-4">

            <div class="info">
              <div>
                <i class="fa fa-map-marker"></i>
                <p>Beauty Scanner<br>University of Ulster BT34 6YTG</p>
              </div>

              <div>
                <i class="fa fa-envelope"></i>
                <p>beautyscanner@hotmail.com</p>
              </div>

              <div>
                <i class="fa fa-phone"></i>
                <p>+44758473876</p>
              </div>
            </div>

            <div class="social-links">
              <a href="https://twitter.com" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="https://www.facebook.com" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="https://www.instagram.com" class="instagram"><i class="fa fa-instagram"></i></a>
              
            </div>

          </div>

          <div class="col-lg-5 col-md-8">
            <div class="form">
              <div id="sendmessage">Your message has been sent. Thank you!</div>
              <div id="errormessage"></div>
              <form action="" method="post" role="form" class="contactForm">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validation"></div>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
              </form>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #contact -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>BeautyScanner</strong>. All Rights Reserved
      </div>
   
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script>

  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
<!----Search----->
    <script>
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"fetch.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('#result').html(data);
   }
  });
 }
 $('#search_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
});
</script>
      
      
<!---slider--->
      
    
<script>
      /*Animated Banner.*/
var myAds = new Array();
myAds[1] = new Image();
myAds[2] = new Image();
myAds[3] = new Image();
myAds[4] = new Image();
myAds[5] = new Image();
myAds[6] = new Image();
myAds[7] = new Image();
myAds[8] = new Image();
myAds[9] = new Image();
myAds[10] = new Image();
myAds[11] = new Image();
myAds[12] = new Image();
myAds[13] = new Image();
myAds[14] = new Image();
myAds[15] = new Image();

myAds[1].src = "img/hair1.jpg";
myAds[2].src = "img/hair2.jpg";
myAds[3].src = "img/hair3.jpg";
myAds[4].src = "img/hair4.jpg";
myAds[5].src = "img/hair5.jpg";
myAds[6].src = "img/hair6.jpg";
myAds[7].src = "img/hair7.jpg";
myAds[8].src = "img/hair8.jpg";
myAds[9].src = "img/hair9.jpg";
myAds[10].src = "img/hair10.jpg";
myAds[11].src = "img/nails1.png";
myAds[12].src = "img/nails2.png";
myAds[13].src = "img/nails3.png";
myAds[14].src = "img/nails4.png";
    myAds[15].src = "img/nails.png";

    

/* Callout: The timings represent the number of milliseconds delay between the images.*/
var myTimings = new Array();
myTimings[1] = 3000;
myTimings[2] = 1500;
myTimings[3] = 1500;
myTimings[4] = 1500;
myTimings[5] = 1500;
myTimings[6] = 1500;
myTimings[7] = 1500;
myTimings[8] = 1500;
myTimings[9] = 1500;
myTimings[10] = 1500;
myTimings[11] = 1500;
myTimings[12] = 1500;
myTimings[13] = 1500;
myTimings[14] = 1500;
myTimings[15] = 1500;

var mySites = new Array();
mySites[1] = "https://scm.ulster.ac.uk/~Team10/mvp3/index.php";
mySites[2] = "https://scm.ulster.ac.uk/~Team10/mvp3/index.php";
mySites[3] = "https://scm.ulster.ac.uk/~Team10/mvp3/index.php";
mySites[4] = "https://scm.ulster.ac.uk/~Team10/mvp3/index.php";
mySites[5] = "https://scm.ulster.ac.uk/~Team10/mvp3/index.php/";
mySites[6] = "https://scm.ulster.ac.uk/~Team10/mvp3/index.php";
    
var adnumber = 0;
var totalads = myAds.length - 1;
var timerID = "";

function startBanner(){
    adnumber = 0;
    showAd();
}
function showAd(){
    if (document.images){
        /*Callout: This condition ensures that each image loads 
            completely before the next image appears in the sequence. */
        if (document.myBanner.complete){
            adnumber++;
            (adnumber > totalads) ? adnumber=1 : adnumber=adnumber;
            document.myBanner.src = myAds[adnumber].src;
        }
        timerID = setTimeout("showAd()",myTimings[adnumber]);
    }
}
function goSite(){
    clearTimeout(timerID);
    window.location.href = mySites[adnumber];
}
//-->
      
      
      
      
      </script>
      
</body>
</html>
