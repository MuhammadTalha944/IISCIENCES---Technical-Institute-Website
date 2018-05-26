<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>IISCIENCES</title>

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="assets/img/logo/ILAM%20INSTITUTE%20OF%20SCIENCES%20logo.jpg"/>

    <!-- CSS
    ================================================== -->
    <!-- Bootstrap css file-->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font awesome css file-->
    <link href="{{asset('assets/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- Superslide css file-->
    <link rel="stylesheet" href="{{asset('assets/css/superslides.css')}}">
    <!-- Slick slider css file -->
    <link href="{{asset('assets/css/slick.css')}}" rel="stylesheet">
    <!-- Circle counter cdn css file -->
    <link rel='stylesheet prefetch' href='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/css/jquery.circliful.css'>
    <!-- smooth animate css file -->
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
    <!-- preloader -->
    <link rel="stylesheet" href="{{asset('assets/css/queryLoader.css')}}" type="text/css" />
    <!-- gallery slider css -->
    <link type="text/css" media="all" rel="stylesheet" href="{{asset('assets/css/jquery.tosrus.all.css')}}" />
    <!-- Default Theme css file -->
    <link id="switcher" href="{{asset('assets/css/themes/default-theme.css')}}" rel="stylesheet">
    <!-- Main structure css file -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
      .dropdown-submenu {
        position: relative;
      }

      .dropdown-submenu .dropdown-menu {
        top: 0;
        left: 100%;
        margin-top: -1px;
      }
    </style>
  </head>
  <body>

    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"></a>
    <!-- END SCROLL TOP BUTTON -->

    <!--=========== BEGIN HEADER SECTION ================-->
    <header id="header">
      <!-- BEGIN MENU -->
      <div class="menu_area">
        <nav class="navbar navbar-default navbar-fixed-top " role="navigation">  <div class="container">
            <div class="navbar-header">
              <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <!-- LOGO -->
              <!-- TEXT BASED LOGO -->
              <a class="navbar-brand" href="index.html">
                <!--<span><font color="black">IISCIENCES</font></span>-->
                  <a href="/" class="pull-left">
                      <img src="assets/img/logo/ILAM%20INSTITUTE%20OF%20SCIENCES%20logo.jpg" width="130px;" height="120px;">
                  </a>
                </a>
              <!-- IMG BASED LOGO  -->
               <!-- <a class="navbar-brand" href="index.html"><img src="img/logo.png" alt="logo"></a>  -->
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
                <!--<li class="active"><a href="index.html">Home</a></li>
                <li><a href="course-archive.html">Course</a></li>
                <li><a href="scholarship.html">Scholarship</a></li>
                <li><a href="events-archive.html">Events</a></li>
                <li><a href="gallery.html">Gallery</a></li>-->
                <li><a href="/"><font color="black">home</font></a></li>

                   <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                      <font color="black">about us</font><span class="caret"></span></a>
                  <ul id="top-menu" class=" dropdown-menu  navbar-right main-nav">
                    <li class="dropdown-submenu">
                      <a class="test" tabindex="-1" href="#"><font color="black">Message From ></font><span class="caret">
                          </span></a>
                      <ul class="dropdown-menu">
                        <li><a href="chairmen"><font color="black">-chairman&nbsp;
                                </font></a></li>
                          <li><a href="director_Monitoring"><font color="black">-Director Monitoring&nbsp;</font></a></li>
                          <li><a href="director_finance"><font color="black">-Director Finance&nbsp;</font></a></li>
                          <li><a href="director_programs"><font color="black">-Director Programs&nbsp;</font></a></li>


                      </ul>
                    </li>
                      <li><a href="Aim_Mission"><font color="black">Our Aim & Mission</font></a></li>
                      <li><a href="FacultyTeam"><font color="black">Faculty Team</font></a></li>
                      <li><a href="affiliation"><font color="black">Affiliation</font></a></li>
                      <li><a href="Board_of_governous"><font color="black">Board of governous</font></a></li>
                      <li><a href="legal_advisor"><font color="black">Legal Advisor</font></a></li>
                      <li><a href="about_sdc"><font color="black">About SDC</font></a></li>
                      <li><a href="about_ttpc"><font color="black">About TTPC</font></a></li>
                      <li><a href="legal_status_iisciences"><font color="black">Legal status iisciences</font></a></li>
                      <li><a href="recognition_of_professional_diploma"><font color="black">Recognition of professional diploma</font></a></li>


                  </ul>
                </li>
                   <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                      <font color="black">forms</font><span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="frenchise_business_form"><font color="black">Franchise Business Form</font></a></li>
                    <li><a href="coordinator_form"><font color="black">Coordinator Form</font></a></li>
                       </ul>
                </li>
                   <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><font color="black">education system</font><span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="apl"><font color="black">Accrediatation of Prior Learning(APL)</font></a></li>
                    <li><a href="dl_pros_cons"><font color="black">DL Pros And Cons</font></a></li>
                    <li><a href="ebe"><font color="black">EBE</font></a></li>
                    <li><a href="fies"><font color="black">Fast Track Education System(FTES)</font></a></li>
                    <li><a href="priorityAward"><font color="black">Priority Award</font></a></li>
                    <li><a href="recognition_of_prior_learning"><font color="black">Recognition of Prior Learning (RPL)</font></a></li>
                    <li><a href="regular_education_sys"><font color="black">Regular Education System(RES)</font></a></li>

                  </ul>
                </li>

                   <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><font color="black">student service</font><span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="Examination"><font color="black">Examination</font></a></li>
                    <li><a href="generalInfo"><font color="black">General Information</font></a></li>
                    <li><a href="Online_verify"><font color="black">Online Verification</font></a></li>
                  </ul>
                </li>

                   <li class="dropdown">

                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><font color="black">admissions</font><span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="admission_forms"><font color="black">Admission Forms</font></a></li>
                      <li class="dropdown-submenu">
                          <a class="test" tabindex="-1" href="#"><font color="black">Courses ></font><span class="caret">
                          </span></a>
                          <ul class="dropdown-menu">
                              <li><a href="Threemnth"><font color="black">-3 months course
                                      </font></a></li>
                              <li><a href="SixMontn"><font color="black">-6 months course</font></a></li>
                              <li><a href="OneYear"><font color="black">-1 year course</font></a></li>
                              <li><a href="TwoYear"><font color="black">-2 year course</font></a></li>
                              <li><a href="DegreeProgram"><font color="black">-degree program</font></a></li>
                          </ul>
                      </li>
                    <li><a href="FeeStructure"><font color="black">Fee Structure</font></a></li>
                    <li><a href="document_requird"><font color="black">Documents Required</font></a></li>
                  </ul>
                </li>
                   <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><font color="black">contact us</font><span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="headOffice"><font color="black">Head Office</font></a></li>
                    <li><a href="BusinessFrenchise_Pak"><font color="black">Business Franchises – Pakistan</font></a></li>
                    <li><a href="BusinessFrenchise_overSea"><font color="black">Business Franchises – Overseas</font></a></li>
                    <li><a href="Coordinator_pak"><font color="black">Coordinators – Pakistan</font></a></li>
                    <li><a href="Coordinator_OverSea"><font color="black">Coordinators – Overseas</font></a></li>

                  </ul>
                </li>
                <li><a href="gallery"><font color="black">gallery</font></a></li>


                                 </ul>
            </div><!--/.nav-collapse -->
          </div>
        </nav>
      </div>
      <!-- END MENU -->
    </header>
    <!--=========== END HEADER SECTION ================-->

    <!--=========== BEGIN SLIDER SECTION ================-->


      @yield('content')

      <footer id="footer">
      <!-- Start footer top area -->
      <div class="footer_top">
        <div class="container">
          <div class="row">
            <div class="col-ld-3  col-md-3 col-sm-3">
              <div class="single_footer_widget">
                <h3>About Us</h3>
              </div>
            </div>
            <div class="col-ld-3  col-md-3 col-sm-3">
              <div class="single_footer_widget">
                <h3>Community</h3>
                {{--<ul class="footer_widget_nav">
                  <li><a href="#">Gallery</a></li>
                </ul>--}}
              </div>
            </div>
            <div class="col-ld-3  col-md-3 col-sm-3">
              <div class="single_footer_widget">
                <h3></h3>
                <ul class="footer_widget_nav">
                </ul>
              </div>
            </div>
            <div class="col-ld-3  col-md-3 col-sm-3">
              <div class="single_footer_widget">
                <h3>Social Links</h3>
                <ul class="footer_social">
                  <li><a data-toggle="tooltip" data-placement="top" title="Facebook" class="soc_tooltip" href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a data-toggle="tooltip" data-placement="top" title="Twitter" class="soc_tooltip"  href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a data-toggle="tooltip" data-placement="top" title="Google+" class="soc_tooltip"  href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li><a data-toggle="tooltip" data-placement="top" title="Linkedin" class="soc_tooltip"  href="#"><i class="fa fa-linkedin"></i></a></li>
                  <li><a data-toggle="tooltip" data-placement="top" title="Youtube" class="soc_tooltip"  href="#"><i class="fa fa-youtube"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End footer top area -->

      <!-- Start footer bottom area -->
      <div class="footer_bottom">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
              <div class="footer_bootomLeft">
                <p> Copyright &copy; All Rights Reserved</p>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
              <div class="footer_bootomRight">
                <p>Designed by <a href="http://wpfreeware.com/" rel="nofollow">Wpfreeware.com</a> and developed by
                   <a href="http://wpfreeware.com/" rel="nofollow">Talha Ishiaq</a> </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End footer bottom area -->
    </footer>
    <!--=========== END FOOTER SECTION ================-->



    <!-- Javascript Files
    ================================================== -->

    <!-- initialize jQuery Library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Preloader js file -->
    <script src="{{asset('assets/js/queryloader2.min.js')}}" type="text/javascript"></script>
    <!-- For smooth animatin  -->
    <script src="{{asset('assets/js/wow.min.js')}}"></script>
    <!-- Bootstrap js -->
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <!-- slick slider -->
    <script src="{{asset('assets/js/slick.min.js')}}"></script>
    <!-- superslides slider -->
    <script src="{{asset('assets/js/jquery.easing.1.3.js')}}"></script>
    <script src="{{asset('assets/js/jquery.animate-enhanced.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.superslides.min.js')}}" type="text/javascript" charset="utf-8"></script>
    <!-- for circle counter -->
    <script src='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/js/jquery.circliful.min.js'></script>
    <!-- Gallery slider -->
    <script type="text/javascript" language="javascript" src="{{asset('js/jquery.tosrus.min.all.js')}}"></script>

    <!-- Custom js-->
    <script src="{{asset('assets/js/custom.js')}}"></script>

    <!--===============================================
    Template Design By WpFreeware Team.
    Author URI : http://www.wpfreeware.com/
    ====================================================-->


  </body>
</html>
