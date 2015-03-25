<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="description" content="Austin's Strawberries" />
    <meta name="keywords" content="berry, strawberry, raspberry, seeds, pioneer, agriculture, produce, local, vegetables, fruit" />
    <meta name="viewport" content="width=device-width">
    <title>Austin's Strawberries</title>
    <link rel="icon" type="image/icon" href="assets/favicon.ico">
    <link rel="stylesheet" type="text/css" href="css/styles.css"/>

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-47530341-2', 'austinspickyourown.com');
        ga('send', 'pageview');
    </script>
    <script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCJzmzjqgA4k4S_sNOZcNq5C7DZsa9HBVA">
    </script>
    <script type="text/javascript">
      function initialize() {
        var mapOptions = {
          center: { lat: 42.965063, lng: -80.259830},
          zoom: 9
        };
        var map = new google.maps.Map(document.getElementById('map-canvas'),
            mapOptions);
        var marker = new google.maps.Marker({
            position: { lat: 42.965063, lng: -80.259830},
            map: map,
            title: "Austin's PYO"
        });
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
</head>

<body>
    <!-- Facebook graph -->
    <!--<script>
      window.fbAsyncInit = function() {
        FB.init({
          appId      : '671178789694012',
          xfbml      : true,
          version    : 'v2.1'
        });
        /* make the API call */
        FB.api(
            "/137912086409500/feed",
            function (response) {
              if (response && !response.error) {
                /* handle the result */
              }
            }
        );
      };

      (function(d, s, id){
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) {return;}
         js = d.createElement(s); js.id = id;
         js.src = "//connect.facebook.net/en_US/sdk.js";
         fjs.parentNode.insertBefore(js, fjs);
       }(document, 'script', 'facebook-jssdk'));
    </script>-->
    <!-- Facebook graph end -->

    <!-- <div id="fb-root"></div>  -->

    <!-- Header module begins -->
    <header>
        <div class="logo">
        <img src="images/logo.png"/>
        </div>
        <img src="images/years-in-produce.png"/>
        <nav>
            <a href="our-approach">M&S Seed</a>
            <a href="services">Contact</a>
            <a href="about">Produce</a>
            <a href="contact">Our Story</a>            
        </nav>
    </div>
    </header>
    <!-- Header module ends -->

    <div class="hero">
        <img src="images/hero.png"/>
    </div>

    <!-- <div class="leaves">
        <img src="images/grunge-leaves.png"/>
    </div> -->
    
    <!-- Content module begins -->
    <div class="content-container">
        <!-- main content module -->
        <section class="main">
            <div class="main-card">
                <img src="images/clock.png"/>
                <h3>Hours of operation</h3>
                <p>Cockshutt Road-side Stand:</p>
                <p>10am - 6pm</p>
                <p>Pick-Your-Own Berries:</p>
                <P>8am - 8pm</p>
            </div>
            <div class="main-card">
                <img src="images/envelope.png"/>
                <h3>How to contact us</h3>
                <p>Cockshutt Road-side Stand:</p>
            </div>
            <div class="fb-news-container">
                <h2>Tasty </h2><h2>News!</h2>
                <div id="fb-news">
                    Loading...
                </div>
            </div>
        </section>
        <!-- main content module ends -->

        <!-- our family story module -->
        <section>
            <div class="copy">
                <h2><img src="images/family-story.png"/></h2>
                <h3>Originated by the family of Glen and Jean Austin, the farm has been providing Norfolk with pre-picked and pick your own produce for 36 years. </h3>
                <p>The farm was sold to Mark and Maureen Sloot, nee Austin, who have been operating it with their three children for 16 years.The family specialized in strawberries but expanded into different crops to meet the substantial requests of their customers. The farm is conveniently located south of Boston, Ontario on Cockshutt Road. The farm is simply minutes from Hamilton, highway 403 and Port Dover.Austin's Pick Your Own takes pride in maintaining locally grown and produced fruits and vegetables for their road-side stand that you can buy with piece of mind.</p>
            </div>
            <div class="image">
                <img src="images/berry-bowl.png"/>
            </div>
        </section>
        <!-- our family story module -->

        <!-- our produce module -->
        <section class="alt-section">
            <h2><img src="images/fresh-produce.png"/></h2>
            <p>Pellentesque id sollicitudin enim. Cras sodales sit amet nibh eu tempor. Quisque viverra vel libero et consectetur. Vivamus nisi ex, gravida vel imperdiet et, mollis sed nunc.</p>
            <ul class="produce-list">
                <li>
                    <img src=""/>
                    <h3>Asparagus</h3>
                    <p>May</p>
                </li>
                <li>
                    <img src=""/>
                    <h3>Apples</h3>
                    <p>September</p>
                </li>
                <li>
                    <img src=""/>
                    <h3>Beets</h3>
                    <p>July</p>
                </li>
                <li>
                    <img src=""/>
                    <h3>Green/yello beans</h3>
                    <p>June, July, August</p>
                </li>
                <li>
                    <img src=""/>
                    <h3>Pears</h3>
                    <p>September</p>
                </li>
                <li>
                    <img src=""/>
                    <h3>Peppers</h3>
                    <p>August</p>
                </li>
                <li>
                    <img src=""/>
                    <h3>Plums</h3>
                    <p>September</p>
                </li>
                <li>
                    <img src=""/>
                    <h3>Pumpkins/Squash</h3>
                    <p>September, October</p>
                </li>
                <li>
                    <img src=""/>
                    <h3>Raspberries</h3>
                    <p>June, July</p>
                </li>
                <li>
                    <img src=""/>
                    <h3>Strawberries</h3>
                    <p>June, July</p>
                </li>
                <li>
                    <img src=""/>
                    <h3>Sweet Corn</h3>
                    <p>July, August, September</p>
                </li>
            </ul>
        </section>
        <!-- our product module ends -->

        <!-- M&S seeds module -->
        <section>
            <div class="copy">
                <h2><img src="images/ms-seed.png"/></h2>
                <h3>OrDonec nec convallis mauris. Maecenas et massa dolor. Cras cursus dolor ac auctor ullamcorper Mauris.</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vulputate, metus at eleifend fringilla, diam lacus venenatis augue, sollicitudin semper tortor leo non magna. Nam pulvinar rhoncus pharetra. Donec ac lacus quam. Nulla iaculis facilisis molestie. Phasellus luctus mollis ipsum, volutpat tristique orci lacinia sed. Morbi pulvinar eget metus et maximus. Vivamus pulvinar porttitor leo, nec scelerisque justo ultrices quis.</p>
            </div>
            <div class="image">
                <img src="images/corn.jpg"/>
            </div>
        </section>
        <!-- M&S seeds module ends -->

        <!-- contact us module -->
        <section class="alt-section">
            <div class="map">
                <!-- <iframe width="600" height="450" frameborder="0" style="border:0"
                src="https://www.google.com/maps/embed/v1/place?q=2591+Cockshutt+Road,+Waterford,+Ontario+N0E+1Y0,+Canada&key=AIzaSyCJzmzjqgA4k4S_sNOZcNq5C7DZsa9HBVA"></iframe> -->
                <div id="map-canvas"></div>
            </div>
            <div class="directions">
                <h2><img src="images/get-in-touch.png"/>
                <form>
                    <label for="saddr">Enter your location</label>
                    <input type="text" name="saddr" />
                    <input type="hidden" name="daddr" value="2591 Cockshutt Road, Waterford, Ontario N0E 1Y0, Canada" /></button>
                    <button onclick="calcRoute()">Get directions</button>
                </form>
            </div>
        </section>
        <!-- contact us module ends -->

        <!-- Footer module begins -->
        <footer>
            <p><a href="#">Back to top</a></p>
            <p>&copy; <?php echo date("Y"); ?> AUSTIN'S PICK YOUR OWN. All rights reserved.</p>
        </footer>
        <!-- Footer module ends -->
    </div>
    <!-- Content module ends -->
    
    
    <!-- Footer scripts -->
    <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="js/scripts.js"></script>
    
</body>
</html>