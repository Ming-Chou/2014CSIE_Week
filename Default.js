$(function(){
	$('a.gotoheader').click(function(){
		$('html, body').animate({
			scrollTop: 0
		}, 1000); 
		return false;
	});
});	

$(window).load(function() {
    $('#slider').nivoSlider({
        animSpeed:1000, // Slide transition speed
        pauseTime:4000, // How long each slide will show
        captionOpacity:0.8,
    });
});


$(function(){
	var $sidebar = $('#sidebar'),
		_top = $sidebar.offset().top;
		var $win = $(window).scroll(function(){
		if($win.scrollTop() >= _top){
			if($sidebar.css('position')!='fixed'){
				$sidebar.css({
					position: 'fixed',
					top: 0,
				});
			}
		}else{
			$sidebar.css({
				position: 'relative',
			});
		}
		});
});


$('#a.gotoheader').click(function(){$('html,body').animate({scrollTop: '0px'}, 800);});
hs.graphicsDir = '../highslide/graphics/';
hs.outlineType = 'glossy-dark';	
hs.showCredits = false;
hs.dragByHeading = false;
hs.align = 'auto';
hs.transitions = ['expand', 'crossfade'];
hs.fadeInOut = false;
hs.dimmingOpacity = 0.01;
hs.wrapperClassName = 'draggable-header';
// Controls
hs.registerOverlay({
	html: '<div class="closebutton" onclick="return hs.close(this)" title="閉じる"></div>',
	position: 'top right',
	useOnHtml: true,
	fade: 2 // fading the semi-transparent overlay looks bad in IE
});

$(document).ready(function() {
	$('#s8').cycle({ 
    fx:     'fade', 
	speed:   1000, 
	timeout: 9000, 
    next:   '#s8', 
	});


	$('#s9').cycle({ 
    fx:     'scrollDown', 
	speed:   1000, 
	timeout: 9000, 
    next:   '#s9', 
	});

	$('#s10').cycle({ 
    fx:     'fade', 
	speed:   500, 
	timeout: 5000, 
	});


	$('#s0') 
	.before('<div id="nav0">') 
	.cycle({ 
	    fx:     'uncover', 
	    speed:   500, 
	    timeout: 5000, 	    
	    pager:  '#nav0',
	    pagerEvent: 'mouseover',
	    after:     function() {
        	$('#caption0').html(this.title);
        }	    
	});

	$('#s1') 
	.before('<div id="nav1">') 
	.cycle({ 
	    fx:     'uncover', 
	    speed:   500, 
	    timeout: 6800, 	    
	    pager:  '#nav1',
	    pagerEvent: 'mouseover',
	    after:     function() {
        	$('#caption1').html(this.title);
        }	    
	});
	
	$('#s2') 
	.before('<div id="nav2">') 
	.cycle({ 
	    fx:     'uncover', 
	    speed:   500, 
	    timeout: 7200, 	    
	    pager:  '#nav2',
	    pagerEvent: 'mouseover',
	    after:     function() {
        	$('#caption2').html(this.title);
        }	    
	});
	
	$('#s3') 
	.before('<div id="nav3">') 
	.cycle({ 
	    fx:     'uncover', 
	    speed:   500, 
	    timeout: 4800, 	    
	    pager:  '#nav3',
	    pagerEvent: 'mouseover',
	    after:     function() {
        	$('#caption3').html(this.title);
        }	    
	});
	
});


$.fn.cycle.defaults.timeout = 6000;
$(function() {
    // run the code in the markup!
    $('table pre code').not('#skip,#skip2').each(function() {
        eval($(this).text());
    });          
});
