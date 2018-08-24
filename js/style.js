//二级导航菜单,显示隐藏
	var nav_2 = document.getElementsByClassName("menu-item-has-children");
	var subMenu=document.getElementsByClassName("sub-menu");
	for(var s=0;s<nav_2.length;s++){
		nav_2[s].setAttribute("onmouseover","addMouse(this)");
		nav_2[s].setAttribute("onmouseout","reduceMouse(this)");
	}
	function addMouse(which){
			var i=which.getElementsByClassName("sub-menu");
			i[0].style.display="block";
		}
	
	function reduceMouse(which){
		var i=which.getElementsByClassName("sub-menu");
		i[0].style.display="none";
	}
