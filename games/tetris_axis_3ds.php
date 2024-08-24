<?php
$includepath = '../_inc';
$dataUrl = "http://localhost/data";

$title = "Tetris® Axis";
$gameFeatureImage = $dataUrl."/images/games/feature_TA_3DS.jpg"; // feature_[game shortcode]_[platform]
$game_movie = null; // must have all of these queries
$play_link = '';
$game_slideshow = [
	'screen_TA_3DS_001.jpg',
	'screen_TA_3DS_002.jpg',
	'screen_TA_3DS_003.jpg',
	'screen_TA_3DS_004.jpg',
	'screen_TA_3DS_005.jpg',
	'screen_TA_3DS_006.jpg',
	'screen_TA_3DS_007.jpg',
	'screen_TA_3DS_008.jpg',
	'screen_TA_3DS_009.jpg',
];

// Max 3
$recommendedGames = [
	array('id' => 'tetris_party_wiiware', 'name' => 'Tetris® Party', 'image' => $dataUrl.'/images/game_TP_WW.png'),
	array('id' => 'monster_fusion_facebook', 'name' => 'Monster Fusion', 'image' => $dataUrl.'/images/game_MFU_FB.png'),
	array('id' => 'feevo_facebook', 'name' => 'Feevo™', 'image' => $dataUrl.'/images/game_FV_FB.png'),
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
					You've never seen the Tetris® game like this! Experience the world-famous puzzle gaming sensation loved by hundreds of millions around the globe—now in 3D, and loaded with fun and addicting new ways to play.
				</p>
				<p>
					<ul>
						<li><b>Discover a whole new perspective of the game with 20+ game modes</b></li>
						<li><b>Local &amp; online** multiplayer modes let up to 8 players go head-to-head</b></li>
						<li><b>See Tetris games unfold in the real world with never-before-seen AR modes</b></li><br>
					</ul>
				</p>
				<br>
				<p>
					Find out more at the official Tetris Axis website at <a href="http://tetrisaxis.nintendo.com/" target="_blank">http://tetrisaxis.nintendo.com</a>.<br><br>
				</p>
			
							
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