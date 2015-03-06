var loadArch = false;

/*
	Document Ready function
*/


$(function (){
	var indexPage = "", 
		textAbout = $('.text-ab'),
		mainVideo = $('#video')[0],
		menuTrigger = $('#menu-trigger'),
		mainMenuContainer = $('.nav'),
		mainMenuItem = $(".cl-effect-2 a"),
		trig = false;

	$('#fullpage').fullpage({
		scrollOverflow: true,
		css3: true,
		scrollingSpeed: 300,
		easingcss3: 'linear',
		easing: 'linear',
		anchors: ['page-1','page-2','page-3','page-4'],
		menu: '#mainMenu',
		afterRender: function(){
			mainVideo.play();

		},
		onLeave: function(index, nextIndex, direction){
			 if(index === 1 || index === 3){
			 	mainVideo.pause();
			 	//$.fn.fullpage.moveTo('page-2',0);
				}
			// if(index == 2){
			// 	textAbout.removeClass('active');
			// 	$.fn.fullpage.moveTo('page-1',0);
			// }
		},
		afterLoad: function(anchorLink, index){
			if(index == 2){
				textAbout.addClass('active');
			}
			if(index == 1){
				mainVideo.play();
			}
			// if (anchorLink == "page-1/portfolio"){
			// 	alert(anchorLink);
			// 	$.fn.fullpage.setAllowScrolling(false);
			// }
		}
	});
/* 
	Navigation
*/
	menuTrigger.on('click',function() {
		if (!trig){
			$(this).addClass('active');
			mainMenuContainer.addClass('active');
			trig = true;
			$.fn.fullpage.setAllowScrolling(false);
		} else {
			$(this).removeClass('active');
			mainMenuContainer.removeClass('active');
			trig = false;
			$.fn.fullpage.setAllowScrolling(true);
		}
	});
	mainMenuItem.on("click", function(event){
		$.fn.fullpage.setAllowScrolling(true);
		if ($(this).attr('id') === 'm4'){
			$.fn.fullpage.setAllowScrolling(false);
			event.preventDefault();
			$('.loading').slideDown(300);
			getFolio();
			setTimeout(function(){
				location.hash = "#page-1/portfolio";
			}, 200);
		}
		setTimeout(function(){
			trig = false;
			menuTrigger.removeClass('active');
			mainMenuContainer.removeClass('active');
		}, 1000);
	});
	 $('.port-container').on("click",".img-lnk",function(event){
	 	event.preventDefault();
	 	$('.loading').slideDown(300);
	 	setTimeout(function(){
	 		window.location = "/item/";
	 	});
	 });
});
$(window).on('hashchange', function() {

});
function getFolio(folio){
	if (!loadArch){
		loadArch = true;
		$.ajax({
				url: "/site/getportfolio/",
				dataType: "json",
				success: function(data){
					$('.loading').slideUp(300);
					var result = data.data;
					$('#fpreview').tmpl(result).appendTo('.port-container .cbp-rfgrid');
					$.fn.fullpage.reBuild();
					location.hash = "#page-1/portfolio";
					$.fn.fullpage.setAllowScrolling(false);
				},
				error:function(){
					alert("Error");
				}
			});
	} else{
		$('.loading').slideUp(300);
	}

}
if (location.hash == "#page-1/portfolio"){
	getFolio();
}


/*On load function*/
$(window).load(function () {
	var svgobject = document.getElementById('svgmap'),
		splashText = $("#os-phrases > h2");
	// if ('contentDocument' in svgobject) {
	// 	var svgdom = $(svgobject.contentDocument);
	// 	$(".st0", svgdom).click(function(){
	// 		$(this, svgdom).myAddClass('active');
	// 	});
	// }
	$('.loading').slideUp(300);
	splashText.lettering('words').children("span").lettering().children("span").lettering(); 
});