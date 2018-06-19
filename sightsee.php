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
<div id="about">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-11">
        <div class="about-text">
          <h2>Bosnian History</h2>
          <hr>
          <p>The present day site of Sarajevo has a long and rich history dating back to the Stone Age. The Slavs came to Bosnia in the 7th century, but details of their movement and settlement through the country remain a mystery.Sarajevo as we know it today was founded by the Ottoman Empire in the 1450s upon conquering the region, with 1461 typically used as the city’s founding date. The late Ottoman era, from 1697 to 1878, saw the decline of the empire, the city, and a number of disasters.In 1878, Bosnia was occupied by Austria-Hungary. Architects and engineers who endeavored to rebuild Sarajevo as a modern European capital rushed to the city. After World War I Sarajevo became part of the Kingdom of Yugoslavia. Though it held some political importance, as the center of first the Bosnian region and then the Drinska Banovina, it was not treated with the same attention or considered as significant as it was in the past.The history of modern Sarajevo begins with the declaration of independence of Bosnia and Herzegovina from Yugoslavia. The city then became the capital of the new state.</p>
        </div>
      </div>
    </div>
  </div>
</div>
    <!-- Portfolio Section -->
<div id="portfolio">
  <div class="section-title text-center center">
    <div class="overlay">
      <h2>Gallery</h2>
      <hr>
      <p>Top things to do in Sarajevo.</p>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="categories">
        <ul class="cat">
          <li>
            <ol class="type">
              <li><a href="#" data-filter="*" class="active">All</a></li>
              <li><a href="#" data-filter=".breakfast">Museum</a></li>
              <li><a href="#" data-filter=".lunch">Religious</a></li>
              <li><a href="#" data-filter=".dinner">Dinner</a></li>
            </ol>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
    </div>
    <div class="row">
      <div class="portfolio-items">
        <div class="col-sm-6 col-md-4 col-lg-4 musuem">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/img2.jpg" title="Souveneers at Baščaršija" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Souveneers at Baščaršija</h4>
              </div>
              <img src="img/img2.jpg" class="img-responsive" alt="Souveneers at Baščaršija"> </a> </div>
          </div>
        </div>
           <div class="col-sm-6 col-md-4 col-lg-4 breakfast">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/img01.jpg" title="The Bridges Of Sarajevo" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>The Bridges Of Sarajevo</h4>
              </div>
              <img src="img/img01.jpg" class="img-responsive" alt="The Bridges Of Sarajevo"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 breakfast">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/img3.jpg" title="Vidikovac" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Vidikovac</h4>
              </div>
              <img src="img/img3.jpg" class="img-responsive" alt="Vidikovac"> </a> </div>
          </div>
        </div>
           <div class="col-sm-6 col-md-4 col-lg-4 religious">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/img5.jpg" title="Gazi Husrev-beg Mosque" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Gazi Husrev-beg Mosque</h4>
              </div>
              <img src="img/img5.jpg" class="img-responsive" alt="Gazi Husrev-beg Mosque"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 nature">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/img6.jpg" title="Spring of the Bosna river" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Spring of the Bosna river</h4>
              </div>
              <img src="img/img6.jpg" class="img-responsive" alt="Spring of the Bosna river"> </a> </div>
          </div>
        </div>
             <div class="col-sm-6 col-md-4 col-lg-4 religious">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/img4.jpg" title="Sacred Heart Cathedral" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Sacred Heart Cathedral</h4>
              </div>
              <img src="img/img4.jpg" class="img-responsive" alt="Sacred Heart Cathedral"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 lunch">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/img7.jpg" title="Sarajevo Brewery" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Sarajevo Brewery</h4>
              </div>
              <img src="img/img7.jpg" class="img-responsive" alt="Sarajevo Brewery"> </a> </div>
          </div>
        </div>
          <div class="col-sm-6 col-md-4 col-lg-4 lunch">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/img8.jpg" title="Tunnel Museum" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Tunnel Museum</h4>
              </div>
              <img src="img/img8.jpg" class="img-responsive" alt="Tunnel Museum"> </a> </div>
          </div>
        </div>
           <div class="col-sm-6 col-md-4 col-lg-4 museum">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/img9.jpg" title="Jewish Museum" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Jewish Museum</h4>
              </div>
              <img src="img/img9.jpg" class="img-responsive" alt="Jewish Museum"> </a> </div>
          </div>
        </div>
            <div class="col-sm-6 col-md-4 col-lg-4 lunch">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/img11.jpg" title="Drink Bosnain coffee" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Drink Bosnain coffee</h4>
              </div>
              <img src="img/img11.jpg" class="img-responsive" alt="Drink Bosnain coffee"> </a> </div>
          </div>
        </div>
            <div class="col-sm-6 col-md-4 col-lg-4 lunch">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/img12.jpg" title="Sarajevo Olympic Bobsleigh" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Sarajevo Olympic Bobsleigh</h4>
              </div>
              <img src="img/img12.jpg" class="img-responsive" alt="Sarajevo Olympic Bobsleigh"> </a> </div>
          </div>
        </div>
            <div class="col-sm-6 col-md-4 col-lg-4 ">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/img10.jpg" title="Eat Čevapi" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Eat Čevapi</h4>
              </div>
              <img src="img/img10.jpg" class="img-responsive" alt="Eat Čevapi"> </a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
    <!-- Restaurant Menu Section -->
<div id="restaurant-menu">
  <div class="section-title text-center center">
    <div class="overlay">
      <h2>SIghtseeing</h2>
      <hr>
      <p>Learn about the rich Bosnain history.</p>
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
          type: ['park']
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
