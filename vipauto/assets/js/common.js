$(document).ready(function() {
	//collapse-toggle
	$(".collapse-toggle").click(function(e){
		e.preventDefault();
		var eid = $(this).attr('data-toggle');
		$(eid).slideToggle();
	});
	
	//image sliders
	var owl = $(".carousel");
	owl.owlCarousel({
		items : 4,
		autoPlay: true
	});
	var owl = $(".carousel-to-phone");
	owl.owlCarousel({
		items : 1,
		autoPlay: true,
		pagination: true
	});
	$(".next_button").click(function(){
		owl.trigger("owl.next");
	});
	$(".prev_button").click(function(){
		owl.trigger("owl.prev");
	});
	
	// Tabs slider
	var owl = $(".nav-tabs-slider");
	  owl.owlCarousel({
      items : 3,
      itemsDesktop : [960,3],
      itemsDesktopSmall : [700,3],
      itemsTablet: [480,2],
      itemsMobile : [320,1]
	});
	// Custom Navigation Events
	$(".next").click(function(){
		owl.trigger('owl.next');
	})
		$(".prev").click(function(){
	owl.trigger('owl.prev');
	})
	
	// Tabs inner
	$(".tab-content").hide();
	$(".nav-tabs-slider li:first").attr("class","active");
	$(".tab-content:first").fadeIn();
 
    $('.nav-tabs-slider li a').click(function(e) {
        e.preventDefault();
        $(".tab-content").hide();
        $(".nav-tabs-slider li").attr("class","");
        $(this).parent("li").attr("class","active");
        var CID = $(this).attr('href');
		$(CID).fadeIn();
    });
	// Tabs parent
	$(".panel-content").hide();
	$(".nav-tabs-panels li:first").attr("class","active");
	$(".panel-content:first").fadeIn();
 
    $('.parent-tabs-panels .nav-tabs li a').click(function(e) {
        e.preventDefault();
        $(".panel-content").hide();
        $(".parent-tabs-panels .nav-tabs li").attr("class","");
		$(".nav-tabs-slider .owl-wrapper .owl-item li").attr("class","");
		
        $(this).parent("li").attr("class","active");

        var panelID = $(this).attr('href');
		$(panelID).fadeIn();

		var innertab = $(panelID+" .nav-tabs-slider .owl-wrapper .owl-item:first li");
		$(innertab).attr("class","active");
		var innertabID = $(panelID+" .nav-tabs-slider .owl-wrapper .owl-item li.active a").attr('href');
		$(innertabID).fadeIn();
    });
	
	$('footer').children(".container").children("ul").append('<li>Design by <a href="http://lipinart.ru" target="_blank">Lipinart</a></li>');
});