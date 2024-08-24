<?php
$includepath = '_inc';
$dataUrl = "http://localhost/data";
$title = "Jobs";

$jobs = [
	array('href' => '/job/11/flash-mobile-programmer/', 'jobname' => 'Flash/Mobile Programmer'),
	array('href' => '/job/10/unknown-job/', 'jobname' => 'Unknown Job (10th position)'),
	array('href' => '/job/9/web-php-developer/', 'jobname' => 'Web (PHP) Developer'),
	array('href' => '/job/8/senior-web-php-developer/', 'jobname' => 'Senior Web (PHP) Developer'),
	array('href' => '/job/7/system-administrator/', 'jobname' => 'System Administrator'),
	array('href' => '/job/6/vice-president-of-business-development/', 'jobname' => 'Vice President of Business Development'),
	array('href' => '/job/5/customer-service-representative/', 'jobname' => 'Customer Service Representative'),
	array('href' => '/job/4/unknown-job/', 'jobname' => 'Unknown Job (4th position)'),
	array('href' => '/job/3/qa-tester/', 'jobname' => 'QA Tester'),
	array('href' => '/job/2/unknown-job/', 'jobname' => 'Unknown Job (2nd position)'),
	array('href' => '/job/1/unknown-job/', 'jobname' => 'Unknown Job (1st position)'),
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
				<div class="margintop_20px marginleft_5px marginright_5px">
					<h1 class="tetris_game_header">Jobs</h1>
					<br/><br/>
					<p>
						Are you serious about fun? Tetris Online, Inc. is a worldwide leader in social game development with the mission of creating fun games for everyone. To accomplish this mission on a worldwide scale, we need top-notch talent ready to make an impact in the gaming industry. Tetris Online, Inc. offers competitive salary compensation, a generous benefit package, 401(k) and one of the biggest perks of all: the Hawaiian climate. If you feel you are an excellent candidate for any of the positions listed below, email your cover letter and resume/CV to <a href="mailto:jobs@tetrisonline.com">jobs@tetrisonline.com</a>. Make sure that you put the JOB ID number and POSITION in the subject line of your email or your credentials may be discarded. Aloha!
					</p>
					<br/>
					<b>Current Openings:</b>
					<br/><br/>
					<?php
					if (count($jobs) <= 0)
						echo 'There are currently no advertised positions available. Please bookmark this page and check back weekly to see the newest listings. ';
					else {
						foreach ($jobs as $jobitem) {
							echo '<div class="jobitem"><a href="'.$jobitem['href'].'">'.$jobitem['jobname'].'</a></div>
<div class="clear">&nbsp;</div><br/>
					';
						}
					}
					?>

					<br/><br/>

				</div>

				<?php include $includepath . '/_footer.php' ?>
		</div>
		</div>
	</body>
</html>