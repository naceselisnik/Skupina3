<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>SportWatch </title>
    <!--REQUIRED STYLE SHEETS-->
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLE CSS -->
    <link href="/css/font-awesome.min.css" rel="stylesheet" />
    <!--ANIMATED FONTAWESOME STYLE CSS -->
    <link href="/css/font-awesome-animation.css" rel="stylesheet" />
     <!--PRETTYPHOTO MAIN STYLE -->
    <link href="/css/prettyPhoto.css" rel="stylesheet" />
       <!-- CUSTOM STYLE CSS -->
    <link href="/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    
</head>
<body >
         <!-- NAV SECTION -->
    <div class="navbar navbar-inverse navbar-fixed-top">
       
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">SportWatch</a>
            </div>
            <form action="/" method="post">
            {{ csrf_field() }}
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                <li><input type="text" name="search" placeholder="Search.."></li>
                <li><input hidden type="submit" name ="Search" value="Search" /></li>
                
                    @if(Session::get('user_id'))
                        <li><a href="/logout">LOG OUT</a></li>
                        <li><a href="/upload">UPLOAD</a></li>
                        <li><a href="/delete">DELETE</a></li>
                    @else
                        <li><a href="/login">LOG IN</a></li>
                        <li><a href="/registration">REGISTRATION</a></li>
                    @endif  
                    <li><a href="/creators">CREATORS</a></li>

                </ul>
            </div> 
            </form>      
        </div>
    </div>
     <!--END NAV SECTION -->
    

    
    <section  id="contact-sec">
        @yield('content')
        <br><br><br>
    </section>
    <!--END CONTACT SECTION-->

   
</body>
    <!--FOOTER SECTION -->
    <div class="navbar navbar-inverse navbar-fixed-bottom">
       
        <div class="container">
            <div class="navbar-footer">
                <div id="footer">

                    2016 www.Sportwatch.si | All Right Reserved  
                     
                </div>
            </div>
        </div>
    </div>
    <!-- END FOOTER SECTION -->

    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP CORE SCRIPT   -->
    <script src="js/bootstrap.min.js"></script>  
     <!-- ISOTOPE SCRIPT   -->
    <script src="js/jquery.isotope.min.js"></script>
    <!-- PRETTY PHOTO SCRIPT   -->
    <script src="js/jquery.prettyPhoto.js"></script>    
    <!-- CUSTOM SCRIPTS -->
    <script src="js/custom.js"></script>

</footer>
</html>
