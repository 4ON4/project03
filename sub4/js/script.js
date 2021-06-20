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

	
	
	/* 게시판 */
	
	$('#contentbox').each(function(){
		var content = $(this);
		var allbox = content.find('.box_content');
		var allmain = allbox.find('.box_main');
		var allsub = allbox.find('.box_sub');
		var allcontent = content.find('.box_sub>.sub_header+.sub_main');
		
		allsub.hide();
		
		allmain.click(function(){
			var dt = $(this);
			var dd = dt.parent('.box_content').find('.box_sub');

			allsub.hide();
			allcontent.show();
			dt.show();
			dd.show();
		});	
	});
	
	

	
});