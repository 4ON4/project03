$(function(){
	
	// alert('a');
	//최상단메뉴서치박스 search box
	
	bb=true;
	$('#library_search_icon>img').click(function(){
		if(bb){
			$(this).addClass('icon_on');
			// $(this).stop(true,true).animate({'margin-bottom':'-70px'},500);
			$('#searchbox').stop(true,true).animate({'top':'270px'},500,function(){bb=false;});
			bb=false;
			
		}else{
			$(this).removeClass('icon_on');
			// $(this).stop(true,true).animate({'margin-bottom':'0px'},500);
			$('#searchbox').stop(true,true).animate({'top':'160px'},500,function(){bb=true;});	
			bb=true;
			
		};
		
	});

	
	//첫번째슬라이드이동
	
	var slide_pic  = $('.slide_pic li:gt(0)');
	slide_pic.hide();
	setInterval(function(){
		$('.slide_pic li:first-child').fadeOut(2800).appendTo('.slide_pic');
		$('.slide_pic li:first-child').fadeIn(2800)/* .next('a') */;
	},3000);
	
	//content1 li(도서관)
	
	var content2_tab = $('.content2_1>ul>li');
	var content2_content = $('.content2_2>.library_slide_con> .slide_con');
	content2_content.hide().eq(0).show();
	content2_tab.click(function(e){
		e.preventDefault();
		var tg = $(this);
		var i = tg.index();
		if(i<=9){
			content2_tab.removeClass('on');
			tg.addClass('on');
			content2_content.css('display','none');
			content2_content.eq(i).css('display','block');			
		};

	});

	// content2 공지사항 옆 이미지 슬라이드

	var library_event_slide =  $('.library_event_slide>ul>li');
	var slide_current = 0;	
	var slide_interval;
	function timer(){
		slide_interval = setInterval(function(){
			var prev = library_event_slide.eq(slide_current); 
			slide_current++;
			movement(prev,'0%','-100%');
			if(slide_current == library_event_slide.size()){slide_current=0};
			var next=library_event_slide.eq(slide_current); 
			movement(next,'100%','0%');
		},2000);		
	};

	function movement(target,start,end){
	target.css({left: start}).stop().animate({left: end});
	};
	
	timer();
	
	library_event_slide.hover(
		function(){
			clearInterval(slide_interval);
		},
		function(){
			timer();
		}
	);

	$('.left').click(function(){
		var prev = library_event_slide.eq(slide_current); 
		slide_current++;
		movement(prev,'0%','-100%');
		if(slide_current == library_event_slide.size()){slide_current=0};
		var next=library_event_slide.eq(slide_current); 
		movement(next,'100%','0%');
	});
	
	$('.stop').click(function(){
		clearInterval(slide_interval);
	});
	
	$('.right').click(function(){
		var prev = library_event_slide.eq(slide_current); 
		slide_current++;
		movement(prev,'0%','100%');
		if(slide_current == library_event_slide.size()){slide_current=0};
		var next=library_event_slide.eq(slide_current); 
		movement(next,'-100%','0%');
	});
	
	
	
	// content3 슬라이드 이미지
	var thumbCurrent=0;
	var thumbListSize=6;
	var thumbnail = $('#library_gallery_thumbnail');
	var topbtn = thumbnail.find('>.top');	
	var bottombtn = thumbnail.find('>.bottom');	
	var container = thumbnail.find('>.library_gallery_container > ul');
	var containheight = thumbnail.find('.library_gallery_container').height();

	var thumb = container.find('>.thumb');
	var maxSize = thumb.size();
	var image = $('#library_gallery #library_gallery_image > p');
	
	
	thumb.on('click',function(){
		image.css('display','none');
		var i = $(this).index();
		image.eq(i).css('display','block');
	});
	
	bottombtn.on('click',function(){
		if(thumbCurrent<maxSize/thumbListSize-1){thumbCurrent++}else{alert('페이지의 마지막입니다.')};
		console.log(thumbCurrent);
		listMove();
	});
	
	topbtn.on('click',function(){
		if(thumbCurrent>0){thumbCurrent--}else{alert('페이지의 처음입니다.')};		
		console.log(thumbCurrent);
		listMove();
	});
	
	function listMove(){
		var tt = containheight * thumbCurrent *-1;
		container.stop().animate({top:tt},{duration:400,easing:'easeOutCubic'});
	};

	listMove();	
	
	var balloon = $('<div class="balloon"></div>').appendTo('body');
	
	function updateBalloonPosition(x,y){
		balloon.css({left: x+13, top: y});
	};
	function showBalloon(){
		balloon.stop().css('opacity',0).show().animate({opacity:1},1000);
	};
	function hideBalloon(){
		balloon.stop().animate({opacity:0},1000,function(){balloon.hide()});		
	};
	$('.showBalloon').each(function(){
		var element = $(this);
		var text = element.attr('title');
		element.attr('title','');
		element.hover(
			function(e){
				balloon.text(text);
				updateBalloonPosition(e.pageX,e.pageY);
				showBalloon();
			},
			function(){
				hideBalloon();
			}
		);
		element.mousemove(function(e){
			updateBalloonPosition(e.pageX,e.pageY);
		});
	});
	
	function swing(){
		$('.icon_message').animate({'top':'-1px'},1000).animate({'top':'15px'},1000);
		
	};
	setInterval(swing,1000);

	swing();	
});