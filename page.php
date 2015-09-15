<?php
require_once "core.php";
require_once "header.php";

	$thepageid = intval($_GET['fbpageid']);
	if (empty($thepageid)) {
		echo "";
	} else {
		$query = mysql_query("SELECT * FROM likeitall WHERE page_id='".$thepageid."'");
		$likebutton = mysql_fetch_assoc($query);
	}
?>

<h1 class="title"><?php echo $likebutton['page_title']; ?></h1>
Like this page!!!<br />
<fb:like href="http://simplyian.com/ilikepages/page/<?php echo $likebutton['page_id']; ?>"></fb:like>
<h1 class="title">Comments</h1>
<fb:comments xid="ILP<?php echo $likebutton['page_id']; ?>"></fb:comments>
<?php
require_once "footer.php";
?>