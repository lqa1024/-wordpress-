function com_change()
{
        var self_now = 0;
        var self_speed = 5000;
        var self_auto_change = null;
        var self_max = $('#com_box div.img').size();
        function self_change(i)
        {
                $('#com_box div.img').hide();
                $('#com_txt_bg li').removeClass('on');
                $('#com_txt li').removeClass('on');
                $('#com_box div.img:eq(' + i + ')').show();
                $('#com_txt_bg li:eq(' + i + ')').addClass('on');
                $('#com_txt li:eq(' + i + ')').addClass('on');
        }
        function self_interval()
        {
                return setInterval(function(){
                        self_now++;
                        if (self_now >= self_max)
                        {
                                self_now = 0;
                        }
                        self_change(self_now);
                }, self_speed);
        }
        $('#com_box div:first').show();
        $('#com_txt_bg li:first').addClass('on');
        $('#com_txt li:first').addClass('on');
        $('#com_txt li').each(function(i)
        {
                $(this).mouseover(function(){
                        self_now = i;
                        clearInterval(self_auto_change);
                        self_change(i);
                }).mouseout(function(){
                        self_auto_change = self_interval();
                });
        });
        $(function(){
                $('#com_loding').hide();
                self_auto_change = self_interval();
        });
}
com_change();


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