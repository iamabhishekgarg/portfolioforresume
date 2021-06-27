<!DOCTYPE html>
<html lang="en">

<head>
  <?php
    include '_pages/header.php';
  ?>
  <style type="text/css">
    .abhishek {
      font-size: 70px;
    }

    .name {
      width: 100px;
    }

    @media (min-width: 600px) {
      .abhishek {
        font-size: 20px;
        line-height: 3;
      }

      .name {
        width: 90px;
      }

    }
  </style>
</head>

<body>
  <div class="main-wrapper home-two">
    <div id="home-banner">
      <div class="container">
        <div class="row">
          <div class="col-sm-9">
            <div class="banner-content">
              <div class="home-social">
                <ul class="list-inline">
                  <li class="list-inline-item"><a href="https://www.facebook.com/Mr.abhishekgargji/"><i
                        class="fa fa-facebook" aria-hidden="true" style="color: red;"></i></a></li>
                  <li class="list-inline-item"><a href="https://twitter.com/abhigarg1997"><i class="fa fa-twitter"
                        aria-hidden="true" style="color: yellow"></i></a></li>
                  <li class="list-inline-item">
                    <a href="https://github.com/Abhishekgarg97"><i class="fa fa-github-alt" aria-hidden="true"
                        style="color: pink"></i></a>
                  </li>
                  <li class="list-inline-item"><a href="https://www.linkedin.com/in/abhishek-garg1997/"><i class="fa fa-linkedin-square"
                        aria-hidden="true" style="color: red;"></i></a></li>
                </ul>
              </div>
              <div class="banner-info">
                <h1>Hello, I am</h1>
                <h2 class="abhishek">Abhishek <br> <br> Garg</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div id="navigation" class="menu-two">
        <div class="navbar navbar-expand-lg">
          <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse"
              aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"><i class="fa fa-align-justify"></i></span>
            </button>
            <div class="navbar-brand logo">
              <a href="index.html"><img class="img-fluid name" src="images/mylogo.png" alt="Image"></a>
            </div>
          </div>
          <div id="navbar-collapse" class="collapse navbar-collapse">
            <nav id="mainmenu">
              <ul class="nav navbar-nav">
                <li class=" scroll current"><a href="#home-banner">Home</a></li>
                <li class="scroll"><a href="#about">About Me</a></li>
                <li class="scroll"><a href="#skill">Skills</a></li>
                <li class="scroll"><a href="#exprience">Experience</a></li>
                <li class="scroll"><a href="#education">Education</a></li>
                <li class="scroll"><a href="#workshops">Workshops & Courses</a></li>
                <li class="scroll"><a href="#portfolio">Projects</a></li>
                <li class="scroll"><a href="#contact">Contact</a></li>

              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <div id="about" class="about-section section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="section-title">
              <h1>Abhishek Garg</h1>
            </div>
          </div>
          <div class="col-md-8">
            <div class="about-info">
              <p>My name is Abhishek Garg. I am a Fresher I have created projects on Java & PHP With Complete Synopsis.
                I see myself as a
                problem-solver And a Team Leader, and I am always looking for a new challenge. I love to discuss your
                needs in this area
                and find out if you’re interested in Hiring Me for Your Company."
              </p>
              <div class="signature">
                <h1>Abhishek Garg</h1>
              </div>
            </div>
            <address>
              <p><span>Nick Name:</span> Abhishek</p>
              <p><span>Email:</span> abhishekgarg1218@gmail.com </br></p>
              <p><span>Phone:</span> +91-7599279317 , +91-95570181256 </br></p>
              <p><span>Date of Birth:</span> july 05,1997</p>
              <p><span>Address:</span> SB-22 SHASTRI NAGAR,GHAZIABAD 201002</p>
            </address>
            <ul class="achievement">
              <li class="achievement-info">
                <span class="counter">07</span>
                <h4>Projects completed</h4>
              </li>
              <li class="achievement-info">
                <span class="counter counter1">02</span>
                <h4>Winning Awards</h4>
              </li>
              <li class="achievement-info">
                <span class="counter counter3">04</span>
                <h4>Running Projects & tasks</h4>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!--skills-->
        <div id="skill" class="skill-section bg-color section-padding">
            <?php
	        include '_pages/skiils.php';
          ?>
        </div>
<!-- skills end -->
    <!--experience-->
    <div id="exprience" class="exprience-section section-padding">
     <?php
     include '_pages/experience.php';
     ?>
  </div>

  <!--workshops-->
  <div id="workshops" class="workshops-info bg-scolor section-padding">
    <?php 
      include '_pages/workshops&courses.php';
    ?>
  </div>
  <!--projects-->
  <div id="portfolio" class="portfolio-section section-padding">
     <?php 
      include '_pages/projects.php';
    ?>
  </div>

  <!--contacts-->
  <div id="contact" class="contact-section bg-color section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="section-title">
            <h1>Contact Me</h1>
          </div>
        </div>
        <div class="col-md-8">
          <div class="section-content">
            <div class="text-info">
              <h4>Lets Keep In Touch</h4>
              <p></p>
            </div>
            <div class="address">
              <ul>
                <li>
                  <div class="icons">
                    <i class="fa fa-map-signs" aria-hidden="true"></i>
                  </div>
                  <h3>Address</h3>
                  <p>SB-22 SHASTRI NAGAR,GHAZIABAD 201002</p>
                </li>
                <li>
                  <div class="icons icons1">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                  </div>
                  <h3>Mobile number</h3>
                  <p>+91-7599279317 , +91-95570181256</p>
                </li>
                <li>
                  <div class="icons icons2">
                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                  </div>
                  <h3>Email address</h3>
                  <a href="#"><span>abhishekgarg1218@gmail.com</span></a>
                </li>
                <li>
                  <div class="icons icons3">
                    <i class="fa fa-external-link" aria-hidden="true"></i>
                  </div>
                  <h3>Social profiles</h3>
                  <ul class="social list-inline">
                    <li><a href="https://www.facebook.com/Mr.abhishekgargji"><i class="fa fa-facebook"
                          aria-hidden="true"></i></a></li>
                    <li><a href="https://twitter.com/abhigarg1997"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    </li>
                    <li><a href="https://github.com/Abhishekgarg97"><i class="fa fa-github-alt"
                          aria-hidden="true"></i></a></li>
                  </ul>
                </li>
              </ul>
            </div>
            <div class="contact">
              <div class="contact-info">
                <div class="title">
                  <div class="icons">
                    <i class="fa fa-commenting-o" aria-hidden="true"></i>
                  </div>
                  <h3>Leave me a message</h3>
                </div>
                <p>I will be very thankful to have your queries, feedbacks about my website, and any requirements in
                  your organization</p>
              </div>
              <form id="contact-form" class="contact-form" name="contact-form" data-netlify="true" method="post"
                action="">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="text" class="form-control" name="full_name" required="required"
                        placeholder="Full Name">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="email" class="form-control" name="email" required="required"
                        placeholder="Your email id">
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group">
                      <input type="text" class="form-control" name="subject" required="required" placeholder="Subject">
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group">
                      <textarea name="message" required="required" class="form-control" rows="7"
                        placeholder="Your message"></textarea>
                    </div>
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="form-group">
                    <div data-netlify-recapcha="true"></div>
                  </div>
                </div>
                <div class="form-group pull-right">
                  <button type="submit" name="submit the form" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- resume -->
  <div id="profile" class="profile-section  bg-color section-padding">
    <?php 
      include '_pages/resume.php';
    ?>
      </div>
  <div id="footer">
    <?php
      include '_pages/footer.php';
     ?>
   </div>

  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js" type="faeb0114bb1c54e46d031011-text/javascript"></script>
  <script src="js/bootstrap.min.js" type="faeb0114bb1c54e46d031011-text/javascript"></script>
  <script src="js/waypoints.min.js" type="faeb0114bb1c54e46d031011-text/javascript"></script>
  <script src="js/counterup.min.js" type="faeb0114bb1c54e46d031011-text/javascript"></script>
  <script src="js/inview.min.js" type="faeb0114bb1c54e46d031011-text/javascript"></script>
  <script src="js/easypiechart.js" type="faeb0114bb1c54e46d031011-text/javascript"></script>
  <script src="js/magnific-popup.min.js" type="faeb0114bb1c54e46d031011-text/javascript"></script>
  <script src="js/main.js" type="faeb0114bb1c54e46d031011-text/javascript"></script>
  <script type="faeb0114bb1c54e46d031011-text/javascript">
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','../../www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-73239902-1', 'auto');
            ga('send', 'pageview');
          </script>
  <script src="ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js"
    data-cf-settings="faeb0114bb1c54e46d031011-|49" defer=""></script>
    <script>
     (function() { 
       var v = document.createElement("script");
        v.async = true; 
        v.src = "https://assets-prod.vicomi.com/vicomi.js?token=d9b3fa0bfb134f3e8e4128f40b1e2ff4"; 
        var s = document.getElementsByTagName("script")[0];
         s.parentNode.insertBefore(v, s); 
         })(); 
  </script> 
</body>

</html>
