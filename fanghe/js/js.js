window.onload=function(){
	var oDiv1=document.getElementById("pro_show");
	var oUl1=oDiv1.getElementsByTagName("ul")[0];
	var aLi1=oUl1.getElementsByTagName("li");
	var speed=-2;

	oUl1.innerHTML=oUl1.innerHTML+oUl1.innerHTML;
	oUl1.style.width=aLi1[0].offsetWidth*aLi1.length+'px';

	function move(){
		if(oUl1.offsetLeft<-oUl1.offsetWidth/2)
		{
			oUl1.style.left='0';
		}
		if(oUl1.offsetLeft>0)
		{
			oUl1.style.left=-oUl1.offsetWidth/2+'px';
		}
		oUl1.style.left=oUl1.offsetLeft+speed+"px";
	}

	var timer=setInterval(move,30);

	oDiv1.onmouseover=function(){
		clearInterval(timer);
	}

	oDiv1.onmouseout=function(){
		timer=setInterval(move,30);
	}

	var oDiv2=document.getElementById('d_left')
	var oDiv3=document.getElementById('d_right')
	oDiv2.getElementsByTagName('a')[0].onclick=function()
	{
		speed=-2;
	}

	oDiv3.getElementsByTagName('a')[0].onclick=function()
	{
		speed=2;
	}
}