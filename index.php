<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./style/base.css" />
    <link rel="stylesheet" href="./style/home.css" />
    <link rel="stylesheet" href="./style/bootstrap-grid.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="./script/home.js"></script>

    <title>What's on My Plate</title>
  </head>
  <body>
    <?php include './navbar.html'; ?>

    <div class="cover">
      <div class="cover-title-background">
        <div class="cover-title">What's on My Plate</div>
      </div>
      <button type="button" id="start-button">
        Get Started
      </button>
    </div>

    <div class="quote-background">
      <div class="quote">
        “When diet is wrong, <br />Medicine is of No Use. <br />When diet is
        correct, <br />Medicine is of No Need.”
      </div>
    </div>
    <div class="split">
      <div class="left">
        <div class="centered">
          <img
            src="./assets/images/healthy-listyle-to-diet-plan-vector-15408291.jpg"
          />
          <h2>Get a diet plan</h2>
          <p>
            Here, you will get to see different diet plans curated by us, along with 
            detailed explanations and preparation methods. We've also included several healthy recipes for you to try out!
          </p>
          <button type="button" id="browse-plan">Browse Diet Plans</button>
        </div>
      </div>

      <div class="right">
        <div class="centered">
          <img
            src="./assets/images/woman-thinking-about-healthy-unhealthy-food.jpg"
          />
          <h2>Make your own diet plan</h2>
          <p>
            Already have a diet you're working with? Or are you itching to create a new one? 
            With our diet planner, you can add the details and edit it whenever you want!
          </p>
          <button type="button" id="make-plan">Make your own</button>
        </div>
      </div>
    </div>

    <footer class="footer-section">
      <div class="container">
        <div class="footer-cta pt-5 pb-5">
          <div class="row">
            <div class="col-xl-4 col-md-4 mb-30">
              <div class="single-cta">
                <i class="fa fa-map-marker-alt"></i>
                <div class="cta-text">
                  <h4>Find us</h4>
                  <span>VIT Chennai</span>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-md-4 mb-30">
              <div class="single-cta">
                <i class="fa fa-phone"></i>
                <div class="cta-text">
                  <h4>Call us</h4>
                  <span>+91-8910279278</span>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-md-4 mb-30">
              <div class="single-cta">
                <i class="fa fa-envelope-open"></i>
                <div class="cta-text">
                  <h4>Mail us</h4>
                  <span>snandi640@gmail.com</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-content pt-5 pb-5">
          <div class="row">
            <div class="col-xl-4 col-lg-4 mb-50">
              <div class="footer-widget">
                <div class="footer-logo">
                  <a href="index.html"
                    ><img
                      src="./assets/images/logo.jpg"
                      class="img-fluid"
                      alt="logo"
                  /></a>
                </div>
                <div class="footer-text">
                  <p>
                    Lorem ipsum dolor sit amet, consec tetur adipisicing elit,
                    sed do eiusmod tempor incididuntut consec tetur adipisicing
                    elit,Lorem ipsum dolor sit amet.
                  </p>
                </div>
                <div class="footer-social-icon">
                  <span>Follow us</span>
                  <a href="#"><i class="fa fa-facebook-f facebook-bg"></i></a>
                  <a href="#"><i class="fa fa-twitter twitter-bg"></i></a>
                  <a href="#"><i class="fa fa-google-plus google-bg"></i></a>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
              <div class="footer-widget">
                <div class="footer-widget-heading">
                  <h3>Useful Links</h3>
                </div>
                <ul>
                  <li><a href="#">Home</a></li>
                  <li><a href="#">about</a></li>
                  <li><a href="#">services</a></li>
                  <li><a href="#">portfolio</a></li>
                  <li><a href="#">Contact</a></li>
                  <li><a href="#">About us</a></li>
                  <li><a href="#">Our Services</a></li>
                  <li><a href="#">Expert Team</a></li>
                  <li><a href="#">Contact us</a></li>
                  <li><a href="#">Latest News</a></li>
                </ul>
              </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
              <div class="footer-widget">
                <div class="footer-widget-heading">
                  <h3>Subscribe</h3>
                </div>
                <div class="footer-text mb-25">
                  <p>
                    Don’t miss to subscribe to our new feeds, kindly fill the
                    form below.
                  </p>
                </div>
                <div class="subscribe-form">
                  <form action="#">
                    <input type="text" placeholder="Email Address" />
                    <button><i class="fab fa-telegram-plane">Go</i></button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="copyright-area">
        <div class="container">
          <div class="row">
            <div class="col-xl-6 col-lg-6 text-center text-lg-left">
              <div class="copyright-text">
                <p>
                  Copyright &copy; 2018, All Right Reserved
                  <a href="https://github.com/Subhadip6788?tab=repositories"
                    >WOMP</a
                  >
                </p>
              </div>
            </div>
            <div class="col-xl-6 col-lg-6 d-none d-lg-block text-right">
              <div class="footer-menu">
                <ul>
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Terms</a></li>
                  <li><a href="#">Privacy</a></li>
                  <li><a href="#">Policy</a></li>
                  <li><a href="#">Contact</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>
