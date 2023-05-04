<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style2.css">
    <title>Warehousing</title>
    <style>
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
        <div class="bg-image">
            <img src = "0000.jfif"style = "width:100%;"height = "600"></div>
                <div class ="top-left">WAREHOUSING</div>
            
        <div class ="main">
            
            <div class = "Warehousing">
                            
                        
                        <br>
                        <div class = "text">
                            <style>
                                p {
                                    padding: 20px;
                                    font-size: 22px;
                                    font-family: 'Fira Sans Condensed', sans-serif;
                                }
                            </style>
                    <p>As special services, Ocean Blue offers to their clients' extra services for 
                        storing their cargoes either inward or outward cargoes this to minimize transportation costs 
                        for traders to forward their cargoes especially if it is a real volume to get the same ready at the port when 
                        vessel get berthed
                         at port for quick loading or discharging operation to achieve agreed loading or discharging rates agreed with ship owners.
                        </p>
                    </div>

                    <img src="Warehouse1.jfif" style="position: relative; left: 25%; height: 280px; margin-top: 15px;">

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
    <script>


        function scrollWindow()
        {
            window.scrollBy({top:800,behavior:"smooth"});
        }
        scrollWindow();







    </script>

	<script src="javascript2.js"></script>
</body>
</html>