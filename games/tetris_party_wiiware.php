<?php
$includepath = '../_inc';
$dataUrl = "http://localhost/data";

$title = "Tetris® Party";
$gameFeatureImage = $dataUrl."/images/games/feature_TP_WW.jpg"; // feature_[game shortcode]_[platform]
$game_movie = 'https://www.youtube.com/embed/ckqltSHdKUU?fs=1&amp;hl=en_US&amp;showinfo=0&amp;rel=0&amp;version=3'; // must have all of these queries
$play_link = 'http://www.tetrisparty.com';
$game_slideshow = [
	'screen_TP_WW_001.jpg',
	'screen_TP_WW_002.jpg',
	'screen_TP_WW_003.jpg',
	'screen_TP_WW_004.jpg',
	'screen_TP_WW_005.jpg',
	'screen_TP_WW_006.jpg',
	'screen_TP_WW_007.jpg',
	'screen_TP_WW_008.jpg',
	'screen_TP_WW_009.jpg',
	'screen_TP_WW_010.jpg',
	'screen_TP_WW_011.jpg',
	'screen_TP_WW_012.jpg',
	'screen_TP_WW_013.jpg',
	'screen_TP_WW_014.jpg',
	'screen_TP_WW_015.jpg',
	'screen_TP_WW_016.jpg',
	'screen_TP_WW_017.jpg',
	'screen_TP_WW_018.jpg',
	'screen_TP_WW_019.jpg',
];

// Max 3
$recommendedGames = [
	array('id' => 'tetris_axis_3ds', 'name' => 'Tetris® Axis', 'image' => $dataUrl.'/images/game_TA_3DS.png'),
	array('id' => 'home_team_baseball_facebook', 'name' => 'Home Team Baseball', 'image' => $dataUrl.'/images/game_HTB_FB.png'),
	array('id' => 'feevo_ipad', 'name' => 'Feevo™', 'image' => $dataUrl.'/images/game_FV_IP.png'),
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
					<b>Tetris Party</b> brings brand&ndash;new ways to enjoy Tetris with 18 exciting modes, online battles, and multiplayer fun for groups of friends and family. And because it&rsquo;s on the Wii&trade;, even the way you play Tetris is brand new&mdash;you can use the Wii Remote, Wii Balance Board&trade;, or Classic Controller to experience the fun.
				</p>
				<p>
					Take control of the game with the Wii Remote or Classic Controller. Easy&ndash;to&ndash;use controls make playing Tetris a snap for all players. Use the point&ndash;and&ndash;shoot features of the Wii Remote to utilize the special items in the multi&ndash;player modes.
				</p>
				<p>
					New modes such as Co&ndash;op Tetris, Duel Spaces, Field Climber, Stage Racer, and Shadow are just a few of the many fun ways to enjoy one of the most popular video games of all time. Each mode is further customizable to deliver the perfect Tetris experience.
				</p>
				<p>
					Tetris Party is available via WiiWare&trade; for 1,200 Nintendo Points. <a href="http://www.tetrisparty.com/" target="_blank">Learn More.</a>
				</p>
				<p>
					<hr noshade size="1"><br>
				</p>
				<p>
					The Buzz:<br>
					<ul>
						<li>"<i>9.0/10 - If you&rsquo;re a fan of traditional Tetris, this is the best console version we&rsquo;ve seen in years. It&rsquo;s a must-own WiiWare game.</i>"<br> - <a href="http://wii.ign.com/articles/921/921717p1.html" target="_blank">IGN.com</a></li><br>
						<li>"<i>...if you dream of falling blocks, the the huge number of gameplay modes and fantastically addictive online play makes this an essential purchase.</i>" - <a href="http://www.officialnintendomagazine.co.uk/6212/reviews/tetris-party-review/" target="_blank">Official Nintendo Magazine UK</a></li><br>
						<li>"<i>Overall, Tetris Party is very impressive with all of its modes and things to do.</i>" - GamePro Magazine</li><br>
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