<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
        <meta name="author" content="Md Sajedur Rahman">
        <title>Free Extra Offer</title>
        <link href="{{SR::$baseUrl}}css/bootstrap.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,600,800' rel='stylesheet' type='text/css'>
        <link href="{{SR::$baseUrl}}css/font-awesome.min.css" rel="stylesheet">
        <link href="{{SR::$baseUrl}}css/style.css" rel="stylesheet">
        <link href="{{SR::$baseUrl}}css/responsive.css" rel="stylesheet">
        <link rel="stylesheet" href="{{SR::$baseUrl}}css/validation/validationEngine.jquery.css" type="text/css"/>
        <link href="{{SR::$baseUrl}}css/alertify/alertify.core.css" rel="stylesheet" media="screen">
        <link href="{{SR::$baseUrl}}css/alertify/alertify.default.css" rel="stylesheet" media="screen">
        <script src="{{SR::$baseUrl}}js/respond.min.js"></script>

        <script src="{{SR::$baseUrl}}js/jquery.js"></script>
        <script src="{{SR::$baseUrl}}js/app/utility/form.jquery.js"></script>
        <script src="{{SR::$baseUrl}}js/app/utility/alertify.min.js"></script>
        <script src="{{SR::$baseUrl}}js/validation/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8"></script>
        <script src="{{SR::$baseUrl}}js/validation/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
        <script src="{{SR::$baseUrl}}js/app/utility/form.js"></script>
        <script src="{{SR::$baseUrl}}js/site/site.js"></script>
    </head>

    <body id="top">

    <!-- begin:topbar -->
        <div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="topbar-nav topbar-left">
                            <li class="disabled"><a href="#"><i class="fa fa-envelope"></i> info@freextraoffer.com</a></li>
                            <li class="disabled"><a href="#"><i class="fa fa-phone"></i> (+88) - 01716991580</a></li>
                        </ul>
                        <div class="topbar-nav topbar-right">
                            <form class="search-form">
                                <input type="text" name="">
                                <span class="glyphicon glyphicon-search"></span>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end:topbar -->

        <!-- begin:navbar -->
        <nav class="navbar navbar-default navbar-fixed-top main-category-nav" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header navbar-right">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-top">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <button type="button" class="btn btn-success create-offer">Create Offer</button>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-top">
                    <ul class="nav navbar-nav navbar-left">
                        {{CommonService::renderCategoryNav()}}
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>
        <!-- end:navbar -->

        @yield('content')

        <!-- begin:footer -->
        <div id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8">
                        
                        <h3>Newsletter Subscription</h3>
                        <form class="form-inline">
                            <div class="form-group email">
                                <input class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group submit-btn">
                                <button type="submit" class="btn btn-default">Subscribe</button>
                            </div>
                        </form>
                        <ul class="footer-menu">
                            <li><a>About Us</a></li><li><a>Contact Us</a></li><li><a>Privacy Policy</a></li>
                            <li><a>Terms and Condition</a></li>
                        </ul>
                    </div>
                </div>
                <!-- break -->


                <!-- begin:copyright -->
                
                <div class="row">
                    <div class="col-md-12 copyright">
                        <div class="col-md-6">
                            <p>&copy; 2014 by <strong><a href="http://www.webnit24.com" target="_blank">webnit24</a></strong> All Right Reserved.</p>
                        </div>
                        <div class="col-md-6">
                            <ul class="social-media topbar-nav topbar-right hidden-xs">
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://www.facebook.com/pages/freextraoffercom/382623471905875" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                            <a href="#top" class="btn btn-success scroltop"><i class="fa fa-angle-up"></i></a>
                        </div>
                    </div>
                </div>
                <!-- end:copyright -->

            </div>
        </div>
        <!-- end:footer -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{SR::$baseUrl}}js/bootstrap.js"></script>
    <script src="{{SR::$baseUrl}}js/jquery.nicescroll.min.js"></script>
</body>
</html>
