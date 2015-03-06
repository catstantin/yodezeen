<!-- Меню -->
<div class="nav">
	<div id="main-menu">
		<nav class="cl-effect-2" id="mainMenu">
			<span data-menuanchor="page-1"><a id="m1" href="#page-1"><span data-hover="H&Oslash;ME">H&Oslash;ME</span></a></span>
			<span data-menuanchor="page-2"><a id="m2" href="#page-2"><span data-hover="AB&Oslash;UTUS">AB&Oslash;UTUS</span></a></span>
			<span data-menuanchor="page-3"><a id="m3" href="#page-3"><span data-hover="C&Oslash;NTACTS">C&Oslash;NTACTS</span></a></span>
			<span data-menuanchor="page-1"><a id="m4" href="#page-1/1"><span data-hover="ARCHITECTURE">ARCHITECTURE</span></a></span>
			<span data-menuanchor="firstPage"><a id="m5" href="#design"><span data-hover="DESIGN">DESIGN</span></a></span>
			<span data-menuanchor="firstPage"><a id="m6" href="#blog"><span data-hover="BL&Oslash;G">BL&Oslash;G</span></a></span>
			<span data-menuanchor="firstPage"><a id="m7" href="#publications"><span data-hover="PUBLICATION">PUBLICATION</span></a></span>
		</nav>
	</div>
</div>
<!-- Слайды -->
<div id="fullpage">
	<!-- Страница 1 -->
	<div class="section" id="page1">
		<div class="slide"  data-anchor="splash" id="splash-slide">
			<div id="trailer" class="is_overlay">
				<video id="video" width="100%" height="auto" autoplay="autoplay" loop="loop" preload="auto">
					<source src="/themes/front/video/mainpage.mp4"></source>
				</video>
				<!-- <div class="mask"></div> -->
			</div>
			<div class="os-phrases" id="os-phrases">
				<h2>Y&Oslash;DEZEEN</h2>
				<h2>DESIGN</h2>
				<h2>ARCHITECTURE</h2>
				<img src="/themes/front/img/logo.png" class="logo"/>
			</div>
		</div>
		<div class="slide" data-anchor="portfolio" id="architecture">
			<div class="port-container">
				<ul class="cbp-rfgrid">

				</ul>
			</div>
		</div>
	</div>
	<!-- Страница 2 -->
	<div class="section" id="page2">
		<div class="slide" data-anchor="about-us">
			<p class="text-ab">
				<?=$about ?>
			</p>
		</div>
		<div class="slide" data-anchor="projects" id="projects">
			<div class="mapc">
				<object data="/themes/front/img/map.svg" type="image/svg+xml" id="svgmap" width="100%" style="margin: 0 auto;">
					<p>Ваш браузер не поддержует интерактивную карту!</p>
				</object>
			</div>
		</div>
		<div class="slide">
			<ul class="cbp-rfgrid command">
			<?php if(is_array($team))
					foreach($team as $item){
			?>
				<li>
					<a class="img-lnk" href="#">
						<img src="/uploads/team/<?=$item['img']?>" />
					</a>
					<div class="info">
						<h2><?=$item['name']?></h2>
						<p><?=$item['position']?></p>
					</div>
				</li>						
			<?php }?>
			</ul>
		</div>
		<!-- <div class="mask"></div> -->
	</div>
	<!-- Страница 3 -->
	<div class="section best" id="page3">
		<div class="all-works"><a href="#">All works</a></div>
		<div class="slide">
			<img src="/themes/front/img/bestwork/1.jpg">
			<p class="text-ab">Bakary  cafe in Ukraine</p>
		</div>
		<div class="slide">
			<img src="/themes/front/img/bestwork/2.jpg">
			<p class="text-ab">Classic apartment in Miami Turnberry</p>
		</div>
		<div class="slide">
			<img src="/themes/front/img/bestwork/3.jpg">
			<p class="text-ab">Contemporary apartment in Kiev</p>
		</div>
		<div class="slide">
			<img src="/themes/front/img/bestwork/4.jpg">
			<p class="text-ab">Contemporary apartment in Moscow</p>
		</div>
		<div class="slide">
			<img src="/themes/front/img/bestwork/5.jpg">
			<p class="text-ab">Contemporary house in Croatia</p>
		</div>
		<div class="slide">
			<img src="/themes/front/img/bestwork/6.jpg">
			<p class="text-ab">Hall in the business center Kiev</p>
		</div>
		<div class="slide">
			<img src="/themes/front/img/bestwork/7.jpg">
			<p class="text-ab">Loft apartment in New York</p>
		</div>
		<div class="slide">
			<img src="/themes/front/img/bestwork/8.jpg">
			<p class="text-ab">Loft House in Kiev</p>
		</div>
		<div class="slide">
			<img src="/themes/front/img/bestwork/9.jpg">
			<p class="text-ab">Penthouse in Miami</p>
		</div>
		<div class="slide">
			<img src="/themes/front/img/bestwork/10.jpg">
			<p class="text-ab">Restaurant Rivoli in Kiev</p>
		</div>
		<div class="slide">
			<img src="/themes/front/img/bestwork/11.jpg">
			<p class="text-ab">Villa in Croatia</p>
		</div>
	</div>
	<!-- Страница 3 -->
	<div class="section" id="page4">
		<p class="text-ab active"><?=$contacts ?></p>
	</div>
</div>
<!--Include scripts -->

<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> -->
<script type="text/javascript" src="/themes/front/js/arch.js"></script>