/*$(document).ready(function(){*/
jQuery(document).ready(function ($) {	
	var height = $(window).height();

	$('#mainCarousel').height(height/1.5)

	$( window ).resize(function() {
	 	height = $(window).height();
		$('#mainCarousel').height(height/1.5)
	});

	$('#mainCarousel').on('slid.bs.carousel',function(e){
	    var slideIdx = $(this).find('.active').index() + 1;
	    $('.indicators li').removeClass('active');
	    $('.indicators li:nth-child(' + slideIdx + ')').addClass('active');
	});

	$('.menu a').click(function(e){
		e.preventDefault();
		var q = $($(this).attr('href'));
		if (q){
			$('html, body').animate({
		        scrollTop: q.offset().top - 136
		    }, 500);
		}
	})

	$('#contact input, #contact textarea').on('focus', function(){
		$(this).next().animate({width:'0px'},0);
		$(this).next().animate({width:'100%'},500);
	})

	function showDownloadInfo(p_imgSelector){
		$(p_imgSelector).animate({'background-size': '150%'}, 500);
		$(p_imgSelector).find('.note').css('display', 'flex');
	}

	function hideDownloadInfo(p_imgSelector){
		$(p_imgSelector).animate({'background-size': '100%'}, 250);
		$(p_imgSelector).find('.note').hide();
	}

	$('#product .p-img').on('mouseenter', function(){
		showDownloadInfo(this);
	}).on('mouseleave', function(){
		hideDownloadInfo(this);
	})

	$('#product .p-img + h3>a').on('mouseenter', function(){
		showDownloadInfo($(this).parent().prev());
	}).on('mouseleave', function(){
		hideDownloadInfo($(this).parent().prev());
	})

	function getBreakPoint(el){
		let rect = $(el).get(0).getBoundingClientRect();
		return rect.top > 0 && rect.top < $(window).height() * 0.75;
	}

	$(window).scroll(function(){
		let ct_isOver = getBreakPoint('#contact');
		let map_isOver = getBreakPoint('#map');
		let p_isOver = getBreakPoint('#product');
		let c_isOver = getBreakPoint('#company_info');
		let s_isOver = getBreakPoint('#slider');

		let activeNav = null;
		$('.menu li').removeClass('active');

		if (ct_isOver){
			activeNav = $('a[href="#contact"]').parent();
		}
		if (map_isOver){
			activeNav = $('a[href="#map"]').parent();
		}
		if (p_isOver){
			activeNav = $('a[href="#product"]').parent();
		}
		if (c_isOver){
			activeNav = $('a[href="#company_info"]').parent()
		}
		if (s_isOver){
			activeNav = $('a[href="#slider"]').parent()
		}

		if (activeNav){
			activeNav.addClass('active');
		}
	})
})