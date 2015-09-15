<?php
require_once "core.php";
require_once "header.php";

if (isset($_POST['makepage'])) {
	if ($_POST['captcha'] !== "48") {
		die ("Wrong. Click the back button on your browser. The answer is 48.");
	}
	$title = htmlentities($_POST['title']);
	$query = mysql_query("INSERT INTO likeitall VALUES('', '".$title."', '')");
	$newquery = mysql_query("SELECT * FROM likeitall WHERE page_title='".$title."'");
	$result = mysql_fetch_assoc($newquery);
	$newpage = $sitename."page/".$result['page_id'];
?>
<h1 class="title">Page created</h1>
Woohoo! Your little page has been created! Now you can like <?php echo $title; ?> at this link!<br /><br />
<a href="<?php echo $newpage; ?>"><?php echo $title; ?></a><br /><br />
P.S. Sharing is caring -- don't forget!
<?php
} else {
?>
<h1 class="title">Create a Page</h1>
So, you wanna make a page? Type in the name and description and press the big button!<br /><br />
<form name="makepage" method="post">
<h2 class="title"><label for="title">Name, Content, Description, Joke, Title, whatever you want to call it: </label></h2>
<input type="text" name="title" id="title" />
<br /><br />
<h2 class="title"><label for="captcha">Anti-Spam Question: (if you can't get this, you don't deserve a page :p)</label></h2>
What is one plus forty-seven? (say it in a decimal, not word form)
<input type="text" name="captcha" id="captcha" /><br /><br />
<input type="submit" name="makepage" value="Make your page!" />
</form>
<?php
}
require_once "footer.php";
?>