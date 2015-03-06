<!DOCTYPE html>
<html>
<head>
	<title>Архитектура</title>
	<link rel="stylesheet" href="/themes/front/css/fonts.css" type="text/css" />
	<link rel="stylesheet" href="/themes/front/css/jquery.fullPage.css" type="text/css" />
	<link rel="stylesheet" type="text/css" href="/themes/front/css/component.css" />
	<link rel="stylesheet" type="text/css" href="/themes/front/css/style.css" />
	<script src="/themes/front/js/jq.js"></script>
	<script src="/themes/front/js/jquery.tmpl.js"></script>
	<script id="fpreview" type="text/x-jquery-tmpl">
		<li>
			<a class="img-lnk" href="${link}">
				<img src="${previewImg}" />
			</a>
			<div class="info">
				<h2>${folioCaption}</h2>
				<p>${location}</p>
			</div>
			<ul class="socials">
				<li class="fb"><a href="#">FB</a></li>
				<li class="tw"><a href="#">TW</a></li>
				<li class="gg"><a href="#">VK</a></li>
			</ul>
		</li>
	
	</script>
</head>
<body>
<div class="loading"></div>
<!-- Элементы общие для всех страниц -->
<button id="menu-trigger"></button>


<?php echo $content; ?> 


<script src="/themes/front/js/jquery.easings.min.js"></script>
<script src="/themes/front/js/jquery.svg.js"></script>
<script src="/themes/front/js/jquery.lettering.js"></script>
<script type="text/javascript" src="/themes/front/js/jquery.slimscroll.min.js"></script>
<script type="text/javascript" src="/themes/front/js/jquery.fullPage.min.js"></script>
<script src="/themes/front/js/modernizr.custom.js"></script>
<script src="/themes/front/js/modernizr.custom.menu.js"></script>
</body>
</html>