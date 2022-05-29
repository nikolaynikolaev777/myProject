<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Bansko Holiday Summer</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" href="css/mobile.css" type="text/css">
	<link rel="stylesheet" href="css/gallery.css" type="text/css">
	
	
</head>
<body class="bodysummer">


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
			<label style="cursor:pointer;" for="rockclimbing">
				<img src="img/rockclimbing.jpg" alt="ROCK CLIMBING" height="200px">
				<div class="imgboxtxtbottom">ROCK CLIMBING</div>
			</label>
			<input class="popbox-post" id="rockclimbing" type="checkbox" />
			<div class="popbox"><?php include'summer/rockclimbing.php'?></div>
		</div>
		
		<div class="imgbox">
			<label style="cursor:pointer;" for="hiketomuratovo">
				<img src="img/hikemuratovo.jpg" alt="HIKE TO MURATOVO" height="200px">
				<div class="imgboxtxtbottom">HIKE TO MURATOVO</div>
			</label>
			<input class="popbox-post" id="hiketomuratovo" type="checkbox" />
			<div class="popbox"><?php include'summer/hiketomuratovo.php'?></div>
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
			<label style="cursor:pointer;" for="mounteinbiking">
				<img src="img/mountainbiking.jpg" alt="MOUNTAIN BIKING" height="200px">
				<div class="imgboxtxtbottom">MOUNTAIN BIKING</div>
			</label>
			<input class="popbox-post" id="mounteinbiking" type="checkbox" />
			<div class="popbox"><?php include'summer/mounteinbiking.php'?></div>
		</div>
	</center>
	</div>
	
	<div class="emptybox"></div>
	

<ul>
	<div class="conteinerforlogo">
		<a href="index.php"><img src="img/banskologo.jpg"></a>
	</div>
	<li><a href="#header">HOME</a></li>
	<li><a href="#hotels">HOTELS</a></li>
	<li class="Soccer">
		<a href="#activites" class="dropbtn">ACTIVITES</a>
		<div class="Soccer-content">
			<a href="#adventure">ADVENTURE</a>
			<a href="#mountainbiking">MOUNTAIN BIKING</a>
			<a href="#hike">HIKING</a>
			<a href="#climbing">CLIMBING</a>
		</div>
	</li>
	<li class="Soccer">
		<a href="#tours" class="dropbtn">TOURS</a>
		<div class="Soccer-content">
			<a href="#travels">TRANSFERS</a>
			<a href="#excursions">EXCURSIONS</a>
		</div>
	</li>
	<li><a href="#about">ABOUT</a></li>
	
	<div id="mobileMenu" class="mobile-ul">
			<a href="javascript:void(0)" class="close-x" onclick="mobilemenuOff()">&times;</a>
			<div class="mobile-ul-content">
				<a href="#header" onclick="mobilemenuOff()">HOME</a>
				<a href="#hotels" onclick="mobilemenuOff()">HOTELS</a>
				<a href="#activites" onclick="mobilemenuOff()">ACTIVITES</a>
				<a href="#tours" onclick="mobilemenuOff()">TOURS</a>
				<a href="#about" onclick="mobilemenuOff()">ABOUT</a>
			</div>
		</div>
		<span class="mobile-menu-open-btn" onclick="mobilemenuOn()">&#9776;</span>
</ul>

<!-- HOTELS -->
	<div id="hotels" class="hotels">
		<h2>A C C O M M O D A T I O N</h2>
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
			</div><br>
			
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
		</div>
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
				<label style="cursor:pointer;" for="tenis">
					<img src="img/tenis.jpg" alt="tenis" height="200px">
					<div class="imgboxtxtbottom">TENIS</div>
				</label>
				<input class="popbox-post" id="tenis" type="checkbox" />
				<div class="popbox"><?php include'summer/tenis.php'?></div>
			</div>
			
			<div class="imgbox">
				<label style="cursor:pointer;" for="tabletenis">
					<img src="img/tabletenis.jpg" alt="tabletenis" height="200px">
					<div class="imgboxtxtbottom">TABLE TENIS</div>
				</label>
				<input class="popbox-post" id="tabletenis" type="checkbox" />
				<div class="popbox"><?php include'summer/tabletenis.php'?></div>
			</div>
			
			<div class="imgbox">
				<label style="cursor:pointer;" for="jeepsafariaroundbansko">
					<img src="excursions/img/jeepsafari.jpg" alt="jeepsafariaroundbansko" height="200px">
					<div class="imgboxtxtbottom">JEEP SAFARI AROUND BANSKO</div>
				</label>
				<input class="popbox-post" id="jeepsafariaroundbansko" type="checkbox" />
				<div class="popbox"><?php include'summer/jeepsafariaroundbansko.php'?></div>
			</div>
			
			<div class="id" id="mountainbiking"></div>
			<center><div class="h3title"><h3>MOUNTAIN BIKING</h3></div><center><br>
			
			<div class="imgbox">
				<label style="cursor:pointer;" for="mounteinbiking">
					<img src="img/mountainbiking.jpg" alt="MOUNTAIN BIKING" height="200px">
					<div class="imgboxtxtbottom">MOUNTAIN BIKING</div>
				</label>
				<input class="popbox-post" id="mounteinbiking" type="checkbox" />
				<div class="popbox"><?php include'summer/mounteinbiking.php'?></div>
			</div>
			
			<div class="id" id="hike"></div>
			<center><div class="h3title"><h3>H I K I N G</h3></div><center><br>
			
			<div class="imgbox">
				<label style="cursor:pointer;" for="bezbogtodemyanitsa">
					<img src="img/hikebezboghut.jpeg" alt="HIKE FROM BEZBOG HUT TO DEMYANITSA HUT" height="200px">
					<div class="imgboxtxtbottom">HIKE FROM BEZBOG HUT TO DEMYANITSA HUT</div>
				</label>
				<input class="popbox-post" id="bezbogtodemyanitsa" type="checkbox" />
				<div class="popbox"><?php include'summer/bezbogtodemyanitsa.php'?></div>
			</div>
			
			<div class="imgbox">
				<label style="cursor:pointer;" for="demyanitsaviatevnoezero">
					<img src="img/hikebezboghut.jpeg" alt="DEMYANITSA HUT VIA TEVNO EZERO" height="200px">
					<div class="imgboxtxtbottom">HIKE FROM BEZBOG HUT TO THE DEMYANITSA HUT VIA TEVNO EZERO</div>
				</label>
				<input class="popbox-post" id="demyanitsaviatevnoezero" type="checkbox" />
				<div class="popbox"><?php include'summer/demyanitsaviatevnoezero.php'?></div>
			</div>
			
			<div class="imgbox">
				<label style="cursor:pointer;" for="hikefromyavorovtovihren">
					<img src="img/hikeyavorov.jpg" alt="HIKE FROM THE YAVOROV HUT TO THE VIHREN HUT" height="200px">
					<div class="imgboxtxtbottom">HIKE FROM THE YAVOROV HUT TO THE VIHREN HUT</div>
				</label>
				<input class="popbox-post" id="hikefromyavorovtovihren" type="checkbox" />
				<div class="popbox"><?php include'summer/hikefromyavorovtovihren.php'?></div>
			</div>
			
			<div class="imgbox">
				<label style="cursor:pointer;" for="hiketomuratovo">
					<img src="img/hikemuratovo.jpg" alt="HIKE TO MURATOVO" height="200px">
					<div class="imgboxtxtbottom">HIKE TO MURATOVO</div>
				</label>
				<input class="popbox-post" id="hiketomuratovo" type="checkbox" />
				<div class="popbox"><?php include'summer/hiketomuratovo.php'?></div>
			</div>
			
			<div class="imgbox">
				<label style="cursor:pointer;" for="hiketopopovoezero">
					<img src="img/hikepopovoezero.jpg" alt="HIKE TO POPOVO EZERO" height="200px">
					<div class="imgboxtxtbottom">HIKE TO POPOVO EZERO</div>
				</label>
				<input class="popbox-post" id="hiketopopovoezero" type="checkbox" />
				<div class="popbox"><?php include'summer/hiketopopovoezero.php'?></div>
			</div>
			
			<div class="imgbox">
				<label style="cursor:pointer;" for="hiketovasilashkoezero">
					<img src="img/hikevasilashko.jpg" alt="HIKE TO VASILASHKO EZERO" height="200px">
					<div class="imgboxtxtbottom">HIKE TO VASILASHKO EZERO</div>
				</label>
				<input class="popbox-post" id="hiketovasilashkoezero" type="checkbox" />
				<div class="popbox"><?php include'summer/hiketovasilashkoezero.php'?></div>
			</div>
			
			<div class="imgbox">
				<label style="cursor:pointer;" for="hikeslonger">
					<img src="img/hikelonger.jpg" alt="HIKES LONGER THAN ONE DAY" height="200px">
					<div class="imgboxtxtbottom">HIKES LONGER THAN ONE DAY</div>
				</label>
				<input class="popbox-post" id="hikeslonger" type="checkbox" />
				<div class="popbox"><?php include'summer/hikeslonger.php'?></div>
			</div>
			
			<div class="imgbox">
				<label style="cursor:pointer;" for="touraroundthelakes">
					<img src="img/touraround.jpg" alt="TOUR AROUND THE LAKES OF THE BANDERITSA VALLEY" height="200px">
					<div class="imgboxtxtbottom">TOUR AROUND THE LAKES OF THE BANDERITSA VALLEY</div>
				</label>
				<input class="popbox-post" id="touraroundthelakes" type="checkbox" />
				<div class="popbox"><?php include'summer/touraroundthelakes.php'?></div>
			</div>
			
			<div class="imgbox">
				<label style="cursor:pointer;" for="mhikingfrombanskotosevenrila">
					<img src="excursions/img/mhikingfrombanskotosevenrila.jpg" alt="mhikingfrombanskotosevenrila" height="200px">
					<div class="imgboxtxtbottom">Mountain hiking from Bansko to the Seven Rila Lakes</div>
				</label>
				<input class="popbox-post" id="mhikingfrombanskotosevenrila" type="checkbox" />
				<div class="popbox"><?php include'summer/mhikingfrombanskotosevenrila.php'?></div>
			</div>
			
			<div class="imgbox">
				<label style="cursor:pointer;" for="visittotheoldesttree">
					<img src="img/visitoldesttree.jpg" alt="VISIT TO THE OLDEST TREE IN BULGARIA" height="200px">
					<div class="imgboxtxtbottom">VISIT TO THE OLDEST TREE IN BULGARIA</div>
				</label>
				<input class="popbox-post" id="visittotheoldesttree" type="checkbox" />
				<div class="popbox"><?php include'summer/visittotheoldesttree.php'?></div>
			</div>
			
			
			<div class="id" id="climbing"></div>
			<center><div class="h3title"><h3>C L I M B I N G</h3></div><center><br>
			
			<div class="imgbox">
				<label style="cursor:pointer;" for="climbingthevihrenpeak">
					<img src="img/vihrenpeak.jpg" alt="CLIMBING THE VIHREN PEAK" height="200px">
					<div class="imgboxtxtbottom">CLIMBING THE VIHREN PEAK</div>
				</label>
				<input class="popbox-post" id="climbingthevihrenpeak" type="checkbox" />
				<div class="popbox"><?php include'summer/climbingthevihrenpeak.php'?></div>
			</div>
			
			<div class="imgbox">
				<label style="cursor:pointer;" for="rockclimbing">
					<img src="img/rockclimbing.jpg" alt="ROCK CLIMBING" height="200px">
					<div class="imgboxtxtbottom">ROCK CLIMBING</div>
				</label>
				<input class="popbox-post" id="rockclimbing" type="checkbox" />
				<div class="popbox"><?php include'summer/rockclimbing.php'?></div>
			</div>
			
			
		</div>
		
		<div class="emptybox"></div>
	
	
	<div class="excursions">
		<div class="id" id="tours"></div>
		<h2>T O U R S</h2><hr><br>
			
			<div class="id" id="travels"></div>
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
		<p>Copyright &copy; 2020 Bansko-Holiday. All rights reserved. | Created by: <a href="#">P U L S E</a></p>
	</div>

</body>
<script>
	function mobilemenuOn() {
		document.getElementById("mobileMenu").style.width = "100%";
	}

	function mobilemenuOff() {
		document.getElementById("mobileMenu").style.width = "0%";
	}
	</script>
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