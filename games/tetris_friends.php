<?php
$includepath = '../_inc';
$dataUrl = "http://localhost/data";

$title = "Tetris® Friends Online Games";
$gameFeatureImage = $dataUrl."/images/games/feature_TF_OW.jpg"; // feature_[game shortcode]_[platform]
$game_movie = 'https://www.youtube.com/embed/hgYpAQW_RNk?fs=1&amp;hl=en_US&amp;showinfo=0&amp;rel=0&amp;version=3'; // must have all of these queries
$play_link = 'http://www.tetrisfriends.com/';
$game_slideshow = [
	'screen_TF_OW_001.jpg',
	'screen_TF_OW_002.jpg',
	'screen_TF_OW_003.jpg',
	'screen_TF_OW_004.jpg',
	'screen_TF_OW_005.jpg',
	'screen_TF_OW_006.jpg',
];

// Max 3
$recommendedGames = [
	array('id' => 'tetris_battle_facebook', 'name' => 'Tetris® Battle', 'image' => $dataUrl.'/images/game_TB_FB.png'),
	array('id' => 'tetris_party_dsi', 'name' => 'Tetris® Party Live', 'image' => $dataUrl.'/images/game_TPL_DW.png'),
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
					<b>Tetris Friends Online Games</b> offers a wide range of browser&ndash;based Tetris game modes. Single&ndash;player game modes include: Marathon, Sprint, Ultra, Survival, 1989, and N&ndash;Blox. Multiplayer game modes include: Battle 2P, Battle 6P, Sprint 5P, and the highly unique Rally 8P.  You can also play real&ndash;time Tetris against up to 5 other players in Tetris Arena (registration required). Participate in weekly Missions, win prizes, and so much more! 
				</p>
				<p>
					<hr noshade size="1"><br>
				</p>
				<p>
					The Buzz:<br>
					<ul>
						<li>"<i>One of the 100 best PC games of all time</i>" - <a href="http://www.pcgamer.com/2011/02/16/the-100-best-pc-games-of-all-time/" target="_blank">PC Gamer</a></li><br>
						<li>"<i>You may very well think you&rsquo;ve played enough Tetris. But have you played it with friends?</i>" - <a href="http://www.kotaku.com.au/2009/08/lunchtimewaster-tetris-friends/" target="_blank">Kotaku.com</a></li><br>
						<li>"<i>Designed as a massive collection of the best free Tetris games available, this web game collection gives gamers a huge number of ways of playing this classic title.</i>" - <a href="http://pc.ign.com/objects/022/022323.html" target="_blank">IGN.com</a></li><br>
					</ul>
				<p>
					<hr noshade size="1"><br>
				</p>
			
							
					<a class="margincenter button_play_now" href="<?php echo $play_link ?>">Play <?php echo htmlentities($title) ?></a><br/>
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