<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Selenium, React JS, Angular JS, Android, Python, Java</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="css/home-page.css" rel="stylesheet">          
    <link href="css/navbar.css" rel="stylesheet">
    <link href="css/social.css" rel="stylesheet" type="text/css">
    <link href="css/test.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Philosopher' rel='stylesheet'>
    
  </head>
  <body>
    <!-- Navigation -->
    <?php
      include 'nastedpage/navigation.php'; 
    ?>
    <!-- Navigation -->
    
    <!-- Page Content -->
    <div class="container">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item active">Contact</li>
      </ol>

      <!-- Content Row -->
      <div class="row">
        <!-- Map Column -->
        <div class="col-lg-8 mb-4">
          <!-- Embedded Google Map -->
          <div class="clearfix">
            <div id="contact_map"></div>
          </div>
        </div>
        <!-- Contact Details Column -->
        <div class="col-lg-4 mb-4">
          <h3>Contact Details</h3>
          <p>
            Kunjir Shyama Prestige,
            <br>Rahatani link Road, Opp. Vijay Sales,
            <br>Pimple Saudagar, Pune-411027
          </p>
          <p>
            <abbr title="Phone">Ph</abbr>: +91 9130 490 498
          </p>
          <p>
            <abbr title="Email">Email</abbr>:
            <a href="mailto:contact@inportia.com">contact@inportia.com
            </a>
          </p>
          <p>
            <abbr title="Hours">Hrs</abbr>: All 7 Days: 9:00 AM to 9:00 PM
          </p>
        </div>
      </div>
      <!-- /.row -->
      
    </div>
    <!-- /.container -->

    <!-- Social Media Side Bar -->
    <?php
      include 'nastedpage/smediasidebar.php';
    ?>
    <!-- Social Media Side Bar -->

    <!-- Footer -->
    <?php
      include 'nastedpage/footer.php';
    ?>
    <!-- Footer -->

    <!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

    
    <!-- Contact form JavaScript -->
    <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script>
      $(document).ready(function(){        
          singleMap('18.601321', '73.794525');
      });

      function singleMap(latitude, longitude) {
          var location = 'Cross Rd, Scheme No.54, Vijay Nagar, Indore, Madhya Pradesh, India 452010';
          var map = new google.maps.Map(document.getElementById('contact_map'), {
              zoom: 12,
              center: new google.maps.LatLng(latitude, longitude),
              mapTypeId: google.maps.MapTypeId.ROADMAP
          });
          var infowindow = new google.maps.InfoWindow();
          var marker;

          if (location == "") {
              return false;
          }

          marker = new google.maps.Marker({
              position: new google.maps.LatLng(latitude, longitude),
              map: map
          });

          marker.setIcon('http://maps.google.com/mapfiles/ms/icons/red-dot.png');

          var i = 0;
          google.maps.event.addListener(marker, 'click', (function(marker, i) {

              return function() {
                  var str = setMarker(location);
                  infowindow.setContent(str);
                  infowindow.open(map, marker);
              }
          })(marker, i));
      }
      function setMarker(location) {        
          var str = '<div style="width:100%">';
          str += '<div  style="float:left;text-align: center;width:100%;">' + location + '</div>';
          str += '</div>';
          return str;
      }
    </script>
    
  </body>

</html>
