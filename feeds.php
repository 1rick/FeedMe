<?php
//declare feed link structures

$delicious = "http://feeds.delicious.com/v2/rss/tag/REPLACEME?count=15";
$deliciouspopular = "http://feeds.delicious.com/v2/rss/popular/REPLACEME?count=15";

$googlenews = "http://news.google.com/news?pz=1&cf=all&ned=us&hl=en&q=REPLACEME&cf=all&output=rss";

$yahoonews = "http://rds.yahoo.com/_ylt=A2KLUmAuKttMzGEBY7DQtDMD/SIG=12pi6hu52/EXP=1289517998/**http%3a//news.search.yahoo.com/rss%3fei=UTF-8%26p=REPLACEME%26fr=news-us-ss";

$twitter = "http://search.twitter.com/search.atom?q=+REPLACEME";

$youtubetagged = "http://www.youtube.com/rss/tag/REPLACEME.rss";
$youtubesearch = "http://gdata.youtube.com/feeds/api/videos?orderby=updated&vq=REPLACEME";

$hatena = "http://b.hatena.ne.jp/t/REPLACEME?sort=hot&threshold=&mode=rss";

$youdao = "http://news.youdao.com/search?q=REPLACEME&doctype=rss";
?>

<?php
$searchterm1 = $_POST["searchterm1"];
$searchterm2 = $_POST["searchterm2"];
?>



	<?php
	//For Delicious, Google News, Twitter, YouTube feeds, concatenate two search terms with a plus sign if there are two, else set to searchterm1 
	if($searchterm2 == "")
	    $withplussign = $searchterm1;
	else
		$withplussign = $searchterm1."+".$searchterm2;
	?>

			<?php
			//For Yahoo News Feed concatenate two search terms with %2b if there are two, else set to searchterm1 
			if($searchterm2 == "")
				$foryahoofeed = $searchterm1;
			else
				$foryahoofeed = $searchterm1."%2b".$searchterm2;
			?>

	

<?php
//replace all instances of REPLACEME with SEARCHTERM

$deliciousnew = str_replace("REPLACEME", $withplussign, $delicious);
$deliciouspopularnew = str_replace("REPLACEME", $withplussign, $deliciouspopular);

$googlenewsnew = str_replace("REPLACEME", $withplussign, $googlenews);

$yahoonewsnew = str_replace("REPLACEME", $foryahoofeed, $yahoonews);

$twitternew = str_replace("REPLACEME", $withplussign, $twitter);

$youtubenew = str_replace("REPLACEME", $withplussign, $youtubetagged);
$youtubesearchnew = str_replace("REPLACEME", $withplussign, $youtubesearch);

$hatenanew = str_replace("REPLACEME", $withplussign, $hatena);

$youdaonew = str_replace("REPLACEME", $withplussign, $youdao);

?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>RSS feed results</title>
</head>


<body>
<h1>Feed results for "<?php echo $searchterm1; ?> <?php echo $searchterm2; ?>"</h1>

<p><a href="/FeedMe/index.html">Search again</a></p>
<p>Right click and copy the RSS link, and paste it into your favorite reader.</p>

<ul>
<li>Delicious tag feed: <a href="<?php echo $deliciousnew ; ?>" title="Delicious feed for <?php echo $withplussign; ?>"><img src="http://farm5.static.flickr.com/4010/5164937189_b1b1e90d27_t.jpg" alt="Delicious feed for <?php echo $withplussign; ?>" /></a></li>
<li>Delicious popular tag feed: <a href="<?php echo $deliciouspopularnew ; ?>" title="Delicious POPULAR feed for <?php echo $withplussign; ?>"><img src="http://farm5.static.flickr.com/4010/5164937189_b1b1e90d27_t.jpg" alt="Delicious POPULAR feed for <?php echo $withplussign; ?>" /></a></li>

<li>Google News feed: <a href="<?php echo $googlenewsnew ; ?>" title="Google News feed for <?php echo $withplussign; ?>"><img src="http://farm5.static.flickr.com/4010/5164937189_b1b1e90d27_t.jpg" alt="Google News feed for <?php echo $withplussign; ?>" /></a></li>

<li>Yahoo News feed: <a href="<?php echo $yahoonewsnew ; ?>" title="Yahoo News feed for <?php echo $foryahoofeed; ?>"><img src="http://farm5.static.flickr.com/4010/5164937189_b1b1e90d27_t.jpg" alt="Yahoo News feed for <?php echo $foryahoofeed; ?>" /></a></li>

<li>Twitter search eed: <a href="<?php echo $twitternew ; ?>" title="Twitter search feed for <?php echo $withplussign; ?>"><img src="http://farm5.static.flickr.com/4010/5164937189_b1b1e90d27_t.jpg" alt="Twitter search feed for <?php echo $withplussign; ?>" /></a></li>

<li>YouTube tag feed: <a href="<?php echo $youtubenew ; ?>" title="YouTube feed for <?php echo $withplussign; ?>"><img src="http://farm5.static.flickr.com/4010/5164937189_b1b1e90d27_t.jpg" alt="YouTube feed for <?php echo $withplussign; ?>" /></a></li>
<li>YouTube search feed: <a href="<?php echo $youtubesearchnew ; ?>" title="YouTube feed for <?php echo $withplussign; ?>"><img src="http://farm5.static.flickr.com/4010/5164937189_b1b1e90d27_t.jpg" alt="YouTube feed for <?php echo $withplussign; ?>" /></a></li>

<li>Hatena tag feed (won't work with two tags): <a href="<?php echo $hatenanew ; ?>" title="Hatena feed for <?php echo $withplussign; ?>"><img src="http://farm5.static.flickr.com/4010/5164937189_b1b1e90d27_t.jpg" alt="Hatena feed for <?php echo $withplussign; ?>" /></a></li>

<li>Youdao news feed: <a href="<?php echo $youdaonew ; ?>" title="Youdao feed for <?php echo $withplussign; ?>"><img src="http://farm5.static.flickr.com/4010/5164937189_b1b1e90d27_t.jpg" alt="Youdao feed for <?php echo $withplussign; ?>" /></a></li>
</ul>
</body>
</html>