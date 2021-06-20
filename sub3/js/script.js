$(function(){

	$('.guideText').gray;
	
	$('.left_menu>ul>li').click(function(){
		$(this).find('.left_menu_sub').css('display','block');
	});
	
	var share_wrap = $('.share_wrap');
	var share = share_wrap.find('.share');
	var share_con = share_wrap.find('.share_con');
	var share_con_on = share_wrap.find('.share_con .on');
	
	share.click(function(){
		share_con.css('display','block').addClass('on').animate(1500);
	});

	

	
});