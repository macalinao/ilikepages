<?php
$sitename = "http://simplyian.com/ilikepages/";

mysql_connect("localhost", "dcriticc_rickrol", "rickastley");
mysql_select_db("dcriticc_rickrolls");

function the_title() {
	$thepageid = intval($_GET['fbpageid']);
	if (empty($thepageid)) {
		echo "Welcome to ILikePages!";
	} else {
		$query = mysql_query("SELECT * FROM likeitall WHERE page_id='".$thepageid."'");
		$likebutton = mysql_fetch_assoc($query);
		echo $likebutton['page_title'];
	}
}

function fblikemeta(){
	$thepageid = intval($_GET['fbpageid']);
	if (empty($thepageid)) {
		echo "";
	} else {
		$query = mysql_query("SELECT * FROM likeitall WHERE page_id='".$thepageid."'");
		$likebutton = mysql_fetch_assoc($query);
		?>
<meta property=”og:title” content=”<?php echo $likebutton['page_title']; ?>”/>
<meta property=”og:site_name” content=”ILikePages”/>
<!-- <meta property=”og:image” content=”http://searchengineland.com/images/20/logo.png”/> -->
		<?php
	}
}
?>