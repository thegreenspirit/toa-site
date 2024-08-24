<?php
$includepath = '../_inc';
$dataUrl = "http://localhost/data";

$title = "Home Team Baseball";
$gameFeatureImage = $dataUrl."/images/games/feature_HTB_FB.jpg"; // feature_[game shortcode]_[platform]
$game_movie = 'https://www.youtube.com/embed/CWqaho6lKpg?fs=1&amp;hl=en_US&amp;showinfo=0&amp;rel=0&amp;version=3'; // must have all of these queries
$play_link = 'http://apps.facebook.com/hometeambaseball/?kt_type=partner&amp;kt_st1=cross_promotion_ad&amp;kt_st2=tetrisonline_com_to_htb&amp;kt_st3=game_lineup';
$game_slideshow = [
	'screen_HTB_FB_001.jpg',
	'screen_HTB_FB_002.jpg',
	'screen_HTB_FB_003.jpg',
	'screen_HTB_FB_004.jpg',
];

// Max 3
$recommendedGames = [
	array('id' => 'tetris_party_dsi', 'name' => 'Tetris® Party Live', 'image' => $dataUrl.'/images/game_TPL_DW.png'),
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
					Root, root, root for your home team in the baseball game for the entire family. Licensed by the Major League Baseball Players Association, <b>Home Team Baseball</b> lets you cheer on your favorite players and help your team reach the top of the standings.
				</p>
				<p>
					A game anybody can play, Home Team Baseball takes you to the ballpark where you can influence your players&rsquo; performance just by being a fan. But don&rsquo;t just cheer on your own. Invite your friends into the stadium and create your own cheering section. The more noise the crowd makes, the more support your players will feel.
				</p>
				<p>
					Bring your friends and get ready for the clutch hits and big strikeouts!
				</p>
				<p>
					Home Team Baseball is now available on Facebook. <a href="<?php echo $play_link ?>" target="_blank">Give it a try!</a>
				</p>
				<p>
					<font size="1">&copy;MLBPA -- Official Licensee, Major League Baseball Players Association. Visit <a href="http://www.mlbplayers.com/" target="_blank">www.MLBPLAYERS.com</a>, the Players Choice on the web. Photos courtesy of Icon Sports Media.</font><br><br>
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