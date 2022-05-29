<label class="popbox-BG" for="hotelbg"></label>
<div class="popbox-conn">
	<label class="popbox-close" for="hotelbg"></label>
	<div class="content">
	<center>
	
	<div class="container">
		<div class="myHotelbggallery">
			<div class="numbertext">1 / 7</div>
			<img src="img/hotelbulgaria/1.jpg">
		</div>

		<div class="myHotelbggallery">
			<div class="numbertext">2 / 7</div>
			<img src="img/hotelbulgaria/2.jpg">
		</div>

		<div class="myHotelbggallery">
			<div class="numbertext">3 / 7</div>
			<img src="img/hotelbulgaria/3.jpg">
		</div>
		
		<div class="myHotelbggallery">
			<div class="numbertext">4 / 7</div>
			<img src="img/hotelbulgaria/4.jpg">
		</div>
		
		<div class="myHotelbggallery">
			<div class="numbertext">5 / 7</div>
			<img src="img/hotelbulgaria/5.jpg">
		</div>
		
		<div class="myHotelbggallery">
			<div class="numbertext">6 / 7</div>
			<img src="img/hotelbulgaria/6.jpg">
		</div>
		
		<div class="myHotelbggallery">
			<div class="numbertext">7 / 7</div>
			<img src="img/hotelbulgaria/7.jpg">
		</div>
    
		<div class="caption-container"><p id="captionbg"></p></div>

		<div class="row">
			<div class="column">
				<img class="demobg cursor" src="img/hotelbulgaria/1.jpg" onclick="currentSlidebg(1)">
			</div>
			<div class="column">
				<img class="demobg cursor" src="img/hotelbulgaria/2.jpg" onclick="currentSlidebg(2)">
			</div>
			<div class="column">
				<img class="demobg cursor" src="img/hotelbulgaria/3.jpg" onclick="currentSlidebg(3)">
			</div>
			<div class="column">
				<img class="demobg cursor" src="img/hotelbulgaria/4.jpg" onclick="currentSlidebg(4)">
			</div>
			<div class="column">
				<img class="demobg cursor" src="img/hotelbulgaria/5.jpg" onclick="currentSlidebg(5)">
			</div>
			<div class="column">
				<img class="demobg cursor" src="img/hotelbulgaria/6.jpg" onclick="currentSlidebg(6)">
			</div>
			<div class="column">
				<img class="demobg cursor" src="img/hotelbulgaria/7.jpg" onclick="currentSlidebg(7)">
			</div>
		</div>
		
		<script>
var slideIndexbg = 1;
showSlidesbg(slideIndexbg);

function plusSlides(n) {
  showSlidesbg(slideIndexbg += n);
}

function currentSlidebg(n) {
  showSlidesbg(slideIndexbg = n);
}

function showSlidesbg(n) {
  var i;
  var slidesbg = document.getElementsByClassName("myHotelbggallery");
  var dots = document.getElementsByClassName("demobg");
  var captionText = document.getElementById("captionbg");
  if (n > slidesbg.length) {slideIndexbg = 1}
  if (n < 1) {slideIndexbg = slidesbg.length}
  for (i = 0; i < slidesbg.length; i++) {
      slidesbg[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slidesbg[slideIndexbg-1].style.display = "block";
  dots[slideIndexbg-1].className += " active";
  captionText.innerHTML = dots[slideIndexbg-1].alt;
}
</script>
	</div>
	</center>
	<div class="popupboxtours">
			<font color="#000"><h4>HOTEL BULGARIA</h4><hr></font>
		
			<p>Under the sunshine of the Pirin Mountain, so harsh, impressive, beautiful ... a similarity of the Alps, but more wild and more legendary! At the foot of the mountain there is a town with a rich history - Bansko! We have the honor and the pleasure to create something so cozy and hospitable as the town itself! Welcome, touch the traditions and spirit of our country! On 01 January 2019 Wellness Hotel BULGARIA opened doors for all you!

The hotel is located 5 minutes from the cabin lift and just as far from the center and the old part of the town where you can explore the cultural landmarks. It has 22 double rooms and 10 suites, luxuriously furnished with magnificent views of the vast mountain. For the comfort of our guests we offer underground parking, conference hall, restaurant with international food, whiskey bar, cafe-terrace, wellness center, sports center (equipped with TechnoGym appliances), ski wardrobe, playground for the kids, free internet. The hotel is suitable for both - family vacations and corporate events and team-building.</p><hr>
			<div class="toursleft">
				<div class="toursprice"><p>Price: from &euro;60</p></div>
			</div>
			<div class="toursright">
				<table style="background: #fff;">
					<tr>
						<th style="border: none;">
							<a href="tel:00359890305898"" target="_blank" class="gmailbtn">BOOK BY CALL<br><div class="phonecallmail">(00359890305898)</div></a>
						</th>
						<th style="border: none;">
							<a href="mailto:banskoholidays@outlook.com?subject=Hotel Bulgaria" target="_blank" class="gmailbtn">BOOK BY EMAIL<br><div class="phonecallmail">(banskoholidays@outlook.com)</div></a>
						</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>