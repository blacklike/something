$(function(){
	var liNum=5*5*5;//li的个数
	var tX=300,tY=300,tZ=500;
	var firstX=-2*tX,firstY=-2*tY,firstZ=-2*tZ;/*水平偏移，垂直偏移  z轴偏移*/
	for (var i = 0; i < liNum; i++) {
		var $li=$('<li></li>');
		/*在$(可以放进选择器(获取元素)/放入标签(不是获取,创建一个节点，把节点变成jq对象))*/ 
		var iX=(i%25)%5;//水平取余
		var iY=parseInt((i%25)/5);//垂直取商
		var iZ=parseInt(i/25);//每25个就上去

		$li.css({
			'transform':'translate3d('+(firstX+iX*tX)+'px,'+(firstY+iY*tY)+'px,'+(firstZ+iZ*tZ)+'px)'
		});
		$('#main').append($li);
	}

	(function(){
		var nowX,lastX,minusX,nowY,lastY,minusY,roZ=-2000,speed=50;;
		var roY=0,roX=0;
		$(document).mousedown(function(event){
			event=event||window.event;
			lastX=event.clientX;
			lastY=event.clientY;
			$(this).on('mousemove',function(event){
				event=event||window.event;//兼容性
				var nowX=event.clientX;//clientX事件对象的一个属性,当前鼠标的X轴
				var nowY=event.clientY;
				minusX=nowX-lastX;
				minusY=nowY-lastY;
				roY+=minusX*0.2;
				roX-=minusY*0.2;
				$('#main').css({
					'transform':'translateZ('+roZ+'px) rotateX('+roX+'deg) rotateY('+roY+'deg)'
				});
				lastX=nowX;
				lastY=nowY;

			});
		}).mouseup(function(){
			$(this).off('mousemove');
		});
		
		$(document).on("mousewheel",function(event,detail){
			var event=event||window.event;
			if(detail>0){
				roZ+=speed;
				$('#main').css({
					'transform':'translateZ('+roZ+'px) rotateX('+roX+'deg) rotateY('+roY+'deg)'
				});
			}
			if(detail<0){
				roZ-=speed;
				$('#main').css({
					'transform':'translateZ('+roZ+'px) rotateX('+roX+'deg) rotateY('+roY+'deg)'
				});

				
			}
			roZ=roZ;
		});
	})();
});