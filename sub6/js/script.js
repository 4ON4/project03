$(function(){

	$('.left_menu>ul>li').click(function(){
		$(this).find('.left_menu_sub').css('display','block');
	});
	
	var share_wrap = $('.share_wrap');
	var share = share_wrap.find('.share');
	var share_con = share_wrap.find('.share_con');
	var share_con_on = $('.share_con_on');
	
	share.click(function(){
		share_con.css('display','block');
		share_con.attr('.share_con','.share_con_on');
	});

	share_con_on.click(function(){
		share_con_on.css('display','none');
	});
	
	$('guide_text').gray();
	
});