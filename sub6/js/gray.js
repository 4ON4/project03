$(function(){
	
	var guideClass = 'gray';
	// css 에서 class="gray"를 변수처리
	
	$('.guideText').each(function(){
		var guideText=this.defaultValue;
		//guideText.get(0)="이름을 입력해주세요"
		//guideText.get(1)="메시지를 입력해주세요"
		var element = $(this);
		element.focus(function(){
			
			if(element.val()===guideText){
				//텍스트 안에 어떤것이 들어있는가?
				element.val('');
				//텍스트 안이 비워진 상태
				element.removeClass(guideClass);
				
			};
			
		});

		element.blur(function(){
			//글씨가 없이 마우스가 빠져나왔을때
			if(element.val()===''){
				element.val(guideText);
				element.addClass(guideClass);
				
			};
			
		});
				
		if(element.val()===guideText){
			//창을 열었을때 guideText안의 글씨가 회색으로 나오는것(글씨를 적으면 검은색으로 나옴)
				element.addClass(guideClass);
		};
		
		
		
	});
	
});