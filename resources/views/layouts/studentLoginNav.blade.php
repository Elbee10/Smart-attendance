<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <title>Smart Attendance</title>
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="shortcut icon" href="{{asset('favicon_16.ico')}}"/>
    <link rel="bookmark" href="{{asset('favicon_16.ico')}}"/>
    <!-- site css -->
    <link rel="stylesheet" href="{{asset('dist/css/site.min.css')}}">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800,700,400italic,600italic,700italic,800italic,300italic" rel="stylesheet" type="text/css">
    <!-- <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'> -->
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src=" {{asset('dist/js/site.min.js')}}"></script>
   <!-- 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
    <title>Smart Attendance</title>
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
  CSS only 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" type="text/css" >
    <!DOCTYPE html>-->
    <!-- Favicon
    <link href="{{asset('img/favicon.ico')}}" rel="icon"> -->

    <!-- Google Web Fonts 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> -->

    <!-- Font Awesome 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">-->

    <!-- Libraries Stylesheet -->

    <!-- Customized Bootstrap Stylesheet 
    <link href="{{asset('css/style.css')}}" rel="stylesheet">-->
    @yield('css')
</head>

@yield('css')
</head>

<body>

  <header>

  <nav role="navigation" class="navbar navbar-custom">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button data-target="#bs-content-row-navbar-collapse-5" data-toggle="collapse" class="navbar-toggle" type="button">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand">@Organization</a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div id="bs-content-row-navbar-collapse-5" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="getting-started.html">Getting Started</a></li>
              <li class="active"><a href="index.html">Documentation</a></li>
              <!-- <li class="disabled"><a href="#">Link</a></li> -->
              <li class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">Action <b class="caret"></b></a>
                <ul role="menu" class="dropdown-menu">
                  <li class="dropdown-header">Setting</li>
                  <li><a href="#">Action</a></li>
                  <li class="divider"></li>
                  <li class="active"><a href="#">Separated link</a></li>
                  <li class="divider"></li>
                  <li class="disabled"><a href="#">Sign up</a></li>
                </ul>
              </li>
            </ul>

          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
    

  </header>
@yield('content')


<div class="site-footer">
      <div class="container">
        <hr class="dashed" />
        <div class="row">
          <div class="col-md-6">
            <h3>Talk to us</h3>
            <ul>
              <li>Tweet us at <a href="https://twitter.com" target="_blank">@YourTwitter</a>&nbsp;&nbsp;&nbsp;&nbsp;Email us at <span class="connect">info@yourdomain.com</span></li>
              <li>
                <a title="Twitter" href="https://twitter.com" target="_blank" rel="external nofollow"><i class="icon" data-icon="&#xe121"></i></a>
                <a title="Facebook" href="https://www.facebook.com" target="_blank" rel="external nofollow"><i class="icon" data-icon="&#xe10b"></i></a>
                <a title="Google+" href="https://plus.google.com/" target="_blank" rel="external nofollow"><i class="icon" data-icon="&#xe110"></i></a>
                <a title="Github" href="https://github.com/alexquiambao" target="_blank" rel="external nofollow"><i class="icon" data-icon="&#xe10e"></i></a>
              </li>
            </ul>
          </div>
          <div class="col-md-6">
            <!-- Begin MailChimp Signup Form -->
            <link href="//cdn-images.mailchimp.com/embedcode/slim-081711.css" rel="stylesheet" type="text/css">
            <div id="mc_embed_signup">
            <h3 style="margin-bottom: 15px;">Newsletter</h3>
            <form action="" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" novalidate>
                <input style="margin-bottom: 10px;" type="email" value="" name="EMAIL" class="email form-control" id="mce-EMAIL" placeholder="email address" required>
                <span class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="btn btn-primary"></span>
            </form>
            </div>
            <!--End mc_embed_signup-->
          </div>
        </div>
        <hr class="dashed" />
        <div class="copyright clearfix">
          <p>Code licensed under <a href="http://opensource.org/licenses/mit-license.html" target="_blank" rel="external nofollow">MIT License</a>, documentation under <a href="http://creativecommons.org/licenses/by/3.0/" rel="external nofollow">CC BY 3.0</a>.</p>
        </div>
      </div>
    </div>
    <!-- Back to Top -->
    
    <div class="col-xl-12 content">
            <div class="panel panel-default ">
              <div class="panel-body " style="padding-top: 0px; padding-bottom: 0px;">
                  <div class="row" style="padding-top: 0px; padding-bottom: 0px;">
                    <div class="col-md-12">
                      <div class="footer">
                        <div class="container">
                          <div class="clearfix">
                            <div class="footer-logo"><a href="#">@Organization</a></div>
                            <dl class="footer-nav">
                              <dt class="nav-title">PORTFOLIO</dt>
                              <dd class="nav-item"><a href="#">Web Design</a></dd>
                              <dd class="nav-item"><a href="#">Branding &amp; Identity</a></dd>
                              <dd class="nav-item"><a href="#">Mobile Design</a></dd>
                              <dd class="nav-item"><a href="#">Print</a></dd>
                              <dd class="nav-item"><a href="#">User Interface</a></dd>
                            </dl>
                            <dl class="footer-nav">
                              <dt class="nav-title">ABOUT</dt>
                              <dd class="nav-item"><a href="#">The Company</a></dd>
                              <dd class="nav-item"><a href="#">History</a></dd>
                              <dd class="nav-item"><a href="#">Vision</a></dd>
                            </dl>
                            <dl class="footer-nav">
                              <dt class="nav-title">GALLERY</dt>
                              <dd class="nav-item"><a href="#">Flickr</a></dd>
                              <dd class="nav-item"><a href="#">Picasa</a></dd>
                              <dd class="nav-item"><a href="#">iStockPhoto</a></dd>
                              <dd class="nav-item"><a href="#">PhotoDune</a></dd>
                            </dl>
                            <dl class="footer-nav">
                              <dt class="nav-title">CONTACT</dt>
                              <dd class="nav-item"><a href="#">Basic Info</a></dd>
                              <dd class="nav-item"><a href="#">Map</a></dd>
                              <dd class="nav-item"><a href="#">Conctact Form</a></dd>
                            </dl>
                          </div>
                          <div class="footer-copyright text-center">Copyright &copy; 2020 YourCompany.All rights reserved.
                          </div>
                          
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
                    


    <!-- JavaScript Libraries -->
   <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <script type="text/javascript" src="{{ asset('js/javascr.js') }}"></script>



    <!-- Template Javascript -->
    <script src="{{asset('js/main.js')}}"></script>
  <!--add this to have this scripts on all pages-->

  @yield('scripts')
 

</body>

</html>