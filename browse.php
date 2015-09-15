<?php 
require_once "core.php";
require_once "header.php";
?>
<h1 class="title">Browse Pages</h1>
Let's see what there is to like...<br /><br />
<h1 class="title">Recent Pages</h1>
<?php
$data = mysql_query("SELECT * FROM likeitall ORDER BY page_id DESC");
while ($array = mysql_fetch_assoc($data)) {
	echo "<a href='".$sitename."page/".$array['page_id']."'>".$array['page_title']."</a><br />";
}

require_once "footer.php";
?>