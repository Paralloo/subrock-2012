<?php require_once ($_SERVER['DOCUMENT_ROOT'] . "/s/classes/config.inc.php"); ?>
<?php require_once ($_SERVER['DOCUMENT_ROOT'] . "/s/classes/db_helper.php"); ?>
<?php require_once ($_SERVER['DOCUMENT_ROOT'] . "/s/classes/time_manip.php"); ?>
<?php require_once ($_SERVER['DOCUMENT_ROOT'] . "/s/classes/user_helper.php"); ?>
<?php require_once ($_SERVER['DOCUMENT_ROOT'] . "/s/classes/video_helper.php"); ?>
<?php require_once ($_SERVER['DOCUMENT_ROOT'] . "/s/classes/user_update.php"); ?>
<?php require_once ($_SERVER['DOCUMENT_ROOT'] . "/s/classes/user_insert.php"); ?>
<?php $__video_h = new video_helper($__db); ?>
<?php $__user_h = new user_helper($__db); ?>
<?php $__user_i = new user_insert($__db); ?>
<?php $__user_u = new user_update($__db); ?>
<?php $__db_h = new db_helper(); ?>
<?php $__time_h = new time_helper(); ?>
<?php if (!$__video_h->video_exists($_GET['v']))
{
    header("Location: /?error=This video doesn't exist!");
} ?>
<?php $_video = $__video_h->fetch_video_rid($_GET['v']); ?>
<?php $_video['comments'] = $__video_h->get_comments_from_video($_video['rid']); ?>
<?php
if ($_video['visibility'] == "v" && @$_SESSION['siteusername'] != $_video['author']) header("Location: /");

$__video_h->check_view($_GET['v'], @$_SERVER["HTTP_CF_CONNECTING_IP"]);

$_SESSION['current_video'] = $_video['rid'];

/*
	PREPARE EMBEDS CLASS -- function(string $page_title, string $page_description...) 
	Returns a list of arrays for compatibility purposes & but downside is ugly for loop codes 
	Work on this tomorrow or some shit idk lol
*/

/*
	USE THE GOD DAMN __CONFIG MORE -- idiot
	Work on this tomorrow or some shit
*/

$__server
    ->page_embeds->page_title = htmlspecialchars($_video['title']);
$__server
    ->page_embeds->page_description = htmlspecialchars($_video['description']);
$__server
    ->page_embeds->page_image = "/dynamic/thumbs/" . $_video['thumbnail'];
$__server
    ->page_embeds->page_url = "https://www.subrock.tk/watch?v=" . htmlspecialchars($_video['rid']);
?>
<!DOCTYPE html>
<html>
   <head>
      <script>
         var yt = yt || {};yt.timing = yt.timing || {};yt.timing.tick = function(label, opt_time) {var timer = yt.timing['timer'] || {};if(opt_time) {timer[label] = opt_time;}else {timer[label] = new Date().getTime();}yt.timing['timer'] = timer;};yt.timing.info = function(label, value) {var info_args = yt.timing['info_args'] || {};info_args[label] = value;yt.timing['info_args'] = info_args;};yt.timing.info('e', "907722,906062,910102,927104,922401,920704,912806,927201,913546,913556,925109,919003,920201,912706,900816");yt.timing.wff = true;yt.timing.info('an', "");if (document.webkitVisibilityState == 'prerender') {document.addEventListener('webkitvisibilitychange', function() {yt.timing.tick('start');}, false);}yt.timing.tick('start');yt.timing.info('li','0');try {yt.timing['srt'] = window.gtbExternal && window.gtbExternal.pageT() ||window.external && window.external.pageT;} catch(e) {}if (window.chrome && window.chrome.csi) {yt.timing['srt'] = Math.floor(window.chrome.csi().pageT);}if (window.msPerformance && window.msPerformance.timing) {yt.timing['srt'] = window.msPerformance.timing.responseStart - window.msPerformance.timing.navigationStart;}    
      </script>
      <script>var yt = yt || {};yt.preload = {};yt.preload.counter_ = 0;yt.preload.start = function(src) {var img = new Image();var counter = ++yt.preload.counter_;yt.preload[counter] = img;img.onload = img.onerror = function () {delete yt.preload[counter];};img.src = src;img = null;};yt.preload.start("\/\/o-o---preferred---sn-o097zne7---v18---lscache1.c.youtube.com\/crossdomain.xml");yt.preload.start("\/\/o-o---preferred---sn-o097zne7---v18---lscache1.c.youtube.com\/generate_204?ip=207.241.237.166\u0026upn=sWh0pzcodo0\u0026sparams=algorithm%2Cburst%2Ccp%2Cfactor%2Cgcr%2Cid%2Cip%2Cipbits%2Citag%2Csource%2Cupn%2Cexpire\u0026fexp=907722%2C906062%2C910102%2C927104%2C922401%2C920704%2C912806%2C927201%2C913546%2C913556%2C925109%2C919003%2C920201%2C912706%2C900816\u0026mt=1349916311\u0026key=yt1\u0026algorithm=throttle-factor\u0026burst=40\u0026ipbits=8\u0026itag=34\u0026sver=3\u0026signature=C397DCB00566E0FBB1551675B6108A4158C34557.CB3777882F05D65158C043C258FF8D4EBA90FA50\u0026mv=m\u0026source=youtube\u0026ms=au\u0026gcr=us\u0026expire=1349937946\u0026factor=1.25\u0026cp=U0hTTllOVV9JUENOM19RSFlKOmVLUWdkTXRmS0dX\u0026id=a078394896111c0d");</script>
      <title><?php echo $__server
    ->page_embeds->page_title; ?></title>
      <meta property="og:title" content="<?php echo $__server
    ->page_embeds->page_title; ?>" />
		<meta property="og:url" content="<?php echo $__server
    ->page_embeds->page_url; ?>" />
		<meta property="og:description" content="<?php echo $__server
    ->page_embeds->page_description; ?>" />
		<meta property="og:image" content="<?php echo $__server
    ->page_embeds->page_image; ?>" />
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <meta name=attribution content=youtube_multi/>
      <link id="www-core-css" rel="stylesheet" href="/yt/cssbin/www-core-vfluMRDnk.css">
      <script src="/s/js/alert.js"></script>
	  <script>
         var gYouTubePlayerReady = false;
         if (!window['onYouTubePlayerReady']) {
           window['onYouTubePlayerReady'] = function() {
             gYouTubePlayerReady = true;
           };
         }
      </script>
      <script>
         if (window.yt.timing) {yt.timing.tick("ct");}    
      </script>
		<?php
$_video['dislikes'] = $__video_h->get_video_stars_level($_video['rid'], 1);
$_video['dislikes'] += $__video_h->get_video_stars_level($_video['rid'], 2);

$_video['likes'] = $__video_h->get_video_stars_level($_video['rid'], 4);
$_video['likes'] += $__video_h->get_video_stars_level($_video['rid'], 5);

$_video['dislikes'] += $__video_h->get_video_likes($_video['rid'], false);
$_video['likes'] += $__video_h->get_video_likes($_video['rid'], true);

if ($_video['likes'] == 0 && $_video['dislikes'] == 0)
{
    $_video['likeswidth'] = 0;
    $_video['dislikeswidth'] = 0;
}
else
{
    $_video['likeswidth'] = $_video['likes'] / ($_video['likes'] + $_video['dislikes']) * 100;
    $_video['dislikeswidth'] = 100 - $_video['likeswidth'];
}

$_video['liked'] = $__video_h->if_liked(@$_SESSION['siteusername'], $_video['rid'], true);
$_video['disliked'] = $__video_h->if_liked(@$_SESSION['siteusername'], $_video['rid'], false);
$_video['author_videos'] = $__video_h->fetch_user_videos($_video['author']);
$_video['subscribed'] = $__user_h->if_subscribed(@$_SESSION['siteusername'], $_video['author']);
$_video['favorited'] = $__video_h->if_favorited(@$_SESSION['siteusername'], $_video['rid']);
?>
	</head>
	<body id="" class="date-20120927 en_US ltr   ytg-old-clearfix guide-feed-v2 gecko gecko-15" dir="ltr">
		<form name="logoutForm" method="POST" action="/logout">
			<input type="hidden" name="action_logout" value="1">
		</form>
		<!-- begin page -->
		<div id="page" class="  watch  ">
			<div id="masthead-container"><?php require ($_SERVER['DOCUMENT_ROOT'] . "/s/mod/header.php") ?></div>
			<div id="content-container">
				<!-- begin content -->
				<div id="content">
					<div id="watch-container" itemscope="" itemtype="//schema.org/VideoObject">
						<!-- begin watch-headline-container -->
						<div id="watch-headline-container">
							<div id="watch-headline" class="watch-headline">
								<div id="watch-longform-ad" style="display:none;">
									<div id="watch-longform-text" style="visibility:hidden">
										Advertisement
									</div>
									<div id="watch-longform-ad-placeholder">
										<img src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" width="300" height="60">
									</div>
									<div id="instream_google_companion_ad_div"></div>
								</div>
								<?php if (@$_SESSION['siteusername'] == $_video['author'])
{ ?>
								<div id="watch-headline-container">
									<div id="watch-owner-container">
												<div id="masthead-subnav" class="yt-nav yt-nav-dark ">
										<ul class="yt-nav-aside">
											  <li>
										


									<a href="https://www.youtube.com/analytics#fi=v-9eTkCPkX6mc" class="yt-uix-button yt-uix-sessionlink yt-uix-button-subnav  yt-uix-button-dark" data-sessionlink="ei=CMCA1_3robMCFSrJRAodqnnxKQ%3D%3D"><span class="yt-uix-button-content">Analytics
									</span></a>
									  </li>

										<li>
										


									<a href="/my_videos" class="yt-uix-button yt-uix-sessionlink yt-uix-button-subnav  yt-uix-button-dark" data-sessionlink="ei=CMCA1_3robMCFSrJRAodqnnxKQ%3D%3D"><span class="yt-uix-button-content">Video Manager</span></a>
									  </li>


										</ul>

										<ul>
										  <li>

											


									<a href="/edit_video?id=<?php echo $_video['rid']; ?>" class="yt-uix-tooltip-reverse  yt-uix-button yt-uix-button-default yt-uix-tooltip" data-sessionlink="ei=CMCA1_3robMCFSrJRAodqnnxKQ%3D%3D"><span class="yt-uix-button-content">Edit</span></a>
										  </li>

												<li>
										


									<a href="/enhance?v=<?php echo $_video['rid']; ?>" class="yt-uix-button yt-uix-sessionlink yt-uix-button-subnav  yt-uix-button-dark" data-sessionlink="ei=CMCA1_3robMCFSrJRAodqnnxKQ%3D%3D"><span class="yt-uix-button-content">Enhancements</span></a>
									  </li>

												<li>
										


									<a href="/audio?v=<?php echo $_video['rid']; ?>" class="yt-uix-button yt-uix-sessionlink yt-uix-button-subnav  yt-uix-button-dark" data-sessionlink="ei=CMCA1_3robMCFSrJRAodqnnxKQ%3D%3D"><span class="yt-uix-button-content">Audio</span></a>
									  </li>


											  <li>
										


									<a href="/my_videos_annotate?v=<?php echo $_video['rid']; ?>" class="yt-uix-button yt-uix-sessionlink yt-uix-button-subnav  yt-uix-button-dark" data-sessionlink="ei=CMCA1_3robMCFSrJRAodqnnxKQ%3D%3D"><span class="yt-uix-button-content">Annotations</span></a>
									  </li>


										  


										<li>
										  <button type="button" class="yt-uix-button yt-uix-button-dark yt-uix-button-empty" onclick=";return false;" role="button" aria-pressed="false" aria-expanded="false" aria-haspopup="true" aria-activedescendant=""><img class="yt-uix-button-arrow" src="//s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt=""><ul class="yt-uix-button-menu yt-uix-button-menu-dark hid" role="menu" aria-haspopup="true" style="min-width: 28px; left: 636.375px; top: 98.0781px; display: none;"><li role="menuitem" id="aria-id-42038905421"><span href="/my_videos_timedtext?video_id=9eTkCPkX6mc" class=" yt-uix-button-menu-item" onclick=";window.location.href=this.getAttribute('href');return false;">Captions</span></li><li role="menuitem" id="aria-id-54340718499"><span href="/my_video_ad?v=9eTkCPkX6mc&amp;utm_source=youtube&amp;utm_campaign=yt_watch&amp;utm_medium=permanent&amp;utm_content=header_menu&amp;utm_term=dropdown" class=" yt-uix-button-menu-item" onclick=";window.location.href=this.getAttribute('href');return false;">Promote</span></li></ul></button>
										</li>

										</ul>
									  </div>


										  </div>
								</div>
								<?php
} ?>
								<?php if ($__user_h->if_admin(@$_SESSION['siteusername']) && @$_SESSION['siteusername'] != $_video['author'])
{ ?>
								<div id="watch-headline-container">
									<div id="watch-owner-container">
										<div id="masthead-subnav" class="yt-nav yt-nav-dark ">
											<ul class="yt-nav-aside">
												<li>
													<a href="/admin/" class="yt-uix-button yt-uix-sessionlink yt-uix-button-subnav  yt-uix-button-dark" data-sessionlink="ei=CMCA1_3robMCFSrJRAodqnnxKQ%3D%3D"><span class="yt-uix-button-content">Admin Panel</span></a>
												</li>
											</ul>
											<ul>
												<li>
													<a href="/get/delete_user_admin?v=<?php echo htmlspecialchars($_video['author']); ?>" class="yt-uix-button yt-uix-sessionlink yt-uix-button-subnav yt-uix-button-dark" data-sessionlink="ei=CMCA1_3robMCFSrJRAodqnnxKQ%3D%3D"><span class="yt-uix-button-content">Ban User</span></a>
												</li>
												<li>
													<a href="/get/delete_video_admin?v=<?php echo $_video['rid']; ?>" class="yt-uix-button yt-uix-sessionlink yt-uix-button-subnav  yt-uix-button-dark" data-sessionlink="ei=CMCA1_3robMCFSrJRAodqnnxKQ%3D%3D"><span class="yt-uix-button-content">Delete Video</span></a>
												</li>
												<li>
													<a href="/get/feature_video?v=<?php echo $_video['rid']; ?>" class="yt-uix-button yt-uix-sessionlink yt-uix-button-subnav  yt-uix-button-dark" data-sessionlink="ei=CMCA1_3robMCFSrJRAodqnnxKQ%3D%3D"><span class="yt-uix-button-content">Feature Video</span></a>
												</li>
											</ul>
										</div>
									</div>
								</div>

									<?php $_user = $__user_h->fetch_user_username($_video['author']); ?>
									<?php
    $stmt = $__db->prepare("SELECT ip, username FROM users WHERE ip = :ip");
    $stmt->bindParam(":ip", $_user['ip']);
    $stmt->execute();
    $alts = $stmt->rowCount();

    if ($alts != 0)
    {
        echo "<span style='font-size:11px;color:grey;'>Alts will pop up below here...</span><br>";
    }

    while ($username = $stmt->fetch(PDO::FETCH_ASSOC))
    {
        if ($username['username'] != $_video['author'] && $username['ip'] != "0.0.0.0") echo "
												  <a style='font-size:10px;' href='/user/" . htmlspecialchars($username['username']) . "'>" . htmlspecialchars($username['username']) . "</a><br>";
    }
?>
									<hr>
								<?php
} ?>
								<h1 id="watch-headline-title">
									<span id="eow-title" class="long-title " dir="ltr" title="<?php echo htmlspecialchars($_video['title']); ?>">
									<?php echo htmlspecialchars($_video['title']); ?>
									</span>
								</h1>
								<div id="watch-headline-user-info">
								  <a id="watch-username" class="inline-block" rel="author" href="/user/
		<?php echo htmlspecialchars($_video['author']); ?>">
								    <strong> <?php echo htmlspecialchars($_video['author']); ?> </strong>
								  </a>
								  									<button onclick="_toggleclass(this,'yt-uix-expander-collapsed');return false;" type="button" id="watch-mfu-button" class="yt-uix-expander-collapsed yt-uix-button yt-uix-button-default" data-button-toggle="true" data-video-user-id="<?php echo htmlspecialchars($_video['author']); ?>" data-button-menu-id="some-nonexistent-menu" data-video-id="<?php echo htmlspecialchars($_video['rid']); ?>" data-button-action="yt.www.watch.watch5.handleToggleMoreFromUser" role="button"><span class="yt-uix-button-content"><?php echo $_video['author_videos']; ?> videos </span><img class="yt-uix-button-arrow" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button>

									<?php if (@$_SESSION['siteusername'] == $_video['author'])
{ ?>
									<span class="yt-subscription-button-hovercard yt-uix-hovercard" data-card-class="watch-subscription-card"><span class="yt-uix-button-context-light yt-uix-button-subscription-container">  <button disabled="True" onclick=";return false;" title="No need to subscribe to yourself!" type="button" class="yt-subscription-button end yt-uix-button yt-uix-button-default yt-uix-tooltip" role="button" data-tooltip-text="No need to subscribe to yourself!"><span class="yt-uix-button-content">Subscribe </span></button>
									<span class="yt-subscription-button-disabled-mask"></span></span><div class="yt-uix-hovercard-content hid">  <p class="loading-spinner">
										<img src="//s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="">
									Loading...
									  </p>
									</div></div>
									<?php
}
else
{ ?>
									<span class="subscription-container">
										<span class="yt-uix-button-context-light">
										<button 
											onclick=";subscribe();return false;" 
											title="" 
											id="subscribe-button"
											type="button" 
											class="<?php if ($_video['subscribed'])
    {
        echo "subscribed ";
    } ?>yt-subscription-button  yt-uix-button yt-uix-button-subscription yt-uix-tooltip" 
											role="button">
											<span class="yt-uix-button-content">
												<span class="subscribe-label">Subscribe</span>
												<span class="subscribed-label">Subscribed</span>
												<span class="unsubscribe-label">Unsubscribe</span>
											</span>
										</button>
										<span class="yt-subscription-button-disabled-mask"></span></span>
										<div class="yt-uix-hovercard-content hid">
											<p class="loading-spinner">
												<img src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="">
												Loading...
											</p>
										</div>
									</div>
									<?php
} ?>
								</div>
								<div id="watch-more-from-user" class="collapsed">
									<div id="watch-channel-discoverbox" class="yt-rounded">
										<p class="yt-spinner">
											<img src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" class="yt-spinner-img" alt="">
											Loading...
										</p>
									</div>
								</div>
							</div>
						</div>
						<!-- end watch-headline-container -->
						<div id="watch-video-container">
							<div id="watch-video" >
          <script>
if (window.yt.timing) {yt.timing.tick("bf");}    </script>

          <div id="watch-player" class="flash-player"><video controls style="width:640px;height:390px;">
  <source src="/dynamic/videos/<?php echo htmlspecialchars($_video['rid']); ?>.mp4" type="video/mp4">
</video></div>

      <!-- begin watch-video-extra -->
      <div id="watch-video-extra">
        
        
      </div>
      <!-- end watch-video-extra -->
    </div>
						</div>
						<!-- begin watch-main-container -->
						<div id="watch-main-container">
							<div id="watch-main">
								<div id="watch-panel">
									<?php if ($_video['featured'] == "v")
{ ?>
										<div id="masthead_child_div"><div class="yt-alert yt-alert-default yt-alert-warn">  <div class="yt-alert-icon">
											<img src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" class="icon master-sprite" alt="Alert icon">
										</div>
										<div class="yt-alert-buttons"></div><div class="yt-alert-content" role="alert">    <span class="yt-alert-vertical-trick"></span>
											<div class="yt-alert-message">
												This video is featured. View more featured videos by SubRock on the front page.
											</div>
										</div></div></div>
									<?php
} ?>

	  								<?php if ($_video['visibility'] == "u")
{ ?>
										<div id="masthead_child_div"><div class="yt-alert yt-alert-default yt-alert-warn">  <div class="yt-alert-icon">
											<img src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" class="icon master-sprite" alt="Alert icon">
										</div>
										<div class="yt-alert-buttons"></div><div class="yt-alert-content" role="alert">    <span class="yt-alert-vertical-trick"></span>
											<div class="yt-alert-message">
												This video is unlisted. Only people who have the link can view this video.
											</div>
										</div></div></div>
									<?php
}
else if ($_video['visibility'] == "v")
{ ?>
										<div id="masthead_child_div"><div class="yt-alert yt-alert-default yt-alert-error">  <div class="yt-alert-icon">
											<img src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" class="icon master-sprite" alt="Alert icon">
										</div>
										<div class="yt-alert-buttons"></div><div class="yt-alert-content" role="alert">    <span class="yt-alert-vertical-trick"></span>
											<div class="yt-alert-message">
												This video is private. Only you can view this video.
											</div>
										</div></div></div>
									<?php
							} 
							else if (@$_SESSION['siteusername'] == $_video['author']) { ?>
							<div id="watch-privacy-contain">
								  <div id="eow-privacy">
									<div class="yt-alert yt-alert-default yt-alert-warn  " id="watch-video-notification-alert"><div class="yt-alert-buttons"></div><div class="yt-alert-content" role="alert">    <span class="yt-alert-vertical-trick"></span>
								<div class="yt-alert-message">
										This video is public.
								</div>
							</div></div>
								  </div>
								</div>
							<?php } ?>

									<div class="yt-alert yt-alert-default yt-alert-warn hid " id="flash10-promo-div">
										<div class="yt-alert-icon">
											<img src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" class="icon master-sprite" alt="Alert icon">
										</div>
										<div class="yt-alert-buttons">  <button type="button" class="close yt-uix-close yt-uix-button yt-uix-button-close" onclick=";return false;" data-close-parent-class="yt-alert" role="button"><span class="yt-uix-button-content">Close </span></button></div>
										<div class="yt-alert-content" role="alert">
											<span class="yt-alert-vertical-trick"></span>
											<div class="yt-alert-message">
												Upgrade to the latest Flash Player for improved playback performance. <a href="//www.adobe.com/go/getflashplayer/" onmousedown="urchinTracker('/Events/VideoWatch/GetFlashUpgrade');">Upgrade now</a> or <a href="//support.google.com/youtube/bin/answer.py?answer=95402">more info</a>.
											</div>
										</div>
									</div>
									<div id="watch-actions">
										<div id="watch-actions-right">
											<span class="watch-view-count">
											<strong><?php echo $__video_h->fetch_video_views($_video['rid']); ?></strong>
											</span>
											<button onclick=";return false;" title="Show video statistics" type="button" id="watch-insight-button" class="yt-uix-tooltip yt-uix-tooltip-reverse yt-uix-button yt-uix-button-default yt-uix-tooltip yt-uix-button-empty" data-button-action="yt.www.watch.actions.stats" role="button"><span class="yt-uix-button-icon-wrapper"><img class="yt-uix-button-icon yt-uix-button-icon-watch-insight" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="Show video statistics"><span class="yt-valign-trick"></span></span></button>
										</div>
										<span id="watch-like-unlike" class="yt-uix-button-group " data-button-toggle-group="optional">
											<button onclick=";window.location.href=this.getAttribute('href');return false;" href="/get/like_video?v=<?php echo $_video['rid']; ?>"
											title="I like this" 
											type="button" 
											class="start <?php if ($_video['liked'])
{
    echo "liked ";
} ?>yt-uix-tooltip-reverse  yt-uix-button yt-uix-button-default yt-uix-tooltip" 
											id="watch-like"  
											href="/get/like_video?v=<?php echo $_video['rid']; ?>"
											role="button"><span class="yt-uix-button-icon-wrapper">
												<img class="yt-uix-button-icon yt-uix-button-icon-watch-like" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="I like this">
												<span class="yt-valign-trick"></span></span><span class="yt-uix-button-content">Like </span>
											</button>
											
											<button 
											onclick=";window.location.href=this.getAttribute('href');return false;" href="/get/dislike_video?v=<?php echo $_video['rid']; ?>"
											title="I dislike this" 
											type="button" 
											style="margin-left: -2px;"
											href="/get/dislike_video?v=<?php echo $_video['rid']; ?>"
											class="end yt-uix-tooltip-reverse <?php if ($_video['disliked'])
{
    echo "unliked ";
} ?>  yt-uix-button yt-uix-button-default yt-uix-tooltip yt-uix-button-empty" 
											id="watch-unlike" 
											role="button">
												<span class="yt-uix-button-icon-wrapper">
													<img class="yt-uix-button-icon yt-uix-button-icon-watch-unlike" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="I dislike this">
													<span class="yt-valign-trick"></span>
												</span>
											</button></span>
										<button type="button" class="yt-uix-tooltip-reverse  yt-uix-button yt-uix-button-default yt-uix-tooltip" onclick=";return false;" title="Add to favorites or playlist" data-upsell="playlist" data-button-action="yt.www.watch.actions.addto" role="button"><span class="yt-uix-button-content"><span class="addto-label">Add to</span> </span></button>
										<button onclick=";return false;" title="Share or embed this video" type="button" class="yt-uix-tooltip-reverse yt-uix-button yt-uix-button-default yt-uix-tooltip" id="watch-share" data-button-action="yt.www.watch.actions.share" role="button"><span class="yt-uix-button-content">Share </span></button>
										<button onclick=";window.location.href=this.getAttribute('href');return false;" href="/report?v=<?php echo $_video['rid']; ?>" title="Flag as inappropriate" type="button" class="yt-uix-tooltip-reverse  yt-uix-button yt-uix-button-default yt-uix-tooltip yt-uix-button-empty" id="watch-flag" data-button-action="yt.www.watch.actions.flag" role="button"><span class="yt-uix-button-icon-wrapper"><img class="yt-uix-button-icon yt-uix-button-icon-watch-flag" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="Flag as inappropriate"><span class="yt-valign-trick"></span></span></button>
										<button onclick=";return false;" title="Interactive Transcript" type="button" class="yt-uix-tooltip-reverse yt-uix-button yt-uix-button-default yt-uix-tooltip yt-uix-button-empty" id="watch-transcript" data-button-action="yt.www.watch.actions.transcript" role="button" data-tooltip-text="Interactive Transcript"><span class="yt-uix-button-icon-wrapper"><img class="yt-uix-button-icon yt-uix-button-icon-transcript" src="//web.archive.org/web/20121015065757im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="Interactive Transcript"><span class="yt-valign-trick"></span></span></button>
										<button onclick=";window.location.href=this.getAttribute('href');return false;" class="yt-uix-tooltip-reverse yt-uix-button yt-uix-button-default yt-uix-tooltip yt-uix-button-empty" href="/dynamic/videos/<?php echo $_video['rid']; ?>.mp4">Download Video</a>
									</div>
									<div id="watch-actions-area-container" class="hid">
										<div id="watch-actions-area" class="yt-rounded">
											<div id="watch-actions-loading" class="watch-actions-panel hid">
												<div class="comments-disabled-message">
													<span>Analytics are not available for this video.</span>
												</div>
											</div>
											<div id="watch-actions-logged-out" class="watch-actions-panel hid">
												<?php if (!isset($_SESSION['siteusername']))
{ ?>
												<div class="yt-alert yt-alert-naked yt-alert-warn  ">
													<div class="yt-alert-icon">
														<img src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" class="icon master-sprite" alt="Alert icon">
													</div>
													<div class="yt-alert-content" role="alert">
														<span class="yt-alert-vertical-trick"></span>
														<div class="yt-alert-message">
															<strong><a href="/sign_in">Sign in</a> or <a href="/sign_up">sign up</a> now!
															</strong>
														</div>
													</div>
												</div>
												<?php
}
else
{ ?>
													<h3>Be friends with the creator</h3>

													<?php if ($_SESSION['siteusername'] != $_video['author'])
    { ?>
														<img style="width: 50px;height:50px;" src="/dynamic/pfp/<?php echo $__user_h->fetch_pfp($_video['author']); ?>">
														<span style="display: inline-block; vertical-align:top;width: 100px;font-size:11px;">
															<b><a href="/user/<?php echo htmlspecialchars($_video['author']); ?>"><?php echo htmlspecialchars($_video['author']); ?></a></b><br>
															<?php echo $__user_h->fetch_subs_count($_video['author']); ?> subscribers<br>
															<?php echo $__user_h->fetch_user_videos($_video['author']); ?> videos published<br>
														</span><br><br>
													<?php
    }
    else
    { ?>
														<img style="width: 50px;height:50px;" src="/dynamic/pfp/<?php echo $__user_h->fetch_pfp($_video['author']); ?>">
														<span style="display: inline-block; vertical-align:top;width: 100px;font-size:11px;">
															This is you.
														</span><br><br>
													<?php
    } ?>

													<?php if ($_SESSION['siteusername'] != $_video['author'])
    { ?>
														<?php if ($_video['friended'] == false)
        { ?>
															<a href="/friends">Send a friend request</a>
														<?php
        }
        else
        { ?>
															Your friend request is pending.
														<?php
        } ?>
													<?php
    }
    else
    { ?>
														You can't friend yourself.
													<?php
    } ?>
													<hr><br>
													<h3>Add to Favorites</h3>
													<?php if ($_video['favorited'] == false)
    { ?>
														<a href="/get/favorite?v=<?php echo $_video['rid']; ?>">Favorite Video</a>
													<?php
    }
    else
    { ?>
														<a href="/get/unfavorite?v=<?php echo $_video['rid']; ?>">Unfavorite Video</a>
													<?php
    } ?>
													<hr><br>
													<h3>Add to a Playlist</h3>
													<?php
    $stmt = $__db->prepare("SELECT * FROM playlists WHERE author = :username ORDER BY id DESC LIMIT 20");
    $stmt->bindParam(":username", $_SESSION['siteusername']);
    $stmt->execute();
    while ($playlist = $stmt->fetch(PDO::FETCH_ASSOC))
    {
        $buffer = json_decode($playlist['videos']);
        @$rid = $buffer[0];
        if (!empty($rid))
        {
            @$video = $__video_h->fetch_video_rid($rid);
        }
        else
        {
            $video['thumbnail'] = "";
            $video['duration'] = 0;
        }

        $videos = count($buffer);
?>
														<a href="/get/add_to_playlist?id=<?php echo $_video['rid']; ?>&playlist=<?php echo $playlist['rid']; ?>">Add to <?php echo htmlspecialchars($playlist['title']); ?></a><br>
													<?php
    } ?>
												<?php
} ?>
											</div>
											<div id="watch-actions-error" class="watch-actions-panel hid">
	  											kick push coast
											</div>
											<div id="watch-actions-addto" class="watch-actions-panel hid"></div>
											<div id="watch-actions-share" class="watch-actions-panel hid">
												<div id="watch-actions-share-loading">
													<div class="share-panel">
														<div class="share-option-container ytg-box">
															<div class="share-panel-url-container">
																<span class=" yt-uix-form-input-container "><input class="yt-uix-form-input-text share-panel-url" name="share_url" value="https://www.subrock.tk/watch?v=<?php echo $_video['rid']; ?>" data-video-id="<?php echo $_video['rid']; ?>"></span>
																<div class="share-panel-url-options yt-uix-expander yt-uix-expander-collapsed">
																	<div class="yt-uix-expander-head">
																		<a class="share-panel-show-url-options">
																		<span class="collapsed-message">
																		Options
																		<img class="arrow" src="./intro to RUCA - YouTube_files/pixel-vfl3z5WfW.gif" alt="">
																		</span> 
																		<span class="expanded-message">
																		Close
																		<img class="arrow" src="./intro to RUCA - YouTube_files/pixel-vfl3z5WfW.gif" alt="">
																		</span>
																		</a>
																	</div>
																	<ul class="yt-uix-expander-body share-options">
																		<li>
																			<label>
																			<input class="share-panel-start-at" type="checkbox">
																			Start at:
																			</label>
																			<input type="text" value="0:00" class="yt-uix-form-input-text share-panel-start-at-time">
																		</li>
																		<li>
																			<label>
																			<input class="share-panel-long-url" type="checkbox">
																			Long link
																			</label>
																		</li>
																	</ul>
																</div>
															</div>
															<div class="share-panel-buttons yt-uix-expander yt-uix-expander-collapsed">
																<span class="share-panel-main-buttons">
																<button type="button" class="share-panel-embed yt-uix-button yt-uix-button-default" onclick=";return false;" role="button"><span class="yt-uix-button-content">Embed </span></button><button type="button" class="share-panel-email yt-uix-button yt-uix-button-default" onclick=";return false;" role="button"><span class="yt-uix-button-content">Email </span></button>    </span>
															</div>
															<div class="share-panel-services yt-uix-expander yt-uix-expander-collapsed clearfix" style="display: none;">
																<ul class="share-group ytg-box">
																	<li>
																		<button onclick="yt.tracking.shareVideo(&quot;FACEBOOK&quot;, &quot;ngzCpd94AwA&quot;,&quot;en_US&quot;, &quot;sharepanel&quot;);yt.window.popup(&quot;http:\/\/www.facebook.com\/sharer.php?u=http%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3DngzCpd94AwA%26feature%3Dshare\u0026t=intro+to+RUCA&quot;, {'height': 440,'width': 620,'scrollbars': true});return false;" data-service-name="FACEBOOK" title="Share to Facebook" class="yt-uix-tooltip share-service-button">
																		<img src="./intro to RUCA - YouTube_files/pixel-vfl3z5WfW.gif" alt="Facebook" class="share-service-icon share-service-icon-facebook">
																		<span>Facebook</span>
																		</button>
																	</li>
																	<li>
																		<button onclick="yt.tracking.shareVideo(&quot;TWITTER&quot;, &quot;ngzCpd94AwA&quot;,&quot;en_US&quot;, &quot;sharepanel&quot;);yt.window.popup(&quot;http:\/\/twitter.com\/share?url=http%3A%2F%2Fyoutu.be%2FngzCpd94AwA\u0026text=intro+to+RUCA%3A\u0026via=youtube&quot;, {'height': 650,'width': 1024,'scrollbars': true});return false;" data-service-name="TWITTER" title="Share to Twitter" class="yt-uix-tooltip share-service-button" data-tooltip-text="Share to Twitter">
																		<img src="./intro to RUCA - YouTube_files/pixel-vfl3z5WfW.gif" alt="Twitter" class="share-service-icon share-service-icon-twitter">
																		<span>Twitter</span>
																		</button>
																	</li>
																	<li>
																		<button onclick="yt.tracking.shareVideo(&quot;GOOGLEPLUS&quot;, &quot;ngzCpd94AwA&quot;,&quot;en_US&quot;, &quot;sharepanel&quot;);yt.window.popup(&quot;https:\/\/plus.google.com\/u\/0\/share?url=http%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3DngzCpd94AwA%26feature%3Dshare\u0026source=yt&quot;, {'height': 620,'width': 620,'scrollbars': true});return false;" data-service-name="GOOGLEPLUS" title="Share to Google+" class="yt-uix-tooltip share-service-button" data-tooltip-text="Share to Google+">
																		<img src="./intro to RUCA - YouTube_files/pixel-vfl3z5WfW.gif" alt="Google+" class="share-service-icon share-service-icon-googleplus">
																		<span>Google+</span>
																		</button>
																	</li>
																</ul>
																<div class="yt-uix-expander-head">
																	<a class="share-panel-show-more">
																	<span class="collapsed-message">
																	More
																	<img class="arrow" src="./intro to RUCA - YouTube_files/pixel-vfl3z5WfW.gif" alt="">
																	</span>
																	<span class="expanded-message">
																	Less
																	<img class="arrow" src="./intro to RUCA - YouTube_files/pixel-vfl3z5WfW.gif" alt="">
																	</span>
																	</a>
																</div>
																<div class="yt-uix-expander-body share-options-secondary">
																	<div class="secondary">
																		<div class="share-groups">
																			<ul>
																				<li>
																					<button onclick="yt.tracking.shareVideo(&quot;ORKUT&quot;, &quot;ngzCpd94AwA&quot;,&quot;en_US&quot;, &quot;sharepanel&quot;);yt.window.popup(&quot;http:\/\/www.orkut.com\/FavoriteVideos.aspx?u=http%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3DngzCpd94AwA%26feature%3Dshare&quot;, {'height': 650,'width': 1024,'scrollbars': true});return false;" data-service-name="ORKUT" class="share-service-button">
																					<img src="./intro to RUCA - YouTube_files/pixel-vfl3z5WfW.gif" alt="orkut" class="share-service-icon share-service-icon-orkut">
																					<span>orkut</span>
																					</button>
																					<span>orkut</span>
																				</li>
																				<li>
																					<button onclick="yt.tracking.shareVideo(&quot;TUMBLR&quot;, &quot;ngzCpd94AwA&quot;,&quot;en_US&quot;, &quot;sharepanel&quot;);yt.window.popup(&quot;http:\/\/www.tumblr.com\/share?v=3\u0026u=http%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3DngzCpd94AwA%26feature%3Dshare&quot;, {'height': 650,'width': 1024,'scrollbars': true});return false;" data-service-name="TUMBLR" class="share-service-button">
																					<img src="./intro to RUCA - YouTube_files/pixel-vfl3z5WfW.gif" alt="tumblr." class="share-service-icon share-service-icon-tumblr">
																					<span>tumblr.</span>
																					</button>
																					<span>tumblr.</span>
																				</li>
																				<li>
																					<button onclick="yt.tracking.shareVideo(&quot;BLOGGER&quot;, &quot;ngzCpd94AwA&quot;,&quot;en_US&quot;, &quot;sharepanel&quot;);yt.window.popup(&quot;http:\/\/www.blogger.com\/blog-this.g?n=intro+to+RUCA\u0026source=youtube\u0026b=%3Ciframe+width%3D%22480%22+height%3D%22270%22+src%3D%22http%3A%2F%2Fwww.youtube.com%2Fembed%2FngzCpd94AwA%3Ffs%3D1%22+frameborder%3D%220%22+allowfullscreen%3E%3C%2Fiframe%3E\u0026eurl=http%3A%2F%2Fi3.ytimg.com%2Fvi%2FngzCpd94AwA%2Fhqdefault.jpg&quot;, {'height': 468,'width': 768,'scrollbars': true});return false;" data-service-name="BLOGGER" class="share-service-button">
																					<img src="./intro to RUCA - YouTube_files/pixel-vfl3z5WfW.gif" alt="Blogger" class="share-service-icon share-service-icon-blogger">
																					<span>Blogger</span>
																					</button>
																					<span>Blogger</span>
																				</li>
																				<li>
																					<button onclick="yt.tracking.shareVideo(&quot;MYSPACE&quot;, &quot;ngzCpd94AwA&quot;,&quot;en_US&quot;, &quot;sharepanel&quot;);yt.window.popup(&quot;http:\/\/www.myspace.com\/Modules\/PostTo\/Pages\/?t=intro+to+RUCA\u0026u=http%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3DngzCpd94AwA%26feature%3Dshare\u0026l=1&quot;, {'height': 650,'width': 1024,'scrollbars': true});return false;" data-service-name="MYSPACE" class="share-service-button">
																					<img src="./intro to RUCA - YouTube_files/pixel-vfl3z5WfW.gif" alt="Myspace" class="share-service-icon share-service-icon-myspace">
																					<span>Myspace</span>
																					</button>
																					<span>Myspace</span>
																				</li>
																			</ul>
																			<ul>
																				<li>
																					<button onclick="yt.tracking.shareVideo(&quot;HI5&quot;, &quot;ngzCpd94AwA&quot;,&quot;en_US&quot;, &quot;sharepanel&quot;);yt.window.popup(&quot;http:\/\/www.hi5.com\/friend\/checkViewedVideo.do?t=intro+to+RUCA\u0026url=http%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3DngzCpd94AwA%26feature%3Dshare\u0026embeddable=true\u0026simple=true&quot;, {'height': 475,'width': 800,'scrollbars': true});return false;" data-service-name="HI5" class="share-service-button">
																					<img src="./intro to RUCA - YouTube_files/pixel-vfl3z5WfW.gif" alt="hi5" class="share-service-icon share-service-icon-hi5">
																					<span>hi5</span>
																					</button>
																					<span>hi5</span>
																				</li>
																				<li>
																					<button onclick="yt.tracking.shareVideo(&quot;LINKEDIN&quot;, &quot;ngzCpd94AwA&quot;,&quot;en_US&quot;, &quot;sharepanel&quot;);yt.window.popup(&quot;http:\/\/www.linkedin.com\/shareArticle?url=http%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3DngzCpd94AwA%26feature%3Dshare\u0026title=intro+to+RUCA\u0026summary=intro+to+RUCA%2C+a+computer+game+that+I+will+be+releasing+online+this+june+at+www.cecilyismyruca.com\u0026source=Youtube&quot;, {'height': 650,'width': 1024,'scrollbars': true});return false;" data-service-name="LINKEDIN" class="share-service-button">
																					<img src="./intro to RUCA - YouTube_files/pixel-vfl3z5WfW.gif" alt="LinkedIn" class="share-service-icon share-service-icon-linkedin">
																					<span>LinkedIn</span>
																					</button>
																					<span>LinkedIn</span>
																				</li>
																				<li>
																					<button onclick="yt.tracking.shareVideo(&quot;STUMBLEUPON&quot;, &quot;ngzCpd94AwA&quot;,&quot;en_US&quot;, &quot;sharepanel&quot;);yt.window.popup(&quot;http:\/\/www.stumbleupon.com\/submit?url=http%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3DngzCpd94AwA%26feature%3Dshare\u0026title=intro+to+RUCA&quot;, {'height': 650,'width': 1024,'scrollbars': true});return false;" data-service-name="STUMBLEUPON" class="share-service-button">
																					<img src="./intro to RUCA - YouTube_files/pixel-vfl3z5WfW.gif" alt="StumbleUpon" class="share-service-icon share-service-icon-stumbleupon">
																					<span>StumbleUpon</span>
																					</button>
																					<span>StumbleUpon</span>
																				</li>
																			</ul>
																		</div>
																	</div>
																</div>
															</div>
															<div class="share-panel-embed-container" style="">
																<textarea class="yt-uix-form-textarea share-embed-code" onkeydown="if ((event.ctrlKey || event.metaKey) &amp;&amp; event.keyCode == 67) { yt.tracking.track('embedCodeCopied'); }">not implemented</textarea>
																<p class="share-embed-code-description">
																	After making your selection, copy and paste the embed code above. The code changes based on your selection.
																</p>
																<hr>
																<ul class="share-embed-options">
																	<li>
																		<label>
																		<input type="checkbox" class="share-embed-option" name="show-related" checked="">
																		Show suggested videos when the video finishes
																		</label>
																	</li>
																	<li>
																		<label>
																		<input type="checkbox" class="share-embed-option" name="use-https">
																		Use HTTPS
																		
																		</label>
																	</li>
																	<li>
																		<label>
																		<input type="checkbox" class="share-embed-option" name="delayed-cookies">
																		Enable privacy-enhanced mode
																		
																		</label>
																	</li>
																	<li>
																		<label>
																		<input type="checkbox" class="share-embed-option" name="use-flash-code">
																		Use old embed code
																		
																		</label>
																	</li>
																</ul>
																<hr>
															</div>
															<div class="share-panel-email-container hid">
																<div>
																	Loading...
																</div>
															</div>
														</div>
														<span class="share-panel-hangout">
														</span>
													</div>
												</div>
												<div id="watch-actions-share-panel" class="hid"></div>
											</div>
											<div id="watch-actions-ajax" class="watch-actions-panel hid"></div>
											<div class="close">
												<img src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" class="close-button" onclick="yt.www.watch.actions.hide();">
											</div>
										</div>
									</div>
									<div id="watch-info">
										<div id="watch-description" class="yt-uix-expander  yt-uix-expander-collapsed" data-expander-action="yt.www.watch.watch5.handleToggleDescription">
											<div id="watch-description-clip">
												<p id="watch-uploader-info">
													Published on <span id="eow-date" class="watch-video-date"><?php echo date("M d, Y", strtotime($_video['publish'])); ?></span> by     <a href="/user/<?php echo htmlspecialchars($_video['author']); ?>" class="yt-uix-sessionlink yt-user-name author" rel="author" data-sessionlink="<?php echo htmlspecialchars($_video['author']); ?>" dir="ltr"><?php echo htmlspecialchars($_video['author']); ?></a>
												</p>
												<div id="watch-description-text">
													<p id="eow-description"><?php echo $__video_h->shorten_description($_video['description'], 400000, true); ?></p>
												</div>
												<div id="watch-description-extras">
													<h4>
														Category:
													</h4>
													<p id="eow-category"><a href="/videos?c=<?php echo htmlspecialchars($_video['category']); ?>"><?php echo htmlspecialchars($_video['category']); ?></a></p>
													<h4>License:</h4>
													<p id="eow-reuse">
														Standard SubRock License
													</p>
												</div>
											</div>
											<ul id="watch-description-extra-info">
												<li>
													<div class="watch-sparkbars">
														<div class="video-sparkbar-likes" style="width: <?php echo $_video['likeswidth']; ?>%"></div>
														<div class="video-sparkbar-dislikes" style="width: <?php echo $_video['dislikeswidth']; ?>%"></div>
													</div>
													<span class="video-likes-dislikes">
													<span class="likes"><?php echo $_video['likes']; ?></span> likes, <span class="dislikes"><?php echo $_video['dislikes']; ?></span> dislikes
													</span>
												</li>
											</ul>
											<div class="yt-horizontal-rule "><span class="first"></span><span class="second"></span><span class="third"></span></div>
											<div id="watch-description-toggle" class="yt-uix-expander-head">
												<div id="watch-description-expand" class="expand">
													<button type="button" class="metadata-inline yt-uix-button yt-uix-button-text" onclick=";return false;" role="button"><span class="yt-uix-button-content">Show more <img src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="Show more">
													</span></button>
												</div>
												<div id="watch-description-collapse" class="collapse">
													<button type="button" class="metadata-inline yt-uix-button yt-uix-button-text" onclick=";return false;" role="button"><span class="yt-uix-button-content">Show less <img src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="Show less">
													</span></button>
												</div>
											</div>
										</div>
									</div>
									<div id="watch-discussion">
										<div style="display: none"><iframe src="//plus.google.com/_/s/c2?first_party_property=YOUTUBE&amp;href=http%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3D<?php echo htmlspecialchars($_video['rid']); ?>&amp;yt_owner_id=<?php echo htmlspecialchars($_video['author']); ?>"></iframe></div>
										<div id="comments-view" data-type="highlights" class="">
											<div id="comment-share-area" class="comment-share-area yt-rounded hid">
												<div class="comment-share-content">
													<h4>Link to this comment:</h4>
													<div style="visibility: hidden;">
														<input type="text" value="//www.subrock.tk/watch?v=<?php echo $_GET['v']; ?>" class="comment-share-url yt-uix-form-input-text">
													</div>
													<div>
														<input type="text" value="//www.subrock.tk/watch?v=<?php echo $_GET['v']; ?>" class="yt-uix-form-input-text">
													</div>
													<div style="display: none;">
														<span>Share to:</span>
														<img alt="" title="Facebook" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" class="icon-comment-share icon-comment-share-facebook" action="yt.window.popup('\/\/www.facebook.com\/sharer.php?u=http%3A%2F%2Fwww.youtube.com%2Fcomment%3Flc%3D_COMMENT_ID_&amp;t=_COMMENT_TEXT_', {height:440, width:620, scrollbars:true});">
														<img alt="" title="Twitter" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" class="icon-comment-share icon-comment-share-twitter" action="yt.window.popup('\/\/twitter.com\/share?url=http%3A%2F%2Fwww.youtube.com%2Fcomment%3Flc%3D_COMMENT_ID_&amp;text=_COMMENT_TEXT_%3A&amp;via=youtube', {height:650, width:1024, scrollbars:true});">
														<img alt="" title="Google+" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" class="icon-comment-share icon-comment-share-googleplus" action="yt.window.popup('\/\/plus.google.com\/share?url=http%3A%2F%2Fwww.youtube.com%2Fcomment%3Flc%3D_COMMENT_ID_&amp;source=yt', {height:620, width:620, scrollbars:true});">
													</div>
												</div>
												<div class="close comment-action" data-action="close-share">
													<img src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" class="close-button">
												</div>
											</div>
											<?php
$stmt = $__db->prepare("SELECT * FROM video_response WHERE toid = :v ORDER BY id DESC LIMIT 4");
$stmt->bindParam(":v", $_GET['v']);
$stmt->execute();
?>

											<?php if ($stmt->rowCount() != 0)
{ ?>
												<div class="comments-section">
													<a class="comments-section-see-all" href="/video_response_view_all?v=<?php echo htmlspecialchars($_video['rid']); ?>">
													see all
													</a>
													<h4>Video Responses</h4>
													<ul class="video-list">
													<?php
    while ($video = $stmt->fetch(PDO::FETCH_ASSOC))
    {
        if ($__video_h->video_exists($video['video']))
        {
            $video = $__video_h->fetch_video_rid($video['video']);
            $video['age'] = $__time_h->time_elapsed_string($video['publish']);
            $video['duration'] = $__time_h->timestamp($video['duration']);
            $video['views'] = $__video_h->fetch_video_views($video['rid']);
            $video['author'] = htmlspecialchars($video['author']);
            $video['title'] = htmlspecialchars($video['title']);
            $video['description'] = $__video_h->shorten_description($video['description'], 50);
?>
														<li class="video-list-item yt-tile-default">
															<a href="/watch?v=<?php echo $video['rid']; ?>" class="related-video yt-uix-contextlink  yt-uix-sessionlink" data-sessionlink="<?php echo htmlspecialchars($_video['author']); ?>&amp;feature=watch_response"><span class="ux-thumb-wrap contains-addto "><span class="video-thumb ux-thumb yt-thumb-default-120 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="<?php echo $video['title']; ?>" data-thumb="/dynamic/thumbs/<?php echo $video['thumbnail']; ?>" width="120"><span class="vertical-align"></span></span></span></span><span class="video-time"><?php echo $video['duration']; ?></span>
															<button onclick=";return false;" title="Watch Later" type="button" class="addto-button video-actions addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-short yt-uix-tooltip" data-button-menu-id="shared-addto-watch-later-login" data-video-ids="cjls0QsHOBE" role="button"><span class="yt-uix-button-content">  <img src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="Watch Later">
															</span><img class="yt-uix-button-arrow" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button>
															</span><span dir="ltr" class="title" title="<?php echo $video['title']; ?>"><?php echo $video['title']; ?></span><span class="stat attribution">by <span class="yt-user-name " dir="ltr"><?php echo $video['author']; ?></span></span><span class="stat view-count"><?php echo $video['views']; ?> views</span></a>
														</li>
													<?php
        }
    } ?>
													</ul>
												</div>
											<?php
} ?>
											<div class="comments-section " onmouseover="if (yt.www &amp;&amp; yt.www.watch &amp;&amp; yt.www.watch.livecomments) yt.www.watch.livecomments.handleCommentMouseEvent(this, event);" onmouseout="if (yt.www &amp;&amp; yt.www.watch &amp;&amp; yt.www.watch.livecomments) yt.www.watch.livecomments.handleCommentMouseEvent(this, event);">
												<div id="comments-header-container">
													<div id="comments-header">
														<a class="comments-section-see-all" href="/all_comments?v=<?php echo htmlspecialchars($_video['rid']); ?>">
														see all
														</a>
														<h4>
															All Comments
															<span class="comments-section-stat">(<?php echo $_video['comments']; ?>)</span>
														</h4>
													</div>
												</div>
												<?php if (!isset($_SESSION['siteusername']))
{ ?>
													<div class="comments-post-container clearfix">
														<div class="comments-post-alert">
															<a href="/sign_in">Sign In</a> or <a href="/sign_up">Sign Up</a><span class="comments-post-form-rollover-text"> now to post a comment!</span>
														</div>
													</div>
												<?php
}
else if ($_video['commenting'] == "d")
{ ?>
													<div class="comments-disabled-message">
														<img src="http://s.ytimg.com/yt/img/icon_comments_disabled-vflxokpZC.png">
														<span>Adding comments has been disabled for this video.</span>
													</div>
												<?php
}
else if ($__user_h->if_blocked($_video['author'], $_SESSION['siteusername']))
{ ?>
													<div class="comments-post-container clearfix">
														<div class="comments-post-alert">
															This user has blocked you!
														</div>
													</div>
												<?php
}
else
{ ?>
													<div class="comments-post-container clearfix">
														<form method="post" action="/comment_service_ajax">
															<div class="yt-alert yt-alert-default yt-alert-error hid comments-post-message">
																<div class="yt-alert-icon">
																	<img class="icon master-sprite" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" width="32px" height="35px">
																</div>
																<div class="yt-alert-buttons"></div>
																<div class="yt-alert-content" role="alert"></div>
															</div>
															<input type="hidden" name="form_id" value="">
															<input type="hidden" name="source" value="w">
															<input type="hidden" value="" name="reply_parent_id">
															<a href="/user/<?php echo htmlspecialchars($_SESSION['siteusername']); ?>" class="yt-user-photo comments-post-profile"><span class="video-thumb ux-thumb yt-thumb-square-46 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="/dynamic/pfp/<?php echo $__user_h->fetch_pfp($_SESSION['siteusername']); ?>" alt="<?php echo htmlspecialchars($_SESSION['siteusername']); ?>" width="46"><span class="vertical-align"></span></span></span></span></a>
															<div class="comments-textarea-container" onclick="yt.www.comments.initForm(this, true, false);">
																<img src="./intro to RUCA - YouTube_files/pixel-vfl3z5WfW.gif" alt="" class="comments-textarea-tip"><label class="comments-textarea-label" data-upsell="comment">Respond to this video...</label>  
																<div class="yt-uix-form-input yt-grid ">
																	<textarea id="" class="yt-uix-form-textarea comments-textarea" onfocus="yt.www.comments.initForm(this, false, false);" data-upsell="comment" name="comment"></textarea>
																</div>
															</div>
															<p class="comments-remaining">
																<span class="comments-remaining-count" data-max-count="500"></span> characters remaining
															</p>
															<p class="comments-threshold-countdown hid">
																<span class="comments-threshold-count"></span> seconds remaining before you can post
															</p>
															<p class="comments-post-buttons">
																<span class="comments-post-video-response-link"></span><button type="submit" class="comments-post yt-uix-button yt-uix-button-default" role="button"><span class="yt-uix-button-content">Post </span></button>    
															</p>
														</form>
													</div>
												<?php
} ?><br>
												<div id="live-comments-setting-scroll" class="live-comments-setting hid">
													<span id="live-comments-count"></span>
													<a onclick="yt.www.watch.livecomments.setScroll(true); return false;">Update automatically</a>
												</div>
												<div id="live-comments-setting-no-scroll" class="live-comments-setting hid">
													<a onclick="yt.www.watch.livecomments.setScroll(false); return false;">Disable automatic updates</a>
												</div>
												<ul class="comment-list" id="live_comments">
														<?php
$results_per_page = 20;

$stmt = $__db->prepare("SELECT * FROM comments WHERE toid = :rid ORDER BY id DESC");
$stmt->bindParam(":rid", $_video['rid']);
$stmt->execute();

$number_of_result = $stmt->rowCount();
$number_of_page = ceil($number_of_result / $results_per_page);

if (!isset($_GET['page']))
{
    $page = 1;
}
else
{
    $page = (int)$_GET['page'];
}

$page_first_result = ($page - 1) * $results_per_page;

$stmt = $__db->prepare("SELECT * FROM comments WHERE toid = :rid ORDER BY id DESC LIMIT :pfirst, :pper");
$stmt->bindParam(":rid", $_video['rid']);
$stmt->bindParam(":pfirst", $page_first_result);
$stmt->bindParam(":pper", $results_per_page);
$stmt->execute();

while ($comment = $stmt->fetch(PDO::FETCH_ASSOC))
{
    if ($__video_h->if_comment_liked($comment['id'], $_SESSION['siteusername'], true)) $comment['liked'] = true;
    else if ($__video_h->if_comment_liked($comment['id'], $_SESSION['siteusername'], false)) $comment['disliked'] = true;

    $comment['likes'] = $__video_h->get_comment_likes($comment['id'], true);
    $comment['likes'] -= $__video_h->get_comment_likes($comment['id'], false);
?>

														<li class="comment" data-author-viewing="" data-author-id="-uD01K8FQTeOSS5sniRFzQ" data-id="<?php echo $comment['id']; ?>" data-score="0">
																<div class="content-container">
																	<div class="content">
																		<div class="comment-text" dir="ltr">
																			<p><?php echo $__video_h->shorten_description($comment['comment'], 3000, true); ?></p>
																		</div>
																		<p class="metadata">
																			<span class="author ">
																			<a href="/user/<?php echo htmlspecialchars($comment['author']); ?>" class="yt-uix-sessionlink yt-user-name " data-sessionlink="<?php echo htmlspecialchars($comment['author']); ?>" dir="ltr"><?php echo htmlspecialchars($comment['author']); ?></a>
																			</span>
																			<span class="time" dir="ltr">
																			<span dir="ltr"><?php echo $__time_h->time_elapsed_string($comment['date']); ?><span>
																			</span>
																			</span></span>
																			<?php if ($comment['likes'] != 0)
    { ?>
																				<?php if ($comment['likes'] < 0)
        { ?>
																				<span dir="ltr" class="comments-rating-positive" title="9 up, 1 down" style="color:#c16a6a;">
																					<?php echo abs($comment['likes']);; ?>
																					<img src="/yt/imgbin/dislike.png">
																				</span>
																				<?php
        }
        else
        { ?>
																				<span dir="ltr" class="comments-rating-positive" title="9 up, 1 down">
																					<?php echo $comment['likes']; ?>
																					<img class="comments-rating-thumbs-up" src="//s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif">
																				</span>
																				<?php
        } ?>
																			<?php
    } ?>
																		</p>
																	</div>
																<?php if (isset($_SESSION['siteusername']))
    { ?> 
																	<li id="reply_to_<?php echo $comment['id']; ?>" style="display: none;" class="comment yt-tile-default  child" data-tag="O" data-author-viewing="" data-id="iRV7EkT9us81mDLFDSB6FAsB156Fdn13HUmTm26C3PE" data-score="34" data-author="<?php echo htmlspecialchars($row['author']); ?>">

																	<div class="comment-body">
																		<div class="content-container">
																		<div class="content">
																			<div class="comment-text" dir="ltr">
																			<form method="post" action="/d/reply?id=<?php echo $comment['id']; ?>&v=<?php echo $_GET['v']; ?>">
																				<img style="width: 50px;" src="">
																				<textarea style="resize:none;padding:5px;border-radius:5px;background-color:white;border: 1px solid #d3d3d3; width: 577px; resize: none;"cols="32" id="com" placeholder="Share your thoughts" name="comment"></textarea><br><br>
																				<input style="float: none; margin-right: 0px; margin-top: 0px;" class="yt-uix-button yt-uix-button-default" type="submit" value="Reply" name="replysubmit">
																				<input style="display: none;" name="id" value="<?php echo $row['id']; ?>">
																				
																			</form>
																	</div>
																<?php
    } ?>
																</div>
															</div>
														</li>
														<?php
    $stmt2 = $__db->prepare("SELECT * FROM comment_reply WHERE toid = :rid ORDER BY id DESC");
    $stmt2->bindParam(":rid", $comment['id']);
    $stmt2->execute();

    while ($reply = $stmt2->fetch(PDO::FETCH_ASSOC))
    {
?>
															<li class="comment yt-tile-default " style="margin-left: 30px;" data-author-viewing="" data-author-id="-uD01K8FQTeOSS5sniRFzQ" data-id="<?php echo $reply['id']; ?>" data-score="0">
																<div class="comment-body">
																	<div class="content-container">
																		<div class="content">
																			<div class="comment-text" dir="ltr">
																				<p><?php echo $__video_h->shorten_description($reply['comment'], 3000, true); ?></p>
																			</div>
																			<p class="metadata">
																				<span class="author ">
																				<a href="/user/<?php echo htmlspecialchars($reply['author']); ?>" class="yt-uix-sessionlink yt-user-name " data-sessionlink="<?php echo htmlspecialchars($reply['author']); ?>" dir="ltr"><?php echo htmlspecialchars($reply['author']); ?></a>
																				</span>
																				<span class="time" dir="ltr">
																				<span dir="ltr"><?php echo $__time_h->time_elapsed_string($reply['date']); ?><span>
																				</span>
																				</span></span>
																			</p>
																		</div>
																		<div class="comment-actions">
																			<span class="yt-uix-button-group"><button type="button" class="start comment-action-vote-up comment-action yt-uix-button yt-uix-button-default yt-uix-tooltip yt-uix-button-empty" onclick=";return false;" title="Vote Up" data-action="vote-up" data-tooltip-show-delay="300" role="button"><span class="yt-uix-button-icon-wrapper"><img class="yt-uix-button-icon yt-uix-button-icon-watch-comment-vote-up" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="Vote Up"><span class="yt-valign-trick"></span></span></button><button type="button" class="end comment-action-vote-down comment-action yt-uix-button yt-uix-button-default yt-uix-tooltip yt-uix-button-empty" onclick=";return false;" title="Vote Down" data-action="vote-down" data-tooltip-show-delay="300" role="button"><span class="yt-uix-button-icon-wrapper"><img class="yt-uix-button-icon yt-uix-button-icon-watch-comment-vote-down" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="Vote Down"><span class="yt-valign-trick"></span></span></button></span>
																			<span class="yt-uix-button-group">
																				<button type="button" 
																						class="start comment-action yt-uix-button yt-uix-button-default" 
																						onclick=";$('#reply_to_<?php echo $comment['id']; ?>').show();return false;" data-action="reply" role="button"><span class="yt-uix-button-content">Reply</span>
																				</button><button type="button" class="end flip yt-uix-button yt-uix-button-default yt-uix-button-empty" onclick=";return false;" data-button-has-sibling-menu="true" role="button" aria-pressed="false" aria-expanded="false" aria-haspopup="true" aria-activedescendant="">
																					<img class="yt-uix-button-arrow" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="">
																					<div class=" yt-uix-button-menu yt-uix-button-menu-default" style="display: none;">
																						<ul>
																							<li class="comment-action" data-action="share"><span class="yt-uix-button-menu-item">Share</span></li>
																							<li class="comment-action-remove comment-action" data-action="remove"><span class="yt-uix-button-menu-item">Remove</span></li>
																							<li class="comment-action" data-action="flag"><span class="yt-uix-button-menu-item">Flag for spam</span></li>
																							<li class="comment-action-block comment-action" data-action="block"><span class="yt-uix-button-menu-item">Block User</span></li>
																							<li class="comment-action-unblock comment-action" data-action="unblock"><span class="yt-uix-button-menu-item">Unblock User</span></li>
																						</ul>
																					</div>
																				</button>
																			</span>
																		</div>
																	</div>
																</div>
															</li>
														<?php
    } ?>
													<?php
} ?>
												</ul>
											</div>
											<div class="comments-section">
												<!--
												<div class="comments-pagination" data-ajax-enabled="true">
													<div class="yt-uix-pager" role="navigation">
														<a href="/all_comments?v=<?php echo htmlspecialchars($_video['rid']); ?>&amp;page=1" class="yt-uix-button yt-uix-sessionlink yt-uix-pager-page-num yt-uix-pager-button yt-uix-button-toggled yt-uix-button-default" data-sessionlink="<?php echo htmlspecialchars($_video['author']); ?>" data-page="1" aria-label="Go to page 1"><span class="yt-uix-button-content">1</span></a>&nbsp;
														<a href="/all_comments?v=<?php echo htmlspecialchars($_video['rid']); ?>&amp;page=2" class="yt-uix-button yt-uix-sessionlink yt-uix-pager-page-num yt-uix-pager-button yt-uix-button-default" data-sessionlink="<?php echo htmlspecialchars($_video['author']); ?>" data-page="2" aria-label="Go to page 2"><span class="yt-uix-button-content">2</span></a>&nbsp;
														<a href="/all_comments?v=<?php echo htmlspecialchars($_video['rid']); ?>&amp;page=3" class="yt-uix-button yt-uix-sessionlink yt-uix-pager-page-num yt-uix-pager-button yt-uix-button-default" data-sessionlink="<?php echo htmlspecialchars($_video['author']); ?>" data-page="3" aria-label="Go to page 3"><span class="yt-uix-button-content">3</span></a>&nbsp;
														<a href="/all_comments?v=<?php echo htmlspecialchars($_video['rid']); ?>&amp;page=4" class="yt-uix-button yt-uix-sessionlink yt-uix-pager-page-num yt-uix-pager-button yt-uix-button-default" data-sessionlink="<?php echo htmlspecialchars($_video['author']); ?>" data-page="4" aria-label="Go to page 4"><span class="yt-uix-button-content">4</span></a>&nbsp;
														<a href="/all_comments?v=<?php echo htmlspecialchars($_video['rid']); ?>&amp;page=5" class="yt-uix-button yt-uix-sessionlink yt-uix-pager-page-num yt-uix-pager-button yt-uix-button-default" data-sessionlink="<?php echo htmlspecialchars($_video['author']); ?>" data-page="5" aria-label="Go to page 5"><span class="yt-uix-button-content">5</span></a>&nbsp;
														<a href="/all_comments?v=<?php echo htmlspecialchars($_video['rid']); ?>&amp;page=6" class="yt-uix-button yt-uix-sessionlink yt-uix-pager-page-num yt-uix-pager-button yt-uix-button-default" data-sessionlink="<?php echo htmlspecialchars($_video['author']); ?>" data-page="6" aria-label="Go to page 6"><span class="yt-uix-button-content">6</span></a>&nbsp;
														<a href="/all_comments?v=<?php echo htmlspecialchars($_video['rid']); ?>&amp;page=7" class="yt-uix-button yt-uix-sessionlink yt-uix-pager-page-num yt-uix-pager-button yt-uix-button-default" data-sessionlink="<?php echo htmlspecialchars($_video['author']); ?>" data-page="7" aria-label="Go to page 7"><span class="yt-uix-button-content">7</span></a>&nbsp;
														<a href="/all_comments?v=<?php echo htmlspecialchars($_video['rid']); ?>&amp;page=2" class="yt-uix-button yt-uix-sessionlink yt-uix-pager-next yt-uix-pager-button yt-uix-button-default" data-sessionlink="<?php echo htmlspecialchars($_video['author']); ?>" data-page="2"><span class="yt-uix-button-content">Next »</span></a>&nbsp;
													</div>
												</div>
														-->
											</div>
											<ul>
												<li class="hid" id="parent-comment-loading"> Loading comment...</li>
											</ul>
											<div id="comments-loading" class="hid">Loading...</div>
										</div>
									</div>
								</div>
								<div id="watch-sidebar">
									<div id="watch-channel-brand-div" style="display: none;" class="watch-sidebar-section">
										<div id="ad300x250" class="alignR"></div>
										<div id="google_companion_ad_div" class="alignR"></div>
										<div style="padding-top: 3px; display:none;">
											Advertisement
										</div>
									</div>
									<div class="watch-sidebar-section">
										<div id="watch-related-container" class="watch-sidebar-body">
											<ul id="watch-related" class="video-list">
												<?php
$stmt = $__db->prepare("SELECT * FROM playlists ORDER BY rand() LIMIT 2");
$stmt->execute();
while ($_playlist = $stmt->fetch(PDO::FETCH_ASSOC))
{
    $_playlist['videos'] = json_decode($_playlist['videos']);
    $_playlist['count'] = 1;

    if ($__video_h->video_exists($_playlist['videos'][0]))
    {
        $video = $__video_h->fetch_video_rid($_playlist['videos'][0]);
    }
    else
    {
        $video = [];
        $video['thumbnail'] = "default.jpg";
    }
?>
												<li class="video-list-item">
													<a href="/view_playlist?v=<?php echo $_playlist['rid']; ?>" class="related-playlist yt-uix-contextlink  yt-uix-sessionlink" data-sessionlink="ved=CAMQzhooAA%3D%3D&amp;ei=CKf4md_r7rMCFYMfRAodLGlRiA%3D%3D&amp;feature=list_other">
														<span class="ux-thumb-wrap">
															<span class="video-thumb ux-thumb yt-thumb-default-120 ">
																<span class="yt-thumb-clip">
																	<span class="yt-thumb-clip-inner">
																		<img src="http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="<?php echo htmlspecialchars($_playlist['title']); ?>" data-thumb="/dynamic/thumbs/<?php echo htmlspecialchars($video['thumbnail']); ?>" width="120">
																		<span class="vertical-align"></span>
																	</span>
																</span>
															</span>
															<span class="video-count">
																<strong><?php echo count($_playlist['videos']); ?></strong> videos </span>
														</span>
														<span class="thumb-row">
															<span class="video-thumb ux-thumb yt-thumb-default-40 ">
																<span class="yt-thumb-clip">
																	<span class="yt-thumb-clip-inner">
																		<img src="http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="Thumbnail" data-thumb="/dynamic/thumbs/<?php echo htmlspecialchars($video['thumbnail']); ?>" width="40">
																		<span class="vertical-align"></span>
																	</span>
																</span>
															</span>
															<span class="video-thumb ux-thumb yt-thumb-default-40 "> 
																<span class="yt-thumb-clip">
																	<span class="yt-thumb-clip-inner">
																		<img src="http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="Thumbnail" data-thumb="/dynamic/thumbs/<?php echo htmlspecialchars($video['thumbnail']); ?>" width="40">
																		<span class="vertical-align"></span>
																	</span>
																</span>
															</span>
															<span class="video-thumb ux-thumb yt-thumb-default-40 ">
																<span class="yt-thumb-clip">
																	<span class="yt-thumb-clip-inner">
																		<img src="http://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="Thumbnail" data-thumb="/dynamic/thumbs/<?php echo htmlspecialchars($video['thumbnail']); ?>" width="40">
																		<span class="vertical-align"></span>
																	</span>
																</span>
															</span>
														</span>
														<span dir="ltr" class="title" title="<?php echo htmlspecialchars($_playlist['title']); ?>"><?php echo htmlspecialchars($_playlist['title']); ?></span>
													</a>
												</li>
												<?php
} ?>
												<div id="ppv-container" class="hid"></div>
												<?php
$stmt = $__db->prepare("SELECT * FROM videos WHERE visibility = 'n' ORDER BY rand() LIMIT 20");
$stmt->execute();
while ($video = $stmt->fetch(PDO::FETCH_ASSOC))
{
    $video['age'] = $__time_h->time_elapsed_string($video['publish']);
    $video['duration'] = $__time_h->timestamp($video['duration']);
    $video['views'] = $__video_h->fetch_video_views($video['rid']);
    $video['author'] = htmlspecialchars($video['author']);
    $video['title'] = htmlspecialchars($video['title']);
    $video['description'] = $__video_h->shorten_description($video['description'], 50);
?>
<li class="video-list-item ">
  <a href="/watch?v=<?php echo $video['rid']; ?>" class="video-list-item-link ">
    <span class="ux-thumb-wrap contains-addto ">
      <span class="video-thumb ux-thumb-110 ">
        <span class="clip">
          <img src="/dynamic/thumbs/<?php echo $video['thumbnail']; ?>" alt="Thumbnail" data-thumb="/dynamic/thumbs/<?php echo $video['thumbnail']; ?>" data-group-key="thumb-group-2">
        </span>
      </span>
      <span class="video-time"><?php echo $video['duration']; ?></span>
      <button type="button" class="addto-button short video-actions yt-uix-button yt-uix-button-short" onclick=";return false;" data-button-menu-action="yt.www.lists.addto.toggleMenu" data-button-menu-id="shared-addto-menu" data-video-ids="2hRcLan1TzU" data-feature="thumbnail" role="button">
        <img class="yt-uix-button-icon yt-uix-button-icon-addto" src="//web.archive.org/web/20111111023534im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="">
        <span class="yt-uix-button-content">
          <span class="addto-label">Add to</span>
        </span>
        <img class="yt-uix-button-arrow" src="//web.archive.org/web/20111111023534im_/http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="">
      </button>
    </span>
    <span dir="ltr" class="title" title="<?php echo $video['title']; ?>"><?php echo $video['title']; ?></span>
    <span class="stat">by <?php echo htmlspecialchars($video['author']); ?></span>
    <span class="stat view-count"><?php echo $video['views']; ?> views </span>
  </a>
</li>
												<?php
} ?>
											</ul>
											<ul id="watch-more-related" class="video-list hid">
											<p class="yt-spinner">
											<img src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" class="yt-spinner-img" alt="">
											Loading...
											</p>
											</ul>
										</div>
									</div>
									<span class="yt-vertical-rule-main"></span>
									<span class="yt-vertical-rule-corner-top"></span>
									<span class="yt-vertical-rule-corner-bottom"></span>
								</div>
								<div class="clear"></div>
							</div>
							<div style="visibility: hidden; height: 0px; padding: 0px; overflow: hidden;">
								<img src="//www.youtube-nocookie.com/gen_204?attributionpartner=machinima" width="1" height="1" border="0">
							</div>
						</div>
						<!-- end watch-main-container -->
					</div>
				</div>
				<!-- end content -->
			</div>
			<div id="footer-container"><?php require ($_SERVER['DOCUMENT_ROOT'] . "/s/mod/footer.php") ?></div>
			<div id="playlist-bar" class="hid passive editable" data-video-url="/watch?v=&amp;feature=BFql&amp;playnext=1&amp;list=QL" data-list-id="" data-list-type="QL">
				<div id="playlist-bar-bar-container">
					<div id="playlist-bar-bar">
						<div class="yt-alert yt-alert-naked yt-alert-success hid " id="playlist-bar-notifications">
							<div class="yt-alert-icon">
								<img src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" class="icon master-sprite" alt="Alert icon">
							</div>
							<div class="yt-alert-content" role="alert"></div>
						</div>
						<span id="playlist-bar-info"><span class="playlist-bar-active playlist-bar-group"><button onclick=";return false;" title="Previous video" type="button" id="playlist-bar-prev-button" class="yt-uix-tooltip yt-uix-tooltip-masked  yt-uix-button yt-uix-button-default yt-uix-tooltip yt-uix-button-empty" role="button"><span class="yt-uix-button-icon-wrapper"><img class="yt-uix-button-icon yt-uix-button-icon-playlist-bar-prev" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="Previous video"><span class="yt-valign-trick"></span></span></button><span class="playlist-bar-count"><span class="playing-index">0</span> / <span class="item-count">0</span></span><button type="button" class="yt-uix-tooltip yt-uix-tooltip-masked  yt-uix-button yt-uix-button-default yt-uix-button-empty" onclick=";return false;" id="playlist-bar-next-button" role="button"><span class="yt-uix-button-icon-wrapper"><img class="yt-uix-button-icon yt-uix-button-icon-playlist-bar-next" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""><span class="yt-valign-trick"></span></span></button></span><span class="playlist-bar-active playlist-bar-group"><button type="button" class="yt-uix-tooltip yt-uix-tooltip-masked  yt-uix-button yt-uix-button-default yt-uix-button-empty" onclick=";return false;" id="playlist-bar-autoplay-button" data-button-toggle="true" role="button"><span class="yt-uix-button-icon-wrapper"><img class="yt-uix-button-icon yt-uix-button-icon-playlist-bar-autoplay" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""><span class="yt-valign-trick"></span></span></button><button type="button" class="yt-uix-tooltip yt-uix-tooltip-masked  yt-uix-button yt-uix-button-default yt-uix-button-empty" onclick=";return false;" id="playlist-bar-shuffle-button" data-button-toggle="true" role="button"><span class="yt-uix-button-icon-wrapper"><img class="yt-uix-button-icon yt-uix-button-icon-playlist-bar-shuffle" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""><span class="yt-valign-trick"></span></span></button></span><span class="playlist-bar-passive playlist-bar-group"><button onclick=";return false;" title="Play videos" type="button" id="playlist-bar-play-button" class="yt-uix-tooltip yt-uix-tooltip-masked  yt-uix-button yt-uix-button-default yt-uix-tooltip yt-uix-button-empty" role="button"><span class="yt-uix-button-icon-wrapper"><img class="yt-uix-button-icon yt-uix-button-icon-playlist-bar-play" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="Play videos"><span class="yt-valign-trick"></span></span></button><span class="playlist-bar-count"><span class="item-count">0</span></span></span><span id="playlist-bar-title" class="yt-uix-button-group"><span class="playlist-title">Unsaved Playlist</span></span></span>
						<a id="playlist-bar-lists-back" href="#">
						Return to active list
						</a>
						<span id="playlist-bar-controls"><span class="playlist-bar-group"><button type="button" class="yt-uix-tooltip yt-uix-tooltip-masked  yt-uix-button yt-uix-button-text yt-uix-button-empty" onclick=";return false;" id="playlist-bar-toggle-button" role="button"><span class="yt-uix-button-icon-wrapper"><img class="yt-uix-button-icon yt-uix-button-icon-playlist-bar-toggle" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""><span class="yt-valign-trick"></span></span></button></span><span class="playlist-bar-group"><button type="button" class="yt-uix-tooltip yt-uix-tooltip-masked yt-uix-button-reverse flip yt-uix-button yt-uix-button-text" onclick=";return false;" data-button-menu-id="playlist-bar-options-menu" data-button-has-sibling-menu="true" role="button"><span class="yt-uix-button-content">Options </span><img class="yt-uix-button-arrow" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button></span></span>      
					</div>
				</div>
				<div id="playlist-bar-tray-container">
					<div id="playlist-bar-tray" class="yt-uix-slider yt-uix-slider-fluid">
						<button class="yt-uix-button playlist-bar-tray-button yt-uix-button-default yt-uix-slider-prev" onclick="return false;"><img class="yt-uix-slider-prev-arrow" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="Previous video"></button><button class="yt-uix-button playlist-bar-tray-button yt-uix-button-default yt-uix-slider-next" onclick="return false;"><img class="yt-uix-slider-next-arrow" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="Next video"></button>
						<div class="yt-uix-slider-body">
							<div id="playlist-bar-tray-content" class="yt-uix-slider-slide">
								<ol class="video-list"></ol>
								<ol id="playlist-bar-help">
									<li class="empty playlist-bar-help-message">Your queue is empty. Add videos to your queue using this button: <img src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" class="addto-button-help"><br> or <a href="//accounts.google.com/ServiceLogin?passive=true&amp;continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26feature%3Dplaylist%26nomobiletemp%3D1%26hl%3Den_US%26next%3D%252Fwatch%253Fv%253D<?php echo htmlspecialchars($_video['rid']); ?>%2526feature%253Dg-logo-xit&amp;uilel=3&amp;hl=en_US&amp;service=youtube">sign in</a> to load a different list.</li>
								</ol>
							</div>
							<div class="yt-uix-slider-shade-left"></div>
							<div class="yt-uix-slider-shade-right"></div>
						</div>
					</div>
					<div id="playlist-bar-save"></div>
					<div id="playlist-bar-lists" class="dark-lolz"></div>
					<div id="playlist-bar-loading"><img src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="Loading..."><span id="playlist-bar-loading-message">Loading...</span><span id="playlist-bar-saving-message" class="hid">Saving...</span></div>
					<div id="playlist-bar-template" style="display: none;" data-video-thumb-url="//i4.ytimg.com/vi/__video_encrypted_id__/default.jpg">
						<!--<li class="playlist-bar-item yt-uix-slider-slide-unit __classes__" data-video-id="__video_encrypted_id__"><a href="__video_url__" title="__video_title__" class="yt-uix-sessionlink" data-sessionlink="<?php echo htmlspecialchars($_video['author']); ?>&amp;feature=BFa"><span class="video-thumb ux-thumb yt-thumb-default-106 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="__video_title__" data-thumb-manual="true" data-thumb="__video_thumb_url__" width="106" ><span class="vertical-align"></span></span></span></span><span class="screen"></span><span class="count"><strong>__list_position__</strong></span><span class="play"><img src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif"></span><span class="yt-uix-button yt-uix-button-default delete"><img class="yt-uix-button-icon-playlist-bar-delete" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="Delete"></span><span class="now-playing">Now playing</span><span dir="ltr" class="title"><span>__video_title__  <span class="uploader">by __video_display_name__</span>
							</span></span><span class="dragger"></span></a></li>-->
					</div>
					<div id="playlist-bar-next-up-template" style="display: none;">
						<!--<div class="playlist-bar-next-thumb"><span class="video-thumb ux-thumb yt-thumb-default-74 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="//i4.ytimg.com/vi/__video_encrypted_id__/default.jpg" alt="Thumbnail" onerror="this.onerror=null;this.src='/dynamic/thumbs/default.jpg';" width="74" ><span class="vertical-align"></span></span></span></span></div>-->
					</div>
				</div>
				<div id="playlist-bar-options-menu" class="hid">
					<div id="playlist-bar-extras-menu">
						<ul>
							<li><span class="yt-uix-button-menu-item" data-action="clear">
								Clear all videos from this list
								</span>
							</li>
						</ul>
					</div>
					<ul>
						<li><span class="yt-uix-button-menu-item" onclick="window.location.href='//support.google.com/youtube/bin/answer.py?answer=146749&amp;hl=en-US'">Learn more</span></li>
					</ul>
				</div>
			</div>
			<div id="shared-addto-watch-later-login" class="hid">
				<a href="//accounts.google.com/ServiceLogin?passive=true&amp;continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26feature%3Dplaylist%26nomobiletemp%3D1%26hl%3Den_US%26next%3D%252Fwatch%253Fv%253D<?php echo htmlspecialchars($_video['rid']); ?>%2526feature%253Dg-logo-xit&amp;uilel=3&amp;hl=en_US&amp;service=youtube" class="sign-in-link">Sign in</a> to add this to a playlist
			</div>
			<div id="shared-addto-menu" style="display: none;" class="hid sign-in">
				<div class="addto-menu">
					<div id="addto-list-panel" class="menu-panel active-panel">
						<span class="yt-uix-button-menu-item yt-uix-tooltip sign-in" data-possible-tooltip="" data-tooltip-show-delay="750"><a href="//accounts.google.com/ServiceLogin?passive=true&amp;continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26feature%3Dplaylist%26nomobiletemp%3D1%26hl%3Den_US%26next%3D%252Fwatch%253Fv%253D<?php echo htmlspecialchars($_video['rid']); ?>%2526feature%253Dg-logo-xit&amp;uilel=3&amp;hl=en_US&amp;service=youtube" class="sign-in-link">Sign in</a> to add this to a playlist
						</span>
					</div>
					<div id="addto-list-saved-panel" class="menu-panel">
						<div class="panel-content">
							<div class="yt-alert yt-alert-naked yt-alert-success  ">
								<div class="yt-alert-icon">
									<img src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" class="icon master-sprite" alt="Alert icon">
								</div>
								<div class="yt-alert-content" role="alert">
									<span class="yt-alert-vertical-trick"></span>
									<div class="yt-alert-message">
										<span class="message">Added to <span class="addto-title yt-uix-tooltip yt-uix-tooltip-reverse" title="More information about this playlist" data-tooltip-show-delay="750"></span></span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div id="addto-list-error-panel" class="menu-panel">
						<div class="panel-content">
							<img src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif">
							<span class="error-details"></span>
							<a class="show-menu-link">Back to list</a>
						</div>
					</div>
					<div id="addto-note-input-panel" class="menu-panel">
						<div class="panel-content">
							<div class="yt-alert yt-alert-naked yt-alert-success  ">
								<div class="yt-alert-icon">
									<img src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" class="icon master-sprite" alt="Alert icon">
								</div>
								<div class="yt-alert-content" role="alert">
									<span class="yt-alert-vertical-trick"></span>
									<div class="yt-alert-message">
										<span class="message">Added to playlist:</span>
										<span class="addto-title yt-uix-tooltip" title="More information about this playlist" data-tooltip-show-delay="750"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="yt-uix-char-counter" data-char-limit="150">
							<div class="addto-note-box addto-text-box"><textarea id="addto-note" class="addto-note yt-uix-char-counter-input" maxlength="150"></textarea><label for="addto-note" class="addto-note-label">Add an optional note</label></div>
							<span class="yt-uix-char-counter-remaining">150</span>
						</div>
						<button disabled="disabled" type="button" class="playlist-save-note yt-uix-button yt-uix-button-default" onclick=";return false;" role="button"><span class="yt-uix-button-content">Add note </span></button>
					</div>
					<div id="addto-note-saving-panel" class="menu-panel">
						<div class="panel-content loading-content">
							<img src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif">
							<span>Saving note...</span>
						</div>
					</div>
					<div id="addto-note-saved-panel" class="menu-panel">
						<div class="panel-content">
							<img src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif">
							<span class="message">Note added to:</span>
						</div>
					</div>
					<div id="addto-note-error-panel" class="menu-panel">
						<div class="panel-content">
							<img src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif">
							<span class="message">Error adding note:</span>
							<ul class="error-details"></ul>
							<a class="add-note-link">Click to add a new note</a>
						</div>
					</div>
					<div class="close-note hid">
						<img src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" class="close-button">
					</div>
				</div>
			</div>
</div>
		<!-- end page -->
<script id="www-core-js" src="/yt/jsbin/www-core-vfl1pq97W.js" data-loaded="true"></script>
		<script id="www-core-js" src="/yt/jsbin/www-core-vfl1pq97W.js" data-loaded="true"></script>
		<script>
			yt.setConfig({
			'XSRF_TOKEN': 'sWZ0733z73lb8fEYAYSd84MaNV98MTM0OTEzMDExNUAxMzQ5MDQzNzE1',
			'XSRF_FIELD_NAME': 'session_token'
			});
			yt.pubsub.subscribe('init', yt.www.xsrf.populateSessionToken);
			
			yt.setConfig('XSRF_REDIRECT_TOKEN', '08fYRr2a9pjbx2VYZhoZtyl-4lh8MTM0OTEzMDExNUAxMzQ5MDQzNzE1');
			
			yt.setConfig({
			'EVENT_ID': "CJuY27ur3rICFaL4OgodEHRznw==",
			'CURRENT_URL': "\/\/www.youtube.com\/watch?v=<?php echo htmlspecialchars($_video['rid']); ?>\u0026feature=g-logo-xit",
			'LOGGED_IN': false,
			'SESSION_INDEX': null,
			
			'WATCH_CONTEXT_CLIENTSIDE': false,
			
			'FEEDBACK_LOCALE_LANGUAGE': "en",
			'FEEDBACK_LOCALE_EXTRAS': {"logged_in": false, "experiments": "906717,901803,907354,904448,901424,922401,920704,912806,913419,913546,913556,919349,919351,925109,919003,912706,900816", "guide_subs": "NA", "accept_language": null}    });
		</script>
		<script>
			if (window.yt.timing) {yt.timing.tick("js_head");}    
		</script>
		<script>
			yt.setAjaxToken('subscription_ajax', "");
			yt.pubsub.subscribe('init', yt.www.subscriptions.SubscriptionButton.init);
			
		</script>
		<script>
			yt.setConfig({
			  'VIDEO_ID': "<?php echo htmlspecialchars($_video['rid']); ?>"    });
			yt.setAjaxToken('watch_actions_ajax', "");
			
			if (window['gYouTubePlayerReady']) {
			  yt.registerGlobal('gYouTubePlayerReady');
			}
		</script>
  
  <?php if (@$_SESSION['siteusername'] == $_video['author'])
{ ?>
  <script id="js-1699250385" src="https://s.ytimg.com/yts/jsbin/www-watch-edit-vfly8oON1.js" data-loaded="true"></script>
  <?php
} ?>
  
  
		<script>
			yt.setConfig({
			  'SUBSCRIBE_AXC': "",
			
			  'IS_OWNER_VIEWING': null,
			  'IS_WIDESCREEN': false,
			  'PREFER_LOW_QUALITY': false,
			  'WIDE_PLAYER_STYLES': ["watch-wide-mode"],
			  'COMMENT_SHARE_URL': "\/\/www.youtube.com\/comment?lc=_COMMENT_ID_",
			  'ALLOW_EMBED': true,
			  'ALLOW_RATINGS': true,
			
			  'LIST_AUTO_PLAY_ON': false,
			  'LIST_AUTO_PLAY_VALUE': 1,
			  'SHUFFLE_VALUE': 0,
			  'SHUFFLE_ENABLED': false,
			  'YPC_CAN_RATE_VIDEO': true,
			  'YPC_SHOW_VPPA_CONFIRM_RATING': false,
			
			
			
			
			
			
			
			
			  'PLAYBACK_ID': "AATK8rd3IxlBnwIO",
			  'PLAY_ALL_MAX': 480    });
			
			yt.setMsg({
			  'LOADING': "Loading...",
			  'WATCH_ERROR_MESSAGE': "This feature is not available right now. Please try again later."    });
			
			
			
			  yt.setMsg({
			'UNBLOCK_USER': "Are you sure you want to unblock this user?",
			'BLOCK_USER': "Are you sure you want to block this user?"
			});
			yt.setConfig('BLOCK_USER_AJAX_XSRF', '');
			
			
			  yt.setConfig({
			'COMMENT_SHARE_URL': "\/\/www.youtube.com\/comment?lc=_COMMENT_ID_",
			'COMMENTS_SIGNIN_URL': "",
			'COMMENTS_THRESHHOLD': -5,
			'COMMENTS_PAGE_SIZE': 10,
			'COMMENTS_COUNT': 41353,
			'COMMENTS_YPC_CAN_POST_OR_REACT_TO_COMMENT': true,
			'COMMENT_VOTE_XSRF' : '',
			'COMMENT_ACTIONS_XSRF' : '',
			'COMMENT_SOURCE': "w",
			'ENABLE_LIVE_COMMENTS': true  });
			
			yt.setAjaxToken('link_ajax', "");
			yt.setAjaxToken('comment_servlet', "");
			yt.setAjaxToken('comment_voting', "");
			
			yt.setMsg({
			'COMMENT_OK': "OK",
			'COMMENT_BLOCKED': "You have been blocked by the owner of this video.",
			'COMMENT_CAPTCHAFAIL': "The response to the letters on the image was not correct, please try again.",
			'COMMENT_PENDING': "Comment Pending Approval!",
			'COMMENT_ERROR_EMAIL': "Error, account unverified (see email)",
			'COMMENT_ERROR': "Error, try again",
			'COMMENT_OWNER_LINKING': "Comments can't contain links, please put the link in your video description and refer to it in the comment."
			});
			
			yt.pubsub.subscribe('init', yt.www.comments.init);
			
			  yt.setConfig({
			'ENABLE_LIVE_COMMENTS': true,
			'COMMENTS_VIDEO_ID': "<?php echo htmlspecialchars($_video['rid']); ?>",
			'COMMENTS_LATEST_TIMESTAMP': 1349043702,
			'COMMENTS_POLLING_INTERVAL': 15000,
			'COMMENTS_FORCE_SCROLLING': false,
			'COMMENTS_PAGE_SIZE': 10  });
			
			yt.setMsg({
			'LC_COUNT_NEW_COMMENTS': "\u003ca href=\"#\" onclick=\"yt.www.watch.livecomments.showNewComments(); return false;\"\u003eShow $count new comments.\u003c\/a\u003e"
			});
			
			yt.pubsub.subscribe('init', function() {
			  yt.net.scriptloader.load("\/\/s.ytimg.com\/yt\/jsbin\/www-livecomments-vflCp_BeU.js", function() {
			    yt.www.watch.livecomments.init();
			  });
			});
			
			
			
			  yt.setConfig('ENABLE_AUTO_LARGE', true);
			  yt.www.watch.watch5.updatePlayerSize();
			  yt.pubsub.subscribe('init', function() {
			    yt.events.listen(window, 'resize',
			        yt.www.watch.watch5.handleResize);
			  });
			
			yt.pubsub.subscribe('init', yt.www.watch.activity.init);
			yt.pubsub.subscribe('init', yt.www.watch.player.init);
			yt.pubsub.subscribe('init', yt.www.watch.actions.init);
			yt.pubsub.subscribe('init', yt.www.watch.shortcuts.init);
			
			
			yt.pubsub.subscribe('init', function() {
			  var description = _gel('watch-description');
			  if (!_hasclass(description, 'yt-uix-expander-collapsed')) {
			    yt.www.watch.watch5.handleToggleDescription(description);
			  }
			});
			
			
			
			
			
			
			
			
			
			
		</script>
		<script>
			yt.setConfig('PYV_REQUEST', true);
			yt.setConfig('PYV_AFS', false);
		</script>
		<script>
			yt.www.ads.pyv.loadPyvIframe("\n  \u003cscript\u003e\n    var google_max_num_ads = '1';\n    var google_ad_output = 'js';\n    var google_ad_type = 'text';\n    var google_only_pyv_ads = true;\n    var google_video_doc_id = \"yt_<?php echo htmlspecialchars($_video['rid']); ?>\";\n      var google_ad_request_done = parent.yt.www.ads.pyv.pyvWatchAfcWithPpvCallback;\n    var google_ad_client = 'ca-pub-6219811747049371';\n    var google_ad_block = '3';\n      var google_ad_host = \"ca-host-pub-6813290291914109\";\n      var google_ad_host_tier_id = \"464885\";\n      var google_page_url = \"\\\/\\\/www.youtube.com\\\/video\\\/<?php echo htmlspecialchars($_video['rid']); ?>\";\n      var google_ad_channel = \"PyvWatchInRelated+PyvYTWatch+PyvWatchNoAdX+pw+non_lpw+afv_user_funker530+afv_user_id_<?php echo htmlspecialchars($_video['author']); ?>+yt_mpvid_AATK8rd3hYr5XSL9+yt_cid_676+ytexp_906717.901803.907354.904448.901424.922401.920704.912806.913419.913546.913556.919349.919351.925109.919003.912706.900816\";\n      var google_language = \"en\";\n      var google_eids = ['56702372'];\n      var google_yt_pt = \"AD1B29l_Eb6GvswrtaJp3Xbg-8Cen9ZYRkIWEEZsAd6dGBgqPd1L2hDoHNZ3vsezXxxrRKglcrLrvmR_xDdeypbUNSFkZJs63DRNWYRvVQ\";\n  \u003c\/script\u003e\n\n  \u003cscript s\u0072c=\"\/\/pagead2.googlesyndication.com\/pagead\/show_ads.js\"\u003e\u003c\/script\u003e\n");
		</script>
		<script>
			window['google_language'] = "en";
			
			
			window['google_ad_type'] = 'image';
			window['google_ad_width'] = '300';
			window['google_ad_block'] = '2';
			window['google_ad_client'] = "ca-pub-6219811747049371";
			window['google_ad_host'] = "ca-host-pub-6813290291914109";
			window['google_ad_host_tier_id'] = "464885";
			window['google_ad_channel'] = "6031455484+6031455482+0854550288+afv_user_funker530+afv_user_id_<?php echo htmlspecialchars($_video['author']); ?>+yt_mpvid_AATK8rd3hYr5XSL9+yt_cid_676+ytexp_906717.901803.907354.904448.901424.922401.920704.912806.913419.913546.913556.919349.919351.925109.919003.912706.900816+Vertical_397+Vertical_881+ytps_default+ytel_detailpage";
			window['google_video_doc_id'] = "yt_<?php echo htmlspecialchars($_video['rid']); ?>";
			window['google_color_border'] = 'FFFFFF';
			window['google_color_bg'] = 'FFFFFF';
			window['google_color_link'] = '0033CC';
			window['google_color_text'] = '444444';
			window['google_color_url'] = '0033CC';
			window['google_language'] = "en";
			window['google_alternate_ad_url'] = "\/\/www.youtube.com\/ad_frame?id=watch-channel-brand-div";
			window['google_yt_pt'] = "AD1B29l_Eb6GvswrtaJp3Xbg-8Cen9ZYRkIWEEZsAd6dGBgqPd1L2hDoHNZ3vsezXxxrRKglcrLrvmR_xDdeypbUNSFkZJs63DRNWYRvVQ";
			window['google_eids'] = ['56702371'];
			window['google_page_url'] = "\/\/www.youtube.com\/video\/<?php echo htmlspecialchars($_video['rid']); ?>";
		</script>
		<script>
			yt.pubsub.subscribe('init', function() {
			  var scriptEl = document.createElement('script');
			  scriptEl.src = "\/\/pagead2.googlesyndication.com\/pagead\/show_companion_ad.js";
			  var headEl = document.getElementsByTagName('head')[0];
			  headEl.appendChild(scriptEl);
			});
		</script>
		<script>
			function afcAdCall() {
			  var channels = "6031455484+6031455482+0854550288+afv_user_funker530+afv_user_id_<?php echo htmlspecialchars($_video['author']); ?>+yt_mpvid_AATK8rd3hYr5XSL9+yt_cid_676+ytexp_906717.901803.907354.904448.901424.922401.920704.912806.913419.913546.913556.919349.919351.925109.919003.912706.900816+Vertical_397+Vertical_881+ytps_default+ytel_detailpage";
			  channels = channels.replace('0854550288', '0854550287');
			  channels = channels.replace('afv_brand_mpu', '0854550287');
			  channels = channels + '+afc_on_page';
			  window['google_ad_format'] = '300x250_as';
			  window['google_ad_height'] = '250';
			  window['google_page_url'] = "\/\/www.youtube.com\/video\/<?php echo htmlspecialchars($_video['rid']); ?>";
			    window['google_yt_pt'] = "AD1B29l_Eb6GvswrtaJp3Xbg-8Cen9ZYRkIWEEZsAd6dGBgqPd1L2hDoHNZ3vsezXxxrRKglcrLrvmR_xDdeypbUNSFkZJs63DRNWYRvVQ";
			
			
			  var afcOptions = {
			    'ad_type': 'image',
			    'format': '300x250_as',
			    'ad_block': '2',
			    'ad_client': "ca-pub-6219811747049371",
			    'ad_host': "ca-host-pub-6813290291914109",
			    'ad_host_tier_id': "464885",
			    'ad_channel': channels,
			    'video_doc_id': "yt_<?php echo htmlspecialchars($_video['rid']); ?>",
			    'color_border': 'FFFFFF',
			    'color_bg': 'FFFFFF',
			    'color_link': '0033CC',
			    'color_text': '444444',
			    'color_url': '0033CC',
			    'language': "en",
			    'alternate_ad_url': "\/\/www.youtube.com\/ad_frame?id=watch-channel-brand-div"
			  };
			  var afcCallback = function() {
			    if (window.google && google.ads && google.ads.Ad) {
			      yt.www.watch.ads.handleShowAfvCompanionAdDiv(false);
			      var ad = new google.ads.Ad("ca-pub-6219811747049371", 'google_companion_ad_div', afcOptions);
			    } else {
			      yt.setTimeout(afcCallback, 200);
			    }
			  };
			  afcCallback();
			}
		</script>
		<script>
			yt.pubsub.subscribe('init', function() {
			  var scriptEl = document.createElement('script');
			  scriptEl.src = "\/\/www.google.com\/jsapi?autoload=%7B%22modules%22%3A%5B%7B%22name%22%3A%22ads%22%2C%22version%22%3A%221%22%2C%22callback%22%3A%22(function()%7B%7D)%22%2C%22packages%22%3A%5B%22content%22%5D%7D%5D%7D";
			  var headEl = document.getElementsByTagName('head')[0];
			  headEl.appendChild(scriptEl);
			});
		</script>
		<script src="//www.googletagservices.com/tag/js/gpt.js"></script>
		<script>
			yt.www.watch.ads.createGutSlot("\/4061\/ytpwatch\/main_676");
		</script>
		<script>
			if (window.yt.timing) {yt.timing.tick("js_page");}    
		</script>
		<script>
			yt.setConfig('TIMING_ACTION', "watch5ad");    
		</script>
		<script>yt.pubsub.subscribe('init', function() {yt.www.thumbnaildelayload.init(0);});</script>
		<script>
			yt.setMsg({
			  'LIST_CLEARED': "List cleared",
			  'PLAYLIST_VIDEO_DELETED': "Video deleted.",
			  'ERROR_OCCURRED': "Sorry, an error occurred.",
			  'NEXT_VIDEO_TOOLTIP': "Next video:\u003cbr\u003e \u0026#8220;${next_video_title}\u0026#8221;",
			  'NEXT_VIDEO_NOTHUMB_TOOLTIP': "Next video",
			  'SHOW_PLAYLIST_TOOLTIP': "Show playlist",
			  'HIDE_PLAYLIST_TOOLTIP': "Hide playlist",
			  'AUTOPLAY_ON_TOOLTIP': "Turn autoplay off",
			  'AUTOPLAY_OFF_TOOLTIP': "Turn autoplay on",
			  'SHUFFLE_ON_TOOLTIP': "Turn shuffle off",
			  'SHUFFLE_OFF_TOOLTIP': "Turn shuffle on",
			  'PLAYLIST_BAR_PLAYLIST_SAVED': "Playlist saved!",
			  'PLAYLIST_BAR_ADDED_TO_FAVORITES': "Added to favorites",
			  'PLAYLIST_BAR_ADDED_TO_PLAYLIST': "Added to playlist",
			  'PLAYLIST_BAR_ADDED_TO_QUEUE': "Added to queue",
			  'AUTOPLAY_WARNING1': "Next video starts in 1 second...",
			  'AUTOPLAY_WARNING2': "Next video starts in 2 seconds...",
			  'AUTOPLAY_WARNING3': "Next video starts in 3 seconds...",
			  'AUTOPLAY_WARNING4': "Next video starts in 4 seconds...",
			  'AUTOPLAY_WARNING5': "Next video starts in 5 seconds...",
			  'UNDO_LINK': "Undo"  });
			
			
			yt.setConfig({
			  'DRAGDROP_BINARY_URL': "\/\/s.ytimg.com\/yt\/jsbin\/www-dragdrop-vflWKaUyg.js",
			  'PLAYLIST_BAR_PLAYING_INDEX': -1  });
			
			  yt.setAjaxToken('addto_ajax_logged_out', "KTlts1bRmBPkwoVCGIRuG79_hSF8MTM0OTEzMDExNUAxMzQ5MDQzNzE1");
			
			  yt.www.lists.init();
			
			
			
			
			
			
			
			
			
			  yt.setConfig({'SBOX_JS_URL': "\/\/s.ytimg.com\/yt\/jsbin\/www-searchbox-vflsHyn9f.js",'SBOX_SETTINGS': {"CLOSE_ICON_URL": "\/\/s.ytimg.com\/yt\/img\/icons\/close-vflrEJzIW.png", "SHOW_CHIP": false, "PSUGGEST_TOKEN": null, "REQUEST_DOMAIN": "us", "EXPERIMENT_ID": -1, "SESSION_INDEX": null, "HAS_ON_SCREEN_KEYBOARD": false, "CHIP_PARAMETERS": {}, "REQUEST_LANGUAGE": "en"},'SBOX_LABELS': {"SUGGESTION_DISMISS_LABEL": "Dismiss", "SUGGESTION_DISMISSED_LABEL": "Suggestion dismissed"}});
			
			
			
			
			
		</script>
		<script>
			yt.setMsg({
			  'ADDTO_WATCH_LATER_ADDED': "Added",
			  'ADDTO_WATCH_LATER_ERROR': "Error"
			});
		</script>
		<script>
			if (window.yt.timing) {yt.timing.tick("js_foot");}    
		</script>
		<script>
			var subscribed = <?php echo ($_video['subscribed'] ? 'true' : 'false') ?>;
			var liked = <?php echo ($_video['liked'] ? 'true' : 'false') ?>;
			var loggedIn = <?php echo (isset($_SESSION['siteusername']) ? 'true' : 'false') ?>;
			var alerts = 0;
 
			function subscribe() {
				if(loggedIn == true) { 
					if(subscribed == false) { 
						$.ajax({
							url: "/get/subscribe?n=<?php echo htmlspecialchars($_video['author']); ?>",
							type: 'GET',
							success: function(res) {
								alerts++;
								$("#subscribe-button").addClass("subscribed");
								addAlert("editsuccess_" + alerts, "Successfully added <?php echo htmlspecialchars($_video['author']); ?> to your subscriptions!");
								showAlert("#editsuccess_" + alerts);
								console.log("DEBUG: " + res);
								subscribed = true;
							}
						});
					} else {
						$.ajax({
							url: "/get/unsubscribe?n=<?php echo htmlspecialchars($_video['author']); ?>",
							type: 'GET',
							success: function(res) {
								alerts++;
								$("#subscribe-button").removeClass("subscribed");
								addAlert("editsuccess_" + alerts, "Successfully removed <?php echo htmlspecialchars($_video['author']); ?> from your subscriptions!");
								showAlert("#editsuccess_" + alerts);
								console.log("DEBUG: " + res);
								subscribed = false;
							}
						});
					}
				} else {
					alerts++;
					addAlert("editsuccess_" + alerts, "You need to log in to add subscriptions!");
					showAlert("#editsuccess_" + alerts);
				}
			}

			function like_video() {
				if(loggedIn == true) { 
					if(liked == false) { 
						$.ajax({
							url: "/get/like_video?v=<?php echo htmlspecialchars($_video['rid']); ?>",
							type: 'GET',
							success: function(res) {
								alerts++;
								$("#watch-like").addClass("liked");
								$("#watch-unlike").removeClass("unliked");
								showAlert("#editsuccess_" + alerts);
								console.log("DEBUG: " + res);
								liked = true;
							}
						});
					} else {
						$.ajax({
							url: "/get/dislike_video?v=<?php echo htmlspecialchars($_video['rid']); ?>",
							type: 'GET',
							success: function(res) {
								alerts++;
								$("#watch-unlike").addClass("unliked");
								$("#watch-like").removeClass("liked");
								showAlert("#editsuccess_" + alerts);
								console.log("DEBUG: " + res);
								liked = false;
							}
						});
					}
				} else {
					alerts++;
					addAlert("editsuccess_" + alerts, "You need to log in to like/dislike videos!");
					showAlert("#editsuccess_" + alerts);
				}
			}
		</script>
	</body>
</html>