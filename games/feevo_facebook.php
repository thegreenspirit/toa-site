<?php
$includepath = '../_inc';
$dataUrl = "http://localhost/data";

$title = "Feevo™";
$gameFeatureImage = $dataUrl."/images/games/feature_FV_FB.jpg"; // feature_[game shortcode]_[platform]
$game_movie = 'https://www.youtube.com/embed/1B1SHw6f2Qs?fs=1&amp;hl=en_US&amp;showinfo=0&amp;rel=0&amp;version=3'; // must have all of these queries
$play_link = 'http://apps.facebook.com/feevo-game/?kt_type=partner&amp;kt_st1=cross_promotion_ad&amp;kt_st2=tetrisonline_com_to_feevo&amp;kt_st3=game_lineup';
$game_slideshow = [
	'screen_FV_FB_001.jpg',
	'screen_FV_FB_002.jpg',
	'screen_FV_FB_003.jpg',
	'screen_FV_FB_004.jpg',
];

// Max 3
$recommendedGames = [
	array('id' => 'blaze_facebook', 'name' => 'Feevo™ Blaze', 'image' => $dataUrl.'/images/game_BL_FB.png'),
	array('id' => 'tetris_party_wii', 'name' => 'Tetris® Party Deluxe', 'image' => $dataUrl.'/images/game_TPD_WI.png'),
	array('id' => 'tetris_party_wiiware', 'name' => 'Tetris® Party', 'image' => $dataUrl.'/images/game_TP_WW.png'),
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
					<b>Feevo</b> is an all-new puzzle game that challenges you to clear pieces on the game board by matching four or more similar shapes together. Clear many pieces at one time to enter Fever mode, where you can score BIG points! Utilize Power Ups to give you an added advantage for achieving HUGE scores to impress your friends.
				</p>
				<p>
					Speaking of friends, Feevo also offers a weekly collaborative scoring system that encourages you and your friends to work together for a combined score large enough to open treasure chests to earn bonus Feevo Coins.
				</p>
				<p>
					Feevo is available on Facebook. <a href="<?php echo $play_link ?>" target="_blank">Give it a try!</a><br><br>
				</p>
				<p>
					<hr noshade size="1"><br>
				</p>
				<p>
					The Buzz:<br>
					<ul>
						<li>"<i>The most fun I have had with a Facebook game.</i>" - Michael A.</li><br>
						<li>"<i>Say goodbye to Bejeweled Blitz!</i>" - Fiona E.</li><br>
						<li>"<i>More fun than the law should allow.</i>" - Carole M.</li><br>
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