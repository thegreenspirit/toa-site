<?php
$includepath = '../_inc';
$dataUrl = "http://localhost/data";

$title = "Tetris® Party Live";
$gameFeatureImage = $dataUrl."/images/games/feature_TPL_DW.jpg"; // feature_[game shortcode]_[platform]
$game_movie = 'https://www.youtube.com/embed/Iz8cSYQZQC4?fs=1&amp;hl=en_US&amp;showinfo=0&amp;rel=0&amp;version=3'; // must have all of these queries
$play_link = 'http://www.tetrispartylive.com';
$game_slideshow = [
	'screen_TPL_DW_001.jpg',
	'screen_TPL_DW_002.jpg',
	'screen_TPL_DW_003.jpg',
	'screen_TPL_DW_004.jpg',
	'screen_TPL_DW_005.jpg',
	'screen_TPL_DW_006.jpg',
];

// Max 3
$recommendedGames = [
	array('id' => 'tetris_friends_facebook', 'name' => 'Tetris® Friends', 'image' => $dataUrl.'/images/game_TF_FB.png'),
	array('id' => 'tetris_axis_3ds', 'name' => 'Tetris® Axis', 'image' => $dataUrl.'/images/game_TA_3DS.png'),
	array('id' => 'tetris_splash_xbla', 'name' => 'Tetris® Splash', 'image' => $dataUrl.'/images/game_TS_XL.png'),
];
?>
	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml" xml:lang="en" lang="en">
	<head>
		<?php include $includepath . '/_headMeta.php' ?>
		<?php include $includepath . '/_head.php' ?>
	</head>

	<body>
		<div id="wrapper">
			<div id="container">
				<?php include $includepath . '/_header.php' ?>
<div class="clear"></div>
				<h1 class="tetris_game_header"><?php echo htmlentities($title) ?></h1>
				
				<div id="game_banner" style="background-image: url(<?php echo $gameFeatureImage ?>)"></div>
				
				<div id="tetris_main_content" class="margintop_20px">
					
			
				<p>
					<b>Tetris Party Live</b> features several exciting game modes from the popular <a href="http://www.tetrisparty.com/" target="_blank">Tetris Party</a> series. Enjoy the highly popular Marathon and Computer Battle game modes, or take the Tetris fun online via Nintendo&reg; Wi&ndash;Fi Connection, where you can play multiplayer Tetris against up to three other opponents at a time in two separate Battle Modes, or strategize to claim the most space against a friend in Duel Spaces.
				</p>
				<p>
					As an added bonus, the universe of available players to compete against online also includes players from Tetris Party Deluxe for Nintendo DS&trade;, so there&rsquo;s always someone to play with 24/7.
				</p>
				<p>
					Tetris Party Live is available via the Nintendo DSiWare&trade; download service for 500 Nintendo Points.
				</p>
				<p>
					<hr noshade size="1"><br>
				</p>
				<p>
					The Buzz:<br>
					<ul>
						<li>"<i>8/10 - The ability to voice chat while playing is a nice bonus and the rather large array of game options allows you to customize the game to your exact liking, something finicky players will find appealing.</i>" - <a href="http://dsiware.nintendolife.com/reviews/2010/11/tetris_party_live_dsiware" target="_blank">Nintendo Life</a></li><br>
						<li>"<i>Gameplay 9/10 - Doesn't mess with a good thing, items make the game more interesting with an added surprise element, controls work great.</i>" - <a href="http://www.wiiloveit.com/games/tetris-party-live---dsiware-review" target="_blank">WiiLoveIt.com</a></li><br>
						<li>"<i> For just 500 Nintendo points ... this particular iteration of the game is easy to recommend.</i>" - <a href="http://www.mygamer.com/index.php?page=gameportal&amp;mode=reviews&amp;id=555995" target="_blank">MyGamer.com</a></li><br>


					</ul>
				<p>
					<hr noshade size="1"><br>
				</p>
			
							
					<p class="textcenter"><b>Official Website</b>: <a href="<?php echo $play_link ?>"><?php echo $play_link ?></a></p>
				</div>
				
				<div id="tetris_side_content" class="marginleft_10px margintop_10px">
					<?php if ($game_movie != null) echo '<div id="game_movie"></div>'; ?>					
					<div id="game_images">
						<div id="game_slideshow">
							<?php
							foreach ($game_slideshow as $slideImage) {
								echo '<img src="'.$dataUrl.'/images/games/'.$slideImage.'" alt=""/>';
							}
							?>
						</div>
						<div id="game_slideshow_nav">
							<a class="floatleft button_arrow button_arrow_left_arrow  prevPage"></a>
							<div class="floatleft game_slideshow_scrollable"><div class="items"></div></div>
							<a class="floatright button_arrow button_arrow_right_arrow  nextPage"></a>
						</div>
					</div>
				</div>
				
				<div class="clear"></div>
				
				<br/>
<h1 class="tetris_game_header">Games you might enjoy</h1>
<table width="100%">
	<tr>
	<?php
	foreach ($recommendedGames as $game) {
		echo '<td>
			<a class="button_game" style="background-image: url('.$game['image'].');" href="/games/'.$game['id'].'.php">'.htmlentities($game['name']).'</a>
		</td>';
	}
	?>
	</tr>
</table>				
				<?php include $includepath . '/_footer.php' ?>
			</div>
		</div>
		
		<script type="text/javascript">
			$(document).ready(function() {
				startSlideshow();

				<?php if ($game_movie != null) echo 'embedMovie(\''.$game_movie.'\');'; ?>
			});
		</script>
	</body>
</html>