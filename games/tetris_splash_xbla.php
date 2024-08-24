<?php
$includepath = '../_inc';
$dataUrl = "http://localhost/data";

$title = "Tetris® Splash";
$gameFeatureImage = $dataUrl."/images/games/feature_TS_XL.jpg"; // feature_[game shortcode]_[platform]
$game_movie = 'https://www.youtube.com/embed/cF1a6H06Nek?fs=1&amp;hl=en_US&amp;showinfo=0&amp;rel=0&amp;version=3'; // must have all of these queries
$play_link = 'http://tinyurl.com/tetris-splash-xbla';
$game_slideshow = [
	'screen_TS_XL_001.jpg',
	'screen_TS_XL_002.jpg',
	'screen_TS_XL_003.jpg',
	'screen_TS_XL_004.jpg',
	'screen_TS_XL_005.jpg',
	'screen_TS_XL_006.jpg',
	'screen_TS_XL_007.jpg',
];

// Max 3
$recommendedGames = [
	array('id' => 'Tetris_Party_Deluxe_DS', 'name' => 'Tetris® Party Deluxe DS', 'image' => $dataUrl.'/images/game_TPD_DS.png'),
	array('id' => 'tetris_battle_facebook', 'name' => 'Tetris® Battle', 'image' => $dataUrl.'/images/game_TB_FB.png'),
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
					
			
				<h2 id="paragraph"></h2>
				<p>
					<b>Tetris Splash</b> for Xbox 360 spotlights three modes, enhanced graphics, and beautiful aquatic scenery. Play against up to four players locally, or take the action online with up to six players at a time. 
				</p>
				<p>
					Tetris Splash is available on Xbox LIVE&trade; Arcade for 1,000 Microsoft Points. <a href="http://marketplace.xbox.com/en-US/Product/Tetris-Splash/66acd000-77fe-1000-9115-d8025841083b?cid=search" target="_blank">Learn More.</a>
				</p>
				<p>
					<hr noshade size="1"><br>
				</p>
				<p>
					The Buzz:<br>
					<ul>
						<li>"<i>Highly recommended purchase that should be in everyone&rsquo;s arcade collection!</i>"<br>- xxAntag0nisTxx (MetaCritic) </li><br>
						<li>"<i>Casual players will love the simplicity and the ability to add to the fish-tank-screen-saver dealio, and hardcore tetris fans will appreciate the tournament-level gameplay styling.</i>" - Norm S. (MetaCritic)</li><br>
						<li>"<i>The bottom line, if you&rsquo;re looking to get Tetris on a console, you should grab Tetris Splash.</i>" - <a href="http://www.msxbox-world.com/xbox360/reviews/review/140/Tetris-Splash.html" target="_blank">MSXBOX World</a></li><br>
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