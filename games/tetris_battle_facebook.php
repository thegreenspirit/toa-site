<?php
$includepath = '../_inc';
$dataUrl = "http://localhost/data";

$title = "Tetris® Battle";
$gameFeatureImage = $dataUrl."/images/games/feature_TB_FB.jpg"; // feature_[game shortcode]_[platform]
$game_movie = 'https://www.youtube.com/embed/kJYg79hSDps?fs=1&amp;hl=en_US&amp;showinfo=0&amp;rel=0&amp;version=3'; // must have all of these queries
$play_link = 'http://apps.facebook.com/tetris_battle/?kt_type=partner&amp;kt_st1=tonline';
$game_slideshow = [
	'screen_TB_FB_001.jpg',
	'screen_TB_FB_002.jpg',
	'screen_TB_FB_003.jpg',
	'screen_TB_FB_004.jpg',
];

// Max 3
$recommendedGames = [
	array('id' => 'tetris_party_wii', 'name' => 'Tetris® Party Deluxe', 'image' => $dataUrl.'/images/game_TPD_WI.png'),
	array('id' => 'tetris_party_wiiware', 'name' => 'Tetris® Party', 'image' => $dataUrl.'/images/game_TP_WW.png'),
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
					<b>Tetris Battle</b> features multiplayer Tetris game modes where you can compete with or against your friends. Current game modes include Battle 2P, Battle 6P, and Sprint 4P.
				</p>
				<p>
					Enjoy multiplayer action with other players 24/7, or if you&rsquo;d prefer to play with friends, simply schedule a time to meet online and play head&ndash;to&ndash;head in real time in Battle 2P or Battle 6P for larger match&ndash;ups.
				</p>
				<p>
					Tetris Battle is available on Facebook. <a href="<?php echo $play_link ?>" target="_blank">Give it a try!</a><br><br>
				</p>
				<p>
					<hr noshade size="1"><br>
				</p>
				<p>
					The Buzz:<br>
					<ul>
						<li>"<i>Tetris Battle has a seat right up with Bejeweled Blitz and Zuma Blitz as one of the most engaging, entertaining Facebook games you&rsquo;ll play</i>" - Games.com</li><br>
						<li>"<i>The Block Battle Of Your Life!!!</i>" - Tyler H.</li><br>
						<li>"<i>An absolute blast, you will be addicted to Tetris all over again.</i>" - Brady D.</li><br>
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