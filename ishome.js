$(function(){
	$(".coverflowAd").pngFix(); 	
	
	//開啟隱藏統計區塊
	function showit(){
		$("#statbox").toggle(location.search=="?show");
	}	
	showit();

	
	//滑入切換圖框
	$('#newsDocList-pannel ul li').hover(function(){
			$(this).addClass('postOver');		
		},function(){
			$(this).removeClass('postOver');	
		}
	);
	
	$('#newsDocList-pannel ul li').click(function(){
		//alert($(this).find("h2 a").attr("href"));
	
		location.replace($(this).find("h2 a").attr("href"));
	});	
		
	//滑動效果
	var current = 0;
	var step= 4; 
	var filmStrip = $("#newsDocList-pannel");
	var listItems = filmStrip.find("li");	
	$("#prebtn").css('opacity', 0.5);
	
	function scrollToEle(dir){			
		if(dir){
			if(current + step < listItems.length+1){
				current += step;
			}else{
				return;
			}
		
		}else{
			if(current - step >= 0){
				current -= step;
			}else{
				return;
			}
		}
		
		//當大於總數時跳到第二頁
		if(current + step > listItems.length){
			location.replace("index.php?paged=2");
		}
		
		nextItem = listItems.eq(current);
			
		if($(nextItem).length>0){			
			var _top = nextItem.position().top;		
			filmStrip.find("ul").animate({top: _top*-1}, {duration: 1000, queue: false});
		}
		
		
		if(current==0){
			$("#prebtn").css('opacity', 0.5);
		}else{
			$("#prebtn").css('opacity', 1);
		}
		
		if(current >= (listItems.length+1)-step){
			$("#nextbtn").css('opacity', 0.5);
		}else{
			$("#nextbtn").css('opacity', 1);
		}	
		
	}

	$("#nextbtn").bind("click", {dir: 1}, function(e){
		scrollToEle(e.data.dir);
	});

	$("#prebtn").bind("click", {dir: 0}, function(e){
		scrollToEle(e.data.dir);
	});	
		
});

// JavaScript Document
//內頁上區塊ad輪播
$(function(){
	var timer;
	var img = -1;
	var speed = 10000;
	var fOut = 500, fIn = 1000;
	var myImages = $(".list a");	
	$("#TopAD").slideDown();
	
	$(".link").append("<ul />");
	for(var i=1;i<=myImages.length;i++){
		$(".link ul").append("<li>"+i+"</li>");
	}

	$(".link li").click(function(){
		var idx = $(this).text() - 1;
		img = idx;

		var _link = myImages.eq(idx);
		var adlink=_link.attr("href");
		var adtitle=_link.find("img").attr("title");
		//var addate=_link.find("img").attr("rel");
		var adbody=_link.find("img").attr("alt");
		var adsrc=_link.find("img").attr("src");
		var adlink=_link.attr("href");
		var adtarget=_link.attr("target");
		
		/*滾動效果*/
		$(".TopAdleft > *:not(.link)").fadeOut(fOut, function(){
			$(".TopAdleft h2").find("a").attr({
				href: adlink,
				target: adtarget
			});
			$(".TopAdleft h2 a").html(adtitle);		
			//$(".TopAdleft .AdDate").html("Post by Minwt on"+addate);
			
			$(".TopAdleft .Adbody a").html(adbody);
			$(".TopAdleft .Adbody").find("a").attr({
				href: adlink,
				target: adtarget
			});
		}).fadeIn(fIn);
		$(".TopAdright").fadeOut(fOut, function(){
			$(".TopAdright").find("a").attr({
				href: adlink,
				target: adtarget
			});
			$(".TopAdright").find("img").attr("src",adsrc);
		}).fadeIn(fIn);	
		
		$(this).removeClass("off").addClass("on")
			.siblings().removeClass("on").addClass("off");
		
	});

	$("#TopAD").hover(function(){
		clearTimeout(timer);
	}, function(){
		timer = setTimeout(autoShow, speed);
	});
	
	function autoShow(){
		img = (img+1<myImages.length) ? img+1 : 0;
		$(".link li").eq(img).click();
		timer = setTimeout(autoShow, speed);
	}

	autoShow();
	
//***************************************************************************************************************************************//	
//ADShow.js
//首頁Coverflow Ad輪播
$("#TopAD").slideDown();
		// 先取得 .coverflowAd 及原始的 ul 項目
		// 接著產生三組 div 並各自包一個 ul 項目
		// 再來取得一些額外的參數、小圖及大圖的名稱
		var $coverflowAd = $('.coverflowAd'),
			$source = $coverflowAd.children('ul').remove(),
			$leftUl = $('<div class="coverflowAd_left"><ul></ul></div>').children(),
			$rightUl = $('<div class="coverflowAd_right"><ul></ul></div>').children(),
			$mainUl = $('<div class="coverflowAd_main"><ul></ul></div>').children(),
			$sourceLi = $source.children(),
			_liStr = $source.html(),
			_itemLen = $sourceLi.length,
			_middle = Math.ceil(_itemLen / 2),
			_smallWidth = 190, _bigWidth = 370,
			_speed = 3000, _coverflowAdTimer, _barWidth = 970; //_speed = scroll time
		
		// 幫左邊 ul 清單加入 li 項目
		$leftUl.append(_liStr + getLiItem(0, _middle));
		// 幫右邊 ul 清單加入 li 項目
		$rightUl.append(getLiItem(_middle, _itemLen) + _liStr + getLiItem(0, _itemLen - _middle));
		// 幫中間 ul 清單加入 li 項目
		$mainUl.append((getLiItem(_middle - 1, _itemLen) + _liStr));
		// 把 ul 清單部份都加到 .coverflowAd 中
		$coverflowAd.append($leftUl.parent(), $rightUl.parent(), $mainUl.parent());
		$coverflowAd.append('<div class="mask"><div class="coverflowAd_desc"><div class="coverflowAd_desc_bg"></div><div class="coverflowAd_desc_content"></div></div><div class="proc"></div></div>');
		var $proc = $('.coverflowAd .mask .proc');
		$('.coverflowAd .coverflowAd_desc_bg').css('opacity', 0.7);
		$coverflowAd.append($leftUl.parent().clone().addClass('fake'), $rightUl.parent().clone().addClass('fake'), $mainUl.parent().clone().addClass('fake'));
		$coverflowAd.find('.fake img').css('opacity', 0);
		$rightUl.add($leftUl).find('li a').fadeTo(200, 0.3);
		setTitleAndDesc(0);

		// 幫控制用的右邊遮罩 ul li a 加上 click 事件
		// 當點擊到時往左移動項目
		$('.coverflowAd_right.fake').find('li a').click(function(){
			move(($(this).parent().index() + 1) % $rightUl.children().length);
			return false;
		});
		
		// 幫控制用的左邊遮罩 ul li a 加上 click 事件
		// 當點擊到時往右移動項目
		$('.coverflowAd_left.fake').find('li a').click(function(){
			var _index = $(this).parent().index();
			if(_index<=1){
				$leftUl.add($rightUl).add($('.coverflowAd_right.fake ul, .coverflowAd_left.fake ul')).css('left', _itemLen * _smallWidth * -1);
				$mainUl.add($('.coverflowAd_main.fake ul')).css('left', _itemLen * _bigWidth * -1);
				_index += _itemLen;
			}
			move((_index - (_itemLen - _middle)) % $leftUl.children().length);
			return false;
		});
		
		// 幫控制用的左右兩邊遮罩的 ul li a 加上 hover 事件
		// 當滑鼠移到項目時就變成不透明；移出則再變成 0.5 的透明度
		$('.coverflowAd_right.fake, .coverflowAd_left.fake').find('li a').hover(function(){
			var $this = $(this);
			($this.parents('div').attr('className').indexOf('coverflowAd_right')>-1 ? $rightUl : $leftUl).children('li').eq($this.parent().index()).children().fadeTo(200, 1);
		}, function(){
			var $this = $(this);
			($this.parents('div').attr('className').indexOf('coverflowAd_right')>-1 ? $rightUl : $leftUl).children('li').eq($this.parent().index()).children().fadeTo(200, 0.5);
		});
		$('.coverflowAd_main.fake').hover(function(){
			$('.coverflowAd .coverflowAd_desc').stop().css('bottom', 17).animate({
				height: 230+'px'
			});
		}, function(){
			$('.coverflowAd .coverflowAd_desc').stop().animate({
				height: 0
			}, function(){
				$(this).css('bottom', 0);
			});
		});
		
		var isAtop = false;
		$coverflowAd.hover(function(){
			isAtop = true;
			$proc.stop(true);
		}, function(){
			isAtop = false;
			$proc.animate({
				width: _barWidth
			}, _speed - (_speed/_barWidth*$proc.width()) , function(){
				$(this).width(0);
				if(!isAtop)moveNext();
			});
		}).mouseout().find('a').focus(function(){this.blur();});
		
		// 控制移動的函式
		function move(i){
			//clearTimeout(_coverflowAdTimer);
			$proc.width(0);
			// 移動左右清單
			// 移動時變成不透明
			$leftUl.add($rightUl).add($('.coverflowAd_right.fake ul, .coverflowAd_left.fake  ul')).stop(false, true).animate({
				left: i * _smallWidth * -1
			}, changeLeft).find('li a').css('opacity', 1);;
			
			// 設定標題及描述
			setTitleAndDesc(i);

			// 移動中間清單
			$mainUl.add($('.coverflowAd_main.fake ul')).stop(false, true).animate({
				left: i * _bigWidth * -1
			}, changeLeft);
			
			if(!isAtop){
				$proc.animate({
					width: _barWidth
				}, _speed, function(){
					$(this).width(0);
					if(!isAtop)moveNext();
				});
			}
		}
		
		// 當完成移動後的處理函式
		function changeLeft(){
			var $this = $(this),
				dis = $this.parent().attr('className').indexOf('coverflowAd_main')>-1 ? _bigWidth : _smallWidth,
				i = (parseInt($this.css('left'), 10) || 0) / dis * -1;
			
			// 處理左右清單的位移
			if(i >= _itemLen){
				$(this).css('left', dis * (i - _itemLen) * -1);
			}
			
			// 把左右清單的 li a 變成 0.5 的透明度
			if(dis==_smallWidth){
				$(this).find('li a').css('opacity', 0.5);
			}
		}
		
		// 組成 li 項目的函式
		function getLiItem(startIndex, endIndex){
			var rtvl = '';
			for(var i=startIndex;i<endIndex;i++){
				rtvl += '<li>' + $sourceLi.eq(i).html() + '</li>';
			}
			return rtvl;
		}

		function setTitleAndDesc(i){
			$('.coverflowAd_desc_content').html('<h4>'+$mainUl.find('li:eq('+i+') img').attr('title')+'</h4>'+$mainUl.find('li:eq('+i+') img').attr('alt'));
		}

		function moveNext(){
			var i = (parseInt($rightUl.css('left'), 10) || 0) / _smallWidth * -1;
			$('.coverflowAd_right.fake').find('li').eq(i).children('a').click();
			//_coverflowAdTimer = setTimeout(moveNext, _speed);
		}
	
});

