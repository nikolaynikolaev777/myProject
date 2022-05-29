<?php include'../core/header.php'?>
		
			
		<div class="title">MU-ONLINE VERSION 99</div>
		
		<center><h5>MU-ONLINE Version 99 have new map - Kalima (Lost Map) / new event Chaos Castle / new character Magic Gladiator</h5></center>
		
		<center>
			<a href="../character/dw/dw.php">
				<div class="imgbox">
					<img src="../img/character/dw/dw.png" alt="Dark Wizard" width="100px">
					<div class="imgboxtxt">Magic Gladiator</div>
				</div>
			</a>
			<a href="../character/dk/dk.php">
				<div class="imgbox">
					<img src="../img/character/dk/dk.png" alt="Dark Knight" width="100px">
					<div class="imgboxtxt">Dark Knight</div>
				</div>
			</a>
			<a href="../character/elf/elf.php">
				<div class="imgbox">
					<img src="../img/character/elf/elf.png" alt="Elf" width="100px">
					<div class="imgboxtxt">Elf</div>
				</div>
			</a>
			<a href="../character/dl/dl.php">
				<div class="imgbox">
					<img src="../img/character/dl/dl.png" alt="Dark Lord" width="100px">
					<div class="imgboxtxt">Dark Lord</div>
				</div>
			</a>
			<a href="../character/mg/mg.php">
				<div class="imgbox">
					<img src="../img/character/mg/mg.png" alt="Magic Gladiator" width="100px">
					<div class="imgboxtxt">Magic Gladiator</div>
				</div>
			</a>
		</center>
		
		<input id="maps97" type="checkbox" name="menu" />
		<label class="sst" for="maps97">MU-ONLINE VERSION 99 ALL MAPS</label>
		<ul class="submenu">
			<center>
				<table>
					<tr>
						<th style="text-align: left;">Map</th>
						<th style="text-align: center;">Required Level</th>
						<th style="text-align: right;">Required Zen</th>
					</tr>
					<tr>
						<td style="text-align: left;">Arena</td>
						<td style="text-align: center;">200</td>
						<td style="text-align: right;">30 000</td>
					</tr>
					<tr>
						<td style="text-align: left;">Lorencia</td>
						<td style="text-align: center;">30</td>
						<td style="text-align: right;">3 000</td>
					</tr>
					<tr>
						<td style="text-align: left;">Noria</td>
						<td style="text-align: center;">30</td>
						<td style="text-align: right;">3 000</td>
					</tr>
					<tr>
						<td style="text-align: left;">Davias</td>
						<td style="text-align: center;">50~80</td>
						<td style="text-align: right;">8 000</td>
					</tr>
					<tr>
						<td style="text-align: left;">Dungeon</td>
						<td style="text-align: center;">40~80</td>
						<td style="text-align: right;">18 000</td>
					</tr>
					<tr>
						<td style="text-align: left;">Atlans</td>
						<td style="text-align: center;">90~150</td>
						<td style="text-align: right;">20 000</td>
					</tr>
					<tr>
						<td style="text-align: left;">Lost Tower</td>
						<td style="text-align: center;">100~150</td>
						<td style="text-align: right;">16 000</td>
					</tr>
					<tr>
						<td style="text-align: left;">Tarkan</td>
						<td style="text-align: center;">150~200</td>
						<td style="text-align: right;">25 000</td>
					</tr>
					<tr>
						<td style="text-align: left;">Icarus</td>
						<td style="text-align: center;">250</td>
						<td style="text-align: right;">27 000</td>
					</tr>
					<tr style="background: #BF1626; color: #fff;">
						<td style="text-align: left;">Kalima</td>
						<td style="text-align: center;">50~350</td>
						<td style="text-align: right;">Lost Map</td>
					</tr>
				</table>
			</center>
		</ul>
		
		<center><h5>Mu-Online Events</h5></center>
		<center>
			<table>
				<tr>
					<th style="text-align: left;">Event</th>
					<th style="text-align: left;"></th>
					<th style="text-align: center;">Information</th>
					<th style="text-align: center;">Tutorial</th>
				</tr>
				<tr>
					<td style="text-align: left;">Blood Castle</td>
					<td style="text-align: center;"><img src="icon/bc.png"></td>
					<td>
						<label style="cursor:pointer;" for="bc-example"><div class="examplebtn">Example</div></label>
						<input class="popbox-post" id="bc-example" type="checkbox" />
						<div class="popbox"><?php include'event/bc-example.php'?></div>
					</td>
					<td>
						<label style="cursor:pointer;" for="cstutorial"><div class="tutorialbtn">TUTORIAL</div></label>
						<input class="popbox-post" id="cstutorial" type="checkbox" />
						<div class="popbox"><?php include'cstutorial.php'?></div>
					</td>
				</tr>
				<tr>
					<td style="text-align: left;">Devil Square</td>
					<td style="text-align: center;"><img src="icon/ds.png"></td>
					<td>
						<label style="cursor:pointer;" for="ds-example"><div class="examplebtn">Example</div></label>
						<input class="popbox-post" id="ds-example" type="checkbox" />
						<div class="popbox"><?php include'event/ds-example.php'?></div>
					</td>
					<td>
						<label style="cursor:pointer;" for="dstutorial"><div class="tutorialbtn">TUTORIAL</div></label>
						<input class="popbox-post" id="dstutorial" type="checkbox" />
						<div class="popbox"><?php include'dstutorial.php'?></div>
					</td>
				</tr>
				<tr>
					<td style="text-align: left;">Golden Invasion</td>
					<td style="text-align: center;"><img src="icon/gi.png"></td>
					<td>
						<label style="cursor:pointer;" for="gi-example"><div class="examplebtn">Example</div></label>
						<input class="popbox-post" id="gi-example" type="checkbox" />
						<div class="popbox"><?php include'event/gi-example.php'?></div>
					</td>
					<td>
						<label style="cursor:pointer;" for="ginvtutorial"><div class="tutorialbtn">TUTORIAL</div></label>
						<input class="popbox-post" id="ginvtutorial" type="checkbox" />
						<div class="popbox"><?php include'ginvtutorial.php'?></div>
					</td>
				</tr>
				<tr style="background: #BF1626; color: #fff;">
					<td style="text-align: left;">Chaos Castle</td>
					<td style="text-align: center;"><img src="icon/cc.png"></td>
					<td>
						<label style="cursor:pointer;" for="cc-example"><div class="examplebtn">Example</div></label>
						<input class="popbox-post" id="cc-example" type="checkbox" />
						<div class="popbox"><?php include'event/cc-example.php'?></div>
					</td>
					<td>
						<label style="cursor:pointer;" for="cctutorial"><div class="tutorialbtn">TUTORIAL</div></label>
						<input class="popbox-post" id="cctutorial" type="checkbox" />
						<div class="popbox"><?php include'cctutorial.php'?></div>
					</td>
				</tr>
			</table>
		</center>
<?php include'../core/footer.php'?>
