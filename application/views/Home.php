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
    <!--REQUIRED STYLE SHEETS-->
    <!-- BOOTSTRAP CORE STYLE CSS --> 
    <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.css" />
    <!-- FONTAWESOME STYLE CSS -->
    <link rel="stylesheet" type="text/css" href="/assets/css/font-awesome.min.css"/>
    <!--ANIMATED FONTAWESOME STYLE CSS -->
    <link rel="stylesheet" type="text/css"  href="/assets/css/font-awesome-animation.css"/>
     <!--PRETTYPHOTO MAIN STYLE -->
    <link rel="stylesheet" type="text/css" href="/assets/css/prettyPhoto.css"/>
       <!-- CUSTOM STYLE CSS -->
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css"/>
    <!-- GOOGLE FONT -->
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans' />
    <title>Hair Salon</title>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

<body>
         <!-- NAV SECTION -->
         <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/">HOME</a></li>
                    <li><a href="admin">ADMINISTRATOR</a></li>
                     <li><a href="recieving">RECIEVING</a></li>
                       <li><a href="production">PRODUCTION</a></li>
                    <li><a href="sales">SALES</a></li>
                </ul>
            </div>
           
        </div>
    </div>
     <!--END NAV SECTION -->
    
  <!--HOME SECTION-->
    <div id="home-sec">
    <div class="container"  >
        <div class="row text-center">
            <div  class="col-md-12" > 
                <br>
                <p>$$$ worth of materials on hand: <b>${worthOfMaterialsAvailable}</b></p>
                <p>$$$ worth of stock for sale: <b>${worthOfProductsStocked}</b></p>
                <p># of different supplies available: <b>{uniqueSuppliesAvailable}</b></p>
                <p># of different products stocked: <b>{uniqueProductsStocked}</b></p>
                <p># of recipes known: <b>{recipesKnown}</b></p>
               
            </div>
            <div class="col-md-12 col-sm-12">
              
            </div>
        </div>
    </div>
         </div>
</html> 