<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Bansko Holiday Winter</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" href="css/mobile.css" type="text/css">
	<link rel="stylesheet" href="css/gallery.css" type="text/css">
	
</head>
<body class="bodywinter">


<div id="header" class="header">

	<div id="header" class="header">

<div class="slideshow-container">

<div class="mySlidesshow slideshow-fade">
  <img src="slideshowimg/hotelbulgaria.jpg">
  <div class="slideshow-text"><p>Hotel Bulgaria</p></div>
</div>

<div class="mySlidesshow slideshow-fade">
  <img src="slideshowimg/hotelmolerite.jpg">
  <div class="slideshow-text"><p>Hotel Molerite</p></div>
</div>

<div class="mySlidesshow slideshow-fade">
  <img src="slideshowimg/summerpagebg.jpg">
  <div class="slideshow-text"><p>Bulgarian Nature</p></div>
</div>

</div>

<div style="text-align:center;">
  <span class="slideshowdot"></span> 
  <span class="slideshowdot"></span> 
  <span class="slideshowdot"></span> 
</div>
</div>
	
	<div class="headerbottom">
	
	<h3>MOST POPULAR</h3>
	<center>
		<div class="imgbox">
			<label style="cursor:pointer;" for="skidoo">
				<img src="img/skido.jpg" alt="SKI-DOO" height="200px">
				<div class="imgboxtxtbottom">SKI-DOO</div>
			</label>
			<input class="popbox-post" id="skidoo" type="checkbox" />
			<div class="popbox"><?php include'winter/skidoo.php'?></div>
		</div>
		
		<div class="imgbox">
			<label style="cursor:pointer;" for="skiing2p">
				<img src="img/sking2p.png" alt="SKIING (2 PEOPLE)" height="200px">
				<div class="imgboxtxtbottom">SKIING (2 PEOPLE)</div>
			</label>
			<input class="popbox-post" id="skiing2p" type="checkbox" />
			<div class="popbox"><?php include'winter/skiing2p.php'?></div>
		</div>
		
		<div class="imgbox">
			<label style="cursor:pointer;" for="skiing3p">
				<img src="img/sking3p.png" alt="SKIING (3 PEOPLE)" height="200px">
				<div class="imgboxtxtbottom">SKIING (3 PEOPLE)</div>
			</label>
			<input class="popbox-post" id="skiing3p" type="checkbox" />
			<div class="popbox"><?php include'winter/skiing3p.php'?></div>
		</div>
		
		<div class="imgbox">
			<label style="cursor:pointer;" for="skiing5g">
				<img src="img/sking5g.png" alt="SKIING (GROUP OF 5 - 10 PEOPLE)" height="200px">
				<div class="imgboxtxtbottom">SKIING (GROUP OF 5 - 10 PEOPLE)</div>
			</label>
			<input class="popbox-post" id="skiing5g" type="checkbox" />
			<div class="popbox"><?php include'winter/skiing5g.php'?></div>
		</div>
	</center>
	</div>
	
	<div class="emptybox"></div>
	

<ul>
	<div class="conteinerforlogo">
		<a href="index.php"><img src="img/banskologo.jpg" style="float: left;"></a>
	</div>
	<li><a href="#header">HOME</a></li>
	<li><a href="#hotels">HOTELS</a></li>
	<li class="Soccer">
		<a href="#activites" class="dropbtn">ACTIVITES</a>
		<div class="Soccer-content">
			<a href="#adventure">ADVENTURE</a>
			<a href="#skiing">SKIING</a>
		</div>
	</li>
	<li class="Soccer">
		<a href="#tours" class="dropbtn">TOURS</a>
		<div class="Soccer-content">
			<a href="#transfers">TRANSFERS</a>
			<a href="#excursions">EXCURSIONS</a>
		</div>
	</li>
	<li><a href="#about">ABOUT</a></li>
</ul>

<!-- HOTELS -->
	<div id="hotels" class="hotels">
		<h2>A C C O M M O D A T I O N</h2><hr>
		<div class="hotelpage">
			<div class="hotelbulgaria">
				<div class="hoteltext">
					<h3>HOTEL BULGARIA</h3>
					<p>
						Welcome, touch the traditions and spirit of our country! On 01 January 2019 Wellness Hotel BULGARIA opened doors for all you!
						The hotel is located 5 minutes from the cabin lift and just as far from the center and the old part of the town where you can explore the cultural landmarks. It has 22 double rooms and 10 suites, luxuriously furnished with magnificent views of the vast mountain.
					</p>
					
					<label style="cursor:pointer;" for="hotelbg">
					<div class="hotelbtn">M O R E</div>
				</label>
				<input class="popbox-post" id="hotelbg" type="checkbox" />
				<div class="popbox"><?php include'summer/hotelbg.php'?></div>
				</div>
			</div><br><hr><br>
			
			<div class="hotelmolerite">
				<div class="hoteltext">
					<h3>HOTEL MOLERITE</h3>
					<p>
						Bansko’s Molerite Complex has a spa centre, solarium, steam bath, fitness area, relaxation room, sauna, and hydro massage facilities.
						All units have a private bathroom, and floral wall decorations. Several have a separate bedroom and living room, and some have a balcony. Wi-Fi is available free of charge. Molerite Complex’s restaurant serves traditional Bulgarian cuisine.
					</p>
					
					<label style="cursor:pointer;" for="hotelmoler">
					<div class="hotelbtn">M O R E</div>
				</label>
				<input class="popbox-post" id="hotelmoler" type="checkbox" />
				<div class="popbox"><?php include'summer/hotelmoler.php'?></div>
				</div>
			</div>
		</div><br>
	</div>
	
	
	<div class="emptybox"></div>
	
	
	<div id="activites" class="tours">
		<h2>A C T I V I T E S</h2><hr><br>
		
		<div class="id" id="adventure"></div>
		<center><div class="h3title"><h3>A D V E N T U R E</h3></div><center><br>
		
		<div class="imgbox">
				<label style="cursor:pointer;" for="golf">
					<img src="img/golf.jpg" alt="GOLF" height="200px">
					<div class="imgboxtxtbottom">GOLF</div>
				</label>
				<input class="popbox-post" id="golf" type="checkbox" />
				<div class="popbox"><?php include'summer/golf.php'?></div>
			</div>
			
			<div class="imgbox">
				<label style="cursor:pointer;" for="hourseriding">
					<img src="img/hourseriding.jpg" alt="HOURSE RIDING" height="200px">
					<div class="imgboxtxtbottom">HOURSE RIDING</div>
				</label>
				<input class="popbox-post" id="hourseriding" type="checkbox" />
				<div class="popbox"><?php include'summer/hourseriding.php'?></div>
			</div>
			
			<div class="imgbox">
				<label style="cursor:pointer;" for="endurotours">
					<img src="img/endurotours.jpg" alt="ENDURO TOURS" height="200px">
					<div class="imgboxtxtbottom">ENDURO TOURS</div>
				</label>
				<input class="popbox-post" id="endurotours" type="checkbox" />
				<div class="popbox"><?php include'summer/endurotours.php'?></div>
			</div>
			
			<div class="imgbox">
				<label style="cursor:pointer;" for="rafting">
					<img src="img/rafting.jpg" alt="rafting" height="200px">
					<div class="imgboxtxtbottom">RAFTING</div>
				</label>
				<input class="popbox-post" id="rafting" type="checkbox" />
				<div class="popbox"><?php include'summer/rafting.php'?></div>
			</div>
			
			<div class="imgbox">
				<label style="cursor:pointer;" for="fishing">
					<img src="img/fishing.jpg" alt="fishing" height="200px">
					<div class="imgboxtxtbottom">FISHING</div>
				</label>
				<input class="popbox-post" id="fishing" type="checkbox" />
				<div class="popbox"><?php include'summer/fishing.php'?></div>
			</div>
			
			<div class="imgbox">
				<label style="cursor:pointer;" for="jeepsafariaroundbansko">
					<img src="excursions/img/jeepsafari.jpg" alt="jeepsafariaroundbansko" height="200px">
					<div class="imgboxtxtbottom">JEEP SAFARI AROUND BANSKO</div>
				</label>
				<input class="popbox-post" id="jeepsafariaroundbansko" type="checkbox" />
				<div class="popbox"><?php include'summer/jeepsafariaroundbansko.php'?></div>
			</div>
			
			<div class="id" id="skiing"></div>
			<center><div id="travels" class="h3title"><h3>S K I I N G</h3></div><center><br>
			
		<div class="imgboxwinter">
			<label style="cursor:pointer;" for="skidoo">
				<img src="img/skido.jpg" alt="SKI-DOO" height="200px">
				<div class="imgboxtxtbottom">SKI-DOO</div>
			</label>
			<input class="popbox-post" id="skidoo" type="checkbox" />
			<div class="popbox"><?php include'winter/skidoo.php'?></div>
		</div>
		
		<div class="imgboxwinter">
			<label style="cursor:pointer;" for="skiing2p">
				<img src="img/sking2p.png" alt="SKIING (2 PEOPLE)" height="200px">
				<div class="imgboxtxtbottom">SKIING (2 PEOPLE)</div>
			</label>
			<input class="popbox-post" id="skiing2p" type="checkbox" />
			<div class="popbox"><?php include'winter/skiing2p.php'?></div>
		</div>
		
		<div class="imgboxwinter">
			<label style="cursor:pointer;" for="skiing3p">
				<img src="img/sking3p.png" alt="SKIING (3 PEOPLE)" height="200px">
				<div class="imgboxtxtbottom">SKIING (3 PEOPLE)</div>
			</label>
			<input class="popbox-post" id="skiing3p" type="checkbox" />
			<div class="popbox"><?php include'winter/skiing3p.php'?></div>
		</div>
		
		<div class="imgboxwinter">
			<label style="cursor:pointer;" for="skiing5g">
				<img src="img/sking5g.png" alt="SKIING (GROUP OF 5 - 10 PEOPLE)" height="200px">
				<div class="imgboxtxtbottom">SKIING (GROUP OF 5 - 10 PEOPLE)</div>
			</label>
			<input class="popbox-post" id="skiing5g" type="checkbox" />
			<div class="popbox"><?php include'winter/skiing5g.php'?></div>
		</div>
		
		<div class="imgboxwinter">
			<label style="cursor:pointer;" for="skiingone">
				<img src="img/skingone.png" alt="SKIING (ONE TO ONE)" height="200px">
				<div class="imgboxtxtbottom">SKIING (ONE TO ONE)</div>
			</label>
			<input class="popbox-post" id="skiingone" type="checkbox" />
			<div class="popbox"><?php include'winter/skiingone.php'?></div>
		</div>
			
			
		</div>
		
		<div class="emptybox"></div>
	
	
	<div class="excursions">
		<div class="id" id="tours"></div>
		<h2>T O U R S</h2><hr><br>
			
			<div class="id" id="transfers"></div>
			<center><div class="h3title"><h3>T R A N S F E R S</h3></div><center><br>
			
			<div class="imgbox">
				<label style="cursor:pointer;" for="banskotoplovdiv">
					<img src="img/transfers.jpg" alt="Bansko to Plovdiv" height="200px">
					<div class="imgboxtxtbottom">BANSKO TO PLOVDIV</div>
				</label>
				<input class="popbox-post" id="banskotoplovdiv" type="checkbox" />
				<div class="popbox"><?php include'summer/banskotoplovdiv.php'?></div>
			</div>
			
			<div class="imgbox">
				<label style="cursor:pointer;" for="banskotosofia">
					<img src="img/transfers.jpg" alt="Bansko to Sofia" height="200px">
					<div class="imgboxtxtbottom">BANSKO TO SOFIA</div>
				</label>
				<input class="popbox-post" id="banskotosofia" type="checkbox" />
				<div class="popbox"><?php include'summer/banskotosofia.php'?></div>
			</div>
			
			<div class="id" id="excursions"></div>
			<center><div class="h3title"><h3>E X C U R S I O N S</h3></div><center><br>
			
			<div class="imgbox">
				<label style="cursor:pointer;" for="chudnitemostove">
					<img src="excursions/img/chudnitemostove.jpg" alt="chudnitemostove" height="200px">
					<div class="imgboxtxtbottom">Chudnite Mostove (The Wonderful Bridges)</div>
				</label>
				<input class="popbox-post" id="chudnitemostove" type="checkbox" />
				<div class="popbox"><?php include'excursions/chudnitemostove.php'?></div>
			</div>
			
			<div class="imgbox">
				<label style="cursor:pointer;" for="daytriptorilamonastery">
					<img src="excursions/img/daytriptorilamonastery.jpg" alt="daytriptorilamonastery" height="200px">
					<div class="imgboxtxtbottom">Day Trip to Rila Monastery</div>
				</label>
				<input class="popbox-post" id="daytriptorilamonastery" type="checkbox" />
				<div class="popbox"><?php include'excursions/daytriptorilamonastery.php'?></div>
			</div>
			
			<div class="imgbox">
				<label style="cursor:pointer;" for="frombanskotomelnik">
					<img src="excursions/img/frombanskotomelnik.jpg" alt="frombanskotomelnik" height="200px">
					<div class="imgboxtxtbottom">Excursion from Bansko to Melnik</div>
				</label>
				<input class="popbox-post" id="frombanskotomelnik" type="checkbox" />
				<div class="popbox"><?php include'excursions/frombanskotomelnik.php'?></div>
			</div>
			
			<div class="imgbox">
				<label style="cursor:pointer;" for="frombanskotomelnikwine">
					<img src="excursions/img/frombanskotomelnikwine.jpg" alt="frombanskotomelnikwine" height="200px">
					<div class="imgboxtxtbottom">Excursion from Bansko to Melnik – Wine</div>
				</label>
				<input class="popbox-post" id="frombanskotomelnikwine" type="checkbox" />
				<div class="popbox"><?php include'excursions/frombanskotomelnikwine.php'?></div>
			</div>
			
			<div class="imgbox">
				<label style="cursor:pointer;" for="hotairballon">
					<img src="excursions/img/hotairballon.jpg" alt="hotairballon" height="200px">
					<div class="imgboxtxtbottom">Hot Air Balloon</div>
				</label>
				<input class="popbox-post" id="hotairballon" type="checkbox" />
				<div class="popbox"><?php include'excursions/hotairballon.php'?></div>
			</div>
			
			<div class="imgbox">
				<label style="cursor:pointer;" for="melnikwineexperience">
					<img src="excursions/img/melnikwineexperience.jpg" alt="melnikwineexperience" height="200px">
					<div class="imgboxtxtbottom">Melnik Wine Experience</div>
				</label>
				<input class="popbox-post" id="melnikwineexperience" type="checkbox" />
				<div class="popbox"><?php include'excursions/melnikwineexperience.php'?></div>
			</div>
			
			<div class="imgbox">
				<label style="cursor:pointer;" for="excursionfrombanskotorila">
					<img src="excursions/img/excursionfrombanskotorila.jpg" alt="excursionfrombanskotorila" height="200px">
					<div class="imgboxtxtbottom">Excursion from Bansko to Rila monastery</div>
				</label>
				<input class="popbox-post" id="excursionfrombanskotorila" type="checkbox" />
				<div class="popbox"><?php include'excursions/excursionfrombanskotorila.php'?></div>
			</div>
			
			<div class="imgbox">
				<label style="cursor:pointer;" for="dayatthebeachinkavala">
					<img src="excursions/img/dayatthebeachinkavala.jpg" alt="dayatthebeachinkavala" height="200px">
					<div class="imgboxtxtbottom">Day at the beach in Kavala</div>
				</label>
				<input class="popbox-post" id="dayatthebeachinkavala" type="checkbox" />
				<div class="popbox"><?php include'excursions/dayatthebeachinkavala.php'?></div>
			</div>
			
			<div class="imgbox">
				<label style="cursor:pointer;" for="excursionfrombanskotoplovdiv">
					<img src="excursions/img/excursionfrombanskotoplovdiv.jpg" alt="excursionfrombanskotoplovdiv" height="200px">
					<div class="imgboxtxtbottom">Excursion from Bansko to Plovdiv</div>
				</label>
				<input class="popbox-post" id="excursionfrombanskotoplovdiv" type="checkbox" />
				<div class="popbox"><?php include'excursions/excursionfrombanskotoplovdiv.php'?></div>
			</div>
			
			<div class="imgbox">
				<label style="cursor:pointer;" for="excursionfrombanskotodobarsko">
					<img src="excursions/img/excursionfrombanskotodobarsko.jpg" alt="excursionfrombanskotodobarsko" height="200px">
					<div class="imgboxtxtbottom">Excursion from Bansko to Dobarsko</div>
				</label>
				<input class="popbox-post" id="excursionfrombanskotodobarsko" type="checkbox" />
				<div class="popbox"><?php include'excursions/excursionfrombanskotodobarsko.php'?></div>
			</div>
			
			<div class="imgbox">
				<label style="cursor:pointer;" for="daytriptohistoricrupite">
					<img src="excursions/img/daytriptohistoricrupite.jpg" alt="daytriptohistoricrupite" height="200px">
					<div class="imgboxtxtbottom">Day Trip to Historic Rupite</div>
				</label>
				<input class="popbox-post" id="daytriptohistoricrupite" type="checkbox" />
				<div class="popbox"><?php include'excursions/daytriptohistoricrupite.php'?></div>
			</div>
			
			<div class="imgbox">
				<label style="cursor:pointer;" for="jeepsafaridancingbears">
					<img src="excursions/img/jeepsafari.jpg" alt="jeepsafaridancingbears" height="200px">
					<div class="imgboxtxtbottom">JEEP SAFARI FROM BANSKO TO THE DANCING BEARS PARK</div>
				</label>
				<input class="popbox-post" id="jeepsafaridancingbears" type="checkbox" />
				<div class="popbox"><?php include'excursions/jeepsafaridancingbears.php'?></div>
			</div>
			
		</div>
	
	<div class="emptybox"></div>
	
	<!-- PAGE 2 ABOUT US -->
		<div id="about" class="about">
			<div class="iframe">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d23781.250489447895!2d23.469405711368758!3d41.835698320419596!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14abaeb946493c25%3A0xd6b0eaa049fe85c7!2zMjc3MCDQkdCw0L3RgdC60L4!5e0!3m2!1sbg!2sbg!4v1588318868611!5m2!1sbg!2sbg" width="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" height="100%"></iframe>
			</div>
			
			<div class="contact">
				<h2>A B O U T</h2><hr>
				<p>
					nqkakyv teks
				</p>
				
				<hr><h3>Contacts</h3>
				<center>
					<table>
						<tr>
							<th style="padding:25px;">M O B I L E</th>
							<th>00359 89 0305 898</th>
						</tr>
					</table>
					<a href="mailto:banskoholidays@outlook.com?subject=More Information" target="_blank" class="gmailbtn">banskoholidays@outlook.com</a>
					<a href="https://www.facebook.com" target="_blank" class="facebookbtn">FACEBOOK</a>
					<a href="https://www.instagram.com" target="_blank" class="instagrambtn">INSTAGRAM</a>
				</center>
			</div>
		</div>
	
	<div class="emptybox"></div>
	
	<div class="footer">
		<p>&copy; All rights reserved | Created by: <a href="#">P U L S E</a></p>
	</div>

</body>
<script>
var slideshowIndex = 0;
slideshowSlides();

function slideshowSlides() {
  var sli;
  var slidesshow = document.getElementsByClassName("mySlidesshow");
  var slideshowdots = document.getElementsByClassName("slideshowdot");
  for (sli = 0; sli < slidesshow.length; sli++) {
    slidesshow[sli].style.display = "none";  
  }
  slideshowIndex++;
  if (slideshowIndex > slidesshow.length) {slideshowIndex = 1}    
  for (sli = 0; sli < slideshowdots.length; sli++) {
    slideshowdots[sli].className = slideshowdots[sli].className.replace(" active", "");
  }
  slidesshow[slideshowIndex-1].style.display = "block";  
  slideshowdots[slideshowIndex-1].className += " active";
  setTimeout(slideshowSlides, 4000);
}
</script>

</html>