<?php
spl_autoload_register(function ($class) {
	$file = APP_CORE.$class.'.php';
	if (file_exists($file))
	{
		include $file;
	}
});
spl_autoload_register(function ($class) {
	$file = MVC_CTRL.$class.'.php';
	if (file_exists($file))
	{
		include $file;
	}
});
spl_autoload_register(function ($class) {
	$file = MVC_MODL.$class.'.php';
	if (file_exists($file))
	{
		include $file;
	}
});
?>