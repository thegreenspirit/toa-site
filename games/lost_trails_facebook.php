<?php
$includepath = '../_inc';
$dataUrl = "http://localhost/data";

$title = "Lost Trails";
$gameFeatureImage = $dataUrl."/images/games/feature_LT_FB.jpg"; // feature_[game shortcode]_[platform]
$game_movie = 'https://www.youtube.com/embed/bBSAV3slzg0?fs=1&amp;hl=en_US&amp;showinfo=0&amp;rel=0&amp;version=3'; // must have all of these queries
$play_link = 'http://apps.facebook.com/losttrails/';
$game_slideshow = [
	'screen_LT_FB_001.jpg',
	'screen_LT_FB_002.jpg',
	'screen_LT_FB_003.jpg',
	'screen_LT_FB_004.jpg',
];

// Max 3
$recommendedGames = [
	array('id' => 'tetris_battle_facebook', 'name' => 'Tetris® Battle', 'image' => $dataUrl.'/images/game_TB_FB.png'),
	array('id' => 'monster_fantasy_facebook', 'name' => 'Monster Fantasy', 'image' => $dataUrl.'/images/game_MF_FB.png'),
	array('id' => 'monster_fusion_facebook', 'name' => 'Monster Fusion', 'image' => $dataUrl.'/images/game_MFU_FB.png'),
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
					<b>Lost Trails</b> is lost. Truly lost. (the original page is lost)
				</p>
				<p>
					Lost Trails is available on Facebook. <a href="<?php echo $play_link ?>" target="_blank">It's lost.</a><br><br>
				</p>
				<p>
					<hr noshade size="1"><br>
				</p>
				<p>
					The Buzz:<br>
					<ul>
						<li>"<i>What even is this?</i>" - a random person</li><br>
						<li>"<i>I wanted to play this again...</i>" - a random person</li><br>
						<li>"<i>WHY IS THIS LOST... GRR...</i>" - a random person</li><br>
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