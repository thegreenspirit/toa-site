<?php
$includepath = '../_inc';
$dataUrl = "http://localhost/data";

$title = "Monster Fusion";
$gameFeatureImage = $dataUrl."/images/games/feature_MFU_FB.jpg"; // feature_[game shortcode]_[platform]
$game_movie = 'https://www.youtube.com/embed/AWRHTvOrFIY?fs=1&amp;hl=en_US&amp;showinfo=0&amp;rel=0&amp;version=3'; // must have all of these queries
$play_link = 'http://apps.facebook.com/monsterfusion/?kt_type=partner&amp;kt_st1=cross_promotion_ad&amp;kt_st2=tetrisonline_com_to_feevo&amp;kt_st3=game_lineup';
$game_slideshow = [
	'screen_MFU_FB_001.jpg',
	'screen_MFU_FB_002.jpg',
	'screen_MFU_FB_003.jpg',
	'screen_MFU_FB_004.jpg',
	'screen_MFU_FB_005.jpg',
	'screen_MFU_FB_006.jpg',
	'screen_MFU_FB_007.jpg',
	'screen_MFU_FB_008.jpg',
	'screen_MFU_FB_009.jpg',
	'screen_MFU_FB_010.jpg',
	'screen_MFU_FB_011.jpg',
	'screen_MFU_FB_012.jpg',
	'screen_MFU_FB_013.jpg',
	'screen_MFU_FB_014.jpg',
	'screen_MFU_FB_015.jpg',
	'screen_MFU_FB_016.jpg',
	'screen_MFU_FB_017.jpg',
	'screen_MFU_FB_018.jpg',
];

// Max 3
$recommendedGames = [
	array('id' => 'feevo_facebook', 'name' => 'Feevo™', 'image' => $dataUrl.'/images/game_FV_FB.png'),
	array('id' => 'home_team_baseball_facebook', 'name' => 'Home Team Baseball', 'image' => $dataUrl.'/images/game_HTB_FB.png'),
	array('id' => 'tetris_party_wii', 'name' => 'Tetris® Party Deluxe', 'image' => $dataUrl.'/images/game_TPD_WI.png'),
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
					Collect and raise monsters within your very own customizable ranch. Use the Monster Fusion Machine to fuse monsters together to make new and more powerful versions, and then battle them against friends and foes.
				</p>
				<p>
					Monster Fusion is now available on Facebook. <a href="<?php echo $play_link ?>" target="_blank">Join the adventure today!</a><br><br>
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