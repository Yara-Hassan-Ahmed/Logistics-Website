<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <script src="https://kit.fontawesome.com/ef48839dd5.js" crossorigin="anonymous"></script>
    <title>Home Page</title>
    <style>
        
        .mySlides {display: none;}
        img {vertical-align: middle;}
        
        /* Slideshow container */
        .slideshow-container {
          width: 800px;
          position: relative;
          margin: auto;
        }
        
        /* Caption text */
        .text {
          background-color: rgba(0, 0, 0, 0.486);
          color: #f2f2f2;
          font-size: 15px;
          padding: 15px;
          
          bottom: 0px;
          width: 800px;
          margin: auto;
          font-size: medium;
          text-align: center;
        }
        
        
        /* The dots/bullets/indicators */
        .dot {
          height: 15px;
          width: 15px;
          margin: 0 2px;
          background-color: #bbb;
          border-radius: 60%;
          display: inline-block;
          position: static;
          transition: background-color 0.6s ease;
        }
        
        .active {
          background-color: #717171;
        }
        
        /* Fading animation */
        .fade {
          -webkit-animation-name: fade;
          -webkit-animation-duration: 1.5s;
          animation-name: fade;
          animation-duration: 1.5s;
        }
        
        @-webkit-keyframes fade {
          from {opacity: .4} 
          to {opacity: 1}
        }
        
        @keyframes fade {
          from {opacity: .4} 
          to {opacity: 1}
        }
        
        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 300px) {
          .text {font-size: 11px}
        }
        #myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: rgba(4, 125, 129, 0.767);
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: #555;
}
        </style>
</head>
<body>
  <style>
    body {
      padding: 0px;
      background-color: white;
      color: black;
    }
    
    .dark-mode {
      background-color: rgb(59, 59, 59);
      color: white;
    }
    </style>
    
    <button onclick="myFunction()">Dark mode</button>

    <script>
    function myFunction() {
       var element = document.body;
       element.classList.toggle("dark-mode");
    }
    </script>

  <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
  
<script>
    //Get the button
    var mybutton = document.getElementById("myBtn");
    
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};
    
    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
      } else {
        mybutton.style.display = "none";
      }
    }
    
    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
    </script>
    <div class="header-container">
        <div class="header">
                     
            <div class="links">
                <ul>	
            
                        <li><a href="Home-Page.php"><img src="Oceanblue_logo.png" width = "100" hiegth= "100" alt="Logo"></a></li>
                        
            
                        <li><a  class = "active" href="Home-Page.php">Home</a></li>
                        <li><a href="About-Us.php">About Us</a></li>
                     <div class="subnav">
                           <button class="subnavbtn">Services <i class="fa fa-caret-down"></i></button>
                        <div class="subnav-content">
                                  <a href="Agency.php">Agency</a>
                                  <a href="Chartering.php">Chartering</a>
                                  <a href="Stevadoring.php">Stevadoring</a>
                                  <a href="Warehousing.php">Warehousing</a>
                         </div>
                          </div>
                        <li><a href="Official-Documents.php">Official Documentation</a></li>
                        <li><a href="Map.php">Off Shore Partnerships</a></li>
                        <li><a href="News-Feed.php">News Feed</a></li>
                        <li><a href="Contact-Us.php">Contact Us</a></li>
                   </ul>
            </div>
        </div>
        <div class="home-content-container">


                <h1 id="id1"></h1>
<br><br>
            
                <div class="mySlides fade">
                    <img src="Media/image6.jpg" style="width:800px">
                    <div class="text">Our experience speaks for itself</div>
            </div>
            <div class="mySlides fade">
                <img src="Media/image7.jpg" style="width:800px">
                <div class="text">High services quality is our goal</div>
            </div>

            <div class="mySlides fade">
                <img src="Media/image8.jpg" style="width: 800px">
                <div class="text">Ready to derve at any time</div>
            </div>
        
        <br>
        
        <div style="text-align:center">
          <span class="dot"></span> 
          <span class="dot"></span> 
          <span class="dot"></span> 
        </div>



            </div>

            <div class="home-2">
                <div class="row">
                    
                    <div class="col">
                        <h3>Get to know us more!</h3>
                        <p>You can read more about our company</p>
                        <button class="btn" id="about" title="About Us">About Us</button>
                    </div>
                    <div class="col">
                        <i class="fas fa-newspaper" style="size: 15pt;"></i>
                        <h3>Latest news</h3>
                        <p>You can view our latest activities</p>
                        <button class="btn" id="news" title="News-Feed">News Feed</button>
                        
                    </div>
                    <div class="col">
                        <h3>Our international partners</h3>
                        <p>Open our maps and click on the highlighted countries to know more about our partners</p>
                        <button class="btn" id="map" title="Offshore Partnerships">Offshore Partnerships</button>
                    </div>
                </div>
                <script>
                  document.getElementById("about").onclick = function () {
                      location.href = "About-Us.php";
                  };
                  document.getElementById("news").onclick = function () {
                      location.href = "News-Feed.php";
                  };
                  document.getElementById("map").onclick = function () {
                      location.href = "Map.php";
                  };
              </script>
            </div>
            <div class="home-3">
                <h1>We Are Located Here</h1>
                <iframe id="location" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d852.9647515720623!2d29.95223872919322!3d31.224635398841787!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzHCsDEzJzI4LjciTiAyOcKwNTcnMTAuMCJF!5e0!3m2!1sen!2seg!4v1635884742241!5m2!1sen!2seg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

            </div>
            
        </div>
        <div class="footer-container">
            <div class="footer">
                <div class="footer-heading-1">
                    <h2>Company</h2>
                    <ul>
                        <li><a href="Home-Page.php">Home</a></li>
                        <li><a href="About-Us.php">About us</a></li>
                        <li><a href="Official-Documents.php">Official Documentation</a></li>
                        <li><a href="Contact-Us.php">Contact us</a></li>
    
    
                    </ul>
    
                </div>
                <div class="footer-heading-2">
                    <h2>Services</h2>
                    <ul>
                        <li><a href="Agency.php">Agency</a></li>
                        <li><a href="Chartering.php">Chartering</a></li>
                        <li><a href="Stevadoring.php">Stevadoring</a></li>
                        <li><a href="Warehousing.php">Warehousing</a></li>
    
    
                    </ul>
                </div>
                <div class="footer-heading-3">
                    <h2>Global Shipping</h2>
                    <ul>
                        <li><a href="Turkey.php">Turkey</a></li>
                        <li><a href="Greece.php">Greece</a></li>
                        <li><a href="Netherlands.php">Netherlands</a></li>
                        <li><a href="Belgium.php">Belgium</a></li>
    
    
                    </ul>
                </div>
                <div class="footer-heading-4">
                    <h2>Social Media</h2>
                    <ul>
                        <li><a href="https://www.facebook.com/OceanBlueShipping"><img src="Media/facebook.png" alt="" height="100px" style="border-radius: 50%; padding: 12px;"></a></li>
                        <li><a href="https://twitter.com/OceanBlue_ship"><img src="Media/twitter.png" alt="" height="100px" style="border-radius: 50%; padding: 12px;"></a></li>

    
                    </ul>
                </div>
                
                
            </div>
        </div>

    </div>

    <script>
        var i = 0;
        var txt = ' Welcome to Ocean Blue Shipping company';
        var speed = 50;
    
        typeWriter();
        
        function typeWriter() {
          if (i < txt.length) {
            document.getElementById("id1").innerHTML += txt.charAt(i);
            i++;
            setTimeout(typeWriter, speed);
          }
        }
        </script>

    <script>

      
        var slideIndex = 0;
        showSlides();
        
        function showSlides() {
          var i;
          var slides = document.getElementsByClassName("mySlides");
          var dots = document.getElementsByClassName("dot");
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
          }
          slideIndex++;
          if (slideIndex > slides.length) {slideIndex = 1}    
          for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";  
          dots[slideIndex-1].className += " active";
          setTimeout(showSlides, 2000); // Change image every 2 seconds
        }
        </script>
	
	<script src="javascript2.js"></script>
        
</body>
</html>