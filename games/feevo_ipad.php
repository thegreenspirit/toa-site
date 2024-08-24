<?php
$includepath = '../_inc';
$dataUrl = "http://localhost/data";

$title = "Feevo™";
$gameFeatureImage = $dataUrl."/images/games/feature_FV_IP.jpg"; // feature_[game shortcode]_[platform]
$game_movie = 'https://www.youtube.com/embed/h-kwOMb4TB8?fs=1&amp;hl=en_US&amp;showinfo=0&amp;rel=0&amp;version=3'; // must have all of these queries
$play_link = 'http://ipad.feevogame.com/';
$game_slideshow = [
	'screen_FV_IP_001.jpg',
	'screen_FV_IP_002.jpg',
	'screen_FV_IP_003.jpg',
	'screen_FV_IP_004.jpg',
	'screen_FV_IP_005.jpg',
	'screen_FV_IP_006.jpg',
	'screen_FV_IP_007.jpg',
	'screen_FV_IP_008.jpg',
	'screen_FV_IP_009.jpg',
	'screen_FV_IP_010.jpg',
	'screen_FV_IP_011.jpg',
	'screen_FV_IP_012.jpg',
	'screen_FV_IP_013.jpg',
	'screen_FV_IP_014.jpg',
	'screen_FV_IP_015.jpg',
	'screen_FV_IP_016.jpg',
	'screen_FV_IP_017.jpg',
	'screen_FV_IP_018.jpg',
];

// Max 3
$recommendedGames = [
	array('id' => 'tetris_friends', 'name' => 'Tetris® Friends Online Games', 'image' => $dataUrl.'/images/game_TF_OW.png'),
	array('id' => 'tetris_splash_xbla', 'name' => 'Tetris® Splash', 'image' => $dataUrl.'/images/game_TS_XL.png'),
	array('id' => 'tetris_battle_facebook', 'name' => 'Tetris® Battle', 'image' => $dataUrl.'/images/game_TB_FB.png'),
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
					<b>Feevo HD</b> is a super&ndash;fun puzzle game made by <a href="http://www.tetrisonline.com/">Tetris Online</a>, the creators of the smash hit,
					<a href="http://apps.facebook.com/tetris_battle/?kt_type=partner&amp;kt_st1=tonline">Tetris&reg; Battle</a>, on Facebook! Feevo HD challenges you to clear pieces on the game
					board by matching four or more similar shapes together. Enjoy two unique game modes and other exciting features. Lots of great updates
					are planned for the future, so you won&rsquo;t be disappointed. 
				</p>
				<center><a href="http://itunes.apple.com/app/feevo-hd/id407806835?mt=8"><img border="0" alt="" src="/data/images/games/buy_FV_IPAD.png"></a></center>
				<br/>
				<p>
					<hr noshade size="1"><br>
				</p>
				<p>
					<b>Game Features:</b><br>
					<ul>
						<li>Two action&ndash;packed game modes</li>
						<li>Exercise your brain with Fever mode (as seen on <a href="http://apps.facebook.com/feevo-game/?kt_type=partner&amp;kt_st1=cross_promotion_ad&amp;kt_st2=tetrisonline_com_to_feevo&amp;kt_st3=game_lineup">Facebook</a>)</li>
						<li>Test your speed and reflexes in the all&ndash;new Blaze mode</li>
						<li>Connect to Facebook andor the Game Center to compete with your friends</li>
						<li>Progress through ranks to unlock Power&ndash;Ups and other features</li>
						<li>Unique Power&ndash;Ups available for each game mode</li>
						<li>Receive 250,000 Feevo Coins ($3 Value!) as an added BONUS</li>
					</ul>
				</p>
				<p>
					<hr noshade size="1"><br>
				</p>
				<p>
					<b>The Buzz:</b><br>
					<ul>
						<li>"<i>Love this game, and it&rsquo;s amazing.</i>" - Beth B.</li><br/>
						<li>"<i>Better than that other game that rhymes with Me Fooled!"</i>" - Courtney C.</li><br/>
						<li>"<i>Brilliant &amp; Addictive!!</i>" - Sue S.</li><br/>
						<li>"<i>More fun than the law should allow.</i>" - Carole M.</li><br/>
						<li>"<i>Wow! It&rsquo;s a game you just can&rsquo;t stop playing!</i>" - Migel S.</li><br/>
						<li>"<i>I now have a reason to wake up in the morning.</i>" - Frank P.</li><br/>
					</ul>
				</p>
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