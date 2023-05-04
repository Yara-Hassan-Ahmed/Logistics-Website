<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="stylegreece.css">
    <title>Greece</title>
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
                    			
					<div class="active">
					<li><a href="Home-Page.php">Home</a></li></div>
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

        

   	</div>
	<div class = "bg-image">
		<img src = "0000.jfif"style = "width:100%;"height = "600">
	</div>
	<div class ="top-left">Shipping From And To Greece</div>
	<style>
        * {box-sizing: border-box}
        body {font-family: "Lato", sans-serif;}
        
        /* Style the tab */
        .tab {
          float: left;
          border: 1px solid rgba(0, 153, 255, 0.466);
          background-color: rgba(0, 153, 255, 0.253);
          width: 30%;
          height: 300px;
        }
        
        /* Style the buttons inside the tab */
        .tab button {
          display: block;
          background-color: inherit;
          color: black;
          padding: 22px 16px;
          width: 100%;
          border: none;
          outline: none;
          text-align: left;
          cursor: pointer;
          font-size: 20px;
        }
        
        /* Change background color of buttons on hover */
        .tab button:hover {
          background-color: rgba(3, 66, 109, 0.253);
        }
        
        /* Create an active/current "tab button" class */
        .tab button.active {
          background-color: rgba(3, 66, 109, 0.253);
        }
        
        /* Style the tab content */
        .tabcontent {
          float: left;
          padding: 0px 12px;
          border: 1px solid rgba(3, 66, 109, 0.253);
          width: 70%;
          border-left: none;
          height: 300px;
          display: none;
        }
        
        /* Clear floats after the tab */
        .clearfix::after {
          content: "";
          clear: both;
          display: table;
        }
        </style>
        <div class="tab">
            <button class="tablinks" onmouseover="openCity(event, 'Athens port')">Athens port</button>
            <button class="tablinks" onmouseover="openCity(event, 'MCCL')">MCCL</button>
          </div>
          
          <div id="Athens port" class="tabcontent">
            <h3>Athens port</h3>
            <img src = "limani-02.jpg"width = 200>  
            <p>Piraeus is the main port of Athens and the city's gateway to the islands of the Aegean. It is the largest port in Greece and the busiest in Europe, with approximately 20 million passengers passing through per year. There are daily ferry crossings from the port of Piraeus to the Saronic islands, the Cyclades, Crete, the Dodecanese and the North Aegean islands.</p>
            
        </div>
          
          <div id="MCCL" class="tabcontent">
            <h3>MCCL</h3>
            <img src = "logo.png"width = "200">
            <p>Mccl is exclusively specialized in the sea transportation of vehicles and rolling materials. Sea Transportation is performed by owned and chartered vessels of pure car-carrier and Ro-Ro types.The Company is exclusively specialized in the sea transportation of vehicles and rolling materials whilst the sea Transportation is performed by pure car-carrier and Ro-Ro, owned and chartered vessels.</p> 
          </div>
          
         
          <div class="clearfix"></div>
          
          <script>
          function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
              tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
              tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
          }
          </script>

<div class="footer-container" >
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
                    <li><a href="https://www.facebook.com/OceanBlueShipping"><img src="facebook.png" alt="" height="100px" style="border-radius: 50%; padding: 12px;"></a></li>
                    <li><a href="https://twitter.com/OceanBlue_ship"><img src="twitter.png" alt="" height="100px" style="border-radius: 50%; padding: 12px;"></a></li>


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