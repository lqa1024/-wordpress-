<form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">

<div>
	<h2 class="widgettitle">搜索</h2>
	
	<input type="text" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" size="20" placeholder="搜索在这里！" />

	<input type="submit" id="searchsubmit" value="搜索" />

</div>

</form>