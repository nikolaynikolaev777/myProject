<label class="popbox-BG" for="hotelmoler"></label>
<div class="popbox-conn">
	<label class="popbox-close" for="hotelmoler"></label>
	<div class="content">
	<center>
	
	<div class="container">
		
		<div class="myHotelmolegallery">
			<div class="numbertext">1 / 7</div>
			<img src="img/hotelmolerite/1.jpg">
		</div>

		<div class="myHotelmolegallery">
			<div class="numbertext">2 / 7</div>
			<img src="img/hotelmolerite/2.jpg">
		</div>

		<div class="myHotelmolegallery">
			<div class="numbertext">3 / 7</div>
			<img src="img/hotelmolerite/3.jpg">
		</div>
		
		<div class="myHotelmolegallery">
			<div class="numbertext">4 / 7</div>
			<img src="img/hotelmolerite/4.jpg">
		</div>
		
		<div class="myHotelmolegallery">
			<div class="numbertext">5 / 7</div>
			<img src="img/hotelmolerite/5.jpg">
		</div>
		
		<div class="myHotelmolegallery">
			<div class="numbertext">6 / 7</div>
			<img src="img/hotelmolerite/6.jpg">
		</div>
		
		<div class="myHotelmolegallery">
			<div class="numbertext">7 / 7</div>
			<img src="img/hotelmolerite/7.jpg">
		</div>
    
		<div class="caption-container"><p id="caption"></p></div>

		<div class="row">
			<div class="column">
				<img class="demo cursor" src="img/hotelmolerite/1.jpg" onclick="currentSlide(1)">
			</div>
			<div class="column">
				<img class="demo cursor" src="img/hotelmolerite/2.jpg" onclick="currentSlide(2)">
			</div>
			<div class="column">
				<img class="demo cursor" src="img/hotelmolerite/3.jpg" onclick="currentSlide(3)">
			</div>
			<div class="column">
				<img class="demo cursor" src="img/hotelmolerite/4.jpg" onclick="currentSlide(4)">
			</div>
			<div class="column">
				<img class="demo cursor" src="img/hotelmolerite/5.jpg" onclick="currentSlide(5)">
			</div>
			<div class="column">
				<img class="demo cursor" src="img/hotelmolerite/6.jpg" onclick="currentSlide(6)">
			</div>
			<div class="column">
				<img class="demo cursor" src="img/hotelmolerite/7.jpg" onclick="currentSlide(7)">
			</div>
			
			<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("myHotelmolegallery");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
		</div>
	</div>
	</center>
	<div class="popupboxtours">
			<font color="#000"><h4>HOTEL MOLERITE</h4><hr></font>
		
			<p>Bansko’s Molerite Complex has a spa centre, solarium, steam bath, fitness area, relaxation room, sauna, and hydro massage facilities. The property has a winery and the closest ski lift is just 900 metres away. All units have a private bathroom, and floral wall decorations. Several have a separate bedroom and living room, and some have a balcony. Wi-Fi is available free of charge. Molerite Complex’s restaurant serves traditional Bulgarian cuisine. Food and drink can be enjoyed in the spacious tavern. Barbecue facilities can be used in the garden and several shops can be visited in the hotel. Holy Trinity Church and the main shopping street are 300 metres away. Parking is available on site free of charge. Restaurant 80 pax, Lobby bar, Conference hall for 80 pax, Spa center (Finnish sauna, steam bath,
			hydromassage, solarium, fitness, qualified masseur, relaxation), Summer garden</p><hr>
			<div class="toursleft">
				<div class="toursprice"><p>Price: from &euro;40</p></div>
			</div>
			<div class="toursright">
				<table style="background: #fff;">
					<tr>
						<th style="border: none;">
							<a href="tel:00359890305898"" target="_blank" class="gmailbtn">BOOK BY CALL<br><div class="phonecallmail">(00359890305898)</div></a>
						</th>
						<th style="border: none;">
							<a href="mailto:banskoholidays@outlook.com?subject=Hotel Molerite" target="_blank" class="gmailbtn">BOOK BY EMAIL<br><div class="phonecallmail">(banskoholidays@outlook.com)</div></a>
						</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>