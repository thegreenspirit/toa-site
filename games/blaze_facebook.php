<?php
$includepath = '../_inc';
$dataUrl = "http://localhost/data";
$title = "Feevo™ Blaze";
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
				<h1 class="tetris_game_header">
			
				Feevo&trade; Blaze
			
		</h1>
				
				<div id="game_banner" style="background-image: url(<?php echo $dataUrl ?>/images/games/feature_BL_FB.jpg)"></div>
				
				<div id="tetris_main_content" class="margintop_20px">
					
			
				<p>
					All you need is 60 seconds a day to experience the frantic fun of <b>Feevo Blaze</b>. The game challenges players to make matches of 3 by moving tiles on a game board. When a match is made, other pieces fall into place, making more matches as tiles cascade onto the game board at a frenzied pace.  If players can make their moves quickly, they’ll earn big point bonuses as well as extra time to compile a huge score.
				</p>
				<p>
					<ul>
						<li><b>Match 3 fun on Facebook!</b></li>
						<li><b>Fast-paced, free-flowing gameplay with an emphasis on speed</b></li>
						<li><b>Casual time commitment: Each game only takes 60 seconds to play</b></li><br>
					</ul>
				</p>
				<p>
					Click to play <a href="http://apps.facebook.com/feevo-blaze/?kt_type=partner&amp;kt_st1=cross_promotion_ad&amp;kt_st2=tetrisonline_com_to_blaze&amp;kt_st3=game_lineup" target="_blank">Feevo Blaze</a>!<br><br>
				</p>
			
							
					<a class="margincenter button_play_now" href="http://apps.facebook.com/feevo-blaze/?kt_type=partner&amp;kt_st1=cross_promotion_ad&amp;kt_st2=tetrisonline_com_to_blaze&amp;kt_st3=game_lineup">Play 
			
				Feevo&trade; Blaze
			
		</a><br/>				</div>
				
				<div id="tetris_side_content" class="marginleft_10px margintop_10px">
										
					<div id="game_images">
						<div id="game_slideshow">
							<img src="<?php echo $dataUrl ?>/images/games/screen_BL_FB_001.jpg" alt=""/><img src="<?php echo $dataUrl ?>/images/games/screen_BL_FB_002.jpg" alt=""/><img src="<?php echo $dataUrl ?>/images/games/screen_BL_FB_003.jpg" alt=""/><img src="<?php echo $dataUrl ?>/images/games/screen_BL_FB_004.jpg" alt=""/><img src="<?php echo $dataUrl ?>/images/games/screen_BL_FB_005.jpg" alt=""/><img src="<?php echo $dataUrl ?>/images/games/screen_BL_FB_006.jpg" alt=""/>						</div>
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
		<td>
							<a class="button_game" style="background-image: url(<?php echo $dataUrl ?>/images/game_FV_FB.png);" href="/games/feevo_facebook.php">
			
				Feevo&trade;
			
		</a>
						  </td><td>
							<a class="button_game" style="background-image: url(<?php echo $dataUrl ?>/images/game_TF_FB.png);" href="/games/tetris_friends_facebook.php">
			
				Tetris&reg; Friends
			
		</a>
						  </td><td>
							<a class="button_game" style="background-image: url(<?php echo $dataUrl ?>/images/game_TPD_WI.png);" href="/games/tetris_party_wii.php">
			
				Tetris&reg; Party Deluxe
			
		</a>
						  </td>	</tr>
</table>				
				<?php include $includepath . '/_footer.php' ?>
			</div>
		</div>
		
		<script type="text/javascript">
			$(document).ready(function() {
				startSlideshow();

							});
		</script>
	</body>
</html>