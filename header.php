<html>
<head xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml" xmlns:og="http://opengraphprotocol.org/schema/">
<title><?php the_title(); ?></title>
<link rel="stylesheet" type="text/css" href="<?php echo $sitename; ?>style.css">
<?php fblikemeta(); ?>
</head>
<body>
<div id="fb-root"></div>
<script>
  window.fbAsyncInit = function() {
    FB.init({appId: 'your app id', status: true, cookie: true,
             xfbml: true});
  };
  (function() {
    var e = document.createElement('script'); e.async = true;
    e.src = document.location.protocol +
      '//connect.facebook.net/en_US/all.js';
    document.getElementById('fb-root').appendChild(e);
  }());
</script>
<h1 class="secret">ILikePages - Conquer the Like button!</h1>
<div id="wrapper">
<div id="header">
<table width="100%">
<tr>
<td width="200">
<div id="ad1">
<script type="text/javascript"><!--
google_ad_client = "pub-6711199488409105";
/* Left for ilikepages */
google_ad_slot = "1509365773";
google_ad_width = 200;
google_ad_height = 200;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</div>
</td><td>
<div id="logo">
<img src="<?php echo $sitename; ?>logo.jpg" />
</div>
</td>
<td width="200">
<div id="ad2">
<script type="text/javascript"><!--
google_ad_client = "pub-6711199488409105";
/* ad2 */
google_ad_slot = "4920698287";
google_ad_width = 200;
google_ad_height = 200;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</div>
</td>
</tr>
</table>
<div id="nav">
<a href="<?php echo $sitename; ?>">Home</a> | <a href="<?php echo $sitename; ?>browse/">Browse Pages</a> | <a href="<?php echo $sitename; ?>create/">Create a Page</a>
</div>
</div>
<div id="content">