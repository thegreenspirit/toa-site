<?php
$includepath = '../_inc';
$dataUrl = "http://localhost/data";

$title = "Tetris® Party Deluxe";
$gameFeatureImage = $dataUrl."/images/games/feature_TPD_WI.jpg"; // feature_[game shortcode]_[platform]
$game_movie = 'https://www.youtube.com/embed/ajfSnNr03A0?fs=1&amp;hl=en_US&amp;showinfo=0&amp;rel=0&amp;version=3'; // must have all of these queries
$play_link = 'http://www.tetrispartydeluxe.com';
$game_slideshow = [
	'screen_TPD_WI_001.jpg',
	'screen_TPD_WI_002.jpg',
	'screen_TPD_WI_003.jpg',
	'screen_TPD_WI_004.jpg',
	'screen_TPD_WI_005.jpg',
	'screen_TPD_WI_006.jpg',
	'screen_TPD_WI_007.jpg',
	'screen_TPD_WI_008.jpg',
	'screen_TPD_WI_009.jpg',
	'screen_TPD_WI_010.jpg',
	'screen_TPD_WI_011.jpg',
	'screen_TPD_WI_012.jpg',
	'screen_TPD_WI_013.jpg',
	'screen_TPD_WI_014.jpg',
	'screen_TPD_WI_015.jpg',
	'screen_TPD_WI_016.jpg',
	'screen_TPD_WI_017.jpg',
	'screen_TPD_WI_018.jpg',
];

// Max 3
$recommendedGames = [
	array('id' => 'tetris_splash_xbla', 'name' => 'Tetris® Splash', 'image' => $dataUrl.'/images/game_TS_XL.png'),
	array('id' => 'Tetris_Party_Deluxe_DS', 'name' => 'Tetris® Party Deluxe DS', 'image' => $dataUrl.'/images/game_TPD_DS.png'),
	array('id' => 'tetris_axis_3ds', 'name' => 'Tetris® Axis', 'image' => $dataUrl.'/images/game_TA_3DS.png'),
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
					Tetris Party Deluxe is available for both Wii&trade; and Nintendo DS&trade;.
				</p>
				<p>
					<hr noshade size="1"><br>
				</p>
				<p>
					The Buzz:<br>
					<ul>
						<li>"<i>Gameplay 8.5/10 - Pretty much everything you could want (and probably a few modes you didn't even realize you wanted) in a Tetris game.</i>" - <a href="http://wii.ign.com/articles/110/1105705p1.html" target="_blank">IGN.com</a></li><br>
						<li>"<i>Tetris Party Deluxe delivers the classic puzzle solving gameplay that everyone loves but takes it to that next level by throwing in a ton of gameplay options and new ways to play.</i>" - <a href="http://www.mygamer.com/index.php?page=gameportal&amp;mode=reviews&amp;id=555674" target="_blank">MyGamer.com</a></li><br>
						<li>"<i>Tetris Party Deluxe certainly offers a variety of innovations that keep the game feeling fresh and make this the definitive version of Tetris on the Wii.</i>" - <a href="http://www.gamespot.com/wii/puzzle/tetrispartydeluxe/review.html" target="_blank">GameSpot.com</a></li><br>
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