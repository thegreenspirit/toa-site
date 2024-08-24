<?php
$includepath = '_inc';
$dataUrl = "http://localhost/data";

// featured game settings
$featuredgameid = "tetris_battle_facebook";
$featuredgameimage = $dataUrl."/images/feature_TB_FB.jpg";
$featuredgamename = "Tetris® Battle";

/**
2011 format: FV, TB, TF, LT, MFU, HTB
Late 2011-Early January 2012 format: FV, TB, TF, MFU, HTB
Late January 2012 format: TB, FV, BL, TF, MFU
February 2012 format: TB, FV, BL, TF, MFU (with latest news section)
Mid-2012 format: TB, FV, BL, TF (with latest news & follow us section)
The rest of site's lifespan format: TB (with follow us section)
*/
$FBGameList = [
	array('id' => 'tetris_battle_facebook', 'name' => 'Tetris® Battle', 'image' => $dataUrl.'/images/game_TB_FB.png'),
	array('id' => 'tetris_friends_facebook', 'name' => 'Tetris® Friends', 'image' => $dataUrl.'/images/game_TF_FB.png'),
	array('id' => 'bubble_pop_battle', 'name' => 'Bubble Pop Battle', 'image' => $dataUrl.'/images/game_BPB_FB.png'),
	array('id' => 'feevo_facebook', 'name' => 'Feevo™', 'image' => $dataUrl.'/images/game_FV_FB.png'),
	array('id' => 'blaze_facebook', 'name' => 'Feevo™ Blaze', 'image' => $dataUrl.'/images/game_BL_FB.png'),
	array('id' => 'lost_trails_facebook', 'name' => 'Lost Trails', 'image' => $dataUrl.'/images/game_LT_FB.png'),
	array('id' => 'monster_fantasy_facebook', 'name' => 'Monster Fantasy', 'image' => $dataUrl.'/images/game_MF_FB.png'),
	array('id' => 'monster_fusion_facebook', 'name' => 'Monster Fusion', 'image' => $dataUrl.'/images/game_MFU_FB.png'),
	array('id' => 'home_team_baseball_facebook', 'name' => 'Home Team Baseball', 'image' => $dataUrl.'/images/game_HTB_FB.png'),
];

$OWGameList = [
	array('id' => 'tetris_friends', 'name' => 'Tetris® Friends Online Games', 'image' => $dataUrl.'/images/game_TF_OW.png'),
];

$XBLAGameList = [
	array('id' => 'tetris_splash_xbla', 'name' => 'Tetris® Splash', 'image' => $dataUrl.'/images/game_TS_XL.png'),
];

$iOSGameList = [
	array('id' => 'feevo_ipad', 'name' => 'Feevo™', 'image' => $dataUrl.'/images/game_FV_IP.png'),
];

$WWGameList = [
	array('id' => 'tetris_party_wiiware', 'name' => 'Tetris® Party', 'image' => $dataUrl.'/images/game_TP_WW.png'),
];

$WiiGameList = [
	array('id' => 'tetris_party_wii', 'name' => 'Tetris® Party Deluxe', 'image' => $dataUrl.'/images/game_TPD_WI.png'),
];

$TDSGameList = [
	array('id' => 'tetris_axis_3ds', 'name' => 'Tetris® Axis', 'image' => $dataUrl.'/images/game_TA_3DS.png'),
];

$DWGameList = [
	array('id' => 'tetris_party_dsi', 'name' => 'Tetris® Party Live', 'image' => $dataUrl.'/images/game_TPL_DW.png'),
];

$DSGameList = [
	array('id' => 'Tetris_Party_Deluxe_DS', 'name' => 'Tetris® Party Deluxe DS', 'image' => $dataUrl.'/images/game_TPD_DS.png'),
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
				<div id="home_featured" class="margintop_40px">
					<a class="home_featured_game margincenter" href="/games/<?php echo $featuredgameid ?>.php">
						<img src="<?php echo $featuredgameimage ?>" alt="<?php echo $featuredgamename ?>" border="0"/>
					</a>
					
					<div id="home_featured_options">
						<a class="button_featured button_featured_fb" class="floatleft" href="http://apps.facebook.com/tetris_battle/?kt_type=partner&amp;kt_st1=tetrisonline" target="_blank"></a>
						<a class="button_featured button_featured_info" href="/games/<?php echo $featuredgameid ?>.php">Info</a>
					</div>
				</div>
				
				<div id="home_game_list" class="margintop_10px">
					<div class="floatleft home_game_list_first_child">
						<h2 class="home_category_header home_facebook_header">Facebook</h2>
						<?php
							foreach ($FBGameList as $FBGame) {
								echo '<a class="button_game button_game_'.$FBGame['id'].'" style="background-image: url('.$FBGame['image'].');" href="/games/'.$FBGame['id'].'.php">'.htmlentities($FBGame['name']).'</a>
';
							}
						?>
					</div>
					<div class="floatleft">
						<h2 class="home_category_header home_online_header">Online</h2>
						<?php
							foreach ($OWGameList as $OWGame) {
								echo '<a class="button_game button_game_'.$OWGame['id'].'" style="background-image: url('.$OWGame['image'].');" href="/games/'.$OWGame['id'].'.php">'.htmlentities($OWGame['name']).'</a>
';
							}
						?>
						<h2 class="home_category_header home_xbla_header">XBox Live Arcade</h2>
						<?php
							foreach ($XBLAGameList as $XBLAGame) {
								echo '<a class="button_game button_game_'.$XBLAGame['id'].'" style="background-image: url('.$XBLAGame['image'].');" href="/games/'.$XBLAGame['id'].'.php">'.htmlentities($XBLAGame['name']).'</a>
';
							}
						?>
						<h2 class="home_category_header home_ios_header">iOS Downloads</h2>
						<?php
							foreach ($iOSGameList as $iOSGame) {
								echo '<a class="button_game button_game_'.$iOSGame['id'].'" style="background-image: url('.$iOSGame['image'].');" href="/games/'.$iOSGame['id'].'.php">'.htmlentities($XBLAGame['name']).'</a>
';
							}
						?>
						<h2 class="home_category_header home_followus_header">Follow Us</h2>
							<a href="http://www.facebook.com/TetrisOnlineInc" target="_blank"><img src="/data/images/follow_us_fb.png" class="noborder"/></a><br/>
							<a href="https://plus.google.com/117788067269473928058" target="_blank"><img src="/data/images/follow_us_gplus.png" class="noborder"/></a><br/>
							<a href="https://twitter.com/#!/tetrisbattle" target="_blank"><img src="/data/images/follow_us_twitter.png" class="noborder"/></a>
					</div>
					<div class="floatleft">
						<h2 class="home_category_header home_wiiware_header">WiiWare</h2>
						<?php
							foreach ($WWGameList as $WWGame) {
								echo '<a class="button_game button_game_'.$WWGame['id'].'" style="background-image: url('.$WWGame['image'].');" href="/games/'.$WWGame['id'].'.php">'.htmlentities($WWGame['name']).'</a>
';
							}
						?>
						<h2 class="home_category_header home_wii_header">Wii</h2>
						<?php
							foreach ($WiiGameList as $WiiGame) {
								echo '<a class="button_game button_game_'.$WiiGame['id'].'" style="background-image: url('.$WiiGame['image'].');" href="/games/'.$WiiGame['id'].'.php">'.htmlentities($WiiGame['name']).'</a>
';
							}
						?>
						<h2 class="home_category_header home_tds_header">Nintendo 3DS</h2>
						<?php
							foreach ($TDSGameList as $TDSGame) {
								echo '<a class="button_game button_game_'.$TDSGame['id'].'" style="background-image: url('.$TDSGame['image'].');" href="/games/'.$TDSGame['id'].'.php">'.htmlentities($TDSGame['name']).'</a>
';
							}
						?>
						<h2 class="home_category_header home_dsi_header">Nintendo DSiWare</h2>
						<?php
							foreach ($DWGameList as $DWGame) {
								echo '<a class="button_game button_game_'.$DWGame['id'].'" style="background-image: url('.$DWGame['image'].');" href="/games/'.$DWGame['id'].'.php">'.htmlentities($TDSGame['name']).'</a>
';
							}
						?>
						<h2 class="home_category_header home_ds_header">Nintendo DS</h2>
						<?php
							foreach ($DSGameList as $DSGame) {
								echo '<a class="button_game button_game_'.$DSGame['id'].'" style="background-image: url('.$DSGame['image'].');" href="/games/'.$DSGame['id'].'.php">'.htmlentities($TDSGame['name']).'</a>
';
							}
						?>
					</div>
					<div class="clear"></div>
				</div>
				<div style="margin-top:10px;">
					<h1 class="tetris_game_header">Latest News</h1>
					<div class="newsitemindex0"><div class="newsindexinner0"><div class="newsindexheader"><b><a style="color:#666666;" href="/news/42/tetris-battle-adds-new-limited-edition-gifts/">Tetris Battle Adds New Limited Edition Gifts</a></b></div><div class="itembodyindex"><p>Chisel out a lasting friendship by sharing free limited-edition Mino and Ghost sets with your buddies in <a href="http://bit.ly/yMu8ao">Tetris Battle</a>! [<a href="/news/42/tetris-battle-adds-new-limited-edition-gifts/">MORE</a>]</p></div></div></div><div class="newsitemindex1"><div class="newsindexinner1"><div class="newsindexheader"><b><a style="color:#666666;" href="/news/40/tetris-battle-marks-its-14-millionth-monthly-user/">Tetris Battle Marks Its 14 Millionth Monthly User</a></b></div><div class="itembodyindex"><p>Facebook users continue to <a href="http://bit.ly/AxYGvd">love Tetris Battle</a>. [<a href="/news/40/tetris-battle-marks-its-14-millionth-monthly-user/">MORE</a>]</p></div></div></div><div class="newsitemindex2"><div class="newsindexinner2"><div class="newsindexheader"><b><a style="color:#666666;" href="/news/39/give-a-rose-from-tetris-battle-to-someone-special/">Give a Rose from Tetris Battle to Someone Special</a></b></div><div class="itembodyindex"><p>A rose by any other name would smell as sweet, but a limited-edition Rose Bomb from <a href="http://bit.ly/xsZtcR">Tetris Battle has no substitute</a>! [<a href="/news/39/give-a-rose-from-tetris-battle-to-someone-special/">MORE</a>]</p></div></div></div><div class="clear">&nbsp;</div><div class="floatright" style="margin-top:5px;"><a href="/news.php">More Tetris Online News &gt;&gt;</a></div><br/>				</div>
				
				<?php include $includepath . '/_footer.php' ?>
		</div>
		</div>
	</body>
</html>