<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>FYP Management Portal</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-eduwell-style.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
  </head>

<body>

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <nav class="main-nav">
                      <!-- ***** Logo Start ***** -->
                      <a href="/" class="logo">
                          <img src="assets/images/updated/FYPRocket.png" alt="FYP Rocket Logo">
                      </a>
                      <!-- ***** Logo End ***** -->
                      <!-- ***** Menu Start ***** -->
                      <ul class="nav">
                          <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                          <li class="scroll-to-section"><a href="#materials">Materials</a></li>
                          @if(session('lect_id') != "")
                            <li><a href="/dashboard">Dashboard</a></li>
                          @else
                            <li><a href="/login">Log in</a></li>
                          @endif
                      </ul>        
                      <a class='menu-trigger'>
                          <span>Menu</span>
                      </a>
                      <!-- ***** Menu End ***** -->
                  </nav>
              </div>
          </div>
      </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <!-- ***** Main Banner Area Start ***** -->
  <section class="main-banner" id="top">
    <div class="container">
      <div class="row mt-5">
        <div class="col-lg-6 align-self-center">
          <div class="header-text">
            <h6>Supercharge your dreams</h6>
            <h2>Experience productivity with <em>Rocket!</em></h2>
            <div class="main-button-gradient">
              <div>
                @if(session('lect_id') != "")
                  <a href="/dashboard">Go to Dashboard</a>
                @else
                  <a href="/login">Login Now!</a>
                @endif
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="right-image">
            <img src="assets/images/banner-right-image.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ***** Main Banner Area End ***** -->

  <section class="our-courses" id="materials">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading">
            <h6>MATERIALS</h6>
            <h4>Get your <em>materials</em> here</h4>
            <p>Don't miss this important files to help you on your FYP journey</p>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="naccs">
            <div class="tabs">
              <div class="row">
                <div class="col-lg-3">
                  <div class="menu">
                    <div class="active gradient-border"><span>FYP Briefing</span></div>
                    <div class="gradient-border"><span>Registration Form</span></div>
                    <div class="gradient-border"><span>Log Book</span></div>
                    <div class="gradient-border"><span>SRS Template</span></div>
                  </div>
                </div>
                <div class="col-lg-9">
                  <ul class="nacc">
                    <li class="active">
                      <div>
                        <div class="left-image">
                          <img src="assets/images/updated/fyp_briefing.png" alt="fyp briefing image">
                        </div>
                        <div class="right-content">
                          <h4>FYP Briefing</h4>
                          <p>FYP 1 Slide Briefing for new students and those who missed the briefing session
                          <br><br>You can download this slide and keep notes of the important chapters to include in your final year project report. Do keep in mind the submission dates for each milestones.</p>
                          <span class="last-span"></span>
                          <div class="text-button">
                            <a href="{{ asset('download/fyp_briefing.pdf') }}"  download>Download Slide</a>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="left-image">
                          <img src="assets/images/updated/fyp_form.png" alt="fyp registration image" width="300px" height="363px">
                        </div>
                        <div class="right-content">
                          <h4>FYP Registration Form</h4>
                          <p>You are required to fill in this form stating your FYP title and your chosen supervisor<br><br>Print TWO copies. Complete the form and submit one copy to your respective SV and one copy to FYP 1 coordinator. This form should be submitted within 2 weeks after starting FYP 1 semester.</p>
                          <span class="last-span"></span>
                          <div class="text-button">
                            <a href="{{ asset('download/fyp_form.pdf') }}" download>Download Form</a>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="left-image">
                          <img src="assets/images/updated/fyp_logbook.png" alt="fyp logbook image" width="300px" height="363px">
                        </div>
                        <div class="right-content">
                          <h4>Log Book</h4>
                          <p>You should set up regular meetings with your supervisor to discuss the updates of the project.<br><br>You are required to print the log book and you need to fill up the log book each time you have a discussion with SV. </p>
                          <span class="last-span"></span>
                          <div class="text-button">
                            <a href="{{ asset('download/fyp_logbook.pdf') }}"  download>Download Logbook</a>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="left-image">
                          <img src="assets/images/updated/fyp_srs.png" alt="fyp srs image">
                        </div>
                        <div class="right-content">
                          <h4>SRS Template</h4>
                          <p>Use this as a reference to assist you in doing SRS document for requirements elicitation.<br><br>This document should be appended in your final report in the Appendix section. The purpose of this document is to help streamline your project for the development phase later in FYP 2.</p>
                          <span class="last-span"></span>
                          <div class="text-button">
                            <a href="{{ asset('download/srs.docx') }}" download>Download Template</a>
                          </div>
                        </div>
                      </div>
                      </li>
                    </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="home-footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p class="copyright">© 2022, made with <i class="fa fa-heart"></i> by <a href="https://www.faizalismail.com" class="font-weight-bold" target="_blank">Muhammad Faizal</a>
            for a Rocketed FYP Management
        </div>
      </div>
    </div>
  </section>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/video.js"></script>
    <script src="assets/js/slick-slider.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
          var
          direction = section.replace(/#/, ''),
          reqSection = $('.section').filter('[data-section="' + direction + '"]'),
          reqSectionPos = reqSection.offset().top - 0;

          if (isAnimate) {
            $('body, html').animate({
              scrollTop: reqSectionPos },
            800);
          } else {
            $('body, html').scrollTop(reqSectionPos);
          }

        };

        var checkSection = function checkSection() {
          $('.section').each(function () {
            var
            $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
              var
              currentId = $this.data('section'),
              reqLink = $('a').filter('[href*=\\#' + currentId + ']');
              reqLink.closest('li').addClass('active').
              siblings().removeClass('active');
            }
          });
        };

        $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function (e) {
          e.preventDefault();
          showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
          checkSection();
        });
    </script>
</body>

</html>