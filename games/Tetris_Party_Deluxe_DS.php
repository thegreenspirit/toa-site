<?php
$includepath = '../_inc';
$dataUrl = "http://localhost/data";

$title = "Tetris® Party Deluxe DS";
$gameFeatureImage = $dataUrl."/images/games/feature_TPD_DS.jpg"; // feature_[game shortcode]_[platform]
$game_movie = null; // must have all of these queries
$play_link = 'http://www.tetrispartydeluxe.com/';
$game_slideshow = [
	'screen_TPD_DS_001.jpg',
	'screen_TPD_DS_002.jpg',
	'screen_TPD_DS_003.jpg',
	'screen_TPD_DS_004.jpg',
	'screen_TPD_DS_005.jpg',
	'screen_TPD_DS_006.jpg',
	'screen_TPD_DS_007.jpg',
	'screen_TPD_DS_008.jpg',
	'screen_TPD_DS_009.jpg',
	'screen_TPD_DS_010.jpg',
	'screen_TPD_DS_011.jpg',
	'screen_TPD_DS_012.jpg',
	'screen_TPD_DS_013.jpg',
	'screen_TPD_DS_014.jpg',
	'screen_TPD_DS_015.jpg',
	'screen_TPD_DS_016.jpg',
	'screen_TPD_DS_017.jpg',
	'screen_TPD_DS_018.jpg',
	'screen_TPD_DS_019.jpg',
];

// Max 3
$recommendedGames = [
	array('id' => 'tetris_party_wii', 'name' => 'Tetris® Party Deluxe', 'image' => $dataUrl.'/images/game_TPD_WI.png'),
	array('id' => 'tetris_battle_facebook', 'name' => 'Tetris® Battle', 'image' => $dataUrl.'/images/game_TB_FB.png'),
	array('id' => 'lost_trails_facebook', 'name' => 'Lost Trails', 'image' => $dataUrl.'/images/game_LT_FB.png'),
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
					<b>Tetris Party Deluxe</b> builds on the previously released Tetris Party for WiiWare&trade; by adding new modes and features to enrich the overall game play experience. With more than 20 exciting modes, online battles, and multiplayer fun for groups of friends and family, the Tetris Party Deluxe game is a must&ndash;have for Tetris and puzzle fans.
				</p>
				<p>
					Tetris Party Deluxe is available for both Wii&trade; and Nintendo DS&trade;.<br><br>
				</p>
				<p>
					<hr noshade size="1"><br>
				</p>
				<p>
					The Buzz:<br>
					<ul>
						<li>"<i>9.4/10 - The bottom-line is that if you like traditional Tetris, then you'll like, maybe even love, Tetris Party Deluxe.</i>" - <a href="http://www.mygamer.com/index.php?page=gameportal&amp;mode=reviews&amp;id=555675" target="_blank">MyGamer.com</a></li><br>
						<li>"<i>Tetris Party Deluxe certainly offers a variety of innovations that keep the game feeling fresh and make this a worthy addition to the Tetris library on the DS.</i>" - <a href="http://www.gamespot.com/ds/puzzle/tetrispartydeluxe/review.html?tag=summary%3Bread-review" target="_blank">GameSpot.com</a></li><br>
						<li>"<i>This is definitely one to enjoy with a few friends.</i>" - Nintendo Power Magazine [July 2010, p.88]</li><br>
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