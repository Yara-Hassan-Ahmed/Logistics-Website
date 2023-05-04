<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <title>News Feed</title>
    <style>
        
        .mySlides {display: none;}
        img {vertical-align: middle;}
        
        /* Slideshow container */
        .slideshow-container {
          width: 800px;
          position: relative;
          margin: auto;
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
        <div class="content-container" >

                <h1>News Feed</h1><br>

                <?php
                
                  $conn = mysqli_connect("localhost", "root", "", "oceanblue");
                  $res=mysqli_query($conn,"SELECT par,img FROM article ");
                  while($row=mysqli_fetch_array($res))
                  {
                    echo"<img src='img/".$row['img']."'>";
                    echo"<br><br>";
                    echo"<p>".$row['par']."</p>";
                    echo"<br>";
                    echo"<hr>";
                    echo"<br>";


                  }


                
                ?>
                <!-- <div class="mySlides fade">
                    <img src="Media/image5.jpg" >
                    
            </div>
            <div class="mySlides fade">
                <img src="Media/image2.jpg" >
                
            </div>

            <div class="mySlides fade">
                <img src="Media/image6.jpg"  >
            </div>
        
        <br>
        
        <div style="text-align:center">
          <span class="dot"></span> 
          <span class="dot"></span> 
          <span class="dot"></span> 
        </div>

                <br><br>
                
                <p> We do thank Messrs Energyasteel Fabrication Company for using our handling and stevedoring 
                    consultation services.
                    Break bulk - Project cargo handling operations on MV Nabiha Star and Mv Princess Nabiha 
                    at Alexandria port on 04.07.2021 and 14.07.2021. to Iskenderun port - Turkey. 
                </p>
            
                <hr>
                <a>
                    <img src="Media/image7.jpg" width=600px>
                    </a>
                <p> We do thank Yagci shipping our Turkish business partners for using our chartering services.
                    Motor vessel " Gundem Serra " loading 4800 tons steel round bars from Alexandria port to Spain, vessel arrived at Alexandria port on 02.03.2021.
                </p>
                <hr>
                <a>
                    <img src="Media/image8.jpg" width=600px>
                    </a>
                <p> We do thank Messrs / MCCL - Greece for using our chartering services.
                    Project cargo - RoRo and Static cargoes from Alexandria port to Annaba port - Algeria, vessel loaded at Alexandria port on 30.01.2021.
                </p>
                <hr>
                <a>
                    <img src="Media/image9.jpg" width=600px>
                    </a>
                <p> We do thank Mr. Geroge Kavadas and Mccl teamwork for using our chartering fixture and agency services.
                    Friday 18.09.2020 "Mv Sea Amazon" arrived in Alexandria port at 07:00 AM 
                    loading RoRo and Static Break Bulk Cargo from Alexandria to Annaba - Algeria for our Client Bertling logistics - Egypt.
                </p>

                <hr>
                <a>
                    <img src="Media/image10.jpg" width=600px>
                    </a>
                <p> We do thank owners Messrs " Spliethoff B.V." for using our chartering services.
                    Mv Fortunagracht loading 8500 to bentonite in bulk from port Thunder Bay - Great Lakes , Canada to Alexandria port - 
		            Egypt, vessel loaded at port on 24-25.06.2020.
                </p>

                <hr>
                <a>
                    <img src="Media/image12.jpg" width=600px>
                    </a>
                <p> We do thank owners and Yagci shipping Istanbul for using our chartering services.
                    Mv Gundem Serra loaded from Alexandria port to Tarragona + Pasajes ports (Spain). 
                    Vessel discharged her cargo safe at second discharging port on 30.03.2020
                </p> -->

           


            
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

	<script src="javascript2.js"></script>
</body>
</html>