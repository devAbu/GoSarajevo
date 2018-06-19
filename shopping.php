<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Touché</title>
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css"  href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/nivo-lightbox.css">
<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/default.css">
<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Dancing+Script:400,700" rel="stylesheet">

<style>
    #map {
            margin-top:50px;
            width: 100%;
            height: 600px;
            background-color: bisque;
          }
    
       #description {
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
      }

      #infowindow-content .title {
        font-weight: bold;
      }

      #infowindow-content {
        display: none;
      }

      #map #infowindow-content {
        display: inline;
      }
    
     #right-panel {
         
        line-height: 50px;
        padding-left: 10px;
      }
    
    #more{
        width: 79.3%;
   
    }
    
     #places{
        list-style-type: none;
        padding: 0;
        margin: 0;
        height: 540px;
        width: 400px;
        overflow-y: scroll;
      } 
    
      #places li{
        padding: px;
        text-align: center;
        text-overflow: ellipsis;
        white-space: nowrap;
        overflow: hidden;
      }
    
    #results{
    margin-top:50px;
    }
    
    #about{
        padding: 50px 0;
    }
    
    #crafts
    {
        text-align: center;
        padding-top: 80px;
        padding-bottom: 10px;
    }

</style>
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!-- Navigation
    ==========================================-->
<nav id="menu" class="navbar navbar-default navbar-fixed-top">
  <div class="container"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand page-scroll" href="#page-top">Sarajevo Go</a> </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="user-home1" class="page-scroll">Home</a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
</nav>
<!-- Header -->
<header id="header">
  <div class="intro">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="intro-text">
            <h1>Sarajevo Go</h1>
            <p>Restaurants / Hotels / Shopps / Parks</p>
            <a href="#about" class="btn btn-custom btn-lg page-scroll">Discover Sarajevo</a> </div>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- About Section -->
<div id="crafts">
      <h2>Bosnain Crafts</h2>
      <p>Learn a little bit about Bosnian Crafts and get ideas for souveners. </p>
</div>

<div id="about" style="padding-top: 70px;">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-6 ">
        <div class="about-img"><img src="img/vezilje.jpg" class="img-responsive" alt=""></div>
      </div>
      <div class="col-xs-12 col-md-6">
        <div class="about-text">
          <h2>VEZILJE</h2>
          <hr>
          <p>The Sarajevo embroidery is well known. The parts of the traditional costumes were once embroidered. The embroidery worked at home and did not have separate stores. Only with the arrival of the Austro-Hungarian Empire the Embassy opened vintage workshops. Today, there are wholesale shops in which embroidered tablecloths, napkins, pillows, garments and the like are made.</p>
        </div>
      </div>
    </div>
  </div>
</div>
    <!-- About Section -->
<div id="about">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-6">
        <div class="about-text">
          <h2>Papudžije</h2>
          <hr>
          <p>Slippers were synonymous with the culture of living in the city or for city culture. The word "slippers" is rooted in the Arabic word "babush", which is pronounced in Persian "papush" and in Bosnian it is said to be "papuča"</p>
        </div>
      </div>
          <div class="col-xs-12 col-md-6 ">
        <div class="about-img"><img src="img/papucari.jpg" class="img-responsive" alt=""></div>
      </div>
    </div>
  </div>
</div>
    <!-- About Section -->
<div id="about">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-6 ">
        <div class="about-img"><img src="img/fildzani.jpg" class="img-responsive" alt=""></div>
      </div>
      <div class="col-xs-12 col-md-6">
        <div class="about-text">
          <h2>KAZANDŽIJSKe</h2>
          <hr>
          <p>They could boast of the most numerous accessories to work with over seventy different products, including: kitchen utensils and serving utensils of various types and sizes; pottery in which water was brought and kept, ices, hybrids and lying; accessories for coffee-table, jerk, jug, envelopes; various sacral objects - lighting products, for barbershops, baths ...</p>
        </div>
      </div>
    </div>
  </div>
</div>

    <!-- Restaurant Menu Section -->
<div id="restaurant-menu">
  <div class="section-title text-center center">
    <div class="overlay">
      <h2>Shopping</h2>
      <hr>
      <p>Everything from world knwon designers to  traditional Bosnian art. </p>
    </div>
  </div>
    
  <div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-6">
        <div class="menu-section">
             <div id="right-panel">
              <h2 class="menu-section-title">Results:</h2>
          <hr>
                <div id="results">
              <ul id="places"></ul>
              <button id="more">More</button>
                 </div>
            </div>
        </div>
      </div>
      
        <div class="col-xs-12 col-sm-6">
        <div class="menu-section">
          <h2 class="menu-section-title">Map</h2>
          <hr>
          <div id="map"></div>
        </div>
      </div>
        
    </div> 
    </div>
  </div>


<div id="footer">
  <div class="container text-center">
    <div class="col-md-6">
      <h3>Address</h3>
      <div class="contact-item">
        <p>Alojza Benca 1,</p>
        <p>Sarajevo, BIH</p>
      </div>
    </div>
    <div class="col-md-6">
      <h3>Contact Info</h3>
      <div class="contact-item">
        <p>Phone: +38761482633</p>
        <p>Email: lejla.krajinic@gmail.com</p>
      </div>
    </div>
  </div>
  <div class="container-fluid text-center copyrights">
    <div class="col-md-8 col-md-offset-2">
      <div class="social">
        <ul>
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
        </ul>
      </div>
      <p>&copy; 2017 All rights reserved. Designed by Lejla</p>
    </div>
  </div>
</div>
    
<script>
      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      var map;
      var infowindow;

      function initMap() {
        var pyrmont = {lat: 43.84864, lng: 18.35644};

        map = new google.maps.Map(document.getElementById('map'), {
          center: pyrmont,
          zoom: 15
        });

        infowindow = new google.maps.InfoWindow();
        var service = new google.maps.places.PlacesService(map);
        service.nearbySearch({
          location: pyrmont,
          radius: 5000,
          type: ['shopping_mall']
        }, processResults);
      }

    function processResults(results, status, pagination) {
        if (status !== google.maps.places.PlacesServiceStatus.OK) {
          return;
        } else {
          createMarkers(results);

          if (pagination.hasNextPage) {
            var moreButton = document.getElementById('more');

            moreButton.disabled = false;

            moreButton.addEventListener('click', function() {
              moreButton.disabled = true;
              pagination.nextPage();
            });
          }
        }
      }

      function createMarkers(places) {
        var bounds = new google.maps.LatLngBounds();
        var placesList = document.getElementById('places');

        for (var i = 0, place; place = places[i]; i++) {
          var image = {
            url: place.icon,
            size: new google.maps.Size(71, 71),
            origin: new google.maps.Point(0, 0),
            anchor: new google.maps.Point(17, 34),
            scaledSize: new google.maps.Size(25, 25)
          };

          var marker = new google.maps.Marker({
            map: map,
            icon: image,
            title: place.name,
            position: place.geometry.location
          });

          placesList.innerHTML += '<li>' + place.name + '</li>';

          bounds.extend(place.geometry.location);
        }
        map.fitBounds(bounds);
      }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDlG-DvhvXzAd3Mjy_HgiaO2guVtc-NYDY&libraries=places&callback=initMap" async defer></script>
<script type="text/javascript" src="js/jquery.1.11.1.js"></script> 
<script type="text/javascript" src="js/bootstrap.js"></script> 
<script type="text/javascript" src="js/SmoothScroll.js"></script> 
<script type="text/javascript" src="js/nivo-lightbox.js"></script> 
<script type="text/javascript" src="js/jquery.isotope.js"></script> 
<script type="text/javascript" src="js/jqBootstrapValidation.js"></script> 
<script type="text/javascript" src="js/contact_me.js"></script> 
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>
