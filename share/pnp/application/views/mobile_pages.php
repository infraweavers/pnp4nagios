<div data-role="content">
<ul data-role="listview" data-filter="true" data-inset="true" data-theme="c" data-dividertheme="a">
<?php
foreach($pages as $page){
	$this->data->getPageDetails($page);
  	printf("<li><a href=\"/pnp4nagios/mobile/pages/%s\" data-transition=\"slide\">%s</a></li>", $page, $this->data->PAGE_DEF['page_name']);
}
?>
</ul>
</div><!-- /content -->
