<?php
//declare feed link structures

$delicious = "http://feeds.delicious.com/v2/rss/tag/REPLACEME?count=15";

$googlenews = "http://news.google.com/news?pz=1&cf=all&ned=us&hl=en&q=REPLACEME&cf=all&output=rss";

$yahoonews = "http://rds.yahoo.com/_ylt=A2KLUmAuKttMzGEBY7DQtDMD/SIG=12pi6hu52/EXP=1289517998/**http%3a//news.search.yahoo.com/rss%3fei=UTF-8%26p=REPLACEME%26fr=news-us-ss";

$twitter = "http://search.twitter.com/search.atom?q=+REPLACEME";

$youtube = "http://www.youtube.com/rss/tag/REPLACEME.rss";

$hatena = "http://b.hatena.ne.jp/t/REPLACEME?sort=hot&threshold=&mode=rss";

$youdao = "http://news.youdao.com/search?q=REPLACEME&doctype=rss";
?>




<?php
//replace all instances of REPLACEME with SEARCHTERM

$deliciousnew = str_replace("REPLACEME", $_POST["searchterm"], $delicious);

$googlenewsnew = str_replace("REPLACEME", $_POST["searchterm"], $googlenews);

$yahoonewsnew = str_replace("REPLACEME", $_POST["searchterm"], $yahoonews);

$twitternew = str_replace("REPLACEME", $_POST["searchterm"], $twitter);

$youtubenew = str_replace("REPLACEME", $_POST["searchterm"], $youtube);

$hatenanew = str_replace("REPLACEME", $_POST["searchterm"], $hatena);

$youdaonew = str_replace("REPLACEME", $_POST["searchterm"], $youdao);

?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>RSS feed results</title>
</head>
<body>
<h1>Feed results for "<?php echo $_POST["searchterm"]; ?>:"</h1>
<p>Right click and copy the RSS link, and paste it into your favorite reader.</p>
<ul>
<li>Delicious RSS Feed: <a href="<?php echo $deliciousnew ; ?>" title="Delicious feed for <?php echo $_POST["searchterm"]; ?>"><img src="http://farm5.static.flickr.com/4010/5164937189_b1b1e90d27_t.jpg" alt="Delicious feed for <?php echo $_POST["searchterm"]; ?>" /></a></li>

<li>Google News RSS Feed: <a href="<?php echo $googlenewsnew ; ?>" title="Google News feed for <?php echo $_POST["searchterm"]; ?>"><img src="http://farm5.static.flickr.com/4010/5164937189_b1b1e90d27_t.jpg" alt="Google News feed for <?php echo $_POST["searchterm"]; ?>" /></a></li>

<li>Yahoo News RSS Feed: <a href="<?php echo $yahoonewsnew ; ?>" title="Yahoo News feed for <?php echo $_POST["searchterm"]; ?>"><img src="http://farm5.static.flickr.com/4010/5164937189_b1b1e90d27_t.jpg" alt="Yahoo News feed for <?php echo $_POST["searchterm"]; ?>" /></a></li>

<li>Twitter RSS Feed: <a href="<?php echo $twitternew ; ?>" title="Twitter search feed for <?php echo $_POST["searchterm"]; ?>"><img src="http://farm5.static.flickr.com/4010/5164937189_b1b1e90d27_t.jpg" alt="Twitter search feed for <?php echo $_POST["searchterm"]; ?>" /></a></li>

<li>YouTube RSS Feed: <a href="<?php echo $youtubenew ; ?>" title="YouTube feed for <?php echo $_POST["searchterm"]; ?>"><img src="http://farm5.static.flickr.com/4010/5164937189_b1b1e90d27_t.jpg" alt="YouTube feed for <?php echo $_POST["searchterm"]; ?>" /></a></li>

<li>Hatena RSS Feed: <a href="<?php echo $hatenanew ; ?>" title="Hatena feed for <?php echo $_POST["searchterm"]; ?>"><img src="http://farm5.static.flickr.com/4010/5164937189_b1b1e90d27_t.jpg" alt="Hatena feed for <?php echo $_POST["searchterm"]; ?>" /></a></li>

<li>Youdao RSS Feed: <a href="<?php echo $youdaonew ; ?>" title="Youdao feed for <?php echo $_POST["searchterm"]; ?>"><img src="http://farm5.static.flickr.com/4010/5164937189_b1b1e90d27_t.jpg" alt="Youdao feed for <?php echo $_POST["searchterm"]; ?>" /></a></li>
</ul>
</body>
</html>