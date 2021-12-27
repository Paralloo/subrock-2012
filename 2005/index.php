<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/config.inc.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/db_helper.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/time_manip.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/user_helper.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/video_helper.php"); ?>
<?php $__video_h = new video_helper($__db); ?>
<?php $__user_h = new user_helper($__db); ?>
<?php $__db_h = new db_helper(); ?>
<?php $__time_h = new time_helper(); ?>
<?php
	$__server->page_embeds->page_title = "SubRocks";
	$__server->page_embeds->page_description = "Your Digital Video Repository";
	$__server->page_embeds->page_image = "/yt/imgbin/full-size-logo.png";
	$__server->page_embeds->page_url = "https://subrock.rocks/";
?>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>SubRock - Your Digital Video Repository</title>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link href="styles.css" rel="stylesheet" type="text/css">
<link rel="alternate" type="application/rss+xml" title="SubRock " "="" recently="" added="" videos="" [rss]"="" href="http://www.youtube.com/rss/global/recently_added.rss">
</head>


<body onload="javascript:sf();" return="" false;="">

<?php require($_SERVER['DOCUMENT_ROOT'] . "/s/mod/2005_header.php"); ?>

<script>
	function sf()
	{
		document.f.search.focus();
	}
</script>

<table width="80%" align="center" cellpadding="3" cellspacing="0" border="0">
	<tbody><tr>
		<td align="center">
			<img src="img/logo.gif" width="180" height="71" hspace="12" vspace="12" alt="YouTube">
			<br>
			Your Digital Video Repository
			<br>
			<br>
		</td>
	</tr>

	<form name="f" method="GET" action="results.php"></form>
	<tr>
		<td align="center"><input type="text" name="search" size="35" maxlength="128" style="color:#ff3333; font-size: 18px; padding: 3px;"></td>
	</tr>
	<tr>
		<td align="center"><input type="submit" value="Search Videos"></td>
	</tr>
	
</tbody></table>

<div style="font-size: 16px; font-weight: bold; margin-top: 20px; margin-bottom: 20px; text-align: center;"><a href="my_videos_upload.php">Upload Your Videos</a></div>

<br>

<div style="font-size: 13px; color: #333333; margin-bottom: 30px; text-align: center; width: 50%; margin-left: auto; margin-right: auto;">


	<a style="font-size: 12px;" href="results.php?search=nansheng">nansheng</a> :

	
	<a style="font-size: 12px;" href="results.php?search=azlan">azlan</a> :

	
	<a style="font-size: 12px;" href="results.php?search=wereldband">wereldband</a> :

	
	<a style="font-size: 17px;" href="results.php?search=ny">ny</a> :

	
	<a style="font-size: 17px;" href="results.php?search=superbike">superbike</a> :

	
	<a style="font-size: 12px;" href="results.php?search=japan">japan</a> :

	
	<a style="font-size: 12px;" href="results.php?search=sinceretheory">sinceretheory</a> :

	
	<a style="font-size: 17px;" href="results.php?search=jozef">jozef</a> :

	
	<a style="font-size: 17px;" href="results.php?search=party">party</a> :

	
	<a style="font-size: 12px;" href="results.php?search=amazon">amazon</a> :

	
	<a style="font-size: 12px;" href="results.php?search=board">board</a> :

	
	<a style="font-size: 12px;" href="results.php?search=skate">skate</a> :

	
	<a style="font-size: 12px;" href="results.php?search=buckley">buckley</a> :

	
	<a style="font-size: 12px;" href="results.php?search=shubs">shubs</a> :

	
	<a style="font-size: 12px;" href="results.php?search=falls">falls</a> :

	
	<a style="font-size: 12px;" href="results.php?search=de">de</a> :

	
	<a style="font-size: 12px;" href="results.php?search=stockshot">stockshot</a> :

	
	<a style="font-size: 12px;" href="results.php?search=cubbyhole">cubbyhole</a> :

	
	<a style="font-size: 12px;" href="results.php?search=burnout">burnout</a> :

	
	<a style="font-size: 12px;" href="results.php?search=satellite">satellite</a> :

	
	<a style="font-size: 12px;" href="results.php?search=poughkeepsie">poughkeepsie</a> :

	
	<a style="font-size: 12px;" href="results.php?search=cruise">cruise</a> :

	
	<a style="font-size: 12px;" href="results.php?search=heritage">heritage</a> :

	
	<a style="font-size: 17px;" href="results.php?search=orgel">orgel</a> :

	
	<a style="font-size: 12px;" href="results.php?search=chin">chin</a> :

	
	<a style="font-size: 12px;" href="results.php?search=themed">themed</a> :

	
	<a style="font-size: 17px;" href="results.php?search=mill">mill</a> :

	
	<a style="font-size: 12px;" href="results.php?search=music">music</a> :

	
	<a style="font-size: 12px;" href="results.php?search=new">new</a> :

	
	<a style="font-size: 12px;" href="results.php?search=live">live</a> :

	
	<a style="font-size: 17px;" href="results.php?search=to">to</a> :

	
	<a style="font-size: 12px;" href="results.php?search=farmer">farmer</a> :

	
	<a style="font-size: 17px;" href="results.php?search=mtv">mtv</a> :

	
	<a style="font-size: 12px;" href="results.php?search=puenbrouck">puenbrouck</a> :

	
	<a style="font-size: 12px;" href="results.php?search=sicily">sicily</a> :

	
	<a style="font-size: 17px;" href="results.php?search=fairfield">fairfield</a> :

	
	<a style="font-size: 17px;" href="results.php?search=musical">musical</a> :

	
	<a style="font-size: 17px;" href="results.php?search=coffeehouse">coffeehouse</a> :

	
	<a style="font-size: 17px;" href="results.php?search=bud">bud</a> :

	
	<a style="font-size: 17px;" href="results.php?search=2005">2005</a> :

	
	<a style="font-size: 17px;" href="results.php?search=trip">trip</a> :

	
	<a style="font-size: 12px;" href="results.php?search=jfk">jfk</a> :

	
	<a style="font-size: 12px;" href="results.php?search=woordjes">woordjes</a> :

	
	<a style="font-size: 12px;" href="results.php?search=death">death</a> :

	
	<a style="font-size: 12px;" href="results.php?search=xlanz">xlanz</a> :

	
	<a style="font-size: 12px;" href="results.php?search=skill">skill</a> :

	
	<a style="font-size: 12px;" href="results.php?search=olle">olle</a> :

	
	<a style="font-size: 12px;" href="results.php?search=nature">nature</a> :

	
	<a style="font-size: 12px;" href="results.php?search=ads">ads</a> :

	
	<a style="font-size: 17px;" href="results.php?search=dance">dance</a> :

	
<div style="font-size: 14px; font-weight: bold; margin-top: 10px;"><a href="tags.php">See More Tags</a></div>

</div>
		
<table width="80%" align="center" cellpadding="0" cellspacing="0" border="0" bgcolor="#CCCCCC">
	<tbody><tr>
		<td><img src="img/box_login_tl.gif" width="5" height="5"></td>
		<td width="100%"><img src="img/pixel.gif" width="1" height="5"></td>
		<td><img src="img/box_login_tr.gif" width="5" height="5"></td>
	</tr>
	<tr>
		<td><img src="img/pixel.gif" width="5" height="1"></td>
		<td>
		<div class="moduleTitleBar">
		<div class="moduleTitle"><div style="float: right; padding-right: 5px;"><a href="videos_page.php">&gt;&gt;&gt; Watch More Videos</a></div>
		Featured Videos
		</div>
		</div>
				
		<div class="moduleFeatured"> 
			<table width="100%" cellpadding="0" cellspacing="0" border="0">
				<tbody><tr valign="top">

                        <?php
                            $stmt = $__db->prepare("SELECT * FROM videos ORDER BY id DESC LIMIT 5");
                            $stmt->execute();
                            while($video = $stmt->fetch(PDO::FETCH_ASSOC)) {	
													$video['age'] = $__time_h->time_elapsed_string($video['publish']);		
													$video['duration'] = $__time_h->timestamp($video['duration']);
													$video['views'] = $__video_h->fetch_video_views($video['rid']);
													$video['author'] = htmlspecialchars($video['author']);		
													$video['title'] = htmlspecialchars($video['title']);
													$video['description'] = $__video_h->shorten_description($video['description'], 50);
													$video['pfp'] = $__user_h->fetch_pfp($video['author']);
                         ?>
						<td width="20%" align="center"><a href="index.php?v=_QBPp6zso7g"><img src="get_still.php?still_id=2&amp;video_id=_QBPp6zso7g" class="moduleFeaturedThumb" width="120" height="90"></a>
						<div class="moduleFeaturedTitle"><a href="index.php?v=_QBPp6zso7g"><?php echo $video['title'] ?></a></div>
						<div class="moduleFeaturedDetails">Added: <?php echo $video['age'] ?>						<br>by <a href="profile.php?user=<?php echo $video['author'] ?>"><?php echo $video['author'] ?></a><!-- (<a href="profile.php?user=jrhyley">10</a>) --></div>
						<div class="moduleFeaturedDetails">Views: 86 | Comments: 1</div></td>
						<?php } ?>
				</tr>
			</tbody></table>
		</div>
		
		</td>
		<td><img src="img/pixel.gif" width="5" height="1"></td>
	</tr>
	<tr>
		<td><img src="img/box_login_bl.gif" width="5" height="5"></td>
		<td><img src="img/pixel.gif" width="1" height="5"></td>
		<td><img src="img/box_login_br.gif" width="5" height="5"></td>
	</tr>
</tbody></table>

<br><table bgcolor="#FFFFFF" align="center" cellpadding="10" border="0">
	<tbody><tr>
		<td align="center" valign="center"><span class="footer"><a href="about.php">About Us</a> | <a href="contact.php">Contact Us</a> | <a href="terms.php">Terms of Use</a> | <a href="privacy.php">Privacy Policy</a> | Copyright © 2005 YouTube, LLC™ | <a href="rss/global/recently_added.rss"><img src="http://www.youtube.com/img/rss.gif" width="36" height="14" border="0" style="vertical-align: text-top;"></a></span></td>
	</tr>
</tbody></table>



</body></html>