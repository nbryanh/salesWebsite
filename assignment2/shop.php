<?php

	session_start();

	require'config.php';

?>



<!DOCTYPE html> 
<html> 
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='d.css'>
	<script src="jquery-3.3.1.js"></script>	
	<script src="index.js"></script>
    <title>Index Page</title>
  </head>
  
  <body>
    <header>  
		<strong class='title'>B&R PC</strong>
		<a class='personal' href='#cart'><button>View Cart</button></a>
      <form class='ser'> 
        <input class='search-bar' type='text' placeholder='Search..' name='search'>
        <button class ="search-btn">Search</button>
      </form>
    </header>
	<div id="main">
      <nav> 
        <a href='home'>Home</a>
		<a href='cpu'>CPU</a>
		<a href='gpu'>GPU</a>
		<a href='motherboard'>Motherboard</a>
		<a href='ram'>RAM</a>
		<a href='psu'>Power Supply</a>
		<a href='monitor'>Monitor</a>
		<a href='pccase'>PC Case</a>
		<a href='cpucooling'>CPU Cooling</a>
		<a href='mouse'>Mouse</a>
		<a href='keyboard'>Keyboard</a>
		<a href='profile'>Profile</a>
		<a id='login' onclick="document.getElementById('id02').style.display='block'">Register</a>
		<a id='login' onclick="document.getElementById('id01').style.display='block'">Login</a>
      </nav>
	</div>
	
	<div id="id01" class="loginModal">
    <form class="loginModal-content animate" action="loginModel.php" method="post">
       
        <div class="imgcontainer">
          <h2>Login Form</h2>
          <img src="img/anonymous.jpeg" alt="anonymous" class="anonymous">
        </div>
    
        <div class="container1">
          <label for="uname"><b>Username</b></label>
          <input id="username" type="text" placeholder="Enter Username" name="uname" required>
    
          <label for="psw"><b>Password</b></label>
          <input id="password" type="password" placeholder="Enter Password" name="psw" required>
            
          <button class="login" type="submit" onclick="document.getElementById('id01').style.display='block'">Login</button>
          <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
          </label>
        </div>
    
        <div class="container1" style="background-color:#f1f1f1">
          <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        </div>
      </form>
    </div>
	
	<div id="id02" class="registerModal">
        <form class="registerModal-content animate" action="registerModel.php" method="post">
          
            <div class="imgcontainer">
              <h2>Registration Form</h2>
              <img src="img/anonymous.jpeg" alt="anonymous" class="anonymous">
            </div>
        
            <div class="container1">
              <label for="uname"><b>Username</b></label>
              <input type="text" placeholder="Enter Username" name="uname" required>
			  
			  <label for="email"><b>Contact e-mail</b></label>
              <input type="text" placeholder="eg: b&rpc@gmail.com" name="email" >
        
              <label for="psw"><b>Password</b></label>
              <input type="password" placeholder="Enter New Password" name="psw" required>
              
              <label for="psw"><b>Confirm Password</b></label>
              <input type="password" placeholder="Confirm your Password" name="psw" required>

              <button class="login" type="submit" style="background-color: darkblue">Resister</button>
              
            </div>
        
            <div class="container1" style="background-color:#f1f1f1">
              <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
              
            </div>
          </form>
          </div>
		  
		  
	<article id='home'>
	  <div class='row'>
	    <div class='column'>
	      <div class='card' style='width: 18rem;'>
	        <img class='image' src='img/inteli5.jpg' alt='intel i5'>
	        <div class='card-body'>
	          <h5 class='card-title'>Intel i5</h5>
			  <p class='card-text'>With intelligent performance that accelerates in response to demanding tasks..</p>
			  <p><a href='#i5'><button>View Item</button></a></p>
			</div>
		  </div>
		</div>
		<div class='column'>
		  <div class='card' style='width: 18rem;'>
		    <img class='image' src='img/inteli7.jpg' alt='intel i7'>
			<div class='card-body'>
			  <h5 class='card-title'>Intel i7</h5>
			  <p class='card-text'>With faster, intelligent, multi-core technology that applies processing power where it's needed most..</p>
			  <p><button onclick="document.getElementById('it01').style.display='block'">View Item</button></p>
			</div>
		  </div>
		</div>
		<div class='column'>
		  <div class='card' style='width: 18rem;'>
		    <img class='image' src='img/inteli9.jpg' alt='intel i9'>
			<div class='card-body'>
			  <h5 class='card-title'>Intel i9</h5>
			  <p class='card-text'>Whether you are working on your latest feature film or the next episode of a YouTube series..</p>
			  <p><button onclick="document.getElementById('it01').style.display='block'">View Item</button></p>
			</div>
		  </div>
		</div>
		<div class='column'>
		  <div class='card' style='width: 18rem;'>
		    <img class='image' src='img/2080.jpg' alt='MSI RTX 2080TI'>
			<div class='card-body'>
			  <h5 class='card-title'>MSI RTX 2080 TI</h5>
			  <p class='card-text'>When it comes to next-gen gaming, it's all about realism. GeForce RTX 2080 is..</p>
			  <p><button onclick="document.getElementById('it01').style.display='block'">View Item</button></p>
			</div>
		  </div>
		</div>
		<div class='column'>
		  <div class='card' style='width: 18rem;'>
		    <img class='image' src='img/2060.jpg' alt='ASUS ROG RTX 2060'>
			<div class='card-body'>
			  <h5 class='card-title'>ASUS ROG RTX 2060</h5>
			  <p class='card-text'>The ROG Strix GeForce RTX 2060 Super teams up NVIDIA's A-list GPU with an elite cast of specialists..</p>
			  <p><button onclick="document.getElementById('it01').style.display='block'">View Item</button></p>
			</div>
		  </div>
		</div>
		<div class='column'>
		  <div class='card' style='width: 18rem;'>
		    <img class='image' src='img/1660.jpg' alt='Gigabyte GTX 1660 TI'>
			<div class='card-body'>
			  <h5 class='card-title'>Gigabyte GTX 1660 TI</h5>
			  <p class='card-text'>WINDFORCE 2X cooling system features 2x 90mm unique blade fans, alternate spinning fan..</p>
			  <p><button onclick="document.getElementById('it01').style.display='block'">View Item</button></p>
			</div>
		  </div>
		</div>
		<div class='column'>
		  <div class='card' style='width: 18rem;'>
		    <img class='image' src='img/B365M.jpg' alt='ASRock B365M Phantom Gaming 4'>
			<div class='card-body'>
			  <h5 class='card-title'>ASRock B365M Phantom Gaming 4</h5>
			  <p class='card-text'>Prepare yourself well to enjoy the impressive world of Virtual Reality. Before that..</p>
			  <p><button onclick="document.getElementById('it01').style.display='block'">View Item</button></p>
			</div>
		  </div>
		</div>
		<div class='column'>
		  <div class='card' style='width: 18rem;'>
		    <img class='image' src='img/Crosshair.jpg' alt='ASUS ROG Crosshair VIII Formula AM4 ATX'>
			<div class='card-body'>
			  <h5 class='card-title'>ASUS ROG Crosshair VIII Formula AM4 ATX</h5>
			  <p class='card-text'>ROG has partnered with EK Water Blocks to create an integrated VRM water-cooling solution that..</p>
			  <p><button onclick="document.getElementById('it01').style.display='block'">View Item</button></p>
			</div>
		  </div>
		</div>
		<div class='column'>
		  <div class='card' style='width: 18rem;'>
		    <img class='image' src='img/X399.jpg' alt='Gigabyte X399 AORUS XTREME'>
			<div class='card-body'>
			  <h5 class='card-title'>Gigabyte X399 AORUS XTREME</h5>
			  <p class='card-text'>Do everything, do it all at the same time, and do it without sacrificing responsiveness..</p>
			  <p><button onclick="document.getElementById('it01').style.display='block'">View Item</button></p>
			</div>
		  </div>
		</div>
		<div class='column'>
		  <div class='card' style='width: 18rem;'>
		    <img class='image' src='img/HyperX.jpg' alt='HyperX 8gb'>
			<div class='card-body'>
			  <h5 class='card-title'>HyperX 8gb</h5>
			  <p class='card-text'>HyperX® FURY DDR4 can handle even the toughest battle. It automatically recognises its..</p>
			  <p><button onclick="document.getElementById('it01').style.display='block'">View Item</button></p>
			</div>
		  </div>
		</div>
		<div class='column'>
		  <div class='card' style='width: 18rem;'>
		    <img class='image' src='img/Vengeance.jpg' alt='Corsair Vengeance 16gb'>
			<div class='card-body'>
			  <h5 class='card-title'>Corsair Vengeance 16gb</h5>
			  <p class='card-text'>CORSAIR VENGEANCE RGB PRO Series DDR4 overclocked memory lights up your PC with ..</p>
			  <p><button onclick="document.getElementById('it01').style.display='block'">View Item</button></p>
			</div>
		  </div>
		</div>
		<div class='column'>
		  <div class='card' style='width: 18rem;'>
		    <img class='image' src='img/TridentZ.jpg' alt='G.Skill Trident Z 32gb'>
			<div class='card-body'>
			  <h5 class='card-title'>G.Skill Trident Z 32gb</h5>
			  <p class='card-text'>Trident Z RGB retains the iconic design element of the traditional Trident Z lineup – featuring..</p>
			  <p><button onclick="document.getElementById('it01').style.display='block'">View Item</button></p>
			</div>
		  </div>
		</div>
		<div class='column'>
		  <div class='card' style='width: 18rem;'>
		    <img class='image' src='img/700.jpg' alt='eVGA 700 80 plus gold'>
			<div class='card-body'>
			  <h5 class='card-title'>eVGA 700 80 plus gold</h5>
			  <p class='card-text'>The EVGA GD Series of power supplies builds upon a Solid Gold Foundation..</p>
			  <p><button onclick="document.getElementById('it01').style.display='block'">View Item</button></p>
			</div>
		  </div>
		</div>
		<div class='column'>
		  <div class='card' style='width: 18rem;'>
		    <img class='image' src='img/450.jpg' alt='eVGA 450 80 plus gold'>
			<div class='card-body'>
			  <h5 class='card-title'>eVGA 450 80 plus gold</h5>
			  <p class='card-text'>A premium quality power supply designed with enthusiasts in mind..</p>
			  <p><button onclick="document.getElementById('it01').style.display='block'">View Item</button></p>
			</div>
		  </div>
		</div>
		<div class='column'>
		  <div class='card' style='width: 18rem;'>
		    <img class='image' src='img/650.jpg' alt='Cooler Master 650 80 plus gold'>
			<div class='card-body'>
			  <h5 class='card-title'>Cooler Master 650 80 plus gold</h5>
			  <p class='card-text'>Cooler Master's family of power options features a line of stable, high quality power supplies..</p>
			  <p><button onclick="document.getElementById('it01').style.display='block'">View Item</button></p>
			</div>
		  </div>
		</div>
		<div class='column'>
		  <div class='card' style='width: 18rem;'>
		    <img class='image'src='img/asus.jpg' alt='ASUS ROG Swift PG349Q'>
			<div class='card-body'>
			  <h5 class='card-title'>ASUS ROG Swift PG349Q</h5>
			  <p class='card-text'>The Swift PG349Q expands your scope, allowing faster target acquisition while increasing ..</p>
			  <p><button onclick="document.getElementById('it01').style.display='block'">View Item</button></p>
			</div>
		  </div>
		</div>
		<div class='column'>
		  <div class='card' style='width: 18rem;'>
		    <img class='image' src='img/Predator.jpg' alt='Acer Predator X27'>
			<div class='card-body'>
			  <h5 class='card-title'>Acer Predator X27</h5>
			  <p class='card-text'>Fasten your seatbelt: The Predator X27 4K Ultra HD display is about to change your gaming experiences..</p>
			  <p><button onclick="document.getElementById('it01').style.display='block'">View Item</button></p>
			</div>
		  </div>
		</div>
		<div class='column'>
		  <div class='card' style='width: 18rem;'>
		    <img class='image' src='img/AOC.jpg' alt='AOC C27G1'>
			<div class='card-body'>
			  <h5 class='card-title'>AOC C27G1</h5>
			  <p class='card-text'>The AOC C27G1 has a 1800R curved, frameless 27” VA panel in Full HD with 144 Hz refresh rate..</p>
			  <p><button onclick="document.getElementById('it01').style.display='block'">View Item</button></p>
			</div>
		  </div>
		</div>
		<div class='column'>
		  <div class='card' style='width: 18rem;'>
		    <img class='image' src='img/H400i.jpg' alt='NZXT H400i'>
			<div class='card-body'>
			  <h5 class='card-title'>NZXT H400i</h5>
			  <p class='card-text'>The H400i showcases NZXT's vision for modern PC building. This premium..</p>
			  <p><button onclick="document.getElementById('it01').style.display='block'">View Item</button></p>
			</div>
		  </div>
		</div>
		<div class='column'>
		  <div class='card' style='width: 18rem;'>
		    <img class='image' src='img/Carbide.jpg' alt='Corsair Carbide SPEC OMEGA'>
			<div class='card-body'>
			  <h5 class='card-title'>Corsair Carbide SPEC OMEGA</h5>
			  <p class='card-text'>The Carbide Series SPEC-OMEGA is a mid-tower PC case with striking angular looks, unique ..</p>
			  <p><button onclick="document.getElementById('it01').style.display='block'">View Item</button></p>
			</div>
		  </div>
		</div>
		<div class='column'>
		  <div class='card' style='width: 18rem;'>
		    <img class='image' src='img/Matrexx.jpg' alt='Deepcool Matrexx 55'>
			<div class='card-body'>
			  <h5 class='card-title'>Deepcool Matrexx 55</h5>
			  <p class='card-text'>Full sized 4mm thickness, tempered glass side panel and a front panel give the case a..</p>
			  <p><button onclick="document.getElementById('it01').style.display='block'">View Item</button></p>
			</div>
		  </div>
		</div>
		<div class='column'>
		  <div class='card' style='width: 18rem;'>
		    <img class='image' src='img/ML240R.jpg' alt='Cooler Master MasterLiquid ML240R'>
			<div class='card-body'>
			  <h5 class='card-title'>Cooler Master MasterLiquid ML240R</h5>
			  <p class='card-text'>The PPS and glass fiber construction resists a broad range of chemicals and is unaffected by ..</p>
			  <p><button onclick="document.getElementById('it01').style.display='block'">View Item</button></p>
			</div>
		  </div>
		</div>
		<div class='column'>
		  <div class='card' style='width: 18rem;'>
		    <img class='image' src='img/H100i.jpg' alt='Corsair Hydro H100i'>
			<div class='card-body'>
			  <h5 class='card-title'>Corsair Hydro H100i</h5>
			  <p class='card-text'>The CORSAIR Hydro Series H100i RGB PLATINUM is an all-in-one liquid CPU cooler with a ..</p>
			  <p><button onclick="document.getElementById('it01').style.display='block'">View Item</button></p>
			</div>
		  </div>
		</div>
		<div class='column'>
		  <div class='card' style='width: 18rem;'>
		    <img class='image' src='img/X62.jpg' alt='NZXT Kraken X62'>
			<div class='card-body'>
			  <h5 class='card-title'>NZXT Kraken X62</h5>
			  <p class='card-text'>The Kraken Series features the most advanced controls ever to be included in an all-in-one liquid cooler..</p>
			  <p><button onclick="document.getElementById('it01').style.display='block'">View Item</button></p>
			</div>
		  </div>
		</div>
		<div class='column'>
		  <div class='card' style='width: 18rem;'>
		    <img class='image' src='img/Mamba.jpg' alt='Razer Mamba'>
			<div class='card-body'>
			  <h5 class='card-title'>Razer Mamba</h5>
			  <p class='card-text'>Here’s one for the fans. The Razer Mamba Elite is the iconic gaming mouse you know and love with ..</p>
			  <p><button onclick="document.getElementById('it01').style.display='block'">View Item</button></p>
			</div>
		  </div>
		</div>
		<div class='column'>
		  <div class='card' style='width: 18rem;'>
		    <img class='image' src='img/GPRO.jpg' alt='Logitech G PRO wireless'>
			<div class='card-body'>
			  <h5 class='card-title'>Logitech G PRO wireless</h5>
			  <p class='card-text'>PRO Wireless was designed to be the ultimate gaming mouse for esports professionals. Logitech collaborated with..</p>
			  <p><button onclick="document.getElementById('it01').style.display='block'">View Item</button></p>
			</div>
		  </div>
		</div>
		<div class='column'>
		  <div class='card' style='width: 18rem;'>
		    <img class='image' src='img/Rival.jpg' alt='SteelSeries Rival 650'>
			<div class='card-body'>
			  <h5 class='card-title'>SteelSeries Rival 650</h5>
			  <p class='card-text'>The first true performance wireless gaming mouse is here. The rival 650 wireless features ..</p>
			  <p><button onclick="document.getElementById('it01').style.display='block'">View Item</button></p>
			</div>
		  </div>
		</div>
		<div class='column'>
		  <div class='card' style='width: 18rem;'>
		    <img class='image' src='img/Blackwidow.jpg' alt='Razer Blackwidow'>
			<div class='card-body'>
			  <h5 class='card-title'>Razer Blackwidow</h5>
			  <p class='card-text'>Since its inception, the Razer BlackWidow name has been synonymous not just with precision but also ..</p>
			  <p><button onclick="document.getElementById('it01').style.display='block'">View Item</button></p>
			</div>
		  </div>
		</div>
		<div class='column'>
		  <div class='card' style='width: 18rem;'>
		    <img class='image' src='img/G915.jpg' alt='Logitech G915 '>
			<div class='card-body'>
			  <h5 class='card-title'>Logitech G915 </h5>
			  <p class='card-text'>G915 features pro-grade LIGHTSPEED wireless that achieves super-fast 1 ms performance. It’s the ..</p>
			  <p><button onclick="document.getElementById('it01').style.display='block'">View Item</button></p>
			</div>
		  </div>
		</div>
		<div class='column'>
		  <div class='card' style='width: 18rem;'>
		    <img class='image' src='img/K65.jpg' alt='Corsair K65'>
			<div class='card-body'>
			  <h5 class='card-title'>Corsair K65</h5>
			  <p class='card-text'>With virtually unlimited customization directly integrated into Corsair's legendary construction, the LUX line of gaming keyboards is the ..</p>
			  <p><button onclick="document.getElementById('it01').style.display='block'">View Item</button></p>
			</div>
		  </div>
		</div>
	  </div>
	</article>
	
	<article id='cpu' hidden='hidden'>
	  <div class='row'>
	    <div class='column'>
	      <div class='card' style='width: 18rem;'>
	        <img class='image' src='img/inteli5.jpg' alt='intel i5'>
	        <div class='card-body'>
	          <h5 class='card-title'>Intel i5</h5>
			  <p class='card-text'>With intelligent performance that accelerates in response to demanding tasks..</p>
			  <p><button onclick="document.getElementById('it01').style.display='block'">View Item</button></p>
			</div>
		  </div>
		</div>
		<div class='column'>
		  <div class='card' style='width: 18rem;'>
		    <img class='image' src='img/inteli7.jpg' alt='intel i7'>
			<div class='card-body'>
			  <h5 class='card-title'>Intel i7</h5>
			  <p class='card-text'>With faster, intelligent, multi-core technology that applies processing power where it's needed most..</p>
			  <p><button onclick="document.getElementById('it01').style.display='block'">View Item</button></p>
			</div>
		  </div>
		</div>
		<div class='column'>
		  <div class='card' style='width: 18rem;'>
		    <img class='image' src='img/inteli9.jpg' alt='intel i9'>
			<div class='card-body'>
			  <h5 class='card-title'>Intel i9</h5>
			  <p class='card-text'>Whether you are working on your latest feature film or the next episode of a YouTube series..</p>
			  <p><button onclick="document.getElementById('it01').style.display='block'">View Item</button></p>
			</div>
		  </div>
		</div>
	  </div>
	</article>
	
	<article id='gpu' hidden='hidden'>
	  <div class='column'>
		  <div class='card' style='width: 18rem;'>
		    <img class='image' src='img/2080.jpg' alt='MSI RTX 2080TI'>
			<div class='card-body'>
			  <h5 class='card-title'>MSI RTX 2080 TI</h5>
			  <p class='card-text'>When it comes to next-gen gaming, it's all about realism. GeForce RTX 2080 is..</p>
			  <p><button onclick="document.getElementById('it01').style.display='block'">View Item</button></p>
			</div>
		  </div>
		</div>
		<div class='column'>
		  <div class='card' style='width: 18rem;'>
		    <img class='image' src='img/2060.jpg' alt='ASUS ROG RTX 2060'>
			<div class='card-body'>
			  <h5 class='card-title'>ASUS ROG RTX 2060</h5>
			  <p class='card-text'>The ROG Strix GeForce RTX 2060 Super teams up NVIDIA's A-list GPU with an elite cast of specialists..</p>
			  <p><button onclick="document.getElementById('it01').style.display='block'">View Item</button></p>
			</div>
		  </div>
		</div>
		<div class='column'>
		  <div class='card' style='width: 18rem;'>
		    <img class='image' src='img/1660.jpg' alt='Gigabyte GTX 1660 TI'>
			<div class='card-body'>
			  <h5 class='card-title'>Gigabyte GTX 1660 TI</h5>
			  <p class='card-text'>WINDFORCE 2X cooling system features 2x 90mm unique blade fans, alternate spinning fan..</p>
			  <p><button onclick="document.getElementById('it01').style.display='block'">View Item</button></p>
			</div>
		  </div>
		</div>
	  </div>
	</article>
	
	<article id='motherboard' hidden='hidden'>
	  <div class='column'>
		  <div class='card' style='width: 18rem;'>
		    <img class='image' src='img/B365M.jpg' alt='ASRock B365M Phantom Gaming 4'>
			<div class='card-body'>
			  <h5 class='card-title'>ASRock B365M Phantom Gaming 4</h5>
			  <p class='card-text'>Prepare yourself well to enjoy the impressive world of Virtual Reality. Before that..</p>
			  <p><button onclick="document.getElementById('it01').style.display='block'">View Item</button></p>
			</div>
		  </div>
		</div>
		<div class='column'>
		  <div class='card' style='width: 18rem;'>
		    <img class='image' src='img/Crosshair.jpg' alt='ASUS ROG Crosshair VIII Formula AM4 ATX'>
			<div class='card-body'>
			  <h5 class='card-title'>ASUS ROG Crosshair VIII Formula AM4 ATX</h5>
			  <p class='card-text'>ROG has partnered with EK Water Blocks to create an integrated VRM water-cooling solution that..</p>
			  <p><button onclick="document.getElementById('it01').style.display='block'">View Item</button></p>
			</div>
		  </div>
		</div>
		<div class='column'>
		  <div class='card' style='width: 18rem;'>
		    <img class='image' src='img/X399.jpg' alt='Gigabyte X399 AORUS XTREME'>
			<div class='card-body'>
			  <h5 class='card-title'>Gigabyte X399 AORUS XTREME</h5>
			  <p class='card-text'>Do everything, do it all at the same time, and do it without sacrificing responsiveness..</p>
			  <p><button onclick="document.getElementById('it01').style.display='block'">View Item</button></p>
			</div>
		  </div>
		</div>
	  </div>
	</article>
	
	<article id='ram' hidden='hidden'>
	  <div class='column'>
		  <div class='card' style='width: 18rem;'>
		    <img class='image' src='img/HyperX.jpg' alt='HyperX 8gb'>
			<div class='card-body'>
			  <h5 class='card-title'>HyperX 8gb</h5>
			  <p class='card-text'>HyperX® FURY DDR4 can handle even the toughest battle. It automatically recognises its..</p>
			  <p><button onclick="document.getElementById('it01').style.display='block'">View Item</button></p>
			</div>
		  </div>
		</div>
		<div class='column'>
		  <div class='card' style='width: 18rem;'>
		    <img class='image' src='img/Vengeance.jpg' alt='Corsair Vengeance 16gb'>
			<div class='card-body'>
			  <h5 class='card-title'>Corsair Vengeance 16gb</h5>
			  <p class='card-text'>CORSAIR VENGEANCE RGB PRO Series DDR4 overclocked memory lights up your PC with ..</p>
			  <p><button onclick="document.getElementById('it01').style.display='block'">View Item</button></p>
			</div>
		  </div>
		</div>
		<div class='column'>
		  <div class='card' style='width: 18rem;'>
		    <img class='image' src='img/TridentZ.jpg' alt='G.Skill Trident Z 32gb'>
			<div class='card-body'>
			  <h5 class='card-title'>G.Skill Trident Z 32gb</h5>
			  <p class='card-text'>Trident Z RGB retains the iconic design element of the traditional Trident Z lineup – featuring..</p>
			  <p><button onclick="document.getElementById('it01').style.display='block'">View Item</button></p>
			</div>
		  </div>
		</div>
	  </div>
	</article>
	
	<article id='psu' hidden='hidden'>
	  <div class='row'>
	    <div class='column'>
		  <div class='card' style='width: 18rem;'>
		    <img class='image' src='img/700.jpg' alt='eVGA 700 80 plus gold'>
			<div class='card-body'>
			  <h5 class='card-title'>eVGA 700 80 plus gold</h5>
			  <p class='card-text'>The EVGA GD Series of power supplies builds upon a Solid Gold Foundation..</p>
			  <p><button onclick="document.getElementById('it01').style.display='block'">View Item</button></p>
			</div>
		  </div>
		</div>
		<div class='column'>
		  <div class='card' style='width: 18rem;'>
		    <img class='image' src='img/450.jpg' alt='eVGA 450 80 plus gold'>
			<div class='card-body'>
			  <h5 class='card-title'>eVGA 450 80 plus gold</h5>
			  <p class='card-text'>A premium quality power supply designed with enthusiasts in mind..</p>
			  <p><button onclick="document.getElementById('it01').style.display='block'">View Item</button></p>
			</div>
		  </div>
		</div>
		<div class='column'>
		  <div class='card' style='width: 18rem;'>
		    <img class='image' src='img/650.jpg' alt='Cooler Master 650 80 plus gold'>
			<div class='card-body'>
			  <h5 class='card-title'>Cooler Master 650 80 plus gold</h5>
			  <p class='card-text'>Cooler Master's family of power options features a line of stable, high quality power supplies..</p>
			  <p><button onclick="document.getElementById('it01').style.display='block'">View Item</button></p>
			</div>
		  </div>
		</div>
	  </div>
	</article>
	
	<article id='monitor' hidden='hidden'>
	  <div class='column'>
		  <div class='card' style='width: 18rem;'>
		    <img class='image'src='img/asus.jpg' alt='ASUS ROG Swift PG349Q'>
			<div class='card-body'>
			  <h5 class='card-title'>ASUS ROG Swift PG349Q</h5>
			  <p class='card-text'>The Swift PG349Q expands your scope, allowing faster target acquisition while increasing ..</p>
			  <p><button onclick="document.getElementById('it01').style.display='block'">View Item</button></p>
			</div>
		  </div>
		</div>
		<div class='column'>
		  <div class='card' style='width: 18rem;'>
		    <img class='image' src='img/Predator.jpg' alt='Acer Predator X27'>
			<div class='card-body'>
			  <h5 class='card-title'>Acer Predator X27</h5>
			  <p class='card-text'>Fasten your seatbelt: The Predator X27 4K Ultra HD display is about to change your gaming experiences..</p>
			  <p><button onclick="document.getElementById('it01').style.display='block'">View Item</button></p>
			</div>
		  </div>
		</div>
		<div class='column'>
		  <div class='card' style='width: 18rem;'>
		    <img class='image' src='img/AOC.jpg' alt='AOC C27G1'>
			<div class='card-body'>
			  <h5 class='card-title'>AOC C27G1</h5>
			  <p class='card-text'>The AOC C27G1 has a 1800R curved, frameless 27” VA panel in Full HD with 144 Hz refresh rate..</p>
			  <p><button onclick="document.getElementById('it01').style.display='block'">View Item</button></p>
			</div>
		  </div>
		</div>
	  </div>
	</article>
	
	<article id='pccase' hidden='hidden'>
	  <div class='column'>
		  <div class='card' style='width: 18rem;'>
		    <img class='image' src='img/H400i.jpg' alt='NZXT H400i'>
			<div class='card-body'>
			  <h5 class='card-title'>NZXT H400i</h5>
			  <p class='card-text'>The H400i showcases NZXT's vision for modern PC building. This premium..</p>
			  <p><button onclick="document.getElementById('it01').style.display='block'">View Item</button></p>
			</div>
		  </div>
		</div>
		<div class='column'>
		  <div class='card' style='width: 18rem;'>
		    <img class='image' src='img/Carbide.jpg' alt='Corsair Carbide SPEC OMEGA'>
			<div class='card-body'>
			  <h5 class='card-title'>Corsair Carbide SPEC OMEGA</h5>
			  <p class='card-text'>The Carbide Series SPEC-OMEGA is a mid-tower PC case with striking angular looks, unique ..</p>
			  <p><button onclick="document.getElementById('it01').style.display='block'">View Item</button></p>
			</div>
		  </div>
		</div>
		<div class='column'>
		  <div class='card' style='width: 18rem;'>
		    <img class='image' src='img/Matrexx.jpg' alt='Deepcool Matrexx 55'>
			<div class='card-body'>
			  <h5 class='card-title'>Deepcool Matrexx 55</h5>
			  <p class='card-text'>Full sized 4mm thickness, tempered glass side panel and a front panel give the case a..</p>
			  <p><button onclick="document.getElementById('it01').style.display='block'">View Item</button></p>
			</div>
		  </div>
		</div>
	  </div>
	</article>
	
	<article id='cpucooling' hidden='hidden'>
	  <div class='row'>
	    <div class='column'>
		  <div class='card' style='width: 18rem;'>
		    <img class='image' src='img/ML240R.jpg' alt='Cooler Master MasterLiquid ML240R'>
			<div class='card-body'>
			  <h5 class='card-title'>Cooler Master MasterLiquid ML240R</h5>
			  <p class='card-text'>The PPS and glass fiber construction resists a broad range of chemicals and is unaffected by ..</p>
			  <p><button onclick="document.getElementById('it01').style.display='block'">View Item</button></p>
			</div>
		  </div>
		</div>
		<div class='column'>
		  <div class='card' style='width: 18rem;'>
		    <img class='image' src='img/H100i.jpg' alt='Corsair Hydro H100i'>
			<div class='card-body'>
			  <h5 class='card-title'>Corsair Hydro H100i</h5>
			  <p class='card-text'>The CORSAIR Hydro Series H100i RGB PLATINUM is an all-in-one liquid CPU cooler with a ..</p>
			  <p><button onclick="document.getElementById('it01').style.display='block'">View Item</button></p>
			</div>
		  </div>
		</div>
		<div class='column'>
		  <div class='card' style='width: 18rem;'>
		    <img class='image' src='img/X62.jpg' alt='NZXT Kraken X62'>
			<div class='card-body'>
			  <h5 class='card-title'>NZXT Kraken X62</h5>
			  <p class='card-text'>The Kraken Series features the most advanced controls ever to be included in an all-in-one liquid cooler..</p>
			  <p><button onclick="document.getElementById('it01').style.display='block'">View Item</button></p>
			</div>
		  </div>
		</div>
	  </div>
	</article>
	
	<article id='mouse' hidden='hidden'>
	  <div class='row'>
	    <div class='column'>
		  <div class='card' style='width: 18rem;'>
		    <img class='image' src='img/Mamba.jpg' alt='Razer Mamba'>
			<div class='card-body'>
			  <h5 class='card-title'>Razer Mamba</h5>
			  <p class='card-text'>Here’s one for the fans. The Razer Mamba Elite is the iconic gaming mouse you know and love with ..</p>
			  <p><button onclick="document.getElementById('it01').style.display='block'">View Item</button></p>
			</div>
		  </div>
		</div>
		<div class='column'>
		  <div class='card' style='width: 18rem;'>
		    <img class='image' src='img/GPRO.jpg' alt='Logitech G PRO wireless'>
			<div class='card-body'>
			  <h5 class='card-title'>Logitech G PRO wireless</h5>
			  <p class='card-text'>PRO Wireless was designed to be the ultimate gaming mouse for esports professionals. Logitech collaborated with..</p>
			  <p><button onclick="document.getElementById('it01').style.display='block'">View Item</button></p>
			</div>
		  </div>
		</div>
		<div class='column'>
		  <div class='card' style='width: 18rem;'>
		    <img class='image' src='img/Rival.jpg' alt='SteelSeries Rival 650'>
			<div class='card-body'>
			  <h5 class='card-title'>SteelSeries Rival 650</h5>
			  <p class='card-text'>The first true performance wireless gaming mouse is here. The rival 650 wireless features ..</p>
			  <p><button onclick="document.getElementById('it01').style.display='block'">View Item</button></p>
			</div>
		  </div>
		</div>
	  </div>
	</article>
	
	<article id='keyboard' hidden='hidden'>
	  <div class='row'>
	    <div class='column'>
		  <div class='card' style='width: 18rem;'>
		    <img class='image' src='img/Blackwidow.jpg' alt='Razer Blackwidow'>
			<div class='card-body'>
			  <h5 class='card-title'>Razer Blackwidow</h5>
			  <p class='card-text'>Since its inception, the Razer BlackWidow name has been synonymous not just with precision but also ..</p>
			  <p><button onclick="document.getElementById('it01').style.display='block'">View Item</button></p>
			</div>
		  </div>
		</div>
		<div class='column'>
		  <div class='card' style='width: 18rem;'>
		    <img class='image' src='img/G915.jpg' alt='Logitech G915 '>
			<div class='card-body'>
			  <h5 class='card-title'>Logitech G915 </h5>
			  <p class='card-text'>G915 features pro-grade LIGHTSPEED wireless that achieves super-fast 1 ms performance. It’s the ..</p>
			  <p><button onclick="document.getElementById('it01').style.display='block'">View Item</button></p>
			</div>
		  </div>
		</div>
		<div class='column'>
		  <div class='card' style='width: 18rem;'>
		    <img class='image' src='img/K65.jpg' alt='Corsair K65'>
			<div class='card-body'>
			  <h5 class='card-title'>Corsair K65</h5>
			  <p class='card-text'>With virtually unlimited customization directly integrated into Corsair's legendary construction, the LUX line of gaming keyboards is the ..</p>
			  <p><button onclick="document.getElementById('it01').style.display='block'">View Item</button></p>
			</div>
		  </div>
		</div>
	  </div>
	</article>
	
	<article id='i5' hidden='hidden'>
      <div class='item'>
	    <h2>Intel i5 9600K</h2>
        <img src='img/inteli5.jpg' alt='Intel i5 CPU' style='width:10%'>
	    <pre>
	      With intelligent performance that accelerates in response to demanding tasks, such as playing games
	      and editing photos, the Intel Core i5 processor moves faster when you do.
	    </pre>
	    <pre>
	      The Intel Core i5 processor automatically allocates processing power where it's needed most. Whether
	      you're creating HD video, composing digital music, editing photos, or playing the coolest PC games - with
	      the Intel Core i5 processor you can multitask with ease and be more productive than ever.
	    </pre>
	    <h4>$349</h4>
	    <h5>Stock: 3</h5>
	  </div>	
	  <div class="container">
	    <button class ="button">Check Out</button>
	    <button class ="button">Add To Cart</button>
      </div>
	</article>
	
	<article id='profile' hidden='hidden'>
	  <div class="profilecontainer">
        <h1>Personal Profile</h1>
        <h4>Name:</h4>
        <p>Nicholas Bryan</p>
        <h4>ID:</h4>
		<p>nicnic</p>
		<h4>Password</h4>
		<p>1234</p>
		<h4>Email:</h4>
		<p>n.bryan007@gmail.com</p>
        <h4>Address</h4>
        <p>90 south street murdoch 6150</p>
      </div>
	</article>
	
	<article id='cart' hidden='hidden'>
    <section class="container content-section">
            <h2 class="section-header">CART</h2>
            <div class="cart-row">
                <span class="cart-item cart-header cart-column">ITEM</span>
                <span class="cart-price cart-header cart-column">PRICE</span>
                <span class="cart-quantity cart-header cart-column">QUANTITY</span>
            </div>
            <div class="cart-items">
            </div>
            <div class="cart-total">
                <strong class="cart-total-title">Total</strong>
                <span class="cart-total-price">$0</span>
            </div>
            <button class="btn btn-primary btn-purchase" type="button">PURCHASE</button>
        </section>
	</article>
	
	<footer>
      <div class="footer-text">
        <span>&copy; copyrightB&Rpc's2019 </span> <a class="help" href='#'>Help</a></br>
        <span>&#9993; brpc@gmail.com.au</span> </br>
        <span>90 South Street Murdoch WA 6150 </span></br>
        <span>&phone; +61 8 9360 6000</span><br>
      </div>
    </footer>
	
  </body>   
</html>
