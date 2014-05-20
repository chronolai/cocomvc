<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title><?=$webtitle?></title>
	<link rel="stylesheet" href="<?=WEBROOT?>/css/coco.css" />
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" />

	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
</head>
<body>
	<header>
		<a href="<?=WEBROOT?>/"><h1><?=WEBTITLE?></h1></a>
	</header>

	<?$this->load("_menu.tpl")?>

	<section>	
		<?$this->load()?>
	</section>

	<footer>
		Copyright&copy;2014 ChronoLai, <span id="exec_time"></span><br />
		Languages: 
		<?foreach ($langs as $code => $lang) {?>
		<a href="?lang=<?=$code?>"><?=$lang['locale']?></a>
		<?}?>
	</footer>
	<script>
		$(document).ready(function() {
			$('nav.navbar .collapse a').click(function() {
				$('nav.navbar .navs').slideToggle();
			});
		});
	</script>
</body>
</html>